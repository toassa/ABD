{{-- Página de Login --}}

@extends('layout.site')

@section('titulo-pagina', 'Login')

@section('content')
    {{-- ícone de para alternar entre modo escuro e claro --}}
    <div class="check-theme">
        <input type="checkbox" name="change-theme" id="change-theme">
        <label for="change-theme">
            <span class="material-symbols-outlined" id="icon-theme">
                light_mode
            </span>
        </label>
    </div>
    {{-- Conteúdo do login --}}
    <section class="square-content square-content--login">
        <img src="{{asset('images/logo_ADB.png')}}" alt="Logo da ADB" class="login-logo">
        {{-- Verfica se o login do usuário estava inválido e exibe o alert --}}
        @if($auth == false)
            <script type="text/javascript">alert("Número USP ou senha inválidos. Digite novamente.");</script>
        @endif
        <form action="{{route('login.entrar')}}" method="post">
            {{ csrf_field() }}
            {{-- Input referente ao número USP --}}
            <div class="mb-3">
                <label for="input-num_USP" class="form-label">Número USP <b>*</b></label>
                <input type="text" class="form-control" id="validationCustom01" value="{{isset($rows->num_USP) ? $rows->num_USP : ''}}" maxlength="8" placeholder="Digite seu número USP" name="num_USP" required>
            </div>
            {{-- Input referente à senha, chamando a função para torná-la visível ou não --}}
            <div class="mb-3 password-container">
                <label for="validationCustomPass" class="form-label">Senha <b>*</b></label>
                <input type="password" class="form-control" id="validationCustomPass" name="password" placeholder="Digite sua senha" required>
                <span class="material-symbols-outlined show-password" id="olhinho" onclick="togglePasswordVisibility()">
                    visibility_off
                </span>
            </div>
            {{-- Botões de envio ao controlador do login --}}
            <button type="submit" class="btn btn-primary btn-giga">Entrar</button>
            <div class="login-link align-content">
                <a href="{{route('enviar_email')}}" class="login-link login-link text-center">Esqueceu a senha?</a>
            </div>
        </form> {{-- Formulário --}}
    </section>{{-- Section login --}}
@endsection