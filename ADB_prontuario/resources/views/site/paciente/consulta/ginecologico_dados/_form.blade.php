{{-- MUDAR FORMA --}}
<div class="col-md-4">
    <label for="validationCustomMenopausa" class="form-label">Já entrou na menopausa?  <b>*</b> </label>
    <select class="form-select" id="validationCustomSelectDefine" name="menopausa" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->menopausa) && $rows->menopausa == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->menopausa) && $rows->menopausa == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve menopausa
    </div>
</div>

<div class="col-md-4 input-translate-less" id="input_show">
    <label for="validationCustomNum" class="form-label">Qual a idade que entrou na menopausa? <b>*</b> </label>
    <input type="number" class="text-center form-control" id="validationCustomNum" value="{{ isset($rows->idade_menopausa) ? $rows->idade_menopausa : '' }}" name="idade_menopausa" placeholder="Insira a idade na menopausa" required>
    <div class="invalid-feedback">
        Insira a idade na menopausa
    </div>
</div>

<div class="col-md-4" id="input_show_multiple">
    <label for="validationCustomMenopausaCirurgica" class="form-label">A menopausa foi cirúrgica? <b>*</b> </label>
    <select class="form-select" id="validationCustomMenopausaCirurgica" name="menopausa_cirurgica" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->menopausa_cirurgica) && $rows->menopausa_cirurgica == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->menopausa_cirurgica) && $rows->menopausa_cirurgica == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve menopausa cirúrgica
    </div>
</div>

{{-- MUDAR FORMA --}}
<div class="col-md-4">
    <label for="validationCustomMenstruacao" class="form-label">Já menstruou pela primeira vez? <b>*</b> </label>
    <select class="form-select" id="validationCustomSelectDefine2" name="menstruacao" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->menstruacao) && $rows->menstruacao == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->menstruacao) && $rows->menstruacao == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há menstruação
    </div>
</div>

<div class="col-md-4 input-translate-less" id="input_show2">
    <label for="validationCustomNum" class="form-label">Qual foi a idade na primeira menstruação <b>*</b> </label>
    <input type="number" class="text-center form-control" id="validationCustomNum" value="{{ isset($rows->idade_menstruacao) ? $rows->idade_menstruacao : '' }}" name="idade_menstruacao" placeholder="Insira a idade na menstruação" required>
    <div class="invalid-feedback">
        Insira a idade na menstruação
    </div>
</div>

<div class="col-md-12">
    <label for="validationCustomLetra" class="form-label">Histórico Obstétrico(gestações, paridade, abortos, sexo dos filhos) 
        <b>*</b>
        <a href="#" id="btn_aparece" class="span-dialog" onclick="show_dialog_info()">
            <span class="material-symbols-outlined show-dialog">
                info
            </span>
        </a>
        <dialog class="square-content square-content--confirma-excluir"  id="dialog_info">
            <div class="p-dialog">
                aadasd
            </div>
            <div class="row buttons-dialog">
                dfddfsf
            </div>
        </dialog> 
    </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->historico_obstetrico) ? $rows->historico_obstetrico : '' }}" name="historico_obstetrico" placeholder="Insira o histórico obstétrico" required>
    <div class="invalid-feedback">
        Insira o histórico obstétrico
    </div>
</div>

{{-- MUDAR FORMA --}}
<div class="col-md-6">
    <label for="validationCustomSelectDefineDouble" class="form-label">Faz o uso de métodos contraceptivos? <b>*</b> </label>
    <select class="form-select" id="validationCustomSelectDefineDouble" name="uso_metodos_contraceptivos" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->uso_metodos_contraceptivos) && $rows->uso_metodos_contraceptivos == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->uso_metodos_contraceptivos) && $rows->uso_metodos_contraceptivos == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se há uso de métodos contraceptivos
    </div>
</div>

<div class="col-md-6" id="input_show_double">
    <label for="validationCustomLetra" class="form-label">Quais métodos contraceptivos são utilizados? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->metodos_contraceptivos) ? $rows->metodos_contraceptivos : '' }}" name="metodos_contraceptivos" placeholder="Insira os métodos contraceptivos" required>
    <div class="invalid-feedback">
        Insira os métodos contraceptivos utilizados
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomMamografia" class="form-label">Fez mamografia último ano? <b>*</b> </label>
    <select class="form-select" id="validationCustomMamografia" name="mamografia" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->mamografia) && $rows->mamografia == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->mamografia) && $rows->mamografia == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve mamografia
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomPapanicolau" class="form-label">Fez papanicolau no último ano?<b>*</b> </label>
    <select class="form-select" id="validationCustomPapanicolau" name="papanicolau" required>
         <option selected disabled value="">Clique para escolher...</option>
        <option value="1" {{ isset($rows->papanicolau) && $rows->papanicolau == 1 ? 'selected' : '' }}>Sim</option>
        <option value="0" {{ isset($rows->papanicolau) && $rows->papanicolau == 0 ? 'selected' : '' }}>Não</option>
    </select>
    <div class="invalid-feedback">
        Selecione se houve Papanicolau
    </div>
</div>

<div class="col-md-6">
    <label for="validationCustomLetra" class="form-label">Qual a frequência que passa por consulta ginecológica? <b>*</b> </label>
    <input type="text" class="form-control" id="validationCustomLetra" value="{{ isset($rows->frequencia_ginecologica) ? $rows->frequencia_ginecologica : '' }}" name="frequencia_ginecologica" placeholder="Insira a frequência ginecológica" required>
    <div class="invalid-feedback">
        Insira a frequência de consulta ginecológica
    </div>
</div>
