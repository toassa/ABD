@extends('layout.site')

@section('titulo-pagina','Cadastro de Uusários')

@section('content')
    @component('components.items.back')@endcomponent
    <section class="square-content square-content--cadastro">
        <h1 class="text-center">Cadastro de Pacientes</h1>
        <form action="{{route('paciente.salvar')}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            @include('site.paciente._form')
            <div class="col-12 col-btn-form">
                <button class="btn btn-primary" type="submit">Cadastrar</button>
                <button class="btn btn-primary" type="reset">Limpar</button>
            </div>
        </form>
    </section>
    <script src="{{asset('js/form-cadastro-paciente.js')}}"></script>
@endsection