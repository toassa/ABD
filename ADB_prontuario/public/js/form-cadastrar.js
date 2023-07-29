(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
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

  cepInput.addEventListener('input', function() {
    let value = cepInput.value;
    value = value.replace(/\D/g, ''); // Remove todos os caracteres que não sejam dígitos
    value = value.replace(/(\d{5})(\d)/, '$5-$2'); // Adiciona uma barra após os primeiros dois dígitos
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
});