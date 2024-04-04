<template>
  <label :for="name" class="block text-sm font-semibold leading-6 text-white" v-if="label && name">{{ label }}</label>
  <textarea
    class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 backdrop-blur-md backdrop-filter focus:ring-2 focus:ring-inset focus:ring-cyan-500 sm:text-sm sm:leading-6"
    v-if="type === 'textarea'"
    v-model="model"
    v-bind="$attrs"
    :id="name"
  />
  <input
    class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 backdrop-blur-md backdrop-filter focus:ring-2 focus:ring-inset focus:ring-cyan-500 sm:text-sm sm:leading-6"
    v-else
    v-model="model"
    v-bind="$attrs"
    :id="name"
  />
</template>
<script setup>
const model = defineModel()

defineProps({
  label: {
    default: '',
    type: String,
  },
  name: {
    default: '',
    type: String,
  },
  type: {
    default: 'text',
    type: String,
  },
})

defineOptions({
  inheritAttrs: false,
})
</script>
