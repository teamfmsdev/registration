<?php
session_start();

//============= Variables for Database ===================
$hostname = "localhost";
$username = "root";
$password = "";
$database = "practice";
//========================================================

//Connection…
$link = mysqli_connect($hostname, $username, $password);

//Set Database
mysqli_select_db($database,$link);

//Read Form Data from Page1
$email = $_POST['email'];

$query = "SELECT * FROM user where email='$email'";
$result = mysqli_query($query);

$row = mysqli_fetch_array($result);
$toemailaddress=$row['email'];
$password=$row['password'];

ini_set('display_errors', 1);
error_reporting(~0);

$toemailaddress = "";
$subjectline = "Check email for Your Password";
$body ="Your Password is : ".$password;

ob_start();
require_once('class.phpmailer.php');
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet="UTF-8";
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'adminFMS@gmail.com';
$mail->Password = 'gmailpassword';
$mail->SMTPAuth = true;

$mail->From = 'adminPetronas@gmail.com';
$mail->FromName = 'Tuan Mohd Alif Naim';
$mail->AddAddress("$toemailaddress");

$mail->IsHTML(true);
$mail->Subject    = "$subjectline";
$mail->AltBody    = "To Read Email use HTML View";
$mail->Body    = "$body";

$t = $mail->Send();
//echo $t;
$_SESSION['msg']="Check email for password";
header('Location: forget.php');

?>