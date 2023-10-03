@extends('layout.site')

@section('titulo-pagina','Cadastro de Usuários')

@section('content')
    @component('components.items.back')@endcomponent
    @component('components.items.user_name')@endcomponent
    <section class="square-content square-content--cadastro">
        {{-- action:route ALTERAR --}}
        @if($num_existente == true)
            <script type="text/javascript">alert("Já existe um usuário cadastrado com esse número USP. Pof favor, insira outro valor para o campo.");</script>
        @endif
        <h1 class="text-center">Cadastro de Usuários</h1>
        <form action="{{route('users.salvar')}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            @include('site.usuario._form')
            <div class="col-12 col-btn-form">
                <button class="btn btn-giga btn-primary-darker" type="reset">Limpar</button>
                <button class="btn btn-giga btn-primary" type="submit">Cadastrar</button>
            </div>
        </form>
    </section>
@endsection