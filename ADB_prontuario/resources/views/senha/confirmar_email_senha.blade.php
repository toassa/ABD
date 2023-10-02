<form class="" action="{{route('confirmar_email_senha')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
    <input type="text" name="codigoresp" placeholder="codigo">
    <input type="password" name="senhaNova" placeholder="Nova senha">
    <input type="hidden" name="time" value="{{(string)$info->time}}">
    <input type="hidden" name="codigo" value="{{(string)$info->codigo}}">
    <input type="hidden" name="email" value="{{(string)$info->email}}">
    <button class="button_salvar">confirmar</button>
</form>