<!-- exercicio_fisicos -->

<div class="col-md-12">
    <label for="validationCustomSelectDefine" class="form-label">Pratica exercício físico de rotina? <b>*</b> </label>
    <select class="form-select" id="validationCustomSelectDefine" onclick="mostraDados()" onchange="mostraDados()" onfocus="mostraDados()" name="exercicios_rotineiros"saude_cardiaca required>
        <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($dados->exercicios_rotineiros) && $dados->exercicios_rotineiros == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($dados->exercicios_rotineiros) && $dados->exercicios_rotineiros == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se realiza exercícios rotineiros
    </div>
</div>

<div class="col-md-6" id="input_show">
    <label for="validationCustomtipo_atividades" class="form-label">Qual(is) atividade(s) física(s) pratica? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomtipo_atividades" value="{{ isset($dados->tipo_atividades) ? $dados->tipo_atividades : '' }}" name="tipo_atividades" placeholder="Insira o tipo de atividades"saude_cardiaca required>
    <div class="invalid-feedback">
        Insira o tipo de atividades
    </div>
</div>

<div class="col-md-6" id="input_show_multiple">
    <label for="validationCustomfrequencia_periodo" class="form-label">Com que frequência? Quanto tempo/dia? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomfrequencia_periodo" value="{{ isset($dados->frequencia_periodo) ? $dados->frequencia_periodo : '' }}" name="frequencia_periodo" placeholder="Insira a frequência e o período de exercícios"saude_cardiaca required>
    <div class="invalid-feedback">
        Insira a frequência e o período de exercícios
    </div>
</div>
