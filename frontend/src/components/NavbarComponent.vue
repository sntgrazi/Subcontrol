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
          <button @click="logout" class="text-white font-medium hover:underline">
            Sair
          </button>
        </div>
      </nav>
</template>

<script>

import { MonitorCog } from 'lucide-vue-next';

export default {
  methods: {
    logout() {
      // Simulação de logout, você pode ajustar conforme sua lógica de auth
      this.$router.push('/');
    }
  },
  components: {
    MonitorCog
  }
};

</script>