# Toyin Etiko Website Redesign and Redevelopment Proposal

**Prepared:** 31 July 2026

**Website:** [toyinetiko.co.uk](http://toyinetiko.co.uk/)

## Executive summary

The current website should be replaced with a content-led, static-first
portfolio rather than receiving only a visual reskin. The new website will
position Toyin as a front-end engineer specialising in accessible products,
Angular applications, and scalable design systems.

The redesign will use stronger project storytelling, a distinctive visual
system, clearer calls to action, and a modern technical foundation. Recognised
work for organisations such as AAT, Royal Mail, and RNLI will provide the
primary evidence of experience and capability.

## Objectives

- Communicate a clear and differentiated professional proposition.
- Turn existing projects into compelling, outcome-focused case studies.
- Make it easy for hiring managers, product leaders, and potential clients to
  assess experience and make contact.
- Deliver an accessible, responsive, and high-performing experience.
- Remove the security and maintenance burden of the current WordPress and PHP
  installation.
- Establish a flexible foundation for adding future projects and insights.

## Current website assessment

| Area | Finding |
| --- | --- |
| Positioning | The hero statement is generic and provides no supporting evidence or call to action. |
| User experience | Excessive whitespace, particularly on mobile, pushes meaningful content below the fold. The navigation does not provide clear About or Contact journeys. |
| Content | Tools dominate the story, while case studies are brief and do not explain challenges, decisions, responsibilities, or outcomes. |
| Visual design | Repeated stock imagery, template styling, and limited project visuals make the website feel dated and less distinctive. |
| Conversion | There is no prominent contact route, CV, LinkedIn profile, availability statement, or enquiry form. |
| Technology | The site uses WordPress, Bootstrap, jQuery, Modernizr, and Revolution Slider. Its HTTPS endpoint currently presents an untrusted certificate, and the server advertises end-of-life PHP 7.2. |
| SEO | Metadata is generic, social-sharing information is limited, and indexed content has not been meaningfully updated since 2020. |

## Recommended positioning

> Front-end engineer specialising in accessible Angular products and scalable
> design systems.

Drupal, WordPress, and Magento remain useful supporting experience, but they
should no longer lead the proposition. The website should focus first on the
problems solved, the quality of implementation, and the outcomes achieved.

## Creative direction

### Concept: Precision with personality

The visual identity should feel confident, technical, and human without
following short-lived design trends.

- An editorial grid with purposeful rather than excessive whitespace.
- Strong, responsive typography with clear hierarchy.
- Warm neutral backgrounds with one distinctive teal or cobalt accent.
- Real interface screenshots and project artefacts instead of stock imagery.
- Large, outcome-led project cards with restrained interaction.
- Subtle motion that respects reduced-motion preferences.
- Reusable design tokens and components that demonstrate design-system
  expertise.

## Information architecture

| Page | Purpose |
| --- | --- |
| Home | Present the proposition, credibility, featured work, capabilities, and a strong contact call to action. |
| Work | Provide a curated overview of selected projects. |
| Case study | Explain the challenge, role, constraints, approach, solution, technology, and results for an individual project. |
| About | Tell the professional story and present principles, experience, and qualifications. |
| Contact | Provide an enquiry form, email address, LinkedIn profile, CV, and availability. |

### Proposed homepage flow

1. Hero proposition with "View selected work" and "Contact me" actions.
2. Credibility strip featuring selected organisations.
3. Three featured case studies.
4. Core capabilities: design systems, Angular engineering, accessibility, and
   responsive UI.
5. Working approach and engineering principles.
6. Concise biography and, where available, a testimonial.
7. Final contact call to action.

## Content redevelopment

The initial release should prioritise three flagship stories:

- **AAT:** Creating and scaling the Fabric design system and reusable Angular
  components.
- **Royal Mail:** Delivering modular, accessible front-end components through
  cross-team collaboration.
- **RNLI:** Building an engaging educational game for children.

Each case study should include:

- Project context and audience.
- The challenge and relevant constraints.
- Toyin's role and responsibilities.
- Key technical and design decisions.
- Screenshots, diagrams, or other project artefacts.
- Accessibility and quality considerations.
- Technology used.
- Measurable outcomes or credible qualitative impact.
- A testimonial where permission is available.

Older projects such as Recruiter and Brainy Nation can be presented in an
"Earlier work" archive. Recent confidential work can be anonymised while still
describing the problem, responsibilities, and impact.

Qualifications should be presented as accessible text within the About page
rather than certificate images in modal windows.

## Proposed hero copy

> **Front-end engineering for products that need to scale.**
>
> I build accessible Angular applications and reusable design systems that
> help teams deliver consistent experiences.

**Primary action:** View selected work

**Secondary action:** Contact me

## Recommended technology stack

| Layer | Technology | Purpose |
| --- | --- | --- |
| Framework | Astro with TypeScript | Produce fast, static-first pages with minimal client-side JavaScript. |
| Styling | Scoped modern CSS, custom properties, and design tokens | Create a maintainable visual system without a runtime styling dependency. |
| Content | Astro Content Collections with MDX | Store validated case studies as easy-to-edit content files while supporting reusable components. |
| Hosting | Cloudflare Pages | Provide global delivery, preview deployments, and managed HTTPS. |
| Contact | Cloudflare Worker, Turnstile, and a transactional email provider | Process enquiries securely without operating a traditional server. |
| Images | Astro image optimisation | Generate responsive AVIF and WebP assets. |
| Testing | Playwright, axe-core, and Lighthouse CI | Cover critical journeys, accessibility, and quality targets. |
| Analytics | Cloudflare Web Analytics or Plausible | Measure engagement without intrusive tracking. |
| Delivery | Repository-based continuous deployment | Build and deploy reviewed changes automatically. |

No database, WordPress installation, PHP runtime, Bootstrap, or jQuery will be
required.

If demonstrating Angular through the website's source code is a strategic
priority, the same experience can instead use the current supported Angular
release with prerendering, standalone components, and signals. Astro remains
the recommended option for a predominantly static portfolio because it is
leaner and requires less maintenance.

## Accessibility, performance, and SEO

The completed website should meet the following targets:

- WCAG 2.2 Level AA across all core pages and interactions.
- Full keyboard operation with visible focus states.
- Correct heading structure, landmarks, labels, and alternative text.
- Reduced-motion support and sufficient colour contrast.
- Mobile Core Web Vitals targets of LCP below 2.5 seconds, INP below 200
  milliseconds, and CLS below 0.1 at the 75th percentile.
- Lighthouse targets of at least 90 for mobile performance and 95 for
  accessibility, best practices, and SEO on representative pages.
- Unique titles, descriptions, canonical URLs, and social-sharing images.
- Person, ProfilePage, and CreativeWork structured data.
- A generated XML sitemap and correctly configured robots file.
- Permanent redirects from existing `/portfolio/...` URLs.
- Valid HTTPS with no mixed content or broken internal links.

## Scope and deliverables

- Discovery and positioning workshop.
- Content audit and recommended messaging structure.
- Sitemap and responsive wireframes.
- High-fidelity desktop and mobile designs.
- Reusable design tokens and component library.
- Responsive website implementation.
- Contact form and conversion tracking.
- Migration and editorial improvement of up to five case studies.
- Accessibility, browser, responsive, and performance quality assurance.
- Search metadata, structured data, sitemap, and legacy redirects.
- Production deployment, domain configuration, and analytics setup.
- Handover documentation and 30 days of defect support after launch.

## Delivery plan

| Phase | Duration |
| --- | ---: |
| Discovery, positioning, and content audit | 1 week |
| Sitemap, wireframes, and copy structure | 1 week |
| Visual design and component system | 1-2 weeks |
| Development and content migration | 2-3 weeks |
| Accessibility, browser QA, and launch | 1 week |
| **Estimated total** | **6-8 weeks** |

The schedule assumes project assets and consolidated feedback are supplied
without significant delay.

## Indicative investment

The recommended multi-page portfolio is estimated at **GBP 6,500-9,500**,
excluding third-party costs and VAT where applicable. The final cost will
depend on content readiness, the number of case studies, and whether custom
illustration, photography, or extensive copywriting is required.

The estimate includes five case studies, responsive design and development,
content migration, SEO foundations, accessibility testing, production launch,
and 30 days of defect support.

A lean single-page version containing three case studies would be approximately
**GBP 3,500-5,000**, but it would provide less depth for project storytelling
and organic search visibility.

## Immediate action

The current website's untrusted TLS certificate should be replaced immediately,
and all HTTP traffic should be redirected to HTTPS. The existing WordPress and
PHP installation should remain backed up and maintained until the replacement
website has been launched and its legacy URLs have been redirected.
