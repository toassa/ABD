@extends('layout.site')

@section('titulo-pagina', 'Editar Usuários')

@section('content')
    @component('components.voltar')
        @slot('rota_voltar')
            {{route('opcao.users')}}
        @endslot
    @endcomponent
    <section class="square-content square-content--user-listar">
        <h1 class="text-center">Editar Usuários</h1>
        <div class="grid">
            <div class="row row-title">
                <div class="col col-title">Nome</div>
                <div class="col col-title">Num. USP</div>
                <div class="col col-title">E-mail</div>
                <div class="col col-title">CPF</div>
                <div class="col col-title">Cargo</div>
                <div class="col col-title">Permissão</div>
                <div class="col col-title">Situação</div>
                <div class="col col-title"></div>
            </div>
        </div>
        <div class="grid grid-list">
            @foreach ($rows as $row)
                <a class="a-row-list" href="{{route('users.editar', $row->num_USP)}}">
                    <div class="row row-text row-hover">
                        <div class="col col-text">{{Str::limit($row->name, )}}</div>
                        <div class="col col-mail">{{$row->num_USP}}</div>
                        <div class="col col-mail">{{$row->email}}</div>
                        <div class="col col-text">{{$row->CPF}}</div>
                        <div class="col col-text">{{$row->cargo}}</div>
                        <div class="col col-text">{{($row->administrador) ? 'Administrador' : 'Usuário'}}</div>
                        <div class="col col-text">{{($row->ativo) ? 'Ativo' : 'Inativo'}}</div>
                        <div class="col col-text">
                            <span class="material-symbols-outlined">
                                edit
                            </span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection