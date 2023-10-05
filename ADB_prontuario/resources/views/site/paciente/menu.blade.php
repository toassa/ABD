@extends('layout.site')

@section('titulo-pagina', 'Menu de usuários')

@section('content')
  @component('components.items.voltar')
    @slot('rota_voltar')
        {{route('paciente.listar')}}
    @endslot
  @endcomponent
  <div class="usuario">
    <p>{{$dados->nome}}</p>
    <span class="material-symbols-outlined">
      person_search
    </span>
  </div>
  <section class="user-index">
    <h1 class="text-center">Menu de paciente</h1>
    <div class="square-content square-content--menu align-content">
      <div class="container text-center menucontainer">
        <div class="config-paciente">
          <a href="{{route('paciente.configuracoes', $dados->num_registro)}}" class="align-content">
            <div>
              <span class="material-symbols-outlined" style="color: #000 !important;">
                manage_accounts
              </span>
            </div>
            <div><p style="color: #000 !important; text-decoration: none !important">Configurações</p></div>
          </a>
        </div>
        <div class="row justify-content-md-center">
          @component('components.items.paciente-item')
            @slot('coluna')
              col-md-auto
            @endslot
            @slot('icon')
              <img src="{{asset('images/icons/doctor-icon.svg')}}" alt="Ícone de médico">
            @endslot
            @slot('button')
              Atendimento
            @endslot
            @slot('href')
              {{route('consulta.menu_atendimento', $dados->num_registro)}}
            @endslot
          @endcomponent
          @component('components.items.paciente-item')
            @slot('coluna')
              col-md-auto
            @endslot
            @slot('icon')
              <span class="material-symbols-outlined">
                medication
              </span>
            @endslot
            @slot('button')
                Medicamentos
            @endslot
            @slot('href')
              {{route('medicamento.index', $dados->num_registro)}}
            @endslot
          @endcomponent
          @component('components.items.paciente-item')
            @slot('coluna')
              col-md-auto
            @endslot
            @slot('icon')
              <span class="material-symbols-outlined">
                stethoscope
              </span>
            @endslot
            @slot('button')
                Exames complementares
            @endslot
            @slot('href')
                #
            @endslot
          @endcomponent
        </div>
        <div class="row justify-content-md-center">
          @component('components.items.paciente-item')
            @slot('coluna')
              col-md-auto
            @endslot
            @slot('icon')
              <span class="material-symbols-outlined">
                contract_edit
              </span>
            @endslot
            @slot('button')
                Questionário
            @endslot
            @slot('href')
              #
            @endslot
          @endcomponent
          @component('components.items.paciente-item')
            @slot('coluna')
              col-md-auto
            @endslot
            @slot('icon')
              <span class="material-symbols-outlined">
                groups
              </span>
            @endslot
            @slot('button')
                Equipe multi
            @endslot
            @slot('href')
               #
            @endslot
          @endcomponent
          @component('components.items.paciente-item')
            @slot('coluna')
              col-md-auto
            @endslot
            @slot('icon')
              <span class="material-symbols-outlined">
                calendar_add_on
              </span>
            @endslot
            @slot('button')
                Agendamento
            @endslot
            @slot('href')
              #
            @endslot
          @endcomponent
          
        </div>
      </div>
      {{-- <div class="row buttons-dialog align-content btn_paciente">
        <a class="col-4-md a-row-list btn btn-danger" href="{{route('paciente.excluir', $dados->num_registro)}}">Excluir</a>
        <a class="col-4-md a-row-list btn btn-primary" href="{{route('paciente.editar', $dados->num_registro)}}">Editar</a>
      </div> --}}
    </div>
  </section>
@endsection

            {{-- // PARA RAISSA <33333333333
            Vou caçar mais de um milhão de vagalumes por aí
            Pra te ver sorrir, eu posso colorir o céu de outra cor
            Eu só quero amar você, e quando amanhecer
            Eu quero acordar do seu lado
            Vou escrever mais de um milhão
            De canções pra você ouvir
            Que o meu amor é teu
            Teu sorriso me faz sorrir
            Eu vou de Marte até a Lua
            Cê sabe, eu já tô na tua
            Não cabe tanta saudade
            Essa é a verdade nua e crua
            Eu sei o que eu faço
            Nosso caminho eu traço
            Um casal fora da lei
            Ocupando o mesmo espaço
            Se eu tô contigo não ligo
            Se o sol não aparecer
            É que não faz sentido caminhar
            Sem dar a mão pra você
            Teu sonho impossível vai ser realidade
            Eu sei que o mundo tá terrível
            Mas não vai ser a maldade que
            Vai me tirar de você eu faço você ver
            Pra tu sorrir eu faço o mundo inteiro saber que eu
            Vou caçar mais de um milhão de vagalumes por aí
            Pra te ver sorrir, eu posso colorir o céu de outra cor
            Eu só quero amar você, e quando amanhecer
            Eu quero acordar do seu lado
            Pra ter o teu sorriso descubro o paraíso
            É só eu ver sua boca
            Que eu perco o juízo por inteiro
            Sentimento verdadeiro
            Eu e você ao som de Janelle Monáe
            Vem, deixa acontecer
            E me abraça que o tempo não passa
            Quando cê tá perto
            Dá a mão e vem comigo
            Que eu vejo como eu tô certo
            Eu digo que te amo
            Cê pede algo impossível
            Levanta da sua cama hoje o céu está incrível
            Vou caçar mais de um milhão de vagalumes por aí
            E pra te ver sorrir, eu posso colorir o céu de outra cor
            Eu só quero amar você, e quando amanhecer
            Eu quero acordar do seu lado
            Faço dos teus braços um lugar mais seguro
            Procurei paz em outro abraço, eu não achei, eu juro
            Saio do compasso, passo apuros que vier
            Abro a janela pra que você possa ver
            Vou caçar mais de um milhão de vagalumes por aí
            Pra te ver sorrir, eu posso colorir o céu de outra cor
            Eu só quero amar você, e quando amanhecer
            Eu quero acordar do seu lado
          LINDA!
  --}}