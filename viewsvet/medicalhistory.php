<!DOCTYPE html>
<html class="h-100">
<?php include 'head.php'; ?>
<body class="d-flex flex-column h-100 body1">
<?php include 'menu.php'; ?>


<section class="ftco-section col-md-12 container p-2 mb-3">
<div class="container">

<!-- MEDICAL HISTORY  -->
<!-- MEDICAL HISTORY  -->
<!-- MEDICAL HISTORY  -->

        <div class="row d-flex align-items-center p-2 mb-2" style="width: 100%; position: relative; left: 6px;">
          <div class="container d-flex justify-content-between">
            <div class="d-flex p-2 ">
                <a href="profile.php" style="text-decoration: none;color: #000000;">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m22 11h-17.586l5.293-5.293a1 1 0 1 0 -1.414-1.414l-7 7a1 1 0 0 0 0 1.414l7 7a1 1 0 0 0 1.414-1.414l-5.293-5.293h17.586a1 1 0 0 0 0-2z" fill="#3277b5" data-original="#000000" class=""/></g></svg>
                </a>
            </div>

             <div class="d-flex p-2 ">
                <h4 class="firstcolor"> Medical History</h4>
             </div>

              <div class="d-flex p-2 ">
                <a href="" data-bs-toggle="modal" data-bs-target="#filters" data-bs-whatever="@mdo" style="text-decoration: none; color:#3277b5 ;"><img src="../img/edit.png" width="40"></a>
              </div>     
          </div>
        </div>


<!-- BUTTOM UPLOAD MEDICAL DOCUMENT -->
<!-- BUTTOM UPLOAD MEDICAL DOCUMENT -->
<!-- BUTTOM UPLOAD MEDICAL DOCUMENT -->


        <div class="row container d-flex justify-content-between" style="width: 100%; position: relative; left: 6px;">
                    <div class="d-flex p-2 col-md-6">
                            <a style="width: 100%;" href="" class="btn btn-md" id="firstbutton" data-bs-toggle="modal" data-bs-target="#uploadmedicaldocument" data-bs-whatever="@mdo">
                                <svg id="svg1787" width="30" height="30" viewBox="0 0 8.4666664 8.4666664" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg"><g id="layer1" transform="translate(0 -288.533)"><path id="rect3327" d="m5.4652994 289.74852c-.9101095-.0182-1.8488347.50299-2.1063315 1.67897-1.0480283-.35772-1.9943034.34781-1.8960081 1.47433-.54834732.22165-.93379314.75735-.93379314 1.38699 0 .82909.66745764 1.49655 1.49654944 1.49655h1.817977c-.0005028-.50386-.00156-1.51484-.00156-1.70635l-.4263305.15451c-.309286.13329-.5377246-.25618-.2728516-.49868l.8066691-.78393c.1842447-.18424.4043073-.16311.567418 0l.8066691.78393c.264873.2425.03644.63197-.2728516.49868l-.4263316-.15451v1.70635h1.8164264c.8290917 0 1.4965495-.66746 1.4965495-1.49655 0-.61022-.3622006-1.13186-.883667-1.36529 1.010422-1.96983-.2583736-3.14844-1.5885335-3.175z" fill="#75b5ff"/><path id="path4201" d="m5.4652994 289.74826c-.050696-.001-.1063442.00075-.1570963.003-1.1624136 1.83195.6340498 3.1719 1.7456298 3.1719 1.010422-1.96984-.2583736-3.14844-1.5885335-3.175z" fill="#488bff"/></g></svg>
                                Upload Medical Document
                          </a>
                    </div>

                    <div class="d-flex p-2 col-md-6">
                            <a style="width: 100%;" href="" class="btn btn-md" id="firstbutton" data-bs-toggle="modal" data-bs-target="#formedical" data-bs-whatever="@mdo">
                                <svg height="30" viewBox="-64 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg"><path d="m384 64v416c0 17.679688-14.320312 32-32 32h-320c-17.679688 0-32-14.320312-32-32v-416c0-17.679688 14.320312-32 32-32h320c17.679688 0 32 14.320312 32 32zm0 0" fill="#cfd8dc"/><path d="m128 160c-35.296875 0-64-28.703125-64-64v-64h256v64c0 35.296875-28.703125 64-64 64zm0 0" fill="#b0bec5"/><path d="m256 128h-128c-17.679688 0-32-14.320312-32-32v-64h48v-32h96v32h48v64c0 17.679688-14.320312 32-32 32zm0 0" fill="#26a69a"/><path d="m176 320h32v-48h48v-32h-48v-48h-32v48h-48v32h48zm0 0" fill="#e64a19"/><g fill="#fff"><path d="m64 368h32v32h-32zm0 0"/><path d="m128 368h192v32h-192zm0 0"/><path d="m64 432h32v32h-32zm0 0"/><path d="m128 432h192v32h-192zm0 0"/><path d="m144 64h32v32h-32zm0 0"/><path d="m208 64h32v32h-32zm0 0"/></g></svg>Enter Medical History +
                          </a>
                    </div>
        </div>



<!-- RESULTS EXAMPLE VIRTUAL -->
<!-- RESULTS EXAMPLE VIRTUAL -->
<!-- RESULTS EXAMPLE VIRTUAL -->

        <div class="row d-flex align-items-center p-3">
              <h4 style="color: #3277b5;">July 2022</h4>
        </div>

       <div class="container text-center p-2 mb-2">
          <div class="row">
              <div class="col align-self-start p-2">
                                    <div class="card work" id="appointments">
                                                <a href="" style="text-decoration:none; color:black;">
                                                <div class="card-body">
                                                <div class="card-title">
                                                    <p class="card-text"><svg height="30" viewBox="-64 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><path d="m384 64v416c0 17.679688-14.320312 32-32 32h-320c-17.679688 0-32-14.320312-32-32v-416c0-17.679688 14.320312-32 32-32h320c17.679688 0 32 14.320312 32 32zm0 0" fill="#cfd8dc"/><path d="m128 160c-35.296875 0-64-28.703125-64-64v-64h256v64c0 35.296875-28.703125 64-64 64zm0 0" fill="#b0bec5"/><p4ath d="m256 128h-128c-17.679688 0-32-14.320312-32-32v-64h48v-32h96v32h48v64c0 17.679688-14.320312 32-32 32zm0 0" fill="#26a69a"/><path d="m176 320h32v-48h48v-32h-48v-48h-32v48h-48v32h48zm0 0" fill="#e64a19"/><g fill="#fff"><path d="m64 368h32v32h-32zm0 0"/><path d="m128 368h192v32h-192zm0 0"/><path d="m64 432h32v32h-32zm0 0"/><path d="m128 432h192v32h-192zm0 0"/><path d="m144 64h32v32h-32zm0 0"/><path d="m208 64h32v32h-32zm0 0"/></g></svg>VE Results</p>
                                                </div>
                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                                </a>
                    </div>
             </div>

              <div class="col align-self-end p-2">
                <div class="card work" id="appointments">
                                                <a href="" style="text-decoration:none; color:black;">
                                                <div class="card-body">
                                                <div class="card-title">
                                                    <p class="card-text"><svg height="30" viewBox="-64 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><path d="m384 64v416c0 17.679688-14.320312 32-32 32h-320c-17.679688 0-32-14.320312-32-32v-416c0-17.679688 14.320312-32 32-32h320c17.679688 0 32 14.320312 32 32zm0 0" fill="#cfd8dc"/><path d="m128 160c-35.296875 0-64-28.703125-64-64v-64h256v64c0 35.296875-28.703125 64-64 64zm0 0" fill="#b0bec5"/><p4ath d="m256 128h-128c-17.679688 0-32-14.320312-32-32v-64h48v-32h96v32h48v64c0 17.679688-14.320312 32-32 32zm0 0" fill="#26a69a"/><path d="m176 320h32v-48h48v-32h-48v-48h-32v48h-48v32h48zm0 0" fill="#e64a19"/><g fill="#fff"><path d="m64 368h32v32h-32zm0 0"/><path d="m128 368h192v32h-192zm0 0"/><path d="m64 432h32v32h-32zm0 0"/><path d="m128 432h192v32h-192zm0 0"/><path d="m144 64h32v32h-32zm0 0"/><path d="m208 64h32v32h-32zm0 0"/></g></svg>VE Results</p>
                                                </div>
                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                                </a>
                    </div>
               </div>  
          </div>
         </div>

<!-- RESULTS EXAMPLE VIRTUAL -->
<!-- RESULTS EXAMPLE VIRTUAL -->
<!-- RESULTS EXAMPLE VIRTUAL -->

        <div class="row d-flex align-items-center p-3">
              <h4 style="color: #3277b5;">Aug 2022</h4>
        </div>

       <div class="container text-center p-2 mb-2">
          <div class="row">
              <div class="col align-self-start p-2">
                                    <div class="card work" id="appointments">
                                                <a href="" style="text-decoration:none; color:black;">
                                                <div class="card-body">
                                                <div class="card-title">
                                                    <p class="card-text"><svg height="30" viewBox="-64 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><path d="m384 64v416c0 17.679688-14.320312 32-32 32h-320c-17.679688 0-32-14.320312-32-32v-416c0-17.679688 14.320312-32 32-32h320c17.679688 0 32 14.320312 32 32zm0 0" fill="#cfd8dc"/><path d="m128 160c-35.296875 0-64-28.703125-64-64v-64h256v64c0 35.296875-28.703125 64-64 64zm0 0" fill="#b0bec5"/><p4ath d="m256 128h-128c-17.679688 0-32-14.320312-32-32v-64h48v-32h96v32h48v64c0 17.679688-14.320312 32-32 32zm0 0" fill="#26a69a"/><path d="m176 320h32v-48h48v-32h-48v-48h-32v48h-48v32h48zm0 0" fill="#e64a19"/><g fill="#fff"><path d="m64 368h32v32h-32zm0 0"/><path d="m128 368h192v32h-192zm0 0"/><path d="m64 432h32v32h-32zm0 0"/><path d="m128 432h192v32h-192zm0 0"/><path d="m144 64h32v32h-32zm0 0"/><path d="m208 64h32v32h-32zm0 0"/></g></svg>VE Results</p>
                                                </div>
                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                                </a>
                    </div>
             </div>

              <div class="col align-self-end p-2">
                <div class="card work" id="appointments">
                                                <a href="" style="text-decoration:none; color:black;">
                                                <div class="card-body">
                                                <div class="card-title">
                                                    <p class="card-text"><svg height="30" viewBox="-64 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><path d="m384 64v416c0 17.679688-14.320312 32-32 32h-320c-17.679688 0-32-14.320312-32-32v-416c0-17.679688 14.320312-32 32-32h320c17.679688 0 32 14.320312 32 32zm0 0" fill="#cfd8dc"/><path d="m128 160c-35.296875 0-64-28.703125-64-64v-64h256v64c0 35.296875-28.703125 64-64 64zm0 0" fill="#b0bec5"/><p4ath d="m256 128h-128c-17.679688 0-32-14.320312-32-32v-64h48v-32h96v32h48v64c0 17.679688-14.320312 32-32 32zm0 0" fill="#26a69a"/><path d="m176 320h32v-48h48v-32h-48v-48h-32v48h-48v32h48zm0 0" fill="#e64a19"/><g fill="#fff"><path d="m64 368h32v32h-32zm0 0"/><path d="m128 368h192v32h-192zm0 0"/><path d="m64 432h32v32h-32zm0 0"/><path d="m128 432h192v32h-192zm0 0"/><path d="m144 64h32v32h-32zm0 0"/><path d="m208 64h32v32h-32zm0 0"/></g></svg>VE Results</p>
                                                </div>
                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                                </a>
                    </div>
               </div>  
          </div>
         </div>

</div>
</section>


<!-- MODAL FORM MEDICAL HISTORY -->
<!-- MODAL FORM MEDICAL HISTORY -->
<!-- MODAL FORM MEDICAL HISTORY -->

<div class="modal fade" id="formedical" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <img src="../img/equivetcare.png" class="img-responsive" id="logo"><br><br> Medical History Form</h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>


          <label class="form-label">Has your pet been previously diagnosed or treated for a serious or long-term condition or illness?</label>
          <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option selected>Select</option>
              <option value="1">NO</option>
              <option value="2">SI</option>
            </select>
            <label for="floatingSelect">Select</label>
          </div>



          <label class="form-label">Is your pet currently on any medications or supplements, or been prescribed any medications or supplements?</label>
          <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option selected>Select</option>
              <option value="1">NO</option>
              <option value="2">SI</option>
            </select>
            <label for="floatingSelect">Select</label>
          </div>  



          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingSelect" style="height: 100px"></textarea>
            <label for="floatingSelect">Please describe your pet's diet</label>
          </div>


           <div class="mb-3">
              <div class="p-1">
                <input class="form-check-input" type="checkbox" role="switch" id="diet1" value="">
                <label class="form-check-label" for="diet1"> recent change in diet</label>
              </div>
              <div class="p-1">
                <input class="form-check-input" type="checkbox" role="switch" id="diet2" value="">
                <label class="form-check-label" for="diet2"> recent change in diet</label>
              </div>
              <div class="p-1">
                <input class="form-check-input" type="checkbox" role="switch" id="diet3" value="">
                <label class="form-check-label" for="diet3"> recent change in diet</label>
              </div>
              <div class="p-1">
                <input class="form-check-input" type="checkbox" role="switch" id="diet4" value="">
                <label class="form-check-label" for="diet4"> recent change in diet</label>
              </div>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-md col-md-12" id="firstbutton" style="width: 100%;">Register Medical History</button>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>

<!-- FILTERS -->
<!-- FILTERS -->
<!-- FILTERS -->

<div class="modal fade" id="filters" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <img src="../img/equivetcare.png" class="img-responsive" id="logo"><br> search results by a date range</h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>

                            <div class="container col-md-6 p-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="depart" placeholder="DD MMM YYYY" id="input-start">
                                </div>
                            </div>

                            <div class="container col-md-6 p-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="return" placeholder="DD MMM YYYY" id="input-end">
                                </div>
                            </div>

          <div class="modal-footer justify-content-center">
            <button type="submit" class="btn btn-md col-md-12" id="firstbutton">Search</button>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>




<!-- MODAL UPLOAD MEDICAL DOCUMENT -->
<!-- MODAL UPLOAD MEDICAL DOCUMENT -->
<!-- MODAL UPLOAD MEDICAL DOCUMENT -->

<div class="modal fade" id="uploadmedicaldocument" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <img src="../img/equivetcare.png" class="img-responsive" id="logo"><br> Upload Medical Document</h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>

                    <div class="container col-md-12 p-2">
                      <div class="form-group" x-data="{ fileName: '' }">
                        <div class="input-group">
                          <span class="input-group-text px-3 text-muted">
                            <svg id="svg1787" width="30" height="30" viewBox="0 0 8.4666664 8.4666664" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg"><g id="layer1" transform="translate(0 -288.533)"><path id="rect3327" d="m5.4652994 289.74852c-.9101095-.0182-1.8488347.50299-2.1063315 1.67897-1.0480283-.35772-1.9943034.34781-1.8960081 1.47433-.54834732.22165-.93379314.75735-.93379314 1.38699 0 .82909.66745764 1.49655 1.49654944 1.49655h1.817977c-.0005028-.50386-.00156-1.51484-.00156-1.70635l-.4263305.15451c-.309286.13329-.5377246-.25618-.2728516-.49868l.8066691-.78393c.1842447-.18424.4043073-.16311.567418 0l.8066691.78393c.264873.2425.03644.63197-.2728516.49868l-.4263316-.15451v1.70635h1.8164264c.8290917 0 1.4965495-.66746 1.4965495-1.49655 0-.61022-.3622006-1.13186-.883667-1.36529 1.010422-1.96983-.2583736-3.14844-1.5885335-3.175z" fill="#75b5ff"/><path id="path4201" d="m5.4652994 289.74826c-.050696-.001-.1063442.00075-.1570963.003-1.1624136 1.83195.6340498 3.1719 1.7456298 3.1719 1.010422-1.96984-.2583736-3.14844-1.5885335-3.175z" fill="#488bff"/></g></svg>
                        </span>
                          <input type="file" x-ref="file" @change="fileName = $refs.file.files[0].name" name="img[]" class="d-none">
                          <input type="text" class="form-control form-control-md" placeholder="Upload Medical Document" x-model="fileName">
                          <button class="browse btn px-4" type="button" x-on:click.prevent="$refs.file.click()" id="buttonupload"><i class="fas fa-image"></i> Browse</button>
                        </div>
                      </div>
                    </div> 

          <div class="modal-footer justify-content-center">
            <button type="submit" class="btn btn-md col-md-12" id="firstbutton">Submit</button>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>



<?php include 'menubottomvet.php'; ?>
<?php include 'filejs.php'; ?>
</body>
</html>