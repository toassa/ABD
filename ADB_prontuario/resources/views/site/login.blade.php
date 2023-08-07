@extends('layout.site')

@section('titulo-pagina', 'Login')

@section('content')
    <section class="square-content square-content--login">
        <img src="{{asset('images/logo_ADB.png')}}" alt="Logo da ADB" class="login-logo">
        <form action="{{route('login.entrar')}}" method="post">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="input-num_USP" class="form-label">Número USP <b>*</b></label>
                <input type="text" class="form-control" id="validationCustom01" value="{{isset($rows->num_USP) ? $rows->num_USP : ''}}" maxlength="8" placeholder="Digite seu número USP" name="num_USP" required>
            </div>
            <div class="mb-3">
                <label for="input-senha" class="form-label">Senha <b>*</b></label>
                <input type="password" class="form-control" id="input-senha" name="password" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn btn-primary btn-giga">Entrar</button>
            <div class="login-link align-content">
                <a href="#" class="login-link login-link text-center">Esqueceu a senha?</a>
            </div>
        </form>
    </section>
@endsection