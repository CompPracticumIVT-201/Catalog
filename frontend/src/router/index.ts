import { createRouter, createWebHistory } from 'vue-router'
//import Registration from "./views/Registration.vue";
//import AboutView from "@/views/AboutView.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/registration',
      name: 'A',
      component: () => import('../components/InDev/Registration.vue')
    },
    {
      path: '/logIn',
      name: 'B',
      component: () => import('../components/InDev/logIn.vue')
    },
    {
      path: '/Popular',
      name: 'C',
      component: () => import('../components/InDev/Popular.vue')
    },
    {
      path: '/Reviews',
      name: 'D',
      component: () => import('../components/InDev/Reviews.vue')
    },
    {
      path: '/Mallings',
      name: 'E',
      component: () => import('../components/InDev/Mallings.vue')
    },
    {
      path: '/telegram',
      name: 'G',
      component: () => import('../components/InDev/Telegram.vue')
    },
    {
      path: '/vkontakte',
      name: 'F',
      component: () => import('../components/InDev/Vkontakte.vue')
    },
    {
      path: '',
      name: '',
      component: () => import('../components/MainWrapper.vue')
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/AboutView.vue')
    }
  ]
})

export default router
