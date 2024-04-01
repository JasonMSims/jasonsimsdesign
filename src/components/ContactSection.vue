<template>
  <div class="relative isolate py-12">
    <section id="contact" class="mx-auto grid max-w-7xl grid-cols-1 items-start gap-y-8 px-4 sm:px-12 md:grid-cols-2">
      <div class="md:py-20">
        <div class="prose-md prose prose-zinc prose-invert mx-auto lg:mx-0 lg:max-w-lg">
          <div class="absolute inset-y-0 left-0 -z-10 w-full overflow-hidden">
            <div
              :class="[
                'absolute h-full w-full blur-3xl',
                '[mask-image:radial-gradient(white_50%,transparent_95%)]',
                'left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 p-24',
              ]"
              aria-hidden="true"
            >
              <div
                class="aspect-[1200/678] w-[75rem] bg-gradient-to-br from-cyan-500/50 via-emerald-700/50 via-25% to-zinc-800/50 to-80% opacity-50"
                style="
                  clip-path: polygon(
                    66.74% 68.073%,
                    100% 37.982%,
                    97.5% 73.027%,
                    85.48% 100%,
                    80.68% 98.184%,
                    72.47% 67.376%,
                    61.93% 34.44%,
                    52.3% 28.295%,
                    47.45% 41.312%,
                    45.14% 65.449%,
                    27.43% 22.725%,
                    0% 34.743%,
                    17.82% 0%,
                    27.53% 22.725%,
                    76.08% 1.615%,
                    66.74% 68.073%
                  );
                "
              />
            </div>
          </div>
          <h2 class="mt-0 text-3xl font-semibold tracking-tight">Get in touch</h2>
          <p class="mb-8">
            Proin volutpat consequat porttitor cras nullam gravida at. Orci molestie a eu arcu. Sed ut tincidunt integer elementum id sem. Arcu sed
            malesuada et magna.
          </p>
          <div class="flex flex-row gap-4">
            <a href="#"><GithubLogo class="h-10 w-10 fill-zinc-100" /></a>
            <a href="#"><LinkedinLogo class="h-10 w-10 fill-zinc-100" /></a>
          </div>
        </div>
      </div>
      <div class="md:py-20">
        <form action="">
          <div class="mx-auto">
            <div class="grid grid-cols-1 gap-y-3 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-6">
              <div>
                <div class="5 mt-2">
                  <FormInput v-model="firstName" type="text" name="first-name" label="First Name" autocomplete="given-name" />
                </div>
              </div>
              <div>
                <div class="5 mt-2">
                  <FormInput v-model="lastName" type="text" name="last-name" label="Last Name" autocomplete="family-name" />
                </div>
              </div>
              <div class="sm:col-span-2">
                <FormInput label="Email" name="email" type="email" autocomplete="email" />
              </div>
              <div class="sm:col-span-2">
                <FormInput label="Message" name="message" type="textarea" rows="4" />
              </div>
            </div>
            <div class="mt-8 flex justify-end">
              <ButtonElement class="sm:w-full" label="Send" type="submit">Send Message</ButtonElement>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import GithubLogo from '@/assets/images/github.svg'
import LinkedinLogo from '@/assets/images/linkedin.svg'
import { FormInput, ButtonElement } from '@/components'

import { ref } from 'vue'

const firstName = ref('')
const lastName = ref('')
</script>
