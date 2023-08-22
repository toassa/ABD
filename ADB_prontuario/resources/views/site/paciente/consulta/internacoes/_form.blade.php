<div class="col-md-4">
    <label for="validationCustomInternacao" class="form-label">Internação no Último Ano  <b>*</b> </label>
    <select class="form-select" id="validationCustomInternacao" name="internacao_ultimo_ano" required required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->internacao_ultimo_ano) && $rows->internacao_ultimo_ano == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->internacao_ultimo_ano) && $rows->internacao_ultimo_ano == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve internação no último ano
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNum" class="form-label">Frequência de Internação no Último Ano <b>*</b> </label>
    <input type="number" class="text-center form-control" id="validationCustomNum" value="{{ isset($rows->frequencia_ultimo_ano) ? $rows->frequencia_ultimo_ano : '' }}" name="frequencia_ultimo_ano" placeholder="Insira a frequência de internação no último ano" required>
    <div class="invalid-feedback">
        Insira a frequência de internação no último ano
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Local da Internação <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->local) ? $rows->local : '' }}" name="local" placeholder="Insira o local da internação" required>
    <div class="invalid-feedback">
        Insira o local da internação
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Motivo da Internação <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->motivo) ? $rows->motivo : '' }}" name="motivo" placeholder="Insira o motivo da internação" required>
    <div class="invalid-feedback">
        Insira o motivo da internação
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNum" class="form-label">Quantidade de Dias Internado <b>*</b> </label>
    <input type="number" class="text-center form-control" id="validationCustomNum" value="{{ isset($rows->quantidade_dias) ? $rows->quantidade_dias : '' }}" name="quantidade_dias" placeholder="Insira a quantidade de dias internado" required>
    <div class="invalid-feedback">
        Insira a quantidade de dias internado
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomFatorDesencadeante" class="form-label">Fator Desencadeante <b>*</b> </label>
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
