import GithubLogo from '@/assets/images/github.svg'
import LinkedinLogo from '@/assets/images/linkedin.svg'
import XLogo from '@/assets/images/x.svg'
import { SocialMedia } from '@/types'
import { defineStore } from 'pinia'
import { ref, shallowRef } from 'vue'

export const useSocialMediaStore = defineStore('socialMedia', () => {
  const socialMedia = ref<SocialMedia[]>([
    {
      logo: shallowRef(GithubLogo),
      name: 'GitHub',
      url: 'https://github.com/JasonMSims',
    },
    {
      logo: shallowRef(LinkedinLogo),
      name: 'LinkedIn',
      url: 'https://www.linkedin.com/in/jasonsimsdev/',
    },
    {
      logo: shallowRef(XLogo),
      name: 'X',
      url: 'https://x.com/jasonmsims',
    },
  ])

  return { socialMedia }
})
