<!-- complicacoes -->

<div class="col-md-4">
    <label for="validationCustomComplicacoes" class="form-label">Complicações? <b>*</b> </label>
    <select class="form-select" id="validationCustomComplicacoes" name="complicacoes" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->complicacoes) && $rows->complicacoes == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->complicacoes) && $rows->complicacoes == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há complicações
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Quais Complicações? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->quais_complicacoes) ? $rows->quais_complicacoes : '' }}" name="quais_complicacoes" placeholder="Insira quais complicações" required>
    <div class="invalid-feedback">
        Insira quais complicações 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomInternacaoComplicacao" class="form-label">Teve Internação por Complicação? <b>*</b> </label>
    <select class="form-select" id="validationCustomInternacaoComplicacao" name="internacao_complicacao" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->internacao_complicacao) && $rows->internacao_complicacao == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->internacao_complicacao) && $rows->internacao_complicacao == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve internação por complicação
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Causa da Internação <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->causa_internacao) ? $rows->causa_internacao : '' }}" name="causa_internacao" placeholder="Insira a causa da internação" required>
    <div class="invalid-feedback">
        Insira a causa da internação 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomEpisodioHipoglicemia" class="form-label">Teve Episódio de Hipoglicemia? <b>*</b> </label>
    <select class="form-select" id="validationCustomEpisodioHipoglicemia" name="episodio_hipoglicemia" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Sim" {{ isset($rows->episodio_hipoglicemia) && $rows->episodio_hipoglicemia === 'Sim' ? 'selected' : '' }}>Sim</option>
        <option value="Não" {{ isset($rows->episodio_hipoglicemia) && $rows->episodio_hipoglicemia === 'Não' ? 'selected' : '' }}>Não</option>
        <option value="Não lembra" {{ isset($rows->episodio_hipoglicemia) && $rows->episodio_hipoglicemia === 'Não lembra' ? 'selected' : '' }}>Não lembra</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve episódio de hipoglicemia
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomEpisodioAssintomatico" class="form-label">Episódio Assintomático? <b>*</b> </label>
    <select class="form-select" id="validationCustomEpisodioAssintomatico" name="episodio_assintomatico" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->episodio_assintomatico) && $rows->episodio_assintomatico == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->episodio_assintomatico) && $rows->episodio_assintomatico == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se o episódio foi assintomático
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNivelEpisodio" class="form-label">Nível do Episódio <b>*</b> </label>
    <select class="form-select" id="validationCustomNivelEpisodio" name="nivel_episodio" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Leve/moderado" {{ isset($rows->nivel_episodio) && $rows->nivel_episodio === 'Leve/moderado' ? 'selected' : '' }}>Leve/moderado</option>
        <option value="Grave" {{ isset($rows->nivel_episodio) && $rows->nivel_episodio === 'Grave' ? 'selected' : '' }}>Grave</option>
    </select>
    <div class="invalid-feedback">
        Selecione o nível do episódio 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomPeriodoFrequenteHipoglicemia" class="form-label">Período Frequente de Hipoglicemia <b>*</b> </label>
    <select class="form-select" id="validationCustomPeriodoFrequenteHipoglicemia" name="periodo_frequente_hipoglocemia" required>
         <option selected disabled value="">Clique para escolher...</option>
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
    <label for="validationCustomNum" class="form-label">Episódios no Último Mês <b>*</b> </label>
    <input type="number" class="form-control" id="validationCustomNum" value="{{ isset($rows->episodios_ultimo_mes) ? $rows->episodios_ultimo_mes : '' }}" name="episodios_ultimo_mes" placeholder="Insira a quantidade de episódios no último mês" required>
    <div class="invalid-feedback">
        Insira a quantidade de episódios no último mês
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Alimento para Tratar Hipoglicemia <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->alimento_tratar_hipoglicemia) ? $rows->alimento_tratar_hipoglicemia : '' }}" name="alimento_tratar_hipoglicemia" placeholder="Insira o alimento utilizado para tratar hipoglicemia" required>
    <div class="invalid-feedback">
        Insira o alimento utilizado para tratar hipoglicemia
    </div>
</div>
