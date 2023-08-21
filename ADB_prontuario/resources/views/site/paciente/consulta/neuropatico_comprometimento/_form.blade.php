<div class="col-md-4">
    <label for="validationCustomReflexoAquileuDireito" class="form-label">Reflexo Aquileu Direito</label>
    <select class="form-select" id="validationCustomReflexoAquileuDireito" name="reflexo_aquileu_direito" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Presente" {{ isset($rows->reflexo_aquileu_direito) && $rows->reflexo_aquileu_direito === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Presente ao esforço" {{ isset($rows->reflexo_aquileu_direito) && $rows->reflexo_aquileu_direito === 'Presente ao esforço' ? 'selected' : '' }}>Presente ao esforço</option>
        <option value="Ausente" {{ isset($rows->reflexo_aquileu_direito) && $rows->reflexo_aquileu_direito === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado do reflexo aquileu direito
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomReflexoAquileuEsquerdo" class="form-label">Reflexo Aquileu Esquerdo</label>
    <select class="form-select" id="validationCustomReflexoAquileuEsquerdo" name="reflexo_aquileu_esquerdo" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Presente" {{ isset($rows->reflexo_aquileu_esquerdo) && $rows->reflexo_aquileu_esquerdo === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Presente ao esforço" {{ isset($rows->reflexo_aquileu_esquerdo) && $rows->reflexo_aquileu_esquerdo === 'Presente ao esforço' ? 'selected' : '' }}>Presente ao esforço</option>
        <option value="Ausente" {{ isset($rows->reflexo_aquileu_esquerdo) && $rows->reflexo_aquileu_esquerdo === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado do reflexo aquileu esquerdo
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSensibilidadeVibratoriaDireita" class="form-label">Sensibilidade Vibratória Direita</label>
    <select class="form-select" id="validationCustomSensibilidadeVibratoriaDireita" name="sensibilidade_vibratoria_direita" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Presente" {{ isset($rows->sensibilidade_vibratoria_direita) && $rows->sensibilidade_vibratoria_direita === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Ausente" {{ isset($rows->sensibilidade_vibratoria_direita) && $rows->sensibilidade_vibratoria_direita === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado da sensibilidade vibratória direita
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSensibilidadeVibratoriaEsquerda" class="form-label">Sensibilidade Vibratória Esquerda</label>
    <select class="form-select" id="validationCustomSensibilidadeVibratoriaEsquerda" name="sensibilidade_vibratoria_esquerda" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Presente" {{ isset($rows->sensibilidade_vibratoria_esquerda) && $rows->sensibilidade_vibratoria_esquerda === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Ausente" {{ isset($rows->sensibilidade_vibratoria_esquerda) && $rows->sensibilidade_vibratoria_esquerda === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado da sensibilidade vibratória esquerda
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSensibilidadeDolorosaDireita" class="form-label">Sensibilidade Dolorosa Direita</label>
    <select class="form-select" id="validationCustomSensibilidadeDolorosaDireita" name="sensibilidade_dolorosa_direita" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Presente" {{ isset($rows->sensibilidade_dolorosa_direita) && $rows->sensibilidade_dolorosa_direita === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Ausente" {{ isset($rows->sensibilidade_dolorosa_direita) && $rows->sensibilidade_dolorosa_direita === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado da sensibilidade dolorosa direita
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSensibilidadeDolorosaEsquerda" class="form-label">Sensibilidade Dolorosa Esquerda</label>
    <select class="form-select" id="validationCustomSensibilidadeDolorosaEsquerda" name="sensibilidade_dolorosa_esquerda" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Presente" {{ isset($rows->sensibilidade_dolorosa_esquerda) && $rows->sensibilidade_dolorosa_esquerda === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Ausente" {{ isset($rows->sensibilidade_dolorosa_esquerda) && $rows->sensibilidade_dolorosa_esquerda === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado da sensibilidade dolorosa esquerda
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSensibilidadeTermicaDireita" class="form-label">Sensibilidade Térmica Direita</label>
    <select class="form-select" id="validationCustomSensibilidadeTermicaDireita" name="sensibilidade_termica_direita" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Presente" {{ isset($rows->sensibilidade_termica_direita) && $rows->sensibilidade_termica_direita === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Ausente" {{ isset($rows->sensibilidade_termica_direita) && $rows->sensibilidade_termica_direita === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado da sensibilidade térmica direita
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSensibilidadeTermicaEsquerda" class="form-label">Sensibilidade Térmica Esquerda</label>
    <select class="form-select" id="validationCustomSensibilidadeTermicaEsquerda" name="sensibilidade_termica_esquerda" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Presente" {{ isset($rows->sensibilidade_termica_esquerda) && $rows->sensibilidade_termica_esquerda === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Ausente" {{ isset($rows->sensibilidade_termica_esquerda) && $rows->sensibilidade_termica_esquerda === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado da sensibilidade térmica esquerda
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomTotalPontos" class="form-label">Total de Pontos</label>
    <select class="form-select" id="validationCustomTotalPontos" name="total_pontos" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Sinais leves" {{ isset($rows->total_pontos) && $rows->total_pontos === 'Sinais leves' ? 'selected' : '' }}>Sinais leves</option>
        <option value="Sinais moderados" {{ isset($rows->total_pontos) && $rows->total_pontos === 'Sinais moderados' ? 'selected' : '' }}>Sinais moderados</option>
        <option value="Sinais graves" {{ isset($rows->total_pontos) && $rows->total_pontos === 'Sinais graves' ? 'selected' : '' }}>Sinais graves</option>
    </select>
    <div class="invalid-feedback">
        Selecione o total de pontos
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDiagnosticoNeuropatiaPeriferica" class="form-label">Diagnóstico de Neuropatia Periférica</label>
    <select class="form-select" id="validationCustomDiagnosticoNeuropatiaPeriferica" name="diagnostico_neuropatia_periferica" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->diagnostico_neuropatia_periferica) && $rows->diagnostico_neuropatia_periferica == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->diagnostico_neuropatia_periferica) && $rows->diagnostico_neuropatia_periferica == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há diagnóstico de neuropatia periférica
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomObservacoes" class="form-label">Observações</label>
    <input type="text" class="form-control" id="validationCustomObservacoes" value="{{ isset($rows->observacoes) ? $rows->observacoes : '' }}" name="observacoes" required>
    <div class="invalid-feedback">
        Insira observações 
    </div>
</div>
