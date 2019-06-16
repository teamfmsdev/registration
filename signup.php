<?php include ('signupServer.php'); ?>

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
    <script type="text/javascript" src="retrieveUsername.jsx"></script>
</head>
<body>
<section class="form-section">
  <div class="container">
    <div class="row">
    <center><img src="download.png" alt="Avatar" class="avatar"><br><br>
    <center><img src="fm.png" alt="Fm" class="fm">
      <div class="col-md-10 col-md-offset-1">
        <h3>Sign up for Today!</h3>
        <form action="signup.php" method="post" id="footer-form">
          <?php include('errors.php'); ?>
          <div class="row">
          <div class>
              <div class>
                <input id="field_source" type="email" name="email" class="form-control"  placeholder="Email" value="<?php echo $email; ?>" required>
              </div>
            </div>
          <div class>
              <div class>
                <input id="field_source2" type="text" name="username" class="form-control"  placeholder="Username" value="<?php echo $username; ?>" required>
              </div>
            </div>
            <div class>
              <div class>
                <input type="password" class="form-control" name="password_1" placeholder="Password" required>
              </div>
            </div>
            <div class>
              <div class>
                <input type="password" class="form-control" name="password_2"  placeholder="Confirm Password" required>
              </div>
            </div>
            <div class>
            <input type="hidden" name="mode" value="saveVisitor" id="mode"> <button type="submit" name="reg_user" id="Submit2" class="btn btn-primary btn-solodev">Get Started</button>
            </div>
          </div>
        </form>
      </div>
</section>
<section class="form-section3">
      <div class="clearfix"></div>
      <center><br class="small-text">By clicking "Get Started" I agree to PETRONAS's <a href="https://www.petronas.com/privacy-policy">Terms of Service.</a>
      <center><div class="small-text"><b>Already a registered user?</b> <a href="login.php">Log In. </a>
    </div>
  </div>
  <div class="clearfix"></div>
</section><br>
</body>
</html>

<?php
include ('footer.php');
?>