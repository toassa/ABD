<!-- dieta -->

<div class="col-md-4">
    <label for="validationCustomRealiza" class="form-label">Realização <b>*</b></label>
    <select class="form-select" id="validationCustomRealiza" name="realiza" required>
        <option value="1" {{ isset($rows->realiza) && $rows->realiza == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->realiza) && $rows->realiza == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se a realização ocorre
    </div>
</div>


<div class="col-md-4">
    <label for="validationCustomTipoDieta" class="form-label">Tipo de Dieta</label>
    <select class="form-select" id="validationCustomTipoDieta" name="tipo_dieta">
        <option value="Restringe apenas açúcar e doce" {{ isset($rows->tipo_dieta) && $rows->tipo_dieta === 'Restringe apenas açúcar e doce' ? 'selected' : '' }}>Restringe apenas açúcar e doce</option>
        <option value="Dieta de calorias" {{ isset($rows->tipo_dieta) && $rows->tipo_dieta === 'Dieta de calorias' ? 'selected' : '' }}>Dieta de calorias</option>
        <option value="Contagem de carboidratos" {{ isset($rows->tipo_dieta) && $rows->tipo_dieta === 'Contagem de carboidratos' ? 'selected' : '' }}>Contagem de carboidratos</option>
        <option value="Índice glicêmico" {{ isset($rows->tipo_dieta) && $rows->tipo_dieta === 'Índice glicêmico' ? 'selected' : '' }}>Índice glicêmico</option>
        <option value="Outros" {{ isset($rows->tipo_dieta) && $rows->tipo_dieta === 'Outros' ? 'selected' : '' }}>Outros</option>
    </select>
    <div class="invalid-feedback">
        Selecione o tipo de dieta
    </div>
</div>


<div class="col-md-4">
    <label for="validationCustomSegueDieta" class="form-label">Segue Dieta</label>
    <input type="number" class="text-center form-control" id="validationCustomSegueDieta" value="{{ isset($rows->segue_dieta) ? $rows->segue_dieta : '' }}" name="segue_dieta">
    <div class="invalid-feedback">
        Insira a dieta que segue
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDificuldadeDieta" class="form-label">Dificuldade na Dieta</label>
    <input type="text" class="form-control" id="validationCustomDificuldadeDieta" value="{{ isset($rows->dificuldade_dieta) ? $rows->dificuldade_dieta : '' }}" name="dificuldade_dieta">
    <div class="invalid-feedback">
        Insira a dificuldade na dieta
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomOrientador" class="form-label">Orientador</label>
    <input type="text" class="form-control" id="validationCustomOrientador" value="{{ isset($rows->orientador) ? $rows->orientador : '' }}" name="orientador">
    <div class="invalid-feedback">
        Insira o nome do orientador
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomConsultaNutricionista" class="form-label">Consulta com Nutricionista <b>*</b></label>
    <select class="form-select" id="validationCustomConsultaNutricionista" name="consulta_nutricionista" required>
        <option value="1" {{ isset($rows->consulta_nutricionista) && $rows->consulta_nutricionista == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->consulta_nutricionista) && $rows->consulta_nutricionista == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se realiza consulta com nutricionista
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomFreqConsulta" class="form-label">Frequência de Consulta</label>
    <input type="number" class="text-center form-control" id="validationCustomFreqConsulta" value="{{ isset($rows->frequencia_nutricionista) ? $rows->frequencia_nutricionista : '' }}" name="frequencia_nutricionista">
    <div class="invalid-feedback">
        Insira a frequência da consulta com nutricionista
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomConsomeDieteticos" class="form-label">Consome Produtos Dietéticos <b>*</b></label>
    <select class="form-select" id="validationCustomConsomeDieteticos" name="consome_dieteticos" required>
        <option value="1" {{ isset($rows->consome_dieteticos) && $rows->consome_dieteticos == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->consome_dieteticos) && $rows->consome_dieteticos == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se consome produtos dietéticos
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomProdutosDieteticos" class="form-label">Produtos Dietéticos Consumidos</label>
    <input type="text" class="form-control" id="validationCustomProdutosDieteticos" value="{{ isset($rows->produtos_dieteticos) ? $rows->produtos_dieteticos : '' }}" name="produtos_dieteticos">
    <div class="invalid-feedback">
        Insira os produtos dietéticos consumidos
    </div>
</div>
