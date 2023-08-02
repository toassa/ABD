@extends('layout.site')

@section('titulo-pagina','Cadastro de Usuários')

@section('content')
    @component('components.items.back')@endcomponent
    <section class="square-content square-content--cadastro">
        {{-- action:route ALTERAR --}}
        <h1 class="text-center">Cadastro de Usuários</h1>
        <form action="{{route('users.salvar')}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            @include('site.usuario._form')
            <div class="col-12 col-btn-form">
                <button class="btn btn-giga btn-primary" type="submit">Cadastrar</button>
                <button class="btn btn-giga btn-primary" type="reset">Limpar</button>
            </div>
        </form>
    </section>
@endsection