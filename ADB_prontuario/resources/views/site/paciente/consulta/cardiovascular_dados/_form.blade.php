<!-- cardiovascular_dados -->
<div class="col-md-12">
    <label for="validationCustomLetra" class="form-label">Quanto à saúde cardíaca do paciente? <b>*</b></label>
    <div class="row align-content">
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="doenca_coronariana" name="condicoes_medicas[]" value="Doença coronariana">
            <label class="form-check-label label_check" for="doenca_coronariana">Doença coronariana</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="angina" name="condicoes_medicas[]" value="Angina">
            <label class="form-check-label label_check" for="angina">Angina</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="infarto_previo" name="condicoes_medicas[]" value="Infarto prévio">
            <label class="form-check-label label_check" for="infarto_previo">Infarto prévio</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="revascularizado" name="condicoes_medicas[]" value="Revascularizado">
            <label class="form-check-label label_check" for="revascularizado">Revascularizado</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="angioplastia" name="condicoes_medicas[]" value="Angioplastia">
            <label class="form-check-label label_check" for="angioplastia">Angioplastia</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="arritmia_cardiaca" name="condicoes_medicas[]" value="Arritmia cardíaca">
            <label class="form-check-label label_check" for="arritmia_cardiaca">Arritmia cardíaca</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="doenca_vascular_periferica" name="condicoes_medicas[]" value="Doença vascular periférica (MMII, carótidas)">
            <label class="form-check-label label_check" for="doenca_vascular_periferica">Doença vascular periférica (MMII, carótidas)</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="insuficiencia_cardiaca" name="condicoes_medicas[]" value="Insuficiência cardíaca">
            <label class="form-check-label label_check" for="insuficiencia_cardiaca">Insuficiência cardíaca</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="outros_condicoes" name="condicoes_medicas[]" value="Outros">
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
            <input class="form-check-input" type="checkbox" id="nao_sente_dor" name="tipo_pergunta[]" value="Não sente dor no peito">
            <label class="form-check-label label_check" for="nao_sente_dor">Não sente dor no peito</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="piora_com_esforco" name="tipo_pergunta[]" value="Piora com esforço">
            <label class="form-check-label label_check" for="piora_com_esforco">Piora com esforço</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="piora_com_respiracao" name="tipo_pergunta[]" value="Piora com a respiração">
            <label class="form-check-label label_check" for="piora_com_respiracao">Piora com a respiração</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="piora_quando_aperta" name="tipo_pergunta[]" value="Piora quando aperta">
            <label class="form-check-label label_check" for="piora_quando_aperta">Piora quando aperta</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="melhora_com_repouso" name="tipo_pergunta[]" value="Melhora com repouso">
            <label class="form-check-label label_check" for="melhora_com_repouso">Melhora com repouso</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="dura_segundos" name="tipo_pergunta[]" value="Dura segundos">
            <label class="form-check-label label_check" for="dura_segundos">Dura segundos</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="dura_minutos" name="tipo_pergunta[]" value="Dura minutos">
            <label class="form-check-label label_check" for="dura_minutos">Dura minutos</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="dura_horas" name="tipo_pergunta[]" value="Dura horas">
            <label class="form-check-label label_check" for="dura_horas">Dura horas</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="outros_tipo_pergunta" name="tipo_pergunta[]" value="Outros">
            <label class="form-check-label label_check" for="outros_tipo_pergunta">Outros…</label>
        </div>
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>
    </div>
</div>

<div class="col-md-12">
    <label for="exames_cardiacos" class="form-label">Quanto à investigação de doença coronariana, quais exames já realizou? <b>*</b></label>
    <div class="row align-content">
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="ecg_repouso" name="exames_cardiacos[]" value="ECG de repouso">
            <label class="form-check-label label_check" for="ecg_repouso">ECG de repouso</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="teste_ergometrico" name="exames_cardiacos[]" value="Teste ergométrico">
            <label class="form-check-label label_check" for="teste_ergometrico">Teste ergométrico</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="eco_estresse" name="exames_cardiacos[]" value="ECO de estresse">
            <label class="form-check-label label_check" for="eco_estresse">ECO de estresse</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="cintilografia" name="exames_cardiacos[]" value="Cintilografia">
            <label class="form-check-label label_check" for="cintilografia">Cintilografia</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="escore_calcio" name="exames_cardiacos[]" value="Escore de cálcio">
            <label class="form-check-label label_check" for="escore_calcio">Escore de cálcio</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="cineangiocoronografia" name="exames_cardiacos[]" value="Cineangiocoronografia">
            <label class="form-check-label label_check" for="cineangiocoronografia">Cineangiocoronografia</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="nunca_fez" name="exames_cardiacos[]" value="Nunca fez">
            <label class="form-check-label label_check" for="nunca_fez">Nunca fez</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="nao_lembra_sabe" name="exames_cardiacos[]" value="Não lembra/não sabe">
            <label class="form-check-label label_check" for="nao_lembra_sabe">Não lembra/não sabe</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="outros_exames" name="exames_cardiacos[]" value="Outros">
            <label class="form-check-label label_check" for="outros_exames">Outros…</label>
        </div>
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>
    </div>
</div>

