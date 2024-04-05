import MarkdownIt from 'markdown-it'
import markdownItAttrs from 'markdown-it-attrs'
import mila from 'markdown-it-link-attributes'

export default function markdownItSetup(md: MarkdownIt) {
  md.use(mila, {
    attrs: {
      rel: 'noopener',
      target: '_blank',
    },
    pattern: /^https?:/,
  }).use(markdownItAttrs, {})
}
