<div class="row g-3 needs-validation page page1">
    <div class="col-md-3">
        <label for="validationCustomNum" class="form-label">Ano ao diagnóstico <b>*</b> </label>
        <input type="number" class="form-control" id="validationCustomNum" value="{{ isset($dados->ano) ? $dados->ano : '' }}" name="ano" placeholder="Ano que foi diagnosticado com diabetes" required>
        <div class="invalid-feedback">
            Insira o ano do diagnóstico
        </div>
    </div>

    <div class="col-md-3">
        <label for="validationCustomNum" class="form-label">Idade ao diagnóstico <b>*</b> </label>
        <input type="number" class="form-control" id="validationCustomNum" value="{{ isset($dadoas->idade) ? $dados->idade : '' }}" name="idade" placeholder="Idade que foi diagnosticado com diabetes" required>
        <div class="invalid-feedback">
            Insira a idade do diagnóstico
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
        <select class="form-select" id="validationCustomSelectDefine" name="fator_emocional" required >
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
        <select class="form-select" id="validationCustomSelectDefine2" name="infeccoes_seis_meses" required >
            <option selected disabled value="">Clique para escolher...</option>
            <option value="1" {{ isset($dados->infeccoes_seis_meses) && $dados->infeccoes_seis_meses == 1 ? 'selected' : '' }}>Sim</option>
            <option value="0" {{ isset($dados->infeccoes_seis_meses) && $dados->infeccoes_seis_meses == 0 ? 'selected' : '' }}>Não</option>
        </select>
        <div class="invalid-feedback">
            Selecione se teve infecções nos últimos seis meses
        </div>
    </div>

    {{-- MUDAR INPUT SHOW --}}
    <div class="col-md-6" id="input_show">
        <label for="validationCustomLetra" class="form-label">Descreva o(s) fator(es) emocional(is) <b>*</b> </label>
        <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($dados->qual_fator_emocional) ? $dados->qual_fator_emocional : '' }}" name="qual_fator_emocional" required>
        <div class="invalid-feedback">
            Insira qual foi o fator emocional 
        </div>
    </div>


    <div class="col-md-6" id="input_show2">
        <label for="validationCustomLetra" class="form-label">Quais Infecções? <b>*</b> </label>
        <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($dados->quais_infeccoes) ? $dados->quais_infeccoes : '' }}" name="quais_infeccoes" required>
        <div class="invalid-feedback">
            Insira quais infecções teve 
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustomNum" class="form-label">Tempo decorrido entre o início dos sintomas e o diagnóstico? <b>*</b> </label>
        <input type="number" class="form-control" id="validationCustomNum" value="{{ isset($dados->periodo_sintomas_diagnostico) ? $dados->periodo_sintomas_diagnostico : '' }}" name="periodo_sintomas_diagnostico" placeholder="Digite o período em meses" required>
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
                <input type="checkbox" class="form-check-input" id="validationFormCheck1" name="finalidade_consulta" value="receber fitas de glicosimetro ou insulina" required>
                <label class="form-check-label label_check" for="validationFormCheck1">Receber fitas de glicosímetro ou insulina</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox1" name="sintomas[]" value="Poliúria">
                <label class="form-check-label label_check" for="checkbox1">Poliúria</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox2" name="sintomas[]" value="Polidipsia">
                <label class="form-check-label label_check" for="checkbox2">Polidipsia</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox3" name="sintomas[]" value="Polifagia">
                <label class="form-check-label label_check" for="checkbox3">Polifagia</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox4" name="sintomas[]" value="Perda de peso involuntária">
                <label class="form-check-label label_check" for="checkbox4">Perda de peso involuntária</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox5" name="sintomas[]" value="Infecções de repetição">
                <label class="form-check-label label_check" for="checkbox5">Infecções de repetição</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox6" name="sintomas[]" value="Enurese noturna/urinar na cama">
                <label class="form-check-label label_check" for="checkbox6">Enurese noturna/urinar na cama</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox7" name="sintomas[]" value="Parestesia/formigamento">
                <label class="form-check-label label_check" for="checkbox7">Parestesia/formigamento</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox8" name="sintomas[]" value="Prurido/coceira">
                <label class="form-check-label label_check" for="checkbox8">Prurido/coceira</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox9" name="sintomas[]" value="Falta de apetite">
                <label class="form-check-label label_check" for="checkbox9">Falta de apetite</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox10" name="sintomas[]" value="Dificuldade de enxergar/baixa acuidade visual">
                <label class="form-check-label label_check" for="checkbox10">Dificuldade de enxergar/baixa acuidade visual</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox11" name="sintomas[]" value="Anorexia/falta de apetite">
                <label class="form-check-label label_check" for="checkbox11">Anorexia/falta de apetite</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox12" name="sintomas[]" value="Astenia/cansaço">
                <label class="form-check-label label_check" for="checkbox12">Astenia/cansaço</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox13" name="sintomas[]" value="Sonolência">
                <label class="form-check-label label_check" for="checkbox13">Sonolência</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox14" name="sintomas[]" value="Outros">
                <label class="form-check-label label_check" for="checkbox14">Outros</label>
            </div>
        </div>
    </div>
</div>