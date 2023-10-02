@extends('layout.site')

@section('titulo-pagina', 'Redefinição de senha')

@section('content')
    
    <img src="{{asset('images/pack/medico-aponta.png')}}" alt="Médico apontando para baixo" class="img_error">
    <nav class="square-content square-content--error">
      <div class="error-text">
        <h1>Redefinir senha</h1>
        <form action="{{route('gerar_codigo')}}" method="post" enctype="multipart/form-data">
            {{csrf_field() }}
            
            <input type="email" name="email"> 
            <button class="button-white-blue">confirmar</button>   
        </form>
        </div>  
    

    <a class="btn btn-primary" href="{{route('admin.login')}}">VOLTAR À PÁGINA INICIAL</a>
</nav>
@endsection
