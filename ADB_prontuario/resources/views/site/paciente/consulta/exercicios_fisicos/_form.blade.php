<!-- exercicio_fisicos -->

<div class="col-md-12">
    <label for="validationCustomSelectDefine" class="form-label">Pratica exercício físico de rotina? <b>*</b> </label>
    <select class="form-select" id="validationCustomSelectDefine" onclick="mostraDados()" name="exercicios_rotineiros" required>
        <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->exercicios_rotineiros) && $rows->exercicios_rotineiros == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->exercicios_rotineiros) && $rows->exercicios_rotineiros == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se realiza exercícios rotineiros
    </div>
</div>

<div class="col-md-6" id="input_show">
    <label for="validationCustomLetra" class="form-label">Qual(is) atividade(s) física(s) pratica? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->tipo_atividades) ? $rows->tipo_atividades : '' }}" name="tipo_atividades" placeholder="Insira o tipo de atividades" required>
    <div class="invalid-feedback">
        Insira o tipo de atividades
    </div>
</div>

<div class="col-md-6" id="input_show_multiple">
    <label for="validationCustomLetra" class="form-label">Com que frequência? Quanto tempo/dia? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->frequencia_periodo) ? $rows->frequencia_periodo : '' }}" name="frequencia_periodo" placeholder="Insira a frequência e o período de exercícios" required>
    <div class="invalid-feedback">
        Insira a frequência e o período de exercícios
    </div>
</div>
