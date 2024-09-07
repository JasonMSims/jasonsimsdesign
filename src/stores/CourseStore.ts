import type { TimelineItem } from '@/types'

import CourseData from '@/data/courses.json'
import { defineStore } from 'pinia'
import { computed, ref } from 'vue'

export const useCourseStore = defineStore('courses', () => {
  const education = ref<TimelineItem[]>(
    CourseData.map((item) => ({
      ...item,
      endDate: item.endDate ? new Date(item.endDate) : new Date(),
      location: item.location ?? '',
      startDate: new Date(item.startDate),
    }))
  )

  const sortedEducation = computed(() =>
    [...education.value].sort((a: TimelineItem, b: TimelineItem) => a.startDate.getTime() - b.startDate.getTime())
  )

  return { education, sortedEducation }
})
