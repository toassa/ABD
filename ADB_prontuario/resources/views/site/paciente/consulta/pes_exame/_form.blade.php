<div class="col-md-4">
    <label for="validationCustomCasosUlcera" class="form-label">Casos de Úlceras <b>*</b> </label>
    <select class="form-select" id="validationCustomCasosUlcera" name="casos_ulceras" required>
        <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->casos_ulceras) && $rows->casos_ulceras == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->casos_ulceras) && $rows->casos_ulceras == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há casos de úlceras
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Regiões das Úlceras <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->regioes_ulceras) ? $rows->regioes_ulceras : '' }}" name="regioes_ulceras" required>
    <div class="invalid-feedback">
        Insira as regiões das úlceras
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Características das Úlceras <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLet" value="{{ isset($rows->caracteristicas_ulceras) ? $rows->caracteristicas_ulceras : '' }}" name="caracteristicas_ulceras" required>
    <div class="invalid-feedback">
        Insira as características das úlceras
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomAlteracoes" class="form-label">Alterações <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomAlteracoes" value="{{ isset($rows->alteracoes) ? $rows->alteracoes : '' }}" name="alteracoes" required>
    <div class="invalid-feedback">
        Insira as alterações
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDeformidades" class="form-label">Deformidades <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomDeformidades" value="{{ isset($rows->deformidades) ? $rows->deformidades : '' }}" name="deformidades" required>
    <div class="invalid-feedback">
        Insira as deformidades
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomPulsos" class="form-label">Pulsos <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomPulsos" value="{{ isset($rows->pulsos) ? $rows->pulsos : '' }}" name="pulsos" required>
    <div class="invalid-feedback">
        Insira os pulsos
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomAlteracoesNeuropaticas" class="form-label">Alterações Neuropáticas <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomAlteracoesNeuropaticas" value="{{ isset($rows->alteracoes_neuropaticas) ? $rows->alteracoes_neuropaticas : '' }}" name="alteracoes_neuropaticas" required>
    <div class="invalid-feedback">
        Insira as alterações neuropáticas
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDemaisAlteracoes" class="form-label">Demais Alterações <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomDemaisAlteracoes" value="{{ isset($rows->demais_alteracoes) ? $rows->demais_alteracoes : '' }}" name="demais_alteracoes" required>
    <div class="invalid-feedback">
        Insira outras alterações
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomObservacoes" class="form-label">Observações <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomObservacoes" value="{{ isset($rows->observacoes) ? $rows->observacoes : '' }}" name="observacoes" required>
    <div class="invalid-feedback">
        Insira observações
    </div>
</div>