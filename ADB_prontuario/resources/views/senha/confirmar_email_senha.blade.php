@extends('layout.site')

@section('titulo-pagina', 'Redefinição de senha')

@section('content')
    <div class="leave">
        <span class="material-symbols-outlined">
            arrow_back_ios
        </span>
        <input type="button" value="Voltar" onClick="history.go(-1)"> 
    </div>
    {{-- ícone de para alternar entre modo escuro e claro --}}
    <div class="check-theme">
        <input type="checkbox" name="change-theme" id="change-theme">
        <label for="change-theme">
            <span class="material-symbols-outlined" id="icon-theme">
                light_mode
            </span>
        </label>
    </div>
    <div style="position: relative; margin-top: 50px;">
        <img src="{{asset('images/pack/medico-aponta.png')}}" alt="Médico apontando para baixo" class="img_resetpassword">
        <nav class="square-content square-content--password">
        <div class="title-resetpassword-text">
            <h1>Redefinir senha</h1>
            <p class="p-password">Enviamos um código de verificação para o seu endereço de  
                e-mail. Insira o código abaixo para redefinir a senha</p>
            <form class="" action="{{route('confirmar_email_senha')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                     </div>
                @endif
                <div class="form-group col-md-8 centralizado">
                    <label class="label-resetar">Código</label>
                    <input type="text" class="form-control input-text-resetar" name="codigoresp" placeholder="Digite o código" maxlength="5" required>
                    <label class="label-resetar">Senha</label>

		<input type="password" class="form-control input-text-resetar" id="validationCustomPass" name="senhaNova" placeholder="Nova senha" required>
                    <span class="material-symbols-outlined show-password2" id="olhinho" onclick="togglePasswordVisibility()">
                        visibility_off
                    </span>

                    <input type="hidden" class="form-control input-text-resetar" name="time" value="{{(string)$info->time}}">
                    <input type="hidden" class="form-control input-text-resetar" name="codigo" value="{{(string)$info->codigo}}">
                    <input type="hidden" class="form-control input-text-resetar" name="email" value="{{(string)$info->email}}">
                <button class="btn btn-primary-darker-resetar">Confirmar</button>
                <!-- executa a mensagem enviada pelo controlador, validado pelo Request -->
                <main>  
                    @if (session('msg'))
                    <div class="alert alert-danger">
                        <p class="msg">{{session('msg')}}</p>
                    </div>
                    @endif 
                </main>
                </form>
            </div>  
        </nav>
    </div>
@endsection