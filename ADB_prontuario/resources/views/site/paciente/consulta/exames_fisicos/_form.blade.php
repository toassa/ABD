{{-- exame físico --}}

<div class="col-md-4 textinho">
    <label for="validationCustomValor" class="form-label">Peso <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomValor" value="{{isset($rows->peso) ? $rows->peso : ''}}" maxlength="8" name="peso" placeholder="Digite o peso" required>
    <div class="invalid-feedback">
        Insira o peso
    </div>
</div>

<div class="col-md-4 textinho">
    <label for="validationCustomAltura" class="form-label">Altura <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomAltura" value="{{ isset($rows->altura) ? $rows->altura : '' }}" step="0.01" name="altura" placeholder="Insira a altura" required>
    <div class="invalid-feedback">
        Insira a altura
    </div>
</div>

<div class="col-md-4 textinho">
    <label for="validationCustomNum" class="form-label">Pressão Arterial <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomNum" value="{{ isset($rows->pressao_arterial) ? $rows->pressao_arterial : '' }}" name="pressao_arterial" placeholder="Insira a pressão arterial" required>
    <div class="invalid-feedback">
        Insira a pressão arterial
    </div>
</div>

{{-- <div class="col-md-4 textinho">
    <label for="validationCustomNum" class="form-label">Tensão Arterial <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomNum" value="{{ isset($rows->tensao_arterial) ? $rows->tensao_arterial : '' }}" name="tensao_arterial" placeholder="Insira a Tensão Arterial" required>
    <div class="invalid-feedback">
        Insira a Tensão Arterial
    </div>
</div> --}}

<div class="col-md-4 textinho">
    <label for="validationCustomNum" class="form-label">Pulso Arterial <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomNum" value="{{ isset($rows->pulso_arterial) ? $rows->pulso_arterial : '' }}" name="pulso_arterial" placeholder="Insira o Pulso Arterial" required>
    <div class="invalid-feedback">
        Insira o Pulso Arterial
    </div>
</div>

<div class="col-md-4 textinho">
    <label for="validationCustomNum" class="form-label">Frequência Cardíaca <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomNum" value="{{ isset($rows->frequencia_cardiaca) ? $rows->frequencia_cardiaca : '' }}" name="frequencia_cardiaca" placeholder="Insira a Frequência Cardíaca" required>
    <div class="invalid-feedback">
        Insira a Frequência Cardíaca
    </div>
</div>

<div class="col-md-4 textinho">
    <label for="validationCustomLetra" class="form-label">Aspecto Geral <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->aspecto_geral) ? $rows->aspecto_geral : '' }}" name="apecto_geral" placeholder="Insira o Aspecto Geral" required>
    <div class="invalid-feedback">
        Insira o Aspecto Geral
    </div>
</div>

<div class="col-md-4 textinho">
    <label for="validationCustomLetra" class="form-label">Cabeça e Pescoço <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->cabeca_pescoco) ? $rows->cabeca_pescoco : '' }}" name="cabeca_pescoco" placeholder="Insira Cabeça e Pescoço" required>
    <div class="invalid-feedback">
        Insira Cabeça e Pescoço
    </div>
</div>

<div class="col-md-4 textinho">
    <label for="validationCustomNum" class="form-label">Circunferência do Quadril <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomNum" value="{{ isset($rows->circunferencia_quadril) ? $rows->circunferencia_quadril : '' }}" step="0.01" name="circunferencia_quadril" placeholder="Insira a Circunferência do Quadril" required>
    <div class="invalid-feedback">
        Insira a Circunferência do Quadril
    </div>
</div>

<div class="col-md-4 textinho">
    <label for="validationCustomNum" class="form-label">Circunferência do Pescoço <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomNum" value="{{ isset($rows->circunferencia_pescoco) ? $rows->circunferencia_pescoco : '' }}" step="0.01" name="circunferencia_pescoco" placeholder="Insira a Circunferência do Pescoço" required>
    <div class="invalid-feedback">
        Insira a Circunferência do Pescoço
    </div>
</div>

<div class="col-md-4 textinho">
    <label for="validationCustomNum" class="form-label">Circunferência Abdominal <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomNum" value="{{ isset($rows->circunferencia_abdominal) ? $rows->circunferencia_abdominal : '' }}" step="0.01" name="circunferencia_abdominal" placeholder="Insira a Circunferência Abdominal" required>
    <div class="invalid-feedback">
        Insira a Circunferência Abdominal
    </div>
</div>

<div class="col-md-4 textinho">
    <label for="validationCustomLetra" class="form-label">Sistema Venoso <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->sistema_venoso) ? $rows->sistema_venoso : '' }}" name="sistema_venoso" placeholder="Insira o Sistema Venoso" required>
    <div class="invalid-feedback">
        Insira o Sistema Venoso
    </div>
</div>

<div class="col-md-4 textinho">
    <label for="validationCustomLetra" class="form-label">Sistema Digestivo <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->sistema_digestivo) ? $rows->sistema_digestivo : '' }}" name="sistema_digestivo" placeholder="Insira o Sistema Digestivo" required>
    <div class="invalid-feedback">
        Insira o Sistema Digestivo
    </div>
</div>

<div class="col-md-4 textinho">
    <label for="validationCustomLetra" class="form-label">Sistema Respiratório <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->sistema_respiratorio) ? $rows->sistema_respiratorio : '' }}" name="sistema_respiratorio" placeholder="Insira o Sistema Respiratório" required>
    <div class="invalid-feedback">
        Insira o Sistema Respiratório
    </div>
</div>

<div class="col-md-4 textinho">
    <label for="validationCustomLetra" class="form-label">Sistema Cardiovascular <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->sistema_cardiovascular) ? $rows->sistema_cardiovascular : '' }}" name="sistema_cardiovascular" placeholder="Insira o Sistema Cardiovascular" required>
    <div class="invalid-feedback">
        Insira o Sistema Cardiovascular
    </div>
</div>

<div class="col-md-4 textinho">
    <label for="validationCustomLetra" class="form-label">Considerações sobre Outros Sistemas <b>*</b></label>
    <textarea class="form-control" id="validationCustomLetra" name="consideracoes_outros_sistemas" placeholder="Insira as Considerações sobre Outros Sistemas" required>{{ isset($rows->consideracoes_outros_sistemas) ? $rows->consideracoes_outros_sistemas : '' }}</textarea>
    <div class="invalid-feedback">
        Insira as Considerações sobre Outros Sistemas
    </div>
</div>
