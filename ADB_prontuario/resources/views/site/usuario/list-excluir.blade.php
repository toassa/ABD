@extends('layout.site')

@section('titulo-pagina', 'Excluir Usuários')

@section('content')
    @component('components.voltar')
        @slot('rota_voltar')
            {{route('opcao.users')}}
        @endslot
    @endcomponent
    <section class="square-content square-content--user-listar content-list-excluir">
        <h1 class="text-center">Excluir Usuários</h1>
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
                <button id="btn_aparece">
                    <div class="row row-text row-hover">
                        <div class="col col-text">{{$row->name}}</div>
                        <div class="col col-mail">{{$row->num_USP}}</div>
                        <div class="col col-mail">{{$row->email}}</div>
                        <div class="col col-text">{{$row->CPF}}</div>
                        <div class="col col-text">{{$row->cargo}}</div>
                        <div class="col col-text">{{($row->administrador) ? 'Administrador' : 'Usuário'}}</div>
                        <div class="col col-text">{{($row->ativo) ? 'Ativo' : 'Inativo'}}</div>
                        <div class="col col-text">
                            <span class="material-symbols-outlined">
                                delete
                            </span>
                        </div>
                    </div>
                </button>
                <dialog class="square-content square-content--confirma-excluir" id="modal_excluir">
                    <div class="p-dialog">
                        <p class="text-center">Você deseja excluir <strong>permanentemente</strong> o usuário <strong>{{$row->name}}</strong> ?</p>
                    </div>
                    <div class="buttons-dialog">
                        <a class="a-row-list" href="{{route('users.excluir', $row->num_USP)}}">Excluir</a>
                        <button id="btn_cancelar">Cancelar</button>
                    </div>
                </dialog>
            @endforeach
        </div>
    </section>
    <script src="{{asset('js/excluir.js')}}"></script>
@endsection