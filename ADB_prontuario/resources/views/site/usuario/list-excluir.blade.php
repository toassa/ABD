@extends('layout.site')

@section('titulo-pagina', 'Excluir Usuários')

@section('content')
    @component('components.items.voltar')
        @slot('rota_voltar')
            {{route('opcao.users')}}
        @endslot
    @endcomponent
    <section class="square-content square-content--listar content-list-excluir">
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
                    @if($row->ativo == true)
                        <div class="row row-text row-hover row-activated">
                    @endif

                    @if($row->ativo == false)
                        <div class="row row-text row-hover row-inactivated">
                    @endif
                            <p class="col col-text">{{$row->name}}</p>
                            <p class="col col-mail">{{$row->num_USP}}</p>
                            <p class="col col-mail">{{$row->email}}</p>
                            <p class="col col-text">{{$row->CPF}}</p>
                            <p class="col col-text">{{$row->cargo}}</p>
                            <p class="col col-text">{{($row->administrador) ? 'Administrador' : 'Usuário'}}</p>
                            <p class="col col-text">{{($row->ativo) ? 'Ativo' : 'Inativo'}}</p>
                            <p class="col col-text">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>
                            </p>
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