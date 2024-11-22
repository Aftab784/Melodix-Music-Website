<?php
 
 session_start();

 include('db_connect.php');
 $msg = false;
 if(isset($_POST['user_name'])){
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    $query = "select * from user where user = '".$user_name."' AND password = '".$user_password."' limit 1";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) ==1){
        header('Location: welcome.php');
    } else{
       $msg = "Incorrect Password";
    }
 }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Melodix Login</title>
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
    height: 330px;
}
    </style>
</head>
<body>
   <form method = "post">
    <div id="containerDiv">
        <div id="loginDiv">

              <h1>Login</h1>

              <div id="inputDiv">
                    <input type="text" required name="user_name" placeholder="Username">
                    <input type="password" required name="user_password" placeholder="Password">
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

                    <p>Forget Password?</p>
              </div>

              <input class="submit-btn" type="submit" value="Login"></input>

              <div id="noAccount">
                 <p>Don't have an account! <a href="signup.php">Sign up</a> </p>
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
