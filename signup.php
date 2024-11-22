<?php

 session_start();

include('db_connect.php');
$msg = false;
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_re_password = $_POST['user_confirm_password'];

    if(!empty($user_name) && !empty($user_email) && !empty($user_password) && !is_numeric($user_name)){
        if($user_password === $user_re_password){
             $query = "insert into user (user, email, password) VALUES ('$user_name', '$user_email', '$user_password')";
             mysqli_query($con, $query);
             header("Location: index.php");
        } else{
            $msg = "Password Not Match";
        }
    }
 }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Melodix Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" />
    <style>
        html,body{
    height: 100vh;
    width: 100%;
    background-image: url("img/login-bg.jpg");
    background-repeat: no-repeat;
    background-size: cover;

}
#containerDiv #loginDiv{
    height: 440px;
}
    </style>
</head>
<body>
   <form method="post">
    <div id="containerDiv">
        <div id="loginDiv">

              <h1>Sign Up</h1>

              <div id="inputDiv">
                    <input type="text" name="user_name" required placeholder="Enter your name" >
                    <input type="email" name="user_email"  required placeholder="Enter your email" >
                    <input type="password" name="user_password" required placeholder="Password" >
                    <input type="password" name="user_confirm_password" required placeholder="Confirm Password" >
              </div>

              <div id="rememberForgetDiv">         
                    <div id="remember">
                        <div class="checkbox-container">
                            <input id="checkbox" class="checkbox" type="checkbox" />
                            <label for="checkbox">
                                <i class="bi bi-check-lg"></i>
                            </label>
                          </div>
                         <label for="remember">Remember Me</label>
                    </div>

              </div>

              <input class="submit-btn" type="submit" value="Sign Up"></input>

              <div id="noAccount">
                 <p>Already have an account? <a href="index.php">Login</a> </p>
              </div>

        </div>
              <!-- <h3>Incorrect Password</h3> -->
              <?php
                 echo('<h3>'.$msg.'</h3>');
              ?>
    </div>
</form>
</body>
</html>
