# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/)
and this project adheres to Semantic Versioning.

---

## [1.0.0] - 2026-01-13

### Added

- Initial public release
- Core framework structure
- Routing system
- Configuration loader
- Basic MVC architecture
- MIT license

### Security

- No known security issues in this release

---

## [1.0.1] - 2026-01-15

### Added

- Added `<title>` and `<meta>` description tags to all pages.
- Added an **Overview** link to the navigation for Bids, Events, and News.

### Changed

- Updated internal links from `href="index.html"` to `href="./"` for cleaner routing.
- Renamed files for improved clarity and consistency:
  - `2_admin_nav.php` → `2_nav.php`
  - `admin-login.php` → `login.php`
  - `events-view-list.php` → `events-overview.php`
  - `news-view-list.php` → `news-overview.php`
  - `procurement-view-bids-rfps.php` → `procurement-overview.php`

### Security

- No known security issues in this release
