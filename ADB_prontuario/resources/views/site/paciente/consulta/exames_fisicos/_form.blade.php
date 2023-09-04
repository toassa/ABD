{{-- exame físico --}}

<div class="col-md-6">
    <label for="validationCustomLetra" class="form-label">Qual o aspecto geral?  <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->aspecto_geral) ? $rows->aspecto_geral : '' }}" name="apecto_geral" placeholder="Insira o Aspecto Geral" required>
    <div class="invalid-feedback">
        Insira o Aspecto Geral
    </div>
</div>

<div class="col-md-3">
    <label for="validationCustomValor" class="form-label">Qual o peso?  <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomValor" value="{{isset($rows->peso) ? $rows->peso : ''}}" maxlength="8" name="peso" placeholder="Digite o peso em Kg" required>
    <div class="invalid-feedback">
        Insira o peso
    </div>
</div>

<div class="col-md-3">
    <label for="validationCustomAltura" class="form-label">Qual a altura?  <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomAltura" value="{{ isset($rows->altura) ? $rows->altura : '' }}" step="0.01" name="altura" placeholder="Digite a altura em metros" required>
    <div class="invalid-feedback">
        Insira a altura
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNum" class="form-label">Qual a circunferência abdominal?  <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomNum" value="{{ isset($rows->circunferencia_abdominal) ? $rows->circunferencia_abdominal : '' }}" step="0.01" name="circunferencia_abdominal" placeholder="Digite o valor em centímetros" required>
    <div class="invalid-feedback">
        Insira a Circunferência Abdominal
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNum" class="form-label">Qual a circunferência do quadril? <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomNum" value="{{ isset($rows->circunferencia_quadril) ? $rows->circunferencia_quadril : '' }}" step="0.01" name="circunferencia_quadril" placeholder="Digite o valor em centímetros" required>
    <div class="invalid-feedback">
        Insira a Circunferência do Quadril
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNum" class="form-label">Qual a circunferência do pescoço? <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomNum" value="{{ isset($rows->circunferencia_pescoco) ? $rows->circunferencia_pescoco : '' }}" step="0.01" name="circunferencia_pescoco" placeholder="Digite o valor em centímetros" required>
    <div class="invalid-feedback">
        Insira a Circunferência do Pescoço
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNum" class="form-label">Qual o valor da pressão arterial? <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomNum" value="{{ isset($rows->pressao_arterial) ? $rows->pressao_arterial : '' }}" name="pressao_arterial" placeholder="Digite o valor em mmHg" required>
    <div class="invalid-feedback">
        Insira a pressão arterial
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNum" class="form-label">Qual a frequência cardíaca? <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomNum" value="{{ isset($rows->frequencia_cardiaca) ? $rows->frequencia_cardiaca : '' }}" name="frequencia_cardiaca" placeholder="Digite o valor em bpm" required>
    <div class="invalid-feedback">
        Insira a Frequência Cardíaca
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNum" class="form-label">Qual o valor do pulso arterial? <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomNum" value="{{ isset($rows->pulso_arterial) ? $rows->pulso_arterial : '' }}" name="pulso_arterial" placeholder="Digite o valor do pulso arterial" required>
    <div class="invalid-feedback">
        Insira o Pulso Arterial
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomLetra" class="form-label">Quais os dados de cabeça e pescoço? <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->cabeca_pescoco) ? $rows->cabeca_pescoco : '' }}" name="cabeca_pescoco" placeholder="Digite os dados de cabeça e pescoço" required>
    <div class="invalid-feedback">
        Insira Cabeça e Pescoço
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomLetra" class="form-label">Quais os dados do sistema digestivo? <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->sistema_digestivo) ? $rows->sistema_digestivo : '' }}" name="sistema_digestivo" placeholder="Digite dados do sistema Digestivo" required>
    <div class="invalid-feedback">
        Insira o Sistema Digestivo
    </div>
</div>

<div class="col-md-4 input-translate">
    <label for="validationCustomLetra" class="form-label">Quais os dados do sistema venoso <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->sistema_venoso) ? $rows->sistema_venoso : '' }}" name="sistema_venoso" placeholder="Digite dados do sistema Venoso" required>
    <div class="invalid-feedback">
        Insira o Sistema Venoso
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Quais os dados do sistema respiratório? <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->sistema_respiratorio) ? $rows->sistema_respiratorio : '' }}" name="sistema_respiratorio" placeholder="Digite dados do sistema respiratório" required>
    <div class="invalid-feedback">
        Insira o Sistema Respiratório
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLetra" class="form-label">Quais os dados do sistema cardiovascular? <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->sistema_cardiovascular) ? $rows->sistema_cardiovascular : '' }}" name="sistema_cardiovascular" placeholder="Digite dados do sistema cardiovascular" required>
    <div class="invalid-feedback">
        Insira o Sistema Cardiovascular
    </div>
</div>

<div class="col-md-12">
    <label for="validationCustomLetra" class="form-label">Quais as considerações sobre outros sistemas? <b>*</b></label>
    <textarea class="form-control" id="validationCustomLetra" name="consideracoes_outros_sistemas" placeholder="Insira as Considerações sobre outros sistemas" required>{{ isset($rows->consideracoes_outros_sistemas) ? $rows->consideracoes_outros_sistemas : '' }}</textarea>
    <div class="invalid-feedback">
        Insira as Considerações sobre Outros Sistemas
    </div>
</div>
