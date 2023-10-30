@extends('layout.site')

@section('titulo-pagina', 'Menu de usuários')

@section('content')
  @component('components.items.voltar')
    @slot('rota_voltar')
        {{route('consulta.menu', $dados->num_registro)}}
    @endslot
  @endcomponent
  <div class="usuario">
      <a href="{{route('paciente.configuracoes', $dados->num_registro)}}">
          <a href="{{route('paciente.configuracoes', $dados->num_registro)}}">{{$dados->nome}}</a>
          <span class="material-symbols-outlined">
            settings
          </span>
      </a>
  </div>
  <section class="user-index">
    <h1 class="text-center">Gerenciar Perfil</h1>
    <div class="square-content square-content--menu">
      <div class="row">
        <div class="col-md-6" style="flex-wrap: inherit;">
            @component('components.items.paciente-item')
            @slot('coluna')
              col-md-auto align-content
            @endslot
            @slot('icon')
              <span class="material-symbols-outlined">
                manage_accounts
              </span>
            @endslot
            @slot('button')
              Editar dados
            @endslot
            @slot('href')
              {{route('paciente.editar', $dados->num_registro)}}
            @endslot
          @endcomponent
          <div class="col-md-auto align-content">
            <div class="square-content square-content--menu-item square-content--menu-item-p">
                <div class="item-circle item-circle--paciente">
                  <span class="material-symbols-outlined">
                    person_off
                  </span>
                </div>
                <div class="item-button text-center">
                    <button onclick="show_dialog_excluir()" class="button-white-blue button-white-blue--menu-item button-white-blue--menu-item-paciente">Desativar paciente</button>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6 align-content">
          <img src="{{asset('images/pack/medico-cientista.png')}}" style="width: 350px !important" alt="Médico utilizando equipamentos científicos">
        </div>
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
</section>
<script src="{{asset('js/excluir.js')}}"></script>
@endsection
