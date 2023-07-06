<div class="col-md-4">
    <label for="validationCustom01" class="form-label">Número USP</label>
    <input type="text" class="form-control" id="validationCustom01" value="{{isset($user->num_USP) ? $user->num_USP : ''}}" required>
    <div class="valid-feedback">
    Certo
    </div>
</div>
<div class="col-md-4">
    <label for="validationCustom02" class="form-label">Nome</label>
    <input type="text" class="form-control" id="validationCustom02" value="{{isset($user->nome) ? $user->nome : ''}}" required>
    <div class="valid-feedback">
    Okay
    </div>
</div>
<div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">E-mail</label>
    <div class="input-group has-validation">
    <span class="input-group-text" id="inputGroupPrepend">@</span>
    <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="{{isset($user->email) ? $user->email : ''}}" required>
    <div class="invalid-feedback">
        Não, burro
    </div>
    </div>
</div>
<div class="col-md-6">
    <label for="validationCustom03" class="form-label">Senha</label>
    <input type="password" class="form-control" id="validationCustom03" value="{{isset($user->password) ? $user->password : ''}}" required>
    <div class="invalid-feedback">
    Mds escreve a senha certo
    </div>
</div>
<div class="col-md-3">
    <label for="validationCustom05" class="form-label">CPF</label>
    <input type="text" class="form-control" id="validationCustom05" value="{{isset($user->num_USP) ? $user->num_USP : ''}}" required>
    <div class="invalid-feedback">
        Certo
    </div>
</div>
<div class="col-md-3">
    <label for="validationCustom04" class="form-label">Cargo</label>
    <select class="form-select" id="validationCustom04" required>
    <option selected disabled value="Medico">Médico</option>
    <option value="Aluno">Aluno</option>
    </select>
    <div class="invalid-feedback">
    Bota direito
    </div>
</div>
<div class="col-12">
    <div class="form-check">
    <input class="form-check-input" type="checkbox" value="checked" {{ isset($user->administrador) && $user->administrador == true ? 'checked' : '' }} id="invalidCheck">
    <label class="form-check-label" for="invalidCheck">
        Administrador?
    </label>
    </div>
</div>