import GithubLogo from '@/assets/images/github.svg'
import LinkedinLogo from '@/assets/images/linkedin.svg'
import { defineStore } from 'pinia'
import { ref, shallowRef } from 'vue'

export const useSocialMediaStore = defineStore('socialMedia', () => {
  const socialMedia = ref([
    {
      logo: shallowRef(GithubLogo),
      name: 'Github',
      url: 'https://github.com/JasonMSims',
    },
    {
      logo: shallowRef(LinkedinLogo),
      name: 'LinkedIn',
      url: 'https://www.linkedin.com/in/jasonsimsdesign/',
    },
  ])

  return { socialMedia }
})
