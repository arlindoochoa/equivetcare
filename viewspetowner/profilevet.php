<!DOCTYPE html>
<html class="h-100">
  <?php include 'head.php'; ?>
  <body class="d-flex flex-column h-100 body1">
    <?php include 'menu.php'; ?>

    <section class="col-md-12 container p-2">
      <div class="container col-md-6">
        <div class="col-md-6 p-2">
          <a
            href="veterinarians.php"
            style="text-decoration: none; color: #000000"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              xmlns:svgjs="http://svgjs.com/svgjs"
              version="1.1"
              width="30"
              height="30"
              x="0"
              y="0"
              viewBox="0 0 24 24"
              style="enable-background: new 0 0 512 512"
              xml:space="preserve"
              class=""
            >
              <g>
                <path
                  xmlns="http://www.w3.org/2000/svg"
                  d="m22 11h-17.586l5.293-5.293a1 1 0 1 0 -1.414-1.414l-7 7a1 1 0 0 0 0 1.414l7 7a1 1 0 0 0 1.414-1.414l-5.293-5.293h17.586a1 1 0 0 0 0-2z"
                  fill="#3d809e"
                  data-original="#000000"
                  class=""
                />
              </g>
            </svg>
          </a>
        </div>

        <!-- BUTTON SCHEDULE APPOINTMENT AND MESSAGE -->
        <!-- BUTTON SCHEDULE APPOINTMENT AND MESSAGE -->
        <!-- BUTTON SCHEDULE APPOINTMENT AND MESSAGE -->

        <div class="p-3 mb-3 row">
          <a href="#" id="firstbutton" class="btn btn-md p-2"
            ><img src="../img/chat-left-text.svg" alt="" width="20" />
            Message</a>
          <a href="scheduleappointment.php" id="secondbutton" class="btn btn-md p-2" style="position: relative; left: 5px">
          <img src="../img/calendar-minus.svg" alt="" width="20" /> Schedule
            Appointment
          </a>
        </div>

        <!-- PROFILE VETS -->
        <!-- PROFILE VETS -->
        <!-- PROFILE VETS -->

        <div class="container mb-3 p-1" id="profilevetborder">
          <div class="profilecontent">
            <div class="d-flex justify-content-center">
              <img src="../img/vets1.jpg" class="img-fluid profilevets" />
            </div>

            <div class="d-flex justify-content-center">
              <h5><b>Dr Arlindo Ochoa </b></h5>
            </div>

                  
            <div class="d-flex justify-content-center">
                    <p id="labelvcprprofile" class="text-center">VCPR - D&P</p>
                  </div>


            <div class="d-flex justify-content-center p-1">
              <div class="breadcrumb">
                <p class="firstcolor labelspeciality p-1">General</p>
                <p class="firstcolor labelspeciality p-1">General Equine</p>
                <p class="firstcolor labelspeciality p-1">General</p>
              </div>
            </div>

            <div class="d-flex justify-content-center">
              <div class="breadcrumb">
                <span class="badge text-bg-light">10min: $10</span>
                <span class="badge text-bg-light">10min: $10</span>
              </div>
            </div>

            <div class="d-flex justify-content-start p-2">
              <h5><b>Bio </b></h5>
            </div>

            <div class="d-flex justify-content-start p-2">
              <p style="text-align: justify">
                Dr. Amanda Sara is a general equire vet with specializations in
                animale health. She has been practicing veterinary medicine for
                14 years, fueled by passion to help animals. Internal medicine
                specialy includes cardiology, neurology and oncology.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include 'menubottom.php'; ?>
    <?php include 'filejs.php'; ?>
  </body>
</html>
