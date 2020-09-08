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
            <input  id="fname" type="text" placeholder="Enter your first name" required>

            <p>Email</p>
            <input id="email" type="email" placeholder="Enter your email address" required>

            <p>Blood Group</p>
            <select id="blood">
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
            <select id="marital-status">
                <option selected>Married</option>
                <option>Unmarried</option>
                <option>Divorced</option>
            </select>

    </div>

    <div class="right">
            <p>Last Name</p>
            <input id="lname" type="text" placeholder="Enter your last name" required>

            <p>Phone Number</p>
            <input id="number" type="tel" placeholder="Enter your phone number" required>

            <p>Date Of Birth</p>
            <input id="birthdate" type="date" placeholder="Enter your birth date" required>

            <p>Gender</p>
            <select class="gender">
                <option selected>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>

    </div>


    <div class="bottom">
        <p>Present Address</p>
        <textarea id="address" required></textarea>

        <p>Designation</p>
        <input id="designation" type="text" class="designation" placeholder="Enter your designation" required>
    </div>

</div>
           <div class="save-continue">
               <button  onclick="check()" class="save">Save</button></a>
               <a href="career-summary.php" class="continue">Continue</a>
           </div>
    </form>

 </div>

<script src="../js/dashboard.js"></script>
</body>
</html>
