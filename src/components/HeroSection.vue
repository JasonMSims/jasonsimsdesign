<template>
  <div class="container mx-auto mt-24 px-12 py-4">
    <section class="lg:py-16">
      <div class="grid sm:grid-cols-12">
        <div class="col-span-8 place-self-center justify-self-start text-center sm:text-left">
          <h1 class="relative mb-4 text-4xl font-black text-white sm:text-5xl lg:text-8xl lg:leading-normal">
            <span class="bg-gradient-to-r from-cyan-500 to-emerald-500 bg-clip-text text-transparent"> Hi, I'm </span>
            <span class="inline-flex flex-nowrap items-center">{{ name }}</span>
          </h1>
          <p class="mb-6 text-sm text-zinc-300 sm:text-lg lg:text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
          <div>
            <RouterLink
              class="mr-4 inline-block w-full rounded-full bg-gradient-to-br from-cyan-500 to-emerald-500 px-6 py-3 text-white hover:from-emerald-500 hover:to-cyan-500 sm:w-fit"
              to="/#contact"
              >Hire me</RouterLink
            >
          </div>
        </div>
        <div class="w-2xs h-2xs relative rounded-full bg-zinc-900 lg:h-96 lg:w-96">
          <img alt="Jason Sims" class="relative h-full w-full transform rounded-full" src="@/assets/images/geometric.svg?url" />
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue'

const name = ref('Jason')
</script>
