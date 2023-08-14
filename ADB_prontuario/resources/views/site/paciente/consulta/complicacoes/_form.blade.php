<!-- complicacoes -->

<div class="col-md-4">
    <label for="validationCustomComplicacoes" class="form-label">Complicações?</label>
    <select class="form-select" id="validationCustomComplicacoes" name="complicacoes" required>
        <option value="1" {{ isset($rows->complicacoes) && $rows->complicacoes == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->complicacoes) && $rows->complicacoes == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há complicações
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomQuaisComplicacoes" class="form-label">Quais Complicações?</label>
    <input type="text" class="form-control" id="validationCustomQuaisComplicacoes" value="{{ isset($rows->quais_complicacoes) ? $rows->quais_complicacoes : '' }}" name="quais_complicacoes">
    <div class="invalid-feedback">
        Insira quais complicações 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomInternacaoComplicacao" class="form-label">Teve Internação por Complicação?</label>
    <select class="form-select" id="validationCustomInternacaoComplicacao" name="internacao_complicacao" required>
        <option value="1" {{ isset($rows->internacao_complicacao) && $rows->internacao_complicacao == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->internacao_complicacao) && $rows->internacao_complicacao == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve internação por complicação
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomCausaInternacao" class="form-label">Causa da Internação</label>
    <input type="text" class="form-control" id="validationCustomCausaInternacao" value="{{ isset($rows->causa_internacao) ? $rows->causa_internacao : '' }}" name="causa_internacao">
    <div class="invalid-feedback">
        Insira a causa da internação 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomEpisodioHipoglicemia" class="form-label">Teve Episódio de Hipoglicemia?</label>
    <select class="form-select" id="validationCustomEpisodioHipoglicemia" name="episodio_hipoglicemia" required>
        <option value="Sim" {{ isset($rows->episodio_hipoglicemia) && $rows->episodio_hipoglicemia === 'Sim' ? 'selected' : '' }}>Sim</option>
        <option value="Não" {{ isset($rows->episodio_hipoglicemia) && $rows->episodio_hipoglicemia === 'Não' ? 'selected' : '' }}>Não</option>
        <option value="Não lembra" {{ isset($rows->episodio_hipoglicemia) && $rows->episodio_hipoglicemia === 'Não lembra' ? 'selected' : '' }}>Não lembra</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve episódio de hipoglicemia
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomEpisodioAssintomatico" class="form-label">Episódio Assintomático?</label>
    <select class="form-select" id="validationCustomEpisodioAssintomatico" name="episodio_assintomatico" required>
        <option value="1" {{ isset($rows->episodio_assintomatico) && $rows->episodio_assintomatico == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->episodio_assintomatico) && $rows->episodio_assintomatico == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se o episódio foi assintomático
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNivelEpisodio" class="form-label">Nível do Episódio</label>
    <select class="form-select" id="validationCustomNivelEpisodio" name="nivel_episodio">
        <option value="Leve/moderado" {{ isset($rows->nivel_episodio) && $rows->nivel_episodio === 'Leve/moderado' ? 'selected' : '' }}>Leve/moderado</option>
        <option value="Grave" {{ isset($rows->nivel_episodio) && $rows->nivel_episodio === 'Grave' ? 'selected' : '' }}>Grave</option>
    </select>
    <div class="invalid-feedback">
        Selecione o nível do episódio 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomPeriodoFrequenteHipoglicemia" class="form-label">Período Frequente de Hipoglicemia</label>
    <select class="form-select" id="validationCustomPeriodoFrequenteHipoglicemia" name="periodo_frequente_hipoglocemia">
        <option value="Manhã" {{ isset($rows->periodo_frequente_hipoglocemia) && $rows->periodo_frequente_hipoglocemia === 'Manhã' ? 'selected' : '' }}>Manhã</option>
        <option value="Tarde" {{ isset($rows->periodo_frequente_hipoglocemia) && $rows->periodo_frequente_hipoglocemia === 'Tarde' ? 'selected' : '' }}>Tarde</option>
        <option value="Noite" {{ isset($rows->periodo_frequente_hipoglocemia) && $rows->periodo_frequente_hipoglocemia === 'Noite' ? 'selected' : '' }}>Noite</option>
        <option value="Não sabe" {{ isset($rows->periodo_frequente_hipoglocemia) && $rows->periodo_frequente_hipoglocemia === 'Não sabe' ? 'selected' : '' }}>Não sabe</option>
    </select>
    <div class="invalid-feedback">
        Selecione o período frequente de hipoglicemia 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomEpisodiosUltimoMes" class="form-label">Episódios no Último Mês</label>
    <input type="number" class="form-control" id="validationCustomEpisodiosUltimoMes" value="{{ isset($rows->episodios_ultimo_mes) ? $rows->episodios_ultimo_mes : '' }}" name="episodios_ultimo_mes" required>
    <div class="invalid-feedback">
        Insira a quantidade de episódios no último mês
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomAlimentoTratarHipoglicemia" class="form-label">Alimento para Tratar Hipoglicemia</label>
    <input type="text" class="form-control" id="validationCustomAlimentoTratarHipoglicemia" value="{{ isset($rows->alimento_tratar_hipoglicemia) ? $rows->alimento_tratar_hipoglicemia : '' }}" name="alimento_tratar_hipoglicemia" required>
    <div class="invalid-feedback">
        Insira o alimento utilizado para tratar hipoglicemia
    </div>
</div>


