{{-- automonitorizacao_glicemias --}}

<div class="col-md-4">
    <label for="validationCustomRealizaAutomonitorizacao" class="form-label">Realiza Automonitorização <b>*</b> </label>
    <select class="form-select" id="validationCustomRealizaAutomonitorizacao" name="realiza_automonitorizacao" required>
        <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->realiza_automonitorizacao) && $rows->realiza_automonitorizacao == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->realiza_automonitorizacao) && $rows->realiza_automonitorizacao == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se realiza automonitorização
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Frequência de Medições <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->frequencia_medicoes) ? $rows->frequencia_medicoes : '' }}" name="frequencia_medicoes" placeholder="Digite a frequência de medições" required>
    <div class="invalid-feedback">
        Insira a frequência de medições
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Origem das Fitas <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->origem_fitas) ? $rows->origem_fitas : '' }}" name="origem_fitas" placeholder="Digite a origem das fitas" required>
    <div class="invalid-feedback">
        Insira a origem das fitas
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomContagemCarboidratos" class="form-label">Contagem de Carboidratos <b>*</b> </label>
    <select class="form-select" id="validationCustomContagemCarboidratos" name="contagem_carboidratos" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Sim" {{ isset($rows->contagem_carboidratos) && $rows->contagem_carboidratos === 'Sim' ? 'selected' : '' }}>Sim</option>
        <option value="Não" {{ isset($rows->contagem_carboidratos) && $rows->contagem_carboidratos === 'Não' ? 'selected' : '' }}>Não</option>
        <option value="Não sabe" {{ isset($rows->contagem_carboidratos) && $rows->contagem_carboidratos === 'Não sabe' ? 'selected' : '' }}>Não sabe</option>
    </select>
    <div class="invalid-feedback">
        Selecione a contagem de carboidratos
    </div>
</div>
