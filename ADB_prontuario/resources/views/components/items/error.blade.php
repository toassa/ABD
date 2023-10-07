<div style="position: relative;">
    <img src="{{$rota_erro}}" id="top-error" alt="Erro {{$nome_erro}}" class="img_resetpassword">
    <nav class="square-content square-content--password" id="content-error">
      <div class="title-resetpassword-text">
        <h1 class="text-error">{{$nome_erro}}</h1>
        <p class="p-password">{{$text_erro}}  Retorne à página incial.</p>
        <div class="form-group col-md-8 centralizado">
            <a class="btn btn-primary-darker-resetar" href="{{route('admin.opcoes')}}">Retornar</a>
        </div>
    </nav>
</div>