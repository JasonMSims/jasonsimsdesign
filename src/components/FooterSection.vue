<template>
  <footer class="z-10 border-t border-t-zinc-200/5">
    <div class="container mx-auto flex items-center justify-between p-12">
      <span><JsdLogo class="h-16" /></span>
      <p class="text-sm text-zinc-500">&copy; {{ new Date().getFullYear() }} Jason Sims Design. All rights reserved.</p>
    </div>
  </footer>
</template>

<script setup lang="ts">
import JsdLogo from '@/assets/images/logo.svg'
</script>
