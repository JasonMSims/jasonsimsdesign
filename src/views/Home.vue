<!-- eslint-disable vue/multi-word-component-names -->
<template>
  <main class="pt-32">
    <HeroSection />
    <AboutSection />
    <ProjectsSection />
    <ContactSection />
  </main>
</template>

<script setup lang="ts">
import { AboutSection, ContactSection, HeroSection, ProjectsSection } from '@/components/'
</script>
