<?php
include_once 'login.php';
include_once 'signup.php';
?>
<script>
    window.onclick = function(event) {
      hideLogin();
      hideGameMenu();
    }

    // Get the modal
    var modalLogin = document.getElementById('loginModalForm');
    var modalSignup = document.getElementById('signupModalForm');

    // When the user clicks anywhere outside of the modal, close it
    function hideLogin(){
      if (event.target == modalLogin || event.target == modalSignup) {
          modalLogin.style.display = "none";
          modalSignup.style.display = "none";
      }
    }
    // Close the dropdown if the user clicks outside of it
    function hideGameMenu() {
      if (!event.target.matches('.dropbtn'))
      {
        var myDropdown = document.getElementById("myDropdown");
          if (myDropdown.classList.contains('show'))
           {
            myDropdown.classList.remove('show');
          }
      }
    }

    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
</script>

<div class="glade-top"> <!-- containerul principal care contine toate butoanele -->
  <div class="glade-white glade-card glade-bar" id="myNavbar">
    <a href="../assets/index.php" class="glade-bar-item glade-button">GLADE</a>

    <?php
    if (isset($_SESSION['u_id'])){
      echo "<button class='glade-button'><i class='fa fa-user'>  ".$_SESSION['u_uid']."</i></button>";
    }
    ?>
    <div class="glade-bar-item"> <!--SEARCH BAR-->
      <form action="../resurse/search.php" class="">
       <input type="text" placeholder="Search.." name="search" class="glade-button">
       <button type="submit" class="glade-button"><i class="fa fa-search"></i></button>
      </form>
    </div><!--SEARCH BAR-->


    <div class="glade-bar-item">
      <?php

        if(isset($_SESSION['u_id'])){
          echo '<form action="../includes/logout.inc.php" method="POST" class="glade-bar-item">
                  <button type="submit" name="submit" class="glade-button">LOGOUT</button>
                </form>';
        } else {
          echo '<button onclick="document.getElementById(\'loginModalForm\').style.display=\'block\'" class="glade-bar-item glade-button">LOGIN</button>
                <button onclick="document.getElementById(\'signupModalForm\').style.display=\'block\'" class="glade-bar-item glade-button">SIGN UP</button>';
              }
      ?>
    </div>


      <!-- Right-sided navbar links ------------------------------------------------------------->
      <div class="glade-right">


<div class="glade-bar-item">
  <div>
    <button class="glade-button dropbtn" onclick="myFunction()">GAME
    <i class="fa fa-caret-down"></i></button>

    <div class="glade-dropdown-content" id="myDropdown">
      <a href="overview.php">OVERVIEW</a>
      <a href="races.php">RACES</a>
      <a href="classes.php">CLASSES</a>
    </div>
  </div>
</div>


      <a href="aboutcompany.php" class="glade-button glade-bar-item">ABOUT</a>
      <a href="team.php" class="glade-button glade-bar-item">TEAM</a>
      <a href="work.php" class="glade-button glade-bar-item"><i class="fa fa-th"></i>WORK</a>
      <a href="contact.php" class="glade-button glade-bar-item"><i class="fa fa-envelope"></i> CONTACT</a>

    </div>
    <?php


    if(isset($_GET['signup'])){
      $signupCheck = $_GET['signup'];

      if($signupCheck != "success") {
        echo '<script type="text/javascript">
              document.getElementById("signupModalForm").style.display="block";
              </script>';

      }
    }
?>


</div>
</div>
