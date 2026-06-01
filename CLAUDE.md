# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this is

`trafficdesign.pl` v2 — the studio's portfolio/blog website built on **Kirby 2.5.13** (a flat-file PHP CMS; no database). Front-end assets are bundled with **Parcel 2** from `src/` into `assets/bundle/`. The site is bilingual (Polish default at `/`, English at `/en`).

## Commands

```bash
# Front-end asset pipeline (Parcel) — the only build tooling in this repo
npm run start    # watch + rebuild src/main.js → assets/bundle/ (use while developing)
npm run build    # one-off production bundle

# Lint (no npm script — invoke eslint directly)
npx eslint src/main.js
```

There is **no test suite** and no PHP build step. The PHP side runs on any PHP server with mod_rewrite; the bundled `assets/bundle/` output is what the site loads, so re-run `npm run build` after touching anything in `src/`.

## Architecture

Kirby 2 splits cleanly into the CMS core (vendored, do not edit) and the site layer (what you edit):

- **`kirby/`** and **`panel/`** — vendored Kirby 2.5.13 core and admin panel. Treat as third-party; never hand-edit. The deleted `panel/assets/js/dist/*.min.js` in git status are vendor artifacts.
- **`site/`** — the actual application:
  - `templates/<name>.php` — one per page type (`home`, `about`, `project`/`projects`, `work`/`works`, `post`/`posts`, `update`/`updates`, `offer`, `contact`). A page's template is chosen by its content file name.
  - `controllers/<name>.php` — return a closure `function($site, $pages, $page) { return [...]; }` that prepares variables (pagination, filtered collections) for the matching template. Only list/index pages have controllers.
  - `snippets/` — reusable view partials pulled in with `snippet('name')` (e.g. `header`, `footer`, `topbar`, `menu`, `mobilenav`, `pagination`).
  - `blueprints/<name>.yml` — panel form definitions (fields, structure) for each page type.
  - `plugins/pages-methods.php` — registers the custom `->onlyTranslated()` collection method used throughout controllers to hide pages lacking a translation in the active language.
  - `languages/{en,pl}.yml` — UI translation strings.
- **`src/`** — Parcel source, entry `src/main.js`:
  - `main.js` — all front-end JS: scroll/resize-driven topbar theming, MicroModal mobile menu, Splide carousels (`.splide`, used on the `offer` template), and lightgallery image galleries (`#lightgallery`).
  - `styles/main.scss` — single SCSS entry that `@import`s everything in dependency order: `vendor/` → `fonts` → `config` → `mixins/` → `animations/` → `components/` → `partials/` → `layouts/`. The `layouts/` files map 1:1 to templates; `components/`/`partials/` are shared.
- **`assets/bundle/`** — Parcel output, git-ignored, loaded by `site/snippets/header.php` via `css()`/`js()`. Regenerate; don't edit.
- **`content/`**, **`site/accounts/`**, **`assets/avatars/`**, **`thumbs/`**, **`site/cache/`** — runtime/user data, all git-ignored.

## Conventions

- **i18n is load-bearing.** Languages are configured in `site/config/config.php` (`pl` is default and lives at `/`, `en` at `/en`). When listing pages in a controller, chain `->onlyTranslated()` so untranslated pages don't leak into the other language. URL-level language redirects live in `.htaccess` (see commit `Fix /pl redirects`).
- **`site/config/config.php` is git-ignored** (contains the Kirby license key). It won't show in diffs — edit it directly when changing language, debug, or cache settings.
- Kirby 2 uses the old `c::set(...)` config API and `$page->field()->kirbytext()/->html()/->int()` field methods — not the Kirby 3+ syntax. Match existing template/controller style.
