<template>
  <Disclosure as="nav" v-slot="{ open }" class="fixed left-0 top-0 z-10 w-full bg-zinc-950/85 bg-bottom backdrop-blur-2xl backdrop-filter">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-28 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <DisclosureButton
            class="relative inline-flex items-center justify-center rounded-md p-2 text-zinc-400 hover:text-white focus-visible:outline-none focus-visible:ring focus-visible:ring-inset focus-visible:ring-cyan-500"
          >
            <span class="sr-only">Open main menu</span>
            <Bars3Icon class="h-6 w-6" aria-hidden="true" v-if="!open" />
            <XMarkIcon class="h-6 w-6" aria-hidden="true" v-else />
          </DisclosureButton>
        </div>
        <div class="flex flex-1 items-center justify-center sm:justify-between">
          <div class="relative flex shrink-0 items-center self-stretch py-4">
            <RouterLink to="/"><Logo class="h-16 w-auto" /></RouterLink>
          </div>
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
              <a
                v-for="item in navigation"
                @click.prevent="handleClick(item)"
                :key="item.name"
                :href="item.href"
                :class="[
                  //item.current ? 'bg-zinc-50/10 text-white' : 'text-zinc-300 hover:bg-zinc-50/25 hover:text-white',
                  'rounded-full px-3 py-2 text-base font-medium',
                  item.current ? 'text-white' : 'text-zinc-300 hover:text-white',
                  'ease-in after:block after:h-0.5 after:max-w-0 after:rounded-full after:bg-gradient-to-r after:from-cyan-500 after:to-emerald-500 after:transition-all after:duration-300',
                  { 'after:max-w-full': item.current },
                ]"
                :aria-current="item.current ? 'page' : undefined"
                >{{ item.name }}</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <DisclosurePanel class="sm:hidden">
      <div class="space-y-1 px-2 pb-3 pt-2">
        <DisclosureButton
          :href="item.href"
          @click.prevent="handleClick(item)"
          as="a"
          v-for="(item, itemIdx) in navigation"
          :key="itemIdx"
          :class="[
            item.current ? 'bg-zinc-50/10 text-white' : 'text-zinc-300 hover:bg-zinc-50/25 hover:text-white',
            'block rounded-md px-3 py-2 text-base font-medium',
          ]"
          :aria-current="item.current ? 'page' : undefined"
          >{{ item.name }}</DisclosureButton
        >
      </div>
    </DisclosurePanel>
  </Disclosure>
</template>

<script setup lang="ts">
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { Bars3Icon, XMarkIcon } from '@heroicons/vue/24/outline'
import { ref } from 'vue'
import Logo from '@/assets/images/logo.svg'
import { UseScroll } from '@/composables/UseScroll'

const { scrollTo } = UseScroll()

const handleClick = (item: { name: string; href: string; current: boolean }) => {
  navigation.value = navigation.value.map((navItem) => {
    return {
      ...navItem,
      current: navItem.name === item.name,
    }
  })
  scrollTo(item.href)
}

const navigation = ref([
  { name: 'About', href: '#about', current: false },
  { name: 'Projects', href: '#projects', current: false },
  { name: 'Contact', href: '#contact', current: false },
])
</script>
