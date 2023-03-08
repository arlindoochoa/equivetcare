<!-- INPUT DATEPICKER -->
<script src="../js/jquery.min.js"></script>
<script src="../js/moment.min.js"></script>
<script src="../js/daterangepicker.js"></script>
<script src="../js/global.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js"></script>

<!-- CAROUSEL FILES -->
<script src="../js/splide-extension-auto-scroll.min.js"></script>
<script src="../js/slider.js"></script>
<script src="../js/splide.min.js"></script> 

<!-- BOOTSTRAP FILES -->
<script src="../js/bootstrap.bundle.min.js"></script>

<!-- SCRIPT ONLYNUMER -->

<script>
    function onlynumber(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " 0123456789+";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>

<!-- SCRIPT ONLYLETTER -->

<script>
    function onlyletter(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>



<!-- SCRIPT INPUT ERROR MESSAGE BOOTSTRAP -->
<!-- SCRIPT INPUT ERROR MESSAGE BOOTSTRAP -->
<!-- SCRIPT INPUT ERROR MESSAGE BOOTSTRAP -->

<script>
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
</script>



<script>
if (window.history.replaceState) {
	console.log("probando")
	window.history.replaceState(null, null, window.location.href)
}
</script>

