<div class="col-md-4">
    <label for="validationCustom01" class="form-label">Número USP <b>*</b></label>
    <input type="text" class="form-control" id="validationCustom01" value="{{isset($user->num_USP) ? $user->num_USP : ''}}" required>
    <div class="invalid-feedback">
        Insira o número USP
    </div>
</div>
<div class="col-md-4">
    <label for="validationCustom02" class="form-label">Nome<b>*</b></label>
    <input type="text" class="form-control" id="validationCustom02" value="{{isset($user->nome) ? $user->nome : ''}}" required>
    <div class="invalid-feedback">
        Insira o nome completo do usuário
    </div>
</div>
<div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">E-mail<b>*</b></label>
    <div class="input-group has-validation">
    <span class="input-group-text" id="inputGroupPrepend">@</span>
    <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="{{isset($user->email) ? $user->email : ''}}" required>
    <div class="invalid-feedback">
        Inira o e-mail USP, ex: usuario@usp.br
    </div>
    </div>
</div>
<div class="col-md-6">
    <label for="validationCustom03" class="form-label">Senha<b>*</b></label>
    <input type="password" class="form-control" id="validationCustom03" value="{{isset($user->password) ? $user->password : ''}}" required>
    <div class="invalid-feedback">
        Insira uma senha para o usuário
    </div>
</div>
<div class="col-md-3">
    <label for="validationCustom05" class="form-label">CPF<b>*</b></label>
    <input type="text" class="form-control" id="validationCustom05" value="{{isset($user->num_USP) ? $user->num_USP : ''}}" required>
    <div class="invalid-feedback">
        Insira um CPF válido
    </div>
</div>
<div class="col-md-3">
    <label for="validationCustom04" class="form-label">Cargo<b>*</b></label>
    <select class="form-select" id="validationCustom04">
    <option selected disabled value="Medico">Médico</option>
    <option value="Aluno">Aluno</option>
    </select>
</div>
<div class="col-12">
    <div class="form-check">
    <input class="form-check-input" type="checkbox" value="checked" {{ isset($user->administrador) && $user->administrador == true ? 'checked' : '' }} id="invalidCheck">
    <label class="form-check-label" for="invalidCheck">
        Administrador? <b>*</b>
    </label>
    </div>
</div>