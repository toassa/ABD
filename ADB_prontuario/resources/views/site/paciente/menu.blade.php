@extends('layout.site')

@section('titulo-pagina', 'Menu de usuários')

@section('content')
  @component('components.items.voltar')
    @slot('rota_voltar')
        {{route('admin.opcoes')}}
    @endslot
  @endcomponent
  @component('components.items.user_name')@endcomponent
  <section class="user-index">
    <h1 class="text-center">Menu de paciente</h1>
    <div class="square-content square-content--menu">
      <div class="container text-center">
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
                {{route('users.cadastrar')}}
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
                {{route('users.listar')}}
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
                {{route('user.list-editar')}}
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
              {{route('users.list-desativar')}}
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
                {{route('users.list-excluir')}}
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
              {{route('opcao.users')}}
            @endslot
          @endcomponent
        </div>
      </div>
  </section>
@endsection