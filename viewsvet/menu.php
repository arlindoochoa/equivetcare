<header>
<nav class="navbar bg-body shadow-sm menutop" aria-label="Light offcanvas navbar">
<div class="container d-flex justify-content-between">


<!-- ICON MENU  -->
<!-- ICON MENU  -->
<!-- ICON MENU  -->
    <div class="d-flex p-2">       
        <a class="sidebar-toggler" data-bs-animation="" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarLight" aria-controls="offcanvasNavbarLight" style="cursor: pointer;">
            <svg height="25" viewBox="0 -53 384 384" width="25" fill="#3d809e" xmlns="http://www.w3.org/2000/svg"><path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/></svg>
          </a>
    </div>

<!-- LOGOTIPO -->
<!-- LOGOTIPO -->
<!-- LOGOTIPO -->

    <div class="d-flex p-2">
      <a href="mainvet.php"><img src="../img/equivetcare.png" class="img-fluid" id="logo"></a>
    </div>

<!-- NOTIFICATION -->
<!-- NOTIFICATION -->
<!-- NOTIFICATION -->
<div class="d-flex p-2">
    <div class="d-flex">
          <ul class="notification-drop">
            <li class="item">
                  <img src="../img/notificationicon.svg" alts="" class="img-fluid" width="20" height="20">
              <span class="btn__badge pulse-button ">2</span>     
              <ul>
              <a href="appointmentrequest.php"><li><img src="../img/iconinfo.svg" alt="" style="width: 20px;"> Your appointment with Arlindo Ochoa must be approved or denied.</li></a>
                <li><img src="../img/notification1.svg" alt="" style="width: 20px;"> The request has been approved and your appointment has been scheduled!</li>
                <li><img src="../img/notification2.svg" alt="" style="width: 20px;"> The request has been approved and your appointment has been scheduled!</li>
                <li><img src="../img/notification3.svg" alt="" style="width: 20px;"> We're sorry, the veterinarian cannot make this appointment! Please reschedule your appointment</li>
              </ul>
            </li>
          </ul>
    </div>

    <div class="d-flex">
          <ul class="notification-drop">
              <li class="item">
                <img src="../img/requesticon.svg" alt="" class="img-fluid" width="20" height="20">
              <span class="btn__badge pulse-button ">2</span>     
              <ul>
              <a href="appointmentrequest.php"><li><img src="../img/iconinfo.svg" alt="" style="width: 20px;"> Your appointment with Arlindo Ochoa must be approved or denied.</li></a>
              <a href="appointmentrequest.php"><li><img src="../img/iconinfo.svg" alt="" style="width: 20px;"> Your appointment with Arlindo Ochoa must be approved or denied.</li></a>
              <a href="appointmentrequest.php"><li><img src="../img/iconinfo.svg" alt="" style="width: 20px;"> Your appointment with Arlindo Ochoa must be approved or denied.</li></a>
              </ul>
            </li>
          </ul>
    </div>
</div>


    <script>
      $(document).ready(function() {
      $(".notification-drop .item").on('click',function() {
        $(this).find('ul').toggle();
      });
    });
    </script> 


<!-- LINKS MENU -->
<!-- LINKS MENU -->
<!-- LINKS MENU -->

<div class="offcanvas offcanvas-start shadow" data-bs-scroll="true" tabindex="-1" id="offcanvasNavbarLight" aria-labelledby="offcanvasNavbarLightLabel">
            <div class="offcanvas-header">
              <div class="offcanvas-title" id="offcanvasNavbarLightLabel"><a href="mainvet.php"><img src="../img/equivetcare.png" class="img-fluid" id="logo"></a></div>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="mainvet.php">Home</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="account.php">Account</a>
                </li>

                  <li class="nav-item">
                  <a class="nav-link" href="account.php">My Patients</a>
                </li>


                <li class="nav-item">
                  <a class="nav-link" href="virtualexam1.php">Virtual Exam</a>
                </li>


                <li class="nav-item">
                  <a class="nav-link" href="../index.php">Sign Off</a>
                </li>
                
              </ul>
            </div>
</div>
          
</div>
</nav>
</header>


