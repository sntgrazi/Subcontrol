<template>
    <nav class="bg-[#132960] shadow px-8 py-4 flex justify-between items-center">
        <!-- Logo + Nome do Sistema -->
        <div class="flex items-center space-x-10">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <MonitorCog class="w-9 h-9 text-white" />
                <span class="text-xl font-bold text-white">SubControl</span>
            </div>

            <!-- Links próximos à logo -->
            <div class="flex items-center space-x-6">
                <router-link to="/admin" class="text-white font-normal hover:underline">
                Gerenciar Planos
                </router-link>
                <router-link to="/admin/conta" class="text-white font-normal hover:underline">
                Minha Conta
                </router-link>
            </div>
            </div>
  
        <!-- Menu de navegação -->
        <div class="flex items-center space-x-6">
          <button @click="logout" class="text-white font-medium hover:underline cursor-pointer">
            Sair
          </button>
        </div>
      </nav>
</template>

<script>

import { MonitorCog } from 'lucide-vue-next';
import { logout } from '../services/authService'; // Importa o serviço de logout


export default {
  methods: {
    logout() {
      localStorage.removeItem('token'); 
      localStorage.removeItem('user'); 

      this.$router.push({ name: 'login' });

      // Chama o serviço de logout, se necessário
      logout()
      .then(() => {
      console.log('Logout successful');
      })
      .catch((error) => {
        console.error('Logout failed', error);
      });
    }
  },
  components: {
    MonitorCog
  }
};

</script>