<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
  <title>Account Registration</title>
  <script type="text/javascript">
    function validateRegister(thisform){
      //accepting input from form
      var name = thisform.fullName.value;
      var email = thisform.email.value;
      var password = thisform.password.value;
      var confirmPassword = thisform.confirmPassword.value;

      //checking name input
      if(name == ""){
        alert("Full Name is required");
        thisform.fullName.focus();
        return false;
      }
      //checking email input
      if(email == ""){
        alert("Email is required");
        thisform.email.focus();
        return false;
      }
      //checking password input
      if(password == ""){
        alert("Password is required");
        thisform.password.focus();
        return false;
      }
      //checking confirm password input
      if(confirmPassword == ""){
        alert("Confirm password is required");
        thisform.confirmPassword.focus();
        return false;
      }
      //checking if password match
      if(password != confirmPassword){
        alert("Password does not match");
        thisform.confirmPassword.focus();
        return false;
      }
      return true;
    }
  </script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
          <h4>Registration</h4>
          <p>Fill in your details</p>
          <form action="server/register.php" method="POST" onsubmit="return validateLogin();">
              <div class="form-group">
                  <label>Name:<sup>*</sup></label>
                  <input type="text" name="fullName" class="form-control" id="fullName" autofocus="">
                  <span class="invalid-feedback"></span>
              </div>
              <div class="form-group">
                  <label>Email:<sup>*</sup></label>
                  <input type="text" name="email" class="form-control" id="email">
              </div>    
              <div class="form-group">
                  <label>Password:<sup>*</sup></label>
                  <input type="password" name="password" class="form-control" id="password">
              </div>
              <div class="form-group">
                  <label>Confirm Password:<sup>*</sup></label>
                  <input type="password" class="form-control" id="confirmPassword">
              </div>
              <div class="form-row">
                <div class="col">
                  <input type="submit" class="btn btn-success" value="Register">
                </div>
                <div class="col">
                  Already Registered? <a href="index.php" class="btn btn-light">Login</a>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>    
</body>
</html>
