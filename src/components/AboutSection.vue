<template>
  <section
    id="about"
    class="mx-auto grid max-w-7xl scroll-m-20 grid-cols-1 flex-col items-start gap-8 px-12 py-8 sm:scroll-m-12 sm:grid-cols-2 sm:py-16 xl:gap-16 xl:px-12"
  >
    <div class="relative isolate">
      <img alt="" class="mx-auto h-full w-full rounded-xl object-cover shadow-lg sm:w-full" src="/images/about-image.webp" />
      <div class="absolute inset-0 -z-10 bg-cyan-300/10 blur-3xl"></div>
    </div>
    <div class="prose-md prose prose-zinc prose-invert">
      <h2>A Little Bit About Me</h2>
      <p>
        I started my career as a freelance graphic designer and quickly realized I needed a website. I've always wanted to build things myself and
        understand how they tick - and this was no exception. I dove head first into learning how to build a website, and that marked a huge mindset
        shift for me as I realized that code can
        <span class="font-medium italic">&mdash; and should &mdash;</span> be beautifully and intentionally designed too.
      </p>

      <p>
        Fast-forward several years, and I have had the privilege of working with and for several great organizations, including my time at
        <a href="https://www.ncr.com/banking" target="_blank">NCR</a>, where I designed responsive websites for a number of financial institutions.
      </p>
      <p>I'm self-taught and always learning and growing. If I don't know how to do something yet, I'll figure it out!</p>
      <TabGroup>
        <TabList class="mt-8 flex gap-4">
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
            v-for="({ content, description }, categoryIdx) in categories"
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
import { Tab, TabGroup, TabList, TabPanel, TabPanels } from '@headlessui/vue'
import { ref } from 'vue'

const categories = ref([
  {
    content: ['Vue', 'Tailwind CSS', 'Vite', 'Node.js', 'MySQL', 'VS Code'],
    title: 'Good at',
    description: "I've got experience with these technologies and tools and love to work with them every day.",
    id: 1,
  },
  {
    content: ['MongoDB', 'Typescript', 'Git', 'UX/UI Design', 'Nuxt.js'],
    title: 'Growing in',
    description: "I'm learning these and am excited to continue growing my skills.",
    id: 2,
  },
  {
    content: ['React', 'Svelte', 'Next.js'],
    title: 'Want to learn',
    description: "I'd like to expand my skillset to include these tools and technologies in the near future.",
    id: 3,
  },
])
</script>
