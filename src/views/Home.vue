<!-- eslint-disable vue/multi-word-component-names -->
<template>
  <main class="mx-auto xl:container">
    <HeroSection />
    <AboutSection />
    <ProjectsSection />
  </main>
</template>

<script setup lang="ts">
import { AboutSection, HeroSection, ProjectsSection } from '@/components/'
</script>
