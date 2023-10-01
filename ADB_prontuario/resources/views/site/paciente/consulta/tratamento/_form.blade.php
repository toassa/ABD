<div class="col-md-6" style="margin: 0 auto;">
    <label for="validationCustommedicamento_diabetes" class="form-label">Quais medicamentos para diabetes são utilizados, posologia e onde consegue cada um? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustommedicamento_diabetes" value="{{ isset($dados->medicamento_diabetes) ? $dados->medicamento_diabetes : '' }}" name="medicamento_diabetes" required>
    <div class="invalid-feedback">
        Quais medicamentos para diabetes são utilizados, posologia e onde consegue cada um?
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomSelectDefine2" class="form-label">Faz uso de insulina? <b>*</b> </label>
    <select class="form-select" id="validationCustomSelectDefine" onclick="mostraDados()" onchange="mostraDados()" onfocus="mostraDados()" name="uso_insulina">
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($dados->uso_insulina) && $dados->uso_insulina == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($dados->uso_insulina) && $dados->uso_insulina == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há uso de insulina
    </div>
</div>

<div class="col-md-12" id="input_show">
    <label class="form-label">Quais tipos de insulinas são utilizados no esquema de insulinização atual? <b>*</b></label>
    <div class="row align-content">
        <div class="col-md-6">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkboxInsulinaUltraLenta" name="tipos_insulinas" value="Insulina de ação ultralenta (deglutega ou glargina U300)" {{ isset($dados->tipos_insulinas) && $dados->tipos_insulinas === 'Insulina de ação ultralenta (deglutega ou glargina U300)' ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkboxInsulinaUltraLenta">Insulina de ação ultralenta (deglutega ou glargina U300)</label>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkboxInsulinaLenta" name="tipos_insulinas" value="Insulina de ação lenta (detemir ou glargina U100)" {{ isset($dados->tipos_insulinas) && $dados->tipos_insulinas === 'Insulina de ação lenta (detemir ou glargina U100)' ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkboxInsulinaLenta">Insulina de ação lenta (detemir ou glargina U100)</label>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkboxInsulinaIntermediaria" name="tipos_insulinas" value="Insulina de ação intermediária (NPH)" {{ isset($dados->tipos_insulinas) && $dados->tipos_insulinas === 'Insulina de ação intermediária (NPH)' ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkboxInsulinaIntermediaria">Insulina de ação intermediária (NPH)</label>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkboxInsulinaRapida" name="tipos_insulinas" value="Insulina de ação rápida (regular)" {{ isset($dados->tipos_insulinas) && $dados->tipos_insulinas === 'Insulina de ação rápida (regular)' ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkboxInsulinaRapida">Insulina de ação rápida (regular)</label>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkboxAnalogosRapidos" name="tipos_insulinas" value="Análogos de ação rápida (glulisina, lispro e asparte)" {{ isset($dados->tipos_insulinas) && $dados->tipos_insulinas === 'Análogos de ação rápida (glulisina, lispro e asparte)' ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkboxAnalogosRapidos">Análogos de ação rápida (glulisina, lispro e asparte)</label>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkboxAnalogosUltraRapidos" name="tipos_insulinas" value="Análogos de ação ultrarrápida (asparte ultrarrápida)" {{ isset($dados->tipos_insulinas) && $dados->tipos_insulinas === 'Análogos de ação ultrarrápida (asparte ultrarrápida)' ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkboxAnalogosUltraRapidos">Análogos de ação ultrarrápida (asparte ultrarrápida)</label>
            </div>
        </div>
        
    </div>
    <div class="invalid-feedback">
        Selecione pelo menos um tipo de insulina
    </div>
</div>


<!-- MUDAR FORM -->

<div class="col-md-6" id="input_show_multiple">
    <label for="validationCustomnome_insulina" class="form-label">Qual o nome das insulinas utilizadas? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomnome_insulina" value="{{ isset($dados->nome_insulina) ? $dados->nome_insulina : '' }}" name="nome_insulina">
    <div class="invalid-feedback">
        Insira o nome da insulina 
    </div>
</div>

<div class="col-md-6" id="input_show_multiple2">
    <label for="validationCustomfrequencia_insulina" class="form-label">Qual a frequência das insulinas utilizadas? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomfrequencia_insulina" value="{{ isset($dados->frequencia_insulina) ? $dados->frequencia_insulina : '' }}" name="frequencia_insulina">
    <div class="invalid-feedback">
        Insira a frequência de insulina 
    </div>
</div>

<div class="col-md-6" id="input_show_multiple3">
    <label for="validationCustomdose_insulina" class="form-label">Qual a dose dose das insulinas utilizadas? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomdose_insulina" value="{{ isset($dados->dose_insulina) ? $dados->dose_insulina : '' }}" name="dose_insulina">
    <div class="invalid-feedback">
        Insira a dose de insulina 
    </div>
</div>

<div class="col-md-6" id="input_show_multiple4">
    <label for="validationCustomorigem_insulinas" class="form-label">Onde consegue cada tipo de insulina? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomorigem_insulinas" value="{{ isset($dados->origem_insulinas) ? $dados->origem_insulinas : '' }}" name="origem_insulinas">
    <div class="invalid-feedback">
        Insira a origem das insulinas 
    </div>
</div>

<div class="col-md-6" id="input_show_multiple5">
    <label for="validationCustomUtensilho" class="form-label">Qual o utensilho para aplicação de insulina? <b>*</b></label>
    <select class="form-select" id="validationCustomUtensilho" name="utensilho">
      <option selected disabled value="">Clique para escolher...</option>
      <option {{ isset($dados->utensilho) && $dados->utensilho === 'Caneta' ? 'selected' : '' }} value="Caneta">Caneta</option>
      <option {{ isset($dados->utensilho) && $dados->utensilho === 'Seringa' ? 'selected' : '' }} value="Seringa">Seringa</option>
    </select>
</div>

<div class="col-md-12" id="input_show_multiple6">
    <label for="validationCustomOrigemUtensilio" class="form-label">Como obtém as seringas/canetas para aplicação? <b>*</b></label>
    <div class="row align-content">
        <div class="col-md-4">
            <input type="checkbox" class="form-check-input" id="checkboxHospital" name="origem_utensilho" value="Recebe grátis no hospital" {{ isset($dados->origem_utensilho) && $dados->origem_utensilho === 'Recebe grátis no hospital' ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="checkboxHospital">Recebe grátis no hospital</label>
        </div>
        <div class="col-md-4">
            <input type="checkbox" class="form-check-input" id="checkboxSUS" name="origem_utensilho" value="Recebe grátis na farmácia do SUS" {{ isset($dados->origem_utensilho) && $dados->origem_utensilho === 'Recebe grátis na farmácia do SUS' ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="checkboxSUS">Recebe grátis na farmácia do SUS</label>
        </div>
        
        <div class="col-md-4">
            <input type="checkbox" class="form-check-input" id="checkboxFarmaciaPopular" name="origem_utensilho" value="Compra na farmácia popular" {{ isset($dados->origem_utensilho) && $dados->origem_utensilho === 'Compra na farmácia popular' ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="checkboxFarmaciaPopular">Compra na farmácia popular</label>
        </div>
        
        <div class="col-md-4">
            <input type="checkbox" class="form-check-input" id="checkboxFarmaciaComum" name="origem_utensilho" value="Compra em farmácia comum" {{ isset($dados->origem_utensilho) && $dados->origem_utensilho === 'Compra em farmácia comum' ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="checkboxFarmaciaComum">Compra em farmácia comum</label>
        </div>
        
        <div class="col-md-4">
            <input type="checkbox" class="form-check-input" id="checkboxJudicial" name="origem_utensilho" value="Recebe grátis após mandato judicial" {{ isset($dados->origem_utensilho) && $dados->origem_utensilho === 'Recebe grátis após mandato judicial' ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="checkboxJudicial">Recebe grátis após mandato judicial</label>
        </div>
        
        <div class="col-md-4">
            <input type="checkbox" class="form-check-input" id="checkboxOutros" name="origem_utensilho" value="Outros" {{ isset($dados->origem_utensilho) && $dados->origem_utensilho === 'Outros' ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="checkboxOutros">Outros</label>
        </div>
        
    </div>
</div>

<!-- MUDAR FORM -->
<div class="col-md-6" id="input_show_multiple7">
    <label for="validationCustomSelectDefine2" class="form-label">Reuso de Seringas para Insulina <b>*</b> </label>
    <select class="form-select" id="validationCustomSelectDefine2" name="reuso_seringas_insulina" onclick="mostraDados2()" onchange="mostraDados2()" onfocus="mostraDados2()">
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($dados->reuso_seringas_insulina) && $dados->reuso_seringas_insulina == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($dados->reuso_seringas_insulina) && $dados->reuso_seringas_insulina == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há reuso de seringas para insulina
    </div>
</div>

<div class="col-md-6" id="input_show2">
    <label for="validationCustomquantia_reuso_seringas" class="form-label">Quantidade de Reuso de Seringas <b>*</b> </label>
    <input type="number" class="form-control" id="validationCustomquantia_reuso_seringas" value="{{ isset($dados->quantia_reuso_seringas) ? $dados->quantia_reuso_seringas : '' }}" name="quantia_reuso_seringas">
    <div class="invalid-feedback">
        Insira a quantidade de reuso de seringas 
    </div>
</div>

<div class="col-md-12" id="input_show_multiple8">
    <label for="validationCustomAderencia" class="form-label">Aderência ao Tratamento <b>*</b></label>
    <div class="row align-content">
        <div class="col-md-12 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkboxEsqueceu" name="aderencia[]" value="Alguma vez se esqueceu de aplicar insulina" {{ isset($dados->aderencia) && in_array('Alguma vez se esqueceu de aplicar insulina', json_decode($dados->aderencia)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="checkboxEsqueceu">Alguma vez se esqueceu de aplicar insulina</label>
        </div>
        
        <div class="col-md-12 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkboxDescuidado" name="aderencia[]" value="Às vezes é descuidado quanto aos horários de aplicar insulina" {{ isset($dados->aderencia) && in_array('Às vezes é descuidado quanto aos horários de aplicar insulina', json_decode($dados->aderencia)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="checkboxDescuidado">Às vezes é descuidado quanto aos horários de aplicar insulina</label>
        </div>
        
        <div class="col-md-12">
            <input type="checkbox" class="form-check-input" id="checkboxDeixaBem" name="aderencia" value="Deixa de aplicar insulina alguma vez quando se sente bem" {{ isset($dados->aderencia) && $dados->aderencia === 'Deixa de aplicar insulina alguma vez quando se sente bem' ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="checkboxDeixaBem">Deixa de aplicar insulina alguma vez quando se sente bem</label>
        </div>
        
        <div class="col-md-12">
            <input type="checkbox" class="form-check-input" id="checkboxDeixaMal" name="aderencia" value="Deixa de aplicar insulina alguma vez quando se sente mal" {{ isset($dados->aderencia) && $dados->aderencia === 'Deixa de aplicar insulina alguma vez quando se sente mal' ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="checkboxDeixaMal">Deixa de aplicar insulina alguma vez quando se sente mal</label>
        </div>
        
        <div class="col-md-12">
            <input type="checkbox" class="form-check-input" id="checkboxNuncaEsqueci" name="aderencia" value="Nunca esqueci de aplicar" {{ isset($dados->aderencia) && $dados->aderencia === 'Nunca esqueci de aplicar' ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="checkboxNuncaEsqueci">Nunca esqueci de aplicar</label>
        </div>
        
    </div>
</div>
