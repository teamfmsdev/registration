<?php
include ('loginServer.php');
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
    
<style>
body {font-family: Arial, Helvetica, sans-serif;}
body {background-color: #00A19C;}
form {border: 0px solid #f1f1f1;}

section.form-section {
  background-color: #00A19C;
  padding: 20px 10px;
  
}
section.form-section3 {
  background-color: #00A19C;
  padding: 0px 0px;
  
}
section.form-section2 {
  background-color: #f1f1f1;
  font-size: 16px;
  padding: 0px 0px;
  margin-right: 5%;
  margin-left: 5%;
  border-radius: 100px;
  margin-bottom: 15px;
}
section.form-section h3 {                     /*sign up for today*/
  color: black;
  font-size: 40px;
  text-align: center;
  font-weight: 400;
  margin: 20px 0 35px;
  text-transform: capitalize;
}
section.form-section input {                 
  height: 55px;
  width: 50%;
  color: black;
  margin-bottom: 20px;
  padding-left: 20px;
  margin-right: 20px;
  font-size: 16px;
  background-color: #Fff;
  border-color: #3D3935;
}
section.form-section3 a {                       /*terms of service*/
  color: #fff;
  text-decoration: underline;
}
.form-section .selectResponse {
  display: inline-block;
  width: 100%;
  min-width: 100%;
  vertical-align: middle;
  margin: 0;
}
.selectResponse {
  margin-top: 4px;
  display: inline-block;
  min-width: 350px;
  vertical-align: middle;
  font-family: "proxima-nova", sans-serif;
  font-weight: 600;
}
.selectize-control.single .selectize-input, .selectize-control.single .selectize-input input {
  cursor: pointer;
}
section.form-section .selectize-input {
  color: #fff;
  margin-bottom: 20px;
}
section.form-section .selectize-input {
  padding-left: 20px;
}
section.video-section .video-form input, 
section.video-section .video-form .selectize-input, 
section.form-section .selectize-input {
  width: 100% !important;
  height: 55px !important;
  padding: 0 0 0 20px;
  border-radius: 0;
  font-size: 15px;
  line-height: 54px;
  text-align: left;
  color: #a1a1a1;
  background-color: #125971;
  border-color: #00bdff;
}
.form-section .selectize-input, 
.form-section .selectize-control.single .selectize-input.input-active {
  background: #073444;
  border-color: rgb(0, 189, 255);
}
section.form-section #Submit2 {
  font-size: 20px;
  text-transform: none;
  background-color: #615E9B;
  color: #fff;
  border: none;
  width: 50%;
  height: 55px;
  margin-right: 20px;
}
ol, 
ul {
  margin-top: 0;
  margin-bottom: 10px;
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
section.form-section p.small-text {
  text-align: center;
  font-weight: 400;
  text-transform: capitalize;
  font-size: 14px;
}
section.form-section p {
  color: #fff;
  text-transform: uppercase;
  padding: 10px 0 20px 15px;
  font-weight: bold;
}
.ct-footer-header {
  font-family: 'Open Sans Condensed', sans-serif;
}
.address,
.address .address-disclaimer {
  font-size: 1.4rem;
}
.address strong {
  font-weight: 700;
  display: block;
}
.address span.footer-form {
  color: #0079c2;
}
.address a {
  font-size: 1.9rem;
  font-weight: 600;
  display: block;
  padding-bottom: 20px;
  padding-bottom: 2rem;
}
.address a:hover {
  text-decoration: underline;
}
.address span {
  display: block;
  margin-top: 0.5rem;
}
.address .address-disclaimer {
  font-weight: 600;
}
.ct-select .selectize-input {
  line-height: .7;
}
.ct-footer {
  background-color: #111;
  color: #cbc9c9;
  padding-top: 4rem;
}
.ct-footer p {
  font-size: 1.4rem;
  color: #f9f9f9;
}
.ct-footer-header {
  color: #00bff3;
  text-transform: uppercase;
  font-size: 2rem;
  font-weight: 700;
  padding: 3rem 0 2.5rem;
}
.ct-footer-list li a {
  font-size: 1.4rem;
  color: #cbc9c9;
}
.ct-footer-list li a:hover,
.ct-footer .ct-post_footer a:hover {
  text-decoration: underline;
}
.ct-footer-list li + li {
  margin-top: 0.5rem;
}
.ct-footer .ct-post_footer {
  background-color: #252525;
  color: #fff;
  padding: 2rem 0;
  font-family: 'Arial';
  font-size: 1.3rem;
  margin-top: 4rem;
}
.ct-footer .ct-post_footer ul.list-inline {
  font-size: 1.2rem;
}
.ct-footer .ct-post_footer p {
  margin: 0;
  margin: 0;
  font-size: inherit;
}
.ct-footer .ct-post_footer ul li {
  position: relative;
}
.ct-footer .ct-post_footer ul li + li {
  padding-left: 1.7rem;
  margin-left: 0.5rem;
}
.ct-footer .ct-post_footer ul li + li:before {
  content: '';
  position: absolute;
  top: 20%;
  left: 0;
  height: 60%;
  width: 0.1rem;
  background: #fff;
}
address {
  font-size: 1.4rem;
}
address b {
  font-size: inherit;
  text-transform: uppercase;
}
address span {
  display: block;
  margin-top: 0.5rem;
}
img.avatar {
  width: 14%;
  border-radius: 50%;
}
img.fm{
  width: 24%;
  border-radius: 0%;
}
.col {
  float: top;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.hl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  width: 89%;
}
.hl-innertext {
  position: absolute;
  transform: translate(0, -50%);
  background-color: #f2f2f2;
  border: 1px solid #ddd;
  border-radius: 50%;
  padding: 14px 16px;
  margin-left: 48.5%;
}

.hide-md-lg {
  display: none;
}

  span.psw {
     display: block;
     float: none;
  }
  
@media screen and (max-width: 100px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
 
  .hl {
    display: none;
  }

  .hide-md-lg {
    display: block;
    text-align: center;
  }
  .container2 {
    position: relative;
    border-radius: 20px;
    background-color: #00A19C;
    padding: 1px;
    margin: 6px ;
  }
  .error{
  width: 50%;
  margin-right: 20px;
  padding: 10px;
  border: 2px solid #D81F2A;
  color: #D81F2A;
  background: #D81F2A;
  border-radius: 5px;
  text-align: center;
}
}
</style>
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
                <label for="username" class="sr-only">What is your username?</label> <input type="username" name="username" class="form-control"  placeholder="Enter Username" value="<?php echo $username; ?>" required>
              </div>
            </div>
            <div class>
              <div class>
                <label for="password" class="sr-only">What is your password?</label> <input type="password" name="password" class="form-control"  placeholder="Enter Password" >
              </div>
            </div>
            <div class>
            <input type="hidden" name="mode" value="saveVisitor" id="mode"> <button type="submit" name="login_user" id="Submit2" class="btn btn-primary btn-solodev">Login</button>
            </div>
          </div>
        </form>
      </div>
      </section>
      <section class="form-section3">  
    <div class="clearfix"></div>
      <center><class="small-text">By clicking "Login" I agree to PETRONAS's <a href="https://www.petronas.com/privacy-policy">Terms of Service.</a>
  <div class="clearfix"></div>
  <center><label>
      <center><input type="checkbox" checked="checked" name="remember"> Remember me
    </label> 
  </div>
  </section><br>

  <section class="form-section2">
  <div class="container2" >
  
  <div class="col">
     
<div class="row"><br>
       <center><span class="psw">Forgot your login details? <a href="forget.php">Get help signing in.</a></span><br>
     </div><br>

     <div class="hl">
       <span class="hl-innertext">or</span>
     </div>

     <div class="row">
       <div class="hide-md-lg">
         <p>Or</p>
       </div><br><br>

   <center><span class="psw">Don't have an account? <a href="signup.php">Sign Up. </a></span><br>
 </div> 
 </div>
</section> 

<footer class="ct-footer text-center-sm text-center-xs">
  <div class="container">
    <div class>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="ct-footer-header">Services</div>
        <ul class="ct-footer-list list-unstyled">
          <li>
            <a href="#">Request & Report</a>
          </li>
          <li>
            <a href="#">Planning & Scheduling</a>
          </li>
          <li>
            <a href="#">Project Management</a>
          </li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="ct-footer-header">Join Us</div>
        <ul class="ct-footer-list list-unstyled">
          <li>
            <a href="https://www.petronas.com/join-us/be-our-partner">Be Our Partner</a>
          </li>
          <li>
            <a href="https://www.petronas.com/join-us/career-opportunities">Career Opportunities</a>
          </li>
          <li>
            <a href="https://www.petronas.com/join-us/students-graduates">Student & Graduates</a>
          </li>
        </ul>
      </div>
    
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="ct-footer-header">Learn More</div>
          <ul class="ct-footer-list list-unstyled">
            <li>
              <a href="http://www.petronaschemicals.com.my/Our-Company/Pages/About-Us.aspx">Company</a>
            </li>
            <li>
              <a href="http://www.petronaschemicals.com.my/Investor-Relation/Pages/PCG-at-a-Glance.aspx">Investor Relations</a>
            </li>
            <li>
              <a href="https://www.petronas.com/media/press-release">News</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="ct-footer-header">Get in Touch</div>
        <ul class="ct-footer-list list-unstyled">
        <li>
          <a>Aministration Building, </a>
        </li>
        <li>
          <a>PETRONAS Petroleum Industry Complex</a>
        </li>
        <li>
          <a>KM106, Jalan Kuantan-Kuala Terengganu</a>
        </li>
        <li>
          <a>24300 Kertih,Terengganu</a>
        </li>
        </ul>
        </div>
      </div>
      
  <div class="ct-post_footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-4 text-center ct-u-paddingTop10">
          <p>© 2019 PCOGD. All Rights Reserved.</p>
        </div>
        <div class="col-sm-6 col-md-4 text-center ct-u-paddingTop10">
          <ul class="list-unstyled list-inline">
            <li>
              <a href="https://www.waze.com/en/directions/malaysia/kerteh/pcogd-(m)-sdn-bhd/67764270.677904842.1844575.html">Site Map</a>
            </li>
            <li>
              <a href="https://www.petronas.com/privacy-policy">Privacy Policy</a>
            </li>
            <li>
              <a href="https://www.petronas.com/contact-us">Contact Us</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-12 col-md-4 text-center ct-u-paddingTop10">
          <p>Powered by <a href="https://www.petronas.com/" target="_blank">PETRONAS</a></p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>