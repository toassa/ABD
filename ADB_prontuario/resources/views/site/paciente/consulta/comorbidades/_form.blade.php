<!-- cormobidades -->

<div class="col-md-4">
    <label for="validationCustomOcular" class="form-label">Problemas Oculares</label>
    <input type="text" class="form-control" id="validationCustomOcular" value="{{ isset($rows->ocular) ? $rows->ocular : '' }}" name="ocular">
    <div class="invalid-feedback">
        Insira os problemas oculares
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNeuropatia" class="form-label">Neuropatia</label>
    <input type="text" class="form-control" id="validationCustomNeuropatia" value="{{ isset($rows->neuropatia) ? $rows->neuropatia : '' }}" name="neuropatia">
    <div class="invalid-feedback">
        Insira a neuropatia
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDoencaCronica" class="form-label">Doença Crônica</label>
    <input type="text" class="form-control" id="validationCustomDoencaCronica" value="{{ isset($rows->doenca_cronica) ? $rows->doenca_cronica : '' }}" name="doenca_cronica">
    <div class="invalid-feedback">
        Insira a doença crônica
    </div>
</div>
