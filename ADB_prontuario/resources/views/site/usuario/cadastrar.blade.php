@extends('layout.site')

@section('titulo-pagina','Cadastro de Usuários')

@section('content')
    @component('components.items.back')@endcomponent
    @component('components.items.user_name')@endcomponent
    <section class="square-content square-content--cadastro">
        {{-- action:route ALTERAR --}}
        @if($num_existente != false)
            <script type="text/javascript">alert("Já existe um usuário cadastrado com esse {{$num_existente}}. Pof favor, insira outro valor para o campo.");</script>
        @endif
        <h1 class="text-center">Cadastro de Usuários</h1>
        <form action="{{route('users.salvar')}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            @include('site.usuario._form')
            <div class="col-12 col-btn-form">
                <a id="btn_aparece" class="btn btn-giga btn-primary" onclick="show_dialog_excluir()">Limpar</a>
                <button class="btn btn-giga btn-primary-confirm" type="submit">Cadastrar</button>
            </div>
            <dialog class="square-content square-content--confirma-excluir"  id="modal_excluir">
                <div class="p-dialog">
                    <p class="text-center">
                    <span class="material-symbols-outlined">
                        warning
                    </span>
                    </p>
                    <p class="text-center">Você tem certeza que deseja limpar todos os dados?</p>
                    <p>Aviso: essa ação <strong>não</strong> poderá ser desfeita!</p>
                </div>
                <div class="row buttons-dialog">
                    <a class="col-4-md btn-primary-darker" onclick="hide_dialog_excluir()" id="btn_cancelar">Cancelar</a>
                    <button class="col-4-md a-row-list" onclick="hide_dialog_excluir()" id="btn_execute" type="reset">Limpar</button>
                    {{-- <a class="col-4-md a-row-list" href="{{route('users.excluir', $row->num_USP)}}">Excluir</a> --}}
                </div>
            </dialog>
        </form>
    </section>
    <script src="{{asset('js/excluir.js')}}"></script>
    <script src="{{asset('js/form-cadastrar-user.js')}}"></script>
@endsection