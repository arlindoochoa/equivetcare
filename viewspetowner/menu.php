<header>
<nav class="navbar bg-body shadow-sm menutop" aria-label="Light offcanvas navbar">
<div class="container d-flex justify-content-between">


<!-- ICON MENU  -->
<!-- ICON MENU  -->
<!-- ICON MENU  -->
    <div class="d-flex p-2">       
        <a class="sidebar-toggler" data-bs-animation="" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarLight" aria-controls="offcanvasNavbarLight" style="cursor: pointer;">
            <svg height="30" viewBox="0 -53 384 384" width="30" fill="#3d809e" xmlns="http://www.w3.org/2000/svg"><path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/></svg>
          </a>
    </div>

<!-- LOGOTIPO -->
<!-- LOGOTIPO -->
<!-- LOGOTIPO -->

    <div class="d-flex p-2">
      <a href="main.php"><img src="../img/equivetcare.png" class="img-fluid" id="logo"></a>
    </div>

<!-- NOTIFICATION -->
<!-- NOTIFICATION -->
<!-- NOTIFICATION -->

    <div class="d-flex p-2">
      <ul class="notification-drop">
        <li class="item">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#3d809e" class="bi bi4-bell" viewBox="0 0 16 16">
            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
          </svg> 
          <span class="btn__badge pulse-button ">2</span>     
          <ul>
            <li><img src="../img/notification1.svg" alt="" style="width: 20px;"> The request has been approved and your appointment has been scheduled!</li>
            <li><img src="../img/notification2.svg" alt="" style="width: 20px;"> The request has been approved and your appointment has been scheduled!</li>
            <li><img src="../img/notification3.svg" alt="" style="width: 20px;"> We're sorry, the veterinarian cannot make this appointment! Please reschedule your appointment</li>
          </ul>
        </li>
      </ul>
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
              <div class="offcanvas-title" id="offcanvasNavbarLightLabel"><a href="main.php"><img src="../img/equivetcare.png" class="img-fluid" id="logo"></a></div>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="main.php">Home</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="account.php">Account</a>
                </li>

                  <li class="nav-item">
                  <a class="nav-link" href="account.php">My pets</a>
                </li>


                <li class="nav-item">
                  <a class="nav-link" href="virtualexam1.php">Virtual Exam</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="virtualexam1.php">New Appointment</a>
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


