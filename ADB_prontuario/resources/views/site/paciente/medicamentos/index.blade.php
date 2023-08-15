@extends('layout.site')

@section('titulo-pagina', 'Editar Pacientes')

@section('content')
    @component('components.items.back')@endcomponent
    <div class="usuario">
        <p>{{$dados->nome}}</p>
        <span class="material-symbols-outlined">
          person_search
        </span>
      </div>
    <section class="square-content square-content--medicamentos">
        <h1 class="text-center">Medicamentos</h1>
        <div class="align-content">
            <a href="{{route('medicamento.cadastrar', $dados->num_registro)}}">
                <div class="square-content square-content--medicamento_item">
                    <span class="material-symbols-outlined">
                        library_add
                    </span>
                    Cadastrar
                </div>
            </a>
            @foreach ($tratamento_medicamentos as $tratamento_medicamento)
                <div class="square-content square-content--medicamento_item">
                    {{$tratamento_medicamento->nome}}    
                    {{$tratamento_medicamento->posologia}}
                </div>
            @endforeach
        </div>
    </section>
@endsection