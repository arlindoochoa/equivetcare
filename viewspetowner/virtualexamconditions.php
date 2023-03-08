<!DOCTYPE html>
<html class="h-100">



<?php include 'head.php'; ?>


<body class="d-flex flex-column h-100 body1">



    <?php include 'menu.php'; ?>

    <section class="col-md-12 container p-2">
        <div class="container">



            <div class="p-2 container col-md-6">
                <a href="virtualexam3.php" style="text-decoration: none;color: #000000;">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0"
                        viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path xmlns="http://www.w3.org/2000/svg"
                                d="m22 11h-17.586l5.293-5.293a1 1 0 1 0 -1.414-1.414l-7 7a1 1 0 0 0 0 1.414l7 7a1 1 0 0 0 1.414-1.414l-5.293-5.293h17.586a1 1 0 0 0 0-2z"
                                fill="#3d809e" data-original="#000000" class="" />
                        </g>
                    </svg>
                </a>
            </div>


            <div class="container col-md-6">
                <p class="justify-content-start">Please select the conditions that you have previously presented with</p>
            </div>



            <div class="container col-md-6">
                <div class="ailment p-2 mb-1">

                            <br>

                            <div class="col-md-6">
                                <h4 class="justify-content-start heading-section mb-3 pb-md-2 firstcolor">Ailment</h4>
                            </div>

                        <ul>
                            <li class="mb-2">
                                <div class="d-flex justify-content-between">
                                    <label class="" style="position: relative;top: 8px; font-size: 15px;">Conditions</label>
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="d-flex justify-content-between">
                                    <label class="" style="position: relative;top: 8px; font-size: 15px;">Conditions</label>
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="d-flex justify-content-between">
                                    <label class="" style="position: relative;top: 8px; font-size: 15px;">Conditions</label>
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="d-flex justify-content-between">
                                    <label class="" style="position: relative;top: 8px; font-size: 15px;">Conditions</label>
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </li>
                        </ul>
                </div>
            </div>



            <div class="row d-flex justify-content-center p-3 mb-3">
                <a href="virtualexam4.php" class="btn btn-md" id="firstbutton">Submit</a>
            </div>



        </div>
    </section>


    <?php include 'menubottom.php'; ?>
    <?php include 'filejs.php'; ?>



</body>

</html>