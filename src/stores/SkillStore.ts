import type { Skill } from '@/types'

import SkillData from '@/data/skills.json'
import { defineStore } from 'pinia'
import { ref } from 'vue'

export const useSkillStore = defineStore('skills', () => {
  type Skills = Skill[]

  const skills = ref<Skills>(SkillData)

  return { skills }
})
