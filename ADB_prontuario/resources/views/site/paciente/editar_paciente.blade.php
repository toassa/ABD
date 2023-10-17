@extends('layout.site')

@section('titulo-pagina', 'Editar Pacientes')

@section('content')
    @component('components.items.back')
    @endcomponent
        <section class="square-content square-content--cadastro">
            <h1 class="text-center">Editar Pacientes</h1>
            <form action="{{route('paciente.atualizar', ['num_registro' => $dados->num_registro, 'num_USP' => Auth::user()->num_USP])}}" method="post" class="row g-3 needs-validation" novalidate>
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="pagination-container">
                    <div class="pagination-content">
                        @include('site.paciente._form')
                    </div>
                </div>
                <div class="align-content">
                    <a class="prev-btn btn btn-secondary" id="pagination-icon">
                        <span class="material-symbols-outlined">
                            arrow_back
                        </span>
                    </a>
                    <a class="next-btn btn btn-secondary" id="pagination-icon">
                        <span class="material-symbols-outlined">
                            arrow_forward
                        </span>
                    </a>
                </div>
                <div class="col-12 col-btn-form">
                    <button class="btn btn-giga btn-primary-confirm">Atualizar</button>
                </div>
            </form>
        </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('js/slide.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="{{asset('js/form-cadastro-paciente.js')}}"></script>
    <script src="{{asset('js/functions.js')}}"></script>
    <script src="{{asset('js/cidades-form.js')}}"></script>

@endsection