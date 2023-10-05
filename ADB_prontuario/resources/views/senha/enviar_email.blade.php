@extends('layout.site')

@section('titulo-pagina', 'Redefinição de senha')

@section('content')
    {{-- ADB_prontuario\public\images\pack\medico-aponta.png --}}
    
    <div class="leave">
        <span class="material-symbols-outlined">
            arrow_back_ios
        </span>
        <input type="button" value="Voltar" onClick="history.go(-1)"> 
    </div>
    <div style="position: relative;">
    <img src="{{asset('images\pack\medico-aponta.png')}}" alt="Médico apontando para baixo" class="img_resetpassword">
    <nav class="square-content square-content--password">
      <div class="title-resetpassword-text">
        <h1>Redefinir senha</h1>
        <p class="p-password">Informe o e-mail para o qual deseja redefinir a sua senha</p>
        <form action="{{route('gerar_codigo')}}" method="post" enctype="multipart/form-data">
            {{csrf_field() }}
            

              {{-- <div class="form-group col-md-4">
                <label for="validationCustomNum" class="form-label">Endereço de Email </label>
                <input type="email" class="form-control" id="validationCustomNum" placeholder="Seu email" name="email"required>
                <small id="emailHelp" class="form-text text-muted">Digite o email cadastrado para recuperação</small>
            </div> --}}
            {{-- <input type="email" name="email">  --}}
            <div class="form-group col-md-8 centralizado">
                <label class="label-resetar">E-mail</label>
                <input type="email" name="email" class="form-control"  aria-describedby="emailHelp" placeholder="Insira seu e-mail" required>
            <button class="btn btn-primary-darker-resetar">Confirmar</button>   
        </form>
        </div>  
    {{-- <a class="btn btn-primary" href="{{route('admin.login')}}">VOLTAR À PÁGINA INICIAL</a> --}}
</nav>
</div>
@endsection
