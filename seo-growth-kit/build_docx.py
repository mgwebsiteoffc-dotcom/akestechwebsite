#!/usr/bin/env python3
"""Compile the AKESTECH SEO/AEO Growth Kit markdown files into one Word document."""
import os, re
from docx import Document
from docx.shared import Pt, Inches, RGBColor, Cm
from docx.enum.text import WD_ALIGN_PARAGRAPH
from docx.enum.table import WD_TABLE_ALIGNMENT
from docx.oxml.ns import qn
from docx.oxml import OxmlElement

KIT = os.path.dirname(os.path.abspath(__file__))
OUT = os.path.join(KIT, "AKESTECH-SEO-AEO-Growth-Kit.docx")

NAVY = RGBColor(0x1F, 0x33, 0x64)
ACCENT = RGBColor(0x0B, 0x6E, 0x6E)
GRAY = RGBColor(0x59, 0x59, 0x59)
LIGHT = "EDF2F8"   # header shading
BOX = "F5F7FA"

doc = Document()

# ---------- base styles ----------
st = doc.styles["Normal"]
st.font.name = "Calibri"; st.font.size = Pt(10.5)
st.paragraph_format.space_after = Pt(6)
st.paragraph_format.line_spacing = 1.15

for name, size, color, bold in (("Heading 1", 17, NAVY, True), ("Heading 2", 13.5, NAVY, True),
                                ("Heading 3", 11.5, ACCENT, True), ("Heading 4", 10.5, GRAY, True)):
    h = doc.styles[name]
    h.font.name = "Calibri"; h.font.size = Pt(size); h.font.color.rgb = color; h.font.bold = bold
    h.paragraph_format.space_before = Pt(12 if name != "Heading 1" else 18)
    h.paragraph_format.space_after = Pt(5)
    h.paragraph_format.keep_with_next = True

sec = doc.sections[0]
sec.page_width, sec.page_height = Cm(21.0), Cm(29.7)
sec.left_margin = sec.right_margin = Cm(2.0)
sec.top_margin, sec.bottom_margin = Cm(2.0), Cm(1.8)

# ---------- helpers ----------
def add_footer_pagenum():
    p = sec.footer.paragraphs[0]; p.alignment = WD_ALIGN_PARAGRAPH.CENTER
    r = p.add_run("AKESTECH — SEO/AEO Growth Kit  ·  Page "); r.font.size = Pt(8); r.font.color.rgb = GRAY
    fld = OxmlElement("w:fldSimple"); fld.set(qn("w:instr"), "PAGE")
    p._p.append(fld)

def shade(cell, hexcolor):
    tcPr = cell._tc.get_or_add_tcPr()
    sh = OxmlElement("w:shd"); sh.set(qn("w:val"), "clear"); sh.set(qn("w:fill"), hexcolor)
    tcPr.append(sh)

def para_shade(p, hexcolor):
    pPr = p._p.get_or_add_pPr()
    sh = OxmlElement("w:shd"); sh.set(qn("w:val"), "clear"); sh.set(qn("w:fill"), hexcolor)
    pPr.append(sh)

INLINE = re.compile(r"(\*\*.+?\*\*|\*[^*\n]+?\*|`[^`]+?`|\[[^\]]+?\]\([^)\s]+?\)|~~.+?~~)")

def add_runs(p, text, base_bold=False, size=None, color=None):
    for tok in INLINE.split(text):
        if not tok: continue
        bold, ital, code = base_bold, False, False
        t = tok
        if tok.startswith("**") and tok.endswith("**") and len(tok) > 4: t, bold = tok[2:-2], True
        elif tok.startswith("*") and tok.endswith("*") and len(tok) > 2: t, ital = tok[1:-1], True
        elif tok.startswith("`") and tok.endswith("`") and len(tok) > 2: t, code = tok[1:-1], True
        m = re.match(r"^\[([^\]]+)\]\(([^)\s]+)\)$", t)
        if m: t = m.group(1)
        t = t.replace("\\|", "|")
        r = p.add_run(t)
        r.bold, r.italic = bold, ital
        if code:
            r.font.name = "Consolas"; r.font.size = Pt((size or 10.5) - 0.5)
        elif size: r.font.size = Pt(size)
        if color: r.font.color.rgb = color

def add_table(rows):
    header = [c.strip() for c in rows[0].strip().strip("|").split("|")]
    body = []
    for raw in rows[2:]:
        cells = [c.strip() for c in raw.strip().strip("|").split("|")]
        while len(cells) < len(header): cells.append("")
        body.append(cells[:len(header)])
    tbl = doc.add_table(rows=1, cols=len(header))
    tbl.style = "Table Grid"; tbl.alignment = WD_TABLE_ALIGNMENT.CENTER
    tbl.autofit = True
    hdr = tbl.rows[0].cells
    for i, htext in enumerate(header):
        hdr[i].text = ""
        p = hdr[i].paragraphs[0]; p.paragraph_format.space_after = Pt(2)
        add_runs(p, htext.replace("**", ""), base_bold=True, size=9, color=RGBColor(0xFF, 0xFF, 0xFF))
        shade(hdr[i], "1F3364" if i == 0 or True else LIGHT)
    for ri, cells in enumerate(body):
        rc = tbl.add_row().cells
        for i, c in enumerate(cells):
            rc[i].text = ""
            p = rc[i].paragraphs[0]; p.paragraph_format.space_after = Pt(2)
            add_runs(p, c, size=9)
            if ri % 2 == 1: shade(rc[i], BOX)
    doc.add_paragraph().paragraph_format.space_after = Pt(2)

def render_md(path, part_heading=None, page_break=True, demote=0):
    lines = open(path, encoding="utf-8").read().splitlines()
    i, n = 0, len(lines)
    if part_heading:
        if page_break: doc.add_page_break()
        h = doc.add_heading(part_heading, level=1)
    while i < n:
        line = lines[i]
        s = line.strip()
        if s == "" or s == "---":
            i += 1; continue
        # code fence
        if s.startswith("```"):
            i += 1; buf = []
            while i < n and not lines[i].strip().startswith("```"):
                buf.append(lines[i]); i += 1
            i += 1
            for bl in buf:
                p = doc.add_paragraph(); p.paragraph_format.space_after = Pt(0)
                para_shade(p, BOX)
                r = p.add_run(bl); r.font.name = "Consolas"; r.font.size = Pt(8.5)
            continue
        # tables
        if s.startswith("|") and i + 1 < n and re.match(r"^\|[\s:|-]+\|$", lines[i+1].strip()):
            tbl_lines = [lines[i], lines[i+1]]
            j = i + 2
            while j < n and lines[j].strip().startswith("|"):
                tbl_lines.append(lines[j]); j += 1
            add_table(tbl_lines); i = j; continue
        # headings
        m = re.match(r"^(#{1,6})\s+(.*)$", s)
        if m:
            lvl = min(len(m.group(1)) + demote, 4)
            txt = m.group(2).replace("**", "").replace("`", "")
            doc.add_heading(txt, level=max(lvl, 1) if demote == 0 else lvl)
            i += 1; continue
        # blockquote
        if s.startswith(">"):
            buf = []
            while i < n and lines[i].strip().startswith(">"):
                buf.append(lines[i].strip().lstrip(">").strip()); i += 1
            p = doc.add_paragraph(); p.paragraph_format.left_indent = Inches(0.3)
            para_shade(p, BOX)
            add_runs(p, " ".join(b for b in buf if b), color=GRAY)
            continue
        # lists
        mb = re.match(r"^(\s*)[-*]\s+(.*)$", line)
        mn = re.match(r"^(\s*)(\d+)[.)]\s+(.*)$", line)
        if mb or mn:
            indent, items = 0, []
            kind = "b" if mb else "n"
            while i < n:
                mm = re.match(r"^(\s*)[-*]\s+(.*)$", lines[i])
                nn = re.match(r"^(\s*)(\d+)[.)]\s+(.*)$", lines[i])
                if mm:
                    indent = 1 if len(mm.group(1)) >= 2 else 0; items.append((indent, mm.group(2), "b"))
                elif nn:
                    indent = 1 if len(nn.group(1)) >= 2 else 0; items.append((indent, nn.group(3), "n"))
                elif lines[i].strip() == "":
                    nxt = lines[i+1] if i+1 < n else ""
                    if re.match(r"^\s*[-*]\s+", nxt) or re.match(r"^\s*\d+[.)]\s+", nxt): i += 1; continue
                    break
                else: break
                i += 1
            for indent, txt, k in items:
                p = doc.add_paragraph(style="List Bullet" if k == "b" else "List Number")
                p.paragraph_format.left_indent = Inches(0.28 + 0.25 * indent)
                p.paragraph_format.space_after = Pt(2)
                add_runs(p, txt)
            continue
        # checkbox lines / plain paragraphs
        p = doc.add_paragraph()
        if s.startswith("   ") or line.startswith("   "):
            p.paragraph_format.left_indent = Inches(0.25)
        add_runs(p, s)
        i += 1

# ---------- cover page ----------
for _ in range(5): doc.add_paragraph()
p = doc.add_paragraph(); p.alignment = WD_ALIGN_PARAGRAPH.CENTER
r = p.add_run("AKESTECH"); r.font.size = Pt(40); r.bold = True; r.font.color.rgb = NAVY
p = doc.add_paragraph(); p.alignment = WD_ALIGN_PARAGRAPH.CENTER
r = p.add_run("Build. Automate. Grow."); r.font.size = Pt(12); r.italic = True; r.font.color.rgb = ACCENT
doc.add_paragraph()
p = doc.add_paragraph(); p.alignment = WD_ALIGN_PARAGRAPH.CENTER
r = p.add_run("SEO + AEO GROWTH KIT"); r.font.size = Pt(26); r.bold = True
p = doc.add_paragraph(); p.alignment = WD_ALIGN_PARAGRAPH.CENTER
r = p.add_run("Complete Audit · Keyword Research · 30 Blogs · AEO/GEO Strategy\nGoogle Business Profile · Instagram · Local SEO · 90-Day Roadmap · KPI Dashboard")
r.font.size = Pt(12); r.font.color.rgb = GRAY
doc.add_paragraph()
meta = doc.add_table(rows=4, cols=2); meta.style = "Table Grid"; meta.alignment = WD_TABLE_ALIGNMENT.CENTER
for ri, (k, v) in enumerate((("Website", "akestech.com (AKESTECH — Akestech Infotech Pvt. Ltd.)"),
                             ("Markets", "Lucknow + Delhi NCR · India D2C/Ecommerce"),
                             ("Prepared on", "10 September 2026"),
                             ("Contents", "Full audit, 72-keyword database, competitor analysis, 30 completed blogs, internal-linking map, AEO/GEO strategy, GBP plan, Instagram plan, Local SEO plan, 90-day roadmap, KPI dashboard"))):
    c0, c1 = meta.rows[ri].cells
    c0.text = ""; add_runs(c0.paragraphs[0], k, base_bold=True, size=10); shade(c0, LIGHT)
    c1.text = ""; add_runs(c1.paragraphs[0], v, size=10)
doc.add_paragraph()
p = doc.add_paragraph(); p.alignment = WD_ALIGN_PARAGRAPH.CENTER
r = p.add_run("Data note: analytics, Search Console, Google Business Profile, Instagram Insights and backlink tools were not available at audit time. Estimated figures are labelled; current rankings are shown as n/a pending Search Console connection. See Section 14 (Data-Gap Register).")
r.font.size = Pt(8.5); r.italic = True; r.font.color.rgb = GRAY

# ---------- TOC ----------
doc.add_page_break()
doc.add_heading("Table of Contents", level=1)
p = doc.add_paragraph()
fld = OxmlElement("w:fldSimple"); fld.set(qn("w:instr"), r'TOC \o "1-3" \h \z \u')
run = OxmlElement("w:r"); t = OxmlElement("w:t")
t.text = "Right-click and choose “Update Field” in Word to build the table of contents."
run.append(t); fld.append(run); p._p.append(fld)
doc.add_paragraph()
toc_items = [
    ("PART 1 — Consolidated Growth Report", "FINAL-REPORT.md", "FINAL REPORT — Consolidated SEO/AEO Growth Report"),
    ("PART 2 — Executive Summary & Health Score", "01-executive-summary.md", None),
    ("PART 3 — SEO Health Audit (51/100)", "02-seo-health-audit.md", None),
    ("PART 4 — Keyword Database", "03-keyword-database.md", None),
    ("PART 5 — Rankings & AEO Visibility Report", "04-rankings-and-aeo-visibility.md", None),
    ("PART 6 — Competitor Analysis & Content Gaps", "05-competitor-analysis.md", None),
    ("PART 7 — The 30-Blog Strategy", "06-blog-plan-30.md", None),
    ("PART 8 — Internal Linking Map", "07-internal-linking-map.md", None),
    ("PART 9 — AEO/GEO Strategy", "08-aeo-geo-strategy.md", None),
    ("PART 10 — Google Business Profile Strategy", "09-gbp-strategy.md", None),
    ("PART 11 — Instagram Strategy", "10-instagram-strategy.md", None),
    ("PART 12 — Local SEO Strategy", "11-local-seo-strategy.md", None),
    ("PART 13 — 90-Day Implementation Roadmap", "12-90-day-roadmap.md", None),
    ("PART 14 — KPI Dashboard", "13-kpi-dashboard.md", None),
    ("PART 15 — Quality Control & Data-Gap Register", "14-quality-control-and-data-gaps.md", None),
]
for label, _, _ in toc_items:
    p = doc.add_paragraph(); p.paragraph_format.space_after = Pt(3)
    r = p.add_run(label); r.font.size = Pt(11); r.bold = True; r.font.color.rgb = NAVY
p = doc.add_paragraph(); p.paragraph_format.space_before = Pt(8)
r = p.add_run("PART 16 — The 30 Completed Blogs"); r.font.size = Pt(11); r.bold = True; r.font.color.rgb = NAVY

# ---------- render parts ----------
for label, fname, part in toc_items:
    render_md(os.path.join(KIT, fname), part_heading=label if label.startswith("PART 1 —") else label)

# ---------- blogs ----------
blog_files = sorted(f for f in os.listdir(os.path.join(KIT, "blogs")) if f.endswith(".md"))
num_re = re.compile(r"^blog-(\d+)-(.+)\.md$")
doc.add_page_break()
doc.add_heading("PART 16 — The 30 Completed Blogs", level=1)
p = doc.add_paragraph()
add_runs(p, "Each blog below is publish-ready: SEO metadata (title, meta description, slug, keywords, schema, image brief), the full article with direct-answer openings, tables, FAQs and CTAs. Internal links execute per the map in Part 8.", color=GRAY)
for f in blog_files:
    m = num_re.match(f)
    title = ""
    with open(os.path.join(KIT, "blogs", f), encoding="utf-8") as bf:
        for bl in bf:
            if bl.startswith("# "):
                title = bl[2:].strip()
                title = re.sub(r"^BLOG\s*\d+\s*[—–-]\s*", "", title)
                break
    label = f"Blog {int(m.group(1)):02d} — {title}"
    render_md(os.path.join(KIT, "blogs", f), part_heading=label, demote=1)

add_footer_pagenum()
doc.save(OUT)
print("Saved:", OUT, os.path.getsize(OUT)//1024, "KB")
