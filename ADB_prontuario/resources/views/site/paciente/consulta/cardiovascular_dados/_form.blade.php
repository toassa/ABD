<!-- cardiovascular_dados -->

<div class="col-md-4">
    <label for="validationCustomSaudeCardiaca" class="form-label">Saúde Cardíaca</label>
    <input type="text" class="form-control" id="validationCustomSaudeCardiaca" value="{{ isset($rows->saude_cardiaca) ? $rows->saude_cardiaca : '' }}" name="saude_cardiaca">
    <div class="invalid-feedback">
        Insira informações sobre a saúde cardíaca
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDorPeito" class="form-label">Dor no Peito</label>
    <input type="text" class="form-control" id="validationCustomDorPeito" value="{{ isset($rows->dor_peito) ? $rows->dor_peito : '' }}" name="dor_peito">
    <div class="invalid-feedback">
        Insira informações sobre dor no peito
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomExamesDoencaCoronariana" class="form-label">Exames de Doença Coronariana</label>
    <input type="text" class="form-control" id="validationCustomExamesDoencaCoronariana" value="{{ isset($rows->exames_doenca_coronariana) ? $rows->exames_doenca_coronariana : '' }}" name="exames_doenca_coronariana">
    <div class="invalid-feedback">
        Insira informações sobre exames de doença coronariana
    </div>
</div>
