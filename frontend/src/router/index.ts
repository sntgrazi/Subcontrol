import { createRouter, createWebHistory } from 'vue-router'

import LoginView from '@/views/LoginRegisterView.vue';
import AdminDashboard from '@/views/AdminDashboard.vue';
import viewPlanView from '@/views/viewPlanView.vue';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'login',
      component: LoginView,
    },
    {
      path: '/admin',
      name: 'AdminDashboard',
      component: AdminDashboard,
    },
    {
      path: '/viewPlan',
      name: 'viewPlan',
      component: viewPlanView,
    }
  ],
})

export default router
