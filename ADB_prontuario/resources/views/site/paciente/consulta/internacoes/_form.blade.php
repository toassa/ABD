<div class="col-md-6">
    <label for="validationCustomSelectDefine" class="form-label">Quantas vezes ficou internado(a) no último ano? <b>*</b> </label>
    <select class="form-select" id="validationCustomSelectDefine" onclick="mostraDados()" onchange="mostraDados()" onfocus="mostraDados()" name="frequencia_ultimo_ano" required>
        <option selected disabled value="">Clique para escolher...</option>
        <option value="0" {{ isset($dados->frequencia_ultimo_ano) && $dados->frequencia_ultimo_ano == 0 ? 'selected' : '' }}>0 vezes</option>
        <option value="1" {{ isset($dados->frequencia_ultimo_ano) && $dados->frequencia_ultimo_ano == 1 ? 'selected' : '' }}>1 vez</option>
        <option value="2" {{ isset($dados->frequencia_ultimo_ano) && $dados->frequencia_ultimo_ano == 2 ? 'selected' : '' }}>2 vezes</option>
        <option value="3" {{ isset($dados->frequencia_ultimo_ano) && $dados->frequencia_ultimo_ano == 3 ? 'selected' : '' }}>3 vezes</option>
        <option value="4" {{ isset($dados->frequencia_ultimo_ano) && $dados->frequencia_ultimo_ano == 4 ? 'selected' : '' }}>4 vezes</option>
        <option value="5" {{ isset($dados->frequencia_ultimo_ano) && $dados->frequencia_ultimo_ano == 5 ? 'selected' : '' }}>5 vezes ou mais</option>
    </select>
    <div class="invalid-feedback">
        Selecione o número de internações
    </div>
</div>

<div class="col-md-6" id="input_show">
    <label for="validationCustommotivo" class="form-label">Por qual motivo ficou internado(a)? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustommotivo" value="{{ isset($dados->motivo) ? $dados->motivo : '' }}" name="motivo" placeholder="Insira o motivo da internação">
    <div class="invalid-feedback">
        Insira o motivo da internação
    </div>
</div>

<div class="col-md-6" id="input_show_multiple">
    <label for="validationCustomquantidade_dias" class="form-label">Quantos dias ficou internado(a)? <b>*</b> </label>
    <input type="number" class="text-center form-control" id="validationCustomquantidade_dias" value="{{ isset($dados->quantidade_dias) ? $dados->quantidade_dias : '' }}" name="quantidade_dias" placeholder="Insira a quantidade de dias internado">
    <div class="invalid-feedback">
        Insira a quantidade de dias internado
    </div>
</div>

<div class="col-md-6" id="input_show_multiple2">
    <label for="validationCustomLocalInternacao" class="form-label">Qual o local onde ficou internado(a)? <b>*</b></label>
    <select class="form-select" id="validationCustomLocalInternacao" name="local">
        <option value="" disabled selected>Selecione uma opção</option>
        <option value="Enfermaria" {{ isset($dados->local) && $dados->local === 'Enfermaria' ? 'selected' : '' }}>Enfermaria</option>
        <option value="UTI" {{ isset($dados->local) && $dados->local === 'UTI' ? 'selected' : '' }}>UTI</option>
        <option value="Outros" {{ isset($dados->local) && $dados->local === 'Outros' ? 'selected' : '' }}>Outros</option>
    </select>
    <div class="invalid-feedback">
        Selecione uma opção
    </div>
</div>

<div class="col-md-12" id="input_show_multiple3">
    <label for="validationCustomFatorDesencadeante" class="form-label">Acha que teve algum fator desencadeante para sua internação? <b>*</b> </label>
    <select class="form-select" id="validationCustomFatorDesencadeante" name="fator_desencadeante">
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Infecção" {{ isset($dados->fator_desencadeante) && $dados->fator_desencadeante === 'Infecção' ? 'selected' : '' }}>Infecção</option>
        <option value="Erro de administração de insulina" {{ isset($dados->fator_desencadeante) && $dados->fator_desencadeante === 'Erro de administração de insulina' ? 'selected' : '' }}>Erro de administração de insulina</option>
        <option value="Estresse" {{ isset($dados->fator_desencadeante) && $dados->fator_desencadeante === 'Estresse' ? 'selected' : '' }}>Estresse</option>
        <option value="Não hove fator desencadeante" {{ isset($dados->fator_desencadeante) && $dados->fator_desencadeante === 'Não houve fator desencadeante' ? 'selected' : '' }}>Não houve fator desencadeante</option>
        <option value="Outro" {{ isset($dados->fator_desencadeante) && $dados->fator_desencadeante === 'Outro' ? 'selected' : '' }}>Outro</option>
    </select>
    <div class="invalid-feedback">
        Selecione o fator desencadeante
    </div>
</div>
