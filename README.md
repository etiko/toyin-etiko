# Toyin Etiko portfolio

The new static-first portfolio for [toyinetiko.co.uk](https://toyinetiko.co.uk),
built with Astro, TypeScript, and MDX content collections.

## Requirements

- Node.js 22 or newer
- npm 10 or newer

Use `nvm use` to select the version declared in `.nvmrc`.

## Commands

| Command | Purpose |
| --- | --- |
| `npm install` | Install dependencies |
| `npm run dev` | Start the local development server |
| `npm run check` | Run Astro and TypeScript diagnostics |
| `npm run build` | Generate the production site in `dist/` |
| `npm run preview` | Preview the production build locally |

## Content

Case studies are stored in `src/content/work/` as MDX files. Their frontmatter
is validated by `src/content.config.ts`; project images live in
`src/assets/projects/`.

The contact address and core metadata are configured in `src/config.ts`.

## Contact form

`src/pages/contact/index.astro` posts to `/contact.php` (in `public/`, so it's
copied into `dist/` unchanged by the build). It uses PHP's built-in `mail()`
function — no third-party account or API key is required. If the request to
`/contact.php` fails or isn't executed (e.g. in local dev, since Astro's dev
server doesn't run PHP), the form falls back to opening the visitor's email
client with the message pre-filled.

## Deploying to 123-reg

This site is a static export plus one PHP script, so no server-side build
step is needed on the host — just upload the contents of `dist/`.

1. Run `npm run build` locally to generate `dist/`.
2. Log in to the [123-reg control panel](https://www.123-reg.co.uk/) and open
   your hosting package's **File Manager**, or get FTP/SFTP credentials from
   **Hosting → Manage → FTP Accounts**.
3. Confirm the web root (commonly `public_html/` or `httpdocs/`) and that the
   hosting plan has **PHP enabled** (PHP 7.4+, ideally 8.x) — check under
   **Hosting → Manage → PHP Settings**.
4. Upload the entire contents of `dist/` (not the `dist` folder itself, its
   contents) into the web root, overwriting existing files.
5. Confirm `toyinetiko.co.uk` DNS/nameservers point at this hosting package
   (**Domains → Manage → Nameservers/DNS**).
6. For best deliverability of emails sent via `contact.php`, add an SPF TXT
   record authorising 123-reg's mail servers to send as `toyinetiko.co.uk`
   (see **Domains → Manage → DNS Records**) — without this, messages from
   `no-reply@toyinetiko.co.uk` are more likely to be marked as spam.
7. Visit the live site and submit a real test message through `/contact/` to
   confirm delivery to the configured email address.

Repeat steps 1 and 4 for every future deploy.
