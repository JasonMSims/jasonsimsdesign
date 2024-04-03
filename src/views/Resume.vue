<template>
  <section :class="['prose-md prose prose-zinc prose-invert', 'mx-auto grid max-w-7xl px-8 py-8 sm:px-12']">
    <span class="[&_div]:last:[&_div]:before:hidden">
      <h1 class="">Experience</h1>
      <TimelineElement v-for="item in sortedExperience" :key="item.title" v-bind="item" />
    </span>
    <span class="[&_div]:last:[&_div]:before:hidden">
      <h1 class="">Education</h1>
      <TimelineElement v-for="item in sortedEducation" :key="item.title" v-bind="item" />
    </span>
  </section>
</template>

<script setup lang="ts">
import { computed, ref } from 'vue'
import { TimelineElement } from '@/components'

type Course = {
  title: string
  organization: string
  startDate: Date
  endDate: Date
  achievements: string[]
  description: string
}

type Courses = Course[]

type Experience = {
  title: string
  organization: string
  startDate: Date
  endDate: Date
  achievements: string[]
  description: string
}

type Experiences = Experience[]

const experience = ref<Experiences>([
  {
    title: 'Installation Technician',
    organization: "Bob Bailey's TV & Appliance, Inc.",
    startDate: new Date('8/1/2006'),
    endDate: new Date('3/31/2008'),
    description:
      'Delivered and installed appliances ranging from refrigerators, microwaves, dishwashers, and ovens as well as washers and dryers to customers in the greater Atlanta area. Provided excellent customer service and ensured customer satisfaction.',
    achievements: [],
  },
  {
    title: 'Lead Graphic Designer',
    organization: 'One of a Kind Signs',
    startDate: new Date('3/1/2008'),
    endDate: new Date('10/31/2009'),
    description:
      'Developed designs for vehicle wraps, signage, business cards, and various other forms of marketing. Communicated with the customer to deliver a compelling design within a tight deadline.',
    achievements: [],
  },
  {
    title: 'Inventory Control Supervisor',
    organization: 'Mood Media',
    startDate: new Date('6/1/2010'),
    endDate: new Date('3/31/2016'),
    description:
      'Oversaw all inventory transactions, conducted daily cycle counts and yearly physical inventories. Managed Receiving and Returns departments in the Eastern Operations Center. Created standard operating procedures for efficiency, promoted methods for ensuring accuracy, and enforced quality and integrity with all team members.',
    achievements: [],
  },
  {
    title: 'Website Designer',
    organization: 'NCR Corporation',
    startDate: new Date('3/1/2016'),
    endDate: new Date('5/31/2018'),
    description:
      'Designed custom websites for financial institutions, tailored to their specific brand, needs and goals. Saw site design through from conception to working prototype. Collaborated with development team to ensure that final site met approved design standards.',
    achievements: ['Website Delivery Challenge (2016)'],
  },
  {
    title: 'Director of Digital Services',
    organization: 'Plethora7',
    startDate: new Date('5/1/2018'),
    endDate: new Date(),
    description:
      'Oversee e-commerce listing creation & optimization, product & brand advertising, and social media marketing. Oversee software development and integration. Responsible for sales forecasting & reporting, product research, & brand relations.',
    achievements: [],
  },
  {
    title: 'Full Stack Developer',
    organization: 'Freelance',
    startDate: new Date('6/1/2010'),
    endDate: new Date(),
    description:
      'Design and develop websites and web apps of varying complexity for customers with different business needs. Customers include businesses, non-profits, and individuals.',
    achievements: [],
  },
])

const sortedExperience = computed(() => experience.value.sort((a: Experience, b: Experience) => a.startDate.getTime() - b.startDate.getTime()))

const education = ref<Courses>([
  {
    title: 'Website Design',
    organization: 'Gwinnett Technical College',
    startDate: new Date('5/1/2008'),
    endDate: new Date('5/1/2010'),
    description: '',
    achievements: [],
  },
])

const sortedEducation = computed(() => education.value.sort((a: Course, b: Course) => a.startDate.getTime() - b.startDate.getTime()))
</script>
