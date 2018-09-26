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




<div class="glade-container opacity" style="padding:128px 16px" id="work">
  <h3 class="glade-center">OUR WORK</h3>
  <p class="glade-center glade-large">What we've done for people</p>

  <div class="glade-row-padding" style="margin-top:64px">
    <div class="glade-col l3 m6">
      <img src="/gladeimages/tech_mic.jpg" style="width:100%" onclick="onClick(this)" class="glade-hover-opacity" alt="A microphone">
    </div>
    <div class="glade-col l3 m6">
      <img src="/gladeimages/tech_phone.jpg" style="width:100%" onclick="onClick(this)" class="glade-hover-opacity" alt="A phone">
    </div>
    <div class="glade-col l3 m6">
      <img src="/gladeimages/tech_drone.jpg" style="width:100%" onclick="onClick(this)" class="glade-hover-opacity" alt="A drone">
    </div>
    <div class="glade-col l3 m6">
      <img src="/gladeimages/tech_sound.jpg" style="width:100%" onclick="onClick(this)" class="glade-hover-opacity" alt="Soundbox">
    </div>
  </div>

  <div class="glade-row-padding glade-section">
    <div class="glade-col l3 m6">
      <img src="/gladeimages/tech_tablet.jpg" style="width:100%" onclick="onClick(this)" class="glade-hover-opacity" alt="A tablet">
    </div>
    <div class="glade-col l3 m6">
      <img src="/gladeimages/tech_camera.jpg" style="width:100%" onclick="onClick(this)" class="glade-hover-opacity" alt="A camera">
    </div>
    <div class="glade-col l3 m6">
      <img src="/gladeimages/tech_typewriter.jpg" style="width:100%" onclick="onClick(this)" class="glade-hover-opacity" alt="A typewriter">
    </div>
    <div class="glade-col l3 m6">
      <img src="/gladeimages/tech_tableturner.jpg" style="width:100%" onclick="onClick(this)" class="glade-hover-opacity" alt="A tableturner">
    </div>
  </div>
</div>

<?php
  include_once 'statistic.php';
  include_once 'footer.php';
 ?>
