import { createRouter, createWebHistory } from 'vue-router'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: () => import('@/views/Home.vue'),
    meta: {
      hasNavbar: true,
    },
  },
  {
    path: '/resume',
    name: 'Resume',
    component: () => import('@/views/Resume.vue'),
    meta: {
      hasNavbar: false,
    },
  },
  {
    path: '/job-application',
    name: 'Job Application',
    component: () => import('@/views/JobApplication.vue'),
    meta: {
      hasNavbar: false,
    },
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})
export default router
