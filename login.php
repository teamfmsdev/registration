<?php include ('loginServer.php'); ?>

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
      
        <form action="login.php" method="post" id="footer-form">
        <?php include('errors.php'); ?>
          <div class="row">
            <div class>
              <div class>
                 <input style="width: 490px" type="text" name="username" class="form-control"  placeholder="Enter Username"  value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" class="input-field" required>
              </div>
            </div>
            <div class>
              <div class>
                <input style="margin-bottom:0px;width: 490px" type="password" name="password" class="form-control"  placeholder="Enter Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" class="input-field" required>
              </div>
            </div>
</section>
            <section class="form-section4">
            <center><div class="clearfix"></div>
              <label>
                <input type="checkbox" name="remember" style= "margin-top: 0px; width: 15px"/> Remember me
              </label> 
            </div>
            </section>

            <section class="form-section">
            <div class>
              <div class>
            <center><input type="hidden" name="mode" value="saveVisitor" id="mode"> <button style="width: 490px" type="submit" name="login_user" id="Submit2" class="btn btn-primary btn-solodev">Login</button>
            </div>
          </div>
        </form>
      </div>
      </section>
      <section class="form-section3">  
    <div class="clearfix"></div>
      <center><class="small-text">By clicking "Login" I agree to PETRONAS's <a href="https://www.petronas.com/privacy-policy">Terms of Service.</a>
  
  </section><br>

  <section class="form-section2">
  <div class="container2" >
  
  <div class="col">
     
<div class="row"><br>
       <center><span class="psw">Forgot your login details? <a href="forget.php">Get help signing in</a></span><br>
     </div><br>

     <div class="hl">
       <span class="hl-innertext">or</span>
     </div>

     <div class="row">
       <div class="hide-md-lg">
         <p>Or</p>
       </div><br><br>

   <center><span class="psw">Don't have an account? <a href="signup.php">Sign Up </a></span><br>
 </div> 
 </div>
</section> 
</body>
</html>

<?php
include ('footer.php');
?>