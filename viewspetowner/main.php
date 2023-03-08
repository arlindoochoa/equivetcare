<!DOCTYPE html>
<html class="h-100">
<?php include 'head.php'; ?>



<body class="d-flex flex-column h-100">
<?php include 'menu.php'; ?>

<!-- CAROUSEL PETS -->
<!-- CAROUSEL PETS -->
<!-- CAROUSEL PETS -->
<section class="container">
<div class="container">
          <div class="col-md-6">
            <br>
            <h5 class="heading-section mb-3 firstcolor">My Pets</h5>
          </div>

          <div class="col-md-12">
                <section id="main-media" class="splide d-flex align-items-center justify-content-center mb-3 p-2">
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

<!-- APPOINMENTS -->
<!-- APPOINMENTS -->
<!-- APPOINMENTS -->

<section class="col-md-12 container">
<div class="container">
          <div class="col-md-6">
            <h5 class="heading-section mb-3 firstcolor">My Appointments</h5>
          </div>


          <a href="" data-bs-toggle="modal" data-bs-target="#myappointments" data-bs-whatever="@mdo" style="text-decoration: none; color: #000000;">
            <div class="d-flex align-items-center mb-3 p-1" id="appointments">
              <div class="p-2 flex-fill offset-md-1">
                    <div class="align-self-start"><h1 style="color:#6eadb8; font-size: 50px;"><b>10</b></h1></div>
                    <div class="align-self-center"><p style="position: relative; left: 7px; bottom: 10px; font-size: 20px;">Nov</p></div>
              </div>

              <div class="flex-fill p-1">
                    <div class="align-self-start p-1"><img src="../img/veterinary.png" class="img-fluid" width="30"><b>Dr John Peppo</b></div>
                    <div class="align-self-center p-1"><img src="../img/clock.png" class="img-fluid" width="30"> <b>10:25AM</b></div>
              </div>
              <div class="flex-fill p-1"><img src="../img/pets3.jpg" class="img-fluid petsmain"></div>
            </div>
          </a>

          <a href="" data-bs-toggle="modal" data-bs-target="#myappointments" data-bs-whatever="@mdo" style="text-decoration: none; color: #000000;">
            <div class="d-flex align-items-center mb-3 p-1" id="appointments">
              <div class="p-2 flex-fill offset-md-1">
                    <div class="align-self-start"><h1 style="color:#6eadb8; font-size: 50px;"><b>10</b></h1></div>
                    <div class="align-self-center"><p style="position: relative; left: 7px; bottom: 10px; font-size: 20px;">Nov</p></div>
              </div>

              <div class="flex-fill p-1">
                    <div class="align-self-start p-1"><img src="../img/veterinary.png" class="img-fluid" width="30"><b>Dr John Peppo</b></div>
                    <div class="align-self-center p-1"><img src="../img/clock.png" class="img-fluid" width="30"> <b>10:25AM</b></div>
              </div>
              <div class="flex-fill p-1"><img src="../img/pets3.jpg" class="img-fluid petsmain"></div>
            </div>
          </a>
</div>
</section>



<!-- MODAL APPOINMENTS -->
<!-- MODAL APPOINMENTS -->
<!-- MODAL APPOINMENTS -->

<div class="modal fade" id="myappointments" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> <img src="../img/equivetcare.png" class="img-responsive" id="logo"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="d-flex justify-content-center p-2">
                    <div class="p-2"><p class="firstcolor"><b><img src="../img/calendar1.png" class="img-fluid" width="30"> 10 November</b></p></div>
                    <div class="p-2"><p class="firstcolor"><b><img src="../img/clock.png" class="img-fluid" width="30"> 10:25AM</b></p></div>
            </div>

            <div class="d-flex justify-content-between p-2">
                  <div class="p-1">
                    <img src="../img/pets3.jpg" class="img-fluid petsmain">
                  </div>
                  <div class="p-1">
                        <p class="firstcolor"><b>Nebula</b></p><p style="color:#6d6c6c ;">4yo Dog <br> Orlando</p> 
                  </div>

                  <div class="vl p-1"></div>

                  <div class="p-1">
                    <p class="firstcolor"><b>Dr Pepper</b></p> <p style="color:#6d6c6c ;">General Practice <br>Orlando</p> 
                  </div>
            </div>


              <div class="p-3 mb-3 row">
                <a href="#" id="secondbutton" class="btn btn-md p-2" data-bs-toggle="modal" data-bs-target="#myjoincall" data-bs-whatever="@mdo"> Join Call</a>
                <a href="#" id="firstbutton" class="btn btn-md p-2" style="position: relative; left: 5px;">Re-schedule</a>
              </div>
          </div>
    </div>
  </div>
</div>





<!-- MODAL JOIN CALL -->
<!-- MODAL JOIN CALL -->
<!-- MODAL JOIN CALL -->

<div class="modal fade" id="myjoincall" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> <img src="../img/equivetcare.png" class="img-responsive" id="logo"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

                <div class="d-flex justify-content-center p-2">
                        <div class="p-2"><h5 class="firstcolor">With this VCPR you can</h5></div>
                </div>

              <div class="p-3 mb-3 text-center">
                <a href="#" id="secondbutton" class="btn btn-md p-2"> Agree & Continue</a>
              </div>
          </div>
    </div>
  </div>
</div>




<?php include 'menubottom.php'; ?>
<?php include 'filejs.php'; ?>
</body>
</html>