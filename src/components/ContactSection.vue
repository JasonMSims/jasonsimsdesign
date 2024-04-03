<template>
  <div class="relative isolate py-12">
    <section id="contact" class="mx-auto grid max-w-7xl scroll-m-28 grid-cols-1 items-start gap-y-8 px-4 sm:scroll-m-16 sm:px-12 md:grid-cols-2">
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
          <h2 class="mt-0 text-3xl font-semibold tracking-tight">Let's connect</h2>
          <p class="mb-8">
            I'm always looking for new opportunities to grow and learn. If you have a project you'd like to discuss, or just want to say hi, feel free
            to get in touch.
          </p>
          <div class="flex flex-row gap-4">
            <a v-for="social in socialMedia" :key="social.name" :href="social.url" target="_blank">
              <component :is="social.logo" class="h-10 w-10 fill-zinc-100" :alt="social.name" />
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
                  <FormInput :disabled="sentMessage" v-model="firstName" type="text" name="first-name" label="First Name" autocomplete="given-name" />
                </div>
              </div>
              <div>
                <div class="5 mt-2">
                  <FormInput :disabled="sentMessage" v-model="lastName" type="text" name="last-name" label="Last Name" autocomplete="family-name" />
                </div>
              </div>
              <div class="sm:col-span-2">
                <FormInput :disabled="sentMessage" v-model="email" label="Email" name="email" type="email" autocomplete="email" />
              </div>
              <div class="sm:col-span-2">
                <FormInput :disabled="sentMessage" v-model="subject" label="Subject" name="subject" type="text" autocomplete="subject" />
              </div>
              <div class="sm:col-span-2">
                <FormInput :disabled="sentMessage" v-model="message" label="Message" name="message" type="textarea" rows="4" />
              </div>
            </div>
            <div class="mt-8 flex justify-end">
              <ButtonElement :disabled="sentMessage" class="sm:w-full" label="Send" type="submit">{{
                !sentMessage ? 'Send Message' : 'Thanks!'
              }}</ButtonElement>
            </div>
            <p v-if="sentMessage" class="mt-4 text-center text-sm text-zinc-300 transition-all">{{ sentMessage }}</p>
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
const email = ref('')
const subject = ref('')
const message = ref('')

const sentMessage = ref<boolean | string>(false)

const socialMedia = [
  {
    name: 'Github',
    url: 'https://github.com/JasonMSims',
    logo: GithubLogo,
  },
  {
    name: 'LinkedIn',
    url: 'https://www.linkedin.com/in/jasonsimsdesign/',
    logo: LinkedinLogo,
  },
]

const resetInput = (input: any, value: boolean | string, delay: number) => {
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
      firstName: sanitizeInput(firstName.value),
      lastName: sanitizeInput(lastName.value),
      email: sanitizeInput(email.value),
      subject: sanitizeInput(subject.value),
      message: sanitizeInput(message.value),
    }

    const response = await fetch('https://faas-nyc1-2ef2e6cc.doserverless.co/api/v1/web/fn-6d842a4d-441d-42b0-94a8-1596a6b0d1c0/email/email', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(data),
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
