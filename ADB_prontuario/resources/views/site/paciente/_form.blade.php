<div class="col-md-3">
  <label for="validationCustom01" class="form-label">Número de registro <b>*</b></label>
  <input type="text" class="form-control" id="validationCustom01" value="{{isset($dados->num_registro) ? $dados->num_registro : ''}}" name="num_registro" required>
  <div class="invalid-feedback">
      Insira o número de registro
  </div>
</div>
<div class="col-md-3">
  <label for="validationCustom02" class="form-label">Nome<b>*</b></label>
  <input type="text" class="form-control" id="validationCustom02" value="{{isset($dados->nome) ? $dados->nome : ''}}" name="nome" required>
  <div class="invalid-feedback">
      Insira o nome completo do paciente
  </div>
</div>
<div class="col-md-2">
  <label for="validationCustom03" class="form-label">Idade<b>*</b></label>
  <input type="number" class="form-control" id="validationCustom03" value="{{isset($dados->data_nascimento) ? $dados->data_nascimento : ''}}" name="data_nascimento" maxlength="2">
  <div class="invalid-feedback">
      Insira uma idade válida para o paciente
  </div>
</div>
<div class="col-md-2">
  <label for="validationCustom04" class="form-label">Data de nascimento<b>*</b></label>
  <input type="text" class="form-control" id="validationCustom04" value="{{isset($dados->data_nascimento) ? $dados->data_nascimento : ''}}" name="data_nascimento">
  <div class="invalid-feedback">
      Insira uma data de nascimento válida para o paciente
  </div>
</div>

{{-- onkeyup="escreve_tel(event)" required --}}

<div class="col-md-4">
  <label for="validationCustomUsername" class="form-label">E-mail<b>*</b></label>
  <div class="input-group has-validation">
  <span class="input-group-text" id="inputGroupPrepend">@</span>
  <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="{{isset($dados->email) ? $dados->email : ''}}" name="email" required>
  <div class="invalid-feedback">
      Inira o e-mail USP, ex: usuario@usp.br
  </div>
  </div>
</div>
<div class="col-md-6">
  <label for="validationCustom03" id="labelValidationCustom03" class="form-label">Senha<b>*</b></label>
  <input type="password" class="form-control" id="validationCustom03" value="{{isset($dados->password) ? $dados->password : ''}}" name="password" required>
  <div class="invalid-feedback">
      Insira uma senha para o usuário
  </div>
</div>
<div class="col-md-3">
  <label for="validationCustom05" class="form-label">CPF<b>*</b></label>
  <input type="text" class="form-control" id="validationCustom05" value="{{isset($dados->CPF) ? $dados->CPF : ''}}" name="CPF" required>
  <div class="invalid-feedback">
      Insira um CPF válido
  </div>
</div>
<div class="col-md-3">
  <label for="validationCustom04" class="form-label">Cargo<b>*</b></label>
  <select class="form-select" id="validationCustom04" name="cargo">
  <option selected value="medico">Médico</option>
  <option value="aluno">Aluno</option>
  </select>
</div>
<div class="col-md-6">
  <div class="form-check">
  <input class="form-check-input" type="hidden" value="false" {{ isset($dados->administrador) && $dados->administrador == true ? 'checked' : '' }} name="administrador" id="invalidCheck">
  <input class="form-check-input" type="checkbox" value="true" {{ isset($dados->administrador) && $dados->administrador == true ? 'checked' : '' }} name="administrador" id="invalidCheck">
  <label class="form-check-label" for="invalidCheck">
      Administrador?<b>*</b>
  </label>
  </div>
</div>
<div class="col-md-6">
  <div class="form-check">
  <input class="form-check-input" type="hidden" value="false" {{ isset($dados->ativo) && $dados->ativo == true ? 'checked' : '' }} name="ativo" id="invalidCheck">
  <input class="form-check-input" type="checkbox" value="true" {{ isset($dados->ativo) && $dados->ativo == true ? 'checked' : '' }} name="ativo" id="invalidCheck">
  <label class="form-check-label" for="invalidCheck">
      Ativo?<b>*</b>
  </label>
  </div>
</div>