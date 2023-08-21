@extends('layout.site')

@section('titulo-pagina','Cadastro de Medicamentos')

@section('content')
    @component('components.items.back')@endcomponent
    <div class="usuario">
        <p>{{$dados->nome}}</p>
        <span class="material-symbols-outlined">
          person_search
        </span>
      </div>
    <section class="square-content square-content--medicamentos">
        <h1 class="text-center">Edição de Medicamentos</h1>
        <form action="{{route('medicamento.atualizar', ['num_registro' => $dados->num_registro, 'nome' => $dados->nome, 'num_USP' => Auth::user()->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            @include('site.paciente.medicamentos.tratamento_medicamentos._form')
            <div class="col-12 col-btn-form">
                <button class="btn btn-giga btn-primary-darker" type="reset">Limpar</button>
                <button class="btn btn-giga btn-primary" type="submit">Salvar</button>
            </div>
        </form>
    </section>
@endsection