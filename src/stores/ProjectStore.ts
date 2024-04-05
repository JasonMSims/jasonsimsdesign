import ProjectData from '@/data/projects.json'
import { defineStore } from 'pinia'
import { computed, ref } from 'vue'

export const useProjectStore = defineStore('projects', () => {
  interface Project {
    category: string
    client: string
    description: string
    gitUrl: string
    id: number
    imgUrl: string
    previewUrl: string
    title: string
  }
  const projectFilter = ref<string>('All')

  const projects = ref<Project[]>(ProjectData)

  const filteredProjects = computed(() =>
    projectFilter.value === 'All' ? projects.value : projects.value.filter((project: Project) => project.category === projectFilter.value)
  )

  const sortedProjects = computed(() => [...filteredProjects.value].sort((a: Project, b: Project) => a.id - b.id))

  const projectCategories = computed(() => {
    return new Set(['All', ...projects.value.map((project: Project) => project.category)].sort((a, b) => a.localeCompare(b)))
  })

  const handleFilterChange = (idx: number) => {
    projectFilter.value = [...projectCategories.value][idx]
  }

  return { handleFilterChange, projectCategories, projectFilter, projects: sortedProjects }
})
