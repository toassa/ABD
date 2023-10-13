<!-- cormobidades -->

<div class="col-md-12">
    <label for="validationCustomLetra" class="form-label">Possui alguma doença crônica? <b>*</b></label>
    <div class="row">
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="has" name="doenca_cronica[][]" value="HAS" {{ isset($dados->doenca_cronica) && in_array('HAS', json_decode($dados->doenca_cronica)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="has">HAS</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="dislipidemia" name="doenca_cronica[][]" value="Dislipidemia" {{ isset($dados->doenca_cronica) && in_array('Dislipidemia', json_decode($dados->doenca_cronica)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="dislipidemia">Dislipidemia</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="hipertireoidismo" name="doenca_cronica[][]" value="Hipertireoidismo" {{ isset($dados->doenca_cronica) && in_array('Hipertireoidismo', json_decode($dados->doenca_cronica)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="hipertireoidismo">Hipertireoidismo</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="hipotireoidismo" name="doenca_cronica[][]" value="Hipotireoidismo" {{ isset($dados->doenca_cronica) && in_array('Hipotireoidismo', json_decode($dados->doenca_cronica)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="hipotireoidismo">Hipotireoidismo</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="nodulo_tireoide" name="doenca_cronica[][]" value="Nódulo da tireoide" {{ isset($dados->doenca_cronica) && in_array('Nódulo da tireoide', json_decode($dados->doenca_cronica)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="nodulo_tireoide">Nódulo da tireoide</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="dpoc_asma" name="doenca_cronica[][]" value="DPOC/asma" {{ isset($dados->doenca_cronica) && in_array('DPOC/asma', json_decode($dados->doenca_cronica)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="dpoc_asma">DPOC/asma</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="nefropatia_diabetica" name="doenca_cronica[][]" value="Nefropatia diabética" {{ isset($dados->doenca_cronica) && in_array('Nefropatia diabética', json_decode($dados->doenca_cronica)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="nefropatia_diabetica">Nefropatia diabética</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="artrite_reumatoide" name="doenca_cronica[][]" value="Artrite reumatoide" {{ isset($dados->doenca_cronica) && in_array('Artrite reumatoide', json_decode($dados->doenca_cronica)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="artrite_reumatoide">Artrite reumatoide</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="outras_autoimunes" name="doenca_cronica[][]" value="Outras doenças autoimunes" {{ isset($dados->doenca_cronica) && in_array('Outras doenças autoimunes', json_decode($dados->doenca_cronica)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="outras_autoimunes">Outras doenças autoimunes</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="esteatose_hepatica" name="doenca_cronica[][]" value="Esteatose hepática" {{ isset($dados->doenca_cronica) && in_array('Esteatose hepática', json_decode($dados->doenca_cronica)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="esteatose_hepatica">Esteatose hepática</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="doenca_periodontal" name="doenca_cronica[][]" value="Doença periodontal" {{ isset($dados->doenca_cronica) && in_array('Doença periodontal', json_decode($dados->doenca_cronica)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="doenca_periodontal">Doença periodontal</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="outros_condicoes" name="doenca_cronica[][]" value="Outros" {{ isset($dados->doenca_cronica) && in_array('Outros', json_decode($dados->doenca_cronica)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="outros_condicoes">Outros…</label>
        </div>
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>
    </div>
</div>

<div class="col-md-12">
    <label for="validationCustomLetra" class="form-label">Possui alguma patologia ocular ou já realizou algum procedimento? <b>*</b></label>
    <div class="row">
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="retinopatia_diabetica_proliferativa" name="ocular[]" value="Retinopatia diabética proliferativa" {{ isset($dados->ocular) && in_array('Retinopatia diabética proliferativa', json_decode($dados->ocular)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="retinopatia_diabetica_proliferativa">Retinopatia diabética proliferativa</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="retinopatia_diabetica_tratada" name="ocular[]" value="Retinopatia diabética tratada" {{ isset($dados->ocular) && in_array('Retinopatia diabética tratada', json_decode($dados->ocular)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="retinopatia_diabetica_tratada">Retinopatia diabética tratada</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="catarata" name="ocular[]" value="Catarata" {{ isset($dados->ocular) && in_array('Catarata', json_decode($dados->ocular)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="catarata">Catarata</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="glaucoma" name="ocular[]" value="Glaucoma" {{ isset($dados->ocular) && in_array('Glaucoma', json_decode($dados->ocular)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="glaucoma">Glaucoma</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="pseudofascia" name="ocular[]" value="Pseudofáscia" {{ isset($dados->ocular) && in_array('Pseudofáscia', json_decode($dados->ocular)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="pseudofascia">Pseudofáscia</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="vitrectomia" name="ocular[]" value="Vitrectomia" {{ isset($dados->ocular) && in_array('Vitrectomia', json_decode($dados->ocular)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="vitrectomia">Vitrectomia</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="laserterapia" name="ocular[]" value="Laserterapia" {{ isset($dados->ocular) && in_array('Laserterapia', json_decode($dados->ocular)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="laserterapia">Laserterapia</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="outros_condicoes_oculares" name="ocular[]" value="Outros" {{ isset($dados->ocular) && in_array('Outros', json_decode($dados->ocular)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="outros_condicoes_oculares">Outros…</label>
        </div>
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>
    </div>
</div>


<div class="col-md-12">
    <label for="validationCustomLetra" class="form-label">Possui algum tipo de neuropatia diabética? <b>*</b></label>
    <div class="row">
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="nao_neuropatia_clinica" name="neuropatia[]" value="Não tem neuropatia clínica" {{ isset($dados->neuropatia) && in_array('Não tem neuropatia clínica', json_decode($dados->neuropatia)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="nao_neuropatia_clinica">Não tem neuropatia clínica</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="polineuropatia_sensitivo_motora" name="neuropatia[]" value="Polineuropatia sensitivo-motora simétrico distal" {{ isset($dados->neuropatia) && in_array('Polineuropatia sensitivo-motora simétrico distal', json_decode($dados->neuropatia)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="polineuropatia_sensitivo_motora">Polineuropatia sensitivo-motora simétrico distal</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="mononeuropatia" name="neuropatia[]" value="Mononeuropatia" {{ isset($dados->neuropatia) && in_array('Mononeuropatia', json_decode($dados->neuropatia)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="mononeuropatia">Mononeuropatia</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="neuropatia_autonomica_cardiovascular" name="neuropatia[]" value="Neuropatia autonômica cardiovascular" {{ isset($dados->neuropatia) && in_array('Neuropatia autonômica cardiovascular', json_decode($dados->neuropatia)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="neuropatia_autonomica_cardiovascular">Neuropatia autonômica cardiovascular</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="neuropatia_autonomica_gastrointestinal" name="neuropatia[]" value="Neuropatia autonômica gastrointestinal" {{ isset($dados->neuropatia) && in_array('Neuropatia autonômica gastrointestinal', json_decode($dados->neuropatia)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="neuropatia_autonomica_gastrointestinal">Neuropatia autonômica gastrointestinal</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="neuropatia_autonomica_genito_urinaria_eretil" name="neuropatia[]" value="Neuropatia autonômica genito-urinária (disfunção erétil)" {{ isset($dados->neuropatia) && in_array('Neuropatia autonômica genito-urinária (disfunção erétil)', json_decode($dados->neuropatia)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="neuropatia_autonomica_genito_urinaria_eretil">Neuropatia autonômica genito-urinária (disfunção erétil)</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="neuropatia_autonomica_genito_urinaria_bexiga" name="neuropatia[]" value="Neuropatia autonômica genito-urinária (bexiga neurogênica)" {{ isset($dados->neuropatia) && in_array('Neuropatia autonômica genito-urinária (bexiga neurogênica)', json_decode($dados->neuropatia)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="neuropatia_autonomica_genito_urinaria_bexiga">Neuropatia autonômica genito-urinária (bexiga neurogênica)</label>
        </div>
        <div class="col-md-4 form-check mb-3">
            <input class="form-check-input" type="checkbox" id="outros_neuropatia" name="neuropatia[]" value="Outros" {{ isset($dados->neuropatia) && in_array('Outros', json_decode($dados->neuropatia)) ? 'checked' : '' }}>
            <label class="form-check-label label_check" for="outros_neuropatia">Outros…</label>
        </div>
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>
    </div>
</div>

