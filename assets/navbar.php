<?php
include_once 'login.php';
include_once 'signup.php';
?>

<div class="glade-top">
  <div class="glade-white glade-card glade-bar">                        <!--Navbar-->
    <a href="index.php" class="glade-bar-item glade-button"><i class="fa fa-tree"></i> Universul din poiana</a>  <!--Logo-->
    
    <?php  
    include_once 'userAccount.php';                                                     //Username
    ?>

      <!--////////////////////////////de facut search-ul sa se activeze din iconita LUPA 12.11.2020 -->
    <div class="glade-bar-item">                                                       <!--Searchbar-->
          
      <form action="../resurse/search.php" class="">
      <!--<input type="text" placeholder="Cauta in site.." name="search" class="glade-button">-->
      </form>

      <!--<button type="submit" class="glade-button" id="myButton" name="searchSubmit"><i class="fa fa-search"></i></button>-->
      <p type="submit" class="glade-button" name="paragrafSearch" style="margin:0;" onclick="something()"><i class="fa fa-search"></i></p>
    </div>
    
    <div class="glade-bar-item">                                                       <!--Logout button-->
      <?php    
      include_once 'disconnectAccount.php';                                                                        
      ?>
    </div>
      
      <div class="glade-right">                                                        <!-- Right-sided navbar links -->
      
        <div class="glade-bar-item">                                                   <!--Joc-->
          <div>
            <button class="glade-button dropbtn" onclick="myFunction()"><i class="fa fa-gamepad"></i> Joc
            <i class="fa fa-caret-down"></i></button>
              <div class="glade-dropdown-content" id="myDropdown">
                <a href="overview.php">General</a>
                <a href="races.php">Rase</a>
                <a href="classes.php">Clase</a>
              </div>
          </div>
        </div>

        <div class="glade-bar-item">                                                   <!--About container-->
          <a href="aboutcompany.php" class="glade-button"><i class="fa fa-connectdevelop"></i> Despre</a>
          <a href="team.php" class="glade-button"><i class="fa fa-users"></i> Echipa</a>
          <a href="work.php" class="glade-button"><i class="fa fa-th"></i> Proiecte</a>
          <a href="contact.php" class="glade-button"><i class="fa fa-envelope"></i> Contact</a>
        </div>
      </div>


      <!--de umblat aici 14.11.2020-->
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

