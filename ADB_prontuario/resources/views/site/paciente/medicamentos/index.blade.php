@extends('layout.site')

@section('titulo-pagina', 'Editar Pacientes')

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
    <section class="square-content square-content--medicamentos">
        @component('components.pages.listar-med')
            @slot('title')
                <h1 class="text-center">Medicamentos Utilizados</h1>
                <p class="text-center">Selecione um medicamento para editá-lo</p>
            @endslot

            @slot('grid_titles')
                <div class="row row-title">
                    <div class="col text-center col-title">Nome</div>
                    <div class="col text-center col-title">Tipo</div>
                    <div class="col text-center col-title">Posologia</div>
                    <div class="col text-center col-title">Origem</div>
                    <div class="col text-center col-title">Aderência</div>
                    <div class="col text-center col-title">Num USP</div>
                </div>
            @endslot
            @slot('grid_content')
                @foreach ($tratamento_medicamentos as $tratamento_medicamento)
                {{-- ARRUMA AQUI --}}
                    @if ($tratamento_medicamento->num_registro == null)
                        n cadastro nada burro
                    @else
                        @if ($tratamento_medicamento->num_registro == $dados->num_registro)
                        <a href="{{route('medicamento.editar', ['num_registro' => $dados->num_registro, 'nome' => $dados->nome])}}">
                            <div class="row row-text row-hover">
                                <p class="col text-center col-text">{{$tratamento_medicamento->nome}}</p>
                                <p class="col text-center col-mail">{{$tratamento_medicamento->tipo}}</p>
                                <p class="col text-center col-mail">{{$tratamento_medicamento->posologia}}</p>
                                <p class="col text-center col-text">{{$tratamento_medicamento->origem}}</p>
                                <p class="col text-center col-text">{{$tratamento_medicamento->aderencia}}</p>
                                <p class="col text-center col-text">{{$tratamento_medicamento->num_USP}}</p>
                            </div>
                        </a>
                        @endif
                    @endif
                @endforeach
            @endslot
            @slot('route_btn')
            {{route('medicamento.cadastrar', $dados->num_registro)}}
            @endslot
        @endcomponent
            {{-- @component('components.items.paciente-item')
                @slot('coluna')
                    col-md-auto
                @endslot
                @slot('icon')
                    <span class="material-symbols-outlined">
                        library_add
                    </span>
                @endslot
                @slot('button')
                    Cadastrar Medicamentos
                @endslot
                @slot('href')
                    {{route('medicamento.cadastrar', $dados->num_registro)}}
                @endslot
            @endcomponent
            @foreach ($tratamento_medicamentos as $tratamento_medicamento)
            @if ($tratamento_medicamento->num_registro == $dados->num_registro)
                @component('components.items.medicamentos-item')
                    
                    @slot('href')
                        {{route('medicamento.cadastrar', $dados->num_registro)}}
                    @endslot
                @endcomponent
                <div class="square-content square-content--medicamento_item">
                    {{$tratamento_medicamento->nome}}    
                    {{$tratamento_medicamento->posologia}}
                </div>        
            @endif
            @endforeach --}}
        </div>
    </section>
@endsection