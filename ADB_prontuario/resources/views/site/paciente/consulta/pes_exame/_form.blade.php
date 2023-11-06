{{-- MUDAR FORMA --}}
<div class="row g-3 needs-validation page page1">
    <div class="col-md-12">
        <label for="validationCustomSelectDefine" class="form-label">Casos de Úlceras? <b>*</b></label>
        <select class="form-select" id="validationCustomSelectDefine" onclick="mostraDados()" onchange="mostraDados()" onfocus="mostraDados()" name="casos_ulceras" required>
            <option selected disabled value="">Clique para escolher...</option>
            <option value="1" {{ isset($dados->casos_ulceras) && $dados->casos_ulceras == 1 ? 'selected' : '' }}>Sim</option>
            <option value="0" {{ isset($dados->casos_ulceras) && $dados->casos_ulceras == 0 ? 'selected' : '' }}>Não</option>
        </select>
        <div class="invalid-feedback">
            Selecione se há casos de úlceras
        </div>
    </div>
    

    <div class="col-md-12" id="input_show_multiple">
        <label class="form-label">Regiões das Úlceras <b>*</b></label>
        <div class="row">
            <div class="col-md-4">
                <div class="form-check mb-3">
                    <input type="checkbox" class="col-md-4-input form-check-input" id="regiao_plantar_pe_d" name="regioes_ulceras[]" value="regiao_plantar_pe_d" {{ isset($dados->regioes_ulceras) && in_array('regiao_plantar_pe_d', json_decode($dados->regioes_ulceras)) ? 'checked' : '' }}>
                    <label class="col-md-4-label form-check-label label_check" for="regiao_plantar_pe_d">Região plantar no pé D</label>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-check mb-3">
                    <input type="checkbox" class="col-md-4-input form-check-input" id="regiao_plantar_pe_e" name="regioes_ulceras[]" value="regiao_plantar_pe_e" {{ isset($dados->regioes_ulceras) && in_array('regiao_plantar_pe_e', json_decode($dados->regioes_ulceras)) ? 'checked' : '' }}>
                    <label class="col-md-4-label form-check-label label_check" for="regiao_plantar_pe_e">Região plantar no pé E</label>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-check mb-3">
                    <input type="checkbox" class="col-md-4-input form-check-input" id="regiao_lateral_pe_d" name="regioes_ulceras[]" value="regiao_lateral_pe_d" {{ isset($dados->regioes_ulceras) && in_array('regiao_lateral_pe_d', json_decode($dados->regioes_ulceras)) ? 'checked' : '' }}>
                    <label class="col-md-4-label form-check-label label_check" for="regiao_lateral_pe_d">Região lateral no pé D</label>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-check mb-3">
                    <input type="checkbox" class="col-md-4-input form-check-input" id="regiao_lateral_pe_e" name="regioes_ulceras[]" value="regiao_lateral_pe_e" {{ isset($dados->regioes_ulceras) && in_array('regiao_lateral_pe_e', json_decode($dados->regioes_ulceras)) ? 'checked' : '' }}>
                    <label class="col-md-4-label form-check-label label_check" for="regiao_lateral_pe_e">Região lateral no pé E</label>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-check mb-3">
                    <input type="checkbox" class="col-md-4-input form-check-input" id="regiao_dedos_pe_d" name="regioes_ulceras[]" value="regiao_dedos_pe_d" {{ isset($dados->regioes_ulceras) && in_array('regiao_dedos_pe_d', json_decode($dados->regioes_ulceras)) ? 'checked' : '' }}>
                    <label class="col-md-4-label form-check-label label_check" for="regiao_dedos_pe_d">Região dos dedos no pé D</label>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-check mb-3">
                    <input type="checkbox" class="col-md-4-input form-check-input" id="regiao_dedos_pe_e" name="regioes_ulceras[]" value="regiao_dedos_pe_e" {{ isset($dados->regioes_ulceras) && in_array('regiao_dedos_pe_e', json_decode($dados->regioes_ulceras)) ? 'checked' : '' }}>
                    <label class="col-md-4-label form-check-label label_check" for="regiao_dedos_pe_e">Região dos dedos no pé E</label>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-check mb-3">
                    <input type="checkbox" class="col-md-4-input form-check-input" id="regiao_outros" name="regioes_ulceras[]" value="regiao_outros" {{ isset($dados->regioes_ulceras) && in_array('regiao_outros', json_decode($dados->regioes_ulceras)) ? 'checked' : '' }}>
                    <label class="col-md-4-label form-check-label label_check" for="regiao_outros">Outros...</label>
                </div>
            </div>
        </div>
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>
    </div>
        <div class="col-md-12" id="input_show_multiple2">
            <label for="validationCustomLetra" class="form-label">Características das Úlceras <b>*</b></label>
            <div class="row align-content">
                <div class="col-md-4">
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="margens_irregulares_pe_d" name="caracteristicas_ulceras[]" value="margens_irregulares_pe_d" {{ isset($dados->caracteristicas_ulceras) && in_array('margens_irregulares_pe_d', json_decode($dados->caracteristicas_ulceras)) ? 'checked' : '' }}>
                        <label class="form-check-label label_check" for="margens_irregulares_pe_d">Suas margens são irregulares no pé D</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="margens_irregulares_pe_e" name="caracteristicas_ulceras[]" value="margens_irregulares_pe_e" {{ isset($dados->caracteristicas_ulceras) && in_array('margens_irregulares_pe_e', json_decode($dados->caracteristicas_ulceras)) ? 'checked' : '' }}>
                        <label class="form-check-label label_check" for="margens_irregulares_pe_e">Suas margens são irregulares no pé E</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="dolorosas_pe_d" name="caracteristicas_ulceras[]" value="dolorosas_pe_d" {{ isset($dados->caracteristicas_ulceras) && in_array('dolorosas_pe_d', json_decode($dados->caracteristicas_ulceras)) ? 'checked' : '' }}>
                        <label class="form-check-label label_check" for="dolorosas_pe_d">São dolorosas no pé D</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="dolorosas_pe_e" name="caracteristicas_ulceras[]" value="dolorosas_pe_e" {{ isset($dados->caracteristicas_ulceras) && in_array('dolorosas_pe_e', json_decode($dados->caracteristicas_ulceras)) ? 'checked' : '' }}>
                        <label class="form-check-label label_check" for="dolorosas_pe_e">São dolorosas no pé E</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="caracteristicas_outros" name="caracteristicas_ulceras[]" value="caracteristicas_outros" {{ isset($dados->caracteristicas_ulceras) && in_array('caracteristicas_outros', json_decode($dados->caracteristicas_ulceras)) ? 'checked' : '' }}>
                        <label class="form-check-label label_check" for="caracteristicas_outros">Outros...</label>
                    </div>
                </div>
            </div>
            <div class="invalid-feedback">
                Selecione pelo menos uma opção
            </div>
        </div>
   
</div>

<div class="row g-3 needs-validation page page2">
    <div class="col-md-12" id="input_show_multiple3">
        <div class="row">
        <label class="form-label">Assinale as alterações que estiverem presentes em cada pé</label>
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="pele_seca_pe_d" name="alteracoes[]" value="pele_seca_pe_d" {{ isset($dados->alteracoes) && in_array('pele_seca_pe_d', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="pele_seca_pe_d">Pele seca no pé D</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="pele_seca_pe_e" name="alteracoes[]" value="pele_seca_pe_e" {{ isset($dados->alteracoes) && in_array('pele_seca_pe_e', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="pele_seca_pe_e">Pele seca no pé E</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="rachaduras_pe_d" name="alteracoes[]" value="rachaduras_pe_d" {{ isset($dados->alteracoes) && in_array('rachaduras_pe_d', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="rachaduras_pe_d">Rachaduras no pé D</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="rachaduras_pe_e" name="alteracoes[]" value="rachaduras_pe_e" {{ isset($dados->alteracoes) && in_array('rachaduras_pe_e', json_decode($dados->alteracoes)) ? 'checked' : '' }}> 
                <label class="form-check-label" for="rachaduras_pe_e">Rachaduras no pé E</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="fissuras_pe_d" name="alteracoes[]" value="fissuras_pe_d" {{ isset($dados->alteracoes) && in_array('fissuras_pe_d', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="fissuras_pe_d">Fissuras no pé D</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="fissuras_pe_e" name="alteracoes[]" value="fissuras_pe_e" {{ isset($dados->alteracoes) && in_array('fissuras_pe_e', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="fissuras_pe_e">Fissuras no pé E</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="calosidade_pe_d" name="alteracoes[]" value="calosidade_pe_d" {{ isset($dados->alteracoes) && in_array('calosidade_pe_d', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="calosidade_pe_d">Calosidade no pé D</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="calosidade_pe_e" name="alteracoes[]" value="calosidade_pe_e" {{ isset($dados->alteracoes) && in_array('calosidade_pe_e', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="calosidade_pe_e">Calosidade no pé E</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="unhas_atroficas_micoticas_pe_d" name="alteracoes[]" value="unhas_atroficas_micoticas_pe_d" {{ isset($dados->alteracoes) && in_array('unhas_atroficas_micoticas_pe_d', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="unhas_atroficas_micoticas_pe_d">Unhas atroficas ou micóticas no pé D</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="unhas_atroficas_micoticas_pe_e" name="alteracoes[]" value="unhas_atroficas_micoticas_pe_e" {{ isset($dados->alteracoes) && in_array('unhas_atroficas_micoticas_pe_e', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="unhas_atroficas_micoticas_pe_e">Unhas atroficas ou micóticas no pé E</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="unhas_encravadas_pe_d" name="alteracoes[]" value="unhas_encravadas_pe_d" {{ isset($dados->alteracoes) && in_array('unhas_encravadas_pe_d', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="unhas_encravadas_pe_d">Unhas encravadas no pé D</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="unhas_encravadas_pe_e" name="alteracoes[]" value="unhas_encravadas_pe_e" {{ isset($dados->alteracoes) && in_array('unhas_encravadas_pe_e', json_decode($dados->alteracoes)) ? 'checked' : '' }} >
                <label class="form-check-label" for="unhas_encravadas_pe_e">Unhas encravadas no pé E</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="micose_interdigital_pe_d" name="alteracoes[]" value="micose_interdigital_pe_d" {{ isset($dados->alteracoes) && in_array('micose_interdigital_pe_d', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="micose_interdigital_pe_d">Micose interdigital no pé D</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="micose_interdigital_pe_e" name="alteracoes[]" value="micose_interdigital_pe_e" {{ isset($dados->alteracoes) && in_array('micose_interdigital_pe_e', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="micose_interdigital_pe_e">Micose interdigital no pé E</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="bolhas_pe_d" name="alteracoes[]" value="bolhas_pe_d" {{ isset($dados->alteracoes) && in_array('bolhas_pe_d', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="bolhas_pe_d">Bolhas no pé D</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="bolhas_pe_e" name="alteracoes[]" value="bolhas_pe_e" {{ isset($dados->alteracoes) && in_array('bolhas_pe_e', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="bolhas_pe_e">Bolhas no pé E</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="edema_pe_d" name="alteracoes[]" value="edema_pe_d" {{ isset($dados->alteracoes) && in_array('edema_pe_d', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="edema_pe_d">Edema no pé D</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="edema_pe_e" name="alteracoes[]" value="edema_pe_e" {{ isset($dados->alteracoes) && in_array('edema_pe_e', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="edema_pe_e">Edema no pé E</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="alteracao_coloracao_pe_d" name="alteracoes[]" value="alteracao_coloracao_pe_d" {{ isset($dados->alteracoes) && in_array('alteracao_coloracao_pe_d', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="alteracao_coloracao_pe_d">Alteração de coloração no pé D</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="alteracao_coloracao_pe_e" name="alteracoes[]" value="alteracao_coloracao_pe_e" {{ isset($dados->alteracoes) && in_array('alteracao_coloracao_pe_e', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="alteracao_coloracao_pe_e">Alteração de coloração no pé E</label>
            </div>
        </div>        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="palidez_elevacao_pe_d" name="alteracoes[]" value="palidez_elevacao_pe_d" {{ isset($dados->alteracoes) && in_array('palidez_elevacao_pe_d', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="palidez_elevacao_pe_d">Palidez à elevação do pé D</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="palidez_elevacao_pe_e" name="alteracoes[]" value="palidez_elevacao_pe_e" {{ isset($dados->alteracoes) && in_array('palidez_elevacao_pe_e', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="palidez_elevacao_pe_e">Palidez à elevação do pé E</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="veias_dorsais_dilatadas_pe_d" name="alteracoes[]" value="veias_dorsais_dilatadas_pe_d" {{ isset($dados->alteracoes) && in_array('veias_dorsais_dilatadas_pe_d', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="veias_dorsais_dilatadas_pe_d">Veias dorsais dilatadas no pé D</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="veias_dorsais_dilatadas_pe_e" name="alteracoes[]" value="veias_dorsais_dilatadas_pe_e" {{ isset($dados->alteracoes) && in_array('veias_dorsais_dilatadas_pe_e', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="veias_dorsais_dilatadas_pe_e">Veias dorsais dilatadas no pé E</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="veias_dorsais_colabadas_pe_d" name="alteracoes[]" value="veias_dorsais_colabadas_pe_d" {{ isset($dados->alteracoes) && in_array('veias_dorsais_colabadas_pe_d', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="veias_dorsais_colabadas_pe_d">Veias dorsais colabadas no pé D</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="veias_dorsais_colabadas_pe_e" name="alteracoes[]" value="veias_dorsais_colabadas_pe_e" {{ isset($dados->alteracoes) && in_array('veias_dorsais_colabadas_pe_e', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="veias_dorsais_colabadas_pe_e">Veias dorsais colabadas no pé E</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="ausencia_pelos_pe_d" name="alteracoes[]" value="ausencia_pelos_pe_d" {{ isset($dados->alteracoes) && in_array('ausencia_pelos_pe_d', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="ausencia_pelos_pe_d">Ausência de pelos no pé D</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="ausencia_pelos_pe_e" name="alteracoes[]" value="ausencia_pelos_pe_e" {{ isset($dados->alteracoes) && in_array('ausencia_pelos_pe_e', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="ausencia_pelos_pe_e">Ausência de pelos no pé E</label>
            </div>
        </div>        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="pe_quente_d" name="alteracoes[]" value="pe_quente_d" {{ isset($dados->alteracoes) && in_array('pe_quente_d', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="pe_quente_d">Pé quente D</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="pe_quente_e" name="alteracoes[]" value="pe_quente_e" {{ isset($dados->alteracoes) && in_array('pe_quente_e', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="pe_quente_e">Pé quente E</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="pe_frio_d" name="alteracoes[]" value="pe_frio_d" {{ isset($dados->alteracoes) && in_array('pe_frio_d', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="pe_frio_d">Pé frio D</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="pe_frio_e" name="alteracoes[]" value="pe_frio_e" {{ isset($dados->alteracoes) && in_array('pe_frio_e', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="pe_frio_e">Pé frio E</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="outros" name="alteracoes[]" value="outros" {{ isset($dados->alteracoes) && in_array('outros', json_decode($dados->alteracoes)) ? 'checked' : '' }}>
                <label class="form-check-label" for="outros">Outros…</label>
            </div>
        </div>
        
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>        
    </div>
    </div>
    
    </div>
    
    <div class="row g-3 needs-validation page page3">
    <div class="col-md-12" id="input_show_multiple4">
        <div class="row">
        <label class="form-label">Acerca das seguintes deformidades, assinale aquelas que estão presentes em cada pé</label>
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="amputacao_pe_d" name="deformidades[]" value="amputacao_pe_d" {{ isset($dados->deformidades) && in_array('amputacao_pe_d', json_decode($dados->deformidades)) ? 'checked' : '' }}>
                <label class="form-check-label" for="amputacao_pe_d">Amputação no pé D</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="dedos_garra_pe_d" name="deformidades[]" value="dedos_garra_pe_d" {{ isset($dados->deformidades) && in_array('dedos_garra_pe_d', json_decode($dados->deformidades)) ? 'checked' : '' }}>
                <label class="form-check-label" for="dedos_garra_pe_d">Dedos em garra no pé D</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="dedos_martelo_pe_d" name="deformidades[]" value="dedos_martelo_pe_d" {{ isset($dados->deformidades) && in_array('dedos_martelo_pe_d', json_decode($dados->deformidades)) ? 'checked' : '' }}>
                <label class="form-check-label" for="dedos_martelo_pe_d">Dedos em martelo no pé D</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="hallux_valgus_pe_d" name="deformidades[]" value="hallux_valgus_pe_d" {{ isset($dados->deformidades) && in_array('hallux_valgus_pe_d', json_decode($dados->deformidades)) ? 'checked' : '' }}>
                <label class="form-check-label" for="hallux_valgus_pe_d">Hallux valgus (joanete) no pé D</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="acento_arco_plantar_pe_d" name="deformidades[]" value="acento_arco_plantar_pe_d" {{ isset($dados->deformidades) && in_array('acento_arco_plantar_pe_d', json_decode($dados->deformidades)) ? 'checked' : '' }}>
                <label class="form-check-label" for="acento_arco_plantar_pe_d">Acentuação de arco plantar/pé cavo D</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="desabamento_antepé_pe_d" name="deformidades[]" value="desabamento_antepé_pe_d" {{ isset($dados->deformidades) && in_array('desabamento_antepé_pe_d', json_decode($dados->deformidades)) ? 'checked' : '' }}>
                <label class="form-check-label" for="desabamento_antepé_pe_d">Desabamento de antepé/pé plano D</label>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="charcot_pe_d" name="deformidades[]" value="charcot_pe_d" {{ isset($dados->deformidades) && in_array('charcot_pe_d', json_decode($dados->deformidades)) ? 'checked' : '' }}>
                <label class="form-check-label" for="charcot_pe_d">Charcot no pé D</label>
            </div>
        </div>
        
        <div class="invalid-feedback">
            Selecione pelo menos uma opção
        </div>        
        </div>
        </div>
     
    
        <div class="col-md-12" id="input_show_multiple5">
            <div class="row">
                <label class="form-label">Assinale os pulsos que estão presentes à palpação</label>
                <div class="col-md-4">        
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="pedioso_direito" name="pulsos[]" value="pedioso_direito" {{ isset($dados->pulsos) && in_array('pedioso_direito', json_decode($dados->pulsos)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="pedioso_direito">Pedioso direito</label>
                    </div>
                </div>
                <div class="col-md-4">        
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="pedioso_esquerdo" name="pulsos[]" value="pedioso_esquerdo" {{ isset($dados->pulsos) && in_array('pedioso_esquerdo', json_decode($dados->pulsos)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="pedioso_esquerdo">Pedioso esquerdo</label>
                    </div>
                </div>
                <div class="col-md-4">        
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="tibial_direito" name="pulsos[]" value="tibial_direito" {{ isset($dados->pulsos) && in_array('tibial_direito', json_decode($dados->pulsos)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="tibial_direito">Tibial direito</label>
                    </div>
                </div>
                <div class="col-md-4">        
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="tibial_esquerdo" name="pulsos[]" value="tibial_esquerdo" {{ isset($dados->pulsos) && in_array('tibial_esquerdo', json_decode($dados->pulsos)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="tibial_esquerdo">Tibial esquerdo</label>
                    </div>
                </div>
                <div class="invalid-feedback">
                    Selecione pelo menos uma opção
                </div>
            </div>
        </div>
        
        </div>
        
    <div class="row g-3 needs-validation page page4">
        <div class="col-md-12" id="input_show_multiple6">
            <div class="row">
                <label class="form-label">Assinale a presença de alterações neuropáticas</label>
                <div class="col-md-4">        
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="perda_LSP_pe_d" name="alteracoes_neuropaticas[]" value="perda_LSP_pe_d" {{ isset($dados->alteracoes_neuropaticas) && in_array('perda_LSP_pe_d', json_decode($dados->alteracoes_neuropaticas)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="perda_LSP_pe_d">Perda de LSP (teste monofilamento) no pé D</label>
                    </div>
                </div>
                <div class="col-md-4">        
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="perda_LSP_pe_e" name="alteracoes_neuropaticas[]" value="perda_LSP_pe_e" {{ isset($dados->alteracoes_neuropaticas) && in_array('perda_LSP_pe_e', json_decode($dados->alteracoes_neuropaticas)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="perda_LSP_pe_e">Perda de LPS (teste monofilamento) no pé E</label>
                    </div>
                </div>
                <div class="col-md-4">        
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="perda_vibratoria_pe_d" name="alteracoes_neuropaticas[]" value="perda_vibratoria_pe_d" {{ isset($dados->alteracoes_neuropaticas) && in_array('perda_vibratoria_pe_d', json_decode($dados->alteracoes_neuropaticas)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="perda_vibratoria_pe_d">Perda de sensibilidade vibratória (teste diapasão) no pé D</label>
                    </div>
                </div>
                <div class="col-md-4">        
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="perda_vibratoria_pe_e" name="alteracoes_neuropaticas[]" value="perda_vibratoria_pe_e" {{ isset($dados->alteracoes_neuropaticas) && in_array('perda_vibratoria_pe_e', json_decode($dados->alteracoes_neuropaticas)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="perda_vibratoria_pe_e">Perda de sensibilidade vibratória (teste diapasão) no pé E</label>
                    </div>
                </div>
                <div class="col-md-4">        
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="perda_dolorosa_pe_d" name="alteracoes_neuropaticas[]" value="perda_dolorosa_pe_d" {{ isset($dados->alteracoes_neuropaticas) && in_array('perda_dolorosa_pe_d', json_decode($dados->alteracoes_neuropaticas)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="perda_dolorosa_pe_d">Perda de sensibilidade dolorosa (teste do palito) no pé D</label>
                    </div>
                </div>
                <div class="col-md-4">        
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="perda_dolorosa_pe_e" name="alteracoes_neuropaticas[]" value="perda_dolorosa_pe_e" {{ isset($dados->alteracoes_neuropaticas) && in_array('perda_dolorosa_pe_e', json_decode($dados->alteracoes_neuropaticas)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="perda_dolorosa_pe_e">Perda de sensibilidade dolorosa (teste do palito) no pé E</label>
                    </div>
                </div>
                <div class="col-md-4">        
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="perda_termica_pe_d" name="alteracoes_neuropaticas[]" value="perda_termica_pe_d" {{ isset($dados->alteracoes_neuropaticas) && in_array('perda_termica_pe_d', json_decode($dados->alteracoes_neuropaticas)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="perda_termica_pe_d">Perda de sensibilidade térmica (teste quente/frio) no pé D</label>
                    </div>
                </div>
                <div class="col-md-4">        
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="perda_termica_pe_e" name="alteracoes_neuropaticas[]" value="perda_termica_pe_e" {{ isset($dados->alteracoes_neuropaticas) && in_array('perda_termica_pe_e', json_decode($dados->alteracoes_neuropaticas)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="perda_termica_pe_e">Perda de sensibilidade térmica (teste quente/frio) no pé E</label>
                    </div>
                </div>
                <div class="col-md-4">        
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="alteracao_reflexos_pe_d" name="alteracoes_neuropaticas[]" value="alteracao_reflexos_pe_d" {{ isset($dados->alteracoes_neuropaticas) && in_array('alteracao_reflexos_pe_d', json_decode($dados->alteracoes_neuropaticas)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="alteracao_reflexos_pe_d">Alteração dos reflexos no pé D</label>
                    </div>
                </div>
                <div class="col-md-4">        
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="alteracao_reflexos_pe_e" name="alteracoes_neuropaticas[]" value="alteracao_reflexos_pe_e" {{ isset($dados->alteracoes_neuropaticas) && in_array('alteracao_reflexos_pe_e', json_decode($dados->alteracoes_neuropaticas)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="alteracao_reflexos_pe_e">Alteração dos reflexos no pé E</label>
                    </div>
                </div>
                <div class="col-md-4">        
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="outros_neuropaticas" name="alteracoes_neuropaticas[]" value="outros_neuropaticas" {{ isset($dados->alteracoes_neuropaticas) && in_array('outros_neuropaticas', json_decode($dados->alteracoes_neuropaticas)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="outros_neuropaticas">Outros…</label>
                    </div>
                </div>
                <div class="invalid-feedback">
                    Selecione pelo menos uma opção
                </div>
        </div>
        </div>
    </div>
    
    <div class="row g-3 needs-validation page page5">
        <div class="col-md-12" id="input_show_multiple7">
            <div class="row">
                <label class="form-label">Assinale as demais alterações que estiverem presentes</label>
                <div class="col-md-4">
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="limitacao_mobilidade_articular" name="demais_alteracoes[]" value="limitacao_mobilidade_articular" {{ isset($dados->demais_alteracoes) && in_array('limitacao_mobilidade_articular', json_decode($dados->demais_alteracoes)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="limitacao_mobilidade_articular">Limitação de mobilidade articular (sinal da prece)</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="higiene_pobre_pes" name="demais_alteracoes[]" value="higiene_pobre_pes" {{ isset($dados->demais_alteracoes) && in_array('higiene_pobre_pes', json_decode($dados->demais_alteracoes)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="higiene_pobre_pes">Higiene pobre dos pés</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="calcados_inadequados" name="demais_alteracoes[]" value="calcados_inadequados" {{ isset($dados->demais_alteracoes) && in_array('calcados_inadequados', json_decode($dados->demais_alteracoes)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="calcados_inadequados">Uso de calçados inadequados</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="alteracao_propriocepcao_pe_d" name="demais_alteracoes[]" value="alteracao_propriocepcao_pe_d" {{ isset($dados->demais_alteracoes) && in_array('alteracao_propriocepcao_pe_d', json_decode($dados->demais_alteracoes)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="alteracao_propriocepcao_pe_d">Alteração propriocepção pé D</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="alteracao_propriocepcao_pe_e" name="demais_alteracoes[]" value="alteracao_propriocepcao_pe_e" {{ isset($dados->demais_alteracoes) && in_array('alteracao_propriocepcao_pe_e', json_decode($dados->demais_alteracoes)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="alteracao_propriocepcao_pe_e">Alteração propriocepção pé E</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="alteracao_caminhada_calcanhares" name="demais_alteracoes[]" value="alteracao_caminhada_calcanhares" {{ isset($dados->demais_alteracoes) && in_array('alteracao_caminhada_calcanhares', json_decode($dados->demais_alteracoes)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="alteracao_caminhada_calcanhares">Alteração na caminhada com calcanhares</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="alteracao_caminhada_ponta_pes" name="demais_alteracoes[]" value="alteracao_caminhada_ponta_pes" {{ isset($dados->demais_alteracoes) && in_array('alteracao_caminhada_ponta_pes', json_decode($dados->demais_alteracoes)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="alteracao_caminhada_ponta_pes">Alteração na caminhada na ponta dos pés</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="outros_demais_alteracoes" name="demais_alteracoes[]" value="outros_demais_alteracoes" {{ isset($dados->demais_alteracoes) && in_array('outros_demais_alteracoes', json_decode($dados->demais_alteracoes)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="outros_demais_alteracoes">Outros…</label>
                    </div>
                </div>
                <div class="invalid-feedback">
                    Selecione pelo menos uma opção
                </div>
    </div>
    </div>
    
    
    <div class="col-md-4" id="input_show_multiple8">
        <label for="validationCustomObservacoes1" class="form-label">Observações <b>*</b> </label>
        <input type="text" class="form-control" id="validationCustomObservacoes1" value="{{ isset($dados->observacoes) ? $dados->observacoes : '' }}" name="observacoes" required>
        <div class="invalid-feedback">
            Insira observações
        </div>
    </div>
    </div>
