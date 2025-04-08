<template>
  <div class="flex min-h-screen">
    <div class="w-[70%] flex flex-col bg-[#1c2e5c] justify-center items-center p-5 clip-custom">
      <!-- Imagem de fundo e fundo azul -->
      <img src="@/assets/3D glasses-amico 1.svg" alt="Illustration" class="w-1/2 h-auto" />
      <p class="text-white text-center text-2xl" >Gerencie suas assinaturas de forma <br> simples e rápida</p>
    </div>

    <div class="w-[30%] bg-white flex justify-center items-center">
      <LoginFormComponent v-if="isLogin" @switch-to-register="isLogin = false" />
      <RegisterFormComponent v-else @switch-to-login="isLogin = true" />
    </div>
  </div>
</template>
  
<script>

  import LoginFormComponent from '@/components/LoginFormComponent.vue';
  import RegisterFormComponent from '@/components/RegisterFormComponent.vue';

  export default {
    data() {
      return {
        isLogin: true
      };
    },
    components: {
      LoginFormComponent,
      RegisterFormComponent
    },
    methods: {
      login() {
        if (this.email === 'admin@admin.com' && this.password === '123456') {
            this.$router.push('/admin');
          } else {
            alert('Credenciais inválidas');
          }
      }
    }
  };
</script>
  
<style scoped>
  .clip-custom {
    clip-path: polygon(0 0, 100% 0%, 80% 100%, 0% 100%);
  }
</style>
 