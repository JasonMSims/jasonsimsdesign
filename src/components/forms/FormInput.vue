<template>
  <label class="block text-sm font-semibold leading-6 text-white" v-if="label && name" :for="name">{{ label }}</label>
  <textarea
    v-if="type === 'textarea'"
    class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 backdrop-blur-md backdrop-filter focus:ring-2 focus:ring-inset focus:ring-cyan-500 sm:text-sm sm:leading-6"
    v-model="model"
    v-bind="$attrs"
    :id="name"
  />
  <input
    v-else
    class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 backdrop-blur-md backdrop-filter focus:ring-2 focus:ring-inset focus:ring-cyan-500 sm:text-sm sm:leading-6"
    v-model="model"
    v-bind="$attrs"
    :id="name"
  />
</template>
<script setup>
const model = defineModel()

defineProps({
  label: {
    type: String,
    default: '',
  },
  name: {
    type: String,
    default: '',
  },
  type: {
    type: String,
    default: 'text',
  },
})

defineOptions({
  inheritAttrs: false,
})
</script>
