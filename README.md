# Franklin Court Assisted Living — Modern Website

A complete modernization of [fcalri.com](https://fcalri.com), originally built on Wix. Built in one session (July 2026) with senior-friendly UX, warm New England heritage aesthetics, and only the original site's images.

**Live:** https://btizzy.github.io/fcalri-site/

## ⚖️ License

**Source code** (HTML, CSS, JavaScript, PHP templates, theme structure) is licensed under the **GNU Affero General Public License v3.0** — see [LICENSE](./LICENSE). Anyone forking or deploying a modified version must publish their changes under the same license (AGPL §13 covers network deployment).

**Photographs** in `/images/` and `/wordpress-theme/assets/images/` are **NOT** covered by the AGPL. They are the property of **East Bay Community Development Corp. (EBCDC)**, the operator of Franklin Court, and are used with permission solely to present the Franklin Court website. They may not be reused in other projects without EBCDC's written consent.

Contact: ryan@trilliumhiring.com

---

## What's in here

```
fcalri-site/
├── index.html              ← Home (hero, mission, services, calendar, stats, CTA)
├── about.html              ← About + team directory
├── life-at.html            ← What life at Franklin Court looks like
├── apartments.html         ← 3 floor plans with SVGs
├── activities.html         ← This week + 6-pillar programming model
├── family-resources.html   ← FAQs, independent vs. assisted, signs-to-consider
├── employment.html         ← Open positions + employee quote
├── contact.html            ← Staff directory + hours + form + map
├── tour.html               ← Tour-scheduling flow
├── privacy.html            ← Privacy policy
├── terms.html              ← Accessibility statement (WCAG 2.2 AA)
│
├── css/main.css            ← Full design system (960+ lines)
├── js/site.js              ← Mobile menu, scroll reveals, parallax
├── images/                 ← 13 hero/feature images (cropped from their site)
│
└── wordpress-theme/        ← Drop-in WP theme (mirror of static design)
    ├── style.css           ← WP theme header
    ├── functions.php       ← setup, enqueue, customizer, JSON-LD
    ├── header.php / footer.php
    ├── front-page.php      ← 11 home blocks
    ├── page-{about,life-at,apartments,activities,family-resources,contact,employment,tour}.php
    ├── inc/
    │   ├── customizer.php        ← phone/address/hours/accent panel
    │   ├── template-functions.php ← staff directory, week calendar, helpers
    │   └── walker.php            ← BEM nav walker
    ├── template-parts/      ← hero, feature-block, stats-strip, week-calendar, quote, cta-band, staff-card
    ├── assets/css/main.css  ← byte-identical to /css/main.css
    ├── assets/js/site.js
    ├── assets/images/
    ├── screenshot.png
    └── readme.txt
```

## Design system

| Token | Value |
|---|---|
| Display font | Fraunces (serif) |
| Body font | Source Sans 3 (humanist sans) |
| Accent font | JetBrains Mono (numeric/meta) |
| Primary ink | `#1A2530` (deep harbor navy) |
| Secondary ink | `#3D4B5A` (slate) |
| Accent | `#A8553A` (burnished copper / brick) |
| Cream | `#F5EFE2` |
| Paper | `#FAF7F0` |
| Body size | 18px minimum (1.125rem) |
| Tap targets | 44px+ minimum |

**Color philosophy:** derived from the actual brick, courtyard, wood, and sky tones in their cropped photographs. No stock, no Unsplash — only photos from the current Wix site.

## Senior-focused UX

- All body text 18px+ (1.125rem)
- Phone number and hours above the fold on every page
- WCAG 2.2 AA color contrast across text and interactive elements
- Plain language — no jargon, no medical language
- Skip-link + screen-reader-text class for assistive tech
- Generous whitespace; large tap targets; visible focus states
- High-contrast dark navy primary buttons (not the medical-green trope)

## WordPress theme

The `wordpress-theme/` directory is a complete, drop-in WordPress theme. To install:

1. Zip: `cd wordpress-theme && zip -r ../fcalri-theme.zip .`
2. WP Admin → Appearance → Themes → Add New → Upload → choose zip
3. Activate "Franklin Court Assisted Living"
4. Optional: customize phone/address/hours/accent via Appearance → Customize

The static site at the repo root and the WP theme share the **same** design system. The CSS in `wordpress-theme/assets/css/main.css` is byte-identical to the static `css/main.css`. The WP theme preserves 100% of the static design — word-for-word copy where it makes sense, identical imagery.

**Schema.org AssistedLivingFacility JSON-LD** is auto-injected into every page `<head>` for SEO. The customizer lets EBCDC edit phone, address, hours, and accent color from the WP admin without touching code.

## Built on behalf of

Franklin Court Assisted Living · Operated by East Bay Community Development Corp · 180 Franklin Street, Bristol RI 02809

Designed and built by Trillium Hiring for WG talent / Bristol RI.
