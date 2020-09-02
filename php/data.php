
<?php
include_once "config.php";
 session_start();
if(isset($_POST['submit']))
{
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phoneNumber = $_POST['phoneNumber'];
        $birthDate = $_POST['birthDate'];
        $gender = $_POST['gender'];


        $hash = password_hash($password,PASSWORD_BCRYPT);


        $query ="INSERT INTO registration(firstName,lastName,email,password,phoneNumber,birthDate,gender)
                     VALUES('{$firstName}','{$lastName}','{$email}','{$hash}','{$phoneNumber}','{$birthDate}','{$gender}') ";

        if (mysqli_query($connection, $query)) {

            echo("<script>alert('Successfully registered');</script>");
            echo("<script>window.location = 'login.php';</script>");

          } else {
            echo("<script>alert('This email already exist');</script>");
            echo("<script>window.location = 'registration.php';</script>");

           }


    mysqli_close($connection);
}
  $error=false;
  $_SESSION['loggedin'] =false;


if(isset($_POST['login'])){
    $email= $_POST['email'];
    $password= $_POST['password'];

    $sql = "select * from registration where email = '$email'";
    $result = mysqli_query($connection, $sql);


    if($rows = mysqli_fetch_assoc($result)){
        $db_password = $rows['password'];


        if(password_verify($password,$db_password)){

            $_SESSION['loggedin'] =true;
            header("location: dashboard.php");


        }else{
               $error=true;
               $_SESSION['loggedin'] =false;

              echo("<script>alert('Wrong Password');</script>");
              echo("<script>window.location = 'login.php';</script>");
            }

        }else{
              echo("<script>alert('Email doesn\'t exist');</script>");
              echo("<script>window.location = 'login.php';</script>");
             }

    }
     if(isset($_GET['logout'])){
        $_SESSION['loggedin'] =false;
         session_destroy();
         header('location: home.php');
     }



