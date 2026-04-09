<template>
  <NavbarSection v-if="route.meta.hasNavbar" />
  <RouterView />
  <FooterSection />
</template>

<script setup lang="ts">
import { useRoute } from 'vue-router'

import { FooterSection, NavbarSection } from '@/components'

const route = useRoute()
</script>
