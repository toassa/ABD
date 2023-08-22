@extends('layout.site')

@section('titulo-pagina', 'Editar Pacientes')

@section('content')
    @component('components.items.back')
    @endcomponent
        <section class="square-content square-content--cadastro">
            <h1 class="text-center">Editar Pacientes</h1>
            <form action="{{route('paciente.atualizar', $dados->num_registro, Auth::user()->num_USP)}}" method="post" class="row g-3 needs-validation" novalidate>
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="pagination-container">
                    <div class="pagination-content">
                        @include('site.paciente._form')
                    </div>
                </div>
                <div class="col-12 col-btn-form">
                    <button class="btn btn-giga btn-primary">Atualizar</button>
                </div>
            </form>
            <div class="align-content">
                <button class="prev-btn btn btn-secondary">
                    <span class="material-symbols-outlined">
                        arrow_back
                    </span>
                </button>
                <button class="next-btn btn btn-secondary">
                    <span class="material-symbols-outlined">
                        arrow_forward
                    </span>
                </button>
            </div>
        </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('js/slide.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="{{asset('js/form-cadastro-paciente.js')}}"></script>
    <script src="{{asset('js/functions.js')}}"></script>
@endsection