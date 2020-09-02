<?php
 session_start();
 //$_SESSION[$_POST['logout']] = 0;
 session_destroy();
 header('Location: home.php');