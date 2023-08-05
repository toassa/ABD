@extends('layout.site')

@section('titulo-pagina', 'Listar Usuários')

@section('content')

    @component('components.items.voltar')
        @slot('rota_voltar')
            {{route('admin.opcoes')}}
        @endslot
    @endcomponent

    @component('components.pages.listar')
        @slot('title')
          <h1 class="text-center">Listagem de Pacientes</h1>
          <p class="text-center">Selecione um paciente para abrir os detalhes</p>
        @endslot

        @slot('form_route')
          {{route('paciente.pesquisar')}}
        @endslot

        @slot('quem')
          paciente
        @endslot

        @slot('grid_titles')
          <div class="row row-title">
            <div class="col col-title">Nome</div>
            <div class="col col-title">Num. de Registro</div>
            <div class="col col-title">Telefone</div>
            <div class="col col-title">Idade</div>
            <div class="col col-title">Sexo</div>
            <div class="col col-title">Profissão</div>
            <div class="col col-title">Numero USP</div>
          </div>
        @endslot

        @slot('grid_content')
          @foreach ($dados as $dado)
          {{-- {{route('users.editar', $row->num_USP)}} --}}
          <a class="a-row-list" href="#">
              <div class="row row-text">
                <div class="col col-text">{{$dado->nome}}</div>
                <div class="col col-mail">{{$dado->num_registro}}</div>
                <div class="col col-mail">{{$dado->telefone}}</div>
                <div class="col col-text">{{$dado->idade}}</div>
                <div class="col col-text">{{$dado->sexo}}</div>
                <div class="col col-text">{{$dado->profissao}}</div>
                <div class="col col-text">{{$dado->num_USP}}</div>
              </div>
            </a>
          @endforeach
        @endslot

        @slot('route_btn')
          {{route('paciente.cadastrar')}}
        @endslot

        @slot('text_btn')
          Cadastrar paciente
        @endslot
    @endcomponent
@endsection