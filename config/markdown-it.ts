import type { MarkdownExit } from 'unplugin-vue-markdown/types'

import Attributes from 'markdown-it-attrs'
import LinkAttributes from 'markdown-it-link-attributes'

export const markdownItSetup = (md: MarkdownExit) => {
  md.use(LinkAttributes, {
    attrs: {
      rel: 'noopener',
      target: '_blank',
    },
  }).use(Attributes, {})
}
