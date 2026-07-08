=== Franklin Court Assisted Living ===

Contributors: trilliumhiring, BTizzy
Tags: senior-living, accessibility-ready, custom-colors, custom-menu
Requires at least: 6.0
Tested up to: 6.5
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A custom WordPress theme for Franklin Court Assisted Living in Bristol, RI.
Built for the migration off Wix.

== Description ==

Franklin Court is a small, family-run assisted living community in the
historic Kaiser Mill complex of Bristol, Rhode Island. This theme is a
drop-in replacement for the static Wix site, designed for senior-accessibility
(large base font size, focus styles, high-contrast accent color, large tap
targets) and easy editing by the East Bay Community Development Corp team.

Highlights:

* Static-design parity — the same CSS, the same look, the same copy
* Page templates for Home, About, Life at Franklin Court, Apartments,
  Activities, Family Resources, Contact, Employment, and Tour
* Customizer panel for phone, address, hours, and accent color
* Schema.org AssistedLivingFacility JSON-LD on every page (good for AEO/SEO)
* Translation-ready (text domain `fcalri`)
* 24/7 emergency-contact info in the topbar
* All copy is editable via WP pages, customizer, and template parts

== Installation ==

1. Upload the `fcalri` folder to `/wp-content/themes/`.
2. Activate the theme via **Appearance → Themes**.
3. (Optional) Set a static front page: **Settings → Reading → Your homepage
   displays → A static page → select the page titled "Home"**.
4. Create the following pages (if not already present) and assign the
   matching template from the right-hand Page Attributes panel:
   * About → template "About"
   * Life at Franklin Court → template "Life at Franklin Court"
   * Apartments → template "Apartments"
   * Activities → template "Activities"
   * Family Resources → template "Family Resources"
   * Contact → template "Contact"
   * Employment → template "Employment"
   * Schedule a Tour → template "Schedule a Tour"
5. The theme will fall back to the static navigation list if no menu is
   assigned. To customize, go to **Appearance → Menus**, create a menu,
   and assign it to the "Primary navigation" location.

== Customizer ==

Under **Appearance → Customize → Franklin Court**, you can edit:

* Contact info — phone, address, general email
* Hours of operation — weekday / weekend lines
* Brand colors — accent color (defaults to brick/copper)

== Files ==

* `style.css` — WP-required theme header + WP-specific overrides
* `assets/css/main.css` — full design system (DO NOT EDIT)
* `assets/js/site.js` — site interactions (mobile menu, scroll reveal)
* `assets/images/` — site photography
* `inc/template-functions.php` — helpers (phone, address, hours, staff)
* `inc/walker.php` — custom nav walker with BEM classes
* `inc/customizer.php` — Customizer integration
* `template-parts/` — reusable hero, feature, stats, calendar, quote, CTA

== Changelog ==

= 1.0.0 =
* Initial release. Static-design parity with the Wix preview.
