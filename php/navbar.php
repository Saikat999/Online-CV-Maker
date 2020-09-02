
  <div class="row-top">
    <img class="img" src="../image/logo.png">
    <div class="column-top">
        <li><a href="home.php" class="navigation">Home</a></li>

        <?php
        if(isset($_SESSION['loggedin'])):
        ?>
        <li><a href="dashboard.php" class="navigation">Dashboard</a></li>
        <?php
        else:
        ?>
        <li><a href="login.php" class="navigation">Dashboard</a></li>
        <?php
        endif;
        ?>

        <li><a href="#" class="navigation">About Us</a></li>


        <?php
        if(!isset($_SESSION['loggedin'])):
        ?>
        <li><a href="login.php" class="navigation">Login</a></li>
        <?php
        else:
            ?>
        <li><a href="data.php? logout=true"  class="navigation">Logout</a></li>
        <?php
        endif;
        ?>


    </div>
  </div>


