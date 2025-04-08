<template>
    <div class="min-h-screen bg-gray-50">
      <!-- NAVBAR -->
    
      
      <!-- HERO SECTION -->
      <div class="bg-[#132960] text-white py-12 md:py-16">
        <div class="container mx-auto px-4">
          <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2 text-center md:text-left mb-8 md:mb-0">
              <h1 class="text-3xl md:text-4xl font-bold mb-4">Escolha seu plano </h1>
              <p class="text-lg text-gray-300">
                Acesso imediato a canais ao vivo e conteúdo on demand com qualidade HD e 4K. 
                Compatível com todos seus dispositivos.
              </p>
              
            </div>
          
          </div>
        </div>
      </div>
      
      <!-- CARDS DE PLANOS -->
      <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          
          <!-- Plano 30 dias -->
          <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300 hover:shadow-md relative flex flex-col">
            <!-- Cabeçalho do plano -->
            <div class="p-6 border-b border-gray-100 flex-grow">
              <div class="bg-blue-50 text-blue-700 text-sm font-medium px-3 py-1 rounded-full inline-block mb-3">
                30 Dias
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-2">IPTV A</h3>
              
              
              <!-- Opções de pagamento -->
              <div class="space-y-3 mt-4">
                <!-- Recursos do plano -->
                <div class="border-b border-gray-100 pb-3 mb-3">
                  <div class="flex items-center mb-2">
                    <MonitorIcon size="16" class="text-blue-600 mr-2" />
                    <span class="text-sm font-medium text-gray-700">1 aparelho simultâneo</span>
                  </div>
                  <div class="flex items-center">
                    <ClockIcon size="16" class="text-blue-600 mr-2" />
                    <span class="text-sm font-medium text-gray-700">Acesso por 30 dias</span>
                  </div>
                </div>
                
                <!-- Preço PIX -->
                <div class="flex items-center p-3 bg-green-50 rounded-lg">
                  <div class="mr-3">
                    <CreditCardIcon size="20" class="text-green-600" />
                  </div>
                  <div>
                    <p class="text-sm font-medium text-gray-700">PIX (5% de desconto)</p>
                    <p class="text-2xl font-bold text-gray-900">R$ 28,40</p>
                  </div>
                </div>
                
                <!-- Preço Cartão -->
                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                  <div class="mr-3">
                    <CreditCardIcon size="20" class="text-gray-600" />
                  </div>
                  <div>
                    <p class="text-sm font-medium text-gray-700">Cartão de Crédito</p>
                    <p class="text-2xl font-bold text-gray-900">R$ 29,90</p>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Rodapé com botão -->
            <div class="p-6 border-t border-gray-100 bg-gray-50">
              <button 
                class="w-full py-2 rounded-lg transition-colors font-medium bg-white border border-gray-300 hover:bg-gray-50 text-gray-800"
                @click="selecionarPlano('basic-30')"
              >
                Assinar agora
              </button>
            </div>
          </div>
          
          <!-- Plano 3 meses -->
          <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300 hover:shadow-md relative flex flex-col">
            <!-- Badge de popular -->
         
            
            <!-- Cabeçalho do plano -->
            <div class="p-6 border-b border-gray-100 flex-grow">
              <div class="bg-blue-50 text-blue-700 text-sm font-medium px-3 py-1 rounded-full inline-block mb-3">
                3 Meses
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-2">IPTV B</h3>
        
              
              <!-- Opções de pagamento -->
              <div class="space-y-3 mt-4">
                <!-- Recursos do plano -->
                <div class="border-b border-gray-100 pb-3 mb-3">
                  <div class="flex items-center mb-2">
                    <MonitorIcon size="16" class="text-blue-600 mr-2" />
                    <span class="text-sm font-medium text-gray-700">2 aparelhos simultâneos</span>
                  </div>
                  <div class="flex items-center">
                    <ClockIcon size="16" class="text-blue-600 mr-2" />
                    <span class="text-sm font-medium text-gray-700">Acesso por 3 meses</span>
                  </div>
                </div>
                
                <!-- Preço PIX -->
                <div class="flex items-center p-3 bg-green-50 rounded-lg">
                  <div class="mr-3">
                    <CreditCardIcon size="20" class="text-green-600" />
                  </div>
                  <div>
                    <p class="text-sm font-medium text-gray-700">PIX (5% de desconto)</p>
                    <p class="text-2xl font-bold text-gray-900">R$ 75,90</p>
                    <p class="text-xs text-green-600">Economize R$ 14,00 em comparação a 3 planos mensais</p>
                  </div>
                </div>
                
                <!-- Preço Cartão -->
                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                  <div class="mr-3">
                    <CreditCardIcon size="20" class="text-gray-600" />
                  </div>
                  <div>
                    <p class="text-sm font-medium text-gray-700">Cartão de Crédito</p>
                    <p class="text-2xl font-bold text-gray-900">R$ 79,90</p>
                    <p class="text-xs text-green-600">Economize R$ 10,00 em comparação a 3 planos mensais</p>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Rodapé com botão -->
            <div class="p-6 border-t border-gray-100 bg-gray-50">
              <button 
                class="w-full py-2 rounded-lg transition-colors font-medium bg-blue-600 hover:bg-blue-700 text-white"
                @click="selecionarPlano('standard-90')"
              >
                Assinar agora
              </button>
            </div>
          </div>
          
          <!-- Plano 12 meses -->
          <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300 hover:shadow-md relative flex flex-col">
            <!-- Cabeçalho do plano -->
            <div class="p-6 border-b border-gray-100 flex-grow">
              <div class="bg-blue-50 text-blue-700 text-sm font-medium px-3 py-1 rounded-full inline-block mb-3">
                12 Meses
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-2">IPTV C</h3>

              
              <!-- Opções de pagamento -->
              <div class="space-y-3 mt-4">
                <!-- Recursos do plano -->
                <div class="border-b border-gray-100 pb-3 mb-3">
                  <div class="flex items-center mb-2">
                    <MonitorIcon size="16" class="text-blue-600 mr-2" />
                    <span class="text-sm font-medium text-gray-700">2 aparelhos simultâneos</span>
                  </div>
                  <div class="flex items-center">
                    <ClockIcon size="16" class="text-blue-600 mr-2" />
                    <span class="text-sm font-medium text-gray-700">Acesso por 12 meses</span>
                  </div>
                </div>
                
                <!-- Preço PIX -->
                <div class="flex items-center p-3 bg-green-50 rounded-lg">
                  <div class="mr-3">
                    <CreditCardIcon size="20" class="text-green-600" />
                  </div>
                  <div>
                    <p class="text-sm font-medium text-gray-700">PIX (5% de desconto)</p>
                    <p class="text-2xl font-bold text-gray-900">R$ 237,40</p>
                    <p class="text-xs text-green-600">Economize R$ 82,50 em comparação a 12 planos mensais</p>
                  </div>
                </div>
                
                <!-- Preço Cartão -->
                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                  <div class="mr-3">
                    <CreditCardIcon size="20" class="text-gray-600" />
                  </div>
                  <div>
                    <p class="text-sm font-medium text-gray-700">Cartão de Crédito</p>
                    <p class="text-2xl font-bold text-gray-900">R$ 249,90</p>
                    <p class="text-xs text-green-600">Economize R$ 70,00 em comparação a 12 planos mensais</p>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Rodapé com botão -->
            <div class="p-6 border-t border-gray-100 bg-gray-50">
              <button 
                class="w-full py-2 rounded-lg transition-colors font-medium bg-white border border-gray-300 hover:bg-gray-50 text-gray-800"
                @click="selecionarPlano('premium-365')"
              >
                Assinar agora
              </button>
            </div>
          </div>
        </div>
        
        <!-- Nota sobre renovação -->
        <div class="mt-6 text-center">
          <p class="text-gray-600 text-sm">
            <InfoIcon size="16" class="inline-block mr-1 text-blue-500" />
            Todos os planos são pagamentos únicos, sem renovação automática.
          </p>
        </div>
      </div>
      
      <!-- MODAL DE SELEÇÃO DE PLANO -->
      <div 
        v-if="planoSelecionado" 
        class="fixed inset-0 bg-[#0000005e] bg-opacity-50 z-50 flex items-center justify-center p-4"
      >
        <div class="bg-white rounded-xl shadow-lg w-full max-w-md overflow-hidden">
          <div class="p-6">
            <div class="flex justify-between items-center mb-4">
              <h2 class="text-xl font-bold text-gray-900">Assinar {{ getTituloPlanoPorId(planoSelecionado) }}</h2>
              <button 
                @click="planoSelecionado = null"
                class="p-1 rounded-full hover:bg-gray-100 transition-colors"
              >
                <XIcon size="20" class="text-gray-500" />
              </button>
            </div>
            
            <!-- Método de Pagamento -->
            <div class="mb-6">
              <p class="text-sm font-medium text-gray-700 mb-3">Selecione o método de pagamento:</p>
              <div class="grid grid-cols-2 gap-3">
                <div 
                  class="border rounded-lg p-3 flex flex-col items-center cursor-pointer transition-colors"
                  :class="metodoPagamento === 'pix' ? 'border-green-500 bg-green-50' : 'border-gray-200 hover:bg-gray-50'"
                  @click="metodoPagamento = 'pix'"
                >
                  <CreditCardIcon size="24" class="text-green-600 mb-2" />
                  <p class="font-medium text-gray-900">PIX</p>
                  <p class="text-xs text-green-600">5% de desconto</p>
                </div>
                
                <div 
                  class="border rounded-lg p-3 flex flex-col items-center cursor-pointer transition-colors"
                  :class="metodoPagamento === 'cartao' ? 'border-blue-500 bg-blue-50' : 'border-gray-200 hover:bg-gray-50'"
                  @click="metodoPagamento = 'cartao'"
                >
                  <CreditCardIcon size="24" class="text-blue-600 mb-2" />
                  <p class="font-medium text-gray-900">Cartão de Crédito</p>
                  <p class="text-xs text-gray-500">Parcelamento disponível</p>
                </div>
              </div>
            </div>
            
            <form @submit.prevent="finalizarAssinatura">
              <div class="space-y-4">
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Nome completo</label>
                  <input 
                    type="text" 
                    v-model="formAssinatura.nome" 
                    required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                    placeholder="Digite seu nome completo"
                  />
                </div>
                
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">E-mail</label>
                  <input 
                    type="email" 
                    v-model="formAssinatura.email" 
                    required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                    placeholder="exemplo@email.com"
                  />
                </div>
                
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Telefone</label>
                  <input 
                    type="tel" 
                    v-model="formAssinatura.telefone" 
                    required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                    placeholder="(00) 00000-0000"
                  />
                </div>
              </div>
              
              <div class="mt-6">
                <button 
                  type="submit"
                  class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-colors font-medium"
                >
                  Continuar para pagamento
                </button>
                <p class="text-xs text-gray-500 mt-2 text-center">
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
  import NavbarComponent from '@/components/NavbarComponent.vue';
  import { 
    X as XIcon,
    Info as InfoIcon,
    CreditCard as CreditCardIcon,
    CheckCircle as CheckCircleIcon,
    Monitor as MonitorIcon,
    Clock as ClockIcon
  } from 'lucide-vue-next';
  
  export default {
    name: 'IPTVPlans',
    components: {
      NavbarComponent,
      XIcon,
      InfoIcon,
      CreditCardIcon,
      CheckCircleIcon
    },
    data() {
      return {
        // Controles e estado
        planoSelecionado: null, // 'basic-30', 'standard-90', 'premium-365'
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
          case 'basic-30': return 'IPTV A (30 dias)';
          case 'standard-90': return 'IPTV B (3 meses)';
          case 'premium-365': return 'IPTV C (12 meses)';
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