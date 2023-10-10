<div class="col-md-4">
    <label for="validationCustomNumUSP" class="form-label textinho">Número USP <b>*</b></label>
    <input type="text" class="text-center form-control" id="validationCustomNumUSP" value="{{isset($rows->num_USP) ? $rows->num_USP : ''}}" maxlength="8" name="num_USP" placeholder="Digite o número USP" required>
    <div class="invalid-feedback">
        Número USP inválido
    </div>
</div>
<div class="col-md-4">
    <label for="validationCustomUsername" class="form-label textinho">Nome<b> *</b></label>
    <input type="text" class="text-center form-control" id="validationCustomUsername" value="{{isset($rows->name) ? $rows->name : ''}}" name="name" maxlength="200" placeholder="Digite o nome completo" required>
    <div class="invalid-feedback">
        Nome inválido
    </div>
</div>
<div class="col-md-4">
    <label for="validationCustomUserCPF" class="form-label textinho">CPF<b> *</b></label>
    <input type="text" class="text-center form-control" id="validationCustomUserCPF" value="{{isset($rows->CPF) ? $rows->CPF : ''}}" onInput="mascara(this)" name="CPF" maxlength="11" placeholder="Digite o CPF (ex: 000.000.000.00)" required>
    <div class="invalid-feedback">
        CPF inválido
    </div>
</div>


@if ($page != 'editar')
    <div class="col-md-4">
@else
    <div class="col-md-8">
@endif
    <label for="validationCustomUserMail" class="form-label textinho">E-mail<b> *</b></label>
    <div class="input-group has-validation">
    <span class="input-group-text" id="inputGroupPrepend">@</span>
    <input type="email" class="text-center form-control" id="validationCustomMail" aria-describedby="inputGroupPrepend" value="{{isset($rows->email) ? $rows->email : ''}}" name="email" placeholder="Digite o e-mail (ex: usuario@usp.br)" required>
    <div class="invalid-feedback">
        Email USP inválido
    </div>
    </div>
</div>

@if ($page != 'editar')
    <div class="col-md-4 password-container">
        <label for="validationCustomUserPass" id="labelValidationCustomUserPass" class="form-label textinho">Senha<b> *</b></label>
        <input type="password" class="text-center form-control" id="validationCustomPass" value="{{isset($rows->password) ? $rows->password : ''}}" name="password" placeholder="Digite a senha" required>
        <span class="material-symbols-outlined show-password" id="olhinho" onclick="togglePasswordVisibility()">
            visibility_off
        </span>
        <div class="invalid-feedback">
            Senha inválida
        </div>
    </div>
@endif

<div class="col-md-4">
    <label for="validationCustomUserMesa" class="form-label textinho">Mesa <b>*</b></label>
    <input type="number" class="form-control text-center" id="validationCustomUserMesa" maxlength="2" value="{{isset($rows->mesa) ? $rows->mesa : ''}}" name="mesa" maxlength="2" placeholder="Digite o número da mesa" required>
    <div class="invalid-feedback">
        Mesa inválida
    </div>
  </div>
<div class="col-md-3">
    <label for="validationCustomUserCargo" class="form-label textinho">Cargo<b> *</b></label>
    <select class="form-select" id="validationCustomUserCargo" name="cargo" required>
        <option disabled selected value="">Clique para escolher...</option>
        <option {{ isset($rows->cargo) && $rows->cargo === 'medico' ? 'selected' : '' }} value="medico">Médico</option>
        <option {{ isset($rows->cargo) && $rows->cargo === 'membro fixo' ? 'selected' : '' }} value="membro fixo">Membro fixo</option>
        <option {{ isset($rows->cargo) && $rows->cargo === 'coordenador' ? 'selected' : '' }} value="coordenador">Coordenador</option>
    </select>
    <div class="invalid-feedback">
        Cargo inválido
    </div>
</div>
<div class="col-md-4">
    <label for="validationCustomUserFuncao" class="form-label textinho">Função<b> *</b></label>
    <select class="form-select" id="validationCustomUserFuncao" name="funcao" required>
        <option disabled selected value="">Clique para escolher...</option>
        <option {{ isset($rows->cargo) && $rows->funcao === 'nutricao' ? 'selected' : '' }} value="nutricao">Nutrição</option>
        <option {{ isset($rows->cargo) && $rows->funcao === 'dentista' ? 'selected' : '' }} value="dentista">Dentista</option>
        <option {{ isset($rows->cargo) && $rows->funcao === 'educacao_fisica' ? 'selected' : '' }} value="educacao_fisica">Educação Física</option>
        <option {{ isset($rows->cargo) && $rows->funcao === 'fisiatria' ? 'selected' : '' }} value="fisiatria">Fisiatria</option>
        <option {{ isset($rows->cargo) && $rows->funcao === 'materiais_e_lixo' ? 'selected' : '' }} value="materiais_e_lixo">Materiais e lixo</option>
        <option {{ isset($rows->cargo) && $rows->funcao === 'consultas_novas' ? 'selected' : '' }} value="consultas_novas">Consultas novas</option>
        <option {{ isset($rows->cargo) && $rows->funcao === 'psicologia' ? 'selected' : '' }} value="psicologia">Psicologia</option>
        <option {{ isset($rows->cargo) && $rows->funcao === 'fundo_de_olho' ? 'selected' : '' }} value="fundo_de_olho">Fundo de olho</option>
        <option {{ isset($rows->cargo) && $rows->funcao === 'adesao' ? 'selected' : '' }} value="adesao">Adesão</option>
        <option {{ isset($rows->cargo) && $rows->funcao === 'escalas_e_presenca' ? 'selected' : '' }} value="escalas_e_presenca">Escalas e presença</option>
        <option {{ isset($rows->cargo) && $rows->funcao === 'aulas' ? 'selected' : '' }} value="aulas">Aulas</option>
        <option {{ isset($rows->cargo) && $rows->funcao === 'documentos' ? 'selected' : '' }} value="documentos">Documentos</option>
        <option {{ isset($rows->cargo) && $rows->funcao === 'qualidade_de_vida' ? 'selected' : '' }} value="qualidade_de_vida">Qualidade de vida</option>
        <option {{ isset($rows->cargo) && $rows->funcao === 'tesouraria' ? 'selected' : '' }} value="tesouraria">Tesouraria</option>
    </select>
    <div class="invalid-feedback">
        Função inválida
    </div>
</div>

<div class="col-md-4 align-content" style="padding-top: 3%">
    <div class="form-check">
    <input class="form-check-input" type="hidden" value="false" {{ isset($rows->administrador) && $rows->administrador == true ? 'checked' : '' }} name="administrador" id="invalidCheck">
    <input class="form-check-input" type="checkbox" value="true" {{ isset($rows->administrador) && $rows->administrador == true ? 'checked' : '' }} name="administrador" id="invalidCheck">
    <label class="form-check-label textinho" for="invalidCheck">
        Administrador?<b> *</b>
    </label>
    </div>
</div>

@if ($page == 'matheus')
    <div class="col-md-2" style="padding-top: 3%">
        <div class="form-check">
        <input class="form-check-input" type="hidden" value="false" {{ isset($rows->ativo) && $rows->ativo == true ? 'checked' : '' }} name="ativo" id="invalidCheck">
        <input class="form-check-input" type="checkbox" value="true" {{ isset($rows->ativo) && $rows->ativo == true ? 'checked' : '' }} name="ativo" id="invalidCheck">
        <label class="form-check-label textinho" for="invalidCheck">
            Ativo?<b>*</b>
        </label>
        </div>
    </div>
@endif