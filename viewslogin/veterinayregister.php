<!DOCTYPE html>
<html>

<?php include 'head.php'; ?>

<body class="body1">



<!-- REGISTER VETERINARY -->
<!-- REGISTER VETERINARY -->
<!-- REGISTER VETERINARY -->


<div class="container p-3" id="containerlogin">
<div class="container col-md-6">
		
	<div class="mb-3">
	  <a href="signup.php" style="text-decoration: none;color: #000000;">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m22 11h-17.586l5.293-5.293a1 1 0 1 0 -1.414-1.414l-7 7a1 1 0 0 0 0 1.414l7 7a1 1 0 0 0 1.414-1.414l-5.293-5.293h17.586a1 1 0 0 0 0-2z" fill="#3d809e" data-original="#000000" class=""/></g></svg>
	  </a>
	</div>

	<div class="mb-3">
	  <h4 class="firstcolor">Veterinary</h4>
	</div>

<form method="post" class="g-3 needs-validation" novalidate>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="First Name" required onkeypress="return onlyletter(event)">
    <div class="invalid-feedback">Please enter your first name</div>
    <label for="floatingInput">First Name</label>
  </div>

  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="Last Name" required onkeypress="return onlyletter(event)">
    <div class="invalid-feedback">Please enter your last name</div>
    <label for="floatingInput">Last Name</label>
  </div>
  
  <div class="form-floating mb-3">
    <input type="email" class="form-control" id="floatingInput" placeholder="Email" required>
    <div class="invalid-feedback">Please enter your email</div>
    <label for="floatingInput">Email</label>
  </div>
    
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="Phone Number" required onkeypress="return onlynumber(event)">
    <div class="invalid-feedback">Please enter your phone number</div>
    <label for="floatingInput">Phone Number</label>
  </div>

  <div class="form-floating mb-3">
    <input type="password" class="form-control" id="floatingInput" placeholder="Password" required>
    <div class="invalid-feedback">Please enter your password</div>
    <label for="floatingInput">Password</label>
  </div>


  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="License ID Number" required>
    <div class="invalid-feedback">Please enter your License ID NUMBER</div>
    <label for="floatingInput">License ID Number</label>
  </div>

  <div class="mb-3">
        <label for="exampleDataList" class="form-label">Do you provide virtual or in-person care, or both?</label>
        <div class="p-1">
          <input class="form-check-input" type="checkbox" role="switch" id="virtualcare">
          <label class="form-check-label" for="virtualcare">Virtual Care</label>
        </div>
        <div class="p-1">
          <input class="form-check-input" type="checkbox" role="switch" id="inpersoncare">
          <label class="form-check-label" for="inpersoncare">In-person care</label>
        </div>
  </div>


  <div class="form-floating mb-3">
    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" required>
      <option selected disabled value="">Do you practice with a clinic?</option>
      <option value="1">NO</option>
      <option value="2">SI</option>
    </select>
    <div class="invalid-feedback">Please select an option</div>
    <label for="floatingSelect">Select</label>
  </div>


  <div class="form-floating mb-3">
    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" required>
      <option selected disabled value="">  Do you or your clinic use a PIMS?</option>
      <option value="1">NO</option>
      <option value="2">SI</option>
    </select>
    <div class="invalid-feedback">Please select an option</div>
    <label for="floatingSelect">Select</label>
  </div>



	<div class="row d-flex justify-content-center p-4 mb-4">
  <a href="subscriptionvet.php" type="submit" id="firstbutton" class="btn btn-md" name="registerveterinary"> Register</a>
	</div>
</form>
</div>
</div>

<!-- CONFIRMATION MESSAGE -->
<!-- CONFIRMATION MESSAGE -->
<!-- CONFIRMATION MESSAGE -->
<?php
if (isset($_POST['registerveterinary'])){
echo ('<script>
	iziToast.success({
    title: "OK",
	position: "topCenter",
    message: "Successfully registered!!",
});
</script>');
}
?>

<?php include '../viewspetowner/filejs.php'; ?>
</body>
</html>