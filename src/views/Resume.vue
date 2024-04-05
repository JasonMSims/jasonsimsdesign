<!-- eslint-disable vue/multi-word-component-names -->
<template>
  <section :class="['mx-auto grid max-w-7xl px-8 py-8 sm:px-12']">
    <div :class="['grid grid-cols-1 gap-y-6 lg:grid-cols-12']">
      <div :class="['max-lg:order-2 lg:col-span-6', ' prose prose-zinc prose-invert']">
        <span class="[&_div]:last:[&_div]:before:hidden">
          <h1 class="mb-2 mt-8">Experience</h1>
          <TimelineElement :key="item.title" v-for="item in sortedExperience" v-bind="item" format-type="month" />
        </span>
        <span class="[&_div]:last:[&_div]:before:hidden">
          <h1 class="mb-2 mt-8">Education</h1>
          <TimelineElement :key="item.title" v-for="item in sortedEducation" v-bind="item" format-type="year" />
        </span>
      </div>
      <div :class="['border-l-zinc-200/5 max-md:order-1 lg:col-span-4 lg:col-start-9 lg:border-l lg:pl-8', ' prose prose-zinc prose-invert']">
        <div class="max-w-xs max-lg:-order-1 sm:col-span-4">
          <img alt="Jason Sims" class="not-prose relative h-full w-full rounded-lg" src="@/assets/images/resume.webp" />
        </div>
        <div class="mt-6 flex flex-row items-center gap-4">
          <a :href="social.url" :key="social.name" target="_blank" v-for="social in socialMedia">
            <component :alt="social.name" :is="social.logo" class="h-10 w-10 fill-zinc-100" />
          </a>
        </div>
        <div class="group">
          <h2
            :class="[
              'ease-in after:block after:h-0.5 after:max-w-12 after:rounded-full after:bg-gradient-to-r after:from-cyan-500 after:to-emerald-500 after:transition-all after:duration-300 group-hover:after:max-w-full',
              '',
            ]"
          >
            A little bit about me
          </h2>
          <AboutContent />
        </div>
        <div :key="skillIdx" class="group" v-for="({ title, content }, skillIdx) in skills">
          <h2
            :class="[
              'ease-in after:block after:h-0.5 after:max-w-12 after:rounded-full after:bg-gradient-to-r after:from-cyan-500 after:to-emerald-500 after:transition-all after:duration-300 group-hover:after:max-w-full',
              '',
            ]"
          >
            {{ title }}
          </h2>
          <div class="flex flex-wrap gap-2">
            <span
              :class="['rounded-full bg-zinc-50/10 px-3 py-1.5 text-sm font-medium hover:text-white']"
              :key="itemIdx"
              v-for="(item, itemIdx) in content"
            >
              {{ item }}
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
import { TimelineElement } from '@/components'
import AboutContent from '@/content/about.md'
import { useCourseStore, useExperienceStore, useSkillStore, useSocialMediaStore } from '@/stores'
import { storeToRefs } from 'pinia'

const { socialMedia } = storeToRefs(useSocialMediaStore())
const { sortedEducation } = storeToRefs(useCourseStore())
const { sortedExperience } = storeToRefs(useExperienceStore())
const { skills } = storeToRefs(useSkillStore())
</script>
