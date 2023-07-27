<div class="col-md-3">
  <label for="validationCustom01" class="form-label">Número de registro <b>*</b></label>
  <input type="text" class="form-control text-center" pattern="[0-9]*" id="validationCustom01" value="{{isset($dados->num_registro) ? $dados->num_registro : ''}}" name="num_registro" required>
  <div class="invalid-feedback">
      Insira o número de registro
  </div>
</div>
<div class="col-md-5">
  <label for="validationCustom02" class="form-label">Nome <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustom02" value="{{isset($dados->nome) ? $dados->nome : ''}}" maxlength="200" name="nome" required>
  <div class="invalid-feedback">
    Insira o nome completo do paciente
  </div>
</div>
<div class="col-md-6">
  <label for="validationCustom03" class="form-label">Data de nascimento <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustom03" value="{{isset($dados->data_nascimento) ? $dados->data_nascimento : ''}}" name="data_nascimento" required>
  <div class="invalid-feedback">
      Insira uma data de nascimento válida para o paciente
  </div>
</div>

<div class="col-md-2">
  <label for="validationCustom04" class="form-label">Idade <b>*</b></label>
  <input type="number" class="form-control text-center" id="validationCustom04" value="{{isset($dados->idade) ? $dados->idade : ''}}" name="idade" maxlength="2" required>
  <div class="invalid-feedback">
      Insira uma idade válida para o paciente
  </div>
</div>
<div class="col-md-3">
  <label for="validationCustom05" class="form-label">Sexo <b>*</b></label>
  <select class="form-select" id="validationCustom05" name="sexo" required>
    <option selected disabled value="">Clique para escolher...</option>
    <option value="Feminino">Feminino</option>
    <option value="Masculino">Masculino</option>
    <option value="Prefiro não dizer">Prefiro não dizer</option>
  </select>
</div>
<div class="col-md-3">
  <label for="validationCustom06" class="form-label">Cor <b>*</b></label>
  <select class="form-select" id="validationCustom06" name="cor" required>
    <option selected disabled value="">Clique para escolher...</option>
    <option value="Amarelo">Amarelo</option>
    <option value="Branco">Branco</option>
    <option value="Indígena">Indígena</option>
    <option value="Pardo">Pardo</option>
    <option value="Preto">Preto</option>
    <option value="Prefiro não dizer">Prefiro não dizer</option>
  </select>
</div>
<div class="col-md-3">
  <label for="validationCustom07" class="form-label">Estado civil <b>*</b></label>
  <select class="form-select" id="validationCustom07" name="estado_civil" required>
    <option selected disabled value="">Clique para escolher...</option>
    <option value="Casado">Casado</option>
    <option value="Solteiro">Solteiro</option>
    <option value="Separado">Separado</option>
    <option value="Divorciado">Divorciado</option>
    <option value="Viúvo">Viúvo</option>
  </select>
</div>

<div class="col-md-6">
  <label class="form-check-label" for="invalidCheck">
    Desempregado/Aposentado por causa da diabetes? <b>*</b>
  </label>
  
</div>

<div class="col-md-3">
  <label for="validationCustom08" class="form-label">Profissão <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustom08" value="{{isset($dados->profissao) ? $dados->profissao : ''}}" name="profissao" required>
  <div class="invalid-feedback">
    Insira a profissão do paciente 
  </div>
</div>
<div class="col-md-3">
  <label for="validationCustom09" class="form-label">Escolaridade <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustom09" value="{{isset($dados->escolaridade) ? $dados->escolaridade : ''}}" name="escolaridade" required>
  <div class="invalid-feedback">
    Insira a escolaridade do paciente 
  </div>
</div>
<div class="col-md-6">
  <label for="validationCustom10" class="form-label">Renda mensal <b>*</b></label>
  <div class="input-group has-validation">
  <span class="input-group-text" id="inputGroupPrepend">$</span>
  <input type="number" class="form-control text-center" id="validationCustom10" aria-describedby="inputGroupPrepend" value="{{isset($dados->renda_mensal) ? $dados->renda_mensal : ''}}" name="renda_mensal" step="any" required>
  <div class="invalid-feedback">
      Inira uma renda mensal válida para o paciente
  </div>
  </div>
</div>
<div class="col-md-2">
  <label for="validationCustom11" class="form-label">Dependentes da renda <b>*</b></label>
  <input type="number" class="form-control text-center" id="validationCustom11" value="{{isset($dados->dependentes_renda) ? $dados->dependentes_renda : ''}}" name="dependentes_renda" maxlength="2" required>
  <div class="invalid-feedback">
      Insira uma quantia válida de dependentes
  </div>
</div>
<div class="col-md-3">
  <label for="validationCustom12" class="form-label">Transporte <b>*</b></label>
  <select class="form-select" id="validationCustom12" name="transporte" required>
    <option selected disabled value="">Clique para escolher...</option>
    <option value="Ônibus">Ônibus</option>
    <option value="Trem">Trem</option>
    <option value="Metrô">Metrô</option>
    <option value="Van">Van</option>
    <option value="Carro">Carro</option>
    <option value="Taxi">Taxi</option>
    <option value="Uber">Uber</option>
    <option value="A pé">A pé</option>
    <option value="Outros">Outros</option>
  </select>
</div>
<div class="col-md-6">
  <div class="form-check">
  <input class="form-check-input" type="hidden" value="false" {{ isset($dados->plano_saude) && $dados->plano_saude == true ? 'checked' : '' }} name="plano_saude" id="invalidCheck">
  <input class="form-check-input" type="checkbox" value="true" {{ isset($dados->plano_saude) && $dados->plano_saude == true ? 'checked' : '' }} name="plano_saude" id="invalidCheck">
  <label class="form-check-label" for="invalidCheck">
    Plano de saúde? <b>*</b>
  </label>
  </div>
</div>
<div class="col-md-3">
  <label for="validationCustom14" class="form-label">Telefone <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustom14" value="{{isset($dados->telefone) ? $dados->telefone : ''}}" name="telefone" onkeyup="escreve_tel(event)" maxlength="15" required>
  <div class="invalid-feedback">
      Insira um telefone válido para o paciente
  </div>
</div>
<div class="col-md-3">
  <label for="validationCustom15" class="form-label">Segundo telefone <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustom15" value="{{isset($dados->segundo_telefone) ? $dados->segundo_telefone : ''}}" name="segundo_telefone" onkeyup="escreve_tel(event)" maxlength="15" required>
  <div class="invalid-feedback">
      Insira um 2º telefone válido
  </div>
</div>
<div class="col-md-5">
  <label for="validationCustom16" class="form-label">Dono do 2º telefone <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustom16" value="{{isset($dados->nome) ? $dados->nome : ''}}" name="nome" required>
  <div class="invalid-feedback">
      Insira o dono do 2º telefone
  </div>
</div>
<div class="col-md-5">
  <label for="validationCustom17" class="form-label">CEP <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustom17" value="{{isset($dados->CEP) ? $dados->CEP : ''}}" name="CEP" required>
  <div class="invalid-feedback">
      Insira um CEP válido
  </div>
</div>
<div class="col-md-5">
  <label for="validationCustom18" class="form-label">Número <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustom18" value="{{isset($dados->numero_moradia) ? $dados->numero_moradia : ''}}" name="numero_moradia" required>
  <div class="invalid-feedback">
      Insira um número válido
  </div>
</div>
<div class="col-md-5">
  <label for="validationCustom19" class="form-label">Rua <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustom19" value="{{isset($dados->rua) ? $dados->rua : ''}}" name="rua" required>
  <div class="invalid-feedback">
      Insira uma rua válida
  </div>
</div>
<div class="col-md-5">
  <label for="validationCustom20" class="form-label">Bairro <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustom20" value="{{isset($dados->bairro) ? $dados->bairro : ''}}" name="bairro" required>
  <div class="invalid-feedback">
      Insira um bairro válido
  </div>
</div>
<div class="col-md-5">
  <label for="validationCustom21" class="form-label">Cidade <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustom21" value="{{isset($dados->cidade) ? $dados->cidade : ''}}" name="cidade" required>
  <div class="invalid-feedback">
    Insira uma cidade válida
  </div>
</div>
<div class="col-md-5">
  <label for="validationCustom22" class="form-label">Estado <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustom22" value="{{isset($dados->estado) ? $dados->estado : ''}}" name="estado" required>
  <div class="invalid-feedback">
      Insira um estado válido
  </div>
</div>
<div class="col-md-5">
  <label for="validationCustom23" class="form-label">Complemento <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustom23" value="{{isset($dados->complemento) ? $dados->complemento : ''}}" name="complemento" required>
  <div class="invalid-feedback">
      Insira um complemento válido
  </div>
</div>

<div class="col-md-5">
  <label for="validationCustom24" class="form-label">Estado de nascimento <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustom24" value="{{isset($dados->estado_nascimento) ? $dados->estado_nascimento : ''}}" name="estado_nascimento" required>
  <div class="invalid-feedback">
      Insira um estado de nascimento válido
  </div>
</div>
<div class="col-md-6">
  <div class="form-check">
  <input class="form-check-input" type="hidden" value="false" {{ isset($dados->plano_saude) && $dados->plano_saude == true ? 'checked' : '' }} name="plano_saude" id="invalidCheck">
  <input class="form-check-input" type="checkbox" value="true" {{ isset($dados->plano_saude) && $dados->plano_saude == true ? 'checked' : '' }} name="plano_saude" id="invalidCheck">
  <label class="form-check-label" for="invalidCheck">
    Ativo <b>*</b>
  </label>
  </div>
</div>

{{-- <option selected disabled value="">Choose...</option> --}}
{{-- onkeyup="escreve_tel(event)" required --}}