// Get the modal form
function openLoginModal(event) {
  var modalLogin = document.getElementById("loginModalForm");
  modalLogin.style.display = "block";
}
function openSignupModal(event) {
  var modalSignup = document.getElementById("signupModalForm");
  modalSignup.style.display = "block";
}

function closeModalLogin(event) {
  var modalLogin = document.getElementById("loginModalForm");
  modalLogin.style.display = "none";
}
function closeModalSignup(event) {
  var modalSignup = document.getElementById("signupModalForm");
  modalSignup.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
function hideLogin(e) {
  if (e.target == modalLogin || e.target == modalSignup) {
    modalLogin.style.display = "none";
    modalSignup.style.display = "none";
  }
}

//navbar
//on scroll navbar sticky
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    document.getElementById("navbar").style.bottom = "0";
  } else {
    document.getElementById("navbar").style.bottom = "-100px";
  }
}
//overlay navigation
function openNav() {
  document.getElementById("navOverlay").style.width = "100%";
}

function closeNav() {
  document.getElementById("navOverlay").style.width = "0%";
}

//overlay links
function openSubnav(evt, id) {
  var i, subnav_content, navbtn;

  subnav_content = document.getElementsByClassName("subnav-content");
  for (i = 0; i < subnav_content.length; i++) {
    subnav_content[i].style.display = "none";
  }

  navbtn = document.getElementsByClassName("navbtn");
  for (i = 0; i < navbtn.length; i++) {
    navbtn[i].className = navbtn[i].className.replace(" active", "");
  }

  document.getElementById(id).style.display = "flex";
  evt.currentTarget.className += " active";
}
// subnav-game
function openSubnavGame(evt, id) {
  var i, subnav_game, sublink;

  subnav_game = document.getElementsByClassName("subnav-game");
  for (i = 0; i < subnav_game.length; i++) {
    subnav_game[i].style.display = "none";
  }

  sublink = document.getElementsByClassName("subnav-link");
  for (i = 0; i < sublink.length; i++) {
    sublink[i].className = sublink[i].className.replace(" active", "");
  }

  document.getElementById(id).style.display = "block"; //original era block
  evt.currentTarget.className += " active";
}
//subnav-races
function openSubnavRace(evt, id) {
  var i, subnav_game, sublink;

  subnav_game = document.getElementsByClassName("subnav-game");
  for (i = 0; i < subnav_game.length; i++) {
    subnav_game[i].style.display = "none";
  }

  sublink = document.getElementsByClassName("subnav-link");
  for (i = 0; i < sublink.length; i++) {
    sublink[i].className = sublink[i].className.replace(" active", "");
  }

  document.getElementById(id).style.display = "grid"; //original era block
  evt.currentTarget.className += " active";
}

//aboutcompany.php
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slidesCompany");
  var dots = document.getElementsByClassName("demoCompany");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  captionText.innerHTML = dots[slideIndex - 1].alt;
}

////team.php
/*
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slidesCompany");
  var dots = document.getElementsByClassName("demoCompany");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  captionText.innerHTML = dots[slideIndex - 1].alt;
}
*/
