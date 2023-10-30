document.addEventListener('DOMContentLoaded', function() {
    const drogas = document.getElementById('validationCustomDrogas');
    const hba1c = document.getElementById('validationCustomhba1c');
    const frequenciamedicoes = document.getElementById('validationCustomfrequenciamedicoes');//number
    const quaiscomplicacoes = document.getElementById('validationCustomquaiscomplicacoes');//text
    const causainternacao = document.getElementById('validationCustomcausainternacao');//text
    const episodiosultimomes = document.getElementById('validationCustomepisodiosultimomes');//number
    const alimento_tratar_hipoglicemia = document.getElementById('validationCustomalimento_tratar_hipoglicemia');//text
    const frequencia_nutricionista = document.getElementById('validationCustomfrequencia_nutricionista');//number
    const segue_dieta = document.getElementById('validationCustomSegueDieta');//number(de 0 a 10)(N*)
    const aspecto_geral = document.getElementById('validationCustomaspecto_geral');//text
    const peso = document.getElementById('validationCustompeso');//number com verificação especial
    const altura = document.getElementById('validationCustomAltura');//number com verificação especial
    const circunferencia_abdominal = document.getElementById('validationCustomcircunferencia_abdominal');//number com verificação especial
    const circunferencia_quadril = document.getElementById('validationCustomcircunferencia_quadril');//number com verificação especial
    const circunferencia_pescoco = document.getElementById('validationCustomcircunferencia_pescoco');//number com verificação especial
    const pressao_arterial = document.getElementById('validationCustompressao_arterial');//number com verificação especial
    const frequencia_cardiaca = document.getElementById('validationCustomfrequencia_cardiaca');//number com verificação especial
    const pulso_arterial = document.getElementById('validationCustompulso_arterial');//number com verificação especial
    const cabeca_pescoco = document.getElementById('validationCustomcabeca_pescoco');//text
    const sistema_digestivo = document.getElementById('validationCustomsistema_digestivo');//text
    const sistema_venoso = document.getElementById('validationCustomsistema_venoso');//text
    const sistema_respiratorio = document.getElementById('validationCustomsistema_respiratorio');//text
    const sistema_cardiovascular = document.getElementById('validationCustomsistema_cardiovascular');//text
    const consideracoes_outros_sistemas = document.getElementById('validationCustomconsideracoes_outros_sistemas');//text(talvez aceita números)
    const tipo_atividades = document.getElementById('validationCustomtipo_atividades');//text
    const frequencia_periodo = document.getElementById('validationCustomfrequencia_periodo');//text que aceita numero
    const dm1 = document.getElementById('validationCustomdm1');//text
    const cardiologista = document.getElementById('validationCustomcardiologista');//text que aceita numeros(provavelmente)
    const oftalmologista = document.getElementById('validationCustomoftalmologista');//text que aceita numeros(provavelmente)
    const urologista = document.getElementById('validationCustomurologista');//text que aceita numeros(provavelmente)
    const dentista = document.getElementById('validationCustomdentista');//text que aceita numeros(provavelmente)
    const idade_menopausa = document.getElementById('validationCustomidade_menopausa');//number com verificacao especial
    const idade_menstruacao = document.getElementById('validationCustomidade_menstruacao');//number com verificacao especial
    const historico_obstetrico = document.getElementById('validationCustomhistorico_obstetrico');//text(talvez aceita números)
    const metodos_contraceptivos = document.getElementById('validationCustommetodos_contraceptivos');//text
    const frequencia_ginecologica = document.getElementById('validationCustomfrequencia_ginecologica');//text que aceita numeros(provavelmente)
    const periodo_quantia_etilismo = document.getElementById('validationCustomperiodo_quantia_etilismo');//text que aceita numeros
    const quantia_tabagismo = document.getElementById('validationCustomquantia_tabagismo');//text que aceita numeros
    const quais_periodo_drogas = document.getElementById('validationCustomquais_periodo_drogas');//text que aceita numeros
    const motivo = document.getElementById('validationCustommotivo');//text
    const quantidade_dias = document.getElementById('validationCustomquantidade_dias');//number
    const amamentacao_exclusiva = document.getElementById('validationCustomtempo_amamentacao_exclusiva');//text que aceita numeros
    const observacoes_neuropatico = document.getElementById('validationCustomobservacoes');//text
    const observacoes_pes_exame = document.getElementById('validationCustomObservacoes1')//text
    const ano = document.getElementById('validationCustomano');//number
    const idade = document.getElementById('validationCustomidade')//number
    const qual_fator_emocional = document.getElementById('validationCustomqual_fator_emocional')//text
    const quais_infeccoes =document.getElementById('validationCustomquais_infeccoes');//text
    const periodo_sintomas_diagnostico =document.getElementById('validationCustomperiodo_sintomas_diagnostico');//number
    const medicamentos_diabetes = document.getElementById('validationCustommedicamento_diabetes');//text que não aceita numeros(provavelmente)
    const nome_insulina = document.getElementById('validationCustomnome_insulina');//text que não aceita numero
    const frequencia_insulina = document.getElementById('validationCustomfrequencia_insulina');//text que aceita numeros
    const dose_insulina = document.getElementById('validationCustomdose_insulina');//text que aceita numeros
    const origem_insulina = document.getElementById('validationCustomorigem_insulinas');//text
    const quantia_reuso_seringas = document.getElementById('validationCustomquantia_reuso_seringas');//number

    drogas.addEventListener('input', function() {
        let value = drogas.value;
        value = value.replace(/[^a-zA-Z\u00C0-\u024F\s]+/g, ''); // Aceita lentos e acentos
        value = value.replace(/(\d{50})\d+?$/, '$1');
        drogas.value = value;
        
    });
    
    hba1c.addEventListener('input', function() {
        let value = hba1c.value;
        value = value.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
        value = value.replace(/(\d{50})\d+?$/, '$1');
        hba1c.value = value;
    });

  });


  