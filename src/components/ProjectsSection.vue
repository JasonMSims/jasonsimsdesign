<template>
  <section
    :class="['mx-auto max-w-7xl scroll-m-20 px-4 py-8 sm:scroll-m-12 sm:py-16 xl:px-8', 'prose prose-sm prose-zinc prose-invert']"
    id="projects"
  >
    <h2 class="mb-8 mt-4 text-center text-4xl font-bold">Some of My Projects</h2>

    <TabGroup @change="handleFilterChange">
      <TabList class="not-prose flex flex-row items-center justify-center gap-2 px-6 py-6">
        <Tab :key="categoryIdx" as="template" v-for="(category, categoryIdx) in projectCategories" v-slot="{ selected }">
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
          v-for="(category, categoryIdx) in projectCategories"
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
            <CardElement :key="project.id" v-for="project in projects" v-bind="project" />
          </TransitionGroup>
        </TabPanel>
      </TabPanels>
    </TabGroup>
  </section>
</template>

<script setup lang="ts">
import { ButtonElement, CardElement } from '@/components'
import { useProjectStore } from '@/stores'
import { Tab, TabGroup, TabList, TabPanel, TabPanels } from '@headlessui/vue'
import { storeToRefs } from 'pinia'

const { handleFilterChange } = useProjectStore()
const { projectCategories, projects } = storeToRefs(useProjectStore())
</script>
