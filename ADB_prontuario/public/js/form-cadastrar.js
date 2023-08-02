(() => {
  'use strict'

  const forms = document.querySelectorAll('.needs-validation')

  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

function mascara(i){
  var v = i.value;

  if(isNaN(v[v.length-1])){
    i.value = v.substring(0, v.length-1);
    return;
  }

  i.setAttribute("maxlength", "14");
  if (v.length == 3 || v.length == 7) i.value += ".";
  if (v.length == 11) i.value += "-";
}

const mascara_tel = (value) =>{
  if(!value) return "";
  value = value.replace(/\D/g,'');
  value = value.replace(/(\d{2})(\d)/,"($1) $2");
  value = value.replace(/(\d)(\d{4})$/,"$1-$2");
  return value;
}

document.addEventListener('DOMContentLoaded', function() {
  const dataInput = document.getElementById('validationCustomData');
  const cepInput = document.getElementById('validationCustomCEP');
  const nomeInput = document.getElementById('validationCustomNome');
  const numRegistroInput = document.getElementById('validationCustomNumRegistro');
  const idadeInput = document.getElementById('validationCustomIdade');
  const profissaoInput = document.getElementById('validationCustomProfissao');
  const escolaridadeInput = document.getElementById('validationCustomEscolaridade');
  const rendaMensalInput = document.getElementById('validationCustomRendaMensal');
  const dependentesInput = document.getElementById('validationCustomDependentesdaRenda');
  const telefoneInput = document.getElementById('validationCustomTelefone');
  const segundoTelefoneInput = document.getElementById('validationCustomSegundoTelefone');
  const donoSegundoTelefoneInput = document.getElementById('validationCustomDonoSegundoTelefone');
  const numeroInput = document.getElementById('validationCustomNumero');
  const ruaInput = document.getElementById('validationCustomRua');
  const bairroInput = document.getElementById('validationCustomBairro');
  const complementoInput = document.getElementById('validationCustomComplemento');

  nomeInput.addEventListener('input', function() {
    let value = nomeInput.value;
    // value = value.replace(/\D/g, ''); AQUI
    value = value.replace(/(\d{200})\d+?$/, '$1');
    nomeInput.value = value;
  });

  cepInput.addEventListener('input', function() {
    let value = cepInput.value;
    value = value.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
    value = value.replace(/(\d{5})(\d)/, '$1-$2'); // Adiciona um traço após os primeiros cinco dígitos
    //value = value.replace(/(\d{4})\d+?$/, '$1'); // Limita o campo a apenas 10 dígitos (DD/MM/AAAA)
    cepInput.value = value;
  });

  dataInput.addEventListener('input', function() {
    let value = dataInput.value;
    value = value.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
    value = value.replace(/(\d{2})(\d)/, '$1/$2'); // Adiciona uma barra após os primeiros dois dígitos
    value = value.replace(/(\d{2})(\d)/, '$1/$2'); // Adiciona uma segunda barra após os próximos dois dígitos
    value = value.replace(/(\d{4})\d+?$/, '$1'); // Limita o campo a apenas 10 dígitos (DD/MM/AAAA)

    dataInput.value = value;

    dataInput.addEventListener('blur', function () {
      const parts = this.value.split('/');
      const day = parseInt(parts[0]);
      const month = parseInt(parts[1]);
      const year = parseInt(parts[2]);

      if (isNaN(day) || day < 1 || day > 30) {
        this.value = '';
      } else if (isNaN(month) || month < 1 || month > 12) {
        this.value = '';
      } else if (isNaN(year) || year<1900 || year > 2023) {
        this.value = '';
      }
    });
  });

  numRegistroInput.addEventListener('input', function() {
    let value1 = numRegistroInput.value;
    value1 = value1.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
    value1 = value1.replace(/(\d{12})\d+?$/, '$1');
    numRegistroInput.value = value1;
  });

  idadeInput.addEventListener('input', function() {
    let value = idadeInput.value;
    value = value.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
    value = value.replace(/(\d{3})\d+?$/, '$1');
    idadeInput.value = value;
  });
  
  profissaoInput.addEventListener('input', function() {
    let value = profissaoInput.value;
    //value = value.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
    value = value.replace(/(\d{50})\d+?$/, '$1');
    profissaoInput.value = value;
  });
  
  escolaridadeInput.addEventListener('input', function() {
      let value = escolaridadeInput.value;
      //value = value.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
      value = value.replace(/(\d{30})\d+?$/, '$1');
      escolaridadeInput.value = value;
  });
  
  rendaMensalInput.addEventListener('input', function() {
      let value = rendaMensalInput.value;
      value = value.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
      value = value.replace(/(\d{10})\d+?$/, '$1');
      rendaMensalInput.value = value;
  });
  
  dependentesInput.addEventListener('input', function() {
      let value = dependentesInput.value;
      //value = value.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
      value = value.replace(/(\d{100})\d+?$/, '$1');
      dependentesInput.value = value;
  });
  
  telefoneInput.addEventListener('input', function() {
      let value = telefoneInput.value;
      value = value.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
      value = value.replace(/(\d{11})\d+?$/, '$1');
      telefoneInput.value = value;
  });
  
  segundoTelefoneInput.addEventListener('input', function() {
      let value = segundoTelefoneInput.value;
      value = value.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
      value = value.replace(/(\d{11})\d+?$/, '$1');
      segundoTelefoneInput.value = value;
  });
  
  donoSegundoTelefoneInput.addEventListener('input', function() {
      let value = donoSegundoTelefoneInput.value;
      //value = value.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
      value = value.replace(/(\d{50})\d+?$/, '$1');
      donoSegundoTelefoneInput.value = value;
  });
  
  numeroInput.addEventListener('input', function() {
      let value = numeroInput.value;
      value = value.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
      value = value.replace(/(\d{8})\d+?$/, '$1');
      numeroInput.value = value;
  });
  
  ruaInput.addEventListener('input', function() {
      let value = ruaInput.value;
      //value = value.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
      value = value.replace(/(\d{50})\d+?$/, '$1');
      ruaInput.value = value;
  });
  
  bairroInput.addEventListener('input', function() {
      let value = bairroInput.value;
      //value = value.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
      value = value.replace(/(\d{50})\d+?$/, '$1');
      bairroInput.value = value;
  });
  
  complementoInput.addEventListener('input', function() {
      let value = complementoInput.value;
      //value = value.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
      value = value.replace(/(\d{50})\d+?$/, '$1');
      complementoInput.value = value;
  });
  
});