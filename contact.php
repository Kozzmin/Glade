<?php
  include_once 'assets/header.php';
  include_once 'assets/navbar.php';
 ?>


<div class="glade-container glade-light-grey opacity" style="padding:128px 16px" id="contact">
  <h1 class="glade-center">CONTACT</h1>
  <p class="glade-center glade-large">Să luăm legătura. Trimite-ne un mesaj:</p>
  <div class="glade-row-padding" style="margin-top:64px">
    <div class="glade-half">
      <p><i class="fa fa-map-marker fa-fw glade-xxlarge glade-margin-right"></i> Bucuresti, RO</p>
      <p><i class="fa fa-phone fa-fw glade-xxlarge glade-margin-right"></i> Telefon: +40 724746802</p>
      <p><i class="fa fa-envelope fa-fw glade-xxlarge glade-margin-right"> </i> E-mail: sandorgabrielcosmim@yahoo.com</p>
      <br>
<!--de modificat numele din formulare, pus poza cu locatia 
poza cu locatia lui Adrian mecanicul si cautat cum facem un server de e-mail 28.10.2020-->
      <form action="includes/email.inc.php" target="_blank" method="POST">
        <p><input class="glade-input glade-border" type="text" placeholder="Name" required name="Nume"/></p>
        <p><input class="glade-input glade-border" type="text" placeholder="Email" required name="E-mail"/></p>
        <p><input class="glade-input glade-border" type="text" placeholder="Subject" required name="Subiect"/></p>
        <p><textarea class="glade-input glade-border" placeholder="Message" required name="Mesaj"></textarea></p>

        <p>
          <button class="glade-button glade-green" type="submit" name="contactEmail">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form>
    </div>
    <div class="glade-half">
      <!-- Add Google Maps ---------------------------------------------------------------------------------------------->
      <div id="googleMap" class="glade-greyscale-max" style="width:100%;height:510px;"></div>
    </div>
  </div>
</div>



<script>


function myMap()
{
  myCenter=new google.maps.LatLng(44.439663, 26.096306);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function glade_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function glade_close() {
    mySidebar.style.display = "none";
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIAhr6v7wtJPArkOvCX5M0AfgalhkTsAY&callback=myMap"></script>


<?php
  include_once 'assets/footer.php';
 ?>
