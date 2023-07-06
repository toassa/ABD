@extends('layout.site')

@section('titulo-pagina','Cadastro de Uusários')

@section('content')
    @component('components.leave')
        @slot('rota_sair')
            {{route('admin.login')}}
        @endslot
    @endcomponent
    <div class="square-content square-content--user-cadastro">
        {{-- action:route ALTERAR --}}
        <form action="" method="post" class="row g-3 needs-validation" novalidate>
            {{ csrf_field() }}
            @include('site.usuario._form')
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
@endsection