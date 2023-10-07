@extends('layout.site')

@section('titulo-pagina', 'Editar Usuários')

@section('content')
    @component('components.items.back')@endcomponent
    @component('components.items.user_name')@endcomponent
        <section class="square-content square-content--cadastro">
            <h1 class="text-center">Editar Usuários</h1>
            <form action="{{route('users.atualizar', $rows->num_USP)}}" method="post" class="row g-3 needs-validation" novalidate>
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                @include('site.usuario._form')
                <div class="col-12 col-btn-form">
                    <button class="btn btn-giga btn-primary-confirm">Atualizar</button>
                </div>
            </form>
        </section>
    <script src="{{asset('js/functions.js')}}"></script>
@endsection