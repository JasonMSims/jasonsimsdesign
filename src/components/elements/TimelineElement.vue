<template>
  <div :class="['group relative max-w-3xl py-4 pl-8 sm:pl-32']">
    <h3
      :class="[
        'mt-4 inline-block font-bold tracking-tight sm:text-2xl',
        'ease-in after:block after:h-0.5 after:max-w-12 after:rounded-full after:bg-gradient-to-r after:from-cyan-500 after:to-emerald-500 after:transition-all after:duration-300 group-hover:after:max-w-full',
      ]"
    >
      {{ title }}
    </h3>
    <div
      :class="[
        'mb-1 flex flex-row flex-wrap gap-x-2',
        'before:absolute before:left-2 before:h-full before:-translate-x-1/2 before:translate-y-3 before:bg-zinc-200/25 before:px-px sm:before:left-0 sm:before:ml-[6.5rem]',
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
    <p class="max-sm:my-2" v-if="description">{{ description }}</p>
    <template v-if="achievements && achievements.length > 0">
      <h5 class="font-semibold">Key Achievements</h5>
      <ul class="mt-0">
        <li :key="achievementIdx" class="font-light" v-for="(achievement, achievementIdx) in achievements">
          <span class="font-extrabold" v-if="achievement.title">{{ achievement.title }}:</span>
          {{ achievement.text }}
        </li>
      </ul>
    </template>
    <template v-if="tools && tools.length > 0">
      <h5 class="font-semibold">Technologies & Tools</h5>
      <div class="flex flex-wrap gap-2">
        <span
          :class="['rounded-full bg-zinc-50/10 px-3 py-1.5 text-sm font-medium hover:text-white']"
          :key="itemIdx"
          v-for="(item, itemIdx) in tools"
        >
          {{ item }}
        </span>
      </div>
    </template>
  </div>
</template>

<script setup lang="ts">
import { useDateFormat } from '@/composables'
import { TimelineItem } from '@/types'

withDefaults(defineProps<TimelineItem>(), {
  formatType: 'month',
})

const { formatDateToMonth, formatDateToYear, formatDurationToMonth, formatDurationToYear } = useDateFormat()
</script>
