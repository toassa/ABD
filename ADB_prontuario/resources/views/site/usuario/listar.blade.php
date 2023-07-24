@extends('layout.site')

@section('titulo-pagina', 'Listar Usuários')

@section('content')

    @component('components.items.voltar')
        @slot('rota_voltar')
            {{route('opcao.users')}}
        @endslot
    @endcomponent

    @component('components.pages.listar')
        @slot('title')
          <h1 class="text-center">Listagem de Usuários</h1>
          <p class="text-center">Selecione um paciente para abrir os detalhes</p>
        @endslot

        @slot('form_route')
            {{route('users.buscar')}}
        @endslot

        @slot('quem')
          usuário
        @endslot

        @slot('grid_titles')
            <div class="row row-title">
                <div class="col col-title">Nome</div>
                <div class="col col-title">Num. USP</div>
                <div class="col col-title">E-mail</div>
                <div class="col col-title">CPF</div>
                <div class="col col-title">Cargo</div>
                <div class="col col-title">Permissão</div>
                <div class="col col-title">Situação</div>
            </div>
        @endslot

        @slot('grid_content')
            @foreach ($rows as $row)
                <div class="row row-text">
                    <div class="col col-text">{{$row->name}}</div>
                    <div class="col col-mail">{{$row->num_USP}}</div>
                    <div class="col col-mail">{{$row->email}}</div>
                    <div class="col col-text">{{$row->CPF}}</div>
                    <div class="col col-text">{{$row->cargo}}</div>
                    <div class="col col-text">{{($row->administrador) ? 'Administrador' : 'Usuário'}}</div>
                    <div class="col col-text">{{($row->ativo) ? 'Ativo' : 'Inativo'}}</div>
                </div>
            @endforeach
        @endslot

        @slot('route_btn')
            {{route('user.list-editar')}}
        @endslot

        @slot('text_btn')
          Editar usuários
        @endslot
    @endcomponent
@endsection