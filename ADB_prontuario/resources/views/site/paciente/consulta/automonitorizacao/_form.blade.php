{{-- automonitorizacao_glicemias --}}


{{-- MUDAR FORMA --}}
<div class="col-md-6">
    <label for="validationCustomSelectDefine" class="form-label">Faz auto-monitorização da glicemia em casa no momento? <b>*</b> </label>
    <select class="form-select" id="validationCustomSelectDefine" name="realiza_automonitorizacao" required>
        <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->realiza_automonitorizacao) && $rows->realiza_automonitorizacao == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->realiza_automonitorizacao) && $rows->realiza_automonitorizacao == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se realiza automonitorização
    </div>
</div>

<div class="col-md-6 input-translate" id="input_show_multiple4">
    <label for="validationCustomLetra" class="form-label">Quantas medições são feitas diariamente? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->frequencia_medicoes) ? $rows->frequencia_medicoes : '' }}" name="frequencia_medicoes" placeholder="Digite a frequência de medições" required>
    <div class="invalid-feedback">
        Insira a frequência de medições diárias
    </div>
</div>

<div class="col-md-12" id="input_show_multiple3">
    <label for="validationCustomLetra" class="form-label">Como obtém as fitas para monitorização? <b>*</b></label>
    <div class="row align-content">
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="hospital" name="origem_fitas[]" value="hospital">
            <label class="form-check-label label_check" for="hospital">Recebe grátis no hospital</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="farmacia_sus" name="origem_fitas[]" value="farmacia_sus">
            <label class="form-check-label label_check" for="farmacia_sus">Recebe grátis na farmácia do SUS</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="farmacia_popular" name="origem_fitas[]" value="farmacia_popular">
            <label class="form-check-label label_check" for="farmacia_popular">Compra na farmácia popular</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="farmacia_comum" name="origem_fitas[]" value="farmacia_comum">
            <label class="form-check-label label_check" for="farmacia_comum">Compra em farmácia comum</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="mandato_judicial" name="origem_fitas[]" value="mandato_judicial">
            <label class="form-check-label label_check" for="mandato_judicial">Recebe grátis após mandato judicial</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="outros" name="origem_fitas[]" value="outros">
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
        <a href="#" id="btn_aparece" class="span-dialog" onclick="show_dialog_info()">
            <span class="material-symbols-outlined show-dialog">
                info
            </span>
        </a>
        <dialog class="square-content square-content--confirma-excluir"  id="dialog_info">
            <div class="p-dialog">
                aadasd
            </div>
            <div class="row buttons-dialog">
                dfddfsf
            </div>
        </dialog>
    </label>
    <select class="form-select" id="validationCustomContagemCarboidratos" name="contagem_carboidratos" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Sim" {{ isset($rows->contagem_carboidratos) && $rows->contagem_carboidratos === 'Sim' ? 'selected' : '' }}>Sim</option>
        <option value="Não" {{ isset($rows->contagem_carboidratos) && $rows->contagem_carboidratos === 'Não' ? 'selected' : '' }}>Não</option>
        <option value="Não sabe" {{ isset($rows->contagem_carboidratos) && $rows->contagem_carboidratos === 'Não sabe' ? 'selected' : '' }}>Não sabe</option>
    </select>
    <div class="invalid-feedback">
        Selecione a contagem de carboidratos
    </div>
</div>
