@extends('layout.site')

@section('titulo-pagina', 'Listar Usuários')

@section('content')
    @component('components.items.voltar')
        @slot('rota_voltar')
            {{route('opcao.users')}}
        @endslot
    @endcomponent
    <section class="square-content square-content--listar">
        <h1 class="text-center">Listagem de Usuários</h1>
        {{-- , $row->name --}}
        <form action="{{route('users.buscar')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row g-3 row-pesquisar">
                <div class="col-sm-8">
                    <input type="text" name="nome" class="form-control" placeholder="Digite o usuário" aria-label="Nome do usuário">
                </div>
                <div class="col-sm">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </div>
        </form>
        <div class="grid">
            <div class="row row-title">
                <div class="col col-title">Nome</div>
                <div class="col col-title">Num. USP</div>
                <div class="col col-title">E-mail</div>
                <div class="col col-title">CPF</div>
                <div class="col col-title">Cargo</div>
                <div class="col col-title">Permissão</div>
                <div class="col col-title">Situação</div>
            </div>
        </div>
        <div class="grid">
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
        </div>
        <a href="{{route('user.list-editar')}}" class="btn btn-primary btn-list-editar">Editar Usuários</a>
    </section>
@endsection