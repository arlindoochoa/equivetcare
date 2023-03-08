<!DOCTYPE html>
<html class="h-100">



<?php include 'head.php'; ?>

<body class="d-flex flex-column h-100 body1">

<?php include 'menu.php'; ?>

<section class="ftco-section col-md-12 container p-2">
<div class="container">

<div class="p-2 container col-md-6"> 
    <a href="virtualexamconditions.php" style="text-decoration: none;color: #000000;">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m22 11h-17.586l5.293-5.293a1 1 0 1 0 -1.414-1.414l-7 7a1 1 0 0 0 0 1.414l7 7a1 1 0 0 0 1.414-1.414l-5.293-5.293h17.586a1 1 0 0 0 0-2z" fill="#3d809e" data-original="#000000" class=""/></g></svg>
    </a>
</div>


<div class="container col-md-6"> 
    <p class="justify-content-start">Virtual Examination Results: Critical Health Data</p>
</div>


<!-- BUTTON VIRTUAL VET AND PERSON VET -->
<!-- BUTTON VIRTUAL VET AND PERSON VET -->
<!-- BUTTON VIRTUAL VET AND PERSON VET -->


<div class="container col-md-6">
    <div class="d-flex justify-content-center">
        <div class="p-2 col-md-6">
            <a href="veterinarians.php" class="btn btn-md" id="btnvirtualperson">
                <img src="../img/virtualvet.svg" alt="" width="120">
                <p> Virtual Vet Care</p>
            </a>
        </div>
        <div class="p-2 col-md-6">
            <a href="clinic.php" class="btn btn-md" id="btnvirtualperson">
                <img src="../img/personvet.svg" alt="" width="120">
                <p>In-Person Vet Care</p>
            </a>
        </div>
    </div>
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




<!-- SELECT SYMPTOMS -->
<!-- SELECT SYMPTOMS -->
<!-- SELECT SYMPTOMS -->

<div class="row d-flex justify-content-center">
    <a href="virtualexam3.php" data-bs-toggle="modal" data-bs-target="#selectedsymptoms" data-bs-whatever="@mdo"  class="btn btn-md" id="firstbutton">Select Symptoms </a>
</div>  



<!-- MODAL SELECT SYMPTOMS -->
<!-- MODAL SELECT SYMPTOMS -->
<!-- MODAL SELECT SYMPTOMS -->

<div class="modal fade" id="selectedsymptoms" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> <img src="../img/equivetcare.png" class="img-responsive" id="logo"></h5>
  
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="p-2">
                <p style="color:#6eadb8 ;">Musuculoskeletal:</p>
                <p>Abnormal posture - leaning backward - Abnornmal movement - pawing - Hoof abnormalities - odd shape
                </p>
            </div>

            <div class="p-2">
                <p style="color:#6eadb8 ;">Behavioral:</p>
                <p>Change in behavior - depressed 
                </p>
            </div>
            
        </div>
  
      </div>
    </div>
</div>




<!-- MODAL ALIMENTS -->
<!-- MODAL ALIMENTS -->
<!-- MODAL ALIMENTS -->


<div class="modal fade" id="laminitis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> <img src="../img/equivetcare.png" class="img-fluid" id="logo"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p style="color:#6eadb8 ;"> <img src="../img/causes.png" class="img-fluid" alt="" width="32"> Causes:</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
            </ul>

            <p style="color:#6eadb8 ;"><img src="../img/symptoms.png" class="img-fluid" alt="" width="32"> Symptoms:</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
            </ul>

            <p style="color:#6eadb8 ;"><img src="../img/treatments.png" class="img-fluid" alt="" width="32"> Treatments:</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
            </ul>

        </div>
  
      </div>
    </div>
</div>





</div>
</section>

<?php include 'menubottom.php'; ?>
<?php include 'filejs.php'; ?>


</body>
</html>