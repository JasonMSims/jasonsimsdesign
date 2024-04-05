import ExperienceData from '@/data/experience.json'
import { defineStore } from 'pinia'
import { computed, ref } from 'vue'

export const useExperienceStore = defineStore('experience', () => {
  interface Experience {
    achievements: string[]
    description: string
    endDate: Date
    organization: string
    startDate: Date
    title: string
  }

  const experience = ref<Experience[]>(
    ExperienceData.map((item) => ({
      ...item,
      endDate: item.endDate ? new Date(item.endDate) : new Date(),
      startDate: new Date(item.startDate),
    }))
  )

  const sortedExperience = computed(() => [...experience.value].sort((a: Experience, b: Experience) => a.startDate.getTime() - b.startDate.getTime()))

  return { experience, sortedExperience }
})
