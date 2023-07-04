@extends('layout.site')

@section('titulo-pagina', 'Login')

@section('content')
    <section class="square-content square-content--login">
        <img src="{{asset('images/logo_ADB.png')}}" alt="Logo da ADB" class="login-logo">
        <form action="{{route('admin.opcoes')}}" method="get">
            <div class="mb-3">
                <label for="input-num_USP" class="form-label">Número USP <b>*</b></label>
                <input type="text" class="form-control" id="input-num_USP" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="input-senha" class="form-label">Senha <b>*</b></label>
                <input type="password" class="form-control" id="input-senha" required>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
            <div class="login-link">
                <a href="#" class="login-link">Esqueceu a senha?</a>
            </div>
        </form>
    </section>
@endsection