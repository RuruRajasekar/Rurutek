// (function () {
//     'use strict'
  
//     window.addEventListener('load', function () {
//       // Fetch all the forms we want to apply custom Bootstrap validation styles to
//       var forms = document.getElementsByClassName('needs-validation')
  
//       // Loop over them and prevent submission
//       Array.prototype.filter.call(forms, function (form) {
//         form.addEventListener('submit', function (event) {
//           if (form.checkValidity() === false) {
//             event.preventDefault()
//             event.stopPropagation()
//           }
  
//           form.classList.add('was-validated')
//         }, false)
//       })
//     }, false)
//   })()
function contactForm(){
    var name = document.getElementById("name").value;
    var company = document.getElementById("company").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var error_message = document.getElementById("error_message");
    error_message.style.padding = "10px";  
    var text;
    if(name.length < 5){
      text = "Please Enter valid Name";
      error_message.innerHTML = text;
      return false;
    }
    if(isNaN(phone) || phone.length != 10){
      text = "Please Enter valid Phone Number";
      error_message.innerHTML = text;
      return false;
    }
    if(company.length < 5){
      text = "Please Enter company Name";
      error_message.innerHTML = text;
      return false;
    }
    if(email.indexOf("@") == -1 || email.length < 6){
      text = "Please Enter valid Email";
      error_message.innerHTML = text;
      return false;
    }
    alert("Form Submitted Successfully!");
    return true;
  }