{{-- MUDAR FORMA --}}
<div class="col-md-4">
    <label for="validationCustomSelectDefine" class="form-label">Já entrou na menopausa?  <b>*</b> </label>
    <select class="form-select" id="validationCustomSelectDefine" onclick="mostraDados()" onchange="mostraDados()" onfocus="mostraDados()" name="menopausa" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($dados->menopausa) && $dados->menopausa == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($dados->menopausa) && $dados->menopausa == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve menopausa
    </div>
</div>

<div class="col-md-4 input-translate-less" id="input_show">
    <label for="validationCustomidade_menopausa" class="form-label">Qual a idade que entrou na menopausa? <b>*</b> </label>
    <input type="number" class="text-center form-control" id="validationCustomidade_menopausa" value="{{ isset($dados->idade_menopausa) ? $dados->idade_menopausa : '' }}" name="idade_menopausa" placeholder="Insira a idade na menopausa">
    <div class="invalid-feedback">
        Insira a idade na menopausa
    </div>
</div>

<div class="col-md-4" id="input_show_multiple">
    <label for="validationCustomMenopausaCirurgica" class="form-label">A menopausa foi cirúrgica? <b>*</b> </label>
    <select class="form-select" id="validationCustomMenopausaCirurgica" name="menopausa_cirurgica">
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($dados->menopausa_cirurgica) && $dados->menopausa_cirurgica == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($dados->menopausa_cirurgica) && $dados->menopausa_cirurgica == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve menopausa cirúrgica
    </div>
</div>

{{-- MUDAR FORMA --}}
<div class="col-md-4">
    <label for="validationCustomSelectDefine2" class="form-label">Já menstruou pela primeira vez? <b>*</b> </label>
    <select class="form-select" id="validationCustomSelectDefine2" onclick="mostraDados2()" onchange="mostraDados2()" onfocus="mostraDados2()" name="menstruacao" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($dados->menstruacao) && $dados->menstruacao == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($dados->menstruacao) && $dados->menstruacao == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há menstruação
    </div>
</div>

<div class="col-md-4 input-translate-less" id="input_show2">
    <label for="validationCustomidade_menstruacao" class="form-label">Qual foi a idade na primeira menstruação <b>*</b> </label>
    <input type="number" class="text-center form-control" id="validationCustomidade_menstruacao" value="{{ isset($dados->idade_menstruacao) ? $dados->idade_menstruacao : '' }}" name="idade_menstruacao" placeholder="Insira a idade na menstruação">
    <div class="invalid-feedback">
        Insira a idade na menstruação
    </div>
</div>

<div class="col-md-12">
    <label for="validationCustomLetra" class="form-label text-center">Histórico Obstétrico(gestações, paridade, abortos, sexo dos filhos) 
        <b>*</b>
        <div class="popup" onclick="open_popup()">
            <span class="material-symbols-outlined popup-icon">
                info
            </span>
            <span class="popuptext" id="label_popup">Ex. "G3P2A1: 1F e 1M", "G0P0A0: 0F 0M"</span>
        </div>
    </label>
    <input type="text" class="form-control" id="validationCustomhistorico_obstetrico" value="{{ isset($dados->historico_obstetrico) ? $dados->historico_obstetrico : '' }}" name="historico_obstetrico" placeholder="Insira o histórico obstétrico" required>
    <div class="invalid-feedback">
        Insira o histórico obstétrico
    </div>
</div>

{{-- MUDAR FORMA --}}
<div class="col-md-6">
    <label for="validationCustomSelectDefineDouble" class="form-label">Faz o uso de métodos contraceptivos? <b>*</b> </label>
    <select class="form-select" id="validationCustomSelectDefineDouble" onclick="mostraDadosMultiple()" onchange="mostraDadosMultiple()" onfocus="mostraDadosMultiple()" name="uso_metodos_contraceptivos" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($dados->uso_metodos_contraceptivos) && $dados->uso_metodos_contraceptivos == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($dados->uso_metodos_contraceptivos) && $dados->uso_metodos_contraceptivos == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há uso de métodos contraceptivos
    </div>
</div>

<div class="col-md-6" id="input_show_double">
    <label for="validationCustommetodos_contraceptivos" class="form-label">Quais métodos contraceptivos são utilizados? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustommetodos_contraceptivos" value="{{ isset($dados->metodos_contraceptivos) ? $dados->metodos_contraceptivos : '' }}" name="metodos_contraceptivos" placeholder="Insira os métodos contraceptivos">
    <div class="invalid-feedback">
        Insira os métodos contraceptivos utilizados
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomMamografia" class="form-label">Fez mamografia último ano? <b>*</b> </label>
    <select class="form-select" id="validationCustomMamografia" name="mamografia" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($dados->mamografia) && $dados->mamografia == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($dados->mamografia) && $dados->mamografia == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve mamografia
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomPapanicolau" class="form-label">Fez papanicolau no último ano?<b>*</b> </label>
    <select class="form-select" id="validationCustomPapanicolau" name="papanicolau" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($dados->papanicolau) && $dados->papanicolau == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($dados->papanicolau) && $dados->papanicolau == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve Papanicolau
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomfrequencia_ginecologica" class="form-label">Qual a frequência que passa por consulta ginecológica? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomfrequencia_ginecologica" value="{{ isset($dados->frequencia_ginecologica) ? $dados->frequencia_ginecologica : '' }}" name="frequencia_ginecologica" placeholder="Insira a frequência ginecológica" required>
    <div class="invalid-feedback">
        Insira a frequência de consulta ginecológica
    </div>
</div>
