<template>
  <section class="mx-auto max-w-7xl px-4 py-8 sm:px-12">
    <div class="grid grid-cols-1 items-center gap-4 sm:grid-cols-12">
      <div class="text-center sm:col-span-8 sm:text-left">
        <h1 class="mb-4 text-4xl font-black text-white sm:text-5xl lg:text-8xl lg:leading-normal">
          <span class="bg-gradient-to-r from-cyan-500 to-emerald-500 bg-clip-text text-transparent"> Hi, I'm </span>
          <span class="inline-flex flex-nowrap items-center">{{ name }}</span>
        </h1>
        <p class="mb-6 text-sm text-zinc-300 sm:text-lg lg:text-xl">
          I'm a software engineer
          <span class="bg-gradient-to-r from-cyan-500 to-emerald-500 bg-clip-text text-lg font-bold text-transparent sm:text-xl lg:text-2xl"
            >&amp;</span
          >
          graphic designer.
        </p>
        <ButtonElement @click.prevent="scrollTo('#contact')" href="#contact">Hire Me</ButtonElement>
      </div>
      <div class="mx-auto max-w-sm rounded-full bg-zinc-50/5 max-sm:-order-1 sm:col-span-4">
        <img alt="Jason Sims" class="relative h-full w-full" src="@/assets/images/me.webp" />
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
import { ButtonElement } from '@/components'
import { useScroll } from '@/composables'
import { ref } from 'vue'

const { scrollTo } = useScroll()

const name = ref('Jason')
</script>
