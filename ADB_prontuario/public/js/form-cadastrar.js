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


document.getElementById("validationCustom03").style.display = "block";
document.getElementById("labelValidationCustom03").style.display = "block";

function hide_password(){
  document.getElementById("validationCustom03").style.display = "none";
  document.getElementById("labelValidationCustom03").style.display = "none";
}