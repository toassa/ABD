@extends('layout.site')

@section('titulo-pagina', 'Editar Usuários')

@section('content')
    @component('components.items.back')@endcomponent
    <section class="square-content square-content--listar">
        <h1 class="text-center">Editar Usuários</h1>
        <div class="grid">
            <div class="row row-title">
                    <div class="col text-center col-title">Nome</div>
                    <div class="col text-center col-title" id="num_USP">Num. USP</div>
                    <div class="col text-center col-title" id="email">E-mail</div>
                    <div class="col text-center col-title" id="mesa">Mesa</div>
                    <div class="col text-center col-title" id="cargo">Cargo</div>
                    <div class="col text-center col-title" id="administrador">Permissão</div>
                <div class="col text-center col-title">Situação</div>
                <div class="col text-center col-title"></div>
            </div>
        </div>
        <div class="grid grid-list">
            @foreach ($rows as $row)
                <a class="a-row-list" href="{{route('users.editar', $row->num_USP)}}">
                    @if($row->ativo == true)
                        <div class="row row-text row-hover row-activated">
                    @endif

                    @if($row->ativo == false)
                        <div class="row row-text row-hover row-inactivated">
                    @endif
                    <p class="col text-center col-text" id="nome">{{$row->name}}</p>
                        <p class="col text-center col-mail" id="num_USP">{{$row->num_USP}}</p>
                        <p class="col text-center col-mail" id="email">{{$row->email}}</p>
                        <p class="col text-center col-text" id="mesa">{{$row->mesa}}</p>
                        <p class="col text-center col-text" id="cargo">{{$row->cargo}}</p>
                        <p class="col text-center col-text" id="administrador">{{($row->administrador) ? 'Administrador' : 'Usuário'}}</p>
                        <p class="col text-center col-text" id="ativo">{{($row->ativo) ? 'Ativo' : 'Inativo'}}</p>
                        <p class="col text-center col-text">
                            <span class="material-symbols-outlined">
                                edit
                            </span>
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection