<?php
 session_start();

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Create Your Resume</title>
    <link rel="stylesheet" href="../style/personal-info-style.css" >

</head>
<body>

<div class="body">

    <?php include "navbar.php"?>

    <div class="back">
        <a href="dashboard.php" class="back">&#x2190;Back</a>
    </div>
<div class="personal-info">
    <h3>Personal Info</h3>

    <div class="left">
        <form class="form-left">
            <p>First Name</p>
            <input type="text" placeholder="Enter your first name">

            <p>Email</p>
            <input type="email" placeholder="Enter your email address">

            <p>Blood Group</p>
            <select class="blood">
                <option selected>A+</option>
                <option>B+</option>
                <option>O+</option>
                <option>AB+</option>
                <option>A-</option>
                <option>B-</option>
                <option>O-</option>
                <option>AB-</option>
            </select>

            <p>Marital Status</p>
            <select class="blood">
                <option selected>Married</option>
                <option>Unmarried</option>
                <option>Divorced</option>
            </select>
        </form>

    </div>

    <div class="right">
        <form class="form-right">
            <p>Last Name</p>
            <input type="text" placeholder="Enter your last name">

            <p>Phone Number</p>
            <input type="tel" placeholder="Enter your phone number">

            <p>Date Of Birth</p>
            <input type="date" placeholder="Enter your birth date">

            <p>Gender</p>
            <select class="gender">
                <option selected>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>
        </form>
    </div>
    <form class="form-bottom">
        <p>Present Address</p>
        <textarea></textarea>

        <p>Designation</p>
        <input type="text" class="designation" placeholder="Enter your designation">
    </form>
</div>
           <div class="save-continue">
               <a href="dashboard.php" class="save">Save</a>
               <a href="career-summary.php" class="continue">Continue</a>
           </div>

 </div>

</body>
</html>
