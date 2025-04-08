<template>
    <div class="min-h-screen bg-gray-900 text-white">
      <!-- HERO SECTION -->
      <div class="relative overflow-hidden pt-16 pb-24">
        <div class="absolute inset-0 z-0">
          <div class="absolute inset-0 bg-gradient-to-b from-purple-900 to-gray-900 opacity-90"></div>
          <!-- Padrão de grade em background -->
          <div class="absolute inset-0" style="background-image: radial-gradient(rgba(255, 255, 255, 0.1) 1px, transparent 1px); background-size: 20px 20px;"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
          <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-blue-400">
              Desfrute da Melhor Experiência IPTV
            </h1>
            <p class="text-lg text-gray-300 mb-10">
              Disponível em todos os seus dispositivos, com a maior biblioteca de canais e conteúdo premium
            </p>
            
            <div class="flex flex-wrap justify-center gap-4 mb-10">
              <div class="flex items-center bg-gray-800 px-4 py-2 rounded-full">
                <CheckIcon size="16" class="text-purple-400 mr-2" />
                <span>+15.000 canais ao vivo</span>
              </div>
              <div class="flex items-center bg-gray-800 px-4 py-2 rounded-full">
                <CheckIcon size="16" class="text-purple-400 mr-2" />
                <span>Qualidade HD e 4K</span>
              </div>
              <div class="flex items-center bg-gray-800 px-4 py-2 rounded-full">
                <CheckIcon size="16" class="text-purple-400 mr-2" />
                <span>Suporte 24/7</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- PLANOS SECTION -->
      <div class="container mx-auto px-4 py-12 -mt-16 relative z-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          
          <!-- Plano 30 dias -->
          <div class="bg-gray-800 rounded-2xl overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl hover:shadow-purple-900/20 relative h-full">
            <!-- Header com gradiente -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-400 p-6">
              <div class="bg-white/20 text-white text-sm font-medium px-3 py-1 rounded-full inline-block mb-3 backdrop-blur-sm">
                30 Dias
              </div>
              <h3 class="text-2xl font-bold mb-2">Plano Básico</h3>
            </div>
            
            <!-- Conteúdo do plano -->
            <div class="p-6 space-y-6">
              <!-- Preço principal (PIX) -->
              <div class="text-center pb-6 border-b border-gray-700">
                <div class="text-sm text-gray-400 uppercase tracking-wider mb-1">PIX (5% desconto)</div>
                <div class="text-4xl font-bold text-white">R$ 28,40</div>
                <div class="text-sm text-gray-400 mt-1">pagamento único</div>
              </div>
              
              <!-- Preço secundário (Cartão) -->
              <div class="text-center pb-6 border-b border-gray-700">
                <div class="text-sm text-gray-400 uppercase tracking-wider mb-1">Cartão de Crédito</div>
                <div class="text-2xl font-bold text-gray-300">R$ 29,90</div>
                <div class="text-xs text-gray-500 mt-1">pagamento único</div>
              </div>
              
              <!-- Recursos -->
              <ul class="space-y-3">
                <li class="flex items-start">
                  <CheckIcon size="18" class="text-purple-400 mt-0.5 mr-2 flex-shrink-0" />
                  <span class="text-gray-300">1 aparelho simultâneo</span>
                </li>
                <li class="flex items-start">
                  <CheckIcon size="18" class="text-purple-400 mt-0.5 mr-2 flex-shrink-0" />
                  <span class="text-gray-300">Acesso por 30 dias</span>
                </li>
              </ul>
              
              <!-- Botão -->
              <button 
                class="w-full py-3 mt-6 rounded-xl bg-gray-700 hover:bg-gray-600 text-white font-medium transition-colors"
                @click="selecionarPlano('basico-30')"
              >
                Assinar agora
              </button>
            </div>
          </div>
          
          <!-- Plano 3 meses -->
          <div class="bg-gray-800 rounded-2xl overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl hover:shadow-purple-900/20 relative h-full ring-2 ring-purple-500">
            <!-- Destaque popular -->
            <div class="absolute top-0 right-0 bg-purple-500 text-xs font-bold px-4 py-1 uppercase tracking-wider">
              Popular
            </div>
            
            <!-- Header com gradiente -->
            <div class="bg-gradient-to-r from-purple-600 to-purple-400 p-6">
              <div class="bg-white/20 text-white text-sm font-medium px-3 py-1 rounded-full inline-block mb-3 backdrop-blur-sm">
                3 Meses
              </div>
              <h3 class="text-2xl font-bold mb-2">Plano Standard</h3>
            </div>
            
            <!-- Conteúdo do plano -->
            <div class="p-6 space-y-6">
              <!-- Preço principal (PIX) -->
              <div class="text-center pb-6 border-b border-gray-700">
                <div class="text-sm text-gray-400 uppercase tracking-wider mb-1">PIX (5% desconto)</div>
                <div class="text-4xl font-bold text-white">R$ 75,90</div>
                <div class="text-sm text-purple-400 mt-1">Economia de R$ 14,00</div>
              </div>
              
              <!-- Preço secundário (Cartão) -->
              <div class="text-center pb-6 border-b border-gray-700">
                <div class="text-sm text-gray-400 uppercase tracking-wider mb-1">Cartão de Crédito</div>
                <div class="text-2xl font-bold text-gray-300">R$ 79,90</div>
                <div class="text-xs text-purple-400 mt-1">Economia de R$ 10,00</div>
              </div>
              
              <!-- Recursos -->
              <ul class="space-y-3">
                <li class="flex items-start">
                  <CheckIcon size="18" class="text-purple-400 mt-0.5 mr-2 flex-shrink-0" />
                  <span class="text-gray-300">2 aparelhos simultâneos</span>
                </li>
                <li class="flex items-start">
                  <CheckIcon size="18" class="text-purple-400 mt-0.5 mr-2 flex-shrink-0" />
                  <span class="text-gray-300">Acesso por 3 meses</span>
                </li>
              </ul>
              
              <!-- Botão -->
              <button 
                class="w-full py-3 mt-6 rounded-xl bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white font-medium transition-all"
                @click="selecionarPlano('standard-90')"
              >
                Assinar agora
              </button>
            </div>
          </div>
          
          <!-- Plano 12 meses -->
          <div class="bg-gray-800 rounded-2xl overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl hover:shadow-purple-900/20 relative h-full">
            <!-- Header com gradiente -->
            <div class="bg-gradient-to-r from-indigo-600 to-indigo-400 p-6">
              <div class="bg-white/20 text-white text-sm font-medium px-3 py-1 rounded-full inline-block mb-3 backdrop-blur-sm">
                12 Meses
              </div>
              <h3 class="text-2xl font-bold mb-2">Plano Premium</h3>
            </div>
            
            <!-- Conteúdo do plano -->
            <div class="p-6 space-y-6">
              <!-- Preço principal (PIX) -->
              <div class="text-center pb-6 border-b border-gray-700">
                <div class="text-sm text-gray-400 uppercase tracking-wider mb-1">PIX (5% desconto)</div>
                <div class="text-4xl font-bold text-white">R$ 237,40</div>
                <div class="text-sm text-purple-400 mt-1">Economia de R$ 82,50</div>
              </div>
              
              <!-- Preço secundário (Cartão) -->
              <div class="text-center pb-6 border-b border-gray-700">
                <div class="text-sm text-gray-400 uppercase tracking-wider mb-1">Cartão de Crédito</div>
                <div class="text-2xl font-bold text-gray-300">R$ 249,90</div>
                <div class="text-xs text-purple-400 mt-1">Economia de R$ 70,00</div>
              </div>
              
              <!-- Recursos -->
              <ul class="space-y-3">
                <li class="flex items-start">
                  <CheckIcon size="18" class="text-purple-400 mt-0.5 mr-2 flex-shrink-0" />
                  <span class="text-gray-300">4 aparelhos simultâneos</span>
                </li>
                <li class="flex items-start">
                  <CheckIcon size="18" class="text-purple-400 mt-0.5 mr-2 flex-shrink-0" />
                  <span class="text-gray-300">Acesso por 12 meses</span>
                </li>
              </ul>
              
              <!-- Botão -->
              <button 
                class="w-full py-3 mt-6 rounded-xl bg-gray-700 hover:bg-gray-600 text-white font-medium transition-colors"
                @click="selecionarPlano('premium-365')"
              >
                Assinar agora
              </button>
            </div>
          </div>
        </div>
        
        <!-- Nota sobre renovação -->
        <div class="mt-10 text-center">
          <p class="text-gray-400 text-sm flex items-center justify-center">
            <InfoIcon size="16" class="inline-block mr-1 text-purple-400" />
            Todos os planos são pagamentos únicos, sem renovação automática.
          </p>
        </div>
      </div>
      
      <!-- MODAL DE SELEÇÃO DE PLANO -->
      <div 
        v-if="planoSelecionado" 
        class="fixed inset-0 bg-black/70 backdrop-blur-sm z-50 flex items-center justify-center p-4"
      >
        <div class="bg-gray-800 rounded-2xl shadow-2xl w-full max-w-md overflow-hidden border border-purple-500/30">
          <div class="p-6">
            <div class="flex justify-between items-center mb-6">
              <h2 class="text-xl font-bold text-white">Assinar {{ getTituloPlanoPorId(planoSelecionado) }}</h2>
              <button 
                @click="planoSelecionado = null"
                class="p-1 rounded-full text-gray-400 hover:text-white hover:bg-gray-700 transition-colors"
              >
                <XIcon size="20" />
              </button>
            </div>
            
            <!-- Método de Pagamento -->
            <div class="mb-8">
              <p class="text-sm font-medium text-gray-300 mb-3">Selecione o método de pagamento:</p>
              <div class="grid grid-cols-2 gap-3">
                <div 
                  class="rounded-xl p-4 flex flex-col items-center cursor-pointer transition-all"
                  :class="metodoPagamento === 'pix' ? 'bg-gradient-to-br from-green-500/20 to-green-700/20 border-2 border-green-500' : 'bg-gray-700/50 border-2 border-transparent hover:border-gray-600'"
                  @click="metodoPagamento = 'pix'"
                >
                  <div class="w-10 h-10 rounded-full bg-green-500/20 flex items-center justify-center mb-2">
                    <CreditCardIcon size="20" class="text-green-400" />
                  </div>
                  <p class="font-medium text-white">PIX</p>
                  <p class="text-xs text-green-400">5% de desconto</p>
                </div>
                
                <div 
                  class="rounded-xl p-4 flex flex-col items-center cursor-pointer transition-all"
                  :class="metodoPagamento === 'cartao' ? 'bg-gradient-to-br from-blue-500/20 to-blue-700/20 border-2 border-blue-500' : 'bg-gray-700/50 border-2 border-transparent hover:border-gray-600'"
                  @click="metodoPagamento = 'cartao'"
                >
                  <div class="w-10 h-10 rounded-full bg-blue-500/20 flex items-center justify-center mb-2">
                    <CreditCardIcon size="20" class="text-blue-400" />
                  </div>
                  <p class="font-medium text-white">Cartão de Crédito</p>
                  <p class="text-xs text-gray-400">Parcelamento disponível</p>
                </div>
              </div>
            </div>
            
            <form @submit.prevent="finalizarAssinatura">
              <div class="space-y-4">
                <div>
                  <label class="block text-sm font-medium text-gray-300 mb-1">Nome completo</label>
                  <input 
                    type="text" 
                    v-model="formAssinatura.nome" 
                    required
                    class="w-full bg-gray-700 border border-gray-600 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none"
                    placeholder="Digite seu nome completo"
                  />
                </div>
                
                <div>
                  <label class="block text-sm font-medium text-gray-300 mb-1">E-mail</label>
                  <input 
                    type="email" 
                    v-model="formAssinatura.email" 
                    required
                    class="w-full bg-gray-700 border border-gray-600 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none"
                    placeholder="exemplo@email.com"
                  />
                </div>
                
                <div>
                  <label class="block text-sm font-medium text-gray-300 mb-1">Telefone</label>
                  <input 
                    type="tel" 
                    v-model="formAssinatura.telefone" 
                    required
                    class="w-full bg-gray-700 border border-gray-600 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none"
                    placeholder="(00) 00000-0000"
                  />
                </div>
              </div>
              
              <div class="mt-8">
                <button 
                  type="submit"
                  class="w-full py-3 rounded-xl bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white font-medium transition-all"
                >
                  Continuar para pagamento
                </button>
                <p class="text-xs text-gray-400 mt-3 text-center flex items-center justify-center">
                  <LockIcon size="12" class="mr-1" />
                  Ambiente seguro. Seus dados estão protegidos.
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import { 
    X as XIcon,
    Info as InfoIcon,
    CreditCard as CreditCardIcon,
    Check as CheckIcon,
    Lock as LockIcon
  } from 'lucide-vue-next';
  
  export default {
    name: 'IPTVPlansDark',
    components: {
      XIcon,
      InfoIcon,
      CreditCardIcon,
      CheckIcon,
      LockIcon
    },
    data() {
      return {
        // Controles e estado
        planoSelecionado: null, // 'basico-30', 'standard-90', 'premium-365'
        metodoPagamento: 'pix', // 'pix' ou 'cartao'
        formAssinatura: {
          nome: '',
          email: '',
          telefone: ''
        }
      };
    },
    methods: {
      selecionarPlano(plano) {
        this.planoSelecionado = plano;
      },
      getTituloPlanoPorId(id) {
        switch(id) {
          case 'basico-30': return 'Plano Básico (30 dias)';
          case 'standard-90': return 'Plano Standard (3 meses)';
          case 'premium-365': return 'Plano Premium (12 meses)';
          default: return 'Plano';
        }
      },
      finalizarAssinatura() {
        // Aqui seria implementada a lógica de processamento da assinatura
        // Normalmente, enviaria os dados para o backend e redirecionaria para a página de pagamento
        const metodoPagamentoText = this.metodoPagamento === 'pix' ? 'PIX' : 'Cartão de Crédito';
        alert(`Assinatura do ${this.getTituloPlanoPorId(this.planoSelecionado)} solicitada com sucesso! 
  Método de pagamento: ${metodoPagamentoText}
  Você será redirecionado para o pagamento.`);
        
        this.planoSelecionado = null;
        this.formAssinatura = { nome: '', email: '', telefone: '' };
      }
    }
  };
  </script>