import { defineCollection } from 'astro:content';
import { glob } from 'astro/loaders';
import { z } from 'astro/zod';

const work = defineCollection({
	loader: glob({ base: './src/content/work', pattern: '**/*.{md,mdx}' }),
	schema: ({ image }) =>
		z.object({
			title: z.string(),
			client: z.string(),
			discipline: z.string(),
			summary: z.string(),
			role: z.string(),
			engagement: z.string(),
			order: z.number().int().positive(),
			featured: z.boolean().default(true),
			accent: z.enum(['lavender', 'peach', 'mint', 'sky', 'rose']),
			image: image(),
			imageAlt: z.string(),
			leadVideo: z
				.object({
					provider: z.literal('youtube'),
					id: z.string().regex(/^[A-Za-z0-9_-]{11}$/),
					title: z.string(),
					startAt: z.number().int().nonnegative().optional(),
				})
				.optional(),
			gallery: z
				.array(
					z.object({
						src: image(),
						alt: z.string(),
						caption: z.string(),
					}),
				)
				.min(2),
			devicePreview: z
				.object({
					desktop: image(),
					desktopAlt: z.string(),
					mobile: image().optional(),
					mobileAlt: z.string().optional(),
					tablet: image().optional(),
					tabletAlt: z.string().optional(),
				})
				.optional(),
			tags: z.array(z.string()).min(1),
		}),
});

export const collections = { work };
