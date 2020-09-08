<?php
 session_start();


?>

<!Doctype html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Login page</title>
    <link rel="stylesheet" href="../style/login-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


    <?php include "navbar.php";?>


    <div class="column-left">
        <div class="image">
        <img  src="../image/photo.jpg">
        </div>
        <div class="column-right">
            <img class="welcome-img" src="../image/user.png">
            <p class="msg">Welcome</p>
            <form class="login" action="data.php" method="post">
                <span class="info">User ID</span>

                    <input name="email" type="email" class="input" placeholder="Enter your email" required>
                       <i class="fa fa-user" aria-hidden="true"></i><br><br>
                    <span class="info">Password</span>
                    <input name="password" type="password" class="input" placeholder="Enter your password" required>
                      <i class="fa fa-unlock-alt" aria-hidden="true"></i><br>
                    <input name="checkbox" type="checkbox" class="check-box">
                    <p>Remember password</p>

                    <button type="submit" class="login-btn" name="login">Login</button>
                    <a href="#" class="forgot-pass">Forgot password?</a>
                    <p class="new">New Here ?</p>
                    <a href="registration.php" class="create-account">Create Account</a>
            </form>


        </div>
    </div>


</body>
</html>