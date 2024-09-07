import { Achievement } from '@/types'

export interface TimelineItem {
  achievements?: Achievement[]
  courseLink?: string
  courseName?: string
  description?: string
  endDate: Date
  experienceLevel?: string
  formatType?: string
  location?: string
  organization: string
  startDate: Date
  title: string
  tools?: string[]
  url?: string
}
