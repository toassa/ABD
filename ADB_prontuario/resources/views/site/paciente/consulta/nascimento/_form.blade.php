{{-- MUDAR FORMA --}}
<div class="col-md-4 textinho">
    <label for="validationCustomAmamentacao" class="form-label">Amamentação Exclusiva  <b>*</b> </label>
    <select class="form-select" id="validationCustomAmamentacao" name="amamentacao_exclusiva" required required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->amamentacao_exclusiva) && $rows->amamentacao_exclusiva == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->amamentacao_exclusiva) && $rows->amamentacao_exclusiva == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve amamentação exclusiva
    </div>
</div>

<div class="col-md-4 textinho">
    <label for="validationCustomLetra" class="form-label">Tempo de Amamentação Exclusiva <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->tempo_amamentacao_exclusiva) ? $rows->tempo_amamentacao_exclusiva : '' }}" name="tempo_amamentacao_exclusiva" placeholder="Insira o tempo de amamentação exclusiva" required>
    <div class="invalid-feedback">
        Insira o tempo de amamentação exclusiva
    </div>
</div>

<div class="col-md-4 textinho">
    <label for="validationCustomOrdemFilho" class="form-label">Ordem do Filho <b>*</b> </label>
    <select class="form-select" id="validationCustomOrdemFilho" name="ordem" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Primeiro filho" {{ isset($rows->ordem) && $rows->ordem === 'Primeiro filho' ? 'selected' : '' }}>Primeiro filho</option>
        <option value="Segundo filho" {{ isset($rows->ordem) && $rows->ordem === 'Segundo filho' ? 'selected' : '' }}>Segundo filho</option>
        <option value="Terceiro filho" {{ isset($rows->ordem) && $rows->ordem === 'Terceiro filho' ? 'selected' : '' }}>Terceiro filho</option>
        <option value="Quarto filho" {{ isset($rows->ordem) && $rows->ordem === 'Quarto filho' ? 'selected' : '' }}>Quarto filho</option>
        <option value="Quinto filho" {{ isset($rows->ordem) && $rows->ordem === 'Quinto filho' ? 'selected' : '' }}>Quinto filho</option>
        <option value="Sexto filho" {{ isset($rows->ordem) && $rows->ordem === 'Sexto filho' ? 'selected' : '' }}>Sexto filho</option>
        <option value="Sétimo filho" {{ isset($rows->ordem) && $rows->ordem === 'Sétimo filho' ? 'selected' : '' }}>Sétimo filho</option>
        <option value="Oitavo filho" {{ isset($rows->ordem) && $rows->ordem === 'Oitavo filho' ? 'selected' : '' }}>Oitavo filho</option>
        <option value="Nono filho" {{ isset($rows->ordem) && $rows->ordem === 'Nono filho' ? 'selected' : '' }}>Nono filho</option>
        <option value="Décimo filho ou maior" {{ isset($rows->ordem) && $rows->ordem === 'Décimo filho ou maior' ? 'selected' : '' }}>Décimo filho ou maior</option>
    </select>
    <div class="invalid-feedback">
        Selecione a ordem do filho
    </div>
</div>

<div class="col-md-4 textinho">
    <label for="validationCustomTipoParto" class="form-label">Tipo de Parto <b>*</b> </label>
    <select class="form-select" id="validationCustomTipoParto" name="tipo_parto" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Normal" {{ isset($rows->tipo_parto) && $rows->tipo_parto === 'Normal' ? 'selected' : '' }}>Normal</option>
        <option value="Cesárea" {{ isset($rows->tipo_parto) && $rows->tipo_parto === 'Cesárea' ? 'selected' : '' }}>Cesárea</option>
        <option value="Não sabe" {{ isset($rows->tipo_parto) && $rows->tipo_parto === 'Não sabe' ? 'selected' : '' }}>Não sabe</option>
    </select>
    <div class="invalid-feedback">
        Selecione o tipo de parto
    </div>
</div>

<div class="col-md-4 textinho">
    <label for="validationCustomPesoBebe" class="form-label">Peso do Bebê <b>*</b> </label>
    <select class="form-select" id="validationCustomPesoBebe" name="peso" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="<2Kg" {{ isset($rows->peso) && $rows->peso === '<2Kg' ? 'selected' : '' }}> < 2Kg </option>
        <option value="2,1Kg - 2,5Kg" {{ isset($rows->peso) && $rows->peso === '2,1Kg - 2,5Kg' ? 'selected' : '' }}>2,1Kg - 2,5Kg</option>
        <option value="2,6Kg - 3Kg" {{ isset($rows->peso) && $rows->peso === '2,6Kg - 3Kg' ? 'selected' : '' }}>2,6Kg - 3Kg</option>
        <option value="3,1Kg - 3,5Kg" {{ isset($rows->peso) && $rows->peso === '3,1Kg - 3,5Kg' ? 'selected' : '' }}>3,1Kg - 3,5Kg</option>
        <option value="3,6Kg - 4Kg" {{ isset($rows->peso) && $rows->peso === '3,6Kg - 4Kg' ? 'selected' : '' }}>3,6Kg - 4Kg</option>
        <option value="> 4Kg" {{ isset($rows->peso) && $rows->peso === '> 4Kg' ? 'selected' : '' }}>> 4Kg</option>
        <option value="Não sabe" {{ isset($rows->peso) && $rows->peso === 'Não sabe' ? 'selected' : '' }}>Não sabe</option>
    </select>
    <div class="invalid-feedback">
        Selecione o peso do bebê
    </div>
</div>

<div class="col-md-4 textinho">
    <label for="validationCustomVacinacao" class="form-label">Completou o esquema de vacinação? <b>*</b> </label>
    <select class="form-select" id="validationCustomVacinacao" name="vacinacao" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="Sim" {{ isset($rows->vacinacao) && $rows->vacinacao === 'Sim' ? 'selected' : '' }}>Sim</option>
        <option value="Não" {{ isset($rows->vacinacao) && $rows->vacinacao === 'Não' ? 'selected' : '' }}>Não</option>
        <option value="Não sei" {{ isset($rows->vacinacao) && $rows->vacinacao === 'Não sei' ? 'selected' : '' }}>Não sei</option>
    </select>
    <div class="invalid-feedback">
        Selecione a vacinação
    </div>
</div>
