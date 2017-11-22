<?php
//starting session
session_start();
//confirming if user is logged in
if(!isset($_SESSION['email'])){
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <title>Dashboard</title>
</head>
<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col">
        <div class="well">
          <div class="jumbotron">
            <h2>Dashboard</h2>
            <p>Welcome <?php echo $_SESSION['name']; ?> 
              <br><b>Email:</b> <small><?php echo $_SESSION['email']; ?></small>
            </p>
            <p><a href="logout.php" class="btn btn-danger">Logout</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>