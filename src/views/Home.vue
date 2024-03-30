<!-- eslint-disable vue/multi-word-component-names -->
<template>
  <main class="mx-auto xl:container">
    <HeroSection />
    <AboutSection />
    <ProjectsSection />
    <ContactSection />
  </main>
</template>

<script setup lang="ts">
import { AboutSection, ContactSection, HeroSection, ProjectsSection } from '@/components/'
</script>
