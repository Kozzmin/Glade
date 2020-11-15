// Get the modal
var modalLogin = document.getElementById('loginModalForm');
var modalSignup = document.getElementById('signupModalForm');

// When the user clicks anywhere outside of the modal, close it
function hideLogin(e) {
  if (e.target == modalLogin || e.target == modalSignup) {
    modalLogin.style.display = 'none';
    modalSignup.style.display = 'none';
  }
}
// Close the dropdown if the user clicks outside of it
function hideGameMenu(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById('myDropdown');
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}

function myFunction(e) {
  document.getElementById('myDropdown').classList.toggle('show');
}
