<?php
session_start();

$username = "";
$email = "";

$errors = array();

$db = mysqli_connect('localhost','root','','practice') or die("could not connect to database"); 

if(isset($_POST['reg_user'])){      
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password_1= mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2= mysqli_real_escape_string($db, $_POST['password_2']);

    if(empty($email)) {
        array_push($errors, "Email address is required");
    }
    if(empty($username)) {
        array_push($errors, "Username is required");
    } 
    if(empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if(empty($password_2)) {
        array_push($errors, "Password confirmation is required");
    }
    if($password_1 != $password_2) {
        array_push($errors, "Passwords do no match");
    }
   
    if(count($errors) == 0) {
        $password = ($password_1);
        $query = "INSERT INTO user (username, email, password) 
                    VALUES ('$username', '$email', '$password')";

        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";

        header('location: homepage.php');
    }
}

    if (isset($_GET['logout'])){
        session_destroy();
        unset($_Session['username']);
        header('location: login.php');
    }
?>