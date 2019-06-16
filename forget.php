<?php
include ('forgetServer.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Facilities Management System</title>
    <link rel = "shortcut icon" type = "image/png" href = "favicon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>
<section class="form-section">
  <div class="container">
    <div class="row">
    <center><img src="download.png" alt="Avatar" class="avatar"><br><br>
    <center><img src="fm.png" alt="Fm" class="fm">
      <div class="col-md-10 col-md-offset-1"><br>
        <h4>Please enter your email address below and we <br>will send information to change Password</h4><br>
        <form action="forget.php" method="post" id="footer-form" name="footer-form" role="form" enctype="multipart/form-data"> 
        <div class="row">
          <div class>
              <div class>
                <input type="text" name="email" class="form-control"  placeholder="Registered Email" required>
              </div>
            </div>
            <div class>
            <input type="hidden" name="mode" value="CONTINUE" id="mode"> <button type="submit" value="submit" name="forget_user" id="Submit2" class="btn btn-primary btn-solodev">I Forgot</button>
            </div>
          </div>
        </form>
      </div>
</section>
<section class="form-section3">
<div class="clearfix"></div>
      <center><br class="small-text">By clicking "I Forgot" I agree to PETRONAS's <a href="https://www.petronas.com/privacy-policy">Terms of Service.</a>
    </div>
    <center><div class="small-text"><b>Back to </b> <a href="login.php">Log In. </a>
  </div>
  <div class="clearfix"></div>
</section><br>
</body>
</html>

<?php
include ('footer.php');
?>