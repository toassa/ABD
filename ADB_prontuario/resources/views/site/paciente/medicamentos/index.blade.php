@extends('layout.site')

@section('titulo-pagina', 'Editar Pacientes')

@section('content')
    @component('components.items.voltar')
    @slot('rota_voltar')
        {{route('consulta.menu', $dados->num_registro)}}
    @endslot
    @endcomponent
    <section class="square-content square-content--medicamentos">
        @component('components.pages.listar-med')
            @slot('title')
                <h1 class="text-center">Medicamentos Utilizados</h1>
                <div class="usuario">
                    <a href="{{route('paciente.configuracoes', $dados->num_registro)}}">
                        <a href="{{route('paciente.configuracoes', $dados->num_registro)}}" id="name_paciente">Paciente: {{$dados->nome}}</a>
                        <span class="material-symbols-outlined">
                            settings
                        </span>
                    </a>
                </div>
                @if($tratamento_medicamentos == '[]')
                    <p class="text-center" style="margin-bottom: 4vh">Selecione um medicamento para editá-lo</p>
                @endif
            @endslot

            @slot('grid_titles')
                @if ($tratamento_medicamentos == '[]')
                    <div class="text-center">
                        Ainda não há medicamentos cadastrados para esse paciente
                    </div>
                @else
                    <div class="row row-title">
                        <div class="col-md-2 text-center col-title">Nome</div>
                        <div class="col-md-2 text-center col-title">Tipo</div>
                        <div class="col-md-2 text-center col-title" id="mesa">Posologia</div>
                        <div class="col-md-2 text-center col-title" id="administrador">Aderência</div>
                        <div class="col-md-2 text-center col-title" id="num_USP">Num USP</div>
                        <div class="col-md-1 text-center col-title"></div>
                        <div class="col-md-1 text-center col-title"></div>
                    </div>
                @endif
            @endslot
            @slot('grid_content')
                @if ($tratamento_medicamentos == '[]')
                    <div class="text-center">
                        Cadastre-os no botão abaixo
                    </div>
                @else
                    @foreach ($tratamento_medicamentos as $tratamento_medicamento)
                            @if ($tratamento_medicamento->num_registro == $dados->num_registro)
                                <!-- <a href="{{route('medicamento.editar', ['num_registro' => $dados->num_registro, 'nome' => $tratamento_medicamento->nome])}}"> -->
                                    <div class="row row-text" style="cursor:default;">
                                        <p class="col-md-2 text-center col-text">{{$tratamento_medicamento->nome}}</p>
                                        <p class="col-md-2 text-center col-mail">{{$tratamento_medicamento->tipo}}</p>
                                        <p class="col-md-2 text-center col-mail" id="mesa">{{$tratamento_medicamento->posologia}}</p>
                                        <p class="col-md-2 text-center col-text" id="administrador">{{$tratamento_medicamento->aderencia}}</p>
                                        <p class="col-md-2 text-center col-text" id="num_USP">{{$tratamento_medicamento->num_USP}}</p>
                                        <!-- <p class="col-md-1 text-center col-text"> -->
                                            <a href="{{route('medicamento.editar', ['num_registro' => $dados->num_registro, 'nome' => $tratamento_medicamento->nome])}}" class="col-md-1 text-center col-text row-hover">
                                                <span class="material-symbols-outlined" style="color: #78a82a !important; font-weight: 800 !important;">
                                                    edit
                                                </span>
                                            </a>
                                            <a href="{{route('medicamento.excluir', ['num_registro' => $dados->num_registro, 'nome' => $tratamento_medicamento->nome])}}" class="col-md-1 text-center col-text row-hover">
                                                <span class="material-symbols-outlined" style="color: red !important; font-weight: 800 !important;">
                                                    close
                                                </span>
                                            </a>
                                        <!-- </p> -->
                                    </div>
                                <!-- </a> -->
                            @endif
                    @endforeach
                @endif
            @endslot
            @slot('route_btn')
            {{route('medicamento.cadastrar', $dados->num_registro)}}
            @endslot
        @endcomponent
        </div>
    </section>
@endsection