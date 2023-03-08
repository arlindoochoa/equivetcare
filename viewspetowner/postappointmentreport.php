<!DOCTYPE html>
<html class="h-100">



<?php include 'head.php'; ?>
<body class="d-flex flex-column h-100">
<?php include 'menu.php'; ?>

    <section class="col-md-12 container p-2">
      <div class="container">


      <div class="container col-md-6 p-2">
                  <h4 class="heading-section firstcolor p-2"> Virtual Exam Result</h4>  
      </div>


<!-- VIRTUAL EXAMINATION RESULTS -->
<!-- VIRTUAL EXAMINATION RESULTS -->
<!-- VIRTUAL EXAMINATION RESULTS -->


<div class="container col-md-6">
<div class="table-responsive">
<table class="table table-bordered table-responsive tableve">
          <thead class="table-light">
            <tr>
                <th scope="col">Aliment</th>
                <th scope="col">Points</th>
                <th scope="col">Severity</th>
              </tr>
          </thead>

          <tbody class="align-middle">
            <tr>
              <th scope="row"> 
                <a href="#" data-bs-toggle="modal" data-bs-target="#laminitis" data-bs-whatever="@mdo" style="text-decoration-line: none; color: #000000;">
                    Laminitis 
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
             </th>
              <td>123</td>
              <td><b id="colorlow">1</b></td>
            </tr>

            <tr>
              <th scope="row">
                <a href="#" data-bs-toggle="modal" data-bs-target="#laminitis" data-bs-whatever="@mdo" style="text-decoration-line: none; color: #000000;">
                    Colic 
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </th>
              <td>88</td>
              <td><b id="colorhigh">3</b></td>
            </tr>

            <tr>
              <th scope="row">
                <a href="#" data-bs-toggle="modal" data-bs-target="#laminitis" data-bs-whatever="@mdo" style="text-decoration-line: none; color: #000000;">
                    Abscess or infection 
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </th>
              <td>80</td>
              <td><b id="colorworrisome">2</b></td>
            </tr>

            <tr>
                <th scope="row">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#laminitis" data-bs-whatever="@mdo" style="text-decoration-line: none; color: #000000;">
                        Keratoma 
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </th>
                <td>65</td>
                <td><b id="colorhigh">3</b></td>
            </tr>

            <tr>
                <th scope="row">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#laminitis" data-bs-whatever="@mdo" style="text-decoration-line: none; color: #000000;">
                        Kidney Disease 
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </th>
                <td>25</td>
                <td><b id="coloremergency">4</b></td>
            </tr>
          </tbody> 
</div>
</table>
</div>



<!-- SEVERITY SCALE -->
<!-- SEVERITY SCALE -->
<!-- SEVERITY SCALE -->

<div class="col-md-6 mb-3"> 
    <p class="justify-content-start">Severity Scale:</p>
</div>


<div class="container col-md-12">
        <div class="w-auto p-1 timeline"></div>
        <div class="d-flex justify-content-between severityscale">
            <div class="d-flex">
                    <b id="colorlow">1</b>
            </div>
            
            <div class="d-flex">  
                <b id="colorworrisome">2</b>
            </div>

            <div class="d-flex">  
                <b id="colorhigh">3</b>
            </div>

            <div class="d-flex">  
                <b id="coloremergency">4</b>
            </div>
        </div>  
</div>


<div class="d-flex justify-content-between severityscale">
    <div class="d-flex p-2">  
            <p style="color: #78a669; font-size: 12px; text-align:center; position: relative; right: 15px;"><b>Low Concern</b></p>
    </div>

    <div class="d-flex p-2">  
        <p style="color: #6eadb8; font-size: 12px; text-align:center;"><b>Worrisome</b></p>
    </div>

    <div class="d-flex p-2">  
        <p style="color: #e9773a; font-size: 12px; text-align:center; position: relative; left: 5px;"><b>High Concern</b></p>
    </div>

    <div class="d-flex p-2">  
        <p style="color: #ff0000; font-size: 12px; text-align:center;"><b>Emergency</b></p>
    </div>
</div>  




<!-- NOTES INPUT -->
<!-- NOTES INPUT -->
<!-- NOTES INPUT -->


<div class="container">
      <div class="col-md-12">
          <h5 class="heading-section mb-3 firstcolor">Notes</h5>
      </div>

      <div class="col-md-12 mb-3">
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam repellat, voluptatum aperiam natus, modi sit nostrum iure esse nesciunt dolor deleniti, 
          iste explicabo consequuntur! Incidunt suscipit asperiores esse nisi amet!
        </p>
      </div>

      <div class="col-md-12">
          <h5 class="heading-section mb-3 firstcolor">Treatment</h5>
      </div>

      <div class="col-md-12 mb-3">
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam repellat, voluptatum aperiam natus, modi sit nostrum iure esse nesciunt dolor deleniti, 
          iste explicabo consequuntur! Incidunt suscipit asperiores esse nisi amet!
        </p>
      </div>
</div>

<!-- SLIDER MEDICAL MEDIA -->
<!-- SLIDER MEDICAL MEDIA -->
<!-- SLIDER MEDICAL MEDIA -->

<div class="col-md-12 mb-2 p-2">


  <div class="col-md-12">
      <h5 class="heading-section mb-3 firstcolor">Media</h5>
  </div>


                <section id="medical-media" class="splide d-flex align-items-center justify-content-center" aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                  <div class="splide__track">
                    <ul class="splide__list">
                      <li class="splide__slide">
                        <img src="../img/xray1.jpg" class="rounded-4">
                      </li>
                      <li class="splide__slide">
                        <img src="../img/xray2.jpg" class="rounded-4">
                      </li>
                      <li class="splide__slide">
                        <img src="../img/xray3.jpg" class="rounded-4">
                      </li>
                      <li class="splide__slide">
                        <img src="../img/ukariablue.jpg" class="rounded-4">
                      </li>
                      <li class="splide__slide">
                        <img src="../img/ukariablue2.jpg" class="rounded-4">
                      </li>
                      <li class="splide__slide">
                        <img src="../img/ukariablue3.jpg" class="rounded-4">
                      </li>
                    </ul>
                  </div>
                </section>
              </div>  


<div class="col-md-12">
    <h5 class="heading-section mb-3 firstcolor">Follow up: 2 Weeks</h5>
</div>


<div class="p-3 mb-3 row">
    <a href="#" id="firstbutton" class="btn btn-md p-2"> Schedule Follow up</a>
    <a href="../img/equivetcare.pdf" download="equivetcare.pdf" id="secondbutton" class="btn btn-sm p-2" style="position: relative; left: 5px">
    <img src="../img/downloadicon.svg" alt="" width="20" /> Download Report</a> 
</div>





</div>
</section>





<?php include 'menubottom.php'; ?>
<?php include 'filejs.php'; ?>

</body>
</html>