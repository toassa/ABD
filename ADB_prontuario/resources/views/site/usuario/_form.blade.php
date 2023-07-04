{{-- <div class="input-field">
    <input type="text" name="nome" value="{{isset($user->nome) ? $user->nome : ''}}" required>
    <label>Nome</label>
</div> --}}

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="Digite o nome completo" value="{{isset($user->nome) ? $user->nome : ''}}">
    <label for="floatingInput">Nome</label>
</div>