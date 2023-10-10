@extends('layout.site')

@section('titulo-pagina', 'Excluir Usuários')

@section('content')
    @component('components.items.voltar')
        @slot('rota_voltar')
            {{route('opcao.users')}}
        @endslot
    @endcomponent
    @component('components.items.user_name')@endcomponent
    @if ($user_avaiable == false)
        <script type="text/javascript">alert("É impossível excluir esse usuário");</script>
    @endif
    <section class="square-content square-content--listar content-list-excluir">
        <h1 class="text-center">Excluir Usuários</h1>
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
                <button id="btn_aparece" class="a-row-list btnexcluir" onclick="show_dialog_excluir({{$row->num_USP}},'{{$row->name}}')">
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
                                <span class="material-symbols-outlined">
                                    delete
                                </span>
                            </p>
                        </div>
                    </button>
            @endforeach
            <dialog class="square-content square-content--confirma-excluir"  id="modal_excluir">
                <div class="p-dialog">
                    <p class="text-center">
                    <span class="material-symbols-outlined">
                        warning
                    </span>
                    </p>
                    <p class="text-center">Você tem certeza que deseja excluir <strong>permanentemente</strong> o usuário <strong> <span id ="userexcluir"></span> </strong> ?</p>
                    <p>Aviso: essa ação <strong>não</strong> poderá ser desfeita!</p>
                </div>
                <div class="row buttons-dialog">
                    <button class="col-4-md" onclick="hide_dialog_excluir()" id="btn_cancelar">Cancelar</button>
                    <a class="col-4-md a-row-list btn-primary-error btn-excluir">Excluir</a>
                </div>
            </dialog>
            <script src="{{asset('js/excluir.js')}}"></script>
        </div>
    </section>
    
@endsection