<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Your Resume</title>
    <link rel="stylesheet" href="../style/work-experience-style.css" >

</head>
<body>
<div class="body">

    <?php include "navbar.php"?>

    <div class="back">
        <a href="career-summary.php" class="back">&#x2190;Back</a>
    </div>
      <form class="work">
        <div class="experience">
            <h3>Work Experiences</h3>

            <div class="total-exp">

                <div class="date">
                <input type="date" id="from" placeholder="from">
                <h4>To</h4>
                <input type="date" id="to" placeholder="to">
                </div>

                <div class="company-details">
                    <input type="text" id="position" placeholder="Enter Your EX-Designation"><br>
                    <input type="text" id="company" placeholder="Enter Your EX-Company Name">
                </div>
            </div>

        </div>
        <div class="save-continue">
            <button onclick="window.location.href='dashboard.php';" class="save">Save</button>
            <button href="#" class="continue">Continue</button>
        </div>
      </form>
</div>

  <script>
      var work=document.querySelector('.work');

      work.addEventListener('submit', function (evt) {
          evt.preventDefault();

          var from=document.getElementById('from').value;
          var to=document.getElementById('to').value;
          var position=document.getElementById('position').value;
          var company=document.getElementById('company').value;


          window.localStorage.setItem('from',from);
          window.localStorage.setItem('to',to);
          window.localStorage.setItem('position',position);
          window.localStorage.setItem('company',company);

      });
  </script>

</body>
</html>
