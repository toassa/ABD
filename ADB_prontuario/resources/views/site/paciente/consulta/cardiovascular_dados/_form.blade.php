<!-- cardiovascular_dados -->

<div class="textinho col-md-4">
    <label for="validationCustomLetra" class="form-label">Saúde Cardíaca <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->saude_cardiaca) ? $rows->saude_cardiaca : '' }}" name="saude_cardiaca" placeholder="Insira informações sobre a saúde cardíaca" required>
    <div class="invalid-feedback">
        Insira informações sobre a saúde cardíaca
    </div>
</div>

<div class="textinho col-md-4">
    <label for="validationCustomLetra" class="form-label">Dor no Peito <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->dor_peito) ? $rows->dor_peito : '' }}" name="dor_peito" placeholder="Insira informações sobre dor no peito" required>
    <div class="invalid-feedback">
        Insira informações sobre dor no peito
    </div>
</div>

<div class="textinho col-md-4">
    <label for="validationCustomLetra" class="form-label">Exames de Doença Coronariana <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->exames_doenca_coronariana) ? $rows->exames_doenca_coronariana : '' }}" name="exames_doenca_coronariana" placeholder="Insira informações sobre exames de doença coronariana" required>
    <div class="invalid-feedback">
        Insira informações sobre exames de doença coronariana
    </div>
</div>
