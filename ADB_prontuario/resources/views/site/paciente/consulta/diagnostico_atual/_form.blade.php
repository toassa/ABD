<!-- diagnosticos -->

<div class="col-md-4">
    <label for="validationCustomSintomas" class="form-label">Sintomas</label>
    <input type="text" class="form-control" id="validationCustomSintomas" value="{{ isset($rows->sintomas) ? $rows->sintomas : '' }}" name="sintomas" required>
    <div class="invalid-feedback">
        Insira os sintomas
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLibidoAlterado" class="form-label">Libido Alterado?</label>
    <select class="form-select" id="validationCustomLibidoAlterado" name="libido_alterado" required>
        <option selected disabled value="">Clique para escolher...</option>
        <option value="Sim" {{ isset($rows->libido_alterado) && $rows->libido_alterado === 'Sim' ? 'selected' : '' }}>Sim</option>
        <option value="Não" {{ isset($rows->libido_alterado) && $rows->libido_alterado === 'Não' ? 'selected' : '' }}>Não</option>
        <option value="Não sabe ou não quis responder" {{ isset($rows->libido_alterado) && $rows->libido_alterado === 'Não sabe ou não quis responder' ? 'selected' : '' }}>Não sabe ou não quis responder</option>
        <option value="Não se aplica" {{ isset($rows->libido_alterado) && $rows->libido_alterado === 'Não se aplica' ? 'selected' : '' }}>Não se aplica</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve alteração na libido
    </div>
</div>
