<template>
  <footer class="z-10 border-t border-t-zinc-200/5">
    <div class="mx-auto flex max-w-7xl flex-col items-center gap-4 px-4 py-8 sm:flex-row sm:justify-between sm:px-12">
      <RouterLink to="/"><JsdLogo class="h-16" /></RouterLink>
      <p class="text-center text-xs text-zinc-500 sm:text-sm">&copy; {{ new Date().getFullYear() }} Jason Sims Design. All rights reserved.</p>
    </div>
  </footer>
</template>

<script setup lang="ts">
import JsdLogo from '@/assets/images/logo.svg'
</script>
