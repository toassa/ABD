<!-- tratamento_medicamentos -->

<div class="col-md-4">
    <label for="validationFormMedicamentos" class="form-label textinho">Nome do medicamento<b>*</b></label>
    <select class="form-select" id="validationFormMedicamentos" name="nome" required>
        <option disabled selected value="">Clique para escolher...</option>
        @foreach ($medicamentos as $medicamento)
            @php
                $selected = isset($dados->medicamento) && $dados->medicamento === $medicamento->valor ? 'selected' : '';
            @endphp
            <option value="{{ $medicamento->nome }}" {{ $selected }}>{{ $medicamento->nome }}</option>
        @endforeach
    </select>
</div>


<div class="col-md-4">
    <label for="validationCustomTipo" class="form-label">Tipo <b>*</b></label>
    <select class="form-select" id="validationCustomTipo" name="tipo" required>
        <option disabled selected value="">Clique para escolher...</option>
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
    <label for="validationCustomPosologia" class="form-label">Posologia <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomPosologia" value="{{ isset($rows->posologia) ? $rows->posologia : '' }}" name="posologia" required>
    <div class="invalid-feedback">
        Insira a posologia do medicamento
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomOrigem" class="form-label">Origem <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomOrigem" value="{{ isset($rows->origem) ? $rows->origem : '' }}" name="origem" required>
    <div class="invalid-feedback">
        Insira a origem do medicamento
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomAderencia" class="form-label">Aderência <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomAderencia" value="{{ isset($rows->aderencia) ? $rows->aderencia : '' }}" name="aderencia" required>
    <div class="invalid-feedback">
        Insira a aderência ao tratamento do medicamento
    </div>
</div>