<div class="col-md-4">
    <label for="validationCustomSobreEtilismo" class="form-label">Sobre Etilismo <b>*</b> </label>
    <select class="form-select" id="validationCustomSobreEtilismo" name="sobre_etilismo" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Etilista" {{ isset($dados->sobre_etilismo) && $dados->sobre_etilismo === 'Etilista' ? 'selected' : '' }}>Etilista</option>
        <option value="Ex-etilista" {{ isset($dados->sobre_etilismo) && $dados->sobre_etilismo === 'Ex-etilista' ? 'selected' : '' }}>Ex-etilista</option>
        <option value="Não-etilista" {{ isset($dados->sobre_etilismo) && $dados->sobre_etilismo === 'Não-etilista' ? 'selected' : '' }}>Não-etilista</option>
    </select>
    <div class="invalid-feedback">
        Selecione a categoria de etilismo
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Período e Quantidade de bebida que ingeria <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($dados->periodo_quantia_etilismo) ? $dados->periodo_quantia_etilismo : '' }}" name="periodo_quantia_etilismo" placeholder="Insira o período e a quantidade de etilismo" required>
    <div class="invalid-feedback">
        Insira o período e a quantidade de bebida que ingeria  
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomClassificacaoEtilismo" class="form-label">Classificação do Etilismo <b>*</b> </label>
    <select class="form-select" id="validationCustomClassificacaoEtilismo" name="classificacao_etilismo" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Leve" {{ isset($dados->classificacao_etilismo) && $dados->classificacao_etilismo === 'Leve' ? 'selected' : '' }}>Leve</option>
        <option value="Moderado" {{ isset($dados->classificacao_etilismo) && $dados->classificacao_etilismo === 'Moderado' ? 'selected' : '' }}>Moderado</option>
        <option value="Grave" {{ isset($dados->classificacao_etilismo) && $dados->classificacao_etilismo === 'Grave' ? 'selected' : '' }}>Grave</option>
    </select>
    <div class="invalid-feedback">
        Selecione a classificação do etilismo
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSobreTabagismo" class="form-label">Sobre Tabagismo <b>*</b> </label>
    <select class="form-select" id="validationCustomSobreTabagismo" name="sobre_tabagismo" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Fumante diário" {{ isset($dados->sobre_tabagismo) && $dados->sobre_tabagismo === 'Fumante diário' ? 'selected' : '' }}>Fumante diário</option>
        <option value="Fumante ocasional" {{ isset($dados->sobre_tabagismo) && $dados->sobre_tabagismo === 'Fumante ocasional' ? 'selected' : '' }}>Fumante ocasional</option>
        <option value="Ex-fumante" {{ isset($dados->sobre_tabagismo) && $dados->sobre_tabagismo === 'Ex-fumante' ? 'selected' : '' }}>Ex-fumante</option>
        <option value="Não fumante" {{ isset($dados->sobre_tabagismo) && $dados->sobre_tabagismo === 'Não fumante' ? 'selected' : '' }}>Não fumante</option>
    </select>
    <div class="invalid-feedback">
        Selecione a categoria de tabagismo
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Quantos anos-maço fuma/fumou?
            <b>*</b>         
            <a href="#" id="btn_aparece" class="span-dialog" onclick="show_dialog_info()">
                <span class="material-symbols-outlined show-dialog">
                    info
                </span>
            </a>
            <dialog class="square-content square-content--confirma-excluir"  id="dialog_info">
                <div class="p-dialog">
                    (Número de maços (20 cigarros)  x número de anos. Exemplo: O paciente fumou 30 cigarros por dia durante 15 anos - 30/20 x 15 = 22,5 anos-maço.)
                </div>
                <div class="row buttons-dialog">
                    dfddfsf
                </div>
            </dialog> 
        </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($dados->quantia_tabagismo) ? $dados->quantia_tabagismo : '' }}" name="quantia_tabagismo" placeholder="Insira a quantidade de tabagismo" required>
    <div class="invalid-feedback">
        Insira a quantidade de tabaanos-maço  </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSobreDrogasIlicitas" class="form-label">Sobre Drogas Ilícitas <b>*</b> </label>
    <select class="form-select" id="validationCustomSobreDrogasIlicitas" name="sobre_drogas_ilicitas" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Usuário" {{ isset($dados->sobre_drogas_ilicitas) && $dados->sobre_drogas_ilicitas === 'Usuário' ? 'selected' : '' }}>Usuário</option>
        <option value="Ex-usuário" {{ isset($dados->sobre_drogas_ilicitas) && $dados->sobre_drogas_ilicitas === 'Ex-usuário' ? 'selected' : '' }}>Ex-usuário</option>
        <option value="Nunca usou" {{ isset($dados->sobre_drogas_ilicitas) && $dados->sobre_drogas_ilicitas === 'Nunca usou' ? 'selected' : '' }}>Nunca usou</option>
        <option value="Usou uma vez" {{ isset($dados->sobre_drogas_ilicitas) && $dados->sobre_drogas_ilicitas === 'Usou uma vez' ? 'selected' : '' }}>Usou uma vez</option>
    </select>
    <div class="invalid-feedback">
        Selecione a categoria de drogas ilícitas
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label textinho">Quais Drogas e Período <b>*</b> </label>
    <input type="text" class="form-control text-center" id="validationCustomLetra" value="{{ isset($dados->quais_periodo_drogas) ? $dados->quais_periodo_drogas : '' }}" name="quais_periodo_drogas" placeholder="Insira quais drogas e período de uso" required  maxlength="10">
    <div class="invalid-feedback">
        Insira quais drogas e período de uso
    </div>
</div>


<div class="col-md-4">
    <label for="validationCustomSobreAnabolizantes" class="form-label">Sobre Anabolizantes hormonais <b> *</b> </label>
    <select class="form-select" id="validationCustomSobreAnabolizantes" name="sobre_anabolizantes" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Usuário" {{ isset($dados->sobre_anabolizantes) && $dados->sobre_anabolizantes === 'Usuário' ? 'selected' : '' }}>Usuário</option>
        <option value="Ex-usuário" {{ isset($dados->sobre_anabolizantes) && $dados->sobre_anabolizantes === 'Ex-usuário' ? 'selected' : '' }}>Ex-usuário</option>
        <option value="Nunca usou" {{ isset($dados->sobre_anabolizantes) && $dados->sobre_anabolizantes === 'Nunca usou' ? 'selected' : '' }}>Nunca usou</option>
        <option value="Usou uma vez" {{ isset($dados->sobre_anabolizantes) && $dados->sobre_anabolizantes === 'Usou uma vez' ? 'selected' : '' }}>Usou uma vez</option>
    </select>
    <div class="invalid-feedback">
        Selecione a categoria de anabolizantes
   hormonais  </div>
</div>
