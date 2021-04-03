

<?php
  include_once 'assets/header.php';
  include_once 'assets/navbar.php';
?>
<h3 class="glade-center">DESPRE COMPANIE</h3>
    <p class="glade-center glade-large">Caracteristici cheie ale companiei noastre</p>

<div class="containerCompany bgimg-1-opacity extraSpace">

  <div class="slidesCompany">
    <div class="numberTextCompany">1 / 6</div> 
    <img src="./resurse/photos/stuff/negative_space.jpg" class="imgCompany" alt="Fara spatiu negativ">
    <div class="companyImgTextBlock">
      <p class="glade-large"><i class="fa fa-desktop glade-jumbo"></i> Receptiv</p>
    </div>
  </div>

  <div class="slidesCompany">
    <div class="numberTextCompany">2 / 6</div>
    <img src="./resurse/photos/stuff/teamMeetingGirl.jpg" class="imgCompany" alt="Toti suntem egali">
    <div class="companyImgTextBlock">
      <p class="glade-large"><i class="fa fa-desktop glade-jumbo"></i> Responsabil</p>
    </div>
  </div>

  <div class="slidesCompany">
    <div class="numberTextCompany">3 / 6</div>
    <img src="./resurse/photos/stuff/teamMeetingBoy.jpg" class="imgCompany" alt="Discutii elocvente">
    <div class="companyImgTextBlock">
      <p class="glade-large"><i class="fa fa-heart glade-jumbo"></i> Pasiune</p>
    </div>
  </div>

  <div class="slidesCompany">
    <div class="numberTextCompany">4 / 6</div>
    <img src="./resurse/photos/stuff/proiectareLunara.jpg" class="imgCompany" alt="Proiectare lunara">
    <div class="companyImgTextBlock">
      <p class="glade-large"><i class="fa fa-heart glade-jumbo"></i> Proiectare</p>
    </div>
  </div>

  <div class="slidesCompany">
    <div class="numberTextCompany">5 / 6</div>
    <img src="./resurse/photos/stuff/teamUnited.jpg" class="imgCompany" alt="Luptam pentru o echipa unita">
    <div class="companyImgTextBlock">
      <p class="glade-large"><i class="fa fa-desktop glade-jumbo"></i> Adaptabil</p>
    </div>
  </div>

  <div class="slidesCompany">
    <div class="numberTextCompany">6 / 6</div>
    <img src="./resurse/photos/stuff/teamMeetingLeader.jpg" class="imgCompany" alt="Si tu poti conduce o echipa">
    <div class="companyImgTextBlock">
      <p class="glade-large"><i class="fa fa-heart glade-jumbo"></i> Sustinere</p>
      
    </div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-containerCompany"> 
    <p id="caption"></p>
  </div>

  <div class="rowCompany"> 
    <div class="columnCompany"> 
      <img class="demoOpacity cursor imgCompany" src="./resurse/photos/stuff/negative_space.jpg" onclick="currentSlide(1)" alt="Fara spatiu negativ"> 
    </div>

    <div class="columnCompany">
      <img class="demoOpacity cursor imgCompany" src="./resurse/photos/stuff/teamMeetingGirl.jpg" onclick="currentSlide(2)" alt="Toti suntem egali">
    </div>

    <div class="columnCompany">
      <img class="demoOpacity cursor imgCompany" src="./resurse/photos/stuff/teamMeetingBoy.jpg" onclick="currentSlide(3)" alt="Discutii elocvente">
    </div>

    <div class="columnCompany">
      <img class="demoOpacity cursor imgCompany" src="./resurse/photos/stuff/proiectareLunara.jpg" onclick="currentSlide(4)" alt="Proiectare lunara">
    </div>

    <div class="columnCompany">
      <img class="demoOpacity cursor imgCompany" src="./resurse/photos/stuff/teamUnited.jpg" onclick="currentSlide(5)" alt="Luptam pentru o echipa unita">
    </div>  

    <div class="columnCompany">
      <img class="demoOpacity cursor imgCompany" src="./resurse/photos/stuff/teamMeetingLeader.jpg" onclick="currentSlide(6)" alt="Si tu poti conduce o echipa">
    </div>

  </div>

</div>

<?php
  include_once 'assets/footer.php';
?>
