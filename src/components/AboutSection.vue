<template>
  <section
    class="mx-auto grid max-w-7xl scroll-m-20 grid-cols-1 flex-col items-start gap-8 px-12 py-8 sm:scroll-m-12 sm:grid-cols-2 sm:py-16 xl:gap-16 xl:px-12"
    id="about"
  >
    <div class="relative isolate">
      <img alt="" class="mx-auto h-full w-full rounded-xl object-cover shadow-lg sm:w-full" src="/images/about-image.webp" />
      <div class="absolute inset-0 -z-10 bg-cyan-300/10 blur-3xl"></div>
    </div>
    <div class="prose prose-zinc prose-invert">
      <h2>A Little Bit About Me</h2>
      <AboutContent />
      <TabGroup>
        <TabList class="mt-8 flex gap-4">
          <Tab :key="titleIdx" as="template" v-for="({ shortTitle: title }, titleIdx) in skills" v-slot="{ selected }">
            <button
              :class="[
                'text-left max-sm:grow max-sm:py-4',
                'rounded-sm font-semibold transition-colors duration-200 hover:text-white',
                'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-cyan-500',
                { 'text-white': selected },
                'ease-in after:block after:h-0.5 after:max-w-0 after:rounded-full after:bg-gradient-to-r after:from-cyan-500 after:to-emerald-500 after:transition-all after:duration-300',
                { 'after:max-w-full': selected },
              ]"
            >
              {{ title }}
            </button>
          </Tab>
        </TabList>
        <TabPanels>
          <TabPanel
            :class="['rounded-sm', 'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-cyan-500']"
            :key="skillIdx"
            v-for="({ content, description }, skillIdx) in skills"
          >
            <p class="my-2 text-sm leading-5 text-zinc-400">{{ description }}</p>
            <div class="flex flex-wrap gap-2">
              <span
                :class="['rounded-full bg-zinc-50/10 px-3 py-1.5 text-sm font-medium hover:text-white']"
                :key="itemIdx"
                v-for="(item, itemIdx) in content"
              >
                {{ item }}
              </span>
            </div>
          </TabPanel>
        </TabPanels>
      </TabGroup>
    </div>
  </section>
</template>

<script setup lang="ts">
import AboutContent from '@/content/about.md'
import { useSkillStore } from '@/stores'
import { Tab, TabGroup, TabList, TabPanel, TabPanels } from '@headlessui/vue'
import { storeToRefs } from 'pinia'

const { skills } = storeToRefs(useSkillStore())
</script>
