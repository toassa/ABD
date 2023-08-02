@extends('layout.site')

@section('titulo-pagina', 'Editar Usuários')

@section('content')
    @component('components.items.back')
    @endcomponent
    <section class="square-content square-content--listar">
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
                    @if($row->ativo == true)
                        <div class="row row-text row-hover row-activated">
                    @endif

                    @if($row->ativo == false)
                        <div class="row row-text row-hover row-inactivated">
                    @endif
                        <p class="col col-text">{{Str::limit($row->name, )}}</p>
                        <p class="col col-mail">{{$row->num_USP}}</p>
                        <p class="col col-mail">{{$row->email}}</p>
                        <p class="col col-text">{{$row->CPF}}</p>
                        <p class="col col-text">{{$row->cargo}}</p>
                        <p class="col col-text">{{($row->administrador) ? 'Administrador' : 'Usuário'}}</p>
                        <p class="col col-text">{{($row->ativo) ? 'Ativo' : 'Inativo'}}</p>
                        <p class="col col-text">
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