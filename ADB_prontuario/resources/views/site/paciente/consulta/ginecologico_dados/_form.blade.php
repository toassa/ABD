<div class="col-md-4">
    <label for="validationCustomMenopausa" class="form-label">Menopausa <b>*</b></label>
    <select class="form-select" id="validationCustomMenopausa" name="menopausa" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->menopausa) && $rows->menopausa == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->menopausa) && $rows->menopausa == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve menopausa
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomIdadeMenopausa" class="form-label">Idade na Menopausa</label>
    <input type="number" class="text-center form-control" id="validationCustomIdadeMenopausa" value="{{ isset($rows->idade_menopausa) ? $rows->idade_menopausa : '' }}" name="idade_menopausa" placeholder="Insira a idade na menopausa" required>
    <div class="invalid-feedback">
        Insira a idade na menopausa
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomMenopausaCirurgica" class="form-label">Menopausa Cirúrgica</label>
    <select class="form-select" id="validationCustomMenopausaCirurgica" name="menopausa_cirurgica" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->menopausa_cirurgica) && $rows->menopausa_cirurgica == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->menopausa_cirurgica) && $rows->menopausa_cirurgica == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve menopausa cirúrgica
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomMenstruacao" class="form-label">Menstruação <b>*</b></label>
    <select class="form-select" id="validationCustomMenstruacao" name="menstruacao" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->menstruacao) && $rows->menstruacao == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->menstruacao) && $rows->menstruacao == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há menstruação
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomIdadeMenstruacao" class="form-label">Idade na Menstruação</label>
    <input type="number" class="text-center form-control" id="validationCustomIdadeMenstruacao" value="{{ isset($rows->idade_menstruacao) ? $rows->idade_menstruacao : '' }}" name="idade_menstruacao" placeholder="Insira a idade na menstruação" required>
    <div class="invalid-feedback">
        Insira a idade na menstruação
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomHistoricoObstetrico" class="form-label">Histórico Obstétrico</label>
    <input type="text" class="form-control" id="validationCustomHistoricoObstetrico" value="{{ isset($rows->historico_obstetrico) ? $rows->historico_obstetrico : '' }}" name="historico_obstetrico" placeholder="Insira o histórico obstétrico" required>
    <div class="invalid-feedback">
        Insira o histórico obstétrico
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomUsoMetodosContraceptivos" class="form-label">Uso de Métodos Contraceptivos <b>*</b></label>
    <select class="form-select" id="validationCustomUsoMetodosContraceptivos" name="uso_metodos_contraceptivos" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->uso_metodos_contraceptivos) && $rows->uso_metodos_contraceptivos == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->uso_metodos_contraceptivos) && $rows->uso_metodos_contraceptivos == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há uso de métodos contraceptivos
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomMetodosContraceptivos" class="form-label">Métodos Contraceptivos</label>
    <input type="text" class="form-control" id="validationCustomMetodosContraceptivos" value="{{ isset($rows->metodos_contraceptivos) ? $rows->metodos_contraceptivos : '' }}" name="metodos_contraceptivos" placeholder="Insira os métodos contraceptivos utilizados" required>
    <div class="invalid-feedback">
        Insira os métodos contraceptivos utilizados
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomMamografia" class="form-label">Mamografia</label>
    <select class="form-select" id="validationCustomMamografia" name="mamografia" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->mamografia) && $rows->mamografia == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->mamografia) && $rows->mamografia == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve mamografia
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomPapanicolau" class="form-label">Papanicolau</label>
    <select class="form-select" id="validationCustomPapanicolau" name="papanicolau" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->papanicolau) && $rows->papanicolau == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->papanicolau) && $rows->papanicolau == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve Papanicolau
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomFrequenciaGinecologica" class="form-label">Frequência Ginecológica</label>
    <input type="text" class="form-control" id="validationCustomFrequenciaGinecologica" value="{{ isset($rows->frequencia_ginecologica) ? $rows->frequencia_ginecologica : '' }}" name="frequencia_ginecologica" placeholder="Insira a frequência ginecológica" required>
    <div class="invalid-feedback">
        Insira a frequência ginecológica
    </div>
</div>
