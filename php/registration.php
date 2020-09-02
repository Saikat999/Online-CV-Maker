<!Doctype html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Registration Here</title>
    <link rel="stylesheet" href="../style/registration-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../js/registration.js"></script>


</head>
<body>


    <?php include "navbar.php";?>


   <div class="content">
       <form  class="reg-form" method="post" action="data.php" onsubmit="return validation()">
           <fieldset>
               <legend>
                      <div class="heading">Registration  Form</div>
               </legend>
               <fieldset>
                       <div class="name">First Name</div>
                       <input type="text" placeholder="Enter your first name" name="firstName" required>
               </fieldset>

               <fieldset>
                       <div class="name">Last Name</div>
                       <input type="text" placeholder="Enter your last name" name="lastName" required>
               </fieldset>

               <fieldset>
                       <div class="email">Email</div>
                       <input id="email" type="text" placeholder="example@gmail.com" name="email" >
               </fieldset>

               <fieldset>
                       <div class="pass">Password</div>
                       <input id="password" type="password" placeholder="Enter a password" name="password" >
               </fieldset>

               <fieldset>
                       <div class="number">Mobile Number</div>
                       <input id="phone"  type="text" placeholder=" 017********" name="phoneNumber" >
               </fieldset>

               <fieldset>
                       <div class="date">Date Of Birth</div>
                       <input type="date" placeholder="DD/MM/YYYY" name="birthDate" required>
               </fieldset>

               <fieldset>
                       <div class="gender">Gender</div>
                   <select class="gender-option" name="gender" required>
                       <option selected>Male</option>
                       <option>Female</option>
                       <option>Other</option>
                   </select>
               </fieldset>

               <fieldset>
                   <div>
                       <button  name="submit">Submit</button>
                   </div>
               </fieldset>
           </fieldset>
       </form>
   </div>




</body>
</html>