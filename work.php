<?php
  include_once 'assets/header.php';
  include_once 'assets/navbar.php';
?>


<div class="glade-container bgimg-1-opacity" style="padding:128px 16px" id="work">
  <h3 class="glade-center">MUNCA NOASTRA</h3>
  <p class="glade-center glade-large">Ce am făcut pentru clienti</p>

  <div class="glade-row-padding" style="margin-top:64px">
    <div class="glade-col l3 m6">
      <img src="resurse/photos/stuff/amicrophone.jpg" style="width:100%" class="glade-hover-opacity" alt="A microphone">
    </div>
    <div class="glade-col l3 m6">
      <img src="resurse/photos/stuff/aphone.jpg" style="width:100%" class="glade-hover-opacity" alt="A phone">
    </div>
    <div class="glade-col l3 m6">
      <img src="resurse/photos/stuff/adrone.jpg" style="width:100%" class="glade-hover-opacity" alt="A drone">
    </div>
    <div class="glade-col l3 m6">
      <img src="resurse/photos/stuff/asandbox.jpg" style="width:100%" class="glade-hover-opacity" alt="Soundbox">
    </div>
  </div>

  <div class="glade-row-padding glade-section">
    <div class="glade-col l3 m6">
      <img src="resurse/photos/stuff/atable.jpg" style="width:100%"  class="glade-hover-opacity" alt="A tablet">
    </div>
    <div class="glade-col l3 m6">
      <img src="resurse/photos/stuff/acamera.jpg" style="width:100%" class="glade-hover-opacity" alt="A camera">
    </div>
    <div class="glade-col l3 m6">
      <img src="resurse/photos/stuff/atypewriter.jpg" style="width:100%" class="glade-hover-opacity" alt="A typewriter">
    </div>
    <div class="glade-col l3 m6">
      <img src="resurse/photos/stuff/atableturner.jpg" style="width:100%" onclick="onClick(this)" class="glade-hover-opacity" alt="A tableturner">
    </div>
  </div>
</div>

<!--grid container-->
<section class="glade-light-grey extraSpace container-xx-grid">
  <div class="glade-row-padding">
      <div class="glade-col m6">
        <h3>Cunoastem designul.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
      </div>
      <div class="glade-col m6">
        <img class="glade-image glade-round-large"  id="imgPromo"src="resurse/photos/stuff/field_ofpurplegreen.jpg" alt="A field of purple flowers">
        <div id="myPromoModal" class="modalPromo">
          <span class="closePromo">&times;</span>
          <img class="modalPromo-content" id="img01">
          <div id="captionPromo"></div>
        </div>
      </div>
    </div>
    
    <div class="glade-row-padding">
      <div class="glade-col m6">
        <h3>Cunoastem designul.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
      </div>
      <div class="glade-col m6">
        <img class="glade-image glade-round-large" id="imgPromo" src="resurse/photos/stuff/trapped_trees.jpg" alt="Trees trapped in snow">
        <div id="myPromoModal" class="modalPromo">
          <span class="closePromo">&times;</span>
          <img class="modalPromo-content" id="img02">
          <div id="captionPromo"></div>
        </div>
      </div>
    </div>

    <div class="glade-row-padding">
      <div class="glade-col m6">
        <h3>Cunoastem designul.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
      </div>
      <div class="glade-col m6">
        <img class="glade-image glade-round-large" id="imgPromo" src="resurse/photos/stuff/afield_ofpoppys.jpg" alt="Amazing shore">
        <div id="myPromoModal" class="modalPromo">
          <span class="closePromo">&times;</span>
          <img class="modalPromo-content" id="img03">
          <div id="captionPromo"></div>
        </div>
      </div>
    </div>

    <div class="glade-row-padding">
      <div class="glade-col m6">
        <h3>Cunoastem designul.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
      </div>
      <div class="glade-col m6">
        <img class="glade-image glade-round-large" id="imgPromo" src="resurse/photos/stuff/blooming_flower.jpg" alt="Blooming flower">
        <div id="myPromoModal" class="modalPromo">
          <span class="closePromo">&times;</span>
          <img class="modalPromo-content" id="img04">
          <div id="captionPromo"></div>
        </div>
      </div>
    </div>

    <div class="glade-row-padding">
      <div class="glade-col m6">
        <h3>Cunoastem designul.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
      </div>
      <div class="glade-col m6">
        <img class="glade-image glade-round-large" id="imgPromo" src="resurse/photos/stuff/albino_buck.jpg" alt="An Albino buck">
        <div id="myPromoModal" class="modalPromo">
          <span class="closePromo">&times;</span>
          <img class="modalPromo-content" id="img05">
          <div id="captionPromo"></div>
        </div>
      </div>
    </div>

    <div class="glade-row-padding">
      <div class="glade-col m6">
        <h3>Cunoastem designul.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
      </div>
      <div class="glade-col m6">
        <img class="glade-image glade-round-large" id="imgPromo" src="resurse/photos/stuff/majestic_waterfall.jpg" alt="Majestic waterfall">
        <div id="myPromoModal" class="modalPromo">
          <span class="closePromo">&times;</span>
          <img class="modalPromo-content" id="img06">
          <div id="captionPromo"></div>
        </div>
      </div>
    </div>
    <div class="glade-row-padding">
    <div class="glade-col m6"> 
      <h3>Cunoastem designul.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="glade-col m6 ">
      <img class="glade-image glade-round-large" id="imgPromo" src="resurse/photos/stuff/green_forest_shadows.jpg" alt="Green forest shadows">
      <div id="myPromoModal" class="modalPromo">
        <span class="closePromo">&times;</span>
        <img class="modalPromo-content" id="img07">
        <div id="captionPromo"></div>
      </div>
    </div>
  </div>


  <div class="glade-row-padding">
    <div class="glade-col m6">
      <h3>Cunoastem designul.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="glade-col m6">
      <img class="glade-image glade-round-large" id="imgPromo" src="resurse/photos/stuff/forest_rays.jpg" alt="Forest sun rays">
      <div id="myPromoModal" class="modalPromo">
        <span class="closePromo">&times;</span>
        <img class="modalPromo-content" id="img08">
        <div id="captionPromo"></div>
      </div>
    </div>
  </div>

  <div class="glade-row-padding">
    <div class="glade-col m6">
      <h3>Cunoastem designul.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="glade-col m6">
      <img class="glade-image glade-round-large" id="imgPromo" src="resurse/photos/stuff/purple_flowers.jpg" alt="Purple flowers">
      <div id="myPromoModal" class="modalPromo">
        <span class="closePromo">&times;</span>
        <img class="modalPromo-content" id="img09">
        <div id="captionPromo"></div>
      </div>
    </div>
  </div>
  <div class="glade-row-padding">
    <div class="glade-col m6">
      <h3>Cunoastem designul.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="glade-col m6">
      <img class="glade-image glade-round-large" id="imgPromo" src="resurse/photos/stuff/alonely_poppy_flower.jpg" alt="A lonely poppie">
      <div id="myPromoModal" class="modalPromo">
        <span class="closePromo">&times;</span>
        <img class="modalPromo-content" id="img10">
        <div id="captionPromo"></div>
      </div>
    </div>
  </div>
  <div class="glade-row-padding">
    <div class="glade-col m6">
      <h3>Cunoastem designul.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="glade-col m6">
      <img class="glade-image glade-round-large" id="imgPromo" src="resurse/photos/stuff/dealing_with_roots.jpg" alt="Dealing with a lot of roots">
      <div id="myPromoModal" class="modalPromo">
        <span class="closePromo">&times;</span>
        <img class="modalPromo-content" id="img11">
        <div id="captionPromo"></div>
      </div>
    </div>
  </div>
  <div class="glade-row-padding">
    <div class="glade-col m6">
      <h3>Cunoastem designul.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="glade-col m6">
      <img class="glade-image glade-round-large" id="imgPromo" src="resurse/photos/stuff/lookingup_thetrees.jpg" alt="Looking up the trees in autumn">
      <div id="myPromoModal" class="modalPromo">
        <span class="closePromo">&times;</span>
        <img class="modalPromo-content" id="img12">
        <div id="captionPromo"></div>
      </div>
    </div>
  </div>
  </section>

<?php
  include_once 'assets/statistic.php';
  include_once 'assets/footer.php';
?>
