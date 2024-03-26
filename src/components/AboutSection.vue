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
<template>
  <section>
    <div class="flex flex-col md:grid md:grid-cols-2 gap-8 items-start py-8 px-4 xl:gap-16 sm:py-16 xl:px-16 max-w-screen-2xl mx-auto">
      <div class="relative">
        <img alt="" class="rounded-xl w-full h-full object-cover shadow-lg" src="/images/about-image.webp" />
        <div class="absolute inset-0 bg-cyan-300/10 blur-3xl -z-10"></div>
      </div>
      <div class="prose prose-md lg:prose-lg prose-zinc prose-invert">
        <h2>A Little Bit About Me</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
          veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
          voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
          deserunt mollit anim id est laborum.
        </p>
        <TabGroup>
          <TabList class="flex space-x-4">
            <Tab :key="titleIdx" v-for="({ title }, titleIdx) in categories" v-slot="{ selected }">
              <button
                :class="[
                  'font-semibold hover:text-white transition duration-200',
                  { 'text-white': selected },
                  'after:block after:max-w-0 after:transition-all after:duration-300 ease-in after:h-0.5 after:bg-gradient-to-r after:from-cyan-500 after:to-emerald-500 after:rounded-full',
                  { 'after:max-w-full': selected },
                ]"
              >
                {{ title }}
              </button>
            </Tab>
          </TabList>
          <TabPanels class="prose prose-lg prose-zinc prose-invert">
            <TabPanel :key="contentIdx" v-for="({ content }, contentIdx) in categories">
              <ul class="list-disc">
                <li :key="itemIdx" v-for="(item, itemIdx) in content">
                  {{ item }}
                </li>
              </ul>
            </TabPanel>
          </TabPanels>
        </TabGroup>
      </div>
    </div>
  </section>
</template>
