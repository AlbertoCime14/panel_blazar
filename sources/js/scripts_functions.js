$(document).ready(function(){ 

$('#form_validar').submit(function(e) {
 e.preventDefault(); //Evita que la página actual vaya a la url del action   
  var correo=$('#TXTcorreo').val();
  var licencia=$('#TXTlicencia').val();
  
});     

$('#form_generar').submit(function(e) {
  e.preventDefault(); //Evita que la página actual vaya a la url del action   
   
 });
 // Example starter JavaScript for disabling form submissions if there are invalid fields  
});
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();

 