import Attributes from 'markdown-it-attrs'
import LinkAttributes from 'markdown-it-link-attributes'

export const markdownItSetup = (md) => {
  md.use(LinkAttributes, {
    attrs: {
      rel: 'noopener',
      target: '_blank',
    },
    pattern: /^https?:/,
  }).use(Attributes, {})
}
