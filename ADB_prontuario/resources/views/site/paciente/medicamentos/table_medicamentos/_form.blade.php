<div class="col-md-3">
    <label for="validationFormMedicamentos" class="form-label textinho">Medicamentos <b>*</b></label>
    <select class="form-select" id="validationFormMedicamentos" name="nome" required>
      <option disabled value="">Clique para escolher...</option>
      <option value="TRUE"{{ isset($dados->plano_saude) && $dados->plano_saude === 'TRUE' ? 'selected' : '' }} >Sim</option>
      <option value="FALSE"{{ isset($dados->plano_saude) && $dados->plano_saude === 'FALSE' ? 'selected' : '' }} >Não</option>
    </select>
  </div>