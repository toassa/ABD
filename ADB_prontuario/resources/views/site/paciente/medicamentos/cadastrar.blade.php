@extends('layout.site')

@section('titulo-pagina','Cadastro de Medicamentos')

@section('content')
    @component('components.items.back')@endcomponent
    <div class="usuario" style="    text-shadow: -1px 0 gray, 0 1px gray, 1px 0 gray, 0 -1px gray;">
        <p>{{$dados->nome}}</p>
        <span class="material-symbols-outlined">
          person_search 
        </span>
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