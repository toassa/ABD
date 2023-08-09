@extends('layout.site')

@section('titulo-pagina', 'Menu de usuários')

@section('content')
  @component('components.items.back')
  @endcomponent
  <div class="usuario">
    <p>{{$dados->nome}}</p>
    <span class="material-symbols-outlined">
      person_search
    </span>
  </div>
  <section class="user-index">
    <h1 class="text-center">Atendimento</h1>
    <div class="square-content square-content--menu">
      <div class="container text-center">
        <div class="row justify-content-md-center">
          @component('components.items.paciente-item')
            @slot('coluna')
              col-md-auto
            @endslot
            @slot('icon')
              <span class="material-symbols-outlined">
                respiratory_rate
              </span>
            @endslot
            @slot('button')
              1ª Consulta
            @endslot
            @slot('href')
              {{route('consulta.primeiro_atendimento', $dados->nome)}}
            @endslot
          @endcomponent
          @component('components.items.paciente-item')
            @slot('coluna')
              col-md-auto
            @endslot
            @slot('icon')
              <img src="{{asset('images/icons/triagem-icon.svg')}}" alt="Ícone de médico">
            @endslot
            @slot('button')
                Triagem
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
                monitoring
              </span>
            @endslot
            @slot('button')
                Evolução
            @endslot
            @slot('href')
                #
            @endslot
          @endcomponent
        </div>
      </div>
  </section>
@endsection