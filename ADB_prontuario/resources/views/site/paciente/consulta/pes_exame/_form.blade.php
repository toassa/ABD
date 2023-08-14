{{-- pes_exames --}}
<div class="col-md-4">
    <label for="validationCustomCasosUlcera" class="form-label">Casos de Úlceras</label>
    <select class="form-select" id="validationCustomCasosUlcera" name="casos_ulceras">
        <option value="1" {{ isset($rows->casos_ulceras) && $rows->casos_ulceras == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->casos_ulceras) && $rows->casos_ulceras == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há casos de úlceras
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomRegioesUlcera" class="form-label">Regiões das Úlceras</label>
    <input type="text" class="form-control" id="validationCustomRegioesUlcera" value="{{ isset($rows->regioes_ulceras) ? $rows->regioes_ulceras : '' }}" name="regioes_ulceras">
    <div class="invalid-feedback">
        Insira as regiões das úlceras
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomCaracteristicasUlcera" class="form-label">Características das Úlceras</label>
    <input type="text" class="form-control" id="validationCustomCaracteristicasUlcera" value="{{ isset($rows->caracteristicas_ulceras) ? $rows->caracteristicas_ulceras : '' }}" name="caracteristicas_ulceras">
    <div class="invalid-feedback">
        Insira as características das úlceras
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomAlteracoes" class="form-label">Alterações</label>
    <input type="text" class="form-control" id="validationCustomAlteracoes" value="{{ isset($rows->alteracoes) ? $rows->alteracoes : '' }}" name="alteracoes">
    <div class="invalid-feedback">
        Insira as alterações
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDeformidades" class="form-label">Deformidades</label>
    <input type="text" class="form-control" id="validationCustomDeformidades" value="{{ isset($rows->deformidades) ? $rows->deformidades : '' }}" name="deformidades">
    <div class="invalid-feedback">
        Insira as deformidades
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomPulsos" class="form-label">Pulsos</label>
    <input type="text" class="form-control" id="validationCustomPulsos" value="{{ isset($rows->pulsos) ? $rows->pulsos : '' }}" name="pulsos">
    <div class="invalid-feedback">
        Insira os pulsos
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomAlteracoesNeuropaticas" class="form-label">Alterações Neuropáticas</label>
    <input type="text" class="form-control" id="validationCustomAlteracoesNeuropaticas" value="{{ isset($rows->alteracoes_neuropaticas) ? $rows->alteracoes_neuropaticas : '' }}" name="alteracoes_neuropaticas">
    <div class="invalid-feedback">
        Insira as alterações neuropáticas
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDemaisAlteracoes" class="form-label">Demais Alterações</label>
    <input type="text" class="form-control" id="validationCustomDemaisAlteracoes" value="{{ isset($rows->demais_alteracoes) ? $rows->demais_alteracoes : '' }}" name="demais_alteracoes">
    <div class="invalid-feedback">
        Insira outras alterações
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomObservacoes" class="form-label">Observações</label>
    <input type="text" class="form-control" id="validationCustomObservacoes" value="{{ isset($rows->observacoes) ? $rows->observacoes : '' }}" name="observacoes">
    <div class="invalid-feedback">
        Insira observações
    </div>
</div>