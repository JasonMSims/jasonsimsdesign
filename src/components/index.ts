// @index(['./*/index.{js,ts}'], f => `export * from '${f.path.replace(/\/index$/, '')}'`)
export * from './elements'
export * from './forms'
// @endindex

// @index('./*.{vue,js,ts}', f => `export { default as ${f.name} } from '${f.path}${f.ext}'`)
export { default as AboutSection } from './AboutSection.vue'
export { default as ContactSection } from './ContactSection.vue'
export { default as FooterSection } from './FooterSection.vue'
export { default as HeroSection } from './HeroSection.vue'
export { default as NavbarSection } from './NavbarSection.vue'
export { default as ProjectsSection } from './ProjectsSection.vue'
// @endindex
