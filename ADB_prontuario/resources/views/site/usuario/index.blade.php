@extends('layout.site')

@section('titulo-pagina', 'Início - Usuários')

@section('content')
  @component('components.items.voltar')
    @slot('rota_voltar')
        {{route('admin.opcoes')}}
    @endslot
  @endcomponent
    <section class="user-index">
      <h1 class="text-center">Bem-vindo(a)</h1>
      <div class="square-content square-content--user-index">
        <div class="container text-center">
          <div class="row justify-content-md-center">
            @component('components.items.user-item')
              @slot('coluna')
                @if (Auth::user()->administrador == true)
                  col-md-auto show
                @else
                  col-md-auto hide
                @endif
              @endslot
              @slot('icon')
                <span class="material-symbols-outlined">
                  person_add
                </span>
              @endslot
              @slot('title')
                  Cadastrar Usuário
              @endslot
              @slot('button')
                  Cadastrar
              @endslot
              @slot('href')
                  {{route('users.cadastrar')}}
              @endslot
            @endcomponent
            @component('components.items.user-item')
              @slot('coluna')
                col-md-auto
              @endslot
              @slot('icon')
                <span class="material-symbols-outlined">
                  format_list_bulleted
                </span>
              @endslot
              @slot('title')
                  Listar Usuários
              @endslot
              @slot('button')
                  Listar
              @endslot
              @slot('href')
                  {{route('users.listar')}}
              @endslot
            @endcomponent
            @component('components.items.user-item')
              @slot('coluna')
                @if (Auth::user()->administrador == true)
                  col-md-auto show
                @else
                  col-md-auto hide
                @endif
              @endslot
              @slot('icon')
                <span class="material-symbols-outlined">
                  manage_accounts
                </span>
              @endslot
              @slot('title')
                  Editar Usuários
              @endslot
              @slot('button')
                  Editar
              @endslot
              @slot('href')
                  {{route('user.list-editar')}}
              @endslot
            @endcomponent
          </div>
          <div class="row justify-content-md-center">
            @component('components.items.user-item')
              @slot('coluna')
                @if (Auth::user()->administrador == true)
                  col-md-auto show
                @else
                  col-md-auto hide
                @endif
              @endslot
              @slot('icon')
                <span class="material-symbols-outlined">
                  block
                </span>
              @endslot
              @slot('title')
                  Desativar Usuário
              @endslot
              @slot('button')
                  Desativar
              @endslot
              @slot('href')
                {{route('users.list-desativar')}}
              @endslot
            @endcomponent
            @component('components.items.user-item')
              @slot('coluna')
                @if (Auth::user()->administrador == true)
                  col-md-auto show
                @else
                  col-md-auto hide
                @endif
              @endslot
              @slot('icon')
                <span class="material-symbols-outlined">
                  delete
                </span>
              @endslot
              @slot('title')
                  Excluir Usuário
              @endslot
              @slot('button')
                  Excluir
              @endslot
              @slot('href')
                  {{route('users.list-excluir')}}
              @endslot
            @endcomponent
            @component('components.items.user-item')
              @slot('coluna')
                col-md-auto
              @endslot
              @slot('icon')
                <span class="material-symbols-outlined">
                  calendar_add_on
                </span>
              @endslot
              @slot('title')
                  Agendar Paciente
              @endslot
              @slot('button')
                  Agendar
              @endslot
              @slot('href')
                {{route('opcao.users')}}
              @endslot
            @endcomponent
          </div>
        </div>
    </section>
@endsection