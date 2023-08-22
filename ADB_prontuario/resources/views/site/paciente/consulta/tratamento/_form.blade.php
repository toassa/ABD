<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Medicamento para Diabetes <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->medicamento_diabetes) ? $rows->medicamento_diabetes : '' }}" name="medicamento_diabetes" required>
    <div class="invalid-feedback">
        Insira o medicamento para diabetes 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomUsoInsulina" class="form-label">Uso de Insulina <b>*</b> </label>
    <select class="form-select" id="validationCustomUsoInsulina" name="uso_insulina" required required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->uso_insulina) && $rows->uso_insulina == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->uso_insulina) && $rows->uso_insulina == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há uso de insulina
    </div>
</div>



<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Tipos de Insulinas <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->tipos_insulinas) ? $rows->tipos_insulinas : '' }}" name="tipos_insulinas" required>
    <div class="invalid-feedback">
        Insira os tipos de insulinas 
    </div>
</div>

<!-- MUDAR FORM -->

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Nome da Insulina <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->nome_insulina) ? $rows->nome_insulina : '' }}" name="nome_insulina" required>
    <div class="invalid-feedback">
        Insira o nome da insulina 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Frequência de Insulina <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->frequencia_insulina) ? $rows->frequencia_insulina : '' }}" name="frequencia_insulina" required>
    <div class="invalid-feedback">
        Insira a frequência de insulina 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Dose de Insulina <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->dose_insulina) ? $rows->dose_insulina : '' }}" name="dose_insulina" required>
    <div class="invalid-feedback">
        Insira a dose de insulina 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Origem das Insulinas <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->origem_insulinas) ? $rows->origem_insulinas : '' }}" name="origem_insulinas" required>
    <div class="invalid-feedback">
        Insira a origem das insulinas 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Origem do Utensílio <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->origem_utensilho) ? $rows->origem_utensilho : '' }}" name="origem_utensilho" required>
    <div class="invalid-feedback">
        Insira a origem do utensílio 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomReusoSeringasInsulina" class="form-label">Reuso de Seringas para Insulina <b>*</b> </label>
    <select class="form-select" id="validationCustomReusoSeringasInsulina" name="reuso_seringas_insulina" required required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->reuso_seringas_insulina) && $rows->reuso_seringas_insulina == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->reuso_seringas_insulina) && $rows->reuso_seringas_insulina == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há reuso de seringas para insulina
    </div>
</div>

<!-- MUDAR FORM -->

<div class="col-md-4">
    <label for="validationCustomNum" class="form-label">Quantidade de Reuso de Seringas <b>*</b> </label>
    <input type="number" class="form-control" id="validationCustomNum" value="{{ isset($rows->quantia_reuso_seringas) ? $rows->quantia_reuso_seringas : '' }}" name="quantia_reuso_seringas" required>
    <div class="invalid-feedback">
        Insira a quantidade de reuso de seringas 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Aderência ao Tratamento <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->aderencia) ? $rows->aderencia : '' }}" name="aderencia" required>
    <div class="invalid-feedback">
        Insira a aderência ao tratamento 
    </div>
</div>
