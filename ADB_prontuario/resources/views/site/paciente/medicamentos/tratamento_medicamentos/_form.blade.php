<!-- tratamento_medicamentos -->

<div class="col-md-4">
    <label for="validationFormMedicamentos" class="form-label">Nome do medicamento<b>*</b></label>
    <select class="form-select" id="validationFormMedicamentos" name="nome" required>
        <option disabled selected value="">Clique para escolher...</option>
        @foreach ($medicamentos as $medicamento)
            @php
                $selected = isset($tratamento_medicamentos->nome) && $tratamento_medicamentos->nome === $medicamento->nome ? 'selected' : '';
            @endphp
            <option value="{{ $medicamento->nome }}" {{ $selected }}>{{ $medicamento->nome }}</option>
        @endforeach
    </select>
</div>


<div class="col-md-4">
    <label for="validationCustomTipo" class="form-label">Tipo <b>*</b></label>
    <select class="form-select" id="validationCustomTipo" name="tipo" required>
        <option disabled selected value="">Clique para escolher...</option>
        <option value="HAS" {{ isset($tratamento_medicamentos->tipo) && $tratamento_medicamentos->tipo === 'HAS' ? 'selected' : '' }}>HAS</option>
        <option value="Dislipidemia" {{ isset($tratamento_medicamentos->tipo) && $tratamento_medicamentos->tipo === 'Dislipidemia' ? 'selected' : '' }}>Dislipidemia</option>
        <option value="Anticoagulante" {{ isset($tratamento_medicamentos->tipo) && $tratamento_medicamentos->tipo === 'Anticoagulante' ? 'selected' : '' }}>Anticoagulante</option>
        <option value="Tireoide" {{ isset($tratamento_medicamentos->tipo) && $tratamento_medicamentos->tipo === 'Tireoide' ? 'selected' : '' }}>Tireoide</option>
        <option value="Ansiedade ou depressao" {{ isset($tratamento_medicamentos->tipo) && $tratamento_medicamentos->tipo === 'Ansiedade ou depressao' ? 'selected' : '' }}>Ansiedade ou depressão</option>
        <option value="Outros" {{ isset($tratamento_medicamentos->tipo) && $tratamento_medicamentos->tipo === 'Outros' ? 'selected' : '' }}>Outros</option>
    </select>
    <div class="invalid-feedback">
        Selecione o tipo de medicamento
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Posologia <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{isset($tratamento_medicamentos->posologia) ? $tratamento_medicamentos->posologia : '' }}" name="posologia" required>
    <div class="invalid-feedback">
        Insira a posologia do medicamento
    </div>
</div>

{{-- {{$tratamento_medicamentos->posologia}} --}}
{{-- {{$tratamento_medicamentos}} --}}

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Origem <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($tratamento_medicamentos->origem) ? $tratamento_medicamentos->origem : '' }}" name="origem" required>
    <div class="invalid-feedback">
        Insira a origem do medicamento
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Data da consulta <b>*</b></label>
    <input type="date" class="form-control" id="validationCustomLetra" value="{{ isset($tratamento_medicamentos->consulta) ? $tratamento_medicamentos->consulta : '' }}" name="consulta" required>
    <div class="invalid-feedback">
        Insira a consulta do medicamento
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Dose <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($tratamento_medicamentos->dose) ? $tratamento_medicamentos->dose : '' }}" name="dose" required>
    <div class="invalid-feedback">
        Insira a dose do medicamento
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Período de uso <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($tratamento_medicamentos->periodo) ? $tratamento_medicamentos->periodo : '' }}" name="periodo" required>
    <div class="invalid-feedback">
        Insira o período de uso do medicamento
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Observações <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($tratamento_medicamentos->observacao) ? $tratamento_medicamentos->observacao : '' }}" name="observacao" required>
    <div class="invalid-feedback">
        Insira observações do medicamento
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Aderência <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($tratamento_medicamentos->aderencia) ? $tratamento_medicamentos->aderencia : '' }}" name="aderencia" required>
    <div class="invalid-feedback">
        Insira a aderência ao tratamento do medicamento
    </div>
</div>