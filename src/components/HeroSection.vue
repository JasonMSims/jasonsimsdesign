<template>
  <section class="mx-auto max-w-7xl px-4 py-8 sm:px-12">
    <div class="grid grid-cols-1 items-center gap-4 sm:grid-cols-12">
      <div class="text-center sm:col-span-8 sm:text-left">
        <h1 class="mb-4 text-4xl font-black text-white sm:text-5xl lg:text-8xl lg:leading-normal">
          <span class="bg-gradient-to-r from-cyan-500 to-emerald-500 bg-clip-text text-transparent"> Hi, I'm </span>
          <span class="inline-flex flex-nowrap items-center">{{ name }}</span>
        </h1>
        <p class="mb-6 text-sm text-zinc-300 sm:text-lg lg:text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        <ButtonElement href="/#contact">Hire Me</ButtonElement>
      </div>
      <div class="mx-auto max-w-sm rounded-full bg-zinc-50/5 max-sm:-order-1 sm:col-span-4">
        <img alt="Jason Sims" class="relative h-full w-full rounded-full" src="@/assets/images/geometric.svg?url" />
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
import { ref } from 'vue'
import { ButtonElement } from '@/components'

const name = ref('Jason')
</script>
