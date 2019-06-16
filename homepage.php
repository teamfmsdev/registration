<?php include('signupServer.php'); 
    $_SESSION['success'] = "";
    if(empty($_SESSION['username'])){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel = "shortcut icon" type = "image/png" href = "favicon.png">
    <link rel="stylesheet" type="text/css" href="style.css">
<style>
    .content{
        width: 30%;
        margin: 0px auto;
        padding: 20px;
        border: 4px solid #B0C4DE;
        background: white;
        border-radius: 10px 10px 40px 40px;
    }
</style>
</head>
<body>  
   <div class="header">
       <center><h1>Facilities Management System</h1>
   </div>
   <div class="content">
       <?php if (isset($_SESSION['success'])); ?>
            <div class="error success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>

        <?php if (isset($_SESSION["username"])); ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="http://10.16.240.101/pcogdfm/" style="color: #615E9B;">Continue</a></p>
            <p><a href="login.php" style="color: red;">Logout</a></p>
   </div>
    
</body>
</html>
