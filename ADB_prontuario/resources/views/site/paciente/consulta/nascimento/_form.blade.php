
<div class="col-md-6">
    <label for="validationCustomTipoParto" class="form-label">Nasceu de parto normal ou cesária? <b>*</b> </label>
    <select class="form-select" id="validationCustomTipoParto" name="tipo_parto" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Normal" {{ isset($dados->tipo_parto) && $dados->tipo_parto === 'Normal' ? 'selected' : '' }}>Normal</option>
        <option value="Cesárea" {{ isset($dados->tipo_parto) && $dados->tipo_parto === 'Cesárea' ? 'selected' : '' }}>Cesárea</option>
        <option value="Não sabe" {{ isset($dados->tipo_parto) && $dados->tipo_parto === 'Não sabe' ? 'selected' : '' }}>Não sabe</option>
    </select>
    <div class="invalid-feedback">
        Selecione o tipo de parto
    </div>
</div>


<div class="col-md-6">
    <label for="validationCustomOrdemFilho" class="form-label">Qual a ordem do nascimento? <b>*</b> </label>
    <select class="form-select" id="validationCustomOrdemFilho" name="ordem" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Primeiro filho" {{ isset($dados->ordem) && $dados->ordem === 'Primeiro filho' ? 'selected' : '' }}>Primeiro filho</option>
        <option value="Segundo filho" {{ isset($dados->ordem) && $dados->ordem === 'Segundo filho' ? 'selected' : '' }}>Segundo filho</option>
        <option value="Terceiro filho" {{ isset($dados->ordem) && $dados->ordem === 'Terceiro filho' ? 'selected' : '' }}>Terceiro filho</option>
        <option value="Quarto filho" {{ isset($dados->ordem) && $dados->ordem === 'Quarto filho' ? 'selected' : '' }}>Quarto filho</option>
        <option value="Quinto filho" {{ isset($dados->ordem) && $dados->ordem === 'Quinto filho' ? 'selected' : '' }}>Quinto filho</option>
        <option value="Sexto filho" {{ isset($dados->ordem) && $dados->ordem === 'Sexto filho' ? 'selected' : '' }}>Sexto filho</option>
        <option value="Sétimo filho" {{ isset($dados->ordem) && $dados->ordem === 'Sétimo filho' ? 'selected' : '' }}>Sétimo filho</option>
        <option value="Oitavo filho" {{ isset($dados->ordem) && $dados->ordem === 'Oitavo filho' ? 'selected' : '' }}>Oitavo filho</option>
        <option value="Nono filho" {{ isset($dados->ordem) && $dados->ordem === 'Nono filho' ? 'selected' : '' }}>Nono filho</option>
        <option value="Décimo filho ou maior" {{ isset($dados->ordem) && $dados->ordem === 'Décimo filho ou maior' ? 'selected' : '' }}>Décimo filho ou maior</option>
    </select>
    <div class="invalid-feedback">
        Selecione a ordem do filho
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomPesoBebe" class="form-label">Peso do Bebê <b>*</b> </label>
    <select class="form-select" id="validationCustomPesoBebe" name="peso" required>
        <option selected disabled value="">Clique para escolher...</option>
        <option value="<2Kg" {{ isset($dados->peso) && $dados->peso === '<2Kg' ? 'selected' : '' }}> < 2Kg </option>
        <option value="2,1Kg - 2,5Kg" {{ isset($dados->peso) && $dados->peso === '2,1Kg - 2,5Kg' ? 'selected' : '' }}>2,1Kg - 2,5Kg</option>
        <option value="2,6Kg - 3 Kg" {{ isset($dados->peso) && $dados->peso === '2,6Kg - 3 Kg' ? 'selected' : '' }}>2,6Kg - 3 Kg</option>
        <option value="3,1Kg - 3,5Kg" {{ isset($dados->peso) && $dados->peso === '3,1Kg - 3,5Kg' ? 'selected' : '' }}>3,1Kg - 3,5Kg</option>
        <option value="3,6Kg - 4Kg" {{ isset($dados->peso) && $dados->peso === '3,6Kg - 4Kg' ? 'selected' : '' }}>3,6Kg - 4Kg</option>
        <option value="> 4Kg" {{ isset($dados->peso) && $dados->peso === '> 4Kg' ? 'selected' : '' }}>> 4Kg</option>
        <option value="Não sabe" {{ isset($dados->peso) && $dados->peso === 'Não sabe' ? 'selected' : '' }}>Não sabe</option>
    </select>
    <div class="invalid-feedback">
        Selecione o peso do bebê
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomSelectDefine" class="form-label">Teve amamentação exclusiva com leite materno? <b>*</b> </label>
    <select class="form-select" id="validationCustomSelectDefine" name="amamentacao_exclusiva" onclick="mostraDados()" required required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($dados->amamentacao_exclusiva) && $dados->amamentacao_exclusiva == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($dados->amamentacao_exclusiva) && $dados->amamentacao_exclusiva == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve amamentação exclusiva
    </div>
</div>

<div class="col-md-6" id="input_show">
    <label for="validationCustomtempo_amamentacao_exclusiva" class="form-label">Por quanto tempo teve amamentação exclusiva com leite materno? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomtempo_amamentacao_exclusiva" value="{{ isset($dados->tempo_amamentacao_exclusiva) ? $dados->tempo_amamentacao_exclusiva : '' }}" name="tempo_amamentacao_exclusiva" placeholder="Insira o tempo de amamentação exclusiva">
    <div class="invalid-feedback">
        Insira o tempo de amamentação exclusiva
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomVacinacao" class="form-label">O paciente completou esquema de vacinação do Ministério da Saúde?
         <b>*</b>
         <div class="popup" onclick="open_popup()">
            <span class="material-symbols-outlined popup-icon">
                info
            </span>
            <span class="popuptext" id="label_popup">
                Se for criança e estiver com vacinação atualizada, preencher "sim"	
            </span>
        </div>
    </label>
    <select class="form-select" id="validationCustomVacinacao" name="vacinacao" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Sim" {{ isset($dados->vacinacao) && $dados->vacinacao === 'Sim' ? 'selected' : '' }}>Sim</option>
        <option value="Não" {{ isset($dados->vacinacao) && $dados->vacinacao === 'Não' ? 'selected' : '' }}>Não</option>
        <option value="Não sei" {{ isset($dados->vacinacao) && $dados->vacinacao === 'Não sei' ? 'selected' : '' }}>Não sei</option>
    </select>
    <div class="invalid-feedback">
        Selecione a vacinação
    </div>
</div>
