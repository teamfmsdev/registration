<?php
session_start();

$username = "";
$password = "";

$errors = array();

$db = mysqli_connect('localhost','root','','practice') or die("could not connect to database"); 

if(isset($_POST['login_user'])){   
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password= mysqli_real_escape_string($db, $_POST['password']);

    if(empty($username)) {
        array_push($errors, "Username is required");
    } 
    if(empty($password)) {
        array_push($errors, "Password is required");
    }

    if(count($errors) == 0) {
        $password = ($password);
        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $results = mysqli_query($db, $query);

    if($a=mysqli_fetch_array($results)){
        $a[1];
        $a[3];
        $_SESSION['username']=$a[1];
        header('location: homepage.php');
    }else{
        array_push($errors, "wrong username/password combination");
        //header('location: login.php');
    }
    }
    
}
?>