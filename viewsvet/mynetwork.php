<!DOCTYPE html>
<html class="h-100">



<?php include 'head.php'; ?>
<body class="d-flex flex-column h-100">
<?php include 'menu.php'; ?>



    <section class="col-md-12 container p-2">
      <div class="container">
        
        <div class="container p-2"> 
            <a href="mainvet.php" style="text-decoration: none;color: #000000;">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m22 11h-17.586l5.293-5.293a1 1 0 1 0 -1.414-1.414l-7 7a1 1 0 0 0 0 1.414l7 7a1 1 0 0 0 1.414-1.414l-5.293-5.293h17.586a1 1 0 0 0 0-2z" fill="#3d809e" data-original="#000000" class=""/></g></svg>
            </a>
        </div>

          <div class="container p-2">
              <h5 class="heading-section mb-3 firstcolor">My Network</h5>    
          </div>


<!-- SEARCH NETWORK -->
<!-- SEARCH NETWORK -->
<!-- SEARCH NETWORK -->


          <div class="container">
            <form class="d-flex">
              <input type="text" class="form-control input" placeholder="" id="floatingInput">
              <button class="btn btn-md" id="firstbutton" type="submit">Search <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg>
            </button>
            </form>
        </div>

      </div>
    </section>


<!-- NETWORK -->
<!-- NETWORK -->
<!-- NETWORK -->


<section class="container">
  <div class="container">

            <div class="col-md-12">
              <section id="veterinarian-media" class="splide d-flex align-items-center justify-content-center" aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide">
                      <a href="profilevet.php"><img src="../img/vets1.jpg" class="img-fluid profilevet"></a>
                    </li>
                    <li class="splide__slide">
                      <a href="profilevet.php"><img src="../img/vets2.jpg" class="img-fluid profilevet"></a>
                    </li>
                    <li class="splide__slide">
                      <a href="profilevet.php"><img src="../img/vets3.jpg" class="img-fluid profilevet"></a>
                    </li>
                  </ul>
                </div>
              </section>
          </div> 
  </div>    
  </section>


<?php include 'menubottomvet.php'; ?>
<?php include 'filejs.php'; ?>

</body>
</html>