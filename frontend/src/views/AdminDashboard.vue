<template>
  <div class="min-h-screen bg-gray-100">
    <!-- NAVBAR -->
    <NavbarComponent />
    
    <!-- CONTEÚDO PRINCIPAL -->
    <div class="p-6 md:p-10">
      <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
        <h1 class="text-2xl md:text-3xl font-bold text-[#1c2e5c]">Gerenciar Planos</h1>
        
        <div class="mt-4 md:mt-0">
          <button @click="mostrarModalCriar = true" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 flex items-center transition-colors">
            <PlusIcon size="18" class="mr-2" /> Criar novo plano
          </button>
        </div>
      </div>

      <!-- Filtros e Pesquisa -->
      <div class="mb-6">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
          <div class="mb-4 md:mb-0">
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <SearchIcon size="16" class="text-gray-400" />
              </div>
              <input 
                type="text" 
                v-model="termoPesquisa" 
                placeholder="Pesquisar planos..." 
                class="border rounded px-3 py-2 pl-10 w-full md:w-64 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
              />
            </div>
          </div>
          
          <div class="flex flex-col md:flex-row gap-2 md:gap-4">
            <select v-model="filtroStatus" class="border rounded px-3 py-2">
              <option value="">Todos os status</option>
              <option value="ativo">Ativo</option>
              <option value="inativo">Inativo</option>
            </select>
            
            <select v-model="ordenacao" class="border rounded px-3 py-2">
              <option value="nome">Ordenar por nome</option>
              <option value="preco">Ordenar por preço</option>
              <option value="data">Ordenar por data de criação</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Listagem de planos -->
      <div class="bg-white shadow-sm rounded-lg overflow-hidden">
        <div v-if="planosFiltrados.length === 0" class="text-center py-12 text-gray-500">
          <div class="mb-3">
            <SearchIcon size="32" class="inline-block text-gray-300" />
          </div>
          Nenhum plano encontrado com os filtros selecionados.
        </div>
        
        <div v-else class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200 border-collapse">
            <thead>
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-gray-50">Nome</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-gray-50">Descrição</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-gray-50">Preço</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-gray-50">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-gray-50">Assinantes</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-gray-50">Ações</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100">
              <tr v-for="plano in planosFiltrados" :key="plano.id" class="hover:bg-gray-50 transition-colors">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ plano.nome }}</td>
                <td class="px-6 py-4">
                  <div class="truncate max-w-xs text-sm text-gray-700">{{ plano.descricao }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">R$ {{ plano.preco.toFixed(2) }}/mês</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span 
                    :class="plano.status === 'ativo' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'" 
                    class="px-2 py-1 rounded-full text-xs font-medium"
                  >
                    {{ plano.status === 'ativo' ? 'Ativo' : 'Inativo' }}
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ plano.assinantes }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex space-x-3">
                    <button 
                      @click="editarPlano(plano)" 
                      class="text-blue-600 hover:text-blue-900 p-1 rounded-full hover:bg-blue-100 transition-colors"
                      title="Editar plano"
                    >
                      <Edit2Icon size="18" />
                    </button>
                    <button 
                      @click="toggleStatus(plano)" 
                      class="p-1 rounded-full transition-colors"
                      :class="plano.status === 'ativo' ? 'text-yellow-600 hover:text-yellow-900 hover:bg-yellow-100' : 'text-green-600 hover:text-green-900 hover:bg-green-100'"
                      :title="plano.status === 'ativo' ? 'Desativar plano' : 'Ativar plano'"
                    >
                      <XCircleIcon v-if="plano.status === 'ativo'" size="18" />
                      <CheckCircleIcon v-else size="18" />
                    </button>
                    <button 
                      @click="confirmarExclusao(plano)" 
                      class="text-red-600 hover:text-red-900 p-1 rounded-full hover:bg-red-100 transition-colors"
                      title="Excluir plano"
                    >
                      <Trash2Icon size="18" />
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Paginação -->
        <div class="px-6 py-4 bg-white border-t border-gray-100 mt-0 flex justify-between items-center">
          <div class="text-sm text-gray-700">
            Mostrando {{ paginaAtual * itensPorPagina - itensPorPagina + 1 }} a 
            {{ Math.min(paginaAtual * itensPorPagina, planosFiltrados.length) }} 
            de {{ planosFiltrados.length }} resultados
          </div>
          
          <div class="flex space-x-1">
            <button 
              @click="paginaAtual--" 
              :disabled="paginaAtual === 1"
              :class="paginaAtual === 1 ? 'opacity-50 cursor-not-allowed' : ''"
              class="px-3 py-1 border border-gray-200 rounded text-sm hover:bg-gray-50 transition-colors"
            >
              Anterior
            </button>
            
            <span v-for="pagina in totalPaginas" :key="pagina">
              <button 
                @click="paginaAtual = pagina"
                :class="paginaAtual === pagina ? 'bg-blue-600 text-white border-blue-600' : 'bg-white hover:bg-gray-50'"
                class="px-3 py-1 border border-gray-200 rounded text-sm transition-colors"
              >
                {{ pagina }}
              </button>
            </span>
            
            <button 
              @click="paginaAtual++" 
              :disabled="paginaAtual === totalPaginas"
              :class="paginaAtual === totalPaginas ? 'opacity-50 cursor-not-allowed' : ''"
              class="px-3 py-1 border border-gray-200 rounded text-sm hover:bg-gray-50 transition-colors"
            >
              Próxima
            </button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Off-canvas para criar/editar plano -->
    <div 
      class="fixed inset-0 bg-[#00000079] bg-opacity-50 z-40 transition-opacity duration-300"
      :class="(mostrarModalCriar || planoEmEdicao) ? 'opacity-100' : 'opacity-0 pointer-events-none'"
      @click="fecharModal"
    ></div>
    
    <div 
      class="fixed top-0 right-0 w-full md:w-1/3 h-full bg-white shadow-lg z-50 transform transition-transform duration-300 ease-in-out overflow-y-auto"
      :class="(mostrarModalCriar || planoEmEdicao) ? 'translate-x-0' : 'translate-x-full'"
    >
      <div class="sticky top-0 bg-white p-4 border-b flex justify-between items-center z-10">
        <h2 class="text-xl font-bold">{{ planoEmEdicao ? 'Editar Plano' : 'Criar Novo Plano' }}</h2>
        <button 
          @click="fecharModal" 
          class="p-2 rounded-full hover:bg-gray-200 transition-colors"
        >
          <XIcon size="20" />
        </button>
      </div>
      
      <div class="p-6">
        <form @submit.prevent="salvarPlano">
          <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Nome do Plano</label>
            <input 
              type="text" 
              v-model="formPlano.nome" 
              required
              class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
            />
          </div>
          
          <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Descrição</label>
            <textarea 
              v-model="formPlano.descricao" 
              rows="3"
              class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
            ></textarea>
          </div>
          
          <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Preço Mensal (R$)</label>
            <input 
              type="number" 
              v-model="formPlano.preco" 
              step="0.01"
              required
              class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
            />
          </div>
          
          <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Recursos (um por linha)</label>
            <textarea 
              v-model="formPlano.recursosText" 
              rows="5"
              placeholder="Ex: 50GB de armazenamento&#10;Suporte prioritário&#10;Acesso a todos os módulos"
              class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
            ></textarea>
            <p class="text-sm text-gray-500 mt-1">Adicione cada recurso em uma linha separada</p>
          </div>
          
          <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
            <div class="flex items-center space-x-4">
              <label class="flex items-center">
                <input 
                  type="radio" 
                  v-model="formPlano.status" 
                  value="ativo"
                  class="h-4 w-4 text-blue-600 focus:ring-blue-500"
                />
                <span class="ml-2">Ativo</span>
              </label>
              <label class="flex items-center">
                <input 
                  type="radio" 
                  v-model="formPlano.status" 
                  value="inativo"
                  class="h-4 w-4 text-blue-600 focus:ring-blue-500"
                />
                <span class="ml-2">Inativo</span>
              </label>
            </div>
          </div>
          
          <div class="sticky bottom-0 bg-white p-4 border-t flex justify-end space-x-3 mt-8">
            <button 
              type="button"
              @click="fecharModal"
              class="px-4 py-2 border rounded hover:bg-gray-100 transition-colors"
            >
              Cancelar
            </button>
            
            <button 
              type="submit"
              class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors"
            >
              {{ planoEmEdicao ? 'Atualizar' : 'Criar' }}
            </button>
          </div>
        </form>
      </div>
    </div>
    
    <!-- Modal de confirmação de exclusão -->
    <div v-if="planoParaExcluir" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50">
      <div class="bg-white rounded-lg shadow-lg w-full max-w-md">
        <div class="p-6">
          <h2 class="text-xl font-bold mb-4">Confirmar Exclusão</h2>
          
          <p class="mb-6">
            Tem certeza que deseja excluir o plano <span class="font-semibold">{{ planoParaExcluir.nome }}</span>?
            Esta ação não pode ser desfeita.
          </p>
          
          <div class="flex justify-end space-x-3">
            <button 
              @click="planoParaExcluir = null"
              class="px-4 py-2 border rounded hover:bg-gray-100"
            >
              Cancelar
            </button>
            
            <button 
              @click="excluirPlano"
              class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700"
            >
              Excluir
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import NavbarComponent from '@/components/NavbarComponent.vue';
import { 
  Edit2 as Edit2Icon, 
  Trash2 as Trash2Icon, 
  XCircle as XCircleIcon, 
  CheckCircle as CheckCircleIcon,
  Plus as PlusIcon,
  Search as SearchIcon,
  X as XIcon
} from 'lucide-vue-next';


export default {
  name: 'GerenciarPlanos',
  components: {
    NavbarComponent,
    Edit2Icon,
    Trash2Icon,
    XCircleIcon,
    CheckCircleIcon,
    PlusIcon,
    SearchIcon,
    XIcon
  },
  data() {
    return {
      // Dados para os planos
      planos: [
        {
          id: 1,
          nome: 'Plano Básico',
          descricao: 'Ideal para pequenas empresas e iniciantes',
          preco: 19.90,
          recursos: ['10GB de armazenamento', 'Suporte por email', 'Acesso a módulos básicos'],
          status: 'ativo',
          dataCriacao: '2025-01-15',
          assinantes: 245
        },
        {
          id: 2,
          nome: 'Plano Premium',
          descricao: 'Para empresas em crescimento que precisam de mais recursos',
          preco: 49.90,
          recursos: ['50GB de armazenamento', 'Suporte prioritário', 'Acesso a todos os módulos', 'Ferramentas avançadas'],
          status: 'ativo',
          dataCriacao: '2025-01-20',
          assinantes: 187
        },
        {
          id: 3,
          nome: 'Plano Enterprise',
          descricao: 'Solução completa para grandes empresas com necessidades avançadas',
          preco: 99.90,
          recursos: ['100GB de armazenamento', 'Suporte VIP 24/7', 'Acesso a todos os módulos', 'Ferramentas avançadas', 'Integrações personalizadas', 'API exclusiva'],
          status: 'ativo',
          dataCriacao: '2025-02-05',
          assinantes: 62
        },
        {
          id: 4,
          nome: 'Plano Free Trial',
          descricao: 'Versão gratuita por 30 dias para teste',
          preco: 0.00,
          recursos: ['5GB de armazenamento', 'Suporte comunitário', 'Acesso limitado a módulos básicos'],
          status: 'inativo',
          dataCriacao: '2025-03-10',
          assinantes: 530
        }
      ],
      
      // Controles de interface
      mostrarModalCriar: false,
      planoEmEdicao: null,
      planoParaExcluir: null,
      formPlano: {
        nome: '',
        descricao: '',
        preco: 0,
        recursosText: '',
        status: 'ativo'
      },
      
      // Controles de filtragem e paginação
      termoPesquisa: '',
      filtroStatus: '',
      ordenacao: 'nome',
      paginaAtual: 1,
      itensPorPagina: 10
    };
  },
  computed: {
    planosFiltrados() {
      let resultado = [...this.planos];
      
      // Aplicar pesquisa
      if (this.termoPesquisa) {
        const termo = this.termoPesquisa.toLowerCase();
        resultado = resultado.filter(plano => 
          plano.nome.toLowerCase().includes(termo) || 
          plano.descricao.toLowerCase().includes(termo)
        );
      }
      
      // Aplicar filtro de status
      if (this.filtroStatus) {
        resultado = resultado.filter(plano => plano.status === this.filtroStatus);
      }
      
      // Aplicar ordenação
      if (this.ordenacao === 'nome') {
        resultado.sort((a, b) => a.nome.localeCompare(b.nome));
      } else if (this.ordenacao === 'preco') {
        resultado.sort((a, b) => a.preco - b.preco);
      } else if (this.ordenacao === 'data') {
        resultado.sort((a, b) => new Date(b.dataCriacao) - new Date(a.dataCriacao));
      }
      
      return resultado;
    },
    totalPaginas() {
      return Math.ceil(this.planosFiltrados.length / this.itensPorPagina);
    }
  },
  methods: {
    editarPlano(plano) {
      this.planoEmEdicao = { ...plano };
      this.formPlano = {
        ...plano,
        recursosText: plano.recursos.join('\n')
      };
    },
    
    toggleStatus(plano) {
      const index = this.planos.findIndex(p => p.id === plano.id);
      if (index !== -1) {
        this.planos[index].status = this.planos[index].status === 'ativo' ? 'inativo' : 'ativo';
        
        // Aqui você chamaria sua API para atualizar o status
        // await api.atualizarStatusPlano(plano.id, this.planos[index].status);
      }
    },
    
    confirmarExclusao(plano) {
      this.planoParaExcluir = plano;
    },
    
    excluirPlano() {
      const index = this.planos.findIndex(p => p.id === this.planoParaExcluir.id);
      if (index !== -1) {
        this.planos.splice(index, 1);
        
        // Aqui você chamaria sua API para excluir o plano
        // await api.excluirPlano(this.planoParaExcluir.id);
        
        this.planoParaExcluir = null;
      }
    },
    
    fecharModal() {
      this.mostrarModalCriar = false;
      this.planoEmEdicao = null;
      this.resetForm();
    },
    
    resetForm() {
      this.formPlano = {
        nome: '',
        descricao: '',
        preco: 0,
        recursosText: '',
        status: 'ativo'
      };
    },
    
    salvarPlano() {
      const planoData = {
        ...this.formPlano,
        recursos: this.formPlano.recursosText.split('\n').filter(item => item.trim() !== '')
      };
      
      if (this.planoEmEdicao) {
        // Atualizando plano existente
        const index = this.planos.findIndex(p => p.id === this.planoEmEdicao.id);
        if (index !== -1) {
          this.planos[index] = {
            ...this.planos[index],
            ...planoData
          };
          
          // Aqui você chamaria sua API para atualizar o plano
          // await api.atualizarPlano(this.planoEmEdicao.id, planoData);
        }
      } else {
        // Criando novo plano
        const novoPlano = {
          id: Math.max(...this.planos.map(p => p.id), 0) + 1,
          ...planoData,
          dataCriacao: new Date().toISOString().split('T')[0],
          assinantes: 0
        };
        
        this.planos.push(novoPlano);
        
        // Aqui você chamaria sua API para criar o plano
        // await api.criarPlano(novoPlano);
      }
      
      this.fecharModal();
    }
  }
};
</script>