<template>
  <div class="relative isolate py-12">
    <section class="mx-auto grid max-w-7xl scroll-m-28 grid-cols-1 items-start gap-y-8 px-4 sm:scroll-m-16 sm:px-12 md:grid-cols-2" id="contact">
      <div class="md:py-20">
        <div class="prose prose-zinc prose-invert mx-auto lg:mx-0 lg:max-w-lg">
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
          <h2 class="mt-0 text-3xl font-semibold tracking-tight">Let's connect</h2>
          <p class="mb-8">
            I'm always looking for new opportunities to grow and learn. If you have a project you'd like to discuss, or just want to say hi, feel free
            to get in touch.
          </p>
          <div class="flex flex-row gap-4">
            <a :href="social.url" :key="social.name" target="_blank" v-for="social in socialMedia">
              <component :alt="social.name" :is="social.logo" class="h-10 w-10 fill-zinc-100" />
            </a>
          </div>
        </div>
      </div>
      <div class="md:py-20">
        <form @submit.prevent="handleSubmit">
          <div class="mx-auto">
            <div class="grid grid-cols-1 gap-y-3 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-6">
              <div>
                <div class="5 mt-2">
                  <FormInput :disabled="sentMessage" autocomplete="given-name" label="First Name" name="first-name" type="text" v-model="firstName" />
                </div>
              </div>
              <div>
                <div class="5 mt-2">
                  <FormInput :disabled="sentMessage" autocomplete="family-name" label="Last Name" name="last-name" type="text" v-model="lastName" />
                </div>
              </div>
              <div class="sm:col-span-2">
                <FormInput :disabled="sentMessage" autocomplete="email" label="Email" name="email" type="email" v-model="email" />
              </div>
              <div class="sm:col-span-2">
                <FormInput :disabled="sentMessage" autocomplete="subject" label="Subject" name="subject" type="text" v-model="subject" />
              </div>
              <div class="sm:col-span-2">
                <FormInput :disabled="sentMessage" label="Message" name="message" rows="4" type="textarea" v-model="message" />
              </div>
            </div>
            <div class="mt-8 flex justify-end">
              <ButtonElement :disabled="sentMessage" class="sm:w-full" label="Send" type="submit">{{
                !sentMessage ? 'Send Message' : 'Thanks!'
              }}</ButtonElement>
            </div>
            <p class="mt-4 text-center text-sm text-zinc-300 transition-all" v-if="sentMessage">{{ sentMessage }}</p>
          </div>
        </form>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import type { Ref } from 'vue'

import GithubLogo from '@/assets/images/github.svg'
import LinkedinLogo from '@/assets/images/linkedin.svg'
import { ButtonElement, FormInput } from '@/components'
import { ref } from 'vue'

const firstName = ref('')
const lastName = ref('')
const email = ref('')
const subject = ref('')
const message = ref('')

const sentMessage = ref<boolean | string>(false)

const socialMedia = [
  {
    logo: GithubLogo,
    name: 'Github',
    url: 'https://github.com/JasonMSims',
  },
  {
    logo: LinkedinLogo,
    name: 'LinkedIn',
    url: 'https://www.linkedin.com/in/jasonsimsdesign/',
  },
]

const resetInput = (input: Ref<boolean | string>, value: boolean | string, delay: number) => {
  setTimeout(() => {
    input.value = value
  }, delay)
}

const sanitizeInput = (input: string) => {
  const div = document.createElement('div')
  div.textContent = input.trim()
  return div.innerHTML
}

const handleSubmit = async () => {
  try {
    let data = {
      email: sanitizeInput(email.value),
      firstName: sanitizeInput(firstName.value),
      lastName: sanitizeInput(lastName.value),
      message: sanitizeInput(message.value),
      subject: sanitizeInput(subject.value),
    }

    const response = await fetch('https://faas-nyc1-2ef2e6cc.doserverless.co/api/v1/web/fn-6d842a4d-441d-42b0-94a8-1596a6b0d1c0/email/email', {
      body: JSON.stringify(data),
      headers: {
        'Content-Type': 'application/json',
      },
      method: 'POST',
    })

    data = await response.json()
    // Reset all form fields
    firstName.value = ''
    lastName.value = ''
    email.value = ''
    subject.value = ''
    message.value = ''
    sentMessage.value = 'Thanks for your message! I will get back to you as soon as possible.'
    resetInput(sentMessage, false, 5000)
  } catch (error) {
    console.log(error)
  }
}
</script>
