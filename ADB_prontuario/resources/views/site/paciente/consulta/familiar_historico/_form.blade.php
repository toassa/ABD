<div class="row g-3 needs-validation page page1">
    <div class="col-md-6 input-border">
        <label for="validationCustomLetra" class="form-label">Possui algum parente com diagnóstico de DM? <b>*</b> </label>
        <div class="row">
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox45" name="dm" value="Pai">
                <label class="form-check-label label_check" for="checkbox45">Pai</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox46" name="dm" value="Mãe">
                <label class="form-check-label label_check" for="checkbox46">Mãe</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox47" name="dm" value="Irmão(a)(s)">
                <label class="form-check-label label_check" for="checkbox47">Irmão(a)(s)</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox48" name="dm" value="Filho(a)(s)">
                <label class="form-check-label label_check" for="checkbox48">Filho(a)(s)</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox49" name="dm" value="Avós ou Tios ou Primos">
                <label class="form-check-label label_check" for="checkbox49">Avós ou Tios ou Primos</label>
            </div>
            <div class="col-md-4 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox51" name="dm" value="Não sabe">
                <label class="form-check-label label_check" for="checkbox51">Não sabe</label>
            </div>
            <div class="col-md-12 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox50" name="dm" value="Não há histórico familiar">
                <label class="form-check-label label_check" for="checkbox50">Não há histórico familiar</label>
            </div>
        </div>
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>
    </div>


    <div class="col-md-6">
        <div class="col-md-12">
            <label for="validationCustomSelectDefine2" class="form-label">Algum desses parentes possui Diabetes Mellitus Tipo 1 (DM1)? 
                <b>*</b> 
            </label>
            <select class="form-select" id="validationCustomSelectDefine2" onclick="mostraDados2()" onchange="mostraDados2()" onfocus="mostraDados2()" name="possui_dm1" required>
                <option selected disabled value="">Clique para escolher...</option>
                <option value="1" {{ isset($dados->possui_dm1) && $dados->possui_dm1 == 1 ? 'selected' : '' }}>Sim</option>
                <option value="0" {{ isset($dados->possui_dm1) && $dados->possui_dm1 == 0 ? 'selected' : '' }}>Não</option>
            </select>
            <div class="invalid-feedback">
                Selecione se possui DM1
            </div>
        </div>
        <br>
        <div class="col-md-12" id="input_show2">
            <label for="validationCustomdm1" class="form-label">Descreva a DM Tipo 1 (se sim) <b>*</b> </label>
            <input type="text" class="form-control" id="validationCustomdm1" value="{{ isset($dados->dm1) ? $dados->dm1 : '' }}" name="dm1" placeholder="Insira informações sobre DM Tipo 1">
            <div class="invalid-feedback">
                Insira informações sobre DM Tipo 1
            </div>
        </div>
    </div>
</div>

<div class="row g-3 needs-validation page page2">
    <div class="col-md-6 input-border">
        <label for="validationCustomLetra" class="form-label">Possui algum parente com obesidade? <b>*</b> </label>
        <div class="row">
            <div class="col-md-6 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox52" name="obesidade" value="Pai">
                <label class="form-check-label label_check" for="checkbox52">Pai</label>
            </div>
            <div class="col-md-6 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox53" name="obesidade" value="Mãe">
                <label class="form-check-label label_check" for="checkbox53">Mãe</label>
            </div>
            <div class="col-md-6 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox54" name="obesidade" value="Irmão(a)(s)">
                <label class="form-check-label label_check" for="checkbox54">Irmão(a)(s)</label>
            </div>
            <div class="col-md-6 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox55" name="obesidade" value="Filho(a)(s)">
                <label class="form-check-label label_check" for="checkbox55">Filho(a)(s)</label>
            </div>
            <div class="col-md-6 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox56" name="obesidade" value="Avós ou Tios ou Primos">
                <label class="form-check-label label_check" for="checkbox56">Avós ou Tios ou Primos</label>
            </div>
            <div class="col-md-6 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox58" name="obesidade" value="Não sabe">
                <label class="form-check-label label_check" for="checkbox58">Não sabe</label>
            </div>
            <div class="col-md-6 form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox57" name="obesidade" value="Não há histórico familiar">
                <label class="form-check-label label_check" for="checkbox57">Não há histórico familiar</label>
            </div>
        </div>
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>
    </div>


    <div class="col-md-6">
        <label for="validationCustomLetra" class="form-label">Possui algum parente com vitiligo? <b>*</b> </label>
        <div class="row">
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxVitiligoPai" name="vitiligo" value="Pai">
                    <label class="form-check-label label_check" for="checkboxVitiligoPai">Pai</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxVitiligoMae" name="vitiligo" value="Mãe">
                    <label class="form-check-label label_check" for="checkboxVitiligoMae">Mãe</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxVitiligoIrmao" name="vitiligo" value="Irmão(a)(s)">
                    <label class="form-check-label label_check" for="checkboxVitiligoIrmao">Irmão(a)(s)</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxVitiligoFilho" name="vitiligo" value="Filho(a)(s)">
                    <label class="form-check-label label_check" for="checkboxVitiligoFilho">Filho(a)(s)</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxVitiligoAvos" name="vitiligo" value="Avós ou Tios ou Primos">
                    <label class="form-check-label label_check" for="checkboxVitiligoAvos">Avós ou Tios ou Primos</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxVitiligoNaoSabe" name="vitiligo" value="Não sabe">
                    <label class="form-check-label label_check" for="checkboxVitiligoNaoSabe">Não sabe</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxVitiligoSemHistorico" name="vitiligo" value="Não há histórico familiar">
                    <label class="form-check-label label_check" for="checkboxVitiligoSemHistorico">Não há histórico familiar</label>
                </div>
            </div>
        </div>
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>
    </div>
</div>

<div class="row g-3 needs-validation page page3">
    <div class="col-md-6 input-border">
        <label for="validationCustomLetra" class="form-label">Possui parente com doença tireoidiana? <b>*</b> </label>
        <div class="row">
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaTireoidianaPai" name="doenca_tireoideana" value="Pai">
                    <label class="form-check-label label_check" for="checkboxDoencaTireoidianaPai">Pai</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaTireoidianaMae" name="doenca_tireoideana" value="Mãe">
                    <label class="form-check-label label_check" for="checkboxDoencaTireoidianaMae">Mãe</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaTireoidianaIrmao" name="doenca_tireoideana" value="Irmão(a)(s)">
                    <label class="form-check-label label_check" for="checkboxDoencaTireoidianaIrmao">Irmão(a)(s)</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaTireoidianaFilho" name="doenca_tireoideana" value="Filho(a)(s)">
                    <label class="form-check-label label_check" for="checkboxDoencaTireoidianaFilho">Filho(a)(s)</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaTireoidianaAvos" name="doenca_tireoideana" value="Avós ou Tios ou Primos">
                    <label class="form-check-label label_check" for="checkboxDoencaTireoidianaAvos">Avós ou Tios ou Primos</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaTireoidianaNaoSabe" name="doenca_tireoideana" value="Não sabe">
                    <label class="form-check-label label_check" for="checkboxDoencaTireoidianaNaoSabe">Não sabe</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaTireoidianaSemHistorico" name="doenca_tireoideana" value="Não há histórico familiar">
                    <label class="form-check-label label_check" for="checkboxDoencaTireoidianaSemHistorico">Não há histórico familiar</label>
                </div>
            </div>
        </div>
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>
    </div>


    <div class="col-md-6">
        <label for="validationCustomLetra" class="form-label">Possui parente com displidemia? <b>*</b> </label>
        <div class="row">
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDisplidemiaPai" name="displidemia" value="Pai">
                    <label class="form-check-label label_check" for="checkboxDisplidemiaPai">Pai</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDisplidemiaMae" name="displidemia" value="Mãe">
                    <label class="form-check-label label_check" for="checkboxDisplidemiaMae">Mãe</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDisplidemiaIrmao" name="displidemia" value="Irmão(a)(s)">
                    <label class="form-check-label label_check" for="checkboxDisplidemiaIrmao">Irmão(a)(s)</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDisplidemiaFilho" name="displidemia" value="Filho(a)(s)">
                    <label class="form-check-label label_check" for="checkboxDisplidemiaFilho">Filho(a)(s)</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDisplidemiaAvos" name="displidemia" value="Avós ou Tios ou Primos">
                    <label class="form-check-label label_check" for="checkboxDisplidemiaAvos">Avós ou Tios ou Primos</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDisplidemiaNaoSabe" name="displidemia" value="Não sabe">
                    <label class="form-check-label label_check" for="checkboxDisplidemiaNaoSabe">Não sabe</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDisplidemiaSemHistorico" name="displidemia" value="Não há histórico familiar">
                    <label class="form-check-label label_check" for="checkboxDisplidemiaSemHistorico">Não há histórico familiar</label>
                </div>
            </div>
        </div>
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>
    </div>
</div>

<div class="row g-3 needs-validation page page4">
    <div class="col-md-6 input-border">
        <label for="validationCustomLetra" class="form-label">Possui parente com alopecia? <b>*</b> </label>
        <div class="row">
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxAlopeciaPai" name="alopecia" value="Pai">
                    <label class="form-check-label label_check" for="checkboxAlopeciaPai">Pai</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxAlopeciaMae" name="alopecia" value="Mãe">
                    <label class="form-check-label label_check" for="checkboxAlopeciaMae">Mãe</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxAlopeciaIrmao" name="alopecia" value="Irmão(a)(s)">
                    <label class="form-check-label label_check" for="checkboxAlopeciaIrmao">Irmão(a)(s)</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxAlopeciaFilho" name="alopecia" value="Filho(a)(s)">
                    <label class="form-check-label label_check" for="checkboxAlopeciaFilho">Filho(a)(s)</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxAlopeciaAvos" name="alopecia" value="Avós ou Tios ou Primos">
                    <label class="form-check-label label_check" for="checkboxAlopeciaAvos">Avós ou Tios ou Primos</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxAlopeciaNaoSabe" name="alopecia" value="Não sabe">
                    <label class="form-check-label label_check" for="checkboxAlopeciaNaoSabe">Não sabe</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxAlopeciaSemHistorico" name="alopecia" value="Não há histórico familiar">
                    <label class="form-check-label label_check" for="checkboxAlopeciaSemHistorico">Não há histórico familiar</label>
                </div>
            </div>
        </div>
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustomLetrae" class="form-label">Possui parente com artrite reumatoide? <b>*</b> </label>
        <div class="row">
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxArtriteReumatoidePai" name="artrite_reumatoide" value="Pai">
                    <label class="form-check-label label_check" for="checkboxArtriteReumatoidePai">Pai</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxArtriteReumatoideMae" name="artrite_reumatoide" value="Mãe">
                    <label class="form-check-label label_check" for="checkboxArtriteReumatoideMae">Mãe</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxArtriteReumatoideIrmao" name="artrite_reumatoide" value="Irmão(a)(s)">
                    <label class="form-check-label label_check" for="checkboxArtriteReumatoideIrmao">Irmão(a)(s)</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxArtriteReumatoideFilho" name="artrite_reumatoide" value="Filho(a)(s)">
                    <label class="form-check-label label_check" for="checkboxArtriteReumatoideFilho">Filho(a)(s)</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxArtriteReumatoideAvos" name="artrite_reumatoide" value="Avós ou Tios ou Primos">
                    <label class="form-check-label label_check" for="checkboxArtriteReumatoideAvos">Avós ou Tios ou Primos</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxArtriteReumatoideNaoSabe" name="artrite_reumatoide" value="Não sabe">
                    <label class="form-check-label label_check" for="checkboxArtriteReumatoideNaoSabe">Não sabe</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxArtriteReumatoideSemHistorico" name="artrite_reumatoide" value="Não há histórico familiar">
                    <label class="form-check-label label_check" for="checkboxArtriteReumatoideSemHistorico">Não há histórico familiar</label>
                </div>
            </div>
        </div>
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>
    </div>
</div>

<div class="row g-3 needs-validation page page5">
    <div class="col-md-6 input-border">
        <label for="validationCustomLetra" class="form-label">Possui parente com doença coronariana? <b>*</b> </label>
        <div class="row">
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaCoronarianaPai" name="doenca_coronariana" value="Pai">
                    <label class="form-check-label label_check" for="checkboxDoencaCoronarianaPai">Pai</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaCoronarianaMae" name="doenca_coronariana" value="Mãe">
                    <label class="form-check-label label_check" for="checkboxDoencaCoronarianaMae">Mãe</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaCoronarianaIrmao" name="doenca_coronariana" value="Irmão(a)(s)">
                    <label class="form-check-label label_check" for="checkboxDoencaCoronarianaIrmao">Irmão(a)(s)</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaCoronarianaFilho" name="doenca_coronariana" value="Filho(a)(s)">
                    <label class="form-check-label label_check" for="checkboxDoencaCoronarianaFilho">Filho(a)(s)</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaCoronarianaAvos" name="doenca_coronariana" value="Avós ou Tios ou Primos">
                    <label class="form-check-label label_check" for="checkboxDoencaCoronarianaAvos">Avós ou Tios ou Primos</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaCoronarianaNaoSabe" name="doenca_coronariana" value="Não sabe">
                    <label class="form-check-label label_check" for="checkboxDoencaCoronarianaNaoSabe">Não sabe</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaCoronarianaSemHistorico" name="doenca_coronariana" value="Não há histórico familiar">
                    <label class="form-check-label label_check" for="checkboxDoencaCoronarianaSemHistorico">Não há histórico familiar</label>
                </div>
            </div>
        </div>
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>
    </div>


    <div class="col-md-6">
        <label for="validationCustomLetra" class="form-label">Possui parente com Hipertensão Arterial Sistêmica (HAS)? <b>*</b> </label>
        <div class="row">
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxHASHasPai" name="has" value="Pai">
                    <label class="form-check-label label_check" for="checkboxHASHasPai">Pai</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxHASHasMae" name="has" value="Mãe">
                    <label class="form-check-label label_check" for="checkboxHASHasMae">Mãe</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxHASHasIrmao" name="has" value="Irmão(a)(s)">
                    <label class="form-check-label label_check" for="checkboxHASHasIrmao">Irmão(a)(s)</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxHASHasFilho" name="has" value="Filho(a)(s)">
                    <label class="form-check-label label_check" for="checkboxHASHasFilho">Filho(a)(s)</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxHASHasAvos" name="has" value="Avós ou Tios ou Primos">
                    <label class="form-check-label label_check" for="checkboxHASHasAvos">Avós ou Tios ou Primos</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxHASHasSemHistorico" name="has" value="Não há histórico familiar">
                    <label class="form-check-label label_check" for="checkboxHASHasSemHistorico">Não há histórico familiar</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxHASHasNaoSabe" name="has" value="Não sabe">
                    <label class="form-check-label label_check" for="checkboxHASHasNaoSabe">Não sabe</label>
                </div>
            </div>
        </div>
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>
    </div>
</div>

<div class="row g-3 needs-validation page page6">
    <div class="col-md-6">
        <label for="validationCustomLetra" class="form-label">Possui algum parente com doença celíaca? <b>*</b> </label>
        <div class="row">
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaCeliacaPai" name="doenca_celiaca" value="Pai">
                    <label class="form-check-label label_check" for="checkboxDoencaCeliacaPai">Pai</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaCeliacaMae" name="doenca_celiaca" value="Mãe">
                    <label class="form-check-label label_check" for="checkboxDoencaCeliacaMae">Mãe</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaCeliacaIrmao" name="doenca_celiaca" value="Irmão(a)(s)">
                    <label class="form-check-label label_check" for="checkboxDoencaCeliacaIrmao">Irmão(a)(s)</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaCeliacaFilho" name="doenca_celiaca" value="Filho(a)(s)">
                    <label class="form-check-label label_check" for="checkboxDoencaCeliacaFilho">Filho(a)(s)</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaCeliacaAvos" name="doenca_celiaca" value="Avós ou Tios ou Primos">
                    <label class="form-check-label label_check" for="checkboxDoencaCeliacaAvos">Avós ou Tios ou Primos</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaCeliacaNaoSabe" name="doenca_celiaca" value="Não sabe">
                    <label class="form-check-label label_check" for="checkboxDoencaCeliacaNaoSabe">Não sabe</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="checkboxDoencaCeliacaSemHistorico" name="doenca_celiaca" value="Não há histórico familiar">
                    <label class="form-check-label label_check" for="checkboxDoencaCeliacaSemHistorico">Não há histórico familiar</label>
                </div>
            </div>
        </div>
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>
    </div>
</div>
