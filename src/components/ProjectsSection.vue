<template>
  <section
    :class="['mx-auto max-w-7xl scroll-m-20 px-4 py-8 sm:scroll-m-12 sm:py-16 xl:px-8', 'prose prose-sm prose-zinc prose-invert']"
    id="projects"
  >
    <h2 class="mb-8 mt-4 text-center text-4xl font-bold">Some of My Projects</h2>

    <TabGroup @change="handleFilterChange">
      <TabList class="not-prose flex flex-row items-center justify-center gap-2 px-6 py-6">
        <Tab :key="categoryIdx" as="template" v-for="(category, categoryIdx) in categories" v-slot="{ selected }">
          <ButtonElement :button-style="selected ? 'primary' : 'secondary'" class="m-0 sm:m-2">
            {{ category }}
          </ButtonElement>
        </Tab>
      </TabList>
      <TabPanels>
        <TabPanel
          :class="['rounded-xl', 'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-cyan-500']"
          :id="category"
          :key="categoryIdx"
          as="template"
          v-for="(category, categoryIdx) in categories"
        >
          <TransitionGroup
            appear
            class="relative grid gap-8 sm:grid-cols-2 md:gap-12 lg:grid-cols-3"
            enter-active-class="transition duration-300 ease-out"
            enter-from-class="transform scale-95 opacity-0"
            enter-to-class="transform scale-100 opacity-100 z-40"
            leave-active-class="transition duration-300 ease-in absolute"
            leave-from-class="transform scale-100 opacity-100 z-40"
            leave-to-class="transform scale-95 opacity-0"
            move-class="transition duration-300 ease-out z-40"
            tag="div"
          >
            <CardElement :key="project.id" v-for="project in filteredProjects" v-bind="project" />
          </TransitionGroup>
        </TabPanel>
      </TabPanels>
    </TabGroup>
  </section>
</template>

<script setup lang="ts">
import { ButtonElement, CardElement } from '@/components'
import { Tab, TabGroup, TabList, TabPanel, TabPanels } from '@headlessui/vue'
import { computed, ref } from 'vue'

interface Project {
  category: string
  client: string
  description: string
  gitUrl: string
  id: number
  imgUrl: string
  previewUrl: string
  title: string
}

const projectFilter = ref<string>('All')

const handleFilterChange = (idx: number) => {
  projectFilter.value = [...categories.value][idx]
}

const projects = ref<Project[]>([
  {
    category: 'Web',
    client: 'Digital Insight',
    description: 'Website Redesign for Republic Bank & Trust',
    gitUrl: 'https://github.com/JasonMSims',
    id: 1,
    imgUrl: '/images/republicbank.webp',
    previewUrl: 'http://webservices.digitalinsight.com/t/republicbank/',
    title: 'Republic Bank & Trust',
  },
  {
    category: 'Web',
    client: 'Digital Insight',
    description: 'Website Redesign for Central Bank of Utah',
    gitUrl: 'https://github.com/JasonMSims',
    id: 2,
    imgUrl: '/images/centralbank.webp',
    previewUrl: 'http://webservices.digitalinsight.com/t/centralbankutah/',
    title: 'Central Bank of Utah',
  },
  {
    category: 'Web',
    client: 'Jason Sims Design',
    description: 'Website Redesign for Harbins Community Baptist Church',
    gitUrl: 'https://github.com/JasonMSims',
    id: 3,
    imgUrl: '/images/harbinschurch.webp',
    previewUrl: 'https://harbinschurch.org',
    title: 'Harbins Community Baptist Church',
  },
  {
    category: 'Web',
    client: 'Plethora7',
    description: 'Sourcery CMS for Plethora7',
    gitUrl: 'https://github.com/JasonMSims/sourcery-dashboard',
    id: 4,
    imgUrl: '/images/sourcery.webp',
    previewUrl: 'https://sourcery.plethora7.com',
    title: 'Sourcery',
  },
  {
    category: 'Brand',
    client: 'Plethora7',
    description: 'Brand Identity for Plethora7',
    gitUrl: 'https://github.com/JasonMSims',
    id: 5,
    imgUrl: '/images/plethora7.webp',
    previewUrl: 'https://plethora7.com',
    title: 'Plethora7',
  },
  {
    category: 'Print',
    client: 'Nuvalsa',
    description: 'Packaging Design for Nuvalsa',
    gitUrl: 'https://github.com/JasonMSims',
    id: 6,
    imgUrl: '/images/nuvalsa.webp',
    previewUrl: 'https://nuvalsa.com',
    title: 'Nuvalsa',
  },
])

const filteredProjects = computed(() =>
  projectFilter.value === 'All' ? projects.value : projects.value.filter((project) => project.category === projectFilter.value)
)

const categories = computed(() => {
  return new Set(['All', ...projects.value.map((project) => project.category)].sort((a, b) => a.localeCompare(b)))
})
</script>
