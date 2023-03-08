<!DOCTYPE html>
<html class="h-100">



<?php include 'head.php'; ?>


<body class="d-flex flex-column h-100 body1">

<?php include 'menu.php'; ?>

<section class="ftco-section col-md-12 container p-2">
<div class="container">

        <div class="p-2 container col-md-6"> 
            <a href="virtualexam.php" style="text-decoration: none;color: #000000;">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m22 11h-17.586l5.293-5.293a1 1 0 1 0 -1.414-1.414l-7 7a1 1 0 0 0 0 1.414l7 7a1 1 0 0 0 1.414-1.414l-5.293-5.293h17.586a1 1 0 0 0 0-2z" fill="#3d809e" data-original="#000000" class=""/></g></svg>
          </a>
        </div>


        <div class="container col-md-6"> 
            <p class="justify-content-start">Please select all bodily systems applicable to your pet's health concerns.</p>
        </div>


        <div class="container col-md-6">
              <div class="row">
                  <img src="../img/horseanimation.png" class="mw-100 mx-auto d-block img-fluid" alt="..." id="imgvirtualexam">
              </div>
        </div>


<!-- BUTTON SYSTEMS -->
<!-- BUTTON SYSTEMS -->
<!-- BUTTON SYSTEMS -->

      <div class="container text-center">
            <div class="row">
                    <ul class="ks-cboxtags">
                        <li><input type="checkbox" id="checkbox1" value="Rainbow Dash"><label for="checkbox1" > Musculoskeletal</label></li>
                        <li><input type="checkbox" id="checkbox2" value="Cotton Candy"><label for="checkbox2" > Gastrointestinal</label></li>
                    </ul> 
            </div>
          
            <div class="row">
              <ul class="ks-cboxtags">
                  <li><input type="checkbox" id="checkbox3" value="Rainbow Dash"><label for="checkbox3"> Dermatological</label></li>
                  <li><input type="checkbox" id="checkbox4" value="Cotton Candy"><label for="checkbox4"> Ophthalmic</label></li>
              </ul>
            </div>

            <div class="row">
              <ul class="ks-cboxtags">
                  <li><input type="checkbox" id="checkbox5" value="Rainbow Dash"><label for="checkbox5"> Behavioral</label></li>
                  <li><input type="checkbox" id="checkbox6" value="Cotton Candy"><label for="checkbox6"> Systemic</label></li>
              </ul>
            </div>
      </div>


      <div class="row d-flex justify-content-center p-3 mb-3">
        <a href="virtualexam3.php" class="btn btn-md" id="firstbutton">Submit</a>
      </div> 


</div>
</section>


<?php include 'menubottomvet.php'; ?>
<?php include 'filejs.php'; ?>

</body>
</html>