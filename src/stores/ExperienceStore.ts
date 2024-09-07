import type { TimelineItem } from '@/types'

import ExperienceData from '@/data/experience.json'
import { defineStore } from 'pinia'
import { computed, ref } from 'vue'

export const useExperienceStore = defineStore('experience', () => {
  const experience = ref<TimelineItem[]>(
    ExperienceData.map((item) => ({
      ...item,
      endDate: item.endDate ? new Date(item.endDate) : new Date(),
      startDate: new Date(item.startDate),
    }))
  )

  const sortedExperience = computed(() =>
    [...experience.value].sort((a: TimelineItem, b: TimelineItem) => b.startDate.getTime() - a.startDate.getTime())
  )

  return { experience, sortedExperience }
})
