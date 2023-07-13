@extends('layout.site')

@section('titulo-pagina', 'Opções')

@section('content')
    @component('components.back')
        @slot('rota_voltar')
            {{route('opcao.users')}}
        @endslot
    @endcomponent
    <section class="square-content square-content--user-listar">
        <h1 class="text-center">Listagem de Usuários</h1>
        <div class="grid">
            <div class="row">
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
            {{-- rota: alterar --}}
            <a href="" style="text-decoration: none;">
                @foreach ($rows as $row)
                    <div class="row row-text">
                        <div class="col col-text">{{Str::limit($row->name, )}}</div>
                        <div class="col col-mail">{{$row->num_USP}}</div>
                        <div class="col col-mail">{{$row->email}}</div>
                        <div class="col col-text">{{$row->CPF}}</div>
                        <div class="col col-text">{{$row->cargo}}</div>
                        <div class="col col-text">{{($row->administrador) ? 'Administrador' : 'Usuário'}}</div>
                        <div class="col col-text">{{($row->ativo) ? 'Ativo' : 'Inativo'}}</div>
                    </div>
                @endforeach
            </a>
        </div>
    </section>
@endsection