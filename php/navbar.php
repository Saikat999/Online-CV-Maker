
  <div class="row-top">
    <img class="img" src="../image/logo.png">
    <div class="column-top">
        <li><a href="home.php" class="navigation">Home</a></li>
        <li><a href="#" class="navigation">Dashboard</a></li>
        <li><a href="#" class="navigation">About Us</a></li>
        <?php
        if(!isset($_SESSION['loggedin'])):
        ?>
        <li><a href="#" class="navigation">Login</a></li>
        <?php
        else:
            ?>
        <li><a href="data.php? logout=true"  class="navigation">Logout</a></li>
        <?php
        endif;
        ?>


    </div>
  </div>


