@extends('layout.site')

@section('titulo-pagina', 'Desativar Usuários')

@section('content')
    @component('components.items.voltar')
        @slot('rota_voltar')
            {{route('opcao.users')}}
        @endslot
    @endcomponent
    @component('components.items.user_name')@endcomponent
    <section class="square-content square-content--listar content-list-excluir">
        <h1 class="text-center">Desativar Usuários</h1>
        <div class="grid">
            <div class="row row-title">
                <div class="col text-center col-title">Nome</div>
                <div class="col text-center col-title">Num. USP</div>
                <div class="col text-center col-title">E-mail</div>
                <div class="col text-center col-title">Mesa</div>
                <div class="col text-center col-title">Cargo</div>
                <div class="col text-center col-title">Permissão</div>
                <div class="col text-center col-title">Situação</div>
                <div class="col text-center col-title"></div>
            </div>
        </div>
        <div class="grid grid-list">
            @foreach ($rows as $row)
                <a class="a-row-list" href="{{route('users.desativar', $row->num_USP)}}">
                {{-- <button id="btn_aparece" onclick="show_dialog_excluir()">--}}
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
                        <p class="col text-center col-text">
                            @if($row->ativo == true)
                                <img src="{{asset('images/icons/switch_on.png')}}" alt="Ativo">
                            @endif
                            @if($row->ativo == false)
                                <img src="{{asset('images/icons/switch_off.png')}}" alt="Inativo">
                            @endif
                        </p>
                    </div>
                </a>
                {{-- </button>
                <dialog class="square-content square-content--confirma-excluir"  id="modal_excluir">
                    <div class="p-dialog">
                        <p class="text-center">
                            <span class="material-symbols-outlined">
                                warning
                            </span>
                        </p>
                        @if($row->ativo == true)
                            <p class="text-center">Deseja desativar o usuário <strong>{{$row->name}}</strong> ?</p>
                            <p>Aviso: após desativado, o usuário não terá acesso ao sistema até que seja ativado novamente</p>
                        @endif
                        @if($row->ativo == false)
                            <p class="text-center">Deseja reativar o usuário <strong>{{$row->name}}</strong> ?</p>
                            <p>Aviso: ao ser ativado, o usuário voltará a acessar o sistema</p>
                        @endif
                    </div>
                    <div class="row buttons-dialog">
                        <button class="col-4-md" onclick="hide_dialog_excluir()" id="btn_cancelar">Cancelar</button>
                        <a class="a-row-list" href="{{route('users.desativar', $row->num_USP)}}">
                            @if($row->ativo == true)
                                Desativar
                            @endif
                            @if($row->ativo == false)
                                Ativar
                            @endif
                        </a>
                    </div>
                </dialog> --}}
            @endforeach
        </div>
    </section>
    <script src="{{asset('js/excluir.js')}}"></script>
@endsection