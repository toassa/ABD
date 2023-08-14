<!-- frequencia acompanhamentos -->

<div class="col-md-4">
    <label for="validationCustomDentista" class="form-label">Frequência com o Dentista</label>
    <input type="text" class="form-control" id="validationCustomDentista" value="{{ isset($rows->dentista) ? $rows->dentista : '' }}" name="dentista">
    <div class="invalid-feedback">
        Insira informações sobre a frequência com o dentista
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomCardiologista" class="form-label">Frequência com o Cardiologista</label>
    <input type="text" class="form-control" id="validationCustomCardiologista" value="{{ isset($rows->cardiologista) ? $rows->cardiologista : '' }}" name="cardiologista">
    <div class="invalid-feedback">
        Insira informações sobre a frequência com o cardiologista
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomOftalmologista" class="form-label">Frequência com o Oftalmologista</label>
    <input type="text" class="form-control" id="validationCustomOftalmologista" value="{{ isset($rows->oftalmologista) ? $rows->oftalmologista : '' }}" name="oftalmologista">
    <div class="invalid-feedback">
        Insira informações sobre a frequência com o oftalmologista
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomUrologista" class="form-label">Frequência com o Urologista</label>
    <input type="text" class="form-control" id="validationCustomUrologista" value="{{ isset($rows->urologista) ? $rows->urologista : '' }}" name="urologista">
    <div class="invalid-feedback">
        Insira informações sobre a frequência com o urologista
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomExameToqueUrologista" class="form-label">Exame de Toque Urológico</label>
    <select class="form-select" id="validationCustomExameToqueUrologista" name="exame_toque_urologista">
        <option value="1" {{ isset($rows->exame_toque_urologista) && $rows->exame_toque_urologista == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->exame_toque_urologista) && $rows->exame_toque_urologista == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se realizou o exame de toque urológico
    </div>
</div>
