<!-- diagnosticos -->

<div class="row g-3 needs-validation page page2">
    {{-- MUDAR VALIDACAO --}}
    <div class="col-md-12 ">
        <label for="validationCustomLetra" class="form-label">Selecione os principais sintomas que apresenta agora <b>*</b></label>
        <div class="row align-content">
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox15" name="sintomas[]" value="Polaciúria" {{ isset($dados->sintomas) && in_array('Polaciúria', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox15">Polaciúria</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox16" name="sintomas[]" value="Retenção urinária" {{ isset($dados->sintomas) && in_array('Retenção urinária', json_decode(($dados->sintomas))) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox16">Retenção urinária</label>
            </div>
            
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox17" name="sintomas[]" value="Dificuldade de urinar" {{ isset($dados->sintomas) && in_array('Dificuldade de urinar', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox17">Dificuldade de urinar</label>
            </div>
            
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox18" name="sintomas[]" value="Urgência miccional" {{ isset($dados->sintomas) && in_array('Urgência miccional', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox18">Urgência miccional</label>
            </div>
            
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox19" name="sintomas[]" value="Dificuldade para ereção/secura vaginal" {{ isset($dados->sintomas) && in_array('Dificuldade para ereção/secura vaginal', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox19">Dificuldade para ereção/secura vaginal</label>
            </div>
            
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox20" name="sintomas[]" value="Diarreia frequente" {{ isset($dados->sintomas) && in_array('Diarreia frequente', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox20">Diarreia frequente</label>
            </div>
            
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox21" name="sintomas[]" value="Constipação (mais de 3 dias sem evacuar)" {{ isset($dados->sintomas) && in_array('Constipação (mais de 3 dias sem evacuar)', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox21">Constipação (mais de 3 dias sem evacuar)</label>
            </div>
            
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox22" name="sintomas[]" value="Perda de fezes sem sentir" {{ isset($dados->sintomas) && in_array('Perda de fezes sem sentir', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox22">Perda de fezes sem sentir</label>
            </div>
            
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox23" name="sintomas[]" value="Sente enjoo após alimentação" {{ isset($dados->sintomas) && in_array('Sente enjoo após alimentação', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox23">Sente enjoo após alimentação</label>
            </div>
            
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox24" name="sintomas[]" value="Empachamento pós comer" {{ isset($dados->sintomas) && in_array('Empachamento pós comer', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox24">Empachamento pós comer</label>
            </div>
            
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox25" name="sintomas[]" value="Tontura ou desmaio ao levantar" {{ isset($dados->sintomas) && in_array('Tontura ou desmaio ao levantar', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox25">Tontura ou desmaio ao levantar</label>
            </div>
            
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox26" name="sintomas[]" value="Outros" {{ isset($dados->sintomas) && in_array('Outros', json_decode($dados->sintomas)) ? 'checked' : '' }}>
                <label class="form-check-label label_check" for="checkbox26">Outros</label>
            </div>            
        </div>
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomLibidoAlterado" class="form-label">Libido (vontade de ter relações sexuais) está alterada? <b>*</b> </label>
    <select class="form-select" id="validationCustomLibidoAlterado" name="libido_alterado" required>
        <option selected disabled value="">Clique para escolher...</option>
        <option value="Sim" {{ isset($dados->libido_alterado) && $dados->libido_alterado === 'Sim' ? 'selected' : '' }}>Sim</option>
        <option value="Não" {{ isset($dados->libido_alterado) && $dados->libido_alterado === 'Não' ? 'selected' : '' }}>Não</option>
        <option value="Não sabe ou não quis responder" {{ isset($dados->libido_alterado) && $dados->libido_alterado === 'Não sabe ou não quis responder' ? 'selected' : '' }}>Não sabe ou não quis responder</option>
        <option value="Não se aplica" {{ isset($dados->libido_alterado) && $dados->libido_alterado === 'Não se aplica' ? 'selected' : '' }}>Não se aplica (para crianças)</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve alteração na libido
    </div>
</div>

