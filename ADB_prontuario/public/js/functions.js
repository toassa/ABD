const password = document.getElementById("validationCustomUserPass");
const lbl_password = document.getElementById("labelValidationCustomUserPass");

password.style.display = "block";
lbl_password.style.display = "block";

function hide_password(){
  password.style.display = "none";
  lbl_password.style.display = "none";
}