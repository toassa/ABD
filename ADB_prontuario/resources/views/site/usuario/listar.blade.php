@extends('layout.site')

@section('titulo-pagina', 'Listar Usuários')

@section('content')

    @component('components.items.voltar')
        @slot('rota_voltar')
            {{route('opcao.users')}}
        @endslot
    @endcomponent
    @component('components.items.user_name')@endcomponent
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

        @if ($rows=='[]')
            @slot('grid_titles')
            <div class="text-center">
                Não encontramos nenhum resultado para sua busca
            </div>
            @endslot
            @slot('grid_content')
            <div class="text-center">
                <a href="{{route('users.null_buscar')}}">
                    Clique aqui para mostrar todos os usuários
                </a>
            </div>
            @endslot
        @else
            @slot('grid_titles')
            <div class="grid">
                <div class="row row-title">
                    <div class="col text-center col-title">Nome</div>
                    <div class="col text-center col-title">Num. USP</div>
                    <div class="col text-center col-title">E-mail</div>
                    <div class="col text-center col-title">Mesa</div>
                    <div class="col text-center col-title">Cargo</div>
                    <div class="col text-center col-title">Permissão</div>
                    <div class="col text-center col-title">Situação</div>
                </div>
            </div>
            @endslot

            @slot('grid_content')
            <div class="grid grid-list">
                @foreach ($rows as $row)
                @if($row->ativo == true)
                    <div class="row row-text row-hover row-activated">
                @endif

                @if($row->ativo == false)
                    <div class="row row-text row-hover row-inactivated">
                @endif
                        <p class="col text-center col-text">{{$row->name}}</p>
                        <p class="col text-center col-mail">{{$row->num_USP}}</p>
                        <p class="col text-center col-mail">{{$row->email}}</p>
                        <p class="col text-center col-text">{{$row->mesa}}</p>
                        <p class="col text-center col-text">{{$row->cargo}}</p>
                        <p class="col text-center col-text">{{($row->administrador) ? 'Administrador' : 'Usuário'}}</p>
                        <p class="col text-center col-text">{{($row->ativo) ? 'Ativo' : 'Inativo'}}</p>
                    </div>
                @endforeach
            </div>
            @endslot
        @endif

        @slot('route_btn')
            {{route('user.list-editar')}}
        @endslot

        @slot('text_btn')
            Editar usuários
        @endslot
    @endcomponent
@endsection