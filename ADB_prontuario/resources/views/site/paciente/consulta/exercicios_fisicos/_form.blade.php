<!-- exercicio_fisicos -->

<div class="col-md-4">
    <label for="validationCustomExerciciosRotineiros" class="form-label">Exercícios Rotineiros <b>*</b> </label>
    <select class="form-select" id="validationCustomExerciciosRotineiros" name="exercicios_rotineiros" required>
        <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->exercicios_rotineiros) && $rows->exercicios_rotineiros == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->exercicios_rotineiros) && $rows->exercicios_rotineiros == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se realiza exercícios rotineiros
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Tipo de Atividades <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->tipo_atividades) ? $rows->tipo_atividades : '' }}" name="tipo_atividades" placeholder="Insira o tipo de atividades" required>
    <div class="invalid-feedback">
        Insira o tipo de atividades
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Frequência e Período <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->frequencia_periodo) ? $rows->frequencia_periodo : '' }}" name="frequencia_periodo" placeholder="Insira a frequência e o período de exercícios" required>
    <div class="invalid-feedback">
        Insira a frequência e o período de exercícios
    </div>
</div>
