<div class="col-md-4">
    <label for="validationCustomNum" class="form-label">Ano <b>*</b> </label>
    <input type="number" class="form-control" id="validationCustomNum" value="{{ isset($rows->ano) ? $rows->ano : '' }}" name="ano" required >
    <div class="invalid-feedback">
        Insira o ano do diagnóstico
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNum" class="form-label">Idade <b>*</b> </label>
    <input type="number" class="form-control" id="validationCustomNum" value="{{ isset($rows->idade) ? $rows->idade : '' }}" name="idade" required >
    <div class="invalid-feedback">
        Insira a idade no diagnóstico
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Sintomas <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->sintomas) ? $rows->sintomas : '' }}" name="sintomas" required >
    <div class="invalid-feedback">
        Insira os sintomas apresentados
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomComoFoiFeito" class="form-label">Como Foi Feito o Diagnóstico <b>*</b> </label>
    <select class="form-select" id="validationCustomComoFoiFeito" name="como_foi_feito" required >
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Internação com cetoacidose diabética" {{ isset($rows->como_foi_feito) && $rows->como_foi_feito === 'Internação com cetoacidose diabética' ? 'selected' : '' }}>Internação com cetoacidose diabética</option>
        <option value="Internação sem cetoacidose diabética" {{ isset($rows->como_foi_feito) && $rows->como_foi_feito === 'Internação sem cetoacidose diabética' ? 'selected' : '' }}>Internação sem cetoacidose diabética</option>
        <option value="Glicemia de jejum" {{ isset($rows->como_foi_feito) && $rows->como_foi_feito === 'Glicemia de jejum' ? 'selected' : '' }}>Glicemia de jejum</option>
        <option value="Curva glicêmica" {{ isset($rows->como_foi_feito) && $rows->como_foi_feito === 'Curva glicêmica' ? 'selected' : '' }}>Curva glicêmica</option>
        <option value="Glicemia ao acaso" {{ isset($rows->como_foi_feito) && $rows->como_foi_feito === 'Glicemia ao acaso' ? 'selected' : '' }}>Glicemia ao acaso</option>
        <option value="Outros" {{ isset($rows->como_foi_feito) && $rows->como_foi_feito === 'Outros' ? 'selected' : '' }}>Outros</option>
    </select>
    <div class="invalid-feedback">
        Selecione como foi feito o diagnóstico
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomInfeccoesSeisMeses" class="form-label">Teve Infecções nos Últimos Seis Meses? <b>*</b> </label>
    <select class="form-select" id="validationCustomInfeccoesSeisMeses" name="infeccoes_seis_meses" required >
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->infeccoes_seis_meses) && $rows->infeccoes_seis_meses == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->infeccoes_seis_meses) && $rows->infeccoes_seis_meses == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se teve infecções nos últimos seis meses
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Quais Infecções? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->quais_infeccoes) ? $rows->quais_infeccoes : '' }}" name="quais_infeccoes" required>
    <div class="invalid-feedback">
        Insira quais infecções teve 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNum" class="form-label">Período Entre Sintomas e Diagnóstico (meses) <b>*</b> </label>
    <input type="number" class="form-control" id="validationCustomNum" value="{{ isset($rows->periodo_sintomas_diagnostico) ? $rows->periodo_sintomas_diagnostico : '' }}" name="periodo_sintomas_diagnostico" required >
    <div class="invalid-feedback">
        Insira o período entre sintomas e diagnóstico
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomFatorEmocional" class="form-label">Fator Emocional? <b>*</b> </label>
    <select class="form-select" id="validationCustomFatorEmocional" name="fator_emocional" required >
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->fator_emocional) && $rows->fator_emocional == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->fator_emocional) && $rows->fator_emocional == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve fator emocional
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Qual Fator Emocional? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->qual_fator_emocional) ? $rows->qual_fator_emocional : '' }}" name="qual_fator_emocional" required>
    <div class="invalid-feedback">
        Insira qual foi o fator emocional 
    </div>
</div>
