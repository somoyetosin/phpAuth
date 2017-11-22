<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
  <title>Account Login</title>
  <script type="text/javascript">
    function validateLogin(thisform) {
      //accepting input from the form
      var email = thisform.email.value;
      var password = thisform.password.value;

      //validating email
      if(email == ""){
        alert("Please enter your email");
        thisform.email.focus();
        return false;
      }
      //validating password
      if(password == ""){
        alert("Please enter your password");
        thisform.password.focus();
        return false;
      };
      return false;
    }
  </script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
        <h4>Login</h4>
        <p>Sign in to start your session</p>
        <form action="server/login.php" method="POST" onsubmit="return validateLogin();">
            <div class="form-group">
                <label>Email:<sup>*</sup></label>
                <input type="email" name="email" class="form-control" id="email" autofocus="">
            </div>    
            <div class="form-group">
                <label>Password:<sup>*</sup></label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="form-row">
              <div class="col">
                <input type="submit" class="btn btn-success" value="Login">
              </div>
              <div class="col">
                No account? <a href="register.php" class="btn btn-light">Register</a>
              </div>
          </div>
        </form>
          </div>
        </div>
      </div>
  </div>    
</body>
</html>
