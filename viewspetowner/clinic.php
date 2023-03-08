<!DOCTYPE html>
<html class="h-100">
<?php include 'head.php'; ?>
<body class="d-flex flex-column h-100">
<?php include 'menu.php'; ?>


<section class="ftco-section col-md-12 container p-2">
<div class="container col-md-6">

      <div class="col-md-6 p-2"> 
          <a href="appointments.php" style="text-decoration: none;color: #000000;">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m22 11h-17.586l5.293-5.293a1 1 0 1 0 -1.414-1.414l-7 7a1 1 0 0 0 0 1.414l7 7a1 1 0 0 0 1.414-1.414l-5.293-5.293h17.586a1 1 0 0 0 0-2z" fill="#3d809e" data-original="#000000" class=""/></g></svg>
          </a>
      </div>

      <div class="col-md-6 p-2">
          <h5 class="heading-section firstcolor"> In Person Appointments</h5>
      </div>


  <!-- FILTERS -->
  <!-- FILTERS -->
  <!-- FILTERS -->


        <div class="d-flex justify-content-end mb-2">
          <div class="d-flex p-1">       
            <select class="form-select" aria-label="Default select example">
              <option selected>Speciality</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>



  <!-- GOOGLE MAPS -->
  <!-- GOOGLE MAPS -->
  <!-- GOOGLE MAPS -->


      <div class="d-flex justify-content-center p-2">
        <iframe class="shadow" id="mapaequivet" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7245780.407188875!2d-88.29729526121227!3d27.532120404138634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c1766591562abf%3A0xf72e13d35bc74ed0!2sFlorida!5e0!3m2!1sen!2sus!4v1661361455487!5m2!1sen!2sus" 
           allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>


  <!-- ADDRESS CLINIC -->
  <!-- ADDRESS CLINIC -->
  <!-- ADDRESS CLINIC -->

      <div class="container mb-3 p-1" id="appointments">
                <div class="d-flex justify-content-start">
                    <div class="p-1">
                        <img src="../img/location.svg" class="img-fluid" width="30">
                    </div>
                    <div class="p-1">
                          <h5><b> Pet ER </b></h5>
                    </div>
                </div>

                <div class="p-1">
                  <p class="d-flex" style="text-align: justify;">4517 Washington Ave. Manchester, Kentucky 39495</p>
                </div>

                <div class="d-flex justify-content-start">
                  <div class="p-1">
                      <img src="../img/clock.svg" class="img-fluid" width="30">
                  </div>

                  <div class="p-1">
                        <p><b> 8:00 am - 5:00pm </b></p>
                  </div>
                </div>

                <div class="p-1 text-center">
                  <a href="#" id="firstbutton" class="btn btn-md"><img src="../img/telephone-fill.svg" alt="" width="22"> Call</a>
                </div>
      </div>


  <!-- ADDRESS CLINIC -->
  <!-- ADDRESS CLINIC -->
  <!-- ADDRESS CLINIC -->

      <div class="container mb-3 p-1" id="appointments">
          <div class="d-flex justify-content-start">
              <div class="p-1">
                  <img src="../img/location.svg" class="img-fluid" width="30">
              </div>
              <div class="p-1">
                    <h5><b> Pet ER </b></h5>
              </div>
          </div>

          <div class="p-1">
            <p class="d-flex" style="text-align: justify;">4517 Washington Ave. Manchester, Kentucky 39495</p>
          </div>

          <div class="d-flex justify-content-start">
            <div class="p-1">
                <img src="../img/clock.svg" class="img-fluid" width="30">
            </div>

            <div class="p-1">
                  <p><b> 8:00 am - 5:00pm </b></p>
            </div>
          </div>

          <div class="p-2 text-center">
            <a href="#" id="firstbutton" class="btn btn-md"><img src="../img/telephone-fill.svg" alt="" width="22"> Call</a>
          </div>
      </div>

</div>
</section>

<?php include 'menubottom.php'; ?>
<?php include 'filejs.php'; ?>
</body>
</html>