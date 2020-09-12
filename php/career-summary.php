<?php
session_start();

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Create Your Resume</title>
    <link rel="stylesheet" href="../style/career-summary-style.css" >

</head>
<body>
<div class="body">

    <?php include "navbar.php"?>

    <div class="back">
        <a href="personal-info.php" class="back">&#x2190;Back</a>
    </div>
    <form class="text-summary">
    <div class="career-summary">
        <h3>Career Summary</h3>
        <div class="comment">
            <p>Try and answer the following question: who you are, what you can offer, and what you're aiming for in your career</p>
        </div>
        <div class="text-area">
            <textarea id="summary" wrap="hard"></textarea>
        </div>
    </div>
    <div class="save-continue">
        <button onclick="window.location.href='dashboard.php';" class="save">Save</button>
        <button onclick="window.location.href='work-experience.php';"  class="continue">Continue</button>
    </div>
    </form>
</div>
 <script>
     var summary = document.querySelector('.text-summary');

     summary.addEventListener('submit',function (evt) {
         evt.preventDefault();
         var summary = document.getElementById('summary').value;
         window.localStorage.setItem('summary', summary);
         //alert(window.localStorage.getItem('summary'));
     });

 </script>
</body>
</html>
