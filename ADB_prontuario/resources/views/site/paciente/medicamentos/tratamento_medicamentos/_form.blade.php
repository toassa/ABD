<!-- tratamento_medicamentos -->

<div class="col-md-4">
    <label for="validationCustomNumRegistro" class="form-label">Número de Registro</label>
    <input type="text" class="form-control" id="validationCustomNumRegistro" value="{{ isset($rows->num_registro) ? $rows->num_registro : '' }}" name="num_registro" required>
    <div class="invalid-feedback">
        Insira o número de registro
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNomeMedicamento" class="form-label">Nome do Medicamento</label>
    <input type="text" class="form-control" id="validationCustomNomeMedicamento" value="{{ isset($rows->nome) ? $rows->nome : '' }}" name="nome" required>
    <div class="invalid-feedback">
        Insira o nome do medicamento
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomTipo" class="form-label">Tipo</label>
    <select class="form-select" id="validationCustomTipo" name="tipo" required>
        <option value="HAS" {{ isset($rows->tipo) && $rows->tipo === 'HAS' ? 'selected' : '' }}>HAS</option>
        <option value="Dislipidemia" {{ isset($rows->tipo) && $rows->tipo === 'Dislipidemia' ? 'selected' : '' }}>Dislipidemia</option>
        <option value="Anticoagulante" {{ isset($rows->tipo) && $rows->tipo === 'Anticoagulante' ? 'selected' : '' }}>Anticoagulante</option>
        <option value="Tireoide" {{ isset($rows->tipo) && $rows->tipo === 'Tireoide' ? 'selected' : '' }}>Tireoide</option>
        <option value="Ansiedade ou depressao" {{ isset($rows->tipo) && $rows->tipo === 'Ansiedade ou depressao' ? 'selected' : '' }}>Ansiedade ou depressão</option>
        <option value="Outros" {{ isset($rows->tipo) && $rows->tipo === 'Outros' ? 'selected' : '' }}>Outros</option>
    </select>
    <div class="invalid-feedback">
        Selecione o tipo de medicamento
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomPosologia" class="form-label">Posologia</label>
    <input type="text" class="form-control" id="validationCustomPosologia" value="{{ isset($rows->posologia) ? $rows->posologia : '' }}" name="posologia" required>
    <div class="invalid-feedback">
        Insira a posologia do medicamento
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomOrigem" class="form-label">Origem</label>
    <input type="text" class="form-control" id="validationCustomOrigem" value="{{ isset($rows->origem) ? $rows->origem : '' }}" name="origem" required>
    <div class="invalid-feedback">
        Insira a origem do medicamento
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomAderencia" class="form-label">Aderência</label>
    <input type="text" class="form-control" id="validationCustomAderencia" value="{{ isset($rows->aderencia) ? $rows->aderencia : '' }}" name="aderencia" required>
    <div class="invalid-feedback">
        Insira a aderência ao tratamento do medicamento
    </div>
</div>