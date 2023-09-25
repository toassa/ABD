<!-- complicacoes -->

{{-- <div class="info-content">
    <div class="hover">
        <span class="material-symbols-outlined">
        info
        </span>
    </div>
    <div class="stuff">stuff</div>
</div> --}}

{{-- MUDAR FORMA --}}
<div class="col-md-6">
    <label for="validationCustomSelectDefineDouble" class="form-label">Já teve complicações do diabetes? <b>*</b> </label>
    <select class="form-select" id="validationCustomSelectDefineDouble" onclick="mostraDadosMultiple()" name="complicacoes" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($dados->complicacoes) && $dados->complicacoes == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($dados->complicacoes) && $dados->complicacoes == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há complicações
    </div>
</div>

<div class="col-md-6" id="input_show_double">
    <label for="validationCustomLetra" class="form-label">Descreva as complicações <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($dados->quais_complicacoes) ? $dados->quais_complicacoes : '' }}" name="quais_complicacoes" placeholder="Insira quais complicações">
    <div class="invalid-feedback">
        Insira quais complicações 
    </div>
</div>

{{-- MUDAR FORMA --}}
<div class="col-md-6" id="input_show_double2">
    <label for="validationCustomSelectDefine" class="form-label">Já foi internado por alguma complicação? <b>*</b> </label>
    <select class="form-select" id="validationCustomSelectDefine" onclick="MostraDados()" name="internacao_complicacao" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($dados->internacao_complicacao) && $dados->internacao_complicacao == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($dados->internacao_complicacao) && $dados->internacao_complicacao == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve internação por complicação
    </div>
</div>

<div class="col-md-6" id="i4nput_show">
    <label for="validationCustomLetra" class="form-label">Descreva as complicações que desencadearam a internação <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($dados->causa_internacao) ? $dados->causa_internacao : '' }}" name="causa_internacao" placeholder="Insira a causa da internação" required>
    <div class="invalid-feedback">
        Insira a causa da internação 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomEpisodioHipoglicemia" class="form-label">Já teve episódio(s) de hipoglicemia? <b>*</b> </label>
    <select class="form-select" id="validationCustomEpisodioHipoglicemia" name="episodio_hipoglicemia" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Sim" {{ isset($dados->episodio_hipoglicemia) && $dados->episodio_hipoglicemia === 'Sim' ? 'selected' : '' }}>Sim</option>
        <option value="Não" {{ isset($dados->episodio_hipoglicemia) && $dados->episodio_hipoglicemia === 'Não' ? 'selected' : '' }}>Não</option>
        <option value="Não lembra" {{ isset($dados->episodio_hipoglicemia) && $dados->episodio_hipoglicemia === 'Não lembra' ? 'selected' : '' }}>Não lembra</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve episódio de hipoglicemia
    </div>
</div>

<div class="col-md-4">
    <div class="align-content">
        <div class="col-md-8">
            <label for="validationCustomEpisodioAssintomatico" class="form-label">Episódio Assintomático?</label>
        </div>
        <div class="col-md-2">
            <b>*</b>
            {{-- <div class="hover">
                <span class="material-symbols-outlined">
                info
                </span>
            </div>
            <div class="stuff">stuff</div> --}}
        </div>
        <div class="col-md-2">
            <div class="col-md-6 hover">
                <span class="material-symbols-outlined" style="font-size: 20px !important; margin: 0 !important">
                    info
                </span>
            </div>
            <div class="col-md-6 stuff">
                oioioi
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <select class="form-select" id="validationCustomEpisodioAssintomatico" name="episodio_assintomatico" required>
             <option selected disabled value="">Clique para escolher...</option>
            <option value="1" {{ isset($dados->episodio_assintomatico) && $dados->episodio_assintomatico == 1 ? 'selected' : '' }}>Sim</option>
            <option value="0" {{ isset($dados->episodio_assintomatico) && $dados->episodio_assintomatico == 0 ? 'selected' : '' }}>Não</option>
        </select>
        <div class="invalid-feedback">
            Selecione se o episódio foi assintomático
        </div>
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNivelEpisodio" class="form-label">Nível do Episódio <b>*</b> </label>
    <select class="form-select" id="validationCustomNivelEpisodio" name="nivel_episodio" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Leve/moderado" {{ isset($dados->nivel_episodio) && $dados->nivel_episodio === 'Leve/moderado' ? 'selected' : '' }}>Leve/moderado</option>
        <option value="Grave" {{ isset($dados->nivel_episodio) && $dados->nivel_episodio === 'Grave' ? 'selected' : '' }}>Grave</option>
    </select>
    <div class="invalid-feedback">
        Selecione o nível do episódio 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomPeriodoFrequenteHipoglicemia" class="form-label">Período Frequente de Hipoglicemia <b>*</b> </label>
    <select class="form-select" id="validationCustomPeriodoFrequenteHipoglicemia" name="periodo_frequente_hipoglocemia" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Manhã" {{ isset($dados->periodo_frequente_hipoglocemia) && $dados->periodo_frequente_hipoglocemia === 'Manhã' ? 'selected' : '' }}>Manhã</option>
        <option value="Tarde" {{ isset($dados->periodo_frequente_hipoglocemia) && $dados->periodo_frequente_hipoglocemia === 'Tarde' ? 'selected' : '' }}>Tarde</option>
        <option value="Noite" {{ isset($dados->periodo_frequente_hipoglocemia) && $dados->periodo_frequente_hipoglocemia === 'Noite' ? 'selected' : '' }}>Noite</option>
        <option value="Não sabe" {{ isset($dados->periodo_frequente_hipoglocemia) && $dados->periodo_frequente_hipoglocemia === 'Não sabe' ? 'selected' : '' }}>Não sabe</option>
    </select>
    <div class="invalid-feedback">
        Selecione o período frequente de hipoglicemia 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNum" class="form-label">Episódios no Último Mês <b>*</b> </label>
    <input type="number" class="form-control" id="validationCustomNum" value="{{ isset($dados->episodios_ultimo_mes) ? $dados->episodios_ultimo_mes : '' }}" name="episodios_ultimo_mes" placeholder="Insira a quantidade de episódios no último mês" required>
    <div class="invalid-feedback">
        Insira a quantidade de episódios no último mês
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Alimento para Tratar Hipoglicemia <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($dados->alimento_tratar_hipoglicemia) ? $dados->alimento_tratar_hipoglicemia : '' }}" name="alimento_tratar_hipoglicemia" placeholder="Insira o alimento utilizado para tratar hipoglicemia" required>
    <div class="invalid-feedback">
        Insira o alimento utilizado para tratar hipoglicemia
    </div>
</div>
