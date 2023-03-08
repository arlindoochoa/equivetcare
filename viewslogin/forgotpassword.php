<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<body class="body">


<!--  FORM FORGOT PASSWORD -->
<!--  FORM FORGOT PASSWORD -->
<!--  FORM FORGOT PASSWORD -->

<div class="container" id="containerlogin">
<div class="container col-md-6 p-3">
		
      <div class="mb-3">
        <a href="index.php" style="text-decoration: none;color: #000000;">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m22 11h-17.586l5.293-5.293a1 1 0 1 0 -1.414-1.414l-7 7a1 1 0 0 0 0 1.414l7 7a1 1 0 0 0 1.414-1.414l-5.293-5.293h17.586a1 1 0 0 0 0-2z" fill="#3d809e" data-original="#000000" class=""/></g></svg>
        </a>
      </div>

      <div class="mb-4 text-center">
      <img src="../img/iconresetpassword.svg" class="img-fluid" width="80">
        <h5 class="firstcolor">Forgot Password?</h5>
      </div>

      <div class="mb-3">
        <p class="colortext">Enter the email associated with your account and we'll send an email with instructions to reset your password</p>
      </div>

      <form method="post" class="g-3 needs-validation" action="sendpassword.php" novalidate>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="Email" required>
          <div class="invalid-feedback">Please enter your email</div>
          <label for="floatingInput">Email</label>
        </div>

        <div class="row d-flex justify-content-center p-2 mb-4">
          <button type="submit" id="firstbutton" class="btn btn-md" name="resetpassword"> Reset Password</button>
        </div>
      </form>
</div>
</div>

<?php include '../viewspetowner/filejs.php'; ?>

</body>
</html>