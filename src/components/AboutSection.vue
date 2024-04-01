<template>
  <section id="about" class="mx-auto grid max-w-7xl grid-cols-1 flex-col items-start gap-8 px-12 py-8 sm:grid-cols-2 sm:py-16 xl:gap-16 xl:px-12">
    <div class="relative isolate">
      <img alt="" class="mx-auto h-full w-full rounded-xl object-cover shadow-lg sm:w-full" src="/images/about-image.webp" />
      <div class="absolute inset-0 -z-10 bg-cyan-300/10 blur-3xl"></div>
    </div>
    <div class="prose-md prose prose-zinc prose-invert">
      <h2>A Little Bit About Me</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
        anim id est laborum.
      </p>
      <TabGroup>
        <TabList class="flex gap-4">
          <Tab :key="titleIdx" as="template" v-for="({ title }, titleIdx) in categories" v-slot="{ selected }">
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
            :key="categoryIdx"
            v-for="({ content }, categoryIdx) in categories"
          >
            <ul class="list-disc">
              <li :key="itemIdx" v-for="(item, itemIdx) in content">
                {{ item }}
              </li>
            </ul>
          </TabPanel>
        </TabPanels>
      </TabGroup>
    </div>
  </section>
</template>

<script setup lang="ts">
import { Tab, TabGroup, TabList, TabPanel, TabPanels } from '@headlessui/vue'
import { ref } from 'vue'

const categories = ref([
  {
    content: ['CSS', 'HTML', 'JavaScript'],
    title: 'Skills',
  },
  {
    content: ['HTML', 'JavaScript', 'CSS'],
    title: 'Education',
  },
  {
    content: ['JavaScript', 'CSS', 'HTML'],
    title: 'Certifications',
  },
])
</script>
