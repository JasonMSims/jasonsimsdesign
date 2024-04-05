<template>
  <section :class="['mx-auto grid max-w-7xl px-8 py-8 sm:px-12']">
    <div :class="['relative grid grid-cols-1 gap-y-6 lg:grid-cols-12']">
      <div :class="['max-lg:order-2 lg:col-span-6', ' prose prose-zinc prose-invert']">
        <JobApplicationContent />
      </div>
      <div :class="['border-l-zinc-200/5 max-md:order-1 lg:col-span-4 lg:col-start-9 lg:border-l lg:pl-8', ' prose prose-zinc prose-invert']">
        <div class="max-w-xs max-lg:-order-1 sm:col-span-4">
          <img alt="Jason Sims" class="not-prose relative h-full w-full rounded-lg" src="@/assets/images/resume.webp" />
        </div>
        <div class="mt-6 flex flex-row items-center gap-4">
          <a :href="social.url" :key="social.name" target="_blank" v-for="social in socialMedia">
            <component :alt="social.name" :is="social.logo" class="h-10 w-10 fill-zinc-100" />
          </a>
          <!-- <ButtonElement class="not-prose" to="/#contact">Hire Me</ButtonElement> -->
        </div>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
// import { ButtonElement } from '@/components'
import GithubLogo from '@/assets/images/github.svg'
import LinkedinLogo from '@/assets/images/linkedin.svg'
import JobApplicationContent from '@/content/job-application.md'

const socialMedia = [
  {
    logo: GithubLogo,
    name: 'Github',
    url: 'https://github.com/JasonMSims',
  },
  {
    logo: LinkedinLogo,
    name: 'LinkedIn',
    url: 'https://www.linkedin.com/in/jasonsimsdesign/',
  },
]
</script>
