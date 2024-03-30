<template>
  <article
    :class="[
      'group/card relative flex flex-col rounded-xl focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4',
      isCmyk
        ? [
            '[&:nth-child(4n+1)]:bg-cyan-500 [&:nth-child(4n+2)]:bg-pink-500 [&:nth-child(4n+3)]:bg-yellow-400 [&:nth-child(4n+4)]:bg-zinc-800',
            '[&:nth-child(4n+1)]:focus-visible:outline-cyan-500 [&:nth-child(4n+2)]:focus-visible:outline-pink-500 [&:nth-child(4n+3)]:focus-visible:outline-yellow-400 [&:nth-child(4n+4)]:focus-visible:outline-zinc-800',
          ]
        : 'focus-visible:outline-cyan-500',
    ]"
    tabindex="0"
  >
    <div
      :class="[
        'rounded-xl bg-zinc-950',
        {
          'scale-[1.01] transition duration-150 ease-out group-focus-within/card:-translate-y-3 group-focus-within/card:translate-x-3 group-focus-within/card:shadow-lg group-hover/card:-translate-y-3 group-hover/card:translate-x-3 group-hover/card:shadow-lg':
            isCmyk,
        },
      ]"
    >
      <div class="aspect-h-3 aspect-w-4 relative overflow-hidden rounded-t-xl">
        <img :src="imgUrl" :alt="description" class="not-prose aspect-[4/3] object-cover object-left-top" />
        <div
          :class="[
            'absolute inset-0 flex h-full w-full items-center justify-center',
            isCmyk
              ? 'bg-gradient-to-br from-cyan-500/95 via-pink-500/85 to-yellow-400/75 opacity-0 backdrop-blur-sm backdrop-filter'
              : 'bg-gradient-to-br from-cyan-700/95 to-emerald-700/85 opacity-0',
            'transition-all duration-500 group-focus-within/card:opacity-100 group-hover/card:opacity-100 group-focus-visible/card:opacity-100',
          ]"
        >
          <CardLink :url="gitUrl">
            <CodeBracketIcon class="h-6 w-6 transform group-hover/link:text-white" />
          </CardLink>
          <CardLink :url="previewUrl">
            <EyeIcon class="h-6 w-6 transform group-hover/link:text-white" />
          </CardLink>
        </div>
      </div>
      <div class="grow rounded-b-xl bg-zinc-50/[0.025] px-4 py-4">
        <h3 class="!mt-0">{{ title }}</h3>
        <div class="flex gap-2">
          <span class="rounded-full bg-zinc-50/5 px-4 py-2 text-xs text-zinc-300">{{ category }}</span>
          <span class="rounded-full bg-zinc-50/5 px-4 py-2 text-xs text-zinc-300">{{ client }}</span>
        </div>
      </div>
    </div>
  </article>
</template>

<script setup lang="ts">
import { CodeBracketIcon, EyeIcon } from '@heroicons/vue/24/outline'
import { CardLink } from '@/components'

defineProps({
  category: {
    default: '',
    type: String,
  },
  client: {
    default: '',
    type: String,
  },
  description: {
    default: '',
    type: String,
  },
  gitUrl: {
    default: '/',
    type: String,
  },
  imgUrl: {
    default: '/',
    type: String,
  },
  previewUrl: {
    default: '/',
    type: String,
  },
  title: {
    default: '',
    type: String,
  },
  isCmyk: {
    default: false,
    type: Boolean,
  },
})
</script>
