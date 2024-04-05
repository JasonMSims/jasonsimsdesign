import CourseData from '@/data/courses.json'
import { defineStore } from 'pinia'
import { computed, ref } from 'vue'

export const useCourseStore = defineStore('courses', () => {
  interface Course {
    achievements: string[]
    description: string
    endDate: Date
    organization: string
    startDate: Date
    title: string
  }

  const education = ref<Course[]>(
    CourseData.map((item) => ({
      ...item,
      endDate: item.endDate ? new Date(item.endDate) : new Date(),
      startDate: new Date(item.startDate),
    }))
  )

  const sortedEducation = computed(() => [...education.value].sort((a: Course, b: Course) => a.startDate.getTime() - b.startDate.getTime()))

  return { education, sortedEducation }
})
