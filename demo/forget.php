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

section.form-section {
  background-color: #00A19C;
  padding: 20px 10px;
  
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
  background-color: #F;
  border-color: #3D3935;
}
section.form-section a {                       /*terms of service*/
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
</style>
</head>
<body>
<section class="form-section">
  <div class="container">
    <div class="row">
    <center><img src="download.png" alt="Avatar" class="avatar"><br><br>
    <center><img src="fm.png" alt="Fm" class="fm">
      <div class="col-md-10 col-md-offset-1"><br>
        <h4>Please enter your email address below and we<br> will send information to change Password</h4><br>
        
            <?php
              if(isset($_POST['forget_user'])){
                require 'PHPMailerAutoload.php';
                //require 'credential.php';
                
                $mail = new PHPMailer;
                
                $mail->SMTPDebug = 4;                               // Enable verbose debug output
                
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = "smtp.gmail.com";  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = "alifmokhtar98@gmail.com";                 // SMTP username
                $mail->Password = "Aqsa115665";                           // SMTP password
                $mail->SMTPSecure = "tls";                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
                
                $mail->setFrom('alifmokhtar98@gmail.com', 'Tuan Mohd Alif Naim');
                $mail->addAddress($_POST['email']);     // Add a recipient
                $mail->addReplyTo('alifmokhtar98@gmail.com');
                
                //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                $mail->isHTML(true);                                  // Set email format to HTML
                
                $mail->Subject = 'Here is the subject';
                $mail->Body    = '<div style="borger:2px solid red;">This is the HTML message body <b>in bold!</b></div>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                
                if(!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message has been sent';
                }
              }
            ?>  
        
        <form action="forget.php" method="post" id="footer-form" name="footer-form" role="form" enctype="multipart/form-data"> 
        <div class="row">
          <div class>
              <div class>
                <label for="email" class="sr-only">What is your email?</label> <input type="text" name="email" class="form-control"  placeholder="Registered Email" required>
              </div>
            </div>
            <div class>
            <input type="hidden" name="mode" value="CONTINUE" id="mode"> <button type="submit" value="submit" name="forget_user" id="Submit2" class="btn btn-primary btn-solodev">I Forgot</button>
            </div>
          </div>
        </form>
      </div>

<div class="clearfix"></div>
      <center><br class="small-text">By clicking "I Forgot" I agree to PETRONAS's <a href="https://www.petronas.com/privacy-policy">Terms of Service.</a>
    </div>
    <center><div class="small-text"><b>Back to </b> <a href="login.php">Log In. </a>
  </div>
  <div class="clearfix"></div>
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
        <li><a>Aministration Building, </a></li><li><a>PETRONAS Petroleum Industry Complex</a></li>
        <li><a>KM106, Jalan Kuantan-Kuala Terengganu</a></li>
        <li><a>24300 Kertih,Terengganu</a></li>
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