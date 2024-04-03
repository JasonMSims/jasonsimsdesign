<template>
  <section :class="['mx-auto grid max-w-7xl px-8 py-8 sm:px-12']">
    <div :class="['grid grid-cols-1 gap-y-6 lg:grid-cols-12']">
      <div :class="['max-lg:order-2 lg:col-span-6', ' prose prose-zinc prose-invert']">
        <span class="[&_div]:last:[&_div]:before:hidden">
          <h1 class="mb-2 mt-8">Experience</h1>
          <TimelineElement v-for="item in sortedExperience" :key="item.title" v-bind="item" format-type="month" />
        </span>
        <span class="[&_div]:last:[&_div]:before:hidden">
          <h1 class="mb-2 mt-8">Education</h1>
          <TimelineElement v-for="item in sortedEducation" :key="item.title" v-bind="item" format-type="year" />
        </span>
      </div>
      <div :class="['border-l-zinc-200/5 max-md:order-1 lg:col-span-4 lg:col-start-9 lg:border-l lg:pl-8', ' prose prose-zinc prose-invert']">
        <div class="max-w-xs max-lg:-order-1 sm:col-span-4">
          <img alt="Jason Sims" class="not-prose relative h-full w-full rounded-lg" src="@/assets/images/resume.webp" />
        </div>
        <div class="mt-6 flex flex-row items-center gap-4">
          <a v-for="social in socialMedia" :key="social.name" :href="social.url" target="_blank">
            <component :is="social.logo" class="h-10 w-10 fill-zinc-100" :alt="social.name" />
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
          <p>
            After gaining some work experience out of high school, I launched a career as a freelance graphic designer and quickly realized I needed a
            website. I've always wanted to build things myself and understand how they tick - and this was no exception. I dove head first into
            learning how to build a website, and that marked a huge mindset shift for me as I realized that code can
            <span class="font-medium italic">&mdash; and should &mdash;</span> be beautifully and intentionally designed too.
          </p>
          <p>
            Fast-forward several years, and I have had the privilege of working with and for several great organizations, including my time at
            <a href="https://www.ncr.com/banking" target="_blank">NCR</a>, where I designed responsive websites for a number of financial
            institutions.
          </p>
          <p>I'm self-taught and always learning and growing. If I don't know how to do something yet, I'll figure it out!</p>
        </div>
        <div class="group" v-for="{ title, content, id: skillIdx } in skills" :key="skillIdx">
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
import { computed, ref } from 'vue'
import { TimelineElement } from '@/components'
import GithubLogo from '@/assets/images/github.svg'
import LinkedinLogo from '@/assets/images/linkedin.svg'

const socialMedia = [
  {
    name: 'Github',
    url: 'https://github.com/JasonMSims',
    logo: GithubLogo,
  },
  {
    name: 'LinkedIn',
    url: 'https://www.linkedin.com/in/jasonsimsdesign/',
    logo: LinkedinLogo,
  },
]

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
    description:
      'Attended all core classes with an aim to focus on the website design program, acquiring fundamental skills in website design, such as HTML, CSS, and Javascript. I left college prior to completing my program in order to focus on providing for my family.',
    achievements: [],
  },
  {
    title: 'Lifelong Learner',
    organization: 'The Internet',
    startDate: new Date('6/1/2010'),
    endDate: new Date(),
    description:
      "I've watched 1,000's of hours of tutorials on Youtube and other platforms to learn web development, design, and marketing. I've read 100's of pages of docs to understand how to use different tools and technologies.",
    achievements: [],
  },
])

const sortedEducation = computed(() => education.value.sort((a: Course, b: Course) => a.startDate.getTime() - b.startDate.getTime()))

const skills = [
  {
    content: ['Vanilla JS', 'CSS', 'SCSS', 'HTML', 'Vue', 'Tailwind CSS', 'Vite', 'Node.js', 'MySQL', 'VS Code'],
    title: "Some things I'm good at",
    description: "I've got experience with these technologies and tools and love to work with them every day.",
    id: 1,
  },
  {
    content: ['MongoDB', 'Typescript', 'Git', 'UX/UI Design', 'Nuxt.js'],
    title: "Some things I'm growing in",
    description: "I'm learning these and am excited to continue growing my skills.",
    id: 2,
  },
  {
    content: ['React', 'Svelte', 'Alpine', 'Next.js'],
    title: 'Some things I want to learn',
    description: "I'd like to expand my skill set to include these tools and technologies in the near future.",
    id: 3,
  },
]
</script>
