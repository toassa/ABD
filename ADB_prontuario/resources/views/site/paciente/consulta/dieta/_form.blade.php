<!-- dieta -->

{{-- MUDAR FORMA --}}
<div class="col-md-4">
    <label for="validationCustomRealiza" class="form-label">Realização  <b>*</b> </label>
    <select class="form-select" id="validationCustomRealiza" name="realiza" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->realiza) && $rows->realiza == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->realiza) && $rows->realiza == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se a realização ocorre
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomTipoDieta" class="form-label">Tipo de Dieta <b>*</b> </label>
    <select class="form-select" id="validationCustomTipoDieta" name="tipo_dieta">
         <option selected disabled value="">Clique para escolher...</option>
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

{{-- MUDAR FORMA --}}
<div class="col-md-4">
    <label for="validationCustomSegueDieta" class="form-label">Segue Dieta <b>*</b> </label>
    <input type="number" class="text-center form-control" id="validationCustomSegueDieta" value="{{ isset($rows->segue_dieta) ? $rows->segue_dieta : '' }}" name="segue_dieta" placeholder="Insira a dieta que segue">
    <div class="invalid-feedback">
        Insira a dieta que segue
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDificuldadeDieta" class="form-label">Qual a maior dificuldade que você acha para seguir a dieta? <b>*</b></label>
    <div class="row align-content">
        <div class="col-md-4 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkbox27" name="dificuldade_dieta[]" value="Deixar de comer doces">
            <label class="form-check-label label_check" for="checkbox27">Deixar de comer doces</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkbox28" name="dificuldade_dieta[]" value="Comer verduras, legumes e frutas">
            <label class="form-check-label label_check" for="checkbox28">Comer verduras, legumes e frutas</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkbox29" name="dificuldade_dieta[]" value="Respeitar a quantidade de alimentação">
            <label class="form-check-label label_check" for="checkbox29">Respeitar a quantidade de alimentação</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkbox30" name="dificuldade_dieta[]" value="Respeitar o horário da alimentação">
            <label class="form-check-label label_check" for="checkbox30">Respeitar o horário da alimentação</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkbox31" name="dificuldade_dieta[]" value="Entender lista de substituição de alimentos">
            <label class="form-check-label label_check" for="checkbox31">Entender lista de substituição de alimentos</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkbox31" name="dificuldade_dieta[]" value="Outros">
            <label class="form-check-label label_check" for="checkbox31">Outros</label>
        </div>
    </div>
    <div class="invalid-feedback">
        Selecione pelo menos uma opção
    </div>
</div>


<div class="col-md-12">
    <label for="validationCustomOrientador" class="form-label">Quem é o principal orientador da sua dieta? <b>*</b> </label>
    <div class="row align-content">
        <div class="col-md-4 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkbox32" name="orientador[]" value="Nutricionista">
            <label class="form-check-label label_check" for="checkbox32">Nutricionista</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkbox33" name="orientador[]" value="Médico">
            <label class="form-check-label label_check" for="checkbox33">Médico</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkbox34" name="orientador[]" value="Outro profissional da saúde">
            <label class="form-check-label label_check" for="checkbox34">Outro profissional da saúde</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkbox35" name="orientador[]" value="Leigo">
            <label class="form-check-label label_check" for="checkbox35">Leigo</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkbox36" name="orientador[]" value="Revistas/jornais">
            <label class="form-check-label label_check" for="checkbox36">Revistas/jornais</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkbox37" name="orientador[]" value="Internet">
            <label class="form-check-label label_check" for="checkbox37">Internet</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkbox37" name="orientador[]" value="Internet">
            <label class="form-check-label label_check" for="checkbox37">Outros</label>
        </div>
    </div>
    <div class="invalid-feedback">
        Selecione pelo menos uma opção
    </div>
</div>


{{-- MUDAR FORMA --}}
<div class="col-md-4">
    <label for="validationCustomConsultaNutricionista" class="form-label">Consulta com Nutricionista <b>*</b>  </label>
    <select class="form-select" id="validationCustomConsultaNutricionista" name="consulta_nutricionista" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->consulta_nutricionista) && $rows->consulta_nutricionista == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->consulta_nutricionista) && $rows->consulta_nutricionista == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se realiza consulta com nutricionista
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNum" class="form-label">Frequência de Consulta <b>*</b> </label>
    <input type="number" class="text-center form-control" id="validationCustomFreqConsulta" value="{{ isset($rows->frequencia_nutricionista) ? $rows->frequencia_nutricionista : '' }}" name="frequencia_nutricionista" placeholder="Insira a frequência da consulta com nutricionista">
    <div class="invalid-feedback">
        Insira a frequência da consulta com nutricionista
    </div>
</div>

{{-- MUDAR FORMA --}}

<div class="col-md-4">
    <label for="validationCustomConsomeDieteticos" class="form-label">Consome Produtos Dietéticos <b>*</b></label>
    <select class="form-select" id="validationCustomConsomeDieteticos" name="consome_dieteticos" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->consome_dieteticos) && $rows->consome_dieteticos == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->consome_dieteticos) && $rows->consome_dieteticos == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se consome produtos dietéticos
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomProdutosDieteticos" class="form-label">Se consome produtos dietéticos: quais?  </label>
    <div class="row align-content">
        <div class="col-md-4 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkbox38" name="produtos_dieteticos[]" value="Adoçante">
            <label class="form-check-label label_check" for="checkbox38">Adoçante</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkbox39" name="produtos_dieteticos[]" value="Gelatina">
            <label class="form-check-label label_check" for="checkbox39">Gelatina</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkbox40" name="produtos_dieteticos[]" value="Pudim">
            <label class="form-check-label label_check" for="checkbox40">Pudim</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkbox41" name="produtos_dieteticos[]" value="Sorvete">
            <label class="form-check-label label_check" for="checkbox41">Sorvete</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkbox42" name="produtos_dieteticos[]" value="Refrigerante">
            <label class="form-check-label label_check" for="checkbox42">Refrigerante</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkbox43" name="produtos_dieteticos[]" value="Bolo">
            <label class="form-check-label label_check" for="checkbox43">Bolo</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkbox44" name="produtos_dieteticos[]" value="Outros">
            <label class="form-check-label label_check" for="checkbox44">Outros</label>
        </div>
    </div>
    <div class="invalid-feedback">
        Selecione pelo menos uma opção
    </div>
</div>

