import { createRouter, createWebHistory } from 'vue-router';

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
      meta: {
        requiresAuth: true,
        roles: ['ROLE_ADMIN', 'ROLE_ROOT_ADMIN'],
      },
    },
    {
      path: '/viewPlan',
      name: 'viewPlan',
      component: viewPlanView,
    },
  ],
});

router.beforeEach((to, from, next) => {

  if (to.meta.requiresAuth) {
    const token = localStorage.getItem('token');
    const user = localStorage.getItem('user');

    if (!token || !user) {
      return next({ name: 'login' });
    }

    let parsedUser = null;
    try {
      parsedUser = JSON.parse(user);
    } catch (e) {
      console.error("Erro ao parsear o usuário:", e);
      return next({ name: 'login' });
    }

    if (parsedUser && parsedUser.role) {
      if (to.meta.roles && !to.meta.roles.includes(parsedUser.role)) {
        return next({ name: 'login' });
      }
    } else {
      return next({ name: 'login' });
    }
  }

  next();
});

export default router;
