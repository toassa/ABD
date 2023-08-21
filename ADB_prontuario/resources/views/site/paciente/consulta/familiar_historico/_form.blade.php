<div class="col-md-4">
    <label for="validationCustomDM" class="form-label">Diabetes Mellitus (DM)</label>
    <input type="text" class="form-control" id="validationCustomDM" value="{{ isset($rows->dm) ? $rows->dm : '' }}" name="dm" placeholder="Insira informações sobre Diabetes Mellitus (DM)" required>
    <div class="invalid-feedback">
        Insira informações sobre Diabetes Mellitus (DM)
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomPossuiDM1" class="form-label">Possui Diabetes Mellitus Tipo 1 (DM1)</label>
    <select class="form-select" id="validationCustomPossuiDM1" name="possui_dm1" required>
        <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->possui_dm1) && $rows->possui_dm1 == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->possui_dm1) && $rows->possui_dm1 == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se possui DM1
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDM1" class="form-label">DM Tipo 1 (se sim)</label>
    <input type="text" class="form-control" id="validationCustomDM1" value="{{ isset($rows->dm1) ? $rows->dm1 : '' }}" name="dm1" placeholder="Insira informações sobre DM Tipo 1" required>
    <div class="invalid-feedback">
        Insira informações sobre DM Tipo 1
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomObesidade" class="form-label">Obesidade</label>
    <input type="text" class="form-control" id="validationCustomObesidade" value="{{ isset($rows->obesidade) ? $rows->obesidade : '' }}" name="obesidade" placeholder="Insira informações sobre obesidade" required>
    <div class="invalid-feedback">
        Insira informações sobre obesidade
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomVitiligo" class="form-label">Vitiligo</label>
    <input type="text" class="form-control" id="validationCustomVitiligo" value="{{ isset($rows->vitiligo) ? $rows->vitiligo : '' }}" name="vitiligo" placeholder="Insira informações sobre vitiligo" required>
    <div class="invalid-feedback">
        Insira informações sobre vitiligo
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDoencaTireoideana" class="form-label">Doença Tireoidiana</label>
    <input type="text" class="form-control" id="validationCustomDoencaTireoideana" value="{{ isset($rows->doenca_tireoideana) ? $rows->doenca_tireoideana : '' }}" name="doenca_tireoideana" placeholder="Insira informações sobre doença tireoidiana" required>
    <div class="invalid-feedback">
        Insira informações sobre doença tireoidiana
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDisplidemia" class="form-label">Displidemia</label>
    <input type="text" class="form-control" id="validationCustomDisplidemia" value="{{ isset($rows->displidemia) ? $rows->displidemia : '' }}" name="displidemia" placeholder="Insira informações sobre displidemia" required>
    <div class="invalid-feedback">
        Insira informações sobre displidemia
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomAlopecia" class="form-label">Alopecia</label>
    <input type="text" class="form-control" id="validationCustomAlopecia" value="{{ isset($rows->alopecia) ? $rows->alopecia : '' }}" name="alopecia" placeholder="Insira informações sobre alopecia" required>
    <div class="invalid-feedback">
        Insira informações sobre alopecia
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomArtriteReumatoide" class="form-label">Artrite Reumatoide</label>
    <input type="text" class="form-control" id="validationCustomArtriteReumatoide" value="{{ isset($rows->artrite_reumatoide) ? $rows->artrite_reumatoide : '' }}" name="artrite_reumatoide" placeholder="Insira informações sobre artrite reumatoide" required>
    <div class="invalid-feedback">
        Insira informações sobre artrite reumatoide
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDoencaCoronariana" class="form-label">Doença Coronariana</label>
    <input type="text" class="form-control" id="validationCustomDoencaCoronariana" value="{{ isset($rows->doenca_coronariana) ? $rows->doenca_coronariana : '' }}" name="doenca_coronariana" placeholder="Insira informações sobre doença coronariana" required>
    <div class="invalid-feedback">
        Insira informações sobre doença coronariana
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomHAS" class="form-label">Hipertensão Arterial Sistêmica (HAS)</label>
    <input type="text" class="form-control" id="validationCustomHAS" value="{{ isset($rows->has) ? $rows->has : '' }}" name="has" placeholder="Insira informações sobre HAS" required>
    <div class="invalid-feedback">
        Insira informações sobre HAS
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDoencaCeliaca" class="form-label">Doença Celíaca</label>
    <input type="text" class="form-control" id="validationCustomDoencaCeliaca" value="{{ isset($rows->doenca_celiaca) ? $rows->doenca_celiaca : '' }}" name="doenca_celiaca" placeholder="Insira informações sobre doença celíaca" required>
    <div class="invalid-feedback">
        Insira informações sobre doença celíaca
    </div>
</div>
