import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      // which is lazy-loaded when the route is visited.
      component: () => import('@/views/home.vue'),
    },
    {
      path: '/about',
      name: 'about',
      // which is lazy-loaded when the route is visited.
      component: () => import('@/views/About.vue'),
    },
    {
      path: '/project',
      name: 'project',
      // which is lazy-loaded when the route is visited.
      component: () => import('@/views/projects.vue'),
    },
    {
      path: '/skills',
      name: 'skills',
      component: () => import('@/views/skill.vue'),
    },
    {
      path: '/contact',
      name: 'skill',
      component: () => import('@/views/contact.vue'),
    },
  ],
  scrollBehavior(to, from, savedPosition) {
    // always scroll to top
    return { top: 0 }
  },
})

export default router
