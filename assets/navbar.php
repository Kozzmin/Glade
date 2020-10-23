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

<div class="glade-top">
  <!-- containerul principal care contine toate butoanele -->
  <div class="glade-white glade-card glade-bar" id="myNavbar">
    <!--Home Button-->
    <a href="index.php" class="glade-bar-item glade-button">Universul din poiana</a>

    <!--User Button-->
    <?php
    if (isset($_SESSION['u_id'])){

      echo "<button class='glade-button'><i class='fa fa-user'>  " . $_SESSION['u_uid'] . "</i></button>";
    }
    ?>

    <div class="glade-bar-item">
       <!--SEARCH BAR-->
      <form action="../resurse/search.php" class="">
       <input type="text" placeholder="Search.." name="search" class="glade-button">
       <button type="submit" class="glade-button"><i class="fa fa-search"></i></button>
      </form>
    </div>

    <div class="glade-bar-item">
      <!--LOGOUT button-->
      <?php

        if(isset($_SESSION['u_id'])){
          echo '<form action="includes/logout.inc.php" method="POST" class="glade-bar-item">
                  <button type="submit" name="submit" class="glade-button">Deconectare</button>
                </form>';
        } else {
          echo '<button onclick="document.getElementById(\'loginModalForm\').style.display=\'block\'" class="glade-bar-item glade-button">Conectare</button>
                <button onclick="document.getElementById(\'signupModalForm\').style.display=\'block\'" class="glade-bar-item glade-button">Inregistrare</button>';
              }
      ?>
    </div>


      <!-- Right-sided navbar links ------------------------------------------------------------->
      <div class="glade-right">


<div class="glade-bar-item">
  <div>
    <!--<button class="glade-button toggle-btn">
      <i class="fas fa-bars"></i>MENU
    </button>-->


    <button class="glade-button dropbtn" onclick="myFunction()">Joc
    <i class="fa fa-caret-down"></i></button>


    <div class="glade-dropdown-content" id="myDropdown">
      <a href="overview.php">General</a>
      <a href="races.php">Race</a>
      <a href="classes.php">Clase</a>
    </div>

  </div>
</div>


      <a href="aboutcompany.php" class="glade-button glade-bar-item">Despre</a>

      <a href="team.php" class="glade-button glade-bar-item">Echipa</a>
      <a href="work.php" class="glade-button glade-bar-item"><i class="fa fa-th"></i>Proiecte</a>
      <a href="contact.php" class="glade-button glade-bar-item"><i class="fa fa-envelope"></i>Contact</a>

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
<div class="sidebar-wrapper">
  <aside class="sidebar">
    <button class="close-btn">
      <i class="fas fa-times"></i>
    </button>
    <div class="sidebar-links"></div>
    <!-- links -->
  </aside>
</div>
<script language='JavaScript' type='text/javascript' type="module" src="app.js"></script>

</div>
</div>
