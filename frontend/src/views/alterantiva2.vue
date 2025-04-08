<template>
    <div class="min-h-screen bg-gray-50">
      <!-- HEADER -->
      <div class="bg-[#132960] text-white py-12">
        <div class="container mx-auto px-4 text-center">
          <h1 class="text-3xl md:text-4xl font-bold mb-3">Escolha seu plano IPTV</h1>
          <p class="text-lg text-blue-200 max-w-3xl mx-auto">
            Acesso imediato a canais ao vivo e conteúdo on demand
          </p>
        </div>
      </div>
      
      <!-- CARDS DE PLANOS -->
      <div class="container mx-auto px-4 py-12 -mt-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          
          <!-- Plano 30 dias -->
          <div class="bg-white rounded-xl shadow-md border-t-4 border-[#132960] overflow-hidden transition-all duration-300 hover:shadow-lg relative flex flex-col">
            <!-- Cabeçalho do plano -->
            <div class="p-6 border-b border-gray-100 flex-grow">
              <div class="bg-blue-50 text-[#132960] text-sm font-medium px-3 py-1 rounded-full inline-block mb-3">
                30 Dias
              </div>
              <h3 class="text-xl font-bold text-[#132960] mb-2">IPTV A</h3>
              
              <!-- Recursos do plano -->
              <div class="border-b border-gray-100 pb-3 mb-3">
                <div class="flex items-center mb-2">
                  <MonitorIcon size="16" class="text-[#132960] mr-2" />
                  <span class="text-sm font-medium text-gray-700">1 aparelho simultâneo</span>
                </div>
                <div class="flex items-center">
                  <ClockIcon size="16" class="text-[#132960] mr-2" />
                  <span class="text-sm font-medium text-gray-700">Acesso por 30 dias</span>
                </div>
              </div>
              
              <!-- Opções de pagamento -->
              <div class="space-y-3 mt-4">
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
                class="w-full py-2 rounded-lg transition-colors font-medium border border-[#132960] text-[#132960] hover:bg-[#132960] hover:text-white"
                @click="selecionarPlano('basic-30')"
              >
                Assinar agora
              </button>
            </div>
          </div>
          
          <!-- Plano 3 meses -->
          <div class="bg-white rounded-xl shadow-md border-t-4 border-[#132960] overflow-hidden transition-all duration-300 hover:shadow-lg relative flex flex-col ring-2 ring-[#132960]">
            <!-- Badge de popular -->
            <div class="absolute top-0 right-0 bg-[#132960] text-white text-xs px-3 py-1 font-medium">
              Mais Popular
            </div>
            
            <!-- Cabeçalho do plano -->
            <div class="p-6 border-b border-gray-100 flex-grow">
              <div class="bg-blue-50 text-[#132960] text-sm font-medium px-3 py-1 rounded-full inline-block mb-3">
                3 Meses
              </div>
              <h3 class="text-xl font-bold text-[#132960] mb-2">IPTV B</h3>
              
              <!-- Recursos do plano -->
              <div class="border-b border-gray-100 pb-3 mb-3">
                <div class="flex items-center mb-2">
                  <MonitorIcon size="16" class="text-[#132960] mr-2" />
                  <span class="text-sm font-medium text-gray-700">2 aparelhos simultâneos</span>
                </div>
                <div class="flex items-center">
                  <ClockIcon size="16" class="text-[#132960] mr-2" />
                  <span class="text-sm font-medium text-gray-700">Acesso por 3 meses</span>
                </div>
              </div>
              
              <!-- Opções de pagamento -->
              <div class="space-y-3 mt-4">
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
                class="w-full py-2 rounded-lg transition-colors font-medium bg-[#132960] text-white hover:bg-[#0e1f45]"
                @click="selecionarPlano('standard-90')"
              >
                Assinar agora
              </button>
            </div>
          </div>
          
          <!-- Plano 12 meses -->
          <div class="bg-white rounded-xl shadow-md border-t-4 border-[#132960] overflow-hidden transition-all duration-300 hover:shadow-lg relative flex flex-col">
            <!-- Cabeçalho do plano -->
            <div class="p-6 border-b border-gray-100 flex-grow">
              <div class="bg-blue-50 text-[#132960] text-sm font-medium px-3 py-1 rounded-full inline-block mb-3">
                12 Meses
              </div>
              <h3 class="text-xl font-bold text-[#132960] mb-2">IPTV C</h3>
              
              <!-- Recursos do plano -->
              <div class="border-b border-gray-100 pb-3 mb-3">
                <div class="flex items-center mb-2">
                  <MonitorIcon size="16" class="text-[#132960] mr-2" />
                  <span class="text-sm font-medium text-gray-700">4 aparelhos simultâneos</span>
                </div>
                <div class="flex items-center">
                  <ClockIcon size="16" class="text-[#132960] mr-2" />
                  <span class="text-sm font-medium text-gray-700">Acesso por 12 meses</span>
                </div>
              </div>
              
              <!-- Opções de pagamento -->
              <div class="space-y-3 mt-4">
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
                class="w-full py-2 rounded-lg transition-colors font-medium border border-[#132960] text-[#132960] hover:bg-[#132960] hover:text-white"
                @click="selecionarPlano('premium-365')"
              >
                Assinar agora
              </button>
            </div>
          </div>
        </div>
        
        <!-- Nota sobre renovação -->
        <div class="mt-8 text-center">
          <p class="text-gray-600 text-sm flex items-center justify-center">
            <InfoIcon size="16" class="inline-block mr-1 text-[#132960]" />
            Todos os planos são pagamentos únicos, sem renovação automática.
          </p>
        </div>
      </div>
      
      <!-- RECURSOS SECTION -->
      <div class="bg-[#f5f7fa] border-t border-b border-gray-200 py-16">
        <div class="container mx-auto px-4">
          <h2 class="text-2xl font-bold text-center text-[#132960] mb-12">Por que escolher nosso serviço</h2>
          
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-sm text-center">
              <div class="w-16 h-16 mx-auto rounded-full bg-[#132960]/10 flex items-center justify-center mb-4">
                <MonitorIcon size="28" class="text-[#132960]" />
              </div>
              <h3 class="text-lg font-medium text-[#132960] mb-2">Múltiplos dispositivos</h3>
              <p class="text-gray-600">Compatível com Smart TVs, smartphones, computadores e set-top boxes.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm text-center">
              <div class="w-16 h-16 mx-auto rounded-full bg-[#132960]/10 flex items-center justify-center mb-4">
                <TvIcon size="28" class="text-[#132960]" />
              </div>
              <h3 class="text-lg font-medium text-[#132960] mb-2">Milhares de canais</h3>
              <p class="text-gray-600">Acesso a mais de 15.000 canais de TV de todo o mundo em HD e 4K.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm text-center">
              <div class="w-16 h-16 mx-auto rounded-full bg-[#132960]/10 flex items-center justify-center mb-4">
                <HeadphonesIcon size="28" class="text-[#132960]" />
              </div>
              <h3 class="text-lg font-medium text-[#132960] mb-2">Suporte 24/7</h3>
              <p class="text-gray-600">Equipe de suporte disponível 24 horas por dia, 7 dias por semana.</p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- MODAL DE SELEÇÃO DE PLANO -->
      <div 
        v-if="planoSelecionado" 
        class="fixed inset-0 bg-black/60 z-50 flex items-center justify-center p-4"
      >
        <div class="bg-white rounded-xl shadow-lg w-full max-w-md overflow-hidden">
          <div class="p-6">
            <div class="flex justify-between items-center mb-6">
              <h2 class="text-xl font-bold text-[#132960]">Assinar {{ getTituloPlanoPorId(planoSelecionado) }}</h2>
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
                  :class="metodoPagamento === 'cartao' ? 'border-[#132960] bg-blue-50' : 'border-gray-200 hover:bg-gray-50'"
                  @click="metodoPagamento = 'cartao'"
                >
                  <CreditCardIcon size="24" class="text-[#132960] mb-2" />
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
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#132960] focus:border-[#132960] outline-none"
                    placeholder="Digite seu nome completo"
                  />
                </div>
                
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">E-mail</label>
                  <input 
                    type="email" 
                    v-model="formAssinatura.email" 
                    required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#132960] focus:border-[#132960] outline-none"
                    placeholder="exemplo@email.com"
                  />
                </div>
                
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Telefone</label>
                  <input 
                    type="tel" 
                    v-model="formAssinatura.telefone" 
                    required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#132960] focus:border-[#132960] outline-none"
                    placeholder="(00) 00000-0000"
                  />
                </div>
              </div>
              
              <div class="mt-6">
                <button 
                  type="submit"
                  class="w-full bg-[#132960] text-white py-2 rounded-lg hover:bg-[#0e1f45] transition-colors font-medium"
                >
                  Continuar para pagamento
                </button>
                <p class="text-xs text-gray-500 mt-2 text-center flex items-center justify-center">
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
    Monitor as MonitorIcon,
    Clock as ClockIcon,
    Tv as TvIcon,
    Headphones as HeadphonesIcon,
    Lock as LockIcon
  } from 'lucide-vue-next';
  
  export default {
    name: 'IPTVPlansBlue',
    components: {
      XIcon,
      InfoIcon,
      CreditCardIcon,
      MonitorIcon,
      ClockIcon,
      TvIcon,
      HeadphonesIcon,
      LockIcon
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