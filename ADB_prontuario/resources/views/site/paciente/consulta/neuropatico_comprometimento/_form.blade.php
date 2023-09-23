<div class="col-md-4">
    <label for="validationCustomReflexoAquileuDireito" class="form-label">Reflexo Aquileu Direito <b>*</b> </label>
    <select class="form-select" id="validationCustomReflexoAquileuDireito" name="reflexo_aquileu_direito" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Presente" {{ isset($dados->reflexo_aquileu_direito) && $dados->reflexo_aquileu_direito === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Presente ao esforço" {{ isset($dados->reflexo_aquileu_direito) && $dados->reflexo_aquileu_direito === 'Presente ao esforço' ? 'selected' : '' }}>Presente ao esforço</option>
        <option value="Ausente" {{ isset($dados->reflexo_aquileu_direito) && $dados->reflexo_aquileu_direito === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado do reflexo aquileu direito
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomReflexoAquileuEsquerdo" class="form-label">Reflexo Aquileu Esquerdo <b>*</b> </label>
    <select class="form-select" id="validationCustomReflexoAquileuEsquerdo" name="reflexo_aquileu_esquerdo" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Presente" {{ isset($dados->reflexo_aquileu_esquerdo) && $dados->reflexo_aquileu_esquerdo === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Presente ao esforço" {{ isset($dados->reflexo_aquileu_esquerdo) && $dados->reflexo_aquileu_esquerdo === 'Presente ao esforço' ? 'selected' : '' }}>Presente ao esforço</option>
        <option value="Ausente" {{ isset($dados->reflexo_aquileu_esquerdo) && $dados->reflexo_aquileu_esquerdo === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado do reflexo aquileu esquerdo
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSensibilidadeVibratoriaDireita" class="form-label">Sensibilidade Vibratória Direita <b>*</b> </label>
    <select class="form-select" id="validationCustomSensibilidadeVibratoriaDireita" name="sensibilidade_vibratoria_direita" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Presente" {{ isset($dados->sensibilidade_vibratoria_direita) && $dados->sensibilidade_vibratoria_direita === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Ausente" {{ isset($dados->sensibilidade_vibratoria_direita) && $dados->sensibilidade_vibratoria_direita === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado da sensibilidade vibratória direita
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSensibilidadeVibratoriaEsquerda" class="form-label">Sensibilidade Vibratória Esquerda <b>*</b> </label>
    <select class="form-select" id="validationCustomSensibilidadeVibratoriaEsquerda" name="sensibilidade_vibratoria_esquerda" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Presente" {{ isset($dados->sensibilidade_vibratoria_esquerda) && $dados->sensibilidade_vibratoria_esquerda === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Ausente" {{ isset($dados->sensibilidade_vibratoria_esquerda) && $dados->sensibilidade_vibratoria_esquerda === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado da sensibilidade vibratória esquerda
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSensibilidadeDolorosaDireita" class="form-label">Sensibilidade Dolorosa Direita <b>*</b> </label>
    <select class="form-select" id="validationCustomSensibilidadeDolorosaDireita" name="sensibilidade_dolorosa_direita" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Presente" {{ isset($dados->sensibilidade_dolorosa_direita) && $dados->sensibilidade_dolorosa_direita === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Ausente" {{ isset($dados->sensibilidade_dolorosa_direita) && $dados->sensibilidade_dolorosa_direita === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado da sensibilidade dolorosa direita
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSensibilidadeDolorosaEsquerda" class="form-label">Sensibilidade Dolorosa Esquerda <b>*</b> </label>
    <select class="form-select" id="validationCustomSensibilidadeDolorosaEsquerda" name="sensibilidade_dolorosa_esquerda" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Presente" {{ isset($dados->sensibilidade_dolorosa_esquerda) && $dados->sensibilidade_dolorosa_esquerda === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Ausente" {{ isset($dados->sensibilidade_dolorosa_esquerda) && $dados->sensibilidade_dolorosa_esquerda === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado da sensibilidade dolorosa esquerda
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSensibilidadeTermicaDireita" class="form-label">Sensibilidade Térmica Direita <b>*</b> </label>
    <select class="form-select" id="validationCustomSensibilidadeTermicaDireita" name="sensibilidade_termica_direita" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Presente" {{ isset($dados->sensibilidade_termica_direita) && $dados->sensibilidade_termica_direita === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Ausente" {{ isset($dados->sensibilidade_termica_direita) && $dados->sensibilidade_termica_direita === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado da sensibilidade térmica direita
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSensibilidadeTermicaEsquerda" class="form-label">Sensibilidade Térmica Esquerda <b>*</b> </label>
    <select class="form-select" id="validationCustomSensibilidadeTermicaEsquerda" name="sensibilidade_termica_esquerda" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Presente" {{ isset($dados->sensibilidade_termica_esquerda) && $dados->sensibilidade_termica_esquerda === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Ausente" {{ isset($dados->sensibilidade_termica_esquerda) && $dados->sensibilidade_termica_esquerda === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado da sensibilidade térmica esquerda
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomTotalPontos" class="form-label">Total de Pontos <b>*</b> </label>
    <select class="form-select" id="validationCustomTotalPontos" name="total_pontos" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Sinais leves" {{ isset($dados->total_pontos) && $dados->total_pontos === 'Sinais leves' ? 'selected' : '' }}>Sinais leves</option>
        <option value="Sinais moderados" {{ isset($dados->total_pontos) && $dados->total_pontos === 'Sinais moderados' ? 'selected' : '' }}>Sinais moderados</option>
        <option value="Sinais graves" {{ isset($dados->total_pontos) && $dados->total_pontos === 'Sinais graves' ? 'selected' : '' }}>Sinais graves</option>
    </select>
    <div class="invalid-feedback">
        Selecione o total de pontos
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDiagnosticoNeuropatiaPeriferica" class="form-label">Diagnóstico de Neuropatia Periférica <b>*</b> </label>
    <select class="form-select" id="validationCustomDiagnosticoNeuropatiaPeriferica" name="diagnostico_neuropatia_periferica" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($dados->diagnostico_neuropatia_periferica) && $dados->diagnostico_neuropatia_periferica == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($dados->diagnostico_neuropatia_periferica) && $dados->diagnostico_neuropatia_periferica == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há diagnóstico de neuropatia periférica
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Observações <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($dados->observacoes) ? $dados->observacoes : '' }}" name="observacoes" required>
    <div class="invalid-feedback">
        Insira observações 
    </div>
</div>
