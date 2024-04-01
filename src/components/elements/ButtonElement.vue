<template>
  <component
    :href="to"
    :is="to ? 'RouterLink' : 'button'"
    :class="[
      'relative inline-block w-full rounded-full text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-cyan-500 sm:w-fit',
      {
        'bg-gradient-to-br from-cyan-500 to-emerald-500': buttonStyle === 'primary',
        'bg-white/10 hover:bg-white/15': buttonStyle === 'secondary',
        'px-4 py-2 text-sm': size === 'sm',
        'px-6 py-3 text-base': size === 'base',
        'px-8 py-4 text-lg': size === 'lg',
      },
    ]"
    :to
  >
    <slot></slot>
  </component>
</template>

<script setup lang="ts">
defineProps({
  buttonStyle: {
    default: 'primary',
    type: String,
  },
  size: {
    default: 'base',
    type: String,
  },
  to: String,
})
</script>
