<!-- exame fisico -->

<div class="col-md-4">
    <label for="validationCustomNumUSP" class="form-label">Peso <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomPeso" value="{{isset($rows->peso) ? $rows->peso : ''}}" maxlength="8" name="peso" required>
    <div class="invalid-feedback">
        Insira o peso
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomAltura" class="form-label">Altura <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomAltura" value="{{ isset($rows->altura) ? $rows->altura : '' }}" step="0.01" name="altura" required>
    <div class="invalid-feedback">
        Insira a altura
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomPressao" class="form-label">Pressão Arterial <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomPressao" value="{{ isset($rows->pressao_arterial) ? $rows->pressao_arterial : '' }}" name="pressao_arterial" required>
    <div class="invalid-feedback">
        Insira a pressão arterial
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomPressao" class="form-label">Tensão Arterial <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomPressao" value="{{ isset($rows->pressao_arterial) ? $rows->pressao_arterial : '' }}" name="pressao_arterial" required>
    <div class="invalid-feedback">
        Insira a Tensão Arterial
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomPulso" class="form-label">Pulso Arterial <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomPulso" value="{{ isset($rows->pulso_arterial) ? $rows->pulso_arterial : '' }}" name="pulso_arterial" required>
    <div class="invalid-feedback">
        Insira o Pulso Arterial
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomFreqCardiaca" class="form-label">Frequência Cardíaca <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomFreqCardiaca" value="{{ isset($rows->frequencia_cardiaca) ? $rows->frequencia_cardiaca : '' }}" name="frequencia_cardiaca" required>
    <div class="invalid-feedback">
        Insira a Frequência Cardíaca
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomAspecto" class="form-label">Aspecto Geral <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomAspecto" value="{{ isset($rows->aspecto_geral) ? $rows->aspecto_geral : '' }}" name="aspecto_geral" required>
    <div class="invalid-feedback">
        Insira o Aspecto Geral
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomCabecaPescoco" class="form-label">Cabeça e Pescoço <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomCabecaPescoco" value="{{ isset($rows->cabeca_pescoco) ? $rows->cabeca_pescoco : '' }}" name="cabeca_pescoco" required>
    <div class="invalid-feedback">
        Insira Cabeça e Pescoço
    </div>
</div>


<div class="col-md-4">
    <label for="validationCustomCircQuadril" class="form-label">Circunferência do Quadril <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomCircQuadril" value="{{ isset($rows->circunferencia_quadril) ? $rows->circunferencia_quadril : '' }}" step="0.01" name="circunferencia_quadril" required>
    <div class="invalid-feedback">
        Insira a Circunferência do Quadril
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomCircPescoco" class="form-label">Circunferência do Pescoço <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomCircPescoco" value="{{ isset($rows->circunferencia_pescoco) ? $rows->circunferencia_pescoco : '' }}" step="0.01" name="circunferencia_pescoco" required>
    <div class="invalid-feedback">
        Insira a Circunferência do Pescoço
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomCircAbdominal" class="form-label">Circunferência Abdominal <b>*</b></label>
    <input type="number" class="text-center form-control" id="validationCustomCircAbdominal" value="{{ isset($rows->circunferencia_abdominal) ? $rows->circunferencia_abdominal : '' }}" step="0.01" name="circunferencia_abdominal" required>
    <div class="invalid-feedback">
        Insira a Circunferência Abdominal
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSistemaVenoso" class="form-label">Sistema Venoso <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomSistemaVenoso" value="{{ isset($rows->sistema_venoso) ? $rows->sistema_venoso : '' }}" name="sistema_venoso" required>
    <div class="invalid-feedback">
        Insira o Sistema Venoso
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSistemaDigestivo" class="form-label">Sistema Digestivo <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomSistemaDigestivo" value="{{ isset($rows->sistema_digestivo) ? $rows->sistema_digestivo : '' }}" name="sistema_digestivo" required>
    <div class="invalid-feedback">
        Insira o Sistema Digestivo
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSistemaRespiratorio" class="form-label">Sistema Respiratório <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomSistemaRespiratorio" value="{{ isset($rows->sistema_respiratorio) ? $rows->sistema_respiratorio : '' }}" name="sistema_respiratorio" required>
    <div class="invalid-feedback">
        Insira o Sistema Respiratório
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSistemaCardiovascular" class="form-label">Sistema Cardiovascular <b>*</b></label>
    <input type="text" class="form-control" id="validationCustomSistemaCardiovascular" value="{{ isset($rows->sistema_cardiovascular) ? $rows->sistema_cardiovascular : '' }}" name="sistema_cardiovascular" required>
    <div class="invalid-feedback">
        Insira o Sistema Cardiovascular
    </div>
</div>

<div class="col-md-12">
    <label for="validationCustomConsideracoes" class="form-label">Considerações sobre Outros Sistemas <b>*</b></label>
    <textarea class="form-control" id="validationCustomConsideracoes" name="consideracoes_outros_sistemas" required>{{ isset($rows->consideracoes_outros_sistemas) ? $rows->consideracoes_outros_sistemas : '' }}</textarea>
    <div class="invalid-feedback">
        Insira as Considerações sobre Outros Sistemas
    </div>
</div>

<!-- dieta -->

<div class="col-md-4">
    <label for="validationCustomRealiza" class="form-label">Realização <b>*</b></label>
    <select class="form-select" id="validationCustomRealiza" name="realiza" required>
        <option value="1" {{ isset($rows->realiza) && $rows->realiza == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->realiza) && $rows->realiza == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se a realização ocorre
    </div>
</div>


<div class="col-md-4">
    <label for="validationCustomTipoDieta" class="form-label">Tipo de Dieta</label>
    <select class="form-select" id="validationCustomTipoDieta" name="tipo_dieta">
        <option value="Restringe apenas açúcar e doce" {{ isset($rows->tipo_dieta) && $rows->tipo_dieta === 'Restringe apenas açúcar e doce' ? 'selected' : '' }}>Restringe apenas açúcar e doce</option>
        <option value="Dieta de calorias" {{ isset($rows->tipo_dieta) && $rows->tipo_dieta === 'Dieta de calorias' ? 'selected' : '' }}>Dieta de calorias</option>
        <option value="Contagem de carboidratos" {{ isset($rows->tipo_dieta) && $rows->tipo_dieta === 'Contagem de carboidratos' ? 'selected' : '' }}>Contagem de carboidratos</option>
        <option value="Índice glicêmico" {{ isset($rows->tipo_dieta) && $rows->tipo_dieta === 'Índice glicêmico' ? 'selected' : '' }}>Índice glicêmico</option>
        <option value="Outros" {{ isset($rows->tipo_dieta) && $rows->tipo_dieta === 'Outros' ? 'selected' : '' }}>Outros</option>
    </select>
    <div class="invalid-feedback">
        Selecione o tipo de dieta
    </div>
</div>


<div class="col-md-4">
    <label for="validationCustomSegueDieta" class="form-label">Segue Dieta</label>
    <input type="number" class="text-center form-control" id="validationCustomSegueDieta" value="{{ isset($rows->segue_dieta) ? $rows->segue_dieta : '' }}" name="segue_dieta">
    <div class="invalid-feedback">
        Insira a dieta que segue
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDificuldadeDieta" class="form-label">Dificuldade na Dieta</label>
    <input type="text" class="form-control" id="validationCustomDificuldadeDieta" value="{{ isset($rows->dificuldade_dieta) ? $rows->dificuldade_dieta : '' }}" name="dificuldade_dieta">
    <div class="invalid-feedback">
        Insira a dificuldade na dieta
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomOrientador" class="form-label">Orientador</label>
    <input type="text" class="form-control" id="validationCustomOrientador" value="{{ isset($rows->orientador) ? $rows->orientador : '' }}" name="orientador">
    <div class="invalid-feedback">
        Insira o nome do orientador
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomConsultaNutricionista" class="form-label">Consulta com Nutricionista <b>*</b></label>
    <select class="form-select" id="validationCustomConsultaNutricionista" name="consulta_nutricionista" required>
        <option value="1" {{ isset($rows->consulta_nutricionista) && $rows->consulta_nutricionista == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->consulta_nutricionista) && $rows->consulta_nutricionista == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se realiza consulta com nutricionista
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomFreqConsulta" class="form-label">Frequência de Consulta</label>
    <input type="number" class="text-center form-control" id="validationCustomFreqConsulta" value="{{ isset($rows->frequencia_nutricionista) ? $rows->frequencia_nutricionista : '' }}" name="frequencia_nutricionista">
    <div class="invalid-feedback">
        Insira a frequência da consulta com nutricionista
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomConsomeDieteticos" class="form-label">Consome Produtos Dietéticos <b>*</b></label>
    <select class="form-select" id="validationCustomConsomeDieteticos" name="consome_dieteticos" required>
        <option value="1" {{ isset($rows->consome_dieteticos) && $rows->consome_dieteticos == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->consome_dieteticos) && $rows->consome_dieteticos == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se consome produtos dietéticos
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomProdutosDieteticos" class="form-label">Produtos Dietéticos Consumidos</label>
    <input type="text" class="form-control" id="validationCustomProdutosDieteticos" value="{{ isset($rows->produtos_dieteticos) ? $rows->produtos_dieteticos : '' }}" name="produtos_dieteticos">
    <div class="invalid-feedback">
        Insira os produtos dietéticos consumidos
    </div>
</div>

<!-- inrernacoes historico -->

<div class="col-md-4">
    <label for="validationCustomInternacao" class="form-label">Internação no Último Ano <b>*</b></label>
    <select class="form-select" id="validationCustomInternacao" name="internacao_ultimo_ano" required>
        <option value="1" {{ isset($rows->internacao_ultimo_ano) && $rows->internacao_ultimo_ano == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->internacao_ultimo_ano) && $rows->internacao_ultimo_ano == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve internação no último ano
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomFreqInternacao" class="form-label">Frequência de Internação no Último Ano</label>
    <input type="number" class="text-center form-control" id="validationCustomFreqInternacao" value="{{ isset($rows->frequencia_ultimo_ano) ? $rows->frequencia_ultimo_ano : '' }}" name="frequencia_ultimo_ano">
    <div class="invalid-feedback">
        Insira a frequência de internação no último ano
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomLocalInternacao" class="form-label">Local da Internação</label>
    <input type="text" class="form-control" id="validationCustomLocalInternacao" value="{{ isset($rows->local) ? $rows->local : '' }}" name="local">
    <div class="invalid-feedback">
        Insira o local da internação
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomMotivoInternacao" class="form-label">Motivo da Internação</label>
    <input type="text" class="form-control" id="validationCustomMotivoInternacao" value="{{ isset($rows->motivo) ? $rows->motivo : '' }}" name="motivo">
    <div class="invalid-feedback">
        Insira o motivo da internação
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDiasInternado" class="form-label">Quantidade de Dias Internado</label>
    <input type="number" class="text-center form-control" id="validationCustomDiasInternado" value="{{ isset($rows->quantidade_dias) ? $rows->quantidade_dias : '' }}" name="quantidade_dias">
    <div class="invalid-feedback">
        Insira a quantidade de dias internado
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomFatorDesencadeante" class="form-label">Fator Desencadeante</label>
    <select class="form-select" id="validationCustomFatorDesencadeante" name="fator_desencadeante">
        <option value="Infecção" {{ isset($rows->fator_desencadeante) && $rows->fator_desencadeante === 'Infecção' ? 'selected' : '' }}>Infecção</option>
        <option value="Erro de administração de insulina" {{ isset($rows->fator_desencadeante) && $rows->fator_desencadeante === 'Erro de administração de insulina' ? 'selected' : '' }}>Erro de administração de insulina</option>
        <option value="Estresse" {{ isset($rows->fator_desencadeante) && $rows->fator_desencadeante === 'Estresse' ? 'selected' : '' }}>Estresse</option>
        <option value="Não houve fator desencadeante" {{ isset($rows->fator_desencadeante) && $rows->fator_desencadeante === 'Não houve fator desencadeante' ? 'selected' : '' }}>Não houve fator desencadeante</option>
        <option value="Outro" {{ isset($rows->fator_desencadeante) && $rows->fator_desencadeante === 'Outro' ? 'selected' : '' }}>Outro</option>
    </select>
    <div class="invalid-feedback">
        Selecione o fator desencadeante
    </div>
</div>

<!-- nascimento_dados -->

<div class="col-md-4">
    <label for="validationCustomAmamentacao" class="form-label">Amamentação Exclusiva <b>*</b></label>
    <select class="form-select" id="validationCustomAmamentacao" name="amamentacao_exclusiva" required>
        <option value="1" {{ isset($rows->amamentacao_exclusiva) && $rows->amamentacao_exclusiva == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->amamentacao_exclusiva) && $rows->amamentacao_exclusiva == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve amamentação exclusiva
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomTempoAmamentacao" class="form-label">Tempo de Amamentação Exclusiva</label>
    <input type="text" class="form-control" id="validationCustomTempoAmamentacao" value="{{ isset($rows->tempo_amamentacao_exclusiva) ? $rows->tempo_amamentacao_exclusiva : '' }}" name="tempo_amamentacao_exclusiva">
    <div class="invalid-feedback">
        Insira o tempo de amamentação exclusiva
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomOrdemFilho" class="form-label">Ordem do Filho</label>
    <select class="form-select" id="validationCustomOrdemFilho" name="ordem">
        <option value="Primeiro filho" {{ isset($rows->ordem) && $rows->ordem === 'Primeiro filho' ? 'selected' : '' }}>Primeiro filho</option>
        <option value="Segundo filho" {{ isset($rows->ordem) && $rows->ordem === 'Segundo filho' ? 'selected' : '' }}>Segundo filho</option>
        <option value="Terceiro filho" {{ isset($rows->ordem) && $rows->ordem === 'Terceiro filho' ? 'selected' : '' }}>Terceiro filho</option>
        <option value="Quarto filho" {{ isset($rows->ordem) && $rows->ordem === 'Quarto filho' ? 'selected' : '' }}>Quarto filho</option>
        <option value="Quinto filho" {{ isset($rows->ordem) && $rows->ordem === 'Quinto filho' ? 'selected' : '' }}>Quinto filho</option>
        <option value="Sexto filho" {{ isset($rows->ordem) && $rows->ordem === 'Sexto filho' ? 'selected' : '' }}>Sexto filho</option>
        <option value="Sétimo filho" {{ isset($rows->ordem) && $rows->ordem === 'Sétimo filho' ? 'selected' : '' }}>Sétimo filho</option>
        <option value="Oitavo filho" {{ isset($rows->ordem) && $rows->ordem === 'Oitavo filho' ? 'selected' : '' }}>Oitavo filho</option>
        <option value="Nono filho" {{ isset($rows->ordem) && $rows->ordem === 'Nono filho' ? 'selected' : '' }}>Nono filho</option>
        <option value="Décimo filho ou maior" {{ isset($rows->ordem) && $rows->ordem === 'Décimo filho ou maior' ? 'selected' : '' }}>Décimo filho ou maior</option>
    </select>
    <div class="invalid-feedback">
        Selecione a ordem do filho
    </div>
</div>


<div class="col-md-4">
    <label for="validationCustomTipoParto" class="form-label">Tipo de Parto</label>
    <select class="form-select" id="validationCustomTipoParto" name="tipo_parto">
        <option value="Normal" {{ isset($rows->tipo_parto) && $rows->tipo_parto === 'Normal' ? 'selected' : '' }}>Normal</option>
        <option value="Cesárea" {{ isset($rows->tipo_parto) && $rows->tipo_parto === 'Cesárea' ? 'selected' : '' }}>Cesárea</option>
        <option value="Não sabe" {{ isset($rows->tipo_parto) && $rows->tipo_parto === 'Não sabe' ? 'selected' : '' }}>Não sabe</option>
    </select>
    <div class="invalid-feedback">
        Selecione o tipo de parto
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomPesoBebe" class="form-label">Peso do Bebê</label>
    <select class="form-select" id="validationCustomPesoBebe" name="peso">
        <option value="<2Kg" {{ isset($rows->peso) && $rows->peso === '< 2Kg' ? 'selected' : '' }}><2Kg</option>
        <option value="2,1Kg - 2,5Kg" {{ isset($rows->peso) && $rows->peso === '2,1Kg - 2,5Kg' ? 'selected' : '' }}>2,1Kg - 2,5Kg</option>
        <option value="2,6Kg - 3Kg" {{ isset($rows->peso) && $rows->peso === '2,6Kg - 3Kg' ? 'selected' : '' }}>2,6Kg - 3Kg</option>
        <option value="3,1Kg - 3,5Kg" {{ isset($rows->peso) && $rows->peso === '3,1Kg - 3,5Kg' ? 'selected' : '' }}>3,1Kg - 3,5Kg</option>
        <option value="3,6Kg - 4Kg" {{ isset($rows->peso) && $rows->peso === '3,6Kg - 4Kg' ? 'selected' : '' }}>3,6Kg - 4Kg</option>
        <option value="> 4Kg" {{ isset($rows->peso) && $rows->peso === '> 4Kg' ? 'selected' : '' }}>> 4Kg</option>
        <option value="Não sabe" {{ isset($rows->peso) && $rows->peso === 'Não sabe' ? 'selected' : '' }}>Não sabe</option>
    </select>
    <div class="invalid-feedback">
        Selecione o peso do bebê
    </div>
</div>


<div class="col-md-4">
    <label for="validationCustomVacinacao" class="form-label">Vaccinação</label>
    <select class="form-select" id="validationCustomVacinacao" name="vacinacao">
        <option value="Sim" {{ isset($rows->vacinacao) && $rows->vacinacao === 'Sim' ? 'selected' : '' }}>Sim</option>
        <option value="Não" {{ isset($rows->vacinacao) && $rows->vacinacao === 'Não' ? 'selected' : '' }}>Não</option>
        <option value="Não sei" {{ isset($rows->vacinacao) && $rows->vacinacao === 'Não sei' ? 'selected' : '' }}>Não sei</option>
    </select>
    <div class="invalid-feedback">
        Selecione a vacinação
    </div>
</div>

<!-- ginecologico dados -->

<div class="col-md-4">
    <label for="validationCustomMenopausa" class="form-label">Menopausa <b>*</b></label>
    <select class="form-select" id="validationCustomMenopausa" name="menopausa" required>
        <option value="1" {{ isset($rows->menopausa) && $rows->menopausa == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->menopausa) && $rows->menopausa == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve menopausa
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomIdadeMenopausa" class="form-label">Idade na Menopausa</label>
    <input type="number" class="text-center form-control" id="validationCustomIdadeMenopausa" value="{{ isset($rows->idade_menopausa) ? $rows->idade_menopausa : '' }}" name="idade_menopausa">
    <div class="invalid-feedback">
        Insira a idade na menopausa
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomMenopausaCirurgica" class="form-label">Menopausa Cirúrgica</label>
    <select class="form-select" id="validationCustomMenopausaCirurgica" name="menopausa_cirurgica">
        <option value="1" {{ isset($rows->menopausa_cirurgica) && $rows->menopausa_cirurgica == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->menopausa_cirurgica) && $rows->menopausa_cirurgica == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve menopausa cirúrgica
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomMenstruacao" class="form-label">Menstruação <b>*</b></label>
    <select class="form-select" id="validationCustomMenstruacao" name="menstruacao" required>
        <option value="1" {{ isset($rows->menstruacao) && $rows->menstruacao == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->menstruacao) && $rows->menstruacao == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há menstruação
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomIdadeMenstruacao" class="form-label">Idade na Menstruação</label>
    <input type="number" class="text-center form-control" id="validationCustomIdadeMenstruacao" value="{{ isset($rows->idade_menstruacao) ? $rows->idade_menstruacao : '' }}" name="idade_menstruacao">
    <div class="invalid-feedback">
        Insira a idade na menstruação
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomHistoricoObstetrico" class="form-label">Histórico Obstétrico</label>
    <input type="text" class="form-control" id="validationCustomHistoricoObstetrico" value="{{ isset($rows->historico_obstetrico) ? $rows->historico_obstetrico : '' }}" name="historico_obstetrico">
    <div class="invalid-feedback">
        Insira o histórico obstétrico
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomUsoMetodosContraceptivos" class="form-label">Uso de Métodos Contraceptivos <b>*</b></label>
    <select class="form-select" id="validationCustomUsoMetodosContraceptivos" name="uso_metodos_contraceptivos" required>
        <option value="1" {{ isset($rows->uso_metodos_contraceptivos) && $rows->uso_metodos_contraceptivos == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->uso_metodos_contraceptivos) && $rows->uso_metodos_contraceptivos == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há uso de métodos contraceptivos
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomMetodosContraceptivos" class="form-label">Métodos Contraceptivos</label>
    <input type="text" class="form-control" id="validationCustomMetodosContraceptivos" value="{{ isset($rows->metodos_contraceptivos) ? $rows->metodos_contraceptivos : '' }}" name="metodos_contraceptivos">
    <div class="invalid-feedback">
        Insira os métodos contraceptivos utilizados
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomMamografia" class="form-label">Mamografia</label>
    <select class="form-select" id="validationCustomMamografia" name="mamografia">
        <option value="1" {{ isset($rows->mamografia) && $rows->mamografia == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->mamografia) && $rows->mamografia == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve mamografia
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomPapanicolau" class="form-label">Papanicolau</label>
    <select class="form-select" id="validationCustomPapanicolau" name="papanicolau">
        <option value="1" {{ isset($rows->papanicolau) && $rows->papanicolau == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->papanicolau) && $rows->papanicolau == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve Papanicolau
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomFrequenciaGinecologica" class="form-label">Frequência Ginecológica</label>
    <input type="text" class="form-control" id="validationCustomFrequenciaGinecologica" value="{{ isset($rows->frequencia_ginecologica) ? $rows->frequencia_ginecologica : '' }}" name="frequencia_ginecologica">
    <div class="invalid-feedback">
        Insira a frequência ginecológica
    </div>
</div>

<!-- cormobidades -->

<div class="col-md-4">
    <label for="validationCustomOcular" class="form-label">Problemas Oculares</label>
    <input type="text" class="form-control" id="validationCustomOcular" value="{{ isset($rows->ocular) ? $rows->ocular : '' }}" name="ocular">
    <div class="invalid-feedback">
        Insira os problemas oculares
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNeuropatia" class="form-label">Neuropatia</label>
    <input type="text" class="form-control" id="validationCustomNeuropatia" value="{{ isset($rows->neuropatia) ? $rows->neuropatia : '' }}" name="neuropatia">
    <div class="invalid-feedback">
        Insira a neuropatia
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDoencaCronica" class="form-label">Doença Crônica</label>
    <input type="text" class="form-control" id="validationCustomDoencaCronica" value="{{ isset($rows->doenca_cronica) ? $rows->doenca_cronica : '' }}" name="doenca_cronica">
    <div class="invalid-feedback">
        Insira a doença crônica
    </div>
</div>

<!-- familiar historicos -->

<div class="col-md-4">
    <label for="validationCustomDM" class="form-label">Diabetes Mellitus (DM)</label>
    <input type="text" class="form-control" id="validationCustomDM" value="{{ isset($rows->dm) ? $rows->dm : '' }}" name="dm">
    <div class="invalid-feedback">
        Insira informações sobre Diabetes Mellitus (DM)
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomPossuiDM1" class="form-label">Possui Diabetes Mellitus Tipo 1 (DM1)</label>
    <select class="form-select" id="validationCustomPossuiDM1" name="possui_dm1">
        <option value="1" {{ isset($rows->possui_dm1) && $rows->possui_dm1 == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->possui_dm1) && $rows->possui_dm1 == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se possui DM1
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDM1" class="form-label">DM Tipo 1 (se sim)</label>
    <input type="text" class="form-control" id="validationCustomDM1" value="{{ isset($rows->dm1) ? $rows->dm1 : '' }}" name="dm1">
    <div class="invalid-feedback">
        Insira informações sobre DM Tipo 1
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomObesidade" class="form-label">Obesidade</label>
    <input type="text" class="form-control" id="validationCustomObesidade" value="{{ isset($rows->obesidade) ? $rows->obesidade : '' }}" name="obesidade">
    <div class="invalid-feedback">
        Insira informações sobre obesidade
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomVitiligo" class="form-label">Vitiligo</label>
    <input type="text" class="form-control" id="validationCustomVitiligo" value="{{ isset($rows->vitiligo) ? $rows->vitiligo : '' }}" name="vitiligo">
    <div class="invalid-feedback">
        Insira informações sobre vitiligo
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDoencaTireoideana" class="form-label">Doença Tireoidiana</label>
    <input type="text" class="form-control" id="validationCustomDoencaTireoideana" value="{{ isset($rows->doenca_tireoideana) ? $rows->doenca_tireoideana : '' }}" name="doenca_tireoideana">
    <div class="invalid-feedback">
        Insira informações sobre doença tireoidiana
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDisplidemia" class="form-label">Displidemia</label>
    <input type="text" class="form-control" id="validationCustomDisplidemia" value="{{ isset($rows->displidemia) ? $rows->displidemia : '' }}" name="displidemia">
    <div class="invalid-feedback">
        Insira informações sobre displidemia
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomAlopecia" class="form-label">Alopecia</label>
    <input type="text" class="form-control" id="validationCustomAlopecia" value="{{ isset($rows->alopecia) ? $rows->alopecia : '' }}" name="alopecia">
    <div class="invalid-feedback">
        Insira informações sobre alopecia
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomArtriteReumatoide" class="form-label">Artrite Reumatoide</label>
    <input type="text" class="form-control" id="validationCustomArtriteReumatoide" value="{{ isset($rows->artrite_reumatoide) ? $rows->artrite_reumatoide : '' }}" name="artrite_reumatoide">
    <div class="invalid-feedback">
        Insira informações sobre artrite reumatoide
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDoencaCoronariana" class="form-label">Doença Coronariana</label>
    <input type="text" class="form-control" id="validationCustomDoencaCoronariana" value="{{ isset($rows->doenca_coronariana) ? $rows->doenca_coronariana : '' }}" name="doenca_coronariana">
    <div class="invalid-feedback">
        Insira informações sobre doença coronariana
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomHAS" class="form-label">Hipertensão Arterial Sistêmica (HAS)</label>
    <input type="text" class="form-control" id="validationCustomHAS" value="{{ isset($rows->has) ? $rows->has : '' }}" name="has">
    <div class="invalid-feedback">
        Insira informações sobre HAS
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDoencaCeliaca" class="form-label">Doença Celíaca</label>
    <input type="text" class="form-control" id="validationCustomDoencaCeliaca" value="{{ isset($rows->doenca_celiaca) ? $rows->doenca_celiaca : '' }}" name="doenca_celiaca">
    <div class="invalid-feedback">
        Insira informações sobre doença celíaca
    </div>
</div>

<!-- frequencia acompanhamentos -->

<div class="col-md-4">
    <label for="validationCustomDentista" class="form-label">Frequência com o Dentista</label>
    <input type="text" class="form-control" id="validationCustomDentista" value="{{ isset($rows->dentista) ? $rows->dentista : '' }}" name="dentista">
    <div class="invalid-feedback">
        Insira informações sobre a frequência com o dentista
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomCardiologista" class="form-label">Frequência com o Cardiologista</label>
    <input type="text" class="form-control" id="validationCustomCardiologista" value="{{ isset($rows->cardiologista) ? $rows->cardiologista : '' }}" name="cardiologista">
    <div class="invalid-feedback">
        Insira informações sobre a frequência com o cardiologista
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomOftalmologista" class="form-label">Frequência com o Oftalmologista</label>
    <input type="text" class="form-control" id="validationCustomOftalmologista" value="{{ isset($rows->oftalmologista) ? $rows->oftalmologista : '' }}" name="oftalmologista">
    <div class="invalid-feedback">
        Insira informações sobre a frequência com o oftalmologista
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomUrologista" class="form-label">Frequência com o Urologista</label>
    <input type="text" class="form-control" id="validationCustomUrologista" value="{{ isset($rows->urologista) ? $rows->urologista : '' }}" name="urologista">
    <div class="invalid-feedback">
        Insira informações sobre a frequência com o urologista
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomExameToqueUrologista" class="form-label">Exame de Toque Urológico</label>
    <select class="form-select" id="validationCustomExameToqueUrologista" name="exame_toque_urologista">
        <option value="1" {{ isset($rows->exame_toque_urologista) && $rows->exame_toque_urologista == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->exame_toque_urologista) && $rows->exame_toque_urologista == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se realizou o exame de toque urológico
    </div>
</div>

<es_exames!-- p
 -

<div class="col-md-4">
    <label for="validationCustomCasosUlcera" class="form-label">Casos de Úlceras</label>
    <select class="form-select" id="validationCustomCasosUlcera" name="casos_ulceras">
        <option value="1" {{ isset($rows->casos_ulceras) && $rows->casos_ulceras == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->casos_ulceras) && $rows->casos_ulceras == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há casos de úlceras
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomRegioesUlcera" class="form-label">Regiões das Úlceras</label>
    <input type="text" class="form-control" id="validationCustomRegioesUlcera" value="{{ isset($rows->regioes_ulceras) ? $rows->regioes_ulceras : '' }}" name="regioes_ulceras">
    <div class="invalid-feedback">
        Insira as regiões das úlceras
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomCaracteristicasUlcera" class="form-label">Características das Úlceras</label>
    <input type="text" class="form-control" id="validationCustomCaracteristicasUlcera" value="{{ isset($rows->caracteristicas_ulceras) ? $rows->caracteristicas_ulceras : '' }}" name="caracteristicas_ulceras">
    <div class="invalid-feedback">
        Insira as características das úlceras
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomAlteracoes" class="form-label">Alterações</label>
    <input type="text" class="form-control" id="validationCustomAlteracoes" value="{{ isset($rows->alteracoes) ? $rows->alteracoes : '' }}" name="alteracoes">
    <div class="invalid-feedback">
        Insira as alterações
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDeformidades" class="form-label">Deformidades</label>
    <input type="text" class="form-control" id="validationCustomDeformidades" value="{{ isset($rows->deformidades) ? $rows->deformidades : '' }}" name="deformidades">
    <div class="invalid-feedback">
        Insira as deformidades
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomPulsos" class="form-label">Pulsos</label>
    <input type="text" class="form-control" id="validationCustomPulsos" value="{{ isset($rows->pulsos) ? $rows->pulsos : '' }}" name="pulsos">
    <div class="invalid-feedback">
        Insira os pulsos
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomAlteracoesNeuropaticas" class="form-label">Alterações Neuropáticas</label>
    <input type="text" class="form-control" id="validationCustomAlteracoesNeuropaticas" value="{{ isset($rows->alteracoes_neuropaticas) ? $rows->alteracoes_neuropaticas : '' }}" name="alteracoes_neuropaticas">
    <div class="invalid-feedback">
        Insira as alterações neuropáticas
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDemaisAlteracoes" class="form-label">Demais Alterações</label>
    <input type="text" class="form-control" id="validationCustomDemaisAlteracoes" value="{{ isset($rows->demais_alteracoes) ? $rows->demais_alteracoes : '' }}" name="demais_alteracoes">
    <div class="invalid-feedback">
        Insira outras alterações
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomObservacoes" class="form-label">Observações</label>
    <input type="text" class="form-control" id="validationCustomObservacoes" value="{{ isset($rows->observacoes) ? $rows->observacoes : '' }}" name="observacoes">
    <div class="invalid-feedback">
        Insira observações
    </div>
</div>

automonitorizacao_glicemias->

<div class="col-md-4">
    <label for="validationCustomRealizaAutomonitorizacao" class="form-label">Realiza Automonitorização</label>
    <select class="form-select" id="validationCustomRealizaAutomonitorizacao" name="realiza_automonitorizacao">
        <option value="1" {{ isset($rows->realiza_automonitorizacao) && $rows->realiza_automonitorizacao == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->realiza_automonitorizacao) && $rows->realiza_automonitorizacao == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se realiza automonitorização
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomFrequenciaMedicoes" class="form-label">Frequência de Medições</label>
    <input type="text" class="form-control" id="validationCustomFrequenciaMedicoes" value="{{ isset($rows->frequencia_medicoes) ? $rows->frequencia_medicoes : '' }}" name="frequencia_medicoes">
    <div class="invalid-feedback">
        Insira a frequência de medições
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomOrigemFitas" class="form-label">Origem das Fitas</label>
    <input type="text" class="form-control" id="validationCustomOrigemFitas" value="{{ isset($rows->origem_fitas) ? $rows->origem_fitas : '' }}" name="origem_fitas">
    <div class="invalid-feedback">
        Insira a origem das fitas
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomContagemCarboidratos" class="form-label">Contagem de Carboidratos</label>
    <select class="form-select" id="validationCustomContagemCarboidratos" name="contagem_carboidratos">
        <option value="Sim" {{ isset($rows->contagem_carboidratos) && $rows->contagem_carboidratos === 'Sim' ? 'selected' : '' }}>Sim</option>
        <option value="Não" {{ isset($rows->contagem_carboidratos) && $rows->contagem_carboidratos === 'Não' ? 'selected' : '' }}>Não</option>
        <option value="Não sabe" {{ isset($rows->contagem_carboidratos) && $rows->contagem_carboidratos === 'Não sabe' ? 'selected' : '' }}>Não sabe</option>
    </select>
    <div class="invalid-feedback">
        Selecione a contagem de carboidratos
    </div>
</div>


cardi<!-- ovascular_dados -->

<div class="col-md-4">
    <label for="validationCustomSaudeCardiaca" class="form-label">Saúde Cardíaca</label>
    <input type="text" class="form-control" id="validationCustomSaudeCardiaca" value="{{ isset($rows->saude_cardiaca) ? $rows->saude_cardiaca : '' }}" name="saude_cardiaca">
    <div class="invalid-feedback">
        Insira informações sobre a saúde cardíaca
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDorPeito" class="form-label">Dor no Peito</label>
    <input type="text" class="form-control" id="validationCustomDorPeito" value="{{ isset($rows->dor_peito) ? $rows->dor_peito : '' }}" name="dor_peito">
    <div class="invalid-feedback">
        Insira informações sobre dor no peito
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomExamesDoencaCoronariana" class="form-label">Exames de Doença Coronariana</label>
    <input type="text" class="form-control" id="validationCustomExamesDoencaCoronariana" value="{{ isset($rows->exames_doenca_coronariana) ? $rows->exames_doenca_coronariana : '' }}" name="exames_doenca_coronariana">
    <div class="invalid-feedback">
        Insira informações sobre exames de doença coronariana
    </div>
</div>

ativi<!-- dade_diabetes -->

<div class="col-md-4">
    <label for="validationCustomQuantiaConsultasEnfermagem" class="form-label">Quantidade de Consultas de Enfermagem</label>
    <input type="number" class="form-control" id="validationCustomQuantiaConsultasEnfermagem" value="{{ isset($rows->quantia_consultas_enfermagem) ? $rows->quantia_consultas_enfermagem : '' }}" name="quantia_consultas_enfermagem" required>
    <div class="invalid-feedback">
        Insira a quantidade de consultas de enfermagem
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomFinalidadeConsulta" class="form-label">Finalidade da Consulta</label>
    <input type="text" class="form-control" id="validationCustomFinalidadeConsulta" value="{{ isset($rows->finalidade_consulta) ? $rows->finalidade_consulta : '' }}" name="finalidade_consulta">
    <div class="invalid-feedback">
        Insira a finalidade da consulta
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomReunioesDiabeticos" class="form-label">Reuniões para Diabéticos</label>
    <input type="number" class="form-control" id="validationCustomReunioesDiabeticos" value="{{ isset($rows->reunioes_diabeticos) ? $rows->reunioes_diabeticos : '' }}" name="reunioes_diabeticos" required>
    <div class="invalid-feedback">
        Insira a quantidade de reuniões para diabéticos
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomProgramasEducacaoDiabeticos" class="form-label">Programas de Educação para Diabéticos</label>
    <input type="number" class="form-control" id="validationCustomProgramasEducacaoDiabeticos" value="{{ isset($rows->programas_educacao_diabeticos) ? $rows->programas_educacao_diabeticos : '' }}" name="programas_educacao_diabeticos" required>
    <div class="invalid-feedback">
        Insira a quantidade de programas de educação para diabéticos
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomConheceHbA1c" class="form-label">Conhece HbA1c</label>
    <select class="form-select" id="validationCustomConheceHbA1c" name="conhece_hba1c">
        <option value="1" {{ isset($rows->conhece_hba1c) && $rows->conhece_hba1c == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->conhece_hba1c) && $rows->conhece_hba1c == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se conhece HbA1c
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSignificadoHbA1c" class="form-label">Significado da HbA1c</label>
    <select class="form-select" id="validationCustomSignificadoHbA1c" name="significado_hba1c">
        <option value="Controle do diabetes atual" {{ isset($rows->significado_hba1c) && $rows->significado_hba1c === 'Controle do diabetes atual' ? 'selected' : '' }}>Controle do diabetes atual</option>
        <option value="Controle do diabetes dos últimos 3 meses" {{ isset($rows->significado_hba1c) && $rows->significado_hba1c === 'Controle do diabetes dos últimos 3 meses' ? 'selected' : '' }}>Controle do diabetes dos últimos 3 meses</option>
        <option value="Controle do diabetes no último ano" {{ isset($rows->significado_hba1c) && $rows->significado_hba1c === 'Controle do diabetes no último ano' ? 'selected' : '' }}>Controle do diabetes no último ano</option>
    </select>
    <div class="invalid-feedback">
        Selecione o significado da HbA1c
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomValorMaximoHbA1c" class="form-label">Valor Máximo da HbA1c</label>
    <input type="number" class="form-control" id="validationCustomValorMaximoHbA1c" value="{{ isset($rows->valor_maximo_hba1c) ? $rows->valor_maximo_hba1c : '' }}" name="valor_maximo_hba1c" required>
    <div class="invalid-feedback">
        Insira o valor máximo da HbA1c
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomConheceValorUltimaHbA1c" class="form-label">Conhece Valor da Última HbA1c</label>
    <select class="form-select" id="validationCustomConheceValorUltimaHbA1c" name="conhece_valor_ultima_hba1c">
        <option value="1" {{ isset($rows->conhece_valor_ultima_hba1c) && $rows->conhece_valor_ultima_hba1c == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->conhece_valor_ultima_hba1c) && $rows->conhece_valor_ultima_hba1c == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se conhece o valor da última HbA1c
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomValorUltimaHbA1c" class="form-label">Valor da Última HbA1c</label>
    <input type="number" class="form-control" id="validationCustomValorUltimaHbA1c" value="{{ isset($rows->valor_ultima_hba1c) ? $rows->valor_ultima_hba1c : '' }}" name="valor_ultima_hba1c">
    <div class="invalid-feedback">
        Insira o valor da última HbA1c
    </div>
</div>

habit<!-- os_vidas -->

<div class="col-md-4">
    <label for="validationCustomSobreEtilismo" class="form-label">Sobre Etilismo</label>
    <select class="form-select" id="validationCustomSobreEtilismo" name="sobre_etilismo">
        <option value="Etilista" {{ isset($rows->sobre_etilismo) && $rows->sobre_etilismo === 'Etilista' ? 'selected' : '' }}>Etilista</option>
        <option value="Ex-etilista" {{ isset($rows->sobre_etilismo) && $rows->sobre_etilismo === 'Ex-etilista' ? 'selected' : '' }}>Ex-etilista</option>
        <option value="Não-etilista" {{ isset($rows->sobre_etilismo) && $rows->sobre_etilismo === 'Não-etilista' ? 'selected' : '' }}>Não-etilista</option>
    </select>
    <div class="invalid-feedback">
        Selecione a categoria de etilismo
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomPeriodoQuantiaEtilismo" class="form-label">Período e Quantidade de Etilismo</label>
    <input type="text" class="form-control" id="validationCustomPeriodoQuantiaEtilismo" value="{{ isset($rows->periodo_quantia_etilismo) ? $rows->periodo_quantia_etilismo : '' }}" name="periodo_quantia_etilismo">
    <div class="invalid-feedback">
        Insira o período e a quantidade de etilismo
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomClassificacaoEtilismo" class="form-label">Classificação do Etilismo</label>
    <select class="form-select" id="validationCustomClassificacaoEtilismo" name="classificacao_etilismo">
        <option value="Leve" {{ isset($rows->classificacao_etilismo) && $rows->classificacao_etilismo === 'Leve' ? 'selected' : '' }}>Leve</option>
        <option value="Moderado" {{ isset($rows->classificacao_etilismo) && $rows->classificacao_etilismo === 'Moderado' ? 'selected' : '' }}>Moderado</option>
        <option value="Grave" {{ isset($rows->classificacao_etilismo) && $rows->classificacao_etilismo === 'Grave' ? 'selected' : '' }}>Grave</option>
    </select>
    <div class="invalid-feedback">
        Selecione a classificação do etilismo
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSobreTabagismo" class="form-label">Sobre Tabagismo</label>
    <select class="form-select" id="validationCustomSobreTabagismo" name="sobre_tabagismo">
        <option value="Fumante diário" {{ isset($rows->sobre_tabagismo) && $rows->sobre_tabagismo === 'Fumante diário' ? 'selected' : '' }}>Fumante diário</option>
        <option value="Fumante ocasional" {{ isset($rows->sobre_tabagismo) && $rows->sobre_tabagismo === 'Fumante ocasional' ? 'selected' : '' }}>Fumante ocasional</option>
        <option value="Ex-fumante" {{ isset($rows->sobre_tabagismo) && $rows->sobre_tabagismo === 'Ex-fumante' ? 'selected' : '' }}>Ex-fumante</option>
        <option value="Não fumante" {{ isset($rows->sobre_tabagismo) && $rows->sobre_tabagismo === 'Não fumante' ? 'selected' : '' }}>Não fumante</option>
    </select>
    <div class="invalid-feedback">
        Selecione a categoria de tabagismo
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomQuantiaTabagismo" class="form-label">Quantidade de Tabagismo</label>
    <input type="text" class="form-control" id="validationCustomQuantiaTabagismo" value="{{ isset($rows->quantia_tabagismo) ? $rows->quantia_tabagismo : '' }}" name="quantia_tabagismo">
    <div class="invalid-feedback">
        Insira a quantidade de tabagismo
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSobreDrogasIlicitas" class="form-label">Sobre Drogas Ilícitas</label>
    <select class="form-select" id="validationCustomSobreDrogasIlicitas" name="sobre_drogas_ilicitas">
        <option value="Usuário" {{ isset($rows->sobre_drogas_ilicitas) && $rows->sobre_drogas_ilicitas === 'Usuário' ? 'selected' : '' }}>Usuário</option>
        <option value="Ex-usuário" {{ isset($rows->sobre_drogas_ilicitas) && $rows->sobre_drogas_ilicitas === 'Ex-usuário' ? 'selected' : '' }}>Ex-usuário</option>
        <option value="Nunca usou" {{ isset($rows->sobre_drogas_ilicitas) && $rows->sobre_drogas_ilicitas === 'Nunca usou' ? 'selected' : '' }}>Nunca usou</option>
        <option value="Usou uma vez" {{ isset($rows->sobre_drogas_ilicitas) && $rows->sobre_drogas_ilicitas === 'Usou uma vez' ? 'selected' : '' }}>Usou uma vez</option>
    </select>
    <div class="invalid-feedback">
        Selecione a categoria de drogas ilícitas
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomQuaisPeriodoDrogas" class="form-label">Quais Drogas e Período</label>
    <input type="text" class="form-control" id="validationCustomQuaisPeriodoDrogas" value="{{ isset($rows->quais_periodo_drogas) ? $rows->quais_periodo_drogas : '' }}" name="quais_periodo_drogas">
    <div class="invalid-feedback">
        Insira quais drogas e período de uso
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSobreAnabolizantes" class="form-label">Sobre Anabolizantes</label>
    <select class="form-select" id="validationCustomSobreAnabolizantes" name="sobre_anabolizantes">
        <option value="Usuário" {{ isset($rows->sobre_anabolizantes) && $rows->sobre_anabolizantes === 'Usuário' ? 'selected' : '' }}>Usuário</option>
        <option value="Ex-usuário" {{ isset($rows->sobre_anabolizantes) && $rows->sobre_anabolizantes === 'Ex-usuário' ? 'selected' : '' }}>Ex-usuário</option>
        <option value="Nunca usou" {{ isset($rows->sobre_anabolizantes) && $rows->sobre_anabolizantes === 'Nunca usou' ? 'selected' : '' }}>Nunca usou</option>
        <option value="Usou uma vez" {{ isset($rows->sobre_anabolizantes) && $rows->sobre_anabolizantes === 'Usou uma vez' ? 'selected' : '' }}>Usou uma vez</option>
    </select>
    <div class="invalid-feedback">
        Selecione a categoria de anabolizantes
    </div>
</div>

exerc<!-- icio_fisicos -->

<div class="col-md-4">
    <label for="validationCustomExerciciosRotineiros" class="form-label">Exercícios Rotineiros</label>
    <select class="form-select" id="validationCustomExerciciosRotineiros" name="exercicios_rotineiros">
        <option value="1" {{ isset($rows->exercicios_rotineiros) && $rows->exercicios_rotineiros == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->exercicios_rotineiros) && $rows->exercicios_rotineiros == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se realiza exercícios rotineiros
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomTipoAtividades" class="form-label">Tipo de Atividades</label>
    <input type="text" class="form-control" id="validationCustomTipoAtividades" value="{{ isset($rows->tipo_atividades) ? $rows->tipo_atividades : '' }}" name="tipo_atividades">
    <div class="invalid-feedback">
        Insira o tipo de atividades
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomFrequenciaPeriodo" class="form-label">Frequência e Período</label>
    <input type="text" class="form-control" id="validationCustomFrequenciaPeriodo" value="{{ isset($rows->frequencia_periodo) ? $rows->frequencia_periodo : '' }}" name="frequencia_periodo">
    <div class="invalid-feedback">
        Insira a frequência e o período de exercícios
    </div>
</div>

<!-- neuropatico_comprometimentos -->

<div class="col-md-4">
    <label for="validationCustomReflexoAquileuDireito" class="form-label">Reflexo Aquileu Direito</label>
    <select class="form-select" id="validationCustomReflexoAquileuDireito" name="reflexo_aquileu_direito">
        <option value="Presente" {{ isset($rows->reflexo_aquileu_direito) && $rows->reflexo_aquileu_direito === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Presente ao esforço" {{ isset($rows->reflexo_aquileu_direito) && $rows->reflexo_aquileu_direito === 'Presente ao esforço' ? 'selected' : '' }}>Presente ao esforço</option>
        <option value="Ausente" {{ isset($rows->reflexo_aquileu_direito) && $rows->reflexo_aquileu_direito === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado do reflexo aquileu direito
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomReflexoAquileuEsquerdo" class="form-label">Reflexo Aquileu Esquerdo</label>
    <select class="form-select" id="validationCustomReflexoAquileuEsquerdo" name="reflexo_aquileu_esquerdo">
        <option value="Presente" {{ isset($rows->reflexo_aquileu_esquerdo) && $rows->reflexo_aquileu_esquerdo === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Presente ao esforço" {{ isset($rows->reflexo_aquileu_esquerdo) && $rows->reflexo_aquileu_esquerdo === 'Presente ao esforço' ? 'selected' : '' }}>Presente ao esforço</option>
        <option value="Ausente" {{ isset($rows->reflexo_aquileu_esquerdo) && $rows->reflexo_aquileu_esquerdo === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado do reflexo aquileu esquerdo
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSensibilidadeVibratoriaDireita" class="form-label">Sensibilidade Vibratória Direita</label>
    <select class="form-select" id="validationCustomSensibilidadeVibratoriaDireita" name="sensibilidade_vibratoria_direita">
        <option value="Presente" {{ isset($rows->sensibilidade_vibratoria_direita) && $rows->sensibilidade_vibratoria_direita === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Ausente" {{ isset($rows->sensibilidade_vibratoria_direita) && $rows->sensibilidade_vibratoria_direita === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado da sensibilidade vibratória direita
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSensibilidadeVibratoriaEsquerda" class="form-label">Sensibilidade Vibratória Esquerda</label>
    <select class="form-select" id="validationCustomSensibilidadeVibratoriaEsquerda" name="sensibilidade_vibratoria_esquerda">
        <option value="Presente" {{ isset($rows->sensibilidade_vibratoria_esquerda) && $rows->sensibilidade_vibratoria_esquerda === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Ausente" {{ isset($rows->sensibilidade_vibratoria_esquerda) && $rows->sensibilidade_vibratoria_esquerda === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado da sensibilidade vibratória esquerda
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSensibilidadeDolorosaDireita" class="form-label">Sensibilidade Dolorosa Direita</label>
    <select class="form-select" id="validationCustomSensibilidadeDolorosaDireita" name="sensibilidade_dolorosa_direita">
        <option value="Presente" {{ isset($rows->sensibilidade_dolorosa_direita) && $rows->sensibilidade_dolorosa_direita === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Ausente" {{ isset($rows->sensibilidade_dolorosa_direita) && $rows->sensibilidade_dolorosa_direita === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado da sensibilidade dolorosa direita
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSensibilidadeDolorosaEsquerda" class="form-label">Sensibilidade Dolorosa Esquerda</label>
    <select class="form-select" id="validationCustomSensibilidadeDolorosaEsquerda" name="sensibilidade_dolorosa_esquerda">
        <option value="Presente" {{ isset($rows->sensibilidade_dolorosa_esquerda) && $rows->sensibilidade_dolorosa_esquerda === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Ausente" {{ isset($rows->sensibilidade_dolorosa_esquerda) && $rows->sensibilidade_dolorosa_esquerda === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado da sensibilidade dolorosa esquerda
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSensibilidadeTermicaDireita" class="form-label">Sensibilidade Térmica Direita</label>
    <select class="form-select" id="validationCustomSensibilidadeTermicaDireita" name="sensibilidade_termica_direita">
        <option value="Presente" {{ isset($rows->sensibilidade_termica_direita) && $rows->sensibilidade_termica_direita === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Ausente" {{ isset($rows->sensibilidade_termica_direita) && $rows->sensibilidade_termica_direita === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado da sensibilidade térmica direita
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSensibilidadeTermicaEsquerda" class="form-label">Sensibilidade Térmica Esquerda</label>
    <select class="form-select" id="validationCustomSensibilidadeTermicaEsquerda" name="sensibilidade_termica_esquerda">
        <option value="Presente" {{ isset($rows->sensibilidade_termica_esquerda) && $rows->sensibilidade_termica_esquerda === 'Presente' ? 'selected' : '' }}>Presente</option>
        <option value="Ausente" {{ isset($rows->sensibilidade_termica_esquerda) && $rows->sensibilidade_termica_esquerda === 'Ausente' ? 'selected' : '' }}>Ausente</option>
    </select>
    <div class="invalid-feedback">
        Selecione o estado da sensibilidade térmica esquerda
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomTotalPontos" class="form-label">Total de Pontos</label>
    <select class="form-select" id="validationCustomTotalPontos" name="total_pontos">
        <option value="Sinais leves" {{ isset($rows->total_pontos) && $rows->total_pontos === 'Sinais leves' ? 'selected' : '' }}>Sinais leves</option>
        <option value="Sinais moderados" {{ isset($rows->total_pontos) && $rows->total_pontos === 'Sinais moderados' ? 'selected' : '' }}>Sinais moderados</option>
        <option value="Sinais graves" {{ isset($rows->total_pontos) && $rows->total_pontos === 'Sinais graves' ? 'selected' : '' }}>Sinais graves</option>
    </select>
    <div class="invalid-feedback">
        Selecione o total de pontos
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDiagnosticoNeuropatiaPeriferica" class="form-label">Diagnóstico de Neuropatia Periférica</label>
    <select class="form-select" id="validationCustomDiagnosticoNeuropatiaPeriferica" name="diagnostico_neuropatia_periferica">
        <option value="1" {{ isset($rows->diagnostico_neuropatia_periferica) && $rows->diagnostico_neuropatia_periferica == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->diagnostico_neuropatia_periferica) && $rows->diagnostico_neuropatia_periferica == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há diagnóstico de neuropatia periférica
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomObservacoes" class="form-label">Observações</label>
    <input type="text" class="form-control" id="validationCustomObservacoes" value="{{ isset($rows->observacoes) ? $rows->observacoes : '' }}" name="observacoes">
    <div class="invalid-feedback">
        Insira observações 
    </div>
</div>

<!-- primeiro_diagnosticos -->

<div class="col-md-4">
    <label for="validationCustomAno" class="form-label">Ano</label>
    <input type="number" class="form-control" id="validationCustomAno" value="{{ isset($rows->ano) ? $rows->ano : '' }}" name="ano" required>
    <div class="invalid-feedback">
        Insira o ano do diagnóstico
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomIdade" class="form-label">Idade</label>
    <input type="number" class="form-control" id="validationCustomIdade" value="{{ isset($rows->idade) ? $rows->idade : '' }}" name="idade" required>
    <div class="invalid-feedback">
        Insira a idade no diagnóstico
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomSintomas" class="form-label">Sintomas</label>
    <input type="text" class="form-control" id="validationCustomSintomas" value="{{ isset($rows->sintomas) ? $rows->sintomas : '' }}" name="sintomas" required>
    <div class="invalid-feedback">
        Insira os sintomas apresentados
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomComoFoiFeito" class="form-label">Como Foi Feito o Diagnóstico</label>
    <select class="form-select" id="validationCustomComoFoiFeito" name="como_foi_feito" required>
        <option value="Internação com cetoacidose diabética" {{ isset($rows->como_foi_feito) && $rows->como_foi_feito === 'Internação com cetoacidose diabética' ? 'selected' : '' }}>Internação com cetoacidose diabética</option>
        <option value="Internação sem cetoacidose diabética" {{ isset($rows->como_foi_feito) && $rows->como_foi_feito === 'Internação sem cetoacidose diabética' ? 'selected' : '' }}>Internação sem cetoacidose diabética</option>
        <option value="Glicemia de jejum" {{ isset($rows->como_foi_feito) && $rows->como_foi_feito === 'Glicemia de jejum' ? 'selected' : '' }}>Glicemia de jejum</option>
        <option value="Curva glicêmica" {{ isset($rows->como_foi_feito) && $rows->como_foi_feito === 'Curva glicêmica' ? 'selected' : '' }}>Curva glicêmica</option>
        <option value="Glicemia ao acaso" {{ isset($rows->como_foi_feito) && $rows->como_foi_feito === 'Glicemia ao acaso' ? 'selected' : '' }}>Glicemia ao acaso</option>
        <option value="Outros" {{ isset($rows->como_foi_feito) && $rows->como_foi_feito === 'Outros' ? 'selected' : '' }}>Outros</option>
    </select>
    <div class="invalid-feedback">
        Selecione como foi feito o diagnóstico
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomInfeccoesSeisMeses" class="form-label">Teve Infecções nos Últimos Seis Meses?</label>
    <select class="form-select" id="validationCustomInfeccoesSeisMeses" name="infeccoes_seis_meses" required>
        <option value="1" {{ isset($rows->infeccoes_seis_meses) && $rows->infeccoes_seis_meses == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->infeccoes_seis_meses) && $rows->infeccoes_seis_meses == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se teve infecções nos últimos seis meses
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomQuaisInfeccoes" class="form-label">Quais Infecções?</label>
    <input type="text" class="form-control" id="validationCustomQuaisInfeccoes" value="{{ isset($rows->quais_infeccoes) ? $rows->quais_infeccoes : '' }}" name="quais_infeccoes">
    <div class="invalid-feedback">
        Insira quais infecções teve 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomPeriodoSintomasDiagnostico" class="form-label">Período Entre Sintomas e Diagnóstico (meses)</label>
    <input type="number" class="form-control" id="validationCustomPeriodoSintomasDiagnostico" value="{{ isset($rows->periodo_sintomas_diagnostico) ? $rows->periodo_sintomas_diagnostico : '' }}" name="periodo_sintomas_diagnostico" required>
    <div class="invalid-feedback">
        Insira o período entre sintomas e diagnóstico
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomFatorEmocional" class="form-label">Fator Emocional?</label>
    <select class="form-select" id="validationCustomFatorEmocional" name="fator_emocional" required>
        <option value="1" {{ isset($rows->fator_emocional) && $rows->fator_emocional == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->fator_emocional) && $rows->fator_emocional == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve fator emocional
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomQualFatorEmocional" class="form-label">Qual Fator Emocional?</label>
    <input type="text" class="form-control" id="validationCustomQualFatorEmocional" value="{{ isset($rows->qual_fator_emocional) ? $rows->qual_fator_emocional : '' }}" name="qual_fator_emocional">
    <div class="invalid-feedback">
        Insira qual foi o fator emocional 
    </div>
</div>

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
        <option value="Sim" {{ isset($rows->libido_alterado) && $rows->libido_alterado === 'Sim' ? 'selected' : '' }}>Sim</option>
        <option value="Não" {{ isset($rows->libido_alterado) && $rows->libido_alterado === 'Não' ? 'selected' : '' }}>Não</option>
        <option value="Não sabe ou não quis responder" {{ isset($rows->libido_alterado) && $rows->libido_alterado === 'Não sabe ou não quis responder' ? 'selected' : '' }}>Não sabe ou não quis responder</option>
        <option value="Não se aplica" {{ isset($rows->libido_alterado) && $rows->libido_alterado === 'Não se aplica' ? 'selected' : '' }}>Não se aplica</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve alteração na libido
    </div>
</div>

<!-- complicacoes -->

<div class="col-md-4">
    <label for="validationCustomComplicacoes" class="form-label">Complicações?</label>
    <select class="form-select" id="validationCustomComplicacoes" name="complicacoes" required>
        <option value="1" {{ isset($rows->complicacoes) && $rows->complicacoes == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->complicacoes) && $rows->complicacoes == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há complicações
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomQuaisComplicacoes" class="form-label">Quais Complicações?</label>
    <input type="text" class="form-control" id="validationCustomQuaisComplicacoes" value="{{ isset($rows->quais_complicacoes) ? $rows->quais_complicacoes : '' }}" name="quais_complicacoes">
    <div class="invalid-feedback">
        Insira quais complicações 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomInternacaoComplicacao" class="form-label">Teve Internação por Complicação?</label>
    <select class="form-select" id="validationCustomInternacaoComplicacao" name="internacao_complicacao" required>
        <option value="1" {{ isset($rows->internacao_complicacao) && $rows->internacao_complicacao == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->internacao_complicacao) && $rows->internacao_complicacao == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve internação por complicação
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomCausaInternacao" class="form-label">Causa da Internação</label>
    <input type="text" class="form-control" id="validationCustomCausaInternacao" value="{{ isset($rows->causa_internacao) ? $rows->causa_internacao : '' }}" name="causa_internacao">
    <div class="invalid-feedback">
        Insira a causa da internação 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomEpisodioHipoglicemia" class="form-label">Teve Episódio de Hipoglicemia?</label>
    <select class="form-select" id="validationCustomEpisodioHipoglicemia" name="episodio_hipoglicemia" required>
        <option value="Sim" {{ isset($rows->episodio_hipoglicemia) && $rows->episodio_hipoglicemia === 'Sim' ? 'selected' : '' }}>Sim</option>
        <option value="Não" {{ isset($rows->episodio_hipoglicemia) && $rows->episodio_hipoglicemia === 'Não' ? 'selected' : '' }}>Não</option>
        <option value="Não lembra" {{ isset($rows->episodio_hipoglicemia) && $rows->episodio_hipoglicemia === 'Não lembra' ? 'selected' : '' }}>Não lembra</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve episódio de hipoglicemia
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomEpisodioAssintomatico" class="form-label">Episódio Assintomático?</label>
    <select class="form-select" id="validationCustomEpisodioAssintomatico" name="episodio_assintomatico" required>
        <option value="1" {{ isset($rows->episodio_assintomatico) && $rows->episodio_assintomatico == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->episodio_assintomatico) && $rows->episodio_assintomatico == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se o episódio foi assintomático
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNivelEpisodio" class="form-label">Nível do Episódio</label>
    <select class="form-select" id="validationCustomNivelEpisodio" name="nivel_episodio">
        <option value="Leve/moderado" {{ isset($rows->nivel_episodio) && $rows->nivel_episodio === 'Leve/moderado' ? 'selected' : '' }}>Leve/moderado</option>
        <option value="Grave" {{ isset($rows->nivel_episodio) && $rows->nivel_episodio === 'Grave' ? 'selected' : '' }}>Grave</option>
    </select>
    <div class="invalid-feedback">
        Selecione o nível do episódio 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomPeriodoFrequenteHipoglicemia" class="form-label">Período Frequente de Hipoglicemia</label>
    <select class="form-select" id="validationCustomPeriodoFrequenteHipoglicemia" name="periodo_frequente_hipoglocemia">
        <option value="Manhã" {{ isset($rows->periodo_frequente_hipoglocemia) && $rows->periodo_frequente_hipoglocemia === 'Manhã' ? 'selected' : '' }}>Manhã</option>
        <option value="Tarde" {{ isset($rows->periodo_frequente_hipoglocemia) && $rows->periodo_frequente_hipoglocemia === 'Tarde' ? 'selected' : '' }}>Tarde</option>
        <option value="Noite" {{ isset($rows->periodo_frequente_hipoglocemia) && $rows->periodo_frequente_hipoglocemia === 'Noite' ? 'selected' : '' }}>Noite</option>
        <option value="Não sabe" {{ isset($rows->periodo_frequente_hipoglocemia) && $rows->periodo_frequente_hipoglocemia === 'Não sabe' ? 'selected' : '' }}>Não sabe</option>
    </select>
    <div class="invalid-feedback">
        Selecione o período frequente de hipoglicemia 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomEpisodiosUltimoMes" class="form-label">Episódios no Último Mês</label>
    <input type="number" class="form-control" id="validationCustomEpisodiosUltimoMes" value="{{ isset($rows->episodios_ultimo_mes) ? $rows->episodios_ultimo_mes : '' }}" name="episodios_ultimo_mes" required>
    <div class="invalid-feedback">
        Insira a quantidade de episódios no último mês
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomAlimentoTratarHipoglicemia" class="form-label">Alimento para Tratar Hipoglicemia</label>
    <input type="text" class="form-control" id="validationCustomAlimentoTratarHipoglicemia" value="{{ isset($rows->alimento_tratar_hipoglicemia) ? $rows->alimento_tratar_hipoglicemia : '' }}" name="alimento_tratar_hipoglicemia" required>
    <div class="invalid-feedback">
        Insira o alimento utilizado para tratar hipoglicemia
    </div>
</div>


<!-- tratamentos -->

<div class="col-md-4">
    <label for="validationCustomMedicamentoDiabetes" class="form-label">Medicamento para Diabetes</label>
    <input type="text" class="form-control" id="validationCustomMedicamentoDiabetes" value="{{ isset($rows->medicamento_diabetes) ? $rows->medicamento_diabetes : '' }}" name="medicamento_diabetes">
    <div class="invalid-feedback">
        Insira o medicamento para diabetes 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomUsoInsulina" class="form-label">Uso de Insulina</label>
    <select class="form-select" id="validationCustomUsoInsulina" name="uso_insulina" required>
        <option value="1" {{ isset($rows->uso_insulina) && $rows->uso_insulina == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->uso_insulina) && $rows->uso_insulina == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há uso de insulina
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomTiposInsulinas" class="form-label">Tipos de Insulinas</label>
    <input type="text" class="form-control" id="validationCustomTiposInsulinas" value="{{ isset($rows->tipos_insulinas) ? $rows->tipos_insulinas : '' }}" name="tipos_insulinas">
    <div class="invalid-feedback">
        Insira os tipos de insulinas 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNomeInsulina" class="form-label">Nome da Insulina</label>
    <input type="text" class="form-control" id="validationCustomNomeInsulina" value="{{ isset($rows->nome_insulina) ? $rows->nome_insulina : '' }}" name="nome_insulina">
    <div class="invalid-feedback">
        Insira o nome da insulina 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomFrequenciaInsulina" class="form-label">Frequência de Insulina</label>
    <input type="text" class="form-control" id="validationCustomFrequenciaInsulina" value="{{ isset($rows->frequencia_insulina) ? $rows->frequencia_insulina : '' }}" name="frequencia_insulina">
    <div class="invalid-feedback">
        Insira a frequência de insulina 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomDoseInsulina" class="form-label">Dose de Insulina</label>
    <input type="text" class="form-control" id="validationCustomDoseInsulina" value="{{ isset($rows->dose_insulina) ? $rows->dose_insulina : '' }}" name="dose_insulina">
    <div class="invalid-feedback">
        Insira a dose de insulina 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomOrigemInsulinas" class="form-label">Origem das Insulinas</label>
    <input type="text" class="form-control" id="validationCustomOrigemInsulinas" value="{{ isset($rows->origem_insulinas) ? $rows->origem_insulinas : '' }}" name="origem_insulinas">
    <div class="invalid-feedback">
        Insira a origem das insulinas 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomOrigemUtensilho" class="form-label">Origem do Utensílio</label>
    <input type="text" class="form-control" id="validationCustomOrigemUtensilho" value="{{ isset($rows->origem_utensilho) ? $rows->origem_utensilho : '' }}" name="origem_utensilho">
    <div class="invalid-feedback">
        Insira a origem do utensílio 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomReusoSeringasInsulina" class="form-label">Reuso de Seringas para Insulina</label>
    <select class="form-select" id="validationCustomReusoSeringasInsulina" name="reuso_seringas_insulina" required>
        <option value="1" {{ isset($rows->reuso_seringas_insulina) && $rows->reuso_seringas_insulina == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->reuso_seringas_insulina) && $rows->reuso_seringas_insulina == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há reuso de seringas para insulina
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomQuantiaReusoSeringas" class="form-label">Quantidade de Reuso de Seringas</label>
    <input type="number" class="form-control" id="validationCustomQuantiaReusoSeringas" value="{{ isset($rows->quantia_reuso_seringas) ? $rows->quantia_reuso_seringas : '' }}" name="quantia_reuso_seringas">
    <div class="invalid-feedback">
        Insira a quantidade de reuso de seringas 
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomAderencia" class="form-label">Aderência ao Tratamento</label>
    <input type="text" class="form-control" id="validationCustomAderencia" value="{{ isset($rows->aderencia) ? $rows->aderencia : '' }}" name="aderencia">
    <div class="invalid-feedback">
        Insira a aderência ao tratamento 
    </div>
</div>

<!-- tratamento_medicamentos -->

<div class="col-md-4">
    <label for="validationCustomNumRegistro" class="form-label">Número de Registro</label>
    <input type="text" class="form-control" id="validationCustomNumRegistro" value="{{ isset($rows->num_registro) ? $rows->num_registro : '' }}" name="num_registro" required>
    <div class="invalid-feedback">
        Insira o número de registro
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomNomeMedicamento" class="form-label">Nome do Medicamento</label>
    <input type="text" class="form-control" id="validationCustomNomeMedicamento" value="{{ isset($rows->nome) ? $rows->nome : '' }}" name="nome" required>
    <div class="invalid-feedback">
        Insira o nome do medicamento
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomTipo" class="form-label">Tipo</label>
    <select class="form-select" id="validationCustomTipo" name="tipo" required>
        <option value="HAS" {{ isset($rows->tipo) && $rows->tipo === 'HAS' ? 'selected' : '' }}>HAS</option>
        <option value="Dislipidemia" {{ isset($rows->tipo) && $rows->tipo === 'Dislipidemia' ? 'selected' : '' }}>Dislipidemia</option>
        <option value="Anticoagulante" {{ isset($rows->tipo) && $rows->tipo === 'Anticoagulante' ? 'selected' : '' }}>Anticoagulante</option>
        <option value="Tireoide" {{ isset($rows->tipo) && $rows->tipo === 'Tireoide' ? 'selected' : '' }}>Tireoide</option>
        <option value="Ansiedade ou depressao" {{ isset($rows->tipo) && $rows->tipo === 'Ansiedade ou depressao' ? 'selected' : '' }}>Ansiedade ou depressão</option>
        <option value="Outros" {{ isset($rows->tipo) && $rows->tipo === 'Outros' ? 'selected' : '' }}>Outros</option>
    </select>
    <div class="invalid-feedback">
        Selecione o tipo de medicamento
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomPosologia" class="form-label">Posologia</label>
    <input type="text" class="form-control" id="validationCustomPosologia" value="{{ isset($rows->posologia) ? $rows->posologia : '' }}" name="posologia" required>
    <div class="invalid-feedback">
        Insira a posologia do medicamento
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomOrigem" class="form-label">Origem</label>
    <input type="text" class="form-control" id="validationCustomOrigem" value="{{ isset($rows->origem) ? $rows->origem : '' }}" name="origem" required>
    <div class="invalid-feedback">
        Insira a origem do medicamento
    </div>
</div>

<div class="col-md-4">
    <label for="validationCustomAderencia" class="form-label">Aderência</label>
    <input type="text" class="form-control" id="validationCustomAderencia" value="{{ isset($rows->aderencia) ? $rows->aderencia : '' }}" name="aderencia" required>
    <div class="invalid-feedback">
        Insira a aderência ao tratamento do medicamento
    </div>
</div>