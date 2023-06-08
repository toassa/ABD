@extends('layout.site')

@section('titulo-pagina', 'Login')

@section('content')
    <section class="login-content">
        <img src="../../../images/logo_ADB.png" alt="Logo da ADB" class="login-logo">
        <form>
            <div class="mb-3">
                <label for="input-num_USP" class="form-label">Número USP</label>
                <input type="text" class="form-control" id="input-num_USP" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="input-senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="input-senha">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </section>
@endsection