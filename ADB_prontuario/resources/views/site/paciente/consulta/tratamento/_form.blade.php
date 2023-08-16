<!-- tratamentos -->

<div class="col-md-4">
    <label for="validationCustomMedicamentoDiabetes" class="form-label">Medicamento para Diabetes</label>
    <input type="text" class="form-control" id="validationCustomMedicamentoDiabetes" value="{{ isset($rows->medicamento_diabetes) ? $rows->medicamento_diabetes : '' }}" name="medicamento_diabetes">
    <div class="invalid-feedback">
        Insira o medicamento para diabetes 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomUsoInsulina" class="form-label">Uso de Insulina</label>
    <select class="form-select" id="validationCustomUsoInsulina" name="uso_insulina" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->uso_insulina) && $rows->uso_insulina == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->uso_insulina) && $rows->uso_insulina == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há uso de insulina
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomTiposInsulinas" class="form-label">Tipos de Insulinas</label>
    <input type="text" class="form-control" id="validationCustomTiposInsulinas" value="{{ isset($rows->tipos_insulinas) ? $rows->tipos_insulinas : '' }}" name="tipos_insulinas">
    <div class="invalid-feedback">
        Insira os tipos de insulinas 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNomeInsulina" class="form-label">Nome da Insulina</label>
    <input type="text" class="form-control" id="validationCustomNomeInsulina" value="{{ isset($rows->nome_insulina) ? $rows->nome_insulina : '' }}" name="nome_insulina">
    <div class="invalid-feedback">
        Insira o nome da insulina 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomFrequenciaInsulina" class="form-label">Frequência de Insulina</label>
    <input type="text" class="form-control" id="validationCustomFrequenciaInsulina" value="{{ isset($rows->frequencia_insulina) ? $rows->frequencia_insulina : '' }}" name="frequencia_insulina">
    <div class="invalid-feedback">
        Insira a frequência de insulina 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDoseInsulina" class="form-label">Dose de Insulina</label>
    <input type="text" class="form-control" id="validationCustomDoseInsulina" value="{{ isset($rows->dose_insulina) ? $rows->dose_insulina : '' }}" name="dose_insulina">
    <div class="invalid-feedback">
        Insira a dose de insulina 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomOrigemInsulinas" class="form-label">Origem das Insulinas</label>
    <input type="text" class="form-control" id="validationCustomOrigemInsulinas" value="{{ isset($rows->origem_insulinas) ? $rows->origem_insulinas : '' }}" name="origem_insulinas">
    <div class="invalid-feedback">
        Insira a origem das insulinas 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomOrigemUtensilho" class="form-label">Origem do Utensílio</label>
    <input type="text" class="form-control" id="validationCustomOrigemUtensilho" value="{{ isset($rows->origem_utensilho) ? $rows->origem_utensilho : '' }}" name="origem_utensilho">
    <div class="invalid-feedback">
        Insira a origem do utensílio 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomReusoSeringasInsulina" class="form-label">Reuso de Seringas para Insulina</label>
    <select class="form-select" id="validationCustomReusoSeringasInsulina" name="reuso_seringas_insulina" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->reuso_seringas_insulina) && $rows->reuso_seringas_insulina == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->reuso_seringas_insulina) && $rows->reuso_seringas_insulina == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há reuso de seringas para insulina
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomQuantiaReusoSeringas" class="form-label">Quantidade de Reuso de Seringas</label>
    <input type="number" class="form-control" id="validationCustomQuantiaReusoSeringas" value="{{ isset($rows->quantia_reuso_seringas) ? $rows->quantia_reuso_seringas : '' }}" name="quantia_reuso_seringas">
    <div class="invalid-feedback">
        Insira a quantidade de reuso de seringas 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomAderencia" class="form-label">Aderência ao Tratamento</label>
    <input type="text" class="form-control" id="validationCustomAderencia" value="{{ isset($rows->aderencia) ? $rows->aderencia : '' }}" name="aderencia">
    <div class="invalid-feedback">
        Insira a aderência ao tratamento 
    </div>
</div>
