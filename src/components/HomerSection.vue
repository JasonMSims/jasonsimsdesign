<template>
  <section class="flex w-full rotate-1 flex-col items-center justify-center rounded-lg bg-[rgb(249_99_2)] px-6 py-8">
    <h1 class="m-0">Hi, I'm</h1>
    <div class="mx-auto block w-1/2 max-w-screen-sm border-b border-b-white text-left font-writing text-7xl text-black">
      <VueWriter :array="[name]" :eraseSpeed="75" :typeSpeed="100" />
    </div>
  </section>
</template>

<script setup lang="ts">
import { VueWriter } from 'vue-writer'
defineProps({
  name: { required: true, type: String },
})
</script>

<style scope>
.is-typed {
  @apply mx-0 sm:mx-8;
}
</style>
