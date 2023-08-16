<!-- habitos_vidas -->

<div class="col-md-4">
    <label for="validationCustomSobreEtilismo" class="form-label">Sobre Etilismo</label>
    <select class="form-select" id="validationCustomSobreEtilismo" name="sobre_etilismo">
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Etilista" {{ isset($rows->sobre_etilismo) && $rows->sobre_etilismo === 'Etilista' ? 'selected' : '' }}>Etilista</option>
        <option value="Ex-etilista" {{ isset($rows->sobre_etilismo) && $rows->sobre_etilismo === 'Ex-etilista' ? 'selected' : '' }}>Ex-etilista</option>
        <option value="Não-etilista" {{ isset($rows->sobre_etilismo) && $rows->sobre_etilismo === 'Não-etilista' ? 'selected' : '' }}>Não-etilista</option>
    </select>
    <div class="invalid-feedback">
        Selecione a categoria de etilismo
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomPeriodoQuantiaEtilismo" class="form-label">Período e Quantidade de Etilismo</label>
    <input type="text" class="form-control" id="validationCustomPeriodoQuantiaEtilismo" value="{{ isset($rows->periodo_quantia_etilismo) ? $rows->periodo_quantia_etilismo : '' }}" name="periodo_quantia_etilismo">
    <div class="invalid-feedback">
        Insira o período e a quantidade de etilismo
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomClassificacaoEtilismo" class="form-label">Classificação do Etilismo</label>
    <select class="form-select" id="validationCustomClassificacaoEtilismo" name="classificacao_etilismo">
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Leve" {{ isset($rows->classificacao_etilismo) && $rows->classificacao_etilismo === 'Leve' ? 'selected' : '' }}>Leve</option>
        <option value="Moderado" {{ isset($rows->classificacao_etilismo) && $rows->classificacao_etilismo === 'Moderado' ? 'selected' : '' }}>Moderado</option>
        <option value="Grave" {{ isset($rows->classificacao_etilismo) && $rows->classificacao_etilismo === 'Grave' ? 'selected' : '' }}>Grave</option>
    </select>
    <div class="invalid-feedback">
        Selecione a classificação do etilismo
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSobreTabagismo" class="form-label">Sobre Tabagismo</label>
    <select class="form-select" id="validationCustomSobreTabagismo" name="sobre_tabagismo">
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Fumante diário" {{ isset($rows->sobre_tabagismo) && $rows->sobre_tabagismo === 'Fumante diário' ? 'selected' : '' }}>Fumante diário</option>
        <option value="Fumante ocasional" {{ isset($rows->sobre_tabagismo) && $rows->sobre_tabagismo === 'Fumante ocasional' ? 'selected' : '' }}>Fumante ocasional</option>
        <option value="Ex-fumante" {{ isset($rows->sobre_tabagismo) && $rows->sobre_tabagismo === 'Ex-fumante' ? 'selected' : '' }}>Ex-fumante</option>
        <option value="Não fumante" {{ isset($rows->sobre_tabagismo) && $rows->sobre_tabagismo === 'Não fumante' ? 'selected' : '' }}>Não fumante</option>
    </select>
    <div class="invalid-feedback">
        Selecione a categoria de tabagismo
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomQuantiaTabagismo" class="form-label">Quantidade de Tabagismo</label>
    <input type="text" class="form-control" id="validationCustomQuantiaTabagismo" value="{{ isset($rows->quantia_tabagismo) ? $rows->quantia_tabagismo : '' }}" name="quantia_tabagismo">
    <div class="invalid-feedback">
        Insira a quantidade de tabagismo
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSobreDrogasIlicitas" class="form-label">Sobre Drogas Ilícitas</label>
    <select class="form-select" id="validationCustomSobreDrogasIlicitas" name="sobre_drogas_ilicitas">
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Usuário" {{ isset($rows->sobre_drogas_ilicitas) && $rows->sobre_drogas_ilicitas === 'Usuário' ? 'selected' : '' }}>Usuário</option>
        <option value="Ex-usuário" {{ isset($rows->sobre_drogas_ilicitas) && $rows->sobre_drogas_ilicitas === 'Ex-usuário' ? 'selected' : '' }}>Ex-usuário</option>
        <option value="Nunca usou" {{ isset($rows->sobre_drogas_ilicitas) && $rows->sobre_drogas_ilicitas === 'Nunca usou' ? 'selected' : '' }}>Nunca usou</option>
        <option value="Usou uma vez" {{ isset($rows->sobre_drogas_ilicitas) && $rows->sobre_drogas_ilicitas === 'Usou uma vez' ? 'selected' : '' }}>Usou uma vez</option>
    </select>
    <div class="invalid-feedback">
        Selecione a categoria de drogas ilícitas
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomQuaisPeriodoDrogas" class="form-label">Quais Drogas e Período</label>
    <input type="text" class="form-control" id="validationCustomQuaisPeriodoDrogas" value="{{ isset($rows->quais_periodo_drogas) ? $rows->quais_periodo_drogas : '' }}" name="quais_periodo_drogas">
    <div class="invalid-feedback">
        Insira quais drogas e período de uso
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSobreAnabolizantes" class="form-label">Sobre Anabolizantes</label>
    <select class="form-select" id="validationCustomSobreAnabolizantes" name="sobre_anabolizantes">
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Usuário" {{ isset($rows->sobre_anabolizantes) && $rows->sobre_anabolizantes === 'Usuário' ? 'selected' : '' }}>Usuário</option>
        <option value="Ex-usuário" {{ isset($rows->sobre_anabolizantes) && $rows->sobre_anabolizantes === 'Ex-usuário' ? 'selected' : '' }}>Ex-usuário</option>
        <option value="Nunca usou" {{ isset($rows->sobre_anabolizantes) && $rows->sobre_anabolizantes === 'Nunca usou' ? 'selected' : '' }}>Nunca usou</option>
        <option value="Usou uma vez" {{ isset($rows->sobre_anabolizantes) && $rows->sobre_anabolizantes === 'Usou uma vez' ? 'selected' : '' }}>Usou uma vez</option>
    </select>
    <div class="invalid-feedback">
        Selecione a categoria de anabolizantes
    </div>
</div>
