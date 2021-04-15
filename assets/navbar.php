
<?php
  include_once 'account/login.php';
  include_once 'account/signup.php';
?>

<nav id="navbar">
  <button class="containerBars glade-card" onclick="openNav()">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
  </button>
    
  <div id="navOverlay" class="overlay" >
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <div class="overlay-content"> <!--display flex-->
      <div> <!--de facut bara cum trebuie-->
      <button class="navbtn" onclick="openSubnav(event, 'poiana')"><i class="fa fa-pagelines"></i> Poiana <i class="fa fa-caret-down"></i></button>
      <div class="subnav-content glade-card" id="poiana">
        <a href="index.php" class="glade-button"><i class="fa fa-home"></i> Index</a>
        <a onclick= openLoginModal() class="glade-button"><i class="fa fa-sign-in"></i> Conectare</a>
        <a onclick= openSignupModal() class="glade-button"><i class="fa fa-th"></i> Inregistrare</a>
        <!--<a href="disconnectAccount.php" class="glade-button"><i class="fa fa-sign-out"></i> Deconectare</a><?php    //Logout button//include_once 'account/disconnectAccount.php';?>
        <a href="userAccount.php" class="glade-button"><i class="fa fa-user"></i> Contul</a><?php  //Username//include_once 'account/userAccount.php';?>-->
      </div>
      </div>
      <div>
      <button class="navbtn" onclick="openSubnav(event, 'despre')"><i class="fa fa-connectdevelop"></i> Despre <i class="fa fa-caret-down"></i></button>
      <div class="subnav-content glade-card" id="despre">
        <a href="aboutcompany.php" class="glade-button"><i class="fa fa-home"></i> Companie</a>
        <a href="team.php" class="glade-button"><i class="fa fa-users"></i> Echipa</a>
        <a href="work.php" class="glade-button"><i class="fa fa-th"></i> Proiecte</a>
        <a href="contact.php" class="glade-button"><i class="fa fa-envelope"></i> Contact</a>
      </div>
      </div>
      <div>
      <button class="navbtn" onclick="openSubnav(event, 'joc')"><i class="fa fa-gamepad"></i> Joc <i class="fa fa-caret-down"></i></button> <!--de facut clasa separat pentru containerul "joc" pentru a alinia spre dreapta butoanele.Sub-butoanele arata si se comporta ca butoanele principale-->
      <div class="subnav-content glade-card" id="joc">
        <a href="overview.php" class="glade-button">Informatii generale</a>

        <button onclick="openSubnavGame(event, 'rase')" class="subnav-link"><i class="fa fa-gamepad"></i> Rase <i class="fa fa-caret-down"></i></button>
          <div class="subnav-game glade-card" id="rase">
            <a href="races.php" class="glade-button">Informatii rase</a>
            <a href="raceElf.php" class="glade-button"><i class=""></i> Rasa Elf</a>
            <a href="raceZaNe.php" class="glade-button"><i class=""></i> Rasa Za Ne</a>  
            <a href="raceTrolli.php" class="glade-button"><i class=""></i> Rasa Trolli</a> 
          </div>

        <button onclick="openSubnavRace(event, 'clase')" class="subnav-link"><i class="fa fa-gamepad"></i> Clase <i class="fa fa-caret-down"></i></button>
        <div class="subnav-game glade-card" id="clase">
            <a href="classCavaler.php" class="glade-button"><i class=""></i> Cavaler</a>
            <a href="classRazboinic.php" class="glade-button"><i class=""></i> Războinic</a>
            <a href="classNecinstit.php" class="glade-button"><i class=""></i> Necinstit</a>
            <a href="classArcas.php" class="glade-button"><i class=""></i> Arcaş</a>
            <a href="classVrajitor.php" class="glade-button"><i class=""></i> Vrăjitor</a>
            <a href="classInvocator.php" class="glade-button"><i class=""></i> Invocator</a>
            <a href="classFermecator.php" class="glade-button"><i class=""></i> Fermecator</a>
            <a href="classVindecator.php" class="glade-button"><i class=""></i> Vindecător</a>
        </div>
        <a href="classes.php" class="glade-button"><i class=""></i> Informatii clase</a> 
        <a href="#" class="glade-button">The Blooming Glade</a> <!--de facut link la alta pagina de net "www.thebloomingGlade.com sau .ro-->
        <button class="subnav-link"><i class="fa fa-search"></i> Cauta in web site:  </button>
        <!--<form action="../resurse/search.php" class="">
              <input type="text" placeholder="Cauta in site.." name="search" class="">
            </form>
            <button type="submit" class="" id="myButton" name="searchSubmit"><i class="fa fa-search"></i></button>-->
      </div>
      </div>
      <div>
      <button class="navbtn" onclick="openSubnav(event, 'social')"><i class="fa fa-hashtag"></i> Social <i class="fa fa-caret-down"></i></button>
      <div class="subnav-content glade-card" id="social">
        <a href="http://www.facebook.com/" target="_blank" class="glade-button"><i class="fa fa-facebook-official"> facebook</i></a>
        <a href="http://www.instagram.com/" target="_blank" class="glade-button"><i class="fa fa-instagram"> Instagram</i></a>
        <a href="http://www.pinterest.com/" target="_blank" class="glade-button"><i class="fa fa-pinterest-p"> Pinterest</i></a>
        <a href="http://www.twitter.com/" target="_blank" class="glade-button"><i class="fa fa-twitter"> Twitter</i></a>
        <a href="http://www.linkedin.com/" target="_blank" class="glade-button"><i class="fa fa-linkedin"> Linkedin</i></a>
      </div>
      </div>
    </div>
  </div>
</nav>









      <!--de umblat aici 14.11.2020
        
        /*
          if(isset($_GET['signup'])){
            $signupCheck = $_GET['signup'];
            if($signupCheck != "success") {
            echo '<script type="text/javascript">
                  document.getElementById("signupModalForm").style.display="block";
                  </script>';
            }
          }*/
        
  -->