<!-- atividade_diabetes -->

<div class="col-md-4">
    <label for="validationCustomNum" class="form-label">Qnte. de Consultas de Enfermagem <b>*</b></label>
    <input type="number" class="form-control" id="validationCustomNum" value="{{ isset($rows->quantia_consultas_enfermagem) ? $rows->quantia_consultas_enfermagem : '' }}" name="quantia_consultas_enfermagem" placeholder="Digite a qnte. de consultas" required>
    <div class="invalid-feedback">
        Insira a quantidade de consultas de enfermagem
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Finalidade da Consulta <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->finalidade_consulta) ? $rows->finalidade_consulta : '' }}" name="finalidade_consulta" placeholder="Digite a finalidade da consulta" required>
    <div class="invalid-feedback">
        Insira a finalidade da consulta
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNum" class="form-label">Reuniões para Diabéticos <b>*</b></label>
    <input type="number" class="form-control" id="validationCustomNum" value="{{ isset($rows->reunioes_diabeticos) ? $rows->reunioes_diabeticos : '' }}" name="reunioes_diabeticos" placeholder="Digite a quantidade de reuniões para diabéticos" required>
    <div class="invalid-feedback">
        Insira a quantidade de reuniões para diabéticos
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNum" class="form-label">Programas de Educação <b>*</b></label>
    <input type="number" class="form-control" id="validationCustomNum" value="{{ isset($rows->programas_educacao_diabeticos) ? $rows->programas_educacao_diabeticos : '' }}" name="programas_educacao_diabeticos" placeholder="Digite a quantidade de programas de educação para diabéticos" required>
    <div class="invalid-feedback">
        Insira a quantidade de programas de educação para diabéticos
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomConheceHbA1c" class="form-label">Conhece HbA1c <b>*</b></label>
    <select class="form-select" id="validationCustomConheceHbA1c" name="conhece_hba1c" required>
        <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->conhece_hba1c) && $rows->conhece_hba1c == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->conhece_hba1c) && $rows->conhece_hba1c == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se conhece HbA1c
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSignificadoHbA1c" class="form-label">Significado da HbA1c <b>*</b></label>
    <select class="form-select" id="validationCustomSignificadoHbA1c" name="significado_hba1c" required>
        <option selected disabled value="">Clique para escolher...</option>
        <option value="Controle do diabetes atual" {{ isset($rows->significado_hba1c) && $rows->significado_hba1c === 'Controle do diabetes atual' ? 'selected' : '' }}>Controle do diabetes atual</option>
        <option value="Controle do diabetes dos últimos 3 meses" {{ isset($rows->significado_hba1c) && $rows->significado_hba1c === 'Controle do diabetes dos últimos 3 meses' ? 'selected' : '' }}>Controle do diabetes dos últimos 3 meses</option>
        <option value="Controle do diabetes no último ano" {{ isset($rows->significado_hba1c) && $rows->significado_hba1c === 'Controle do diabetes no último ano' ? 'selected' : '' }}>Controle do diabetes no último ano</option>
    </select>
    <div class="invalid-feedback">
        Selecione o significado da HbA1c
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNum" class="form-label">Valor Máximo da HbA1c <b>*</b></label>
    <input type="number" class="form-control" id="validationCustomNum" value="{{ isset($rows->valor_maximo_hba1c) ? $rows->valor_maximo_hba1c : '' }}" name="valor_maximo_hba1c" placeholder="Digite o valor máximo da HbA1c" required>
    <div class="invalid-feedback">
        Insira o valor máximo da HbA1c
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomConheceValorUltimaHbA1c" class="form-label">Conhece Valor da Última HbA1c <b>*</b></label>
    <select class="form-select" id="validationCustomConheceValorUltimaHbA1c" name="conhece_valor_ultima_hba1c" required>
        <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->conhece_valor_ultima_hba1c) && $rows->conhece_valor_ultima_hba1c == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->conhece_valor_ultima_hba1c) && $rows->conhece_valor_ultima_hba1c == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se conhece o valor da última HbA1c
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNum" class="form-label">Valor da Última HbA1c <b>*</b></label>
    <input type="number" class="form-control" id="validationCustomNum" value="{{ isset($rows->valor_ultima_hba1c) ? $rows->valor_ultima_hba1c : '' }}" name="valor_ultima_hba1c" placeholder="Digite o valor da última HbA1c" required>
    <div class="invalid-feedback">
        Insira o valor da última HbA1c
    </div>
</div>
