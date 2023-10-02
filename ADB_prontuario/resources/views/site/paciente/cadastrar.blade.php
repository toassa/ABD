@extends('layout.site')

@section('titulo-pagina','Cadastro de Pacientes')

@section('content')
    @component('components.items.back')@endcomponent
    <section class="square-content square-content--cadastro">
        <h1 class="text-center">Cadastro de Pacientes</h1>
            @if($num_existente == true)
                <script type="text/javascript">alert("Já existe um paciente cadastrado com esse número de registro. Pof favor, insira outro valor para o campo.");</script>
            @endif
        <form action="{{route('paciente.salvar', Auth::user()->num_USP)}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            <div class="pagination-container">
                <div class="pagination-content">
                    @include('site.paciente._form')
                </div>
            </div>
            
            <div class="col-12 col-btn-form">
                <button class="btn btn-primary-darker btn-giga" type="reset">Limpar</button>
                <button class="btn btn-primary btn-giga" type="submit">Cadastrar</button>
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
    <script src="{{asset('js/cidades-form.js')}}"></script>
@endsection