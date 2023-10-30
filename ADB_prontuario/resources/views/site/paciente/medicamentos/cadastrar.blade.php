@extends('layout.site')

@section('titulo-pagina','Cadastro de Medicamentos')

@section('content')
    @component('components.items.back')@endcomponent
    <div class="usuario">
        <a href="{{route('paciente.configuracoes', $dados->num_registro)}}">
            <a href="{{route('paciente.configuracoes', $dados->num_registro)}}">{{$dados->nome}}</a>
            <span class="material-symbols-outlined">
              settings
            </span>
        </a>
    </div>
    <section class="square-content square-content--medicamentos">
        <h1 class="text-center">Cadastro de Medicamentos</h1>
        <form action="{{route('medicamento.salvar', ['num_registro' => $dados->num_registro, 'num_USP' => Auth::user()->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            @include('site.paciente.medicamentos.tratamento_medicamentos._form')
            <div class="col-12 col-btn-form">
                <button class="btn btn-giga btn-primary" type="reset">Limpar</button>
                <button class="btn btn-giga btn-primary-confirm" type="submit">Cadastrar</button>
            </div>
        </form>
    </section>
@endsection