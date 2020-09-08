<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Your Resume</title>
<!--        <meta name="viewport" content="width-device-width, initial-scale=1.0">-->
        <link rel="stylesheet" href="../style/dashboard-style.css" >
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>
<body>

    <?php  include "navbar.php";?>


<div class="body-back">

<div class="profile-cv">
    <h2>Profile & CV</h2>
    <a href="personal-info.php" class="edit">EDIT ON STEPPER</a>
</div>
 <div class="body-left">
     <div class="left-info">
         <i class="fas fa-user-alt" style="font-size: 20px"></i>
         <p>Personal Info</p>
         <a href="#" class="p-edit">Edit</a>
     </div>
     <div class="user-form">
         <img class="user-profile" src="../image/userprofile.png">
         <div class="name">
             <span id="fname"></span>
             <span id="lname"></span>
         </div>
         <div class="designation">
             <span id="designation"></span><br><br>
         </div>
         <div class="number">
             <i class="fas fa-phone"></i>
             <span id="number"></span><br><br>
             <i class="fas fa-envelope"></i>
             <span id="email"></span><br><br>
             <i class="fas fa-map-marker-alt"></i>
             <span id="address"></span>

         </div>

     </div>

 </div>

<div class="body-right">

    <div class="career-part">
      <div class="career-header">
        <i class="fas fa-book-reader" style="font-size: 20px"></i>
        <p>Career Summary</p>
        <a href="career-summary.php" class="c-edit">Edit</a>
      </div>
      <div class="text-summary">
        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
    </div>

    <div class="work-experience-part">
      <div class="work-experience-header">
        <i class="fas fa-th-list" style="font-size: 20px"></i>
        <p>Work Experiences</p>
        <a href="#" class="w-edit">Add</a>
      </div>
      <div class="work-details">
        <i class="fas fa-calendar-alt" style="font-size: 20px"></i>
          <p class="date">Date</p>
          <p>hello</p>
          <a href="#"><i class="fas fa-trash-alt" style='font-size:20px'></i></a>
          <a href="#"><i class="fas fa-edit" style='font-size:20px'></i></a>

      </div>
    </div>
<!---->
<!--    <div class="education-part">-->
<!--       <div class="education-header">-->
<!--        <i class="fas fa-graduation-cap" style="font-size: 20px"></i>-->
<!--        <p>Educations</p>-->
<!--        <a href="#" class="e-edit">Add</a>-->
<!--       </div>-->
<!--       <div class="education-details">-->
<!--        <p></p>-->
<!--        <i class="fas fa-calendar-alt" style="font-size: 20px"></i>-->
<!--        <a href="#">  <i class="fas fa-edit" style="font-size: 20px"></i> </a>-->
<!--        <a href="#"> <i class='fas fa-trash-alt' style='font-size:20px'></i> </a>-->
<!--       </div>-->
<!--    </div>-->

</div>
</div>
    <script src="../js/dashboard.js"></script>
    <script>
        var fname = window.localStorage.getItem('fname');
        var lname = window.localStorage.getItem('lname');
        var designation = window.localStorage.getItem('designation');
        var number = window.localStorage.getItem('number');
        var email = window.localStorage.getItem('email');
        var address = window.localStorage.getItem('address');

        if (fname && lname && designation &&  number && email && address) {
            document.getElementById('fname').innerText = fname;
            document.getElementById('lname').innerText = lname;
            document.getElementById('designation').innerText = designation;
            document.getElementById('number').innerText = number;
            document.getElementById('email').innerText = email;
            document.getElementById('address').innerText = address;

        }


    </script>
</body>
</html>

