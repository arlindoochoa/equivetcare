<!DOCTYPE html>
<html class="h-100">
<?php include 'head.php'; ?>
<body class="d-flex flex-column h-100 body1">
<?php include 'menu.php'; ?>

<section class="col-md-12 container p-2">
<div class="container">

      <div class="p-2 container col-md-6"> 
          <a href="profilevet.php" style="text-decoration: none;color: #000000;">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m22 11h-17.586l5.293-5.293a1 1 0 1 0 -1.414-1.414l-7 7a1 1 0 0 0 0 1.414l7 7a1 1 0 0 0 1.414-1.414l-5.293-5.293h17.586a1 1 0 0 0 0-2z" fill="#3d809e" data-original="#000000" class=""/></g></svg>
          </a>
      </div>


    <div class="container col-md-6"> 
        <p class="justify-content-start"> Select the day you want your appointment</p>
    </div>


<!-- DAY APPOINTMENT -->
<!-- DAY APPOINTMENT -->
<!-- DAY APPOINTMENT -->

      <section class="ftco-section">
		<div class="container col-md-6">
			<div class="row">
				<div class="col-md-12">
					<div class="elegant-calencar d-md-flex">

					<div class="wrap-header d-flex align-items-center imgvets" style="background-image: url(../img/vets1.jpg);">
						<p id="reset">Today</p>
						<div id="header" class="p-0">
							<div class="head-info">
								<div class="head-month"></div>
								<div class="head-day"></div>
							</div>
						</div>
			      </div>

			      <div class="calendar-wrap">
			      	<div class="w-100 button-wrap">
				      	<div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div>
				      	<div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div>
			      	</div>
			        <table id="calendar">
		            <thead>
		                <tr>
	                    <th>Sun</th>
	                    <th>Mon</th>
	                    <th>Tue</th>
	                    <th>Wed</th>
	                    <th>Thu</th>
	                    <th>Fri</th>
	                    <th>Sat</th>
		                </tr>
		            </thead>
		            <tbody>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
		            </tbody>
			        </table>
			      </div>                                              
			      
			    </div>
				</div>
			</div>
		</div>
	</section>


<!-- HOURS APPOINTMENT -->
<!-- HOURS APPOINTMENT -->
<!-- HOURS APPOINTMENT -->

    <div class="container col-md-4 justify-content-between">
                <div class="row p-2">
                    <a href="scheduleappointment2.php" class="btn btn-sm mb-1" id="secondbutton">10:00 AM</a>
                    <a href="scheduleappointment2.php" class="btn btn-sm mb-1" id="secondbutton"  style="position: relative; left: 2px;">11:00 AM</a>
                </div>
                <div class="row p-2">
                    <a href="scheduleappointment2.php" class="btn btn-sm mb-1" id="secondbutton">12:00 PM</a>
                    <a href="scheduleappointment2.php" class="btn btn-sm mb-1" id="secondbutton"  style="position: relative; left: 2px;">1:00 PM</a>
                </div>

                <div class="row p-2">
                    <a href="scheduleappointment2.php" class="btn btn-sm mb-1" id="secondbutton">2:00 PM</a>
                    <a href="scheduleappointment2.php" class="btn btn-sm mb-1" id="secondbutton"  style="position: relative; left: 2px;">3:00 PM</a>
                </div>

                <div class="row p-2">
                    <a href="scheduleappointment2.php" class="btn btn-sm mb-1" id="secondbutton">4:00 PM</a>
                    <a href="scheduleappointment2.php" class="btn btn-sm mb-1" id="secondbutton"  style="position: relative; left: 2px;">5:00 PM</a>
                </div>

    </div>
    


	<div class="text-center p-2 mb-2">
        <div class="container col-md-6">
            <a href="scheduleappointment2.php" class="btn btn-md" id="firstbutton">Submit</a>
        </div>
    </div>


</div>
</section>


<!-- CALENDAR -->
<script src="../js/calendar.js"></script>

<?php include 'menubottom.php'; ?>
<?php include 'filejs.php'; ?>
</body>
</html>