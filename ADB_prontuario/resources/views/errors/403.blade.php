@extends('layout.site')

@section('titulo-pagina', 'Erro 403')

@section('content')
    <div style="position: relative;">
        <img src="{{asset('images/pack/503_error.png')}}" id="top-error-403" alt="Erro 403" class="img_resetpassword">
        <nav class="square-content square-content--password" id="content-error">
        <div class="title-resetpassword-text">
            <h1 class="text-error">403 Acesso negado</h1>
            <p class="p-password">Você tem certeza que está no lugar certo?  Retorne à página incial.</p>
            <div class="form-group col-md-8 centralizado">
                <a class="btn btn-primary-darker-resetar" href="{{route('admin.opcoes')}}">Retornar</a>
            </div>
        </nav>
    </div>
@endsection