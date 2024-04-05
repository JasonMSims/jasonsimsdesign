<template>
  <div :class="['group relative max-w-3xl py-4 pl-8 sm:pl-32']">
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
        'before:absolute before:left-2 before:h-full before:-translate-x-1/2 before:translate-y-3 before:bg-zinc-200/50 before:px-px sm:before:left-0 sm:before:ml-[6.5rem]',
        'after:absolute after:left-2 after:box-content after:h-2 after:w-2 after:-translate-x-1/2 after:translate-y-1 after:rounded-full after:border-4 after:border-zinc-950 after:bg-gradient-to-br after:from-cyan-500 after:to-emerald-500 sm:after:left-0 sm:after:ml-[6.5rem]',
      ]"
    >
      <time
        class="cursor-default self-center rounded-full bg-gradient-to-br from-cyan-600 to-emerald-600 px-2 py-1 text-xs font-medium text-white sm:absolute sm:left-0 sm:self-start"
        >{{ formatType === 'month' ? formatDateToMonth(startDate) : formatDateToYear(startDate) }}</time
      >
      <span class="inline-flex grow flex-wrap items-baseline gap-2 self-center sm:order-2">
        <span class="font-semibold">
          {{
            formatType === 'month'
              ? `${formatDateToMonth(startDate)} - ${formatDateToMonth(endDate)}`
              : `${formatDateToYear(startDate)} - ${formatDateToYear(endDate)}`
          }}
        </span>
        <span class="text-sm italic text-zinc-300">{{
          formatType === 'month' ? formatDurationToMonth(startDate, endDate) : formatDurationToYear(startDate, endDate)
        }}</span>
      </span>
      <h4 class="basis-full sm:mt-0">{{ organization }}</h4>
    </div>
    <p class="max-sm:my-2">{{ description }}</p>
    <template v-if="achievements && achievements.length > 0">
      <h5>Achievements</h5>
      <ul class="mt-0">
        <li :key="achievementIdx" v-for="(achievement, achievementIdx) in achievements">{{ achievement }}</li>
      </ul>
    </template>
  </div>
</template>

<script setup lang="ts">
import { useDateFormat } from '@/composables'
defineProps({
  achievements: { required: true, type: Array },
  description: { required: true, type: String },
  endDate: { required: true, type: Date },
  formatType: { default: 'month', type: String },
  organization: { required: true, type: String },
  startDate: { required: true, type: Date },
  title: { required: true, type: String },
})

const { formatDateToMonth, formatDateToYear, formatDurationToMonth, formatDurationToYear } = useDateFormat()
</script>
