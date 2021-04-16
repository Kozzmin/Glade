<div id="loginModalForm" class="modal">

  <form class="modal-content animate bgimg-1-opacity" action="#" method="POST"> <!--includes/login.inc.php-->
  <h1 class="" style="text-align:center">Autentificate</h1>
      <h4 class="" style="text-align:center">Vă rugăm să completați acest formular pentru a vă conecta la cont</h4>
    <div class="imgcontainer">
      <img src="resurse/photos/stuff/avatarForm.png" alt="Avatar" class="avatar">
    </div>

    <section class="form-container">
      <div class="formContainerDiv">                     
        <input type="text" placeholder="Introduceti nume de utilizator" name="uid" autocomplete required>
        <input type="password" placeholder="Introduceti parola" name="pwd" required> 
      </div>
      <div class="formContainerDiv">
        <button type="button" onclick="closeModalLogin()" class="cancelbtn">Anulare</button>                                          
        <button type="submit" name="submit" class="isDisabled">Autentificare</button> 
        <span class="pwd">Ai uitat <a href="#">parola?</a></span>
        <!--de facut ai uitat parola pagina interogare sql/baza de date 03/03/2021 -->                
      </div>
    </section>
  </form>

  </div>
