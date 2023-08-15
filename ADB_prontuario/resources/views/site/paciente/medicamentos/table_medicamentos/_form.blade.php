<div class="col-md-3">
    <label for="validationFormMedicamentos" class="form-label textinho">Medicamentos <b>*</b></label>
    <select class="form-select" id="validationFormMedicamentos" name="nome" required>
        <option disabled value="">Clique para escolher...</option>
        
        <?php
        // Supondo que $medicamentos seja um array de objetos contendo os dados dos medicamentos da tabela
        foreach ($medicamentos as $medicamento) {
            $selected = isset($dados->medicamento) && $dados->medicamento === $medicamento->valor ? 'selected' : '';
            echo '<option value="' . $medicamento->valor . '" ' . $selected . '>' . $medicamento->nome . '</option>';
        }
        ?>
        
    </select>
</div>
