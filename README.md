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
