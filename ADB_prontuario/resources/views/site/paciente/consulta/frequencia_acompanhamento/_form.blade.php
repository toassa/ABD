<div class="col-md-6">
    <label for="validationCustomcardiologista" class="form-label">Qual a frequência com que passa por consulta cardiológica? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomcardiologista" value="{{ isset($dados->cardiologista) ? $dados->cardiologista : '' }}" name="cardiologista" placeholder="Insira informações sobre a frequência com o cardiologista" required>
    <div class="invalid-feedback">
        Insira informações sobre a frequência com o cardiologista
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomoftalmologista" class="form-label">Qual a frequência com que passa por consulta oftalmológica? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomoftalmologista" value="{{ isset($dados->oftalmologista) ? $dados->oftalmologista : '' }}" name="oftalmologista" placeholder="Insira informações sobre a frequência com o oftalmologista" required>
    <div class="invalid-feedback">
        Insira informações sobre a frequência com o oftalmologista
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomurologista" class="form-label">Qual a frequência com que passa por consulta urológica? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomurologista" value="{{ isset($dados->urologista) ? $dados->urologista : '' }}" name="urologista" placeholder="Insira informações sobre a frequência com o urologista" required>
    <div class="invalid-feedback">
        Insira informações sobre a frequência com o urologista
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomExame_Toque_Urologico" class="form-label">Fez exame de toque? <b>*</b> </label>
    <select class="form-select" id="validationCustomExame_Toque_Urologico" name="exame_toque_urologista" required>
        <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($dados->exame_toque_urologista) && $dados->exame_toque_urologista == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($dados->exame_toque_urologista) && $dados->exame_toque_urologista == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se realizou o exame de toque urológico
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomdentista" class="form-label">Qual a frequência com que examina dentes e gengiva no dentista? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomdentista" value="{{ isset($dados->dentista) ? $dados->dentista : '' }}" name="dentista" placeholder="Insira informações sobre a frequência com o dentista" required>
    <div class="invalid-feedback">
        Insira informações sobre a frequência com o dentista
    </div>
</div>