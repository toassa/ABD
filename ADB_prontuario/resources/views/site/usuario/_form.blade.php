<div class="col-md-4">
    <label for="validationCustomNumUSP" class="form-label textinho">Número USP <b>*</b></label>
    <input type="text" class="text-center form-control" id="validationCustom01" value="{{isset($rows->num_USP) ? $rows->num_USP : ''}}" maxlength="8" name="num_USP" required>
    <div class="invalid-feedback">
        Insira o número USP
    </div>
</div>
<div class="col-md-4">
    <label for="validationCustomUsername" class="form-label textinho">Nome<b>*</b></label>
    <input type="text" class="text-center form-control" id="validationCustomUsername" value="{{isset($rows->name) ? $rows->name : ''}}" name="name" maxlength="200" required>
    <div class="invalid-feedback">
        Insira o nome completo do usuário
    </div>
</div>
<div class="col-md-4">
    <label for="validationCustomUserCPF" class="form-label textinho">CPF<b>*</b></label>
    <input type="text" class="text-center form-control" id="validationCustomUserCPF" value="{{isset($rows->CPF) ? $rows->CPF : ''}}" onInput="mascara(this)" name="CPF" maxlength="11" required>
    <div class="invalid-feedback">
        Insira um CPF válido
    </div>
</div>
<div class="col-md-4">
    <label for="validationCustomUserMail" class="form-label textinho">E-mail<b>*</b></label>
    <div class="input-group has-validation">
    <span class="input-group-text" id="inputGroupPrepend">@</span>
    <input type="email" class="text-center form-control" id="validationCustomMail" aria-describedby="inputGroupPrepend" value="{{isset($rows->email) ? $rows->email : ''}}" name="email" required>
    <div class="invalid-feedback">
        Inira o e-mail USP, ex: usuario@usp.br
    </div>
    </div>
</div>
<div class="col-md-4">
    <label for="validationCustomUserPass" id="labelValidationCustomUserPass" class="form-label textinho">Senha<b>*</b></label>
    <input type="password" class="text-center form-control" id="validationCustomUserPass" value="{{isset($rows->password) ? $rows->password : ''}}" name="password" required>
    <div class="invalid-feedback">
        Insira uma senha para o usuário
    </div>
</div>
<div class="col-md-4">
    <label for="validationCustomUserCargo" class="form-label textinho">Cargo<b>*</b></label>
    <select class="form-select" id="validationCustomUserCargo" name="cargo" required>
        <option disabled selected value="">Clique para escolher...</option>
        <option {{ isset($rows->cargo) && $rows->cargo === 'medico' ? 'selected' : '' }} value="medico">Médico</option>
        <option {{ isset($rows->cargo) && $rows->cargo === 'aluno' ? 'selected' : '' }} value="aluno">Aluno</option>
    </select>
</div>
<div class="col-md-6">
    <div class="form-check">
    <input class="form-check-input" type="hidden" value="false" {{ isset($rows->administrador) && $rows->administrador == true ? 'checked' : '' }} name="administrador" id="invalidCheck">
    <input class="form-check-input" type="checkbox" value="true" {{ isset($rows->administrador) && $rows->administrador == true ? 'checked' : '' }} name="administrador" id="invalidCheck">
    <label class="form-check-label textinho" for="invalidCheck">
        Administrador?<b>*</b>
    </label>
    </div>
</div>
<div class="col-md-6">
    <div class="form-check">
    <input class="form-check-input" type="hidden" value="false" {{ isset($rows->ativo) && $rows->ativo == true ? 'checked' : '' }} name="ativo" id="invalidCheck">
    <input class="form-check-input" type="checkbox" value="true" {{ isset($rows->ativo) && $rows->ativo == true ? 'checked' : '' }} name="ativo" id="invalidCheck">
    <label class="form-check-label textinho" for="invalidCheck">
        Ativo?<b>*</b>
    </label>
    </div>
</div>