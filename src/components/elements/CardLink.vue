<template>
  <component
    :class="[
      'group/link',
      'relative mr-2 hidden rounded-full border-2 border-white/50 bg-white/5 p-2',
      'transition-colors duration-300 hover:border-white hover:bg-white/10 focus-visible:border-white focus-visible:bg-white/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-500 group-focus-within/card:block md:group-hover/card:block',
    ]"
    :href="url"
    :is="url.startsWith('http') ? 'a' : 'RouterLink'"
    :to="url"
    rel="noopener noreferrer"
    target="_blank"
    v-if="url"
  >
    <slot></slot>
  </component>
</template>

<script setup lang="ts">
defineProps({
  url: String,
})
</script>
