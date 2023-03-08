<!DOCTYPE html>
<html class="h-100">
<?php include 'head.php'; ?>
<body class="d-flex flex-column h-100 body1">
<?php include 'menu.php'; ?>

<section class="ftco-section col-md-12 container p-2">
<div class="container">


<!-- BANNER AND PROFILE IMG -->
<!-- BANNER AND PROFILE IMG -->
<!-- BANNER AND PROFILE IMG -->

          <div class="mx-auto d-block">
                              <img src="../img/bannerprofile.jpg" class="img-fluid shadow" id="bannerprofile">
                              <div class="avatar-upload align-items-center" id="profilepetimg">
                                  <div class="avatar-edit">
                                      <input type="file" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                      <label for="imageUpload"></label>
                                  </div>
                                  <div class="avatar-preview">
                                      <div id="imagePreview" style="background-image: url(../img/imgpetprofile.png);">
                                      </div>
                                  </div>
                              </div>
          </div>

<!-- NAME PET -->
<!-- NAME PET -->
<!-- NAME PET -->

            <div class="d-flex align-items-center" style="position: relative; bottom: 130px;">
                  <h3 class="mx-auto d-block firstcolor"><b>Nebula</b></h3>
            </div>

            <div class="d-flex align-items-center" style="position: relative; bottom: 130px;">
              <p id="labelvcprprofile" class="mx-auto d-block">VCPR - D&P</p>
            </div>





<!-- BASIC INFO PET -->
<!-- BASIC INFO PET -->
<!-- BASIC INFO PET -->


<div class="d-flex justify-content-center firstcolor" style="position: relative; bottom: 130px;">
    <div class="p-1">5 Years</div><h2>|</h2>
    <div class="p-1">Female</div><h2>|</h2>
    <div class="p-1">Pitbull</div>
    <div class="p-1">        
      <a href="" data-bs-toggle="modal" data-bs-target="#petinfo" data-bs-whatever="@mdo" style="text-decoration: none;">
        <img src="../img/iconinfo.svg" alt="" width="30">
      </a></div>
</div>






<!-- BUTTOM MEDICAL HISTORY -->
<!-- BUTTOM MEDICAL HISTORY -->
<!-- BUTTOM MEDICAL HISTORY -->

<div style="position: relative; bottom: 100px;">


              <div class="d-flex align-items-center mb-3">
                      <a href="medicalhistory.php" class="btn btn-md" id="firstbutton" style="width: 100%;">
                        <span><svg height="40" viewBox="-64 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg"><path d="m384 64v416c0 17.679688-14.320312 32-32 32h-320c-17.679688 0-32-14.320312-32-32v-416c0-17.679688 14.320312-32 32-32h320c17.679688 0 32 14.320312 32 32zm0 0" fill="#cfd8dc"/><path d="m128 160c-35.296875 0-64-28.703125-64-64v-64h256v64c0 35.296875-28.703125 64-64 64zm0 0" fill="#b0bec5"/><path d="m256 128h-128c-17.679688 0-32-14.320312-32-32v-64h48v-32h96v32h48v64c0 17.679688-14.320312 32-32 32zm0 0" fill="#26a69a"/><path d="m176 320h32v-48h48v-32h-48v-48h-32v48h-48v32h48zm0 0" fill="#e64a19"/><g fill="#fff"><path d="m64 368h32v32h-32zm0 0"/><path d="m128 368h192v32h-192zm0 0"/><path d="m64 432h32v32h-32zm0 0"/><path d="m128 432h192v32h-192zm0 0"/><path d="m144 64h32v32h-32zm0 0"/><path d="m208 64h32v32h-32zm0 0"/></g></svg> Medical History</span>
                      </a>
              </div>

<!-- SLIDER MEDICAL HISTORY -->
<!-- SLIDER MEDICAL HISTORY -->
<!-- SLIDER MEDICAL HISTORY -->

              <div class="col-md-12 mb-3 p-3">
                <section id="medical-history" class="splide d-flex align-items-center justify-content-center" aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                  <div class="splide__track">
                    <ul class="splide__list">
                      <li class="splide__slide">
                                  <div class="card work" id="appointments">
                                                <a href="virtualexam4.php" style="text-decoration:none; color:black;">
                                                <div class="card-body">
                                                <div class="card-title">
                                                    <p class="card-text"><svg height="30" viewBox="-64 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><path d="m384 64v416c0 17.679688-14.320312 32-32 32h-320c-17.679688 0-32-14.320312-32-32v-416c0-17.679688 14.320312-32 32-32h320c17.679688 0 32 14.320312 32 32zm0 0" fill="#cfd8dc"/><path d="m128 160c-35.296875 0-64-28.703125-64-64v-64h256v64c0 35.296875-28.703125 64-64 64zm0 0" fill="#b0bec5"/><path d="m256 128h-128c-17.679688 0-32-14.320312-32-32v-64h48v-32h96v32h48v64c0 17.679688-14.320312 32-32 32zm0 0" fill="#26a69a"/><path d="m176 320h32v-48h48v-32h-48v-48h-32v48h-48v32h48zm0 0" fill="#e64a19"/><g fill="#fff"><path d="m64 368h32v32h-32zm0 0"/><path d="m128 368h192v32h-192zm0 0"/><path d="m64 432h32v32h-32zm0 0"/><path d="m128 432h192v32h-192zm0 0"/><path d="m144 64h32v32h-32zm0 0"/><path d="m208 64h32v32h-32zm0 0"/></g></svg>VE Results</p>
                                                </div>
                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                                </a>
                                    </div>
                      </li>
                      <li class="splide__slide">
                                      <div class="card work" id="appointments">
                                                <a href="virtualexam4.php" style="text-decoration:none; color:black;">
                                                <div class="card-body">
                                                <div class="card-title">
                                                    <p class="card-text"><svg height="30" viewBox="-64 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><path d="m384 64v416c0 17.679688-14.320312 32-32 32h-320c-17.679688 0-32-14.320312-32-32v-416c0-17.679688 14.320312-32 32-32h320c17.679688 0 32 14.320312 32 32zm0 0" fill="#cfd8dc"/><path d="m128 160c-35.296875 0-64-28.703125-64-64v-64h256v64c0 35.296875-28.703125 64-64 64zm0 0" fill="#b0bec5"/><path d="m256 128h-128c-17.679688 0-32-14.320312-32-32v-64h48v-32h96v32h48v64c0 17.679688-14.320312 32-32 32zm0 0" fill="#26a69a"/><path d="m176 320h32v-48h48v-32h-48v-48h-32v48h-48v32h48zm0 0" fill="#e64a19"/><g fill="#fff"><path d="m64 368h32v32h-32zm0 0"/><path d="m128 368h192v32h-192zm0 0"/><path d="m64 432h32v32h-32zm0 0"/><path d="m128 432h192v32h-192zm0 0"/><path d="m144 64h32v32h-32zm0 0"/><path d="m208 64h32v32h-32zm0 0"/></g></svg>VE Results</p>
                                                </div>
                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                                </a>
                                    </div>
                      </li>
                      <li class="splide__slide">
                                    <div class="card work" id="appointments">
                                                <a href="virtualexam4.php" style="text-decoration:none; color:black;">
                                                <div class="card-body">
                                                <div class="card-title">
                                                    <p class="card-text"><svg height="30" viewBox="-64 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><path d="m384 64v416c0 17.679688-14.320312 32-32 32h-320c-17.679688 0-32-14.320312-32-32v-416c0-17.679688 14.320312-32 32-32h320c17.679688 0 32 14.320312 32 32zm0 0" fill="#cfd8dc"/><path d="m128 160c-35.296875 0-64-28.703125-64-64v-64h256v64c0 35.296875-28.703125 64-64 64zm0 0" fill="#b0bec5"/><path d="m256 128h-128c-17.679688 0-32-14.320312-32-32v-64h48v-32h96v32h48v64c0 17.679688-14.320312 32-32 32zm0 0" fill="#26a69a"/><path d="m176 320h32v-48h48v-32h-48v-48h-32v48h-48v32h48zm0 0" fill="#e64a19"/><g fill="#fff"><path d="m64 368h32v32h-32zm0 0"/><path d="m128 368h192v32h-192zm0 0"/><path d="m64 432h32v32h-32zm0 0"/><path d="m128 432h192v32h-192zm0 0"/><path d="m144 64h32v32h-32zm0 0"/><path d="m208 64h32v32h-32zm0 0"/></g></svg>VE Results</p>
                                                </div>
                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                                </a>
                                    </div>
                      </li>
                    </ul>
                  </div>
                </section>
              </div>           

<!-- BUTTOM MEDICAL MEDIA -->
<!-- BUTTOM MEDICAL MEDIA -->
<!-- BUTTOM MEDICAL MEDIA -->

              <div class="d-flex align-items-center mb-3">
                      <a href="medicalmedia.php" class="btn btn-md btn-lg" id="firstbutton" style="width: 100%;">
                        <svg height="40" viewBox="0 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg"><path d="m488.004 24v276.49l-8 12.594 8 16.976v62.08l-8 11.418 8 9.222v75.22h-192l-16.633-6-15.367 6h-240v-464z" fill="#3775a4"/><path d="m488 300.49-5 13.75 5 15.82v62.08l-6 10.16 6 10.484v43.216l-30.34 18a114.571 114.571 0 0 1 -54.89 14h-106.77l-17.1-5-14.9 5h-16l-17.61-26.42a85.652 85.652 0 0 1 -14.39-47.51v-20.07a76.3 76.3 0 0 0 -8.05-34.1l-7.95-15.9-16-56-24-32-40 16h-28a12 12 0 0 1 0-24h12l48-24v-16h-96v-34.45a16 16 0 0 1 13.37-15.78l34.63-5.77 16-16 48-16-1.98-5.95a51.883 51.883 0 0 1 1.05-35.72l8.93-22.33 64 104 24.61 30.77a176.854 176.854 0 0 0 101.04 62.44l24.58 5.27a118.442 118.442 0 0 0 51.45-.41l46.32-10.69z" fill="#2a597c"/><path d="m256 296-32.723-32.723 16.146-15.854 32.926 32.926-15.663 15.994z" fill="#dbdbdb"/><path d="m256 296 40 32 16-24-40-24z" fill="#ebebeb"/><path d="m488 300.49v29.57c-47.64 8.64-102.77 9.83-150.07 3.53l-41.93-5.59 16-24 5.81.89c53.99 8.31 116.22 6.79 170.19-4.4z" fill="#ebebeb"/><path d="m298.327 272.509a209.25 209.25 0 0 0 -33.039 86.476l-1.288 9.015h24l2.1-5.251a252.569 252.569 0 0 1 37.278-63.973l2.127-2.658a19.112 19.112 0 0 0 3.207-17.98l-.358-1.072a19.108 19.108 0 0 0 -18.127-13.066 19.11 19.11 0 0 0 -15.9 8.509z" fill="#dbdbdb"/><path d="m488 392.14v20.64a87.774 87.774 0 0 1 -64.55 37.02q-9.72.81-19.4.81a230.816 230.816 0 0 1 -111.92-28.92 8 8 0 0 1 7.74-14 216.407 216.407 0 0 0 35.96 15.81 72.386 72.386 0 0 0 5.34-35.41l-2.33-23.28a86.913 86.913 0 0 1 14.12-56.68l16.38-24.57a8 8 0 0 1 13.32 8.88l-16.39 24.57a70.865 70.865 0 0 0 -11.51 46.21l2.33 23.28a88.25 88.25 0 0 1 -5.84 41.53 214.92 214.92 0 0 0 26.42 4.95 72.769 72.769 0 0 0 5.55-43.74l-4.25-23a86.872 86.872 0 0 1 9.36-57.66l14.29-25.85a8 8 0 0 1 14 7.74l-14.28 25.85a70.839 70.839 0 0 0 -7.64 47.01l4.26 23a88.947 88.947 0 0 1 -4.51 48.06 216.873 216.873 0 0 0 27.67-.54c1.37-.11 2.73-.27 4.09-.46a72.819 72.819 0 0 0 .69-45.27l-6.97-22.34a86.823 86.823 0 0 1 2.42-58.36l11.1-27.37a8 8 0 0 1 14.83 6.02l-11.1 27.36a70.877 70.877 0 0 0 -1.98 47.59l6.97 22.33a88.857 88.857 0 0 1 2.02 45.04 71.356 71.356 0 0 0 13.72-7.67 70.427 70.427 0 0 0 8.71-7.37 69.233 69.233 0 0 0 -.57-39.52l-6.76-21.62a83.924 83.924 0 0 1 2.45-56.72l7.58-18.52a8 8 0 0 1 14.81 6.06l-7.58 18.52a67.835 67.835 0 0 0 -1.99 45.88l6.76 21.63a85.469 85.469 0 0 1 3.86 23.06 7.864 7.864 0 0 1 2.82.02z" fill="#dbdbdb"/><g fill="#2f638b"><path d="m232 24h16v40h-16z"/><path d="m120 24h16v48h-16z"/><path d="m280 24h16v24h-16z"/><path d="m328 24h16v40h-16z"/><path d="m376 24h16v24h-16z"/><path d="m432 24h16v40h-16z"/><path d="m192 464h16v23.244h-16z"/><path d="m144 448h16v39.244h-16z"/><path d="m96 464h16v23.244h-16z"/><path d="m24.756 416h23.244v16h-23.244z"/><path d="m24.756 368h39.244v16h-39.244z"/><path d="m24.756 320h23.244v16h-23.244z"/><path d="m24.756 72h23.244v16h-23.244z"/><path d="m72 24h16v24h-16z"/><path d="m336 112h16v16h-16z"/><path d="m368 112h64v16h-64z"/><path d="m336 144h64v16h-64z"/><path d="m416 144h16v16h-16z"/></g><path d="m264 368-16 16 16 24v80h32v-80l8-24-16-16z" fill="#ebebeb"/><path d="m240 248-16 16-32-24-16-32 24.73-18.9 10.53 15.79z" fill="#ebebeb"/><path d="m211.26 204.89a24.993 24.993 0 0 1 -20.78 11.11h-10.48l-4-8 24.73-18.9z" fill="#dadada"/><path d="m189.982 152h-32.727a32 32 0 0 0 -22.628 9.373l-14.627 14.627-35.394 5.056a24 24 0 0 0 -20.606 23.759v3.185h124.481a25 25 0 0 0 24.253-18.936l1.5-6a24.993 24.993 0 0 0 -.536-13.968 25 25 0 0 0 -23.716-17.096z" fill="#ebebeb"/><path d="m92 248h12l48-24v-4a20 20 0 0 1 20-20 20 20 0 0 1 20 20v23l-72 29h-28a12 12 0 0 1 -12-12 12 12 0 0 1 12-12z" fill="#dbdbdb"/></svg>Medical Media
                      </a>
              </div>

<!-- SLIDER MEDICAL MEDIA -->
<!-- SLIDER MEDICAL MEDIA -->
<!-- SLIDER MEDICAL MEDIA -->

              <div class="col-md-12 mb-2 p-2">
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

<!-- VETERINARIAN-->
<!-- VETERINARIAN-->
<!-- VETERINARIAN-->

            <div class="d-flex align-items-center mb-2 p-2">
                  <h5 class="mx-auto d-block firstcolor">Veterinarian</h5>
            </div>

            <div class="col-md-12">
                <section id="veterinarian-media" class="splide d-flex align-items-center justify-content-center" aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                  <div class="splide__track">
                  <ul class="splide__list">
                      <li class="splide__slide">
                      <a href="profilevet.php"><img src="../img/vets1.jpg" class="img-fluid profilevet p-1"></a>
                      </li>
                      <li class="splide__slide">
                      <a href="profilevet.php"><img src="../img/vets2.jpg" class="img-fluid profilevet p-1"></a>
                      </li>
                      <li class="splide__slide">
                      <a href="profilevet.php"><img src="../img/vets3.jpg" class="img-fluid profilevet p-1"></a>
                      </li>
                    </ul>
                  </div>
                </section>
            </div>  
</div>


</div>
</section>




<!-- MODAL BASIC INFO PET -->
<!-- MODAL BASIC INFO PET -->
<!-- MODAL BASIC INFO PET -->

<div class="modal fade" id="petinfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> <img src="../img/equivetcare.png" class="img-responsive" id="logo"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container d-flex justify-content-center p-2">
              <p class="mb-3 firstcolor"><b> Basic Information Pet</b></p>
            </div>

          <div class="d-flex justift-content-center container">
                  <div class="container col-md-12">
                    <div class="d-flex justify-content-center">
                      <div class="p-2">
                          <ul class="list-group list-group-flush">
                            <li class="firstcolor"><b>Name:</b> Ukaria</li>
                            <hr class="opacity-20">
                            <li class="firstcolor"><b>Age:</b> 5 years</li>
                            <hr class="opacity-20">
                            <li class="firstcolor"><b>Species:</b> Horse</li>
                            <hr class="opacity-20">
                            <li class="firstcolor"><b>breed: </b> Pitbull</li>
                            <hr class="opacity-20">
                            <li class="firstcolor"><b>Sex:</b> Female</li>
                            <hr class="opacity-20">
                            <li class="firstcolor"><b>Address: </b> 5910 Bent Pine Dr , Orlando, Fl , 32822</li>
                            <hr class="opacity-20">
                          </ul>
                      </div>
                    </div>
                  </div>
          </div>
        </div>
    </div>
  </div>
</div>
















<script type="text/javascript">
  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
</script>



<?php include 'menubottomvet.php'; ?>
<?php include 'filejs.php'; ?>
</body>
</html>