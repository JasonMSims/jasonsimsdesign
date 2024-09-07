<!-- eslint-disable vue/multi-word-component-names -->
<template>
  <section :class="['mx-auto grid max-w-7xl px-8 py-8 sm:px-12']">
    <div :class="['relative mx-auto grid grid-cols-1 gap-y-6 lg:grid-cols-[auto_1fr] lg:grid-rows-[auto_1fr] lg:gap-x-12 lg:gap-y-8']">
      <div :class="['flex  max-lg:w-full lg:flex-col', 'prose prose-zinc prose-invert']">
        <div class="max-w-xs max-lg:-order-1 sm:col-span-4">
          <img alt="Jason Sims" class="not-prose relative h-full w-full rounded-lg" src="@/assets/images/resume.webp" />
        </div>
      </div>
      <div :class="['border-zinc-200/5 max-lg:border-b lg:order-first lg:row-span-2 lg:border-r lg:pr-10', 'prose prose-zinc prose-invert']">
        <span class="[&_div]:last:[&_div]:before:hidden">
          <h1 class="mb-2 mt-8 font-bold tracking-tight">Experience</h1>
          <TimelineElement :key="item.title" v-for="item in sortedExperience" v-bind="item" format-type="month" />
        </span>
        <span class="[&_div]:last:[&_div]:before:hidden">
          <h1 class="mb-2 mt-8 font-bold tracking-tight">Education</h1>
          <TimelineElement :key="item.title" v-for="item in sortedEducation" v-bind="item" format-type="year" />
        </span>
      </div>
      <div>
        <ul class="not-prose flex flex-col gap-4" role="list">
          <li :key="social.name" class="flex" v-for="social in socialMedia">
            <a :href="social.url" class="group flex items-center text-sm font-medium text-zinc-300 transition hover:text-white" target="_blank">
              <component
                :alt="social.name"
                :is="social.logo"
                aria-hidden="true"
                class="h-6 w-6 flex-none fill-zinc-300 p-1 transition group-hover:fill-white"
              />
              <span class="ml-4">Follow on {{ social.name }}</span>
            </a>
          </li>
          <li class="mt-4 flex border-t border-zinc-200/5 pt-8">
            <a
              class="group flex items-center text-sm font-medium text-zinc-300 transition hover:text-white"
              href="mailto:jason@jasonsims.dev"
              target="_blank"
            >
              <component
                :is="MailIcon"
                alt="Email"
                aria-hidden="true"
                class="h-6 w-6 flex-none fill-zinc-300 stroke-zinc-950 p-0.5 transition group-hover:fill-white"
              />
              <span class="ml-4">jason@jasonsims.dev</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
import { TimelineElement } from '@/components'
import { useCourseStore, useExperienceStore, useSocialMediaStore } from '@/stores'
import { MailIcon } from 'lucide-vue-next'
import { storeToRefs } from 'pinia'

const { socialMedia } = storeToRefs(useSocialMediaStore())
const { sortedEducation } = storeToRefs(useCourseStore())
const { sortedExperience } = storeToRefs(useExperienceStore())
</script>
