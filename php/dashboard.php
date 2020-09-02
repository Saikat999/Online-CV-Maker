<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Your Resume</title>
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
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
     <i class="far fa-user-circle" style="font-size: 100px"></i>

 </div>

<div class="body-right">

    <div class="career-part">
      <div class="career-header">
        <i class="fas fa-book-reader" style="font-size: 20px"></i>
        <p>Career Summary</p>
        <a href="career-summary.php" class="c-edit">Edit</a>
      </div>
      <div class="text-summary">
        <p> </p>
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
</body>
</html>

