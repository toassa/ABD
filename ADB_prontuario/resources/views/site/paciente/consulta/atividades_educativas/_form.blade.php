<!-- atividade_diabetes -->
<div class="row g-3 needs-validation page page1">
    <div class="col-md-4">
        <label for="validationCustomSelectDefine" class="form-label">O paciente teve quantas consultas de enfermagem no último ano? <b>*</b></label>
        <select class="form-select" id="validationCustomSelectDefine" onclick="mostraDados()" onchange="mostraDados()" onfocus="mostraDados()" name="quantia_consultas_enfermagem" required>
            <option selected disabled value="">Clique para escolher...</option>
            <option value="0" {{ isset($dados->quantia_consultas_enfermagem) && $dados->quantia_consultas_enfermagem == 0 ? 'selected' : '' }}>0 consultas</option>
            <option value="1" {{ isset($dados->quantia_consultas_enfermagem) && $dados->quantia_consultas_enfermagem == 1 ? 'selected' : '' }}>1 consulta</option>
            <option value="2" {{ isset($dados->quantia_consultas_enfermagem) && $dados->quantia_consultas_enfermagem == 2 ? 'selected' : '' }}>2 consultas</option>
            <option value="3" {{ isset($dados->quantia_consultas_enfermagem) && $dados->quantia_consultas_enfermagem == 3 ? 'selected' : '' }}>3 consultas</option>
            <option value="4" {{ isset($dados->quantia_consultas_enfermagem) && $dados->quantia_consultas_enfermagem == 4 ? 'selected' : '' }}>4 ou mais consultas</option>
        </select>
        <div class="invalid-feedback">
            Selecione o número de consultas
        </div>
    </div>


    <div class="col-md-8" id="input_show">
        <label for="validationCustomLetra" class="form-label">Qual foi a finalidade da consulta com enfermagem? <b>*</b></label>
        <div class="row align-content">
            <div class="col-md-6 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="validationFormCheck1" name="finalidade_consulta[]" value="ambas"
                {{ isset($dados->finalidade_consulta) && in_array('ambas', json_decode($dados->finalidade_consulta)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="validationFormCheck1">Receber fitas de glicosímetro ou insulina</label>
            </div>

            <div class="col-md-6 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="validationFormCheck2" name="finalidade_consulta[]" value="ambas"
                {{ isset($dados->finalidade_consulta) && in_array('ambas', json_decode($dados->finalidade_consulta)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="validationFormCheck2">Receber instrução/educação sobre diabetes</label>
            </div>

            <div class="col-md-6 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="validationFormCheck3" name="finalidade_consulta[]" value="ambas"
                {{ isset($dados->finalidade_consulta) && in_array('ambas', json_decode($dados->finalidade_consulta)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="validationFormCheck3">Ambas</label>
            </div>

            <div class="col-md-6 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="validationFormCheck4" name="finalidade_consulta[]" value="ambas"
                {{ isset($dados->finalidade_consulta) && in_array('ambas', json_decode($dados->finalidade_consulta)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="validationFormCheck4">Outros</label>
            </div>
            <div class="invalid-feedback">
                Insira a finalidade da consulta
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustomNum" class="form-label">O paciente participou de quantas reuniões de grupos de pacientes diabéticos no último ano? <b>*</b></label>
        <select class="form-select" id="validationCustomConheceValorUltimaHbA1c" name="reunioes_diabeticos" required>
            <option selected disabled value="">Clique para escolher...</option>
            <option value="0" {{ isset($dados->reunioes_diabeticos) && $dados->reunioes_diabeticos == 0 ? 'selected' : '' }}>0 reuniões</option>
            <option value="1" {{ isset($dados->reunioes_diabeticos) && $dados->reunioes_diabeticos == 1 ? 'selected' : '' }}>1 reuniões</option>
            <option value="2" {{ isset($dados->reunioes_diabeticos) && $dados->reunioes_diabeticos == 2 ? 'selected' : '' }}>2 reuniões</option>
            <option value="3" {{ isset($dados->reunioes_diabeticos) && $dados->reunioes_diabeticos == 3 ? 'selected' : '' }}>3 reuniões</option>
            <option value="4" {{ isset($dados->reunioes_diabeticos) && $dados->reunioes_diabeticos == 4 ? 'selected' : '' }}>4 ou mais reuniões</option>
        </select>
        <div class="invalid-feedback">
            Insira a quantidade de programas de reuniões para diabéticos
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustomNum" class="form-label">O paciente participou de quantos programas de educação para pacientes diabéticos no último ano? <b>*</b></label>
        <select class="form-select" id="validationCustomConheceValorUltimaHbA1c" name="programas_educacao_diabeticos" required>
            <option selected disabled value="">Clique para escolher...</option>
            <option value="0" {{ isset($dados->programas_educacao_diabeticos) && $dados->programas_educacao_diabeticos == 0 ? 'selected' : '' }}>0 programas</option>
            <option value="1" {{ isset($dados->programas_educacao_diabeticos) && $dados->programas_educacao_diabeticos == 1 ? 'selected' : '' }}>1 programa</option>
            <option value="2" {{ isset($dados->programas_educacao_diabeticos) && $dados->programas_educacao_diabeticos == 2 ? 'selected' : '' }}>2 programas</option>
            <option value="3" {{ isset($dados->programas_educacao_diabeticos) && $dados->programas_educacao_diabeticos == 3 ? 'selected' : '' }}>3 programas</option>
            <option value="4" {{ isset($dados->programas_educacao_diabeticos) && $dados->programas_educacao_diabeticos == 4 ? 'selected' : '' }}>4 ou mais programas</option>
        </select>
        <div class="invalid-feedback">
            Insira a quantidade de programas de educação para diabéticos
        </div>
    </div>
</div>

<div class="row g-3 needs-validation page page2">
    <div class="col-md-5">
        <label for="validationCustomhba1c" class="form-label">O paciente sabe o que significa HbA1c? <b>*</b></label>
        <select class="form-select" id="validationCustomhba1c" name="conhece_hba1c" required>
            <option selected disabled value="">Clique para escolher...</option>
            <option value="1" {{ isset($dados->conhece_hba1c) && $dados->conhece_hba1c == 1 ? 'selected' : '' }}>Sim</option>
            <option value="0" {{ isset($dados->conhece_hba1c) && $dados->conhece_hba1c == 0 ? 'selected' : '' }}>Não</option>
        </select>
        <div class="invalid-feedback">
            Selecione se paciente conhece HbA1c
        </div>
    </div>

    <div class="col-md-7">
        <label for="validationCustomSignificadoHbA1c" class="form-label">Marque a opção que o paciente acha que significa HbA1c? <b>*</b></label>
        <select class="form-select" id="validationCustomSignificadoHbA1c" name="significado_hba1c" required>
            <option selected disabled value="">Clique para escolher...</option>
            <option value="Controle do diabetes atual" {{ isset($dados->significado_hba1c) && $dados->significado_hba1c === 'Controle do diabetes atual' ? 'selected' : '' }}>Controle do diabetes atual</option>
            <option value="Controle do diabetes dos últimos 3 meses" {{ isset($dados->significado_hba1c) && $dados->significado_hba1c === 'Controle do diabetes dos últimos 3 meses' ? 'selected' : '' }}>Controle do diabetes dos últimos 3 meses</option>
            <option value="Controle do diabetes no último ano" {{ isset($dados->significado_hba1c) && $dados->significado_hba1c === 'Controle do diabetes no último ano' ? 'selected' : '' }}>Controle do diabetes no último ano</option>
        </select>
        <div class="invalid-feedback">
            Selecione o significado da HbA1c
        </div>
    </div>

    <div class="col-md-12">
        <label for="validationCustomSelectDefine2" class="form-label">O paciente sabe qual o valor ideal máximo de HbA1c para pacientes com diabetes? <b>*</b></label>
        <select class="form-select" id="validationCustomSelectDefine2" name="valor_maximo_hba1c" required>
            <option selected disabled value="">Clique para escolher...</option>
            <option value="1" {{ isset($dados->valor_maximo_hba1c) && $dados->valor_maximo_hba1c == 1 ? 'selected' : '' }}>1</option>
            <option value="2" {{ isset($dados->valor_maximo_hba1c) && $dados->valor_maximo_hba1c == 2 ? 'selected' : '' }}>2</option>
            <option value="3" {{ isset($dados->valor_maximo_hba1c) && $dados->valor_maximo_hba1c == 3 ? 'selected' : '' }}>3</option>
            <option value="4" {{ isset($dados->valor_maximo_hba1c) && $dados->valor_maximo_hba1c == 4 ? 'selected' : '' }}>4</option>
            <option value="5" {{ isset($dados->valor_maximo_hba1c) && $dados->valor_maximo_hba1c == 5 ? 'selected' : '' }}>5</option>
            <option value="6" {{ isset($dados->valor_maximo_hba1c) && $dados->valor_maximo_hba1c == 6 ? 'selected' : '' }}>6</option>
            <option value="7" {{ isset($dados->valor_maximo_hba1c) && $dados->valor_maximo_hba1c == 7 ? 'selected' : '' }}>7</option>
            <option value="8" {{ isset($dados->valor_maximo_hba1c) && $dados->valor_maximo_hba1c == 8 ? 'selected' : '' }}>8</option>
            <option value="9" {{ isset($dados->valor_maximo_hba1c) && $dados->valor_maximo_hba1c == 9 ? 'selected' : '' }}>9</option>
            <option value="10" {{ isset($dados->valor_maximo_hba1c) && $dados->valor_maximo_hba1c == 10 ? 'selected' : '' }}>10</option>
        </select>
        <div class="invalid-feedback">
            Insira o valor máximo da HbA1c estimado pelo paciente
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustomSelectDefine2" class="form-label">O paciente sabe qual o valor da sua última HbA1c? <b>*</b></label>
        <select class="form-select" id="validationCustomSelectDefine2" onclick="mostraDados2()" onchange="mostraDados2()" onfocus="mostraDados2()" name="conhece_valor_ultima_hba1c" required>
            <option selected disabled value="">Clique para escolher...</option>
            <option value="0" {{ isset($dados->conhece_valor_ultima_hba1c) && $dados->conhece_valor_ultima_hba1c == 0 ? 'selected' : '' }}>Não</option>
            <option value="1" {{ isset($dados->conhece_valor_ultima_hba1c) && $dados->conhece_valor_ultima_hba1c == 1 ? 'selected' : '' }}>Sim</option>
        </select>
        <div class="invalid-feedback">
            Selecione se conhece o valor da última HbA1c
        </div>
    </div>

    <div class="col-md-6" id="input_show2">
        <label for="validationCustomNum" class="form-label">Valor da última HbA1c do paciente <b>*</b></label>
        <input type="number" class="form-control" id="validationCustomNum" value="{{ isset($dados->valor_ultima_hba1c) ? $dados->valor_ultima_hba1c : '' }}" name="valor_ultima_hba1c" placeholder="Digite o valor da última HbA1c">
        <div class="invalid-feedback">
            Insira o valor da última HbA1c
        </div>
    </div>
</div>