<div class="col-md-6">
    <label for="validationCustomSelectDefine" class="form-label">Quantas vezes ficou internado(a) no último ano? <b>*</b> </label>
    <select class="form-select" id="validationCustomSelectDefine" name="frequencia_ultimo_ano" required required>
        <option selected disabled value="">Clique para escolher...</option>
        <option value="0" {{ isset($rows->frequencia_ultimo_ano) && $rows->frequencia_ultimo_ano == 0 ? 'selected' : '' }}>0 vezes</option>
        <option value="1" {{ isset($rows->frequencia_ultimo_ano) && $rows->frequencia_ultimo_ano == 1 ? 'selected' : '' }}>1 vez</option>
        <option value="2" {{ isset($rows->frequencia_ultimo_ano) && $rows->frequencia_ultimo_ano == 2 ? 'selected' : '' }}>2 vezes</option>
        <option value="3" {{ isset($rows->frequencia_ultimo_ano) && $rows->frequencia_ultimo_ano == 3 ? 'selected' : '' }}>3 vezes</option>
        <option value="4" {{ isset($rows->frequencia_ultimo_ano) && $rows->frequencia_ultimo_ano == 4 ? 'selected' : '' }}>4 vezes</option>
        <option value="5" {{ isset($rows->frequencia_ultimo_ano) && $rows->frequencia_ultimo_ano == 5 ? 'selected' : '' }}>5 vezes ou mais</option>
    </select>
    <div class="invalid-feedback">
        Selecione o número de internações
    </div>
</div>

<div class="col-md-6" id="input_show">
    <label for="validationCustomLetra" class="form-label">Por qual motivo ficou internado(a)? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->motivo) ? $rows->motivo : '' }}" name="motivo" placeholder="Insira o motivo da internação" required>
    <div class="invalid-feedback">
        Insira o motivo da internação
    </div>
</div>

<div class="col-md-6" id="input_show_multiple">
    <label for="validationCustomNum" class="form-label">Quantos dias ficou internado(a)? <b>*</b> </label>
    <input type="number" class="text-center form-control" id="validationCustomNum" value="{{ isset($rows->quantidade_dias) ? $rows->quantidade_dias : '' }}" name="quantidade_dias" placeholder="Insira a quantidade de dias internado" required>
    <div class="invalid-feedback">
        Insira a quantidade de dias internado
    </div>
</div>

<div class="col-md-6" id="input_show_multiple2">
    <label for="validationCustomLocalInternacao" class="form-label">Qual o local onde ficou internado(a)? <b>*</b></label>
    <select class="form-select" id="validationCustomLocalInternacao" name="local" required>
        <option value="" disabled selected>Selecione uma opção</option>
        <option value="Enfermaria" {{ isset($rows->local) && $rows->local === 'Enfermaria' ? 'selected' : '' }}>Enfermaria</option>
        <option value="UTI" {{ isset($rows->local) && $rows->local === 'UTI' ? 'selected' : '' }}>UTI</option>
        <option value="Outros" {{ isset($rows->local) && $rows->local === 'Outros' ? 'selected' : '' }}>Outros</option>
    </select>
    <div class="invalid-feedback">
        Selecione uma opção
    </div>
</div>

<div class="col-md-12" id="input_show_multiple3">
    <label for="validationCustomFatorDesencadeante" class="form-label">Acha que teve algum fator desencadeante para sua internação? <b>*</b> </label>
    <select class="form-select" id="validationCustomFatorDesencadeante" name="fator_desencadeante" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Infecção" {{ isset($rows->fator_desencadeante) && $rows->fator_desencadeante === 'Infecção' ? 'selected' : '' }}>Infecção</option>
        <option value="Erro de administração de insulina" {{ isset($rows->fator_desencadeante) && $rows->fator_desencadeante === 'Erro de administração de insulina' ? 'selected' : '' }}>Erro de administração de insulina</option>
        <option value="Estresse" {{ isset($rows->fator_desencadeante) && $rows->fator_desencadeante === 'Estresse' ? 'selected' : '' }}>Estresse</option>
        <option value="Não houve fator desencadeante" {{ isset($rows->fator_desencadeante) && $rows->fator_desencadeante === 'Não houve fator desencadeante' ? 'selected' : '' }}>Não houve fator desencadeante</option>
        <option value="Outro" {{ isset($rows->fator_desencadeante) && $rows->fator_desencadeante === 'Outro' ? 'selected' : '' }}>Outro</option>
    </select>
    <div class="invalid-feedback">
        Selecione o fator desencadeante
    </div>
</div>
