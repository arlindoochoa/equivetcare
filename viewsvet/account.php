<!DOCTYPE html>
<html class="h-100">
<?php include 'head.php'; ?>
<body class="d-flex flex-column h-100 body1">
<?php include 'menu.php'; ?>


<section class="col-md-12 container p-2">
<div class="container">



<!-- BUTTON ACCOUNT, PETS, NEW PETS -->
<!-- BUTTON ACCOUNT, PETS, NEW PETS -->
<!-- BUTTON ACCOUNT, PETS, NEW PETS -->


      <div class="p-2 mb-1 d-flex h-100">
        <nav class="container">
          <div class="nav nav-pills shadow-md" id="nav-tab" role="tablist">
            <button class="active btnforms p-2 mb-2" id="nav-account-tab" data-bs-toggle="tab" data-bs-target="#nav-account" type="" role="tab" aria-controls="nav-account" aria-selected="true">Account Data</button>
            <button class="btnforms p-2 mb-2" id="nav-patients-tab" data-bs-toggle="tab" data-bs-target="#nav-patients" type="" role="tab" aria-controls="nav-patients" aria-selected="false">My Patients</button>
            <button class="btnforms p-2 mb-2" id="nav-pets-tab" data-bs-toggle="tab" data-bs-target="#nav-pets" type="" role="tab" aria-controls="nav-pets" aria-selected="false">My Pets</button>
            <button class="btnforms p-2 mb-2" id="nav-newpets-tab" data-bs-toggle="tab" data-bs-target="#nav-newpets" type="" role="tab" aria-controls="nav-newpets" aria-selected="false">New Pets</button>
          </div>
        </nav>
      </div>
  



<!-- ACCOUNT DATA -->
<!-- ACCOUNT DATA -->
<!-- ACCOUNT DATA -->

<div class="tab-content" id="nav-tabContent">


  <div class="tab-pane fade show active" id="nav-account" role="tabpanel" aria-labelledby="nav-account-tab" tabindex="0">
  <form>

    <section class="col-md-12 container p-2">
      <div class="container">


      <div class="col-md-12">
          <br>
          <h5 class="heading-section mb-3 pb-md-3 firstcolor"> Account Data</h5>
      </div>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
        <label for="floatingInput">First Name</label>
      </div>
  
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Last Name">
        <label for="floatingInput">Last Name</label>
      </div>
      
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="Email">
        <label for="floatingInput">Email</label>
      </div>
        
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Phone Number">
        <label for="floatingInput">Phone Number</label>
      </div>
  
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingInput" placeholder="Password">
        <label for="floatingInput">Password</label>
      </div>


      <div class="row d-flex justify-content-center p-2 mb-4">
        <a href="account.php" class="btn btn-md" id="firstbutton">Update</a>
      </div>

    </div>
  </section>

  </form>
  </div>


<!-- MY PATIENTS -->
<!-- MY PATIENTS -->
<!-- MY PATIENTS --> 


  <div class="tab-pane fade" id="nav-patients" role="tabpanel" aria-labelledby="nav-patients-tab" tabindex="0">

    <section class="col-md-12 container p-2">
      <div class="container">


            <div class="col-md-12">
              <br>
              <h5 class="heading-section mb-3 pb-md-2 firstcolor">My Patients</h5>
            </div>

            <div class="col-md-12">
                  <section id="main-media" class="splide d-flex align-items-center justify-content-center mb-3 p-2" aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                    <div class="splide__track">
                      <ul class="splide__list">
                        <li class="splide__slide">
                        <a href="profile.php"> <img src="../img/pets1.jpg" class="rounded-4"></a>
                        </li>
                        <li class="splide__slide">
                          <a href="profile.php"><img src="../img/pets2.jpg" class="rounded-4"></a>
                        </li>
                        <li class="splide__slide">
                          <a href="profile.php"><img src="../img/pets3.jpg" class="rounded-4"></a>
                        </li>
                      </ul>
                    </div>
                  </section>
            </div>

          </div>
        </section>

  </div>



<!-- MY PETS -->
<!-- MY PETS -->
<!-- MY PETS --> 


<div class="tab-pane fade" id="nav-pets" role="tabpanel" aria-labelledby="nav-pets-tab" tabindex="0">

<section class="col-md-12 container p-2">
  <div class="container">


        <div class="col-md-12">
          <br>
          <h5 class="heading-section mb-3 pb-md-2 firstcolor">My Pets</h5>
        </div>

        <div class="col-md-12">
              <section id="mainpets" class="splide d-flex align-items-center justify-content-center mb-3 p-2" aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide">
                    <a href="profile.php"> <img src="../img/pets1.jpg" class="rounded-4"></a>
                    </li>
                    <li class="splide__slide">
                      <a href="profile.php"><img src="../img/pets2.jpg" class="rounded-4"></a>
                    </li>
                    <li class="splide__slide">
                      <a href="profile.php"><img src="../img/pets3.jpg" class="rounded-4"></a>
                    </li>
                  </ul>
                </div>
              </section>
        </div>

      </div>
    </section>

</div>


<!-- REGISTER NEW PETS -->
<!-- REGISTER NEW PETS -->
<!-- REGISTER NEW PETS -->

<div class="tab-pane fade" id="nav-newpets" role="tabpanel" aria-labelledby="nav-newpets-tab" tabindex="0">
    <form method="post" class="g-3 needs-validation" novalidate>

      <section class="col-md-12 container p-2">
        <div class="container">

        <div class="col-md-12">
            <br>
            <h5 class="heading-section mb-3 pb-md-3 firstcolor"> Register New Pets</h5>
        </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" placeholder="Pet Name" required>
          <div class="invalid-feedback">Please enter your Pet name</div>
          <label for="floatingInput">Pet Name</label>
        </div>
    

        <div class="form-floating mb-3">
          <select class="form-select"  name="specie" id="specie" onchange="cargarSex();" aria-label="Floating label select example" required>
            <option selected disabled value="">Species</option>
          </select>
          <div class="invalid-feedback">Please select an option</div>
          <label for="floatingSelect">Select</label>
        </div>


        <div class="form-floating mb-3">
          <select class="form-select"  name="sex" id="sex" aria-label="Floating label select example" required>
            <option selected disabled value="">Sex</option>
          </select>
          <div class="invalid-feedback">Please select an option</div>
          <label for="floatingSelect">Select</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" placeholder="Breed" required>
          <label for="floatingInput">Breed</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" placeholder="Age" required>
          <label for="floatingInput">Age</label>
        </div>


        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" placeholder="Weight">
          <label for="floatingInput">Weight</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="clientAddress" name="clientAddress" placeholder="Address" required>
          <div class="invalid-feedback">Please enter your address</div>
          <label for="floatingInput">Address</label>
        </div>


        <div class="row d-flex justify-content-center p-2 mb-4">
          <button type="submit" id="firstbutton" class="btn btn-md" name="registernewpets"> Register</button>
        </div>

        </div>
      </section>

    </form>
    </div>

</div>



</div>
</section>


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
if (isset($_POST['registernewpets'])){
echo ('<script>
	iziToast.success({
    title: "OK",
	position: "topCenter",
    message: "Successfully new pet added !!",
});
</script>');
}
?>


<script>
function cargarSpecies() {
    var array = ["horse", "dog", "cat"];
    array.sort();
    addOptions("specie", array);   
}

function addOptions(domElement, array) {
    var selector = document.getElementsByName(domElement)[0];
    for (specie in array) {
        var opcion = document.createElement("option");
        opcion.text = array[specie];
        opcion.value = array[specie].toLowerCase()
        selector.add(opcion);
    }
}

function cargarSex() {
    var listSexs = {
      horse: ["Mare", "Gelding", "Stallion"],
      dog: ["Female", "Male", "Spayed", "Neutered"],
      cat: ["Female", "Male", "Spayed", "Neutered"]
    }
    
    var species = document.getElementById('specie')
    var sexs = document.getElementById('sex')
    var specieSelect = species.value
    
    sexs.innerHTML = '<option value="">Select Sex...</option>'
    
    if(specieSelect !== ''){
      specieSelect = listSexs[specieSelect]
      specieSelect.sort()
    
      specieSelect.forEach(function(sex){
        let opcion = document.createElement('option')
        opcion.value = sex
        opcion.text = sex
        sexs.add(opcion)
      });
    }
    
  }
  
 cargarSpecies();
</script>









<?php include 'menubottomvet.php'; ?>
<?php include '../viewspetowner/filejs.php'; ?>
</body>
</html>