@extends('layout.site')

@section('titulo-pagina', 'Listar Pacientes')

@section('content')

  @component('components.items.voltar')
      @slot('rota_voltar')
          {{route('admin.opcoes')}}
      @endslot
  @endcomponent

  @component('components.pages.listar')
      @slot('title')
        <h1 class="text-center">Listagem de Pacientes</h1>
        <p class="text-center">Selecione um paciente para abrir os detalhes</p>
      @endslot

      @slot('form_route')
        {{route('paciente.pesquisar')}}
      @endslot

      @slot('quem')
        paciente
      @endslot

      @slot('grid_titles')
        <div class="row row-title">
          <div class="col col-title">Nome</div>
          <div class="col col-title">Num. de Registro</div>
          <div class="col col-title">Telefone</div>
          <div class="col col-title">Idade</div>
          <div class="col col-title">Sexo</div>
          <div class="col col-title">Profissão</div>
          <div class="col col-title">Numero USP</div>
        </div>
      @endslot

      @if ($dados=='[]')
        @slot('grid_titles')
        <div class="text-center">
            Não encontramos nenhum resultado para sua busca
        </div>
        @endslot
        @slot('grid_content')
        <div class="text-center">
          <a href="{{route('paciente.null_pesquisar')}}">
            Clique aqui para mostrar todos os pacientes
          </a>
        </div>
        @endslot
      @else
        @slot('grid_content')
          @foreach ($dados as $dado)
          @if($dado->ativo == true)
            <a class="row row-text row-hover row-activated" style="text-decoration: none;" href="{{route('consulta.menu', $dado->num_registro)}}">
          @elseif($dado->ativo == false)
          <dialog class="square-content square-content--confirma-excluir"  id="modal_excluir">
            <div class="p-dialog">
                <p class="text-center">
                <span class="material-symbols-outlined">
                    warning
                </span>
                </p>
                <p class="text-center">O(A) paciente <strong>{{$dado->nome}}</strong> está inativo no sistema. Para gerenciar seus dados é necessário ativá-lo.</p>
                <p class="text-center">Deseja ativar o(a) paciente?</p>
            </div>
            <div class="row buttons-dialog">
                <button class="col-4-md" onclick="hide_dialog_excluir()" id="btn_cancelar">Cancelar</button>
                <a class="col-4-md a-row-list btn btn-danger" href="{{route('paciente.desativar', ['num_registro' => $dado->num_registro, 'num_USP' => Auth::user()->num_USP])}}">Ativar</a>
            </div>
          </dialog>
          <a class="row row-text row-inactivated" style="text-decoration: none" onclick="show_dialog_excluir()">
          @endif
              <p class="col col-text">{{$dado->nome}}</p>
              <p class="col col-mail">{{$dado->num_registro}}</p>
              <p class="col col-mail">{{$dado->telefone}}</p>
              <p class="col col-text">{{$dado->idade}}</p>
              <p class="col col-text">{{$dado->sexo}}</p>
              <p class="col col-text">{{$dado->profissao}}</p>
              <p class="col col-text">
                @if ($dado->num_USP == null)
                  Usuário excluído
                @else
                {{$dado->num_USP}}
                @endif
              </p>
            </a>
          @endforeach
        @endslot
      @endif

      @slot('route_btn')
        {{route('paciente.cadastrar')}}
      @endslot

      @slot('text_btn')
        Cadastrar paciente
      @endslot
  @endcomponent
  <script src="{{asset('js/excluir.js')}}"></script>
@endsection