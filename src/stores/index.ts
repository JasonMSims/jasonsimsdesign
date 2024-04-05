// @index(['./*/index.{js,ts}'], f => `export * from '${f.path.replace(/\/index$/, '')}'`)

// @endindex

// @index('./*.{vue,js,ts}', f => `export { use${f.name} } from '${f.path}${f.ext}'`)
export { useCourseStore } from './CourseStore.ts'
export { useExperienceStore } from './ExperienceStore.ts'
export { useProjectStore } from './ProjectStore.ts'
export { useSkillStore } from './SkillStore.ts'
export { useSocialMediaStore } from './SocialMediaStore.ts'
// @endindex
