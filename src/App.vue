<template>
  <NavbarSection v-if="route.meta.hasNavbar" />
  <RouterView />
  <FooterSection />
</template>

<script setup lang="ts">
import { FooterSection, NavbarSection } from '@/components'
import { useRoute } from 'vue-router'

const route = useRoute()
</script>
