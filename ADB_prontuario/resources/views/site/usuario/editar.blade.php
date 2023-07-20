@extends('layout.site')

@section('titulo-pagina','Editar Usuários')

@section('content')
    @component('components.items.back')@endcomponent
    <section class="square-content square-content--user-cadastro">
        <h1 class="text-center">Editar Usuários</h1>
        <form action="{{route('users.atualizar', $rows->num_USP)}}" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            @include('site.usuario._form')
            <div class="col-12 col-btn-form">
                <button class="btn btn-primary">Atualizar</button>
            </div>
        </form>
    </section>
    <script src="{{asset('js/editar.js')}}"></script>
@endsection