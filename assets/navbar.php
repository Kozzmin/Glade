


<div class="glade-top">
  <div class="glade-bar glade-white glade-card" id="myNavbar">
    <a href="#home" class="glade-bar-item glade-button glade-wide">LOGO</a>
    <!-- Right-sided navbar links ------------------------------------------------------------->
    <div class="glade-right glade-hide-small">

      <button onclick="document.getElementById('loginModalForm').style.display='block'" class="glade-bar-item glade-button"> LOGIN</button>
      <button onclick="document.getElementById('signupModalForm').style.display='block'" class="glade-bar-item glade-button"> SIGN UP</button>

      <a href="#about" class="glade-bar-item glade-button">ABOUT</a>
      <a href="#team" class="glade-bar-item glade-button"><i class="fa fa-user"></i>TEAM</a>
      <a href="#work" class="glade-bar-item glade-button"><i class="fa fa-th"></i>WORK</a>
      <a href="#contact" class="glade-bar-item glade-button"><i class="fa fa-envelope"></i> CONTACT</a>
      <div class="search-container glade-button">
        <form action="/action_page.php" class="formSearch">
         <input type="text" placeholder="Search.." name="search" class="inputSearch">
         <button type="submit"><i class="fa fa-search buttonSearch"></i></button>
        </form>
      </div>
    </div>
    <?php
    include_once'login.php';
    include_once'signup.php';

    if(isset($_GET['signup'])){
      $signupCheck = $_GET['signup'];

      if($signupCheck != "success") {
        echo '<script type="text/javascript">
              document.getElementById("signupModalForm").style.display="block";
              </script>';

      }
    }
     ?>
    <script>
        // Get the modal
        var modalLogin = document.getElementById('loginModalForm');
        var modalSignup = document.getElementById('signupModalForm');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modalLogin || event.target8 == modalSignup) {
                modalLogin.style.display = "none";
                modalSignup.style.display = "none";
            }
        }
    </script>

</div>
</div>
