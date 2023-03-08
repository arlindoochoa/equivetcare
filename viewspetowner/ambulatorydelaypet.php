<!DOCTYPE html>
<html class="h-100">
<?php include 'head.php'; ?>
<body class="d-flex flex-column h-100 body1">
<?php include 'menu.php'; ?>

<section class="col-md-12 container p-2">
<div class="container">




	<div class="container col-md-6">
		<div class="row justify-content-between">
					<div class="d-flex align-items-center col-md-5 p-2 mb-2" id="appointments">
							<div class="flex-fill p-1">
								<img src="../img/pets1.jpg" class="img-fluid petsmain">
							</div>
							<div class="p-2 flex-fill offset-md-1">
								<div class="align-self-start"><h1 style="color:#6eadb8; font-size: 30px;"><b>4</b></h1></div>
								<div class="align-self-center"><p style="position: relative; left: 2px; bottom: 10px; font-size: 15px;">Ago</p></div>
							</div>
			
							<div class="flex-fill p-1">
								<div class="align-self-start p-1"><b>Nebula</b></div>
								<div class="align-self-center p-1"><b>Dog, 60 lbs</b></div>
								<div class="align-self-center p-1"><b>Orlando, FL</b></div>
							</div>
					</div>
	
					<div class="d-flex align-items-center col-md-6 p-2 mb-2" id="appointments">
							<div class="flex-fill p-1">
								<img src="../img/vets1.jpg" class="img-fluid petsmain">
							</div>
							<div class="p-2 flex-fill offset-md-1">
								<div class="align-self-start"><h1 style="color:#6eadb8; font-size: 30px;"><b>4</b></h1></div>
								<div class="align-self-center"><p style="position: relative; left: 2px; bottom: 10px; font-size: 15px;">Ago</p></div>
							</div>
			
							<div class="flex-fill p-1">
								<div class="align-self-start p-1"><b>Dr Arlindo Ochoa</b></div>
								<div class="align-self-center p-1"><b>General</b></div>
								<div class="align-self-center p-1"><b>Orlando, FL</b></div>
							</div>
					</div>
		</div>
	</div>




  <div class="container col-md-6 p-2"> 
	  <p class="firstcolor text-break"> Your Vet is experiencing some unexpected emergencies. Are you available for the new appointment time?</p>
  </div>


<!-- DAY APPOINTMENT -->
<!-- DAY APPOINTMENT -->
<!-- DAY APPOINTMENT -->

<!-- HOURS APPOINTMENT -->
<!-- HOURS APPOINTMENT -->
<!-- HOURS APPOINTMENT -->


<div class="container col-md-6">
	<div class="row justify-content-between">
				<div class="d-flex align-items-center col-md-5" id="appointments">
						<div class="flex-fill text-center">
							<div class="align-self-start"><h1 style="color:#6eadb8; font-size: 50px;"><b>10</b></h1></div>
							<div class="align-self-center"><p style="position: relative; right: 2px; bottom: 10px; font-size: 20px;">Oct</p></div>
						</div>
						<div class="flex-fill">
							<div class="align-self-start"><h3><b>9:00 AM</b></h3></div>
						</div>
				</div>
				
				<div class="d-flex align-items-center col-md-6" id="appointments">
					<div class="flex-fill text-center">
						<div class="align-self-start"><h1 style="color:#6eadb8; font-size: 50px;"><b>10</b></h1></div>
						<div class="align-self-center"><p style="position: relative; right: 2px; bottom: 10px; font-size: 20px;">Oct</p></div>
					</div>
					<div class="flex-fill">
						<div class="align-self-start"><h3><b>12:00 PM</b></h3></div>
					</div>
				</div>

	</div>
</div>
 
<form method="post">
<div class="container col-md-6">
	<div class="p-2 mb-2 row">
		<button class="btn btn-md" type="submit" id="secondbutton" name="accept">Accept</button>
		<button type="submit" id="firstbutton" class="btn btn-md p-2" name="deny" style="position: relative; left: 4px;">Re-schedule</button>
	</div>
</div>

<div class="row justify-content-center">
	<button name="deny" class="btn btn-md" id="firstbutton">Schedule appointment with new vet</button>
</div>
</form>


</div>
</section>




<?php
if (isset($_POST['accept'])){
echo ('<script>
	iziToast.success({
    title: "OK",
	position: "topCenter",
    message: "Success! Your Appointment has been updated for the new time",
});
</script>');
}
?>


<?php
if (isset($_POST['deny'])){
echo ('<script>
	iziToast.warning({
    title: "OK",
	position: "topCenter",
    message: "Your Appointment has been cancelled",
});
</script>');
}
?>



<script>
if (window.history.replaceState) {
	console.log("probando")
	window.history.replaceState(null, null, window.location.href)
}
</script>






<!-- CALENDAR -->
<script src="../js/calendar.js"></script>

<?php include 'menubottom.php'; ?>
<?php include 'filejs.php'; ?>
</body>
</html>