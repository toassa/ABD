<div class="row g-3 needs-validation page page1">
  <div class="col-md-3">
    <label for="validationCustomNumRegistro" class="form-label textinho">Número de registro <b>*</b></label>
    <input type="text" class="form-control text-center" pattern="[0-9]*" id="validationCustomNumRegistro" value="{{isset($dados->num_registro) ? $dados->num_registro : ''}}" name="num_registro" maxlength="12" required>
    <div class="invalid-feedback">
        Insira o número de registro
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustomNome" class="form-label textinho">Nome <b>*</b></label>
    <input type="text" class="form-control text-center" id="validationCustomNome" value="{{isset($dados->nome) ? $dados->nome : ''}}"  name="nome"  maxlength="200" required>
    <div class="invalid-feedback">
      Insira o nome completo do paciente
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustomData" class="form-label textinho">Data de nascimento <b>*</b></label>
    <input type="text" class="form-control text-center" id="validationCustomData" value="{{isset($dados->data_nascimento) ? $dados->data_nascimento : ''}}" name="data_nascimento" required>
    <div class="invalid-feedback">
        Data de nascimento inválida
    </div>
  </div>

  <div class="col-md-2">
    <label for="validationCustomIdade" class="form-label textinho">Idade <b>*</b></label>
    <input type="number" class="form-control text-center" id="validationCustomIdade" value="{{isset($dados->idade) ? $dados->idade : ''}}" name="idade" maxlength="2" required>
    <div class="invalid-feedback">
        Idade inválida
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustomSexo" class="form-label textinho">Sexo <b>*</b></label>
    <select class="form-select" id="validationCustomSexo" name="sexo" required>
      <option selected disabled value="">Clique para escolher...</option>
      <option {{ isset($dados->sexo) && $dados->sexo === 'Feminino' ? 'selected' : '' }} value="Feminino">Feminino</option>
      <option {{ isset($dados->sexo) && $dados->sexo === 'Masculino' ? 'selected' : '' }} value="Masculino">Masculino</option>
      <option {{ isset($dados->sexo) && $dados->sexo === 'Prefiro não dizer' ? 'selected' : '' }} value="Prefiro não dizer">Prefiro não dizer</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="validationCustomCor" class="form-label textinho">Cor <b>*</b></label>
    <select class="form-select" id="validationCustomCor" name="cor" required>
      <option selected disabled value="">Clique para escolher...</option>
      <option {{ isset($dados->cor) && $dados->cor === 'Amarelo' ? 'selected' : '' }} value="Amarelo">Amarelo</option>
      <option {{ isset($dados->cor) && $dados->cor === 'Branco' ? 'selected' : '' }} value="Branco">Branco</option>
      <option {{ isset($dados->cor) && $dados->cor === 'Indígena' ? 'selected' : '' }} value="Indígena">Indígena</option>
      <option {{ isset($dados->cor) && $dados->cor === 'Pardo' ? 'selected' : '' }} value="Pardo">Pardo</option>
      <option {{ isset($dados->cor) && $dados->cor === 'Preto' ? 'selected' : '' }} value="Preto">Preto</option>
      <option {{ isset($dados->cor) && $dados->cor === 'Prefiro não dizer' ? 'selected' : '' }} value="Prefiro não dizer">Prefiro não dizer</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="validationCustomEstadoCivil" class="form-label textinho">Estado civil <b>*</b></label>
    <select class="form-select" id="validationCustomEstadoCivil" name="estado_civil" required>
      <option selected disabled value="">Clique para escolher...</option>
      <option {{ isset($dados->estado_civil) && $dados->estado_civil === 'Casado' ? 'selected' : '' }} value="Casado">Casado</option>
      <option {{ isset($dados->estado_civil) && $dados->estado_civil === 'Solteiro' ? 'selected' : '' }} value="Solteiro">Solteiro</option>
      <option {{ isset($dados->estado_civil) && $dados->estado_civil === 'Separado' ? 'selected' : '' }} value="Separado">Separado</option>
      <option {{ isset($dados->estado_civil) && $dados->estado_civil === 'Divorciado' ? 'selected' : '' }} value="Divorciado">Divorciado</option>
      <option {{ isset($dados->estado_civil) && $dados->estado_civil === 'Viúvo' ? 'selected' : '' }} value="Viúvo">Viúvo</option>
    </select>
  </div>
</div>

<div class="row g-3 needs-validation page page2">

  <div class="col-md-4">
    <label for="validationFormDesempregado" class="form-label textinho">Desempregado/Aposentado pela diabetes? <b>*</b></label>
    <select class="form-select" id="validationFormDesempregado" name="desempregado_aposentado_diabetes" required>
        <option selected disabled value="">Clique para escolher...</option>
        <option {{ isset($dados->desempregado_aposentado_diabetes) && $dados->desempregado_aposentado_diabetes === 'true' ? 'selected' : '' }} value="true">Sim</option>
        <option {{ isset($dados->desempregado_aposentado_diabetes) && $dados->desempregado_aposentado_diabetes === 'false' ? 'selected' : '' }} value="false">Não</option>
    </select>
</div>


  <div class="col-md-4">
    <label for="validationCustomRendaMensal" class="form-label textinho">Renda mensal <b>*</b></label>
    <div class="input-group has-validation">
    <span class="input-group-text" id="inputGroupPrepend">$</span>
    <input type="text" class="form-control text-center" id="validationCustomRendaMensal" aria-describedby="inputGroupPrepend" value="{{isset($dados->renda_mensal) ? $dados->renda_mensal : ''}}" name="renda_mensal" step="any" maxlength="12" required>
    <div class="invalid-feedback">
        Insira uma renda mensal válida
    </div>
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustomDependentesdaRenda" class="form-label textinho">Dependentes da renda <b>*</b></label>
    <input type="number" class="form-control text-center" id="validationCustomDependentesdaRenda" value="{{isset($dados->dependentes_renda) ? $dados->dependentes_renda : ''}}" name="dependentes_renda" maxlength="3" required>
    <div class="invalid-feedback">
        Valor de dependentes inválida
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomProfissao" class="form-label textinho">Profissão <b>*</b></label>
    <input type="text" class="form-control text-center" id="validationCustomProfissao" value="{{isset($dados->profissao) ? $dados->profissao : ''}}" name="profissao" maxlength="50" required>
    <div class="invalid-feedback">
      Insira a profissão do paciente 
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomEscolaridade" class="form-label textinho">Escolaridade <b>*</b></label>
    <input type="text" class="form-control text-center" id="validationCustomEscolaridade" value="{{isset($dados->escolaridade) ? $dados->escolaridade : ''}}" name="escolaridade"  maxlength="30" required>
    <div class="invalid-feedback">
      Escolaridade inválida
    </div>
  </div>
  
  <div class="col-md-4">
    <label for="validationCustomTransporte" class="form-label textinho">Transporte <b>*</b></label>
    <select class="form-select" id="validationCustomTransporte" name="transporte" required>
      <option selected disabled value="">Clique para escolher...</option>
      <option {{ isset($dados->transporte) && $dados->transporte === 'Ônibus' ? 'selected' : '' }} value="Ônibus">Ônibus</option>
      <option {{ isset($dados->transporte) && $dados->transporte === 'Trem' ? 'selected' : '' }} value="Trem">Trem</option>
      <option {{ isset($dados->transporte) && $dados->transporte === 'Metrô' ? 'selected' : '' }} value="Metrô">Metrô</option>
      <option {{ isset($dados->transporte) && $dados->transporte === 'Van' ? 'selected' : '' }} value="Van">Van</option>
      <option {{ isset($dados->transporte) && $dados->transporte === 'Carro' ? 'selected' : '' }} value="Carro">Carro</option>
      <option {{ isset($dados->transporte) && $dados->transporte === 'Taxi' ? 'selected' : '' }} value="Taxi">Taxi</option>
      <option {{ isset($dados->transporte) && $dados->transporte === 'Uber' ? 'selected' : '' }} value="Uber">Uber</option>
      <option {{ isset($dados->transporte) && $dados->transporte === 'A pé' ? 'selected' : '' }} value="A pé">A pé</option>
      <option {{ isset($dados->transporte) && $dados->transporte === 'Outros' ? 'selected' : '' }} value="Outros">Outros</option>
    </select>
</div>



</div>

<div class="row g-3 needs-validation page page3">
  {{-- <div class="col-md-3">
    <label class="form-check-label textinho" for="invalidCheck">
      Possui plano de saúde? <b>*</b>
    </label>
    <div class="row align-content">
      <div class="form-check col-md-5">
        <input type="radio" class="form-check-input" id="validationFormPlanoSaude" name="plano_saude" value="true" {{ isset($dados->plano_saude) && $dados->plano_saude === 'true' ? 'checked' : '' }} >
        <label class="form-check-label" for="validationFormPlanoSaude">Sim</label>
      </div>
      <div class="form-check col-md-5">
        <input type="radio" class="form-check-input" id="validationFormPlanoSaude" name="plano_saude" value="false" {{ isset($dados->plano_saude) && $dados->plano_saude === 'false' ? 'checked' : '' }} >
        <label class="form-check-label" for="validationFormPlanoSaude">Não</label>
      </div>
    </div>
  </div> --}}
  
  <div class="col-md-3">
    <label for="validationFormPlanoSaude" class="form-label textinho">Possui plano de saúde? <b>*</b></label>
    <select class="form-select" id="validationFormPlanoSaude" name="plano_saude" required>
      <option selected disabled value="">Clique para escolher...</option>
      <option {{ isset($dados->plano_saude) && $dados->plano_saude === 'true' ? 'selected' : '' }} value="true">Sim</option>
      <option {{ isset($dados->plano_saude) && $dados->plano_saude === 'false' ? 'selected' : '' }} value="false">Não</option>
    </select>
  </div>

  <div class="col-md-3">
    <label for="validationCustomTelefone" class="form-label textinho">Telefone <b>*</b></label>
    <input type="text" class="form-control text-center" id="validationCustomTelefone" value="{{isset($dados->telefone) ? $dados->telefone : ''}}" name="telefone" onkeyup="escreve_tel(event)" maxlength="15" required>
    <div class="invalid-feedback">
        Insira um telefone válido
    </div>
  </div>
  <!-- Segundo telefone -->
  <div class="col-md-3">
    <label for="validationCustomSegundoTelefone" class="form-label textinho">Segundo telefone <b>*</b></label>
    <input type="text" class="form-control text-center" id="validationCustomSegundoTelefone" value="{{isset($dados->segundo_telefone) ? $dados->segundo_telefone : ''}}" name="segundo_telefone" onkeyup="escreve_tel(event)" maxlength="15" required>
    <div class="invalid-feedback">
        Insira um 2º telefone válido
    </div>
  </div>

  <!-- Dono do segundo telefone -->
  <div class="col-md-3">
    <label for="validationCustomDonoSegundoTelefone" class="form-label textinho">Dono do 2º telefone <b>*</b></label>
    <input type="text" class="form-control text-center" id="validationCustomDonoSegundoTelefone" onkeyup="escreve_tel(event)" value="{{isset($dados->nome) ? $dados->nome : ''}}" name="pertence_segundo_telefone" maxlength="50" required>
    <div class="invalid-feedback">
        Insira o dono do 2º telefone
    </div>
  </div>

  <!-- Estado -->
  <div class="col-md-5">
    <label for="validationCustomEstadoNascimento" class="form-label textinho">Estado de Nascimento<b>*</b></label>
    <select class="form-select" id="validationCustomEstadoNascimento" name="estado_nascimento" onchange="buscaCidadesNascimento(this.value)" required>
      <option value="">Clique para escolher...</option>
      <option {{ isset($dados->estado) && $dados->estado === 'AC' ? 'selected' : '' }} value="AC">Acre</option>
      <option {{ isset($dados->estado) && $dados->estado === 'AL' ? 'selected' : '' }} value="AL">Alagoas</option>
      <option {{ isset($dados->estado) && $dados->estado === 'AP' ? 'selected' : '' }} value="AP">Amapá</option>
      <option {{ isset($dados->estado) && $dados->estado === 'AM' ? 'selected' : '' }} value="AM">Amazonas</option>
      <option {{ isset($dados->estado) && $dados->estado === 'BA' ? 'selected' : '' }} value="BA">Bahia</option>
      <option {{ isset($dados->estado) && $dados->estado === 'CE' ? 'selected' : '' }} value="CE">Ceará</option>
      <option {{ isset($dados->estado) && $dados->estado === 'DF' ? 'selected' : '' }} value="DF">Distrito Federal</option>
      <option {{ isset($dados->estado) && $dados->estado === 'ES' ? 'selected' : '' }} value="ES">Espírito Santo</option>
      <option {{ isset($dados->estado) && $dados->estado === 'GO' ? 'selected' : '' }} value="GO">Goiás</option>
      <option {{ isset($dados->estado) && $dados->estado === 'MA' ? 'selected' : '' }} value="MA">Maranhão</option>
      <option {{ isset($dados->estado) && $dados->estado === 'MT' ? 'selected' : '' }} value="MT">Mato Grosso</option>
      <option {{ isset($dados->estado) && $dados->estado === 'MS' ? 'selected' : '' }} value="MS">Mato Grosso do Sul</option>
      <option {{ isset($dados->estado) && $dados->estado === 'MG' ? 'selected' : '' }} value="MG">Minas Gerais</option>
      <option {{ isset($dados->estado) && $dados->estado === 'PA' ? 'selected' : '' }} value="PA">Pará</option>
      <option {{ isset($dados->estado) && $dados->estado === 'PB' ? 'selected' : '' }} value="PB">Paraíba</option>
      <option {{ isset($dados->estado) && $dados->estado === 'PR' ? 'selected' : '' }} value="PR">Paraná</option>
      <option {{ isset($dados->estado) && $dados->estado === 'PE' ? 'selected' : '' }} value="PE">Pernambuco</option>
      <option {{ isset($dados->estado) && $dados->estado === 'PI' ? 'selected' : '' }} value="PI">Piauí</option>
      <option {{ isset($dados->estado) && $dados->estado === 'RJ' ? 'selected' : '' }} value="RJ">Rio de Janeiro</option>
      <option {{ isset($dados->estado) && $dados->estado === 'RN' ? 'selected' : '' }} value="RN">Rio Grande do Norte</option>
      <option {{ isset($dados->estado) && $dados->estado === 'RS' ? 'selected' : '' }} value="RS">Rio Grande do Sul</option>
      <option {{ isset($dados->estado) && $dados->estado === 'RO' ? 'selected' : '' }} value="RO">Rondônia</option>
      <option {{ isset($dados->estado) && $dados->estado === 'RR' ? 'selected' : '' }} value="RR">Roraima</option>
      <option {{ isset($dados->estado) && $dados->estado === 'SC' ? 'selected' : '' }} value="SC">Santa Catarina</option>
      <option {{ isset($dados->estado) && $dados->estado === 'SP' ? 'selected' : '' }} value="SP">São Paulo</option>
      <option {{ isset($dados->estado) && $dados->estado === 'SE' ? 'selected' : '' }} value="SE">Sergipe</option>
      <option {{ isset($dados->estado) && $dados->estado === 'TO' ? 'selected' : '' }} value="TO">Tocantins</option>
    </select>
    <div class="invalid-feedback">
        Insira um estado válido
    </div>
  </div>

  <!-- Cidade -->
  <div class="col-md-7 align-content">
    <div class="col-md-6">
      <label for="validationCustomCidadeNascimento" class="form-label textinho">Cidade de Nascimento<b>*</b></label>
      <select class="form-select" id="validationCustomCidadeNascimento" name="cidade_nascimento" required>
        <option selected disabled value="">Clique para escolher...</option>
      </select>
      <div class="invalid-feedback">
        Insira uma cidade válida
      </div>
    </div>

    <div class="col-md-6" style="padding: 2% 15%">
      <div class="form-check">
      <input class="form-check-input" type="hidden" value="false" {{ isset($dados->ativo) && $dados->ativo == true ? 'checked' : '' }} name="ativo" id="invalidCheck">
      <input class="form-check-input" type="checkbox" value="true" {{ isset($dados->ativo) && $dados->ativo == true ? 'checked' : '' }} name="ativo" id="invalidCheck">
      <label class="form-check-label textinho" for="invalidCheck">
          Ativo?<b>*</b>
      </label>
      </div>
    </div>
  </div>

</div>

<div class="row g-3 needs-validation page page4">
  <!-- CEP -->
  <div class="col-md-4">
    <label for="validationCustomCEP" class="form-label textinho">CEP <b>*</b></label>
    <input type="text" class="form-control text-center" id="validationCustomCEP" value="{{isset($dados->CEP) ? $dados->CEP : ''}}" name="CEP" maxlength="9" required>
    <div class="invalid-feedback">
        Insira um CEP válido
    </div>
  </div>

  <!-- Número -->
  <div class="col-md-2">
    <label for="validationCustomNumero" class="form-label textinho">Número <b>*</b></label>
    <input type="text" class="form-control text-center" id="validationCustomNumero" value="{{isset($dados->numero_moradia) ? $dados->numero_moradia : ''}}" name="numero_moradia" maxlength="8" required>
    <div class="invalid-feedback">
        Insira um número válido
    </div>
  </div>

  <!-- Rua -->
  <div class="col-md-3">
    <label for="validationCustomRua" class="form-label textinho">Rua <b>*</b></label>
    <input type="text" class="form-control text-center" id="validationCustomRua" value="{{isset($dados->rua) ? $dados->rua : ''}}" name="rua" maxlength="50" required>
    <div class="invalid-feedback">
        Insira uma rua válida
    </div>
  </div>

  <!-- Bairro -->
  <div class="col-md-3">
    <label for="validationCustomBairro" class="form-label textinho">Bairro <b>*</b></label>
    <input type="text" class="form-control text-center" id="validationCustomBairro" value="{{isset($dados->bairro) ? $dados->bairro : ''}}" name="bairro" maxlength="50" required>
    <div class="invalid-feedback">
        Insira um bairro válido
    </div>
  </div>

  <!-- Complemento -->
  <div class="col-md-4">
    <label for="validationCustomComplemento" class="form-label textinho">Complemento</label>
    <input type="text" class="form-control text-center" id="validationCustomComplemento" value="{{isset($dados->complemento) ? $dados->complemento : ''}}" maxlength="50" name="complemento">
    <div class="invalid-feedback">
        Insira um complemento válido
    </div>
  </div>

  <!-- Estado -->
  <div class="col-md-4">
    <label for="validationCustomEstado" class="form-label textinho">Estado <b>*</b></label>
    <select class="form-select" id="validationCustomEstado" name="estado" onchange="buscaCidades(this.value)" required>
      <option value="">Clique para escolher...</option>
      <option {{ isset($dados->estado) && $dados->estado === 'AC' ? 'selected' : '' }} value="AC">Acre</option>
      <option {{ isset($dados->estado) && $dados->estado === 'AL' ? 'selected' : '' }} value="AL">Alagoas</option>
      <option {{ isset($dados->estado) && $dados->estado === 'AP' ? 'selected' : '' }} value="AP">Amapá</option>
      <option {{ isset($dados->estado) && $dados->estado === 'AM' ? 'selected' : '' }} value="AM">Amazonas</option>
      <option {{ isset($dados->estado) && $dados->estado === 'BA' ? 'selected' : '' }} value="BA">Bahia</option>
      <option {{ isset($dados->estado) && $dados->estado === 'CE' ? 'selected' : '' }} value="CE">Ceará</option>
      <option {{ isset($dados->estado) && $dados->estado === 'DF' ? 'selected' : '' }} value="DF">Distrito Federal</option>
      <option {{ isset($dados->estado) && $dados->estado === 'ES' ? 'selected' : '' }} value="ES">Espírito Santo</option>
      <option {{ isset($dados->estado) && $dados->estado === 'GO' ? 'selected' : '' }} value="GO">Goiás</option>
      <option {{ isset($dados->estado) && $dados->estado === 'MA' ? 'selected' : '' }} value="MA">Maranhão</option>
      <option {{ isset($dados->estado) && $dados->estado === 'MT' ? 'selected' : '' }} value="MT">Mato Grosso</option>
      <option {{ isset($dados->estado) && $dados->estado === 'MS' ? 'selected' : '' }} value="MS">Mato Grosso do Sul</option>
      <option {{ isset($dados->estado) && $dados->estado === 'MG' ? 'selected' : '' }} value="MG">Minas Gerais</option>
      <option {{ isset($dados->estado) && $dados->estado === 'PA' ? 'selected' : '' }} value="PA">Pará</option>
      <option {{ isset($dados->estado) && $dados->estado === 'PB' ? 'selected' : '' }} value="PB">Paraíba</option>
      <option {{ isset($dados->estado) && $dados->estado === 'PR' ? 'selected' : '' }} value="PR">Paraná</option>
      <option {{ isset($dados->estado) && $dados->estado === 'PE' ? 'selected' : '' }} value="PE">Pernambuco</option>
      <option {{ isset($dados->estado) && $dados->estado === 'PI' ? 'selected' : '' }} value="PI">Piauí</option>
      <option {{ isset($dados->estado) && $dados->estado === 'RJ' ? 'selected' : '' }} value="RJ">Rio de Janeiro</option>
      <option {{ isset($dados->estado) && $dados->estado === 'RN' ? 'selected' : '' }} value="RN">Rio Grande do Norte</option>
      <option {{ isset($dados->estado) && $dados->estado === 'RS' ? 'selected' : '' }} value="RS">Rio Grande do Sul</option>
      <option {{ isset($dados->estado) && $dados->estado === 'RO' ? 'selected' : '' }} value="RO">Rondônia</option>
      <option {{ isset($dados->estado) && $dados->estado === 'RR' ? 'selected' : '' }} value="RR">Roraima</option>
      <option {{ isset($dados->estado) && $dados->estado === 'SC' ? 'selected' : '' }} value="SC">Santa Catarina</option>
      <option {{ isset($dados->estado) && $dados->estado === 'SP' ? 'selected' : '' }} value="SP">São Paulo</option>
      <option {{ isset($dados->estado) && $dados->estado === 'SE' ? 'selected' : '' }} value="SE">Sergipe</option>
      <option {{ isset($dados->estado) && $dados->estado === 'TO' ? 'selected' : '' }} value="TO">Tocantins</option>
    </select>
    <div class="invalid-feedback">
        Insira um estado válido
    </div>
  </div>

  <!-- Cidade -->
  <div class="col-md-4">
    <label for="validationCustomCidade" class="form-label textinho">Cidade <b>*</b></label>
    <select class="form-select" id="validationCustomCidade" name="cidade" required>
      <option selected disabled value="">Clique para escolher...</option>
    </select>
    <div class="invalid-feedback">
      Insira uma cidade válida
    </div>
  </div>

</div>



{{-- <option selected disabled value="">Choose...</option> --}}
{{-- onkeyup="escreve_tel(event)" required --}}