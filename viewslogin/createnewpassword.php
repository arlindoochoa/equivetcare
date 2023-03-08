<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<body class="body">


<!--  FORM FORGOT PASSWORD -->
<!--  FORM FORGOT PASSWORD -->
<!--  FORM FORGOT PASSWORD -->

<div class="container" id="containerlogin">
<div class="container col-md-6">

      <div class="mb-4 text-center">
      <img src="../img/iconresetpassword.svg" class="img-fluid" width="80">
        <h5 class="firstcolor">Create New Password</h5>
      </div>

      <div class="mb-3">
        <p class="colortext">Your new password must be different from previous used password.</p>
      </div>

      <form method="post" action="resetpassword.php">
        <div class="form-floating mb-3">
          <input type="password" name="password" class="form-control password" id="floatingInput" placeholder="Email" required>
          <span style="color:red; font-size:12px;">Enter a password longer than 8 characters</span>
          <label for="floatingInput">Password</label> 
        </div>

        <div class="form-floating mb-3">
          <input type="password" name="confirm_password" class="form-control confirm_password" id="floatingInput" placeholder="Email" required>
          <span style="color:red; font-size:12px;">Please confirm your password</span>
          <label for="floatingInput">Confirm Password</label>
        </div>

        <div class="row d-flex justify-content-center p-2 mb-4">
          <button type="submit" id="firstbutton" class="submit btn btn-md" name="resetpassword"> Reset Password</button>
        </div>
      </form>
</div>
</div>

<script>
var $password = $(".password");
var $confirmPass = $(".confirm_password");

//Check the length of the Password
function checkLength(){
  return $password.val().length > 8;
}

//Check to see if the value for pass and confirmPass are the same
function samePass(){
  return $password.val()===$confirmPass.val();
}

//If checkLength() is > 8 then we'll hide the hint
function PassLength(){
  if(checkLength()){
    $password.next().hide();
  }else{
    $password.next().show();
  }
}

//If samePass returns true, we'll hide the hint
function PassMatch(){
  if(samePass()){
    $confirmPass.next().hide();
  }else{
    $confirmPass.next().show();
  }
}
function canSubmit(){
  return samePass() && checkLength();
}
function enableSubmitButton(){
  $(".submit").prop("disabled",!canSubmit());
}
//Calls the enableSubmitButton() function to disable the button
enableSubmitButton();

$password.keyup(PassLength).keyup(PassMatch).keyup(enableSubmitButton);
$confirmPass.focus(PassMatch).keyup(PassMatch).keyup(enableSubmitButton);


</script>

<?php include '../viewspetowner/filejs.php'; ?>

</body>
</html>