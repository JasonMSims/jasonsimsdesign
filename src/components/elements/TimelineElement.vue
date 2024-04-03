<template>
  <div :class="['group relative max-w-3xl py-6 pl-8 sm:pl-32']">
    <h3
      :class="[
        'mt-4 inline-block font-bold sm:text-2xl',
        'ease-in after:block after:h-0.5 after:max-w-12 after:rounded-full after:bg-gradient-to-r after:from-cyan-500 after:to-emerald-500 after:transition-all after:duration-300 group-hover:after:max-w-full',
      ]"
    >
      {{ title }}
    </h3>
    <div
      :class="[
        'mb-1 flex flex-row flex-wrap gap-x-2',
        'before:absolute before:left-2 before:h-full before:-translate-x-1/2 before:translate-y-3 before:bg-zinc-300 before:px-px sm:before:left-0 sm:before:ml-[6.5rem]',
        'after:absolute after:left-2 after:box-content after:h-2 after:w-2 after:-translate-x-1/2 after:translate-y-1 after:rounded-full after:border-4 after:border-zinc-950 after:bg-gradient-to-br after:from-cyan-500 after:to-emerald-500 sm:after:left-0 sm:after:ml-[6.5rem]',
      ]"
    >
      <time
        class="self-start rounded-full bg-gradient-to-br from-cyan-600 to-emerald-600 px-2 py-1 text-xs font-medium text-white sm:absolute sm:left-0"
        >{{ formatType === 'month' ? formatDateToMonth(startDate) : formatDateToYear(startDate) }}</time
      >
      <span class="grow self-center text-sm italic text-zinc-300 sm:order-2">{{
        formatType === 'month' ? formatDurationToMonth(startDate, endDate) : formatDurationToYear(startDate, endDate)
      }}</span>
      <h4 class="basis-full sm:mt-0">{{ organization }}</h4>
    </div>
    <p>{{ description }}</p>
    <template v-if="achievements && achievements.length > 0">
      <h5>Achievements</h5>
      <ul class="mt-0">
        <li v-for="(achievement, achievementIdx) in achievements" :key="achievementIdx">{{ achievement }}</li>
      </ul>
    </template>
  </div>
</template>

<script setup lang="ts">
import { DateTime, DurationUnits } from 'luxon'
defineProps({
  formatType: {
    type: String,
    default: 'month',
  },
  title: { type: String, required: true },
  organization: String,
  startDate: { type: Date, required: true },
  endDate: { type: Date, required: true },
  description: { type: String, required: true },
  achievements: { type: Array, required: true },
})

const formatDateToMonth = (date: Date) => formatDate(date, { month: 'short', year: 'numeric' })
const formatDateToYear = (date: Date) => formatDate(date, { year: 'numeric' })

const formatDate = (date: Date, params: object = { month: 'long', year: 'numeric' }) => {
  const formattedDate = DateTime.fromJSDate(date).toLocaleString(params)
  return formattedDate === DateTime.now().toLocaleString(params) ? 'Present' : formattedDate
}

const formatDurationToMonth = (startDate: Date, endDate: Date) => formatDuration(startDate, endDate, ['years', 'months'])
const formatDurationToYear = (startDate: Date, endDate: Date) => formatDuration(startDate, endDate, ['years'])

const formatDuration = (startDate: Date, endDate: Date, params: DurationUnits = ['years', 'months']) => {
  const start = DateTime.fromJSDate(startDate)
  const end = DateTime.fromJSDate(endDate)
  return end.diff(start, params).toHuman({ maximumFractionDigits: 0 })
}
</script>
