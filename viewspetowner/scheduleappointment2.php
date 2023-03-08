<!DOCTYPE html>
<html class="h-100">
<?php include 'head.php'; ?>
<body class="d-flex flex-column h-100 body1">
<?php include 'menu.php'; ?>

<section class="col-md-12 container p-2">
<div class="container">

    <div class="p-2 container col-md-6"> 
          <a href="scheduleappointment.php" style="text-decoration: none;color: #000000;">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m22 11h-17.586l5.293-5.293a1 1 0 1 0 -1.414-1.414l-7 7a1 1 0 0 0 0 1.414l7 7a1 1 0 0 0 1.414-1.414l-5.293-5.293h17.586a1 1 0 0 0 0-2z" fill="#3d809e" data-original="#000000" class=""/></g></svg>
          </a>
    </div>


	
<!-- BRIEF APPOINTMENT -->
<!-- BRIEF APPOINTMENT -->
<!-- BRIEF APPOINTMENT -->


	<div class="container d-flex align-items-center mb-3 p-1 col-md-6" id="appointments">
		<div class="p-2 flex-fill offset-md-1">
			  <div class="align-self-start"><h1 style="color:#6eadb8; font-size: 50px;"><b>10</b></h1></div>
			  <div class="align-self-center"><p style="position: relative; left: 5px; bottom: 10px; font-size: 20px;">Nov</p></div>
		</div>

		<div class="flex-fill p-1">
			  <div class="align-self-start p-1"><b>Dr John Peppo</b></div>
			  <div class="align-self-center p-1"><b>10:25AM</b></div>
			  <div class="align-self-center p-1"><b>Orlando, FL</b></div>
		</div>
		<div class="flex-fill p-1"><img src="../img/vets1.jpg" class="img-fluid petsmain"></div>
	</div>





    <div class="container col-md-6"> 
        <p class="justify-content-start"> Please choose which animal this appointment is for.</p>
    </div>


	<!-- CAROUSEL PETS -->
	<!-- CAROUSEL PETS -->
	<!-- CAROUSEL PETS --> 


	<section id="main-media" class="container col-md-6 splide d-flex align-items-center justify-content-center mb-3 p-2">
	<div class="splide__track">
		<ul class="splide__list">
			<li class="splide__slide">
				<div class="content">
					<div class="custom_content">
					<label class="custom_radiobtn">
						<input type="radio" class="custom-radio" name="radio" >
						<span class="radio-button"><i class="bi bi-check"></i>
						<div class="radio-img">
						<img src="../img/pets1.jpg" class="img-fluid petsmain">
						</div>
						</span>
					</label>
					</div>
				</div>
			</li>
			<li class="splide__slide">
				<div class="content">
					<div class="custom_content">
					<label class="custom_radiobtn">
						<input type="radio" class="custom-radio" name="radio" >
						<span class="radio-button"><i class="bi bi-check"></i>
						<div class="radio-img">
						<img src="../img/pets2.jpg" class="img-fluid petsmain">
						</div>
						</span>
					</label>
					</div>
				</div>
			</li>

			<li class="splide__slide">
				<div class="content">
					<div class="custom_content">
					<label class="custom_radiobtn">
						<input type="radio" class="custom-radio" name="radio">
						<span class="radio-button"><i class="bi bi-check"></i>
						<div class="radio-img">
						<img src="../img/pets3.jpg" class="img-fluid petsmain">
						</div>
						</span>
					</label>
					</div>
				</div>
			</li>
		</ul>
	</div>	
	</section>



<!-- VIRTUAL EXAM -->
<!-- VIRTUAL EXAM -->
<!-- VIRTUAL EXAM -->


    <div class="container col-md-6"> 
        <p class="justify-content-start"> Select the Virtual Exam related to this appointment, or take a new one to assess the pet's condition</p>
    </div>


	<div class="container col-md-6">
		<div class="table-responsive">
		<table class="table table-bordered table-responsive tableve">
			
				  <tbody class="align-middle">
					<tr>
					  <td class="table-light">Covid</td>
					  <td class="table-light">Oct 9</td>
					  <td class="table-light">10:00 AM</td>
					  <td class="table-light"><input type="checkbox" class="form-check-input" name="flexRadioDefault" id="flexRadioDefault1"></td>
					</tr>
					<tr>
						<td class="table-light">Covid</td>
						<td class="table-light">Oct 1</td>
						<td class="table-light">10:00 AM</td>
						<td class="table-light"><input type="checkbox" class="form-check-input" name="flexRadioDefault" id="flexRadioDefault2"></td>
					</tr>
				  </tbody> 
		</div>
		</table>
		<p class="text-end"><a href="virtualexam1.php" id="secondbutton" class="btn btn-sm"> Take Virtual Exam</a></p>
	</div>


	

	<div class="text-center p-2 mb-2">
        <div class="container col-md-12">
            <a href="main.php" class="btn btn-md" id="firstbutton">Pay Submit</a>
        </div>
    </div>


        


</div>
</section>


<?php include 'menubottom.php'; ?>
<?php include 'filejs.php'; ?>
</body>
</html>