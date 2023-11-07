@extends('layout.site')

@section('titulo-pagina', 'Redefinição de senha')

@section('content')
    <div class="leave">
        <span class="material-symbols-outlined">
            arrow_back_ios
        </span>
        <input type="button" value="Voltar" onClick="history.go(-1)"> 
        <!-- <a class="btn btn-primary" href="{{route('admin.opcoes')}}">VOLTAR À PÁGINA INICIAL</a> -->
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
    <div style="position: relative;">
    <img src="{{asset('images\pack\medico-aponta.png')}}" alt="Médico apontando para baixo" class="img_resetpassword">
    <nav class="square-content square-content--password">
      <div class="title-resetpassword-text">
        <h1>Redefinir senha</h1>
        <p class="p-password">Informe o e-mail para o qual deseja redefinir a sua senha</p>
        <form action="{{route('gerar_codigo')}}" method="post" enctype="multipart/form-data">
            {{csrf_field() }}
            <div class="form-group col-md-8 centralizado">
                <label class="label-resetar">E-mail</label>
                <input type="email" name="email" class="form-control"  aria-describedby="emailHelp" placeholder="Insira seu e-mail" required>

                <!-- este é um loop que percorre todos os erros contidos na variável $errors -->
                <!-- A mensagem de erro está definida no else da funcao gerarCodigo do controlador EmailController -->
                @if ($errors->any())
                <ul class="error-list alert-danger">
                    @foreach($errors->all() as $error)
                        <li class= "error">{{$error}}</li>
                    @endforeach
                </ul>
                @endif
            <button class="btn btn-primary-darker-resetar">Confirmar</button>   
        </form>
        </div>
    </nav>
    </div>
@endsection
