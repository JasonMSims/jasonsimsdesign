<template>
  <section :class="['mx-auto grid max-w-7xl px-8 py-8 sm:px-12']">
    <div :class="['relative grid grid-cols-1 gap-y-6 lg:grid-cols-12']">
      <div :class="['max-lg:order-2 lg:col-span-6', ' prose prose-zinc prose-invert']">
        <h1 class="mb-2 mt-8">Hi Tailwind Team!</h1>
        <p>
          I really appreciate you taking the time to look at my application, resume, and portfolio. As soon as I saw
          <a href="https://twitter.com/adamwathan/status/1770173581772632517" target="_blank">Adam's post on X</a> about the Design Engineer, I knew
          that I had to at least build out my application and take a shot at this opportunity. Just like Robin said in his
          <span class="italic">(now famous)</span> application, this absolutely seems like a dream job and a once-in-a-lifetime opportunity.
        </p>
        <h2>I'm Jason Sims.</h2>
        <p>
          I am a designer/developer living in the metro Atlanta area. I was born and raised in Georgia, so I've been in this same area my whole life.
        </p>
        <p>
          I currently have a full-time job as the Director of Digital Services for a small eCommerce business. Prior to that I worked as a website
          designer at NCR.
        </p>
        <h2>My Story</h2>
        <p>
          I have always had an artistic bent. As a kid, I drew all the time. As I got older, that moved more towards graphic design and &mdash; as a
          result of necessity &mdash; that shifted further to website design.
        </p>
        <p>
          I had plans to go to college and get a degree in Website Design, but life happened &mdash; my wife and I got married and had our first son,
          so I jumped straight into full-time work to support our young and growing family.
        </p>
        <p>
          Thankfully, I've always had a solid work ethic that was instilled in me from the time I was a kid. I have never had a problem hustling and
          grinding, and no job has ever been beneath me. Despite the lack of formal education, I was able to continue growing in my understanding of
          website design and development. I landed a great job <span class="italic">(that I was honestly under qualified for)</span> as a website
          designer at NCR.
        </p>
        <p>
          After a couple of years, I went to work for Plethora7, the small eCommerce company that I am still at now. In my role, I've been able to
          build out various systems integrations, like our reporting dashboards that interact with Amazon's Selling Partner API. All of our internal
          tools are built with Vue and styled with Tailwind.
        </p>
        <h2>My Work</h2>
        <p>
          I'm passionate about constantly iterating on my work. I love figuring out the <span class="font-black italic">best</span> way to do any one
          thing, even though that has led to me reinventing the wheel more than once. In every role I've ever had, I've always been the one to push
          for improvements and build out systems to make things more efficient.
        </p>
        <p>
          One of the projects that I am the most proud of is our internal <a href="https://github.com/JasonMSims/FBA-Restock">Restock Tool</a>.
          Unfortunately, I can't provide a live demo of this tool since it's locked down to our workspace. But here's a screenshot:
        </p>
        <img alt="FBA Restock Tool" class="not-prose relative h-auto w-full rounded-lg shadow" src="@/assets/images/fba-restock.webp" />
        <p>
          I am also really proud of the work I did for various financial institutions at NCR. You can see some of those live code mockups in
          <RouterLink to="/#projects">my portfolio</RouterLink>.
        </p>
        <h2>My Contributions</h2>
        <p>
          Any personal projects I work on are open-source. I have contributed minor tweaks to large projects (<a
            href="https://github.com/vuejs/vitepress/pull/3692"
            >like a typo in the Vitepress docs</a
          >
          &mdash; big contribution, I know).
        </p>
        <h2>Why I Think We Would Be a Great Fit</h2>
        <ul>
          <li>
            <span class="font-bold">I love to design &mdash; in code.</span> No, really. I'm not just saying that because you call it out in the job
            posting.
          </li>
          <li>
            <span class="font-bold">I'm a fast learner.</span> You will have applicants that have way more experience than me on paper and that have
            more readily available to show you in their portfolio. But you won't find anyone who is more willing to learn, grow, keep up, and exceed
            expectations than me.
          </li>
          <li>
            <span class="font-bold">I'm teachable and able to teach.</span> Point me in the right direction or show me how to do something the right
            way once, and I will internalize it. I'll take that knowledge and run with it, and I'll be able to teach it to others.
          </li>
          <li>
            <span class="font-bold">I'm getting a lot better with components.</span> I'm seeing the power of components and stores to modularize a
            codebase and keep it tidy &mdash; as well as the benefits that modularization has in getting a prototype off the ground quickly.
          </li>
          <li>
            <span class="font-bold">I'm a team player.</span> I love working with others to solve problems and build out solutions. I'm not afraid to
            ask questions or to ask for help when I need it. And I'm not afraid to speak up and contribute my opinion when I think it's needed.
          </li>
          <li>
            <span class="font-bold">I care about doing great work too.</span> I love that this is one of the pillars of Tailwind and I am excited
            about the prospect of working with others who feel the same way.
          </li>
        </ul>
        <h2>My Life</h2>
        <ul>
          <li>I have a beautiful wife and three wonderful children that I love spending time with and pouring into.</li>
          <li>I'm one of the pastors at my local church (<a href="https://harbinschurch.org">Harbins Community Baptist Church</a>).</li>
          <li>I'm a huge Star Wars nerd.</li>
        </ul>
      </div>
      <div :class="['border-l-zinc-200/5 max-md:order-1 lg:col-span-4 lg:col-start-9 lg:border-l lg:pl-8', ' prose prose-zinc prose-invert']">
        <div class="max-w-xs max-lg:-order-1 sm:col-span-4">
          <img alt="Jason Sims" class="not-prose relative h-full w-full rounded-lg" src="@/assets/images/resume.webp" />
        </div>
        <div class="mt-6 flex flex-row items-center gap-4">
          <a v-for="social in socialMedia" :key="social.name" :href="social.url" target="_blank">
            <component :is="social.logo" class="h-10 w-10 fill-zinc-100" :alt="social.name" />
          </a>
          <!-- <ButtonElement class="not-prose" to="/#contact">Hire Me</ButtonElement> -->
        </div>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
// import { ButtonElement } from '@/components'
import GithubLogo from '@/assets/images/github.svg'
import LinkedinLogo from '@/assets/images/linkedin.svg'

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
</script>
