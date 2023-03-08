<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<body>

<!-- LOGIN -->
<!-- LOGIN -->
<!-- LOGIN -->
<div class="container" id="containerlogin">
<form action="../viewspetowner/main.php" class="g-3 needs-validation" novalidate>
	<div class="container col-md-6">
			<div class="mb-3 p-2">
			  <img src="../img/equivetcare.png" class="img-fluid" id="logo">
			</div>

			<div class="mb-3 p-2">
			  	<label><h4 class="firstcolor">Sign in Arlindo</h4></label> 
			</div>

			<div class="mb-3">
				<div class="input-group p-2">
				  <input type="email" class="form-control input" placeholder=" email" name="email" id="floatingInput" required autocomplete="off" >
				  <div class="invalid-feedback">Please enter your email</div>
				</div>
			</div>

			<div class="mb-2">
				<div class="input-group p-2">
				  <input type="password" class="form-control input" placeholder=" password" name="password" id="floatingInput" required>
				  <div class="invalid-feedback">Please enter your password</div>
				</div>
			</div>

			<div class="d-flex justify-content-end">
                  <a href="forgotpassword.php" style="color: #6d6c6c;">
                    <p> Forgot Password ??</p>
                  </a>
            </div> 

	  		<div class="p-3 mb-1 row">
				  <a href="signup.php" class="btn btn-md col-md-6" id="secondbutton">Sign Up</a>
				  <button type="submit" id="firstbutton" style="position: relative; left: 4px;" class="btn btn-md p-2 col-md-6"> Log in</button>
			</div>
	</div>
</form>
</div> 

<!-- SCRIPT INPUT ERROR MESSAGE -->
<!-- SCRIPT INPUT ERROR MESSAGE -->
<!-- SCRIPT INPUT ERROR MESSAGE -->


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


</body>
</html>