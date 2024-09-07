import { createRouter, createWebHistory } from 'vue-router'

const routes = [
  {
    component: () => import('@/views/Home.vue'),
    meta: {
      hasNavbar: true,
    },
    name: 'Home',
    path: '/',
  },
  {
    component: () => import('@/views/Resume.vue'),
    meta: {
      hasNavbar: false,
    },
    name: 'Resume',
    path: '/resume',
  },
  {
    component: () => import('@/views/JobApplication.vue'),
    meta: {
      hasNavbar: false,
    },
    name: 'Job Application',
    path: '/job-application/:company',
    props: true,
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})
export default router
