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
                <div class="form-group col-md-8 centralizado">
                    <label class="label-resetar">Código</label>
                    <input type="text" class="form-control input-text-resetar" name="codigoresp" placeholder="Digite o código" maxlength="5" required>
                    <label class="label-resetar">Senha</label>
                    <input type="password" class="form-control input-text-resetar" name="senhaNova" placeholder="Nova senha" required>
                    <input type="hidden" class="form-control input-text-resetar" name="time" value="{{(string)$info->time}}">
                    <input type="hidden" class="form-control input-text-resetar" name="codigo" value="{{(string)$info->codigo}}">
                    <input type="hidden" class="form-control input-text-resetar" name="email" value="{{(string)$info->email}}">
                <button class="btn btn-primary-darker-resetar">Confirmar</button>
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif 
                </form>
            </div>  
        </nav>
    </div>
@endsection