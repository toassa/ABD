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
              {{route('paciente.menu_atendimento', $dados->num_registro)}}
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
                #
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
  </section>
@endsection