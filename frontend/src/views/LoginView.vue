<template>
  <div class="flex min-h-screen">
    <div class="w-[70%] flex flex-col bg-[#1c2e5c] justify-center items-center p-5 clip-custom">
      <!-- Imagem de fundo e fundo azul -->
      <img src="@/assets/3D glasses-amico 1.svg" alt="Illustration" class="w-1/2 h-auto" />
      <p class="text-white text-center text-2xl" >Gerencie suas assinaturas de forma <br> simples e rápida</p>
    </div>

    <div class="w-[30%] bg-white flex justify-center items-center">
      <!-- Formulário de Login -->
      <div class="w-full max-w-md p-5">
        <h2 class="text-3xl font-bold text-[#1c2e5c]  font-montserrat flex justify-center items-center gap-2 mb-5">
          <MonitorCog  class="w-12 h-12" />
          SubControl
        </h2>

        <h3 class="text-2xl mb-3 font-popins text-center font-bold text-[#4D4D4D]">Login</h3>
        <p class="text-sm text-gray-500 mb-6 text-center">Faça seu login com seu e-mail e senha ou crie uma <br> nova conta</p>
        
        <form @submit.prevent="login">
          <div class="mb-6">
            <div class="relative">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <Mail class="w-5 h-5 text-gray-400" />
                </span>
                <input
                  type="email"
                  id="email"
                  v-model="email"
                  placeholder="Email"
                  required
                  class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                />
              </div>
          </div>
          <div class="mb-6">
            <div class="relative">
              <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <LockKeyhole class="w-5 h-5 text-gray-400" />
              </span>
              <input
                type="password"
                id="password"
                v-model="password"
                required
                placeholder="Senha"
                class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <p><a href="#" class="text-[#1c2e5c] text-sm hover:underline">Esqueci minha senha</a></p>
          </div>
          <div class="flex justify-center">
            <button type="submit" class="w-[30%] py-2 bg-transparent border-2 border-blue text-[#163c6b] rounded-xl hover:bg-[#163c6b] hover:text-white text-center cursor-pointer">Entrar</button>
          </div>
        </form>

        <div class="mt-6 text-center space-y-2">
         
          <p><a href="#" class="text-[#1c2e5c] text-sm hover:underline">Não tem uma conta? Criar conta</a></p>
        </div>
      
      </div>
    </div>
  </div>
</template>
  
<script>
  import { MonitorCog, Mail, LockKeyhole  } from 'lucide-vue-next';

  export default {
    data() {
      return {
        email: '',
        password: ''
      };
    },
    components: {
      MonitorCog, Mail, LockKeyhole 
    },
    methods: {
      login() {
        console.log("Login attempt with", this.email, this.password);
      }
    }
  };
</script>
  
<style scoped>
  .clip-custom {
    clip-path: polygon(0 0, 100% 0%, 80% 100%, 0% 100%);
  }
</style>
 