<?php
  include_once 'header.php';
  include_once 'navbar.php';
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="../glade.css">
   </head>
   <body>


<div class="glade-container glade-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="glade-center">CONTACT</h3>
  <p class="glade-center glade-large">Lets get in touch. Send us a message:</p>
  <div class="glade-row-padding" style="margin-top:64px">
    <div class="glade-half">
      <p><i class="fa fa-map-marker fa-fw glade-xxlarge glade-margin-right"></i> Chicago, US</p>
      <p><i class="fa fa-phone fa-fw glade-xxlarge glade-margin-right"></i> Phone: +00 151515</p>
      <p><i class="fa fa-envelope fa-fw glade-xxlarge glade-margin-right"> </i> Email: mail@mail.com</p>
      <br>
      <form action="/action_page.php" target="_blank">
        <p><input class="glade-input glade-border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="glade-input glade-border" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="glade-input glade-border" type="text" placeholder="Subject" required name="Subject"></p>
        <p><input class="glade-input glade-border" type="text" placeholder="Message" required name="Message"></p>
        <p>
          <button class="glade-button glade-black" type="submit">
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
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>


<?php
  include_once 'footer.php';
 ?>
