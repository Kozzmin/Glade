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
      <p><i class="fa fa-envelope fa-fw glade-xxlarge glade-margin-right"> </i> E-mail: emailfirma@yahoo.com</p>
      <br>

      <form action="includes/email.inc.php" target="_blank" method="POST">
        <p>
          <input type="text" name="name" placeholder="Nume" class="glade-input glade-border" autofocus required/>
        </p>
        <p>
          <input type="text" name="email" placeholder="E-mail" class="glade-input glade-border" required/>
        </p>
        <p>
          <input type="text" name="subject" placeholder="Subiect" class="glade-input glade-border" required/>
        </p>
        <p>
          <textarea name="message" cols="5" rows="4" style="resize:none;" maxlength=350 class="glade-input glade-border" placeholder="Mesaj">
          </textarea>
        </p>

        <p>
          <button class="glade-button glade-green" type="submit" name="contactEmail" required>
            <i class="fa fa-paper-plane"> TRIMITE MESAJ</i> 
          </button>
        </p>

      </form>
    </div>
    <div class="glade-half">
      <!-- Add Google Maps ---------------------------------------------------------------------------------------------->
      <div id="googleMap" class="glade-greyscale-max" style="width:100%;height:525px;"></div>
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

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIAhr6v7wtJPArkOvCX5M0AfgalhkTsAY&callback=myMap"></script>


<?php
  include_once 'assets/footer.php';
?>
