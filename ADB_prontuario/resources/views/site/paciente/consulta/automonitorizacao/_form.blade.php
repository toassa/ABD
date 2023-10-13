{{-- automonitorizacao_glicemias --}}

<div class="col-md-6">
    <label for="validationCustomSelectDefine" class="form-label">Faz auto-monitorização da glicemia em casa no momento? <b>*</b> </label>
    <select class="form-select" id="validationCustomSelectDefine" onclick="mostraDados()" onchange="mostraDados()" onfocus="mostraDados()" name="realiza_automonitorizacao" required>
        <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($dados->realiza_automonitorizacao) && $dados->realiza_automonitorizacao == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($dados->realiza_automonitorizacao) && $dados->realiza_automonitorizacao == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se realiza automonitorização
    </div>
</div>

<div class="col-md-6 input-translate" id="input_show">
    <label for="validationCustomfrequenciamedicoes" class="form-label">Quantas medições são feitas diariamente? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomfrequenciamedicoes" value="{{ isset($dados->frequencia_medicoes) ? $dados->frequencia_medicoes : '' }}" name="frequencia_medicoes" placeholder="Digite a frequência de medições">
    <div class="invalid-feedback">
        Insira a frequência de medições diárias
    </div>
</div>

<div class="col-md-12" id="input_show_multiple">
    <label for="validationCustomLetra" class="form-label">Como obtém as fitas para monitorização? <b>*</b></label>
    <div class="row align-content">
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="hidden" id="hospital" name="origem_fitas[]" value="null">
            <input class="form-check-input" type="checkbox" id="hospital" name="origem_fitas[]" value="hospital" {{ isset($dados->origem_fitas) && in_array('hospital', json_decode($dados->origem_fitas)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="hospital">Recebe grátis no hospital</label>
        </div>
        
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="farmacia_sus" name="origem_fitas[]" value="farmacia_sus" {{ isset($dados->origem_fitas) && in_array('farmacia_sus', json_decode($dados->origem_fitas)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="farmacia_sus">Recebe grátis na farmácia do SUS</label>
        </div>
        
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="farmacia_popular" name="origem_fitas[]" value="farmacia_popular" {{ isset($dados->origem_fitas) && in_array('farmacia_popular', json_decode($dados->origem_fitas)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="farmacia_popular">Compra na farmácia popular</label>
        </div>
        
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="farmacia_comum" name="origem_fitas[]" value="farmacia_comum" {{ isset($dados->origem_fitas) && in_array('farmacia_comum', json_decode($dados->origem_fitas)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="farmacia_comum">Compra em farmácia comum</label>
        </div>
        
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="mandato_judicial" name="origem_fitas[]" value="mandato_judicial" {{ isset($dados->origem_fitas) && in_array('mandato_judicial', json_decode($dados->origem_fitas)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="mandato_judicial">Recebe grátis após mandato judicial</label>
        </div>
        
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="outros" name="origem_fitas[]" value="outros" {{ isset($dados->origem_fitas) && in_array('outros', json_decode($dados->origem_fitas)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="outros">Outros…</label>
        </div>        
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>
    </div>
</div>


<div class="col-md-5" id="input_show_multiple2">
    <label for="validationCustomContagemCarboidratos" class="form-label">Faz contagem de carboidratos? 
        <b>*</b>
        <div class="popup" onclick="open_popup()">
            <span class="material-symbols-outlined popup-icon">
                info
            </span>
            <span class="popuptext" id="label_popup">Método pelo qual a dosagem de insulina bolus a ser aplicada é determinada por: aferição da glicemia capilar e estimativa de calorias ingeridas por refeição.</span>
        </div>
    </label>
    <select class="form-select" id="validationCustomContagemCarboidratos" name="contagem_carboidratos">
        <option selected disabled value="">Clique para escolher...</option>
        <option selected hidden value="null">Clique para escolher...</option>
        <option value="Sim" {{ isset($dados->contagem_carboidratos) && $dados->contagem_carboidratos === 'Sim' ? 'selected' : '' }}>Sim</option>
        <option value="Não" {{ isset($dados->contagem_carboidratos) && $dados->contagem_carboidratos === 'Não' ? 'selected' : '' }}>Não</option>
        <option value="Não sabe" {{ isset($dados->contagem_carboidratos) && $dados->contagem_carboidratos === 'Não sabe' ? 'selected' : '' }}>Não sabe</option>
    </select>
    <div class="invalid-feedback">
        Selecione a contagem de carboidratos
    </div>
</div>
