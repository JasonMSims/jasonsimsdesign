import type { MarkdownExit } from 'unplugin-vue-markdown/types'

import Attributes from 'markdown-it-attrs'
import LinkAttributes from 'markdown-it-link-attributes'

export const markdownItSetup = (md: MarkdownExit) => {
  md.use(LinkAttributes, {
    attrs: {
      rel: 'noopener',
      target: '_blank',
    },
    // Without a matcher every link is rewritten, which sends in-app links like
    // /resume to a new tab and bypasses the router.
    matcher: (href: string) => /^https?:/.test(href),
  }).use(Attributes, {})
}
