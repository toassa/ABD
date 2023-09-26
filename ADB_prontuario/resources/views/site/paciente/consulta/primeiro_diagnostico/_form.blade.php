<div class="row g-3 needs-validation page page1">
    <div class="col-md-3">
        <label for="validationCustomano" class="form-label">Ano ao diagnóstico <b>*</b> </label>
        <input type="number" class="form-control" id="validationCustomano" value="{{ isset($dados->ano) ? $dados->ano : '' }}" name="ano" placeholder="Ano que foi diagnosticado com diabetes" required>
        <div class="invalid-feedback">
            Insira o ano do diagnóstico
        </div>
    </div>

    <div class="col-md-3">
        <label for="validationCustomidade" class="form-label">Idade ao diagnóstico <b>*</b> </label>
        <input type="number" class="form-control" id="validationCustomidade" value="{{ isset($dados->idade_diagnostico) ? $dados->idade_diagnostico : '' }}" name="idade_diagnostico" placeholder="Idade que foi diagnosticado com diabetes" required>
        <div class="invalid-feedback">
            Insira a idade_diagnostico ao diagnóstico
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustomComoFoiFeito" class="form-label">Como Foi Feito o Diagnóstico <b>*</b> </label>
        <select class="form-select" id="validationCustomComoFoiFeito" name="como_foi_feito" required >
            <option selected disabled value="">Clique para escolher...</option>
            <option value="Internação com cetoacidose diabética" {{ isset($dados->como_foi_feito) && $dados->como_foi_feito === 'Internação com cetoacidose diabética' ? 'selected' : '' }}>Internação com cetoacidose diabética</option>
            <option value="Internação sem cetoacidose diabética" {{ isset($dados->como_foi_feito) && $dados->como_foi_feito === 'Internação sem cetoacidose diabética' ? 'selected' : '' }}>Internação sem cetoacidose diabética</option>
            <option value="Glicemia de jejum" {{ isset($dados->como_foi_feito) && $dados->como_foi_feito === 'Glicemia de jejum' ? 'selected' : '' }}>Glicemia de jejum</option>
            <option value="Curva glicêmica" {{ isset($dados->como_foi_feito) && $dados->como_foi_feito === 'Curva glicêmica' ? 'selected' : '' }}>Curva glicêmica</option>
            <option value="Glicemia ao acaso" {{ isset($dados->como_foi_feito) && $dados->como_foi_feito === 'Glicemia ao acaso' ? 'selected' : '' }}>Glicemia ao acaso</option>
            <option value="Outros" {{ isset($dados->como_foi_feito) && $dados->como_foi_feito === 'Outros' ? 'selected' : '' }}>Outros</option>
        </select>
        <div class="invalid-feedback">
            Selecione como foi feito o diagnóstico
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustomSelectDefine" class="form-label">O paciente acredita que fatores emocionais\psicológicos contribuiram para início da doença? <b>*</b> </label>
        <select class="form-select" id="validationCustomSelectDefine" onclick="mostraDados()" onchange="mostraDados()" onfocus="mostraDados()" name="fator_emocional" required >
            <option selected disabled value="">Clique para escolher...</option>
            <option value="1" {{ isset($dados->fator_emocional) && $dados->fator_emocional == 1 ? 'selected' : '' }}>Sim</option>
            <option value="0" {{ isset($dados->fator_emocional) && $dados->fator_emocional == 0 ? 'selected' : '' }}>Não</option>
        </select>
        <div class="invalid-feedback">
            Selecione se houve fator emocional
        </div>
    </div>
    
    {{-- MUDAR FORMA --}}
    <div class="col-md-6">
        <label for="validationCustomSelectDefine2" class="form-label">O paciente apresentou alguma infecção nos últimos seis meses? <b>*</b> </label>
        <select class="form-select" id="validationCustomSelectDefine2" onclick="mostraDados2()" onchange="mostraDados2()" onfocus="mostraDados2()" name="infeccoes_seis_meses" required >
            <option selected disabled value="">Clique para escolher...</option>
            <option value="1" {{ isset($dados->infeccoes_seis_meses) && $dados->infeccoes_seis_meses == 1 ? 'selected' : '' }}>Sim</option>
            <option value="0" {{ isset($dados->infeccoes_seis_meses) && $dados->infeccoes_seis_meses == 0 ? 'selected' : '' }}>Não</option>
        </select>
        <div class="invalid-feedback">
            Selecione se teve infecções nos últimos seis meses
        </div>
    </div>
 
       {{-- MUDAR INPUT SHOW --}}
    <div class="col-md-6 input-translate" id="input_show">
        <label for="validationCustomqual_fator_emocional" class="form-label">Descreva o(s) fator(es) emocional(is) <b>*</b> </label>
        <input type="text" class="form-control" id="validationCustomqual_fator_emocional" value="{{ isset($dados->qual_fator_emocional) ? $dados->qual_fator_emocional : '' }}" name="qual_fator_emocional">
        <div class="invalid-feedback">
            Insira qual foi o fator emocional 
        </div>
    </div>


    <div class="col-md-6 input-translate" id="input_show2">
        <label for="validationCustomquais_infeccoes" class="form-label">Quais Infecções? <b>*</b> </label>
        <input type="text" class="form-control" id="validationCustomquais_infeccoes" value="{{ isset($dados->quais_infeccoes) ? $dados->quais_infeccoes : '' }}" name="quais_infeccoes">
        <div class="invalid-feedback">
            Insira quais infecções teve 
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustomperiodo_sintomas_diagnostico" class="form-label">Quantos meses decorridos entre o início dos sintomas e o diagnóstico? <b>*</b> </label>
        <input type="number" class="form-control" id="validationCustomperiodo_sintomas_diagnostico" value="{{ isset($dados->periodo_sintomas_diagnostico) ? $dados->periodo_sintomas_diagnostico : '' }}" name="periodo_sintomas_diagnostico" placeholder="Digite o período em meses" required>
        <div class="invalid-feedback">
            Insira o período entre sintomas e diagnóstico
        </div>
    </div>
</div>

<div class="row g-3 needs-validation page page2">
    {{-- MUDAR VALIDACAO --}}
    <div class="col-md-12">
        <label for="validationCustomLetra" class="form-label">Selecione os sintomas ao diagnóstico <b>*</b></label>
        <div class="row align-content">
            <div class="col-md-4 form-check mb-3">
                <input class="form-check-input" type="checkbox" id="validationFormCheck1" name="sintomas" value="Receber fitas de glicosímetro ou insulina" {{ isset($dados->sintomas) && in_array('Receber fitas de glicosímetro ou insulina', json_decode($dados->sintomas)) ? 'checked' : '' }} required>
                <label class="form-check-label label_check" for="validationFormCheck1">Receber fitas de glicosímetro ou insulina</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input class="form-check-input" type="checkbox" id="checkbox1" name="sintomas" value="Poliúria" {{ isset($dados->sintomas) && in_array('Poliúria', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox1">Poliúria</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input class="form-check-input" type="checkbox" id="checkbox2" name="sintomas" value="Polidipsia" {{ isset($dados->sintomas) && in_array('Polidipsia', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox2">Polidipsia</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input class="form-check-input" type="checkbox" id="checkbox3" name="sintomas" value="Polifagia" {{ isset($dados->sintomas) && in_array('Polifagia', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox3">Polifagia</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input class="form-check-input" type="checkbox" id="checkbox4" name="sintomas" value="Perda de peso involuntária" {{ isset($dados->sintomas) && in_array('Perda de peso involuntária', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox4">Perda de peso involuntária</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input class="form-check-input" type="checkbox" id="checkbox5" name="sintomas" value="Infecções de repetição" {{ isset($dados->sintomas) && in_array('Infecções de repetição', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox5">Infecções de repetição</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input class="form-check-input" type="checkbox" id="checkbox6" name="sintomas" value="Enurese noturna/urinar na cama" {{ isset($dados->sintomas) && in_array('Enurese noturna/urinar na cama', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox6">Enurese noturna/urinar na cama</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input class="form-check-input" type="checkbox" id="checkbox7" name="sintomas" value="Parestesia/formigamento" {{ isset($dados->sintomas) && in_array('Parestesia/formigamento', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox7">Parestesia/formigamento</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input class="form-check-input" type="checkbox" id="checkbox8" name="sintomas" value="Prurido/coceira" {{ isset($dados->sintomas) && in_array('Prurido/coceira', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox8">Prurido/coceira</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input class="form-check-input" type="checkbox" id="checkbox9" name="sintomas" value="Falta de apetite" {{ isset($dados->sintomas) && in_array('Falta de apetite', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox9">Falta de apetite</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input class="form-check-input" type="checkbox" id="checkbox10" name="sintomas" value="Dificuldade de enxergar/baixa acuidade visual" {{ isset($dados->sintomas) && in_array('Dificuldade de enxergar/baixa acuidade visual', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox10">Dificuldade de enxergar/baixa acuidade visual</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input class="form-check-input" type="checkbox" id="checkbox11" name="sintomas" value="Anorexia/falta de apetite" {{ isset($dados->sintomas) && in_array('Anorexia/falta de apetite', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox11">Anorexia/falta de apetite</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input class="form-check-input" type="checkbox" id="checkbox12" name="sintomas" value="Astenia/cansaço" {{ isset($dados->sintomas) && in_array('Astenia/cansaço', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox12">Astenia/cansaço</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input class="form-check-input" type="checkbox" id="checkbox13" name="sintomas" value="Sonolência" {{ isset($dados->sintomas) && in_array('Sonolência', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox13">Sonolência</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input class="form-check-input" type="checkbox" id="checkbox14" name="sintomas" value="Outros" {{ isset($dados->sintomas) && in_array('Outros', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox14">Outros</label>
            </div>
        </div>
    </div>
</div>