<!-- cardiovascular_dados -->
<div class="col-md-12">
    <label for="validationCustomLetra" class="form-label">Quanto à saúde cardíaca do paciente? <b>*</b></label>
    <div class="row align-content">
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="doenca_coronariana" name="saude_cardiaca[]" value="Doença coronariana" {{ isset($dados->saude_cardiaca) && in_array('Doença coronariana', json_decode($dados->saude_cardiaca)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="doenca_coronariana">Doença coronariana</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="angina" name="saude_cardiaca[]" value="Angina" {{ isset($dados->saude_cardiaca) && in_array('Angina', json_decode($dados->saude_cardiaca)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="angina">Angina</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="infarto_previo" name="saude_cardiaca[]" value="Infarto prévio" {{ isset($dados->saude_cardiaca) && in_array('Infarto prévio', json_decode($dados->saude_cardiaca)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="infarto_previo">Infarto prévio</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="revascularizado" name="saude_cardiaca[]" value="Revascularizado" {{ isset($dados->saude_cardiaca) && in_array('Revascularizado', json_decode($dados->saude_cardiaca)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="revascularizado">Revascularizado</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="angioplastia" name="saude_cardiaca[]" value="Angioplastia" {{ isset($dados->saude_cardiaca) && in_array('Angioplastia', json_decode($dados->saude_cardiaca)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="angioplastia">Angioplastia</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="arritmia_cardiaca" name="saude_cardiaca[]" value="Arritmia cardíaca" {{ isset($dados->saude_cardiaca) && in_array('Arritmia cardíaca', json_decode($dados->saude_cardiaca)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="arritmia_cardiaca">Arritmia cardíaca</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="doenca_vascular_periferica" name="saude_cardiaca[]" value="Doença vascular periférica (MMII, carótidas)" {{ isset($dados->saude_cardiaca) && in_array('Doença vascular periférica (MMII, carótidas)', json_decode($dados->saude_cardiaca)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="doenca_vascular_periferica">Doença vascular periférica (MMII, carótidas)</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="insuficiencia_cardiaca" name="saude_cardiaca[]" value="Insuficiência cardíaca" {{ isset($dados->saude_cardiaca) && in_array('Insuficiência cardíaca', json_decode($dados->saude_cardiaca)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="insuficiencia_cardiaca">Insuficiência cardíaca</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="outros_condicoes" name="saude_cardiaca[]" value="Outros" {{ isset($dados->saude_cardiaca) && in_array('Outros', json_decode($dados->saude_cardiaca)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="outros_condicoes">Outros…</label>
        </div>
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>
    </div>
</div>

<div class="col-md-12">
    <label for="tipo_pergunta" class="form-label">Quanto às características referentes à dor no peito: <b>*</b></label>
    <div class="row align-content">
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="nao_sente_dor" name="dor_peito[]" value="Não sente dor no peito" {{ isset($dados->dor_peito) && in_array('Não sente dor no peito', json_decode($dados->dor_peito)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="nao_sente_dor">Não sente dor no peito</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="piora_com_esforco" name="dor_peito[]" value="Piora com esforço" {{ isset($dados->dor_peito) && in_array('Piora com esforço', json_decode($dados->dor_peito)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="piora_com_esforco">Piora com esforço</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="piora_com_respiracao" name="dor_peito[]" value="Piora com a respiração" {{ isset($dados->dor_peito) && in_array('Piora com a respiração', json_decode($dados->dor_peito)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="piora_com_respiracao">Piora com a respiração</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="piora_quando_aperta" name="dor_peito[]" value="Piora quando aperta" {{ isset($dados->dor_peito) && in_array('Piora quando aperta', json_decode($dados->dor_peito)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="piora_quando_aperta">Piora quando aperta</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="melhora_com_repouso" name="dor_peito[]" value="Melhora com repouso" {{ isset($dados->dor_peito) && in_array('Melhora com repouso', json_decode($dados->dor_peito)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="melhora_com_repouso">Melhora com repouso</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="dura_segundos" name="dor_peito[]" value="Dura segundos" {{ isset($dados->dor_peito) && in_array('Dura segundos', json_decode($dados->dor_peito)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="dura_segundos">Dura segundos</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="dura_minutos" name="dor_peito[]" value="Dura minutos" {{ isset($dados->dor_peito) && in_array('Dura minutos', json_decode($dados->dor_peito)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="dura_minutos">Dura minutos</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="dura_horas" name="dor_peito[]" value="Dura horas" {{ isset($dados->dor_peito) && in_array('Dura horas', json_decode($dados->dor_peito)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="dura_horas">Dura horas</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="outros_tipo_pergunta" name="dor_peito[]" value="Outros" {{ isset($dados->dor_peito) && in_array('Outros', json_decode($dados->dor_peito)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="outros_tipo_pergunta">Outros…</label>
        </div>
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>
    </div>
</div>

<div class="col-md-12">
    <label for="exames_doenca_coronariana" class="form-label">Quanto à investigação de doença coronariana, quais exames já realizou? <b>*</b></label>
    <div class="row align-content">
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="ecg_repouso" name="exames_doenca_coronariana[]" value="ECG de repouso" {{ isset($dados->exames_doenca_coronariana) && in_array('ECG de repouso', json_decode($dados->exames_doenca_coronariana)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="ecg_repouso">ECG de repouso</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="teste_ergometrico" name="exames_doenca_coronariana[]" value="Teste ergométrico" {{ isset($dados->exames_doenca_coronariana) && in_array('Teste ergométrico', json_decode($dados->exames_doenca_coronariana)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="teste_ergometrico">Teste ergométrico</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="eco_estresse" name="exames_doenca_coronariana[]" value="ECO de estresse" {{ isset($dados->exames_doenca_coronariana) && in_array('ECO de estresse', json_decode($dados->exames_doenca_coronariana)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="eco_estresse">ECO de estresse</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="cintilografia" name="exames_doenca_coronariana[]" value="Cintilografia" {{ isset($dados->exames_doenca_coronariana) && in_array('Cintilografia', json_decode($dados->exames_doenca_coronariana)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="cintilografia">Cintilografia</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="escore_calcio" name="exames_doenca_coronariana[]" value="Escore de cálcio" {{ isset($dados->exames_doenca_coronariana) && in_array('Escore de cálcio', json_decode($dados->exames_doenca_coronariana)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="escore_calcio">Escore de cálcio</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="cineangiocoronografia" name="exames_doenca_coronariana[]" value="Cineangiocoronografia" {{ isset($dados->exames_doenca_coronariana) && in_array('Cineangiocoronografia', json_decode($dados->exames_doenca_coronariana)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="cineangiocoronografia">Cineangiocoronografia</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="nunca_fez" name="exames_doenca_coronariana[]" value="Nunca fez" {{ isset($dados->exames_doenca_coronariana) && in_array('Nunca fez', json_decode($dados->exames_doenca_coronariana)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="nunca_fez">Nunca fez</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="nao_lembra_sabe" name="exames_doenca_coronariana[]" value="Não lembra/não sabe" {{ isset($dados->exames_doenca_coronariana) && in_array('Não lembra/não sabe', json_decode($dados->exames_doenca_coronariana)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="nao_lembra_sabe">Não lembra/não sabe</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="outros_exames" name="exames_doenca_coronariana[]" value="Outros" {{ isset($dados->exames_doenca_coronariana) && in_array('Outros', json_decode($dados->exames_doenca_coronariana)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="outros_exames">Outros…</label>
        </div>
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>
    </div>
</div>


