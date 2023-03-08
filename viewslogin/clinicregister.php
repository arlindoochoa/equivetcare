<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<body class="body1">


<!--  FORM REGISTER CLINIC -->
<!--  FORM REGISTER CLINIC -->
<!--  FORM REGISTER CLINIC -->

<div class="container" id="containerlogin">
<div class="container col-md-6">
		
      <div class="mb-3">
        <a href="signup.php" style="text-decoration: none;color: #000000;">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m22 11h-17.586l5.293-5.293a1 1 0 1 0 -1.414-1.414l-7 7a1 1 0 0 0 0 1.414l7 7a1 1 0 0 0 1.414-1.414l-5.293-5.293h17.586a1 1 0 0 0 0-2z" fill="#3d809e" data-original="#000000" class=""/></g></svg>
        </a>
      </div>

      <div class="mb-3">
        <h4 class="firstcolor">Clinic</h4>
      </div>

      <form method="post" class="g-3 needs-validation" novalidate>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" placeholder="Clinic Name" required>
          <div class="invalid-feedback">Please enter your clinic name</div>
          <label for="floatingInput">Clinic Name</label>
        </div>
          
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="Email" required>
          <div class="invalid-feedback">Please enter your email</div>
          <label for="floatingInput">Email</label>
        </div>
    
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="floatingInput" placeholder="Password" required>
          <div class="invalid-feedback">Please enter your password</div>
          <label for="floatingInput">Password</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="clientAddress" name="clientAddress" placeholder="Address" required>
          <div class="invalid-feedback">Please enter your address</div>
          <label for="floatingInput">Address</label>
        </div>

        <div class="row d-flex justify-content-center p-2 mb-4">
          <button type="submit" id="firstbutton" class="btn btn-md" name="registerclinic"> Register</button>
        </div>
      </form>
</div>
</div>

<!-- API GOOGLE MAPS -->
<!-- API GOOGLE MAPS -->
<!-- API GOOGLE MAPS -->

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1s-2ac983ate623zdegPJQCfKfDAF4eA&libraries=places&callback=initMap" async defer"></script>
<script>
function initMap() {
   var input = document.getElementById('clientAddress');
   var autocomplete = new google.maps.places.Autocomplete(input);
   autocomplete.addListener('place_changed', function() {
       var place = autocomplete.getPlace();
       document.getElementById('location-snap').
       innerHTML = place.formatted_address;  
       document.getElementById('lat-span').
       innerHTML = place.geometry.location.lat();
       document.getElementById('lon-span').
       innerHTML = place.geometry.location.lng();
   });
}
</script>


<!-- CONFIRMATION MESSAGE -->
<!-- CONFIRMATION MESSAGE -->
<!-- CONFIRMATION MESSAGE -->
<?php
if (isset($_POST['registerclinic'])){
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