<?php
 session_start();

?>
<!Doctype html>
<html>
<head>
    <title>CV Writing</title>
    <link rel="stylesheet" href="../style/home-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>



    <!-- Header section -->

      <?php include "navbar.php";?>

    <!-- Welcome section -->

    <div class="welcome">
        <h1>Create Your Standard Resume</h1>
        <p>Follow a few steps to build your perfect resume and get hired faster</p>
        <div class="build">
            <?php
            if(isset($_SESSION['loggedin'])):
            ?>
            <li><a class="build" href="dashboard.php">Build Now</a> </li>
            <?php
            else:
            ?>
            <li><a class="build" href="login.php">Build Now</a> </li>
            <?php
            endif;
            ?>

        </div>
    </div>

    <!-- Footer section -->

    <div class="footer">
        <div class="footer-left">
            <h3>Explore Us</h3>
            <li><a href="#" class="contact">About</a></li>
            <li><a href="#" class="contact">Contact</a></li>
            <li><a href="#" class="contact">Blog</a></li>
            <li><a href="#" class="contact">Build Resume</a></li>
        </div>


        <div class="footer-centre">
            <h3>Legal</h3>
            <li><a href="#" class="terms">Terms & Conditions</a></li>
            <li><a href="#" class="terms">Privacy</a></li>
            <li><a href="#" class="terms">Cookies</a></li>
            <li><a href="#" class="terms">Security</a></li>
        </div>

        <div class="footer-right">
            <p>Design & Developed By</p>
            <P class="name">Md. Saikat Hasan</P>
            <ul class="social">
                <a href="https://www.facebook.com/saikat.hasan.75" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="https://www.linkedin.com/in/saikat-hasan-65b215180/" class="fa fa-linkedin"></a>
            </ul>
        </div>

    </div>
    <div  class="copy-right">
        <p>Copyright & copy; 2020 SP-Resume. All Rights Reserved.</p>
    </div>





</body>
</html>
