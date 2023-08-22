<!-- cormobidades -->

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Problemas Oculares <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->ocular) ? $rows->ocular : '' }}" name="ocular" placeholder="Insira os problemas oculares" required>
    <div class="invalid-feedback">
        Insira os problemas oculares
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Neuropatia <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->neuropatia) ? $rows->neuropatia : '' }}" name="neuropatia" placeholder="Insira a neuropatia" required>
    <div class="invalid-feedback">
        Insira a neuropatia
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Doença Crônica <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->doenca_cronica) ? $rows->doenca_cronica : '' }}" name="doenca_cronica" placeholder="Insira a doença crônica" required>
    <div class="invalid-feedback">
        Insira a doença crônica
    </div>
</div>
