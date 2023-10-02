@extends('layout.site')

@section('titulo-pagina', 'Menu de usuários')

@section('content')
  @component('components.items.voltar')
    @slot('rota_voltar')
        {{route('consulta.menu', $dados->num_registro)}}
    @endslot
  @endcomponent
  <div class="usuario">
    <p>{{$dados->nome}}</p>
    <span class="material-symbols-outlined">
      person_search
    </span>
  </div>
  <section class="user-index">
    <h1 class="text-center">Gerenciar Perfil</h1>
    {{-- <h1 class="text-center"><strong>{{$dados->nome}}</strong></h1> --}}
    <div class="square-content square-content--menu">
      <div class="container text-center">
        <div class="row buttons-dialog align-content btn_paciente">
            {{-- <a class="col-4-md a-row-list btn btn-danger" href="{{route('paciente.excluir', $dados->num_registro)}}">Excluir</a> --}}
            <a class="col-4-md a-row-list btn btn-danger" onclick="show_dialog_excluir()"> Excluir</a>
            <a class="col-4-md a-row-list btn btn-primary" href="{{route('paciente.editar', $dados->num_registro)}}">Editar</a>
        </div>
        <dialog class="square-content square-content--confirma-excluir"  id="modal_excluir">
            <div class="p-dialog">
                <p class="text-center">
                <span class="material-symbols-outlined">
                    warning
                </span>
                </p>
                <p class="text-center">Você tem certeza que deseja desativar o(a) paciente <strong>{{$dados->nome}}</strong> ?</p>
                <p>Não será possível gerenciá-lo(a) até que ele(a) seja ativado(a) novamente!</p>
            </div>
            <div class="row buttons-dialog">
                <button class="col-4-md" onclick="hide_dialog_excluir()" id="btn_cancelar">Cancelar</button>
                <a class="col-4-md a-row-list btn btn-danger" href="{{route('paciente.desativar', ['num_registro' => $dados->num_registro, 'num_USP' => Auth::user()->num_USP])}}">Desativar</a>
            </div>
        </dialog>
      </div>
    </div>
</section>
  <script src="{{asset('js/excluir.js')}}"></script>
@endsection
