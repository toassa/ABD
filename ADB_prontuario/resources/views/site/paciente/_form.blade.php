<div class="col-md-3">
  <label for="validationCustomNumRegistro" class="form-label">Número de registro <b>*</b></label>
  <input type="text" class="form-control text-center" pattern="[0-9]*" id="validationCustomNumRegistro" value="{{isset($dados->num_registro) ? $dados->num_registro : ''}}" name="num_registro" maxlength="12" required>
  <div class="invalid-feedback">
      Insira o número de registro
  </div>
</div>
<div class="col-md-6">
  <label for="validationCustomNome" class="form-label">Nome <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustomNome" value="{{isset($dados->nome) ? $dados->nome : ''}}" maxlength="200" name="nome"  maxlength="200"required>
  <div class="invalid-feedback">
    Insira o nome completo do paciente
  </div>
</div>
<div class="col-md-3">
  <label for="validationCustomData" class="form-label">Data de nascimento <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustomData" value="{{isset($dados->data_nascimento) ? $dados->data_nascimento : ''}}" name="data_nascimento" required>
  <div class="invalid-feedback">
      Data de nascimento inválida
  </div>
</div>

<div class="col-md-2">
  <label for="validationCustomIdade" class="form-label">Idade <b>*</b></label>
  <input type="number" class="form-control text-center" id="validationCustomIdade" value="{{isset($dados->idade) ? $dados->idade : ''}}" name="idade" maxlength="2" required>
  <div class="invalid-feedback">
      Idade inválida
  </div>
</div>
<div class="col-md-3">
  <label for="validationCustomSexo" class="form-label">Sexo <b>*</b></label>
  <select class="form-select" id="validationCustomSexo" name="sexo" required>
    <option selected disabled value="">Clique para escolher...</option>
    <option value="Feminino">Feminino</option>
    <option value="Masculino">Masculino</option>
    <option value="Prefiro não dizer">Prefiro não dizer</option>
  </select>
</div>
<div class="col-md-3">
  <label for="validationCustomCor" class="form-label">Cor <b>*</b></label>
  <select class="form-select" id="validationCustomCor" name="cor" required>
    <option selected disabled value="">Clique para escolher...</option>
    <option value="Amarelo">Amarelo</option>
    <option value="Branco">Branco</option>
    <option value="Indígena">Indígena</option>
    <option value="Pardo">Pardo</option>
    <option value="Preto">Preto</option>
    <option value="Prefiro não dizer">Prefiro não dizer</option>
  </select>
</div>
<div class="col-md-4">
  <label for="validationCustomEstadoCivil" class="form-label">Estado civil <b>*</b></label>
  <select class="form-select" id="validationCustomEstadoCivil" name="estado_civil" required>
    <option selected disabled value="">Clique para escolher...</option>
    <option value="Casado">Casado</option>
    <option value="Solteiro">Solteiro</option>
    <option value="Separado">Separado</option>
    <option value="Divorciado">Divorciado</option>
    <option value="Viúvo">Viúvo</option>
  </select>
</div>

<div class="col-md-6">
  <label class="form-check-label" for="validationFormDesempregado">
    Desempregado/Aposentado por causa da diabetes? <b>*</b>
  </label>
  <div class="row align-content">
    <div class="form-check col-md-5">
      <input type="radio" class="form-check-input" id="validationFormDesempregado" name="plano_saude" value="true" required>
      <label class="form-check-label" for="validationFormPlanoSaude">Sim</label>
    </div>
    <div class="form-check col-md-5">
      <input type="radio" class="form-check-input" id="validationFormDesempregado" name="plano_saude" value="false" required>
      <label class="form-check-label" for="validationFormPlanoSaude">Não</label>
    </div>
  </div>
</div>

<div class="col-md-3">
  <label for="validationCustomProfissao" class="form-label">Profissão <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustomProfissao" value="{{isset($dados->profissao) ? $dados->profissao : ''}}" name="profissao" maxlength="50" required>
  <div class="invalid-feedback">
    Insira a profissão do paciente 
  </div>
</div>
<div class="col-md-3">
  <label for="validationCustomEscolaridade" class="form-label">Escolaridade <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustomEscolaridade" value="{{isset($dados->escolaridade) ? $dados->escolaridade : ''}}" name="escolaridade"  maxlength="30" required>
  <div class="invalid-feedback">
    Insira a escolaridade do paciente 
  </div>
</div>
<div class="col-md-4">
  <label for="validationCustomRendaMensal" class="form-label">Renda mensal <b>*</b></label>
  <div class="input-group has-validation">
  <span class="input-group-text" id="inputGroupPrepend">$</span>
  <input type="number" class="form-control text-center" id="validationCustomRendaMensal" aria-describedby="inputGroupPrepend" value="{{isset($dados->renda_mensal) ? $dados->renda_mensal : ''}}" name="renda_mensal" step="any" maxlength="10" required>
  <div class="invalid-feedback">
      Inira uma renda mensal válida para o paciente
  </div>
  </div>
</div>
<div class="col-md-3">
  <label for="validationCustomDependentesdaRenda" class="form-label">Dependentes da renda <b>*</b></label>
  <input type="number" class="form-control text-center" id="validationCustomDependentesdaRenda" value="{{isset($dados->dependentes_renda) ? $dados->dependentes_renda : ''}}" name="dependentes_renda" maxlength="3" required>
  <div class="invalid-feedback">
      Insira uma quantia válida de dependentes
  </div>
</div>
<div class="col-md-4">
  <label for="validationCustomTransporte" class="form-label">Transporte <b>*</b></label>
  <select class="form-select" id="validationCustomTransporte" name="transporte" required>
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
<div class="col-md-3">
  <label class="form-check-label" for="invalidCheck">
    Possui plano de saúde? <b>*</b>
  </label>
  <div class="row align-content">
    <div class="form-check col-md-5">
      <input type="radio" class="form-check-input" id="validationFormPlanoSaude" name="plano_saude" value="true" required>
      <label class="form-check-label" for="validationFormPlanoSaude">Sim</label>
    </div>
    <div class="form-check col-md-5">
      <input type="radio" class="form-check-input" id="validationFormPlanoSaude" name="plano_saude" value="false" required>
      <label class="form-check-label" for="validationFormPlanoSaude">Não</label>
    </div>
  </div>
</div>
<div class="col-md-3">
  <label for="validationCustomTelefone" class="form-label">Telefone <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustomTelefone" value="{{isset($dados->telefone) ? $dados->telefone : ''}}" name="telefone" onkeyup="escreve_tel(event)" maxlength="13" required>
  <div class="invalid-feedback">
      Insira um telefone válido
  </div>
</div>
<!-- Segundo telefone -->
<div class="col-md-3">
  <label for="validationCustomSegundoTelefone" class="form-label">Segundo telefone <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustomSegundoTelefone" value="{{isset($dados->segundo_telefone) ? $dados->segundo_telefone : ''}}" name="segundo_telefone" onkeyup="escreve_tel(event)" maxlength="13" required>
  <div class="invalid-feedback">
      Insira um 2º telefone válido
  </div>
</div>

<!-- Dono do segundo telefone -->
<div class="col-md-3">
  <label for="validationCustomDonoSegundoTelefone" class="form-label">Dono do 2º telefone <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustomDonoSegundoTelefone" value="{{isset($dados->nome) ? $dados->nome : ''}}" name="nome" maxlength="50" required>
  <div class="invalid-feedback">
      Insira o dono do 2º telefone
  </div>
</div>

<!-- CEP -->
<div class="col-md-4">
  <label for="validationCustomCEP" class="form-label">CEP <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustomCEP" value="{{isset($dados->CEP) ? $dados->CEP : ''}}" name="CEP" maxlength="9" required>
  <div class="invalid-feedback">
      Insira um CEP válido
  </div>
</div>

<!-- Número -->
<div class="col-md-2">
  <label for="validationCustomNumero" class="form-label">Número <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustomNumero" value="{{isset($dados->numero_moradia) ? $dados->numero_moradia : ''}}" name="numero_moradia" maxlength="8" required>
  <div class="invalid-feedback">
      Insira um número válido
  </div>
</div>

<!-- Rua -->
<div class="col-md-3">
  <label for="validationCustomRua" class="form-label">Rua <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustomRua" value="{{isset($dados->rua) ? $dados->rua : ''}}" name="rua" maxlength="50" required>
  <div class="invalid-feedback">
      Insira uma rua válida
  </div>
</div>

<!-- Bairro -->
<div class="col-md-3">
  <label for="validationCustomBairro" class="form-label">Bairro <b>*</b></label>
  <input type="text" class="form-control text-center" id="validationCustomBairro" value="{{isset($dados->bairro) ? $dados->bairro : ''}}" name="bairro" maxlength="50" required>
  <div class="invalid-feedback">
      Insira um bairro válido
  </div>
</div>

<!-- Complemento -->
<div class="col-md-4">
  <label for="validationCustomComplemento" class="form-label">Complemento</label>
  <input type="text" class="form-control text-center" id="validationCustomComplemento" value="{{isset($dados->complemento) ? $dados->complemento : ''}}" maxlength="50" name="complemento">
  <div class="invalid-feedback">
      Insira um complemento válido
  </div>
</div>

<!-- Estado -->
<div class="col-md-4">
  <label for="validationCustomEstado" class="form-label">Estado <b>*</b></label>
  <select class="form-select" id="validationCustomEstado" name="estado" onchange="buscaCidades(this.value)" required>
    <option value="">Clique para escolher...</option>
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
  </select>
  <div class="invalid-feedback">
      Insira um estado válido
  </div>
</div>

<!-- Cidade -->
<div class="col-md-4">
  <label for="validationCustomCidade" class="form-label">Cidade <b>*</b></label>
  <select class="form-select" id="validationCustomCidade" name="cidade" required>
    <option selected disabled value="">Clique para escolher...</option>
  </select>
  <div class="invalid-feedback">
    Insira uma cidade válida
  </div>
</div>

<!-- Estado -->
<div class="col-md-4">
  <label for="validationCustomEstadoNascimento" class="form-label">Estado de Nascimento<b>*</b></label>
  <select class="form-select" id="validationCustomEstadoNascimento" name="estado_nascimento" onchange="buscaCidadesNascimento(this.value)" required>
    <option value="">Clique para escolher...</option>
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
  </select>
  <div class="invalid-feedback">
      Insira um estado válido
  </div>
</div>

<!-- Cidade -->
<div class="col-md-4">
  <label for="validationCustomCidadeNascimento" class="form-label">Cidade de Nascimento<b>*</b></label>
  <select class="form-select" id="validationCustomCidadeNascimento" name="cidade_nascimento" required>
    <option selected disabled value="">Clique para escolher...</option>
  </select>
  <div class="invalid-feedback">
    Insira uma cidade válida
  </div>
</div>


{{-- <option selected disabled value="">Choose...</option> --}}
{{-- onkeyup="escreve_tel(event)" required --}}