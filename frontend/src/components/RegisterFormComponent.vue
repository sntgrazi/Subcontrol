<template>
    <div class="w-full max-w-md p-5">
      <h2 class="text-3xl font-bold text-[#1c2e5c]  font-montserrat flex justify-center items-center gap-2 mb-5">
        <MonitorCog  class="w-12 h-12" />
        SubControl
      </h2>

      <h3 class="text-2xl mb-3 font-popins text-center font-bold text-[#4D4D4D]">Cadastro</h3>
      <p class="text-sm text-gray-500 mb-6 text-center">
      Crie sua conta preenchendo os campos abaixo<br>
      e comece a gerenciar suas assinaturas.
    </p>
      
      <form @submit.prevent="register">
        <div class="mb-6">
          <div class="relative">
              <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <User class="w-5 h-5 text-gray-400" />
              </span>
              <input
                type="name"
                id="name"
                v-model="name"
                placeholder="Nome completo"
                required
                class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
        </div>
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
        </div>
        <div class="flex justify-center">
          <button type="submit" class="w-[30%] py-2 bg-transparent border-2 border-blue text-[#163c6b] rounded-xl hover:bg-[#163c6b] hover:text-white text-center cursor-pointer">Cadastrar</button>
        </div>
      </form>

      <div class="mt-6 text-center space-y-2">
       
        <p class="text-[#1c2e5c] text-sm ">Já tem uma conta?
            <button @click="$emit('switch-to-login')" class="text-[#1c2e5c] text-sm hover:underline cursor-pointer">Entre agora</button>
        </p>
      </div>
    
    </div>

</template>

<script>
import { MonitorCog, Mail, LockKeyhole, User  } from 'lucide-vue-next';
export default {
data() {
  return {
    email: '',
    password: '',
    name: ''
  };
},
components: {
  MonitorCog,
  Mail,
  LockKeyhole, User
},
methods: {
  login() {
    console.log("Register attempt with", this.email, this.password);
  }
}
};
</script>