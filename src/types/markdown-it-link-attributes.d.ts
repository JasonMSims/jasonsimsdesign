declare module 'markdown-it-link-attributes' {
  /**
   * Options accepted by markdown-it-link-attributes.
   *
   * Note there is no `pattern` option: the plugin only narrows which links it
   * touches via `matcher`. A config without a `matcher` applies `attrs` to
   * every link.
   */
  interface LinkAttributesConfig {
    attrs: Record<string, string>
    matcher?: (href: string, config: LinkAttributesConfig) => boolean
  }

  /**
   * Generic over the parser instance so this works with markdown-it and with
   * compatible forks such as the markdown-exit instance unplugin-vue-markdown
   * hands to `markdownItSetup`.
   */
  const markdownItLinkAttributes: <TParser>(md: TParser, configs?: LinkAttributesConfig | LinkAttributesConfig[]) => void

  export default markdownItLinkAttributes
}
