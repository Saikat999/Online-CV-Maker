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
                <input type="date" name="date" id="from" placeholder="from">
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

          if(localStorage.getItem('from')==null){
              localStorage.setItem('from','[]');
          }
          if(localStorage.getItem('to')==null){
              localStorage.setItem('to','[]');
          }
          if(localStorage.getItem('position')==null){
              localStorage.setItem('position','[]');
          }
          if(localStorage.getItem('company')==null){
              localStorage.setItem('company','[]');
          }


          var from_old=JSON.parse(localStorage.getItem('from'));
          from_old.push(from);

          var to_old=JSON.parse(localStorage.getItem('to'));
          to_old.push(to);

          var position_old=JSON.parse(localStorage.getItem('position'));
          position_old.push(position);

          var company_old=JSON.parse(localStorage.getItem('company'));
          company_old.push(company);


          localStorage.setItem('from',JSON.stringify(from_old));
          localStorage.setItem('to',JSON.stringify(to_old));
          localStorage.setItem('position',JSON.stringify(position_old));
          localStorage.setItem('company',JSON.stringify(company_old));


          // var storedNames;
          // // var storedNames = JSON.parse(localStorage.getItem("from"));
          // var storedNames = JSON.parse(localStorage["datas"]);
          // if (storedNames === undefined || storedNames.length == 0) {
          //     console.log('array empty');
          //     var arr = [];
          // }
          // arr.push(from);
          // // alert(arr);
          //
          // localStorage["datas"] = JSON.stringify(arr);
          // // var test= localStorage.setItem("from", JSON.stringify(arr));
          // var stored_datas = JSON.parse(localStorage["datas"]);
          // // alert(typeof stored_datas);
          // // alert( stored_datas);


          // window.localStorage.setItem('from',from);
          // window.localStorage.setItem('to',to);
          // window.localStorage.setItem('position',position);
          // window.localStorage.setItem('company',company);



      });
  </script>

</body>
</html>
