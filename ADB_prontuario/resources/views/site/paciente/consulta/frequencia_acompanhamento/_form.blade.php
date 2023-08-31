<div class="col-md-6">
    <label for="ValidationCustomLetra" class="form-label">Qual a frequência com que passa por consulta cardiológica? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->cardiologista) ? $rows->cardiologista : '' }}" name="cardiologista" placeholder="Insira informações sobre a frequência com o cardiologista" required>
    <div class="invalid-feedback">
        Insira informações sobre a frequência com o cardiologista
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomLetra" class="form-label">Qual a frequência com que passa por consulta oftalmológica? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->oftalmologista) ? $rows->oftalmologista : '' }}" name="oftalmologista" placeholder="Insira informações sobre a frequência com o oftalmologista" required>
    <div class="invalid-feedback">
        Insira informações sobre a frequência com o oftalmologista
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomLetra" class="form-label">Qual a frequência com que passa por consulta urológica? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->urologista) ? $rows->urologista : '' }}" name="urologista" placeholder="Insira informações sobre a frequência com o urologista" required>
    <div class="invalid-feedback">
        Insira informações sobre a frequência com o urologista
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomExame_Toque_Urologico" class="form-label">Fez exame de toque? <b>*</b> </label>
    <select class="form-select" id="validationCustomExame_Toque_Urologico" name="exame_toque_urologista" required>
        <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->exame_toque_urologista) && $rows->exame_toque_urologista == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->exame_toque_urologista) && $rows->exame_toque_urologista == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se realizou o exame de toque urológico
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomLetra" class="form-label">Qual a frequência com que examina dentes e gengiva no dentista? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->dentista) ? $rows->dentista : '' }}" name="dentista" placeholder="Insira informações sobre a frequência com o dentista" required>
    <div class="invalid-feedback">
        Insira informações sobre a frequência com o dentista
    </div>
</div>