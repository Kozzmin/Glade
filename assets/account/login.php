<div id="loginModalForm" class="modal">

  <form class="modal-content animate" action="#" method="POST"> <!--includes/login.inc.php-->
    <div class="imgcontainer">
      <img src="resurse/photos/stuff/avatarForm.png" alt="Avatar" class="avatar">
    </div>
    <section class="form-container">
      <div class="container">                     
        <input type="text" placeholder="Introduceti nume de utilizator" name="uid" autocomplete required>
        <input type="password" placeholder="Introduceti parola" name="pwd" required> 
      </div>
      <div class="container">
        <button type="button" onclick="closeModalLogin()" class="cancelbtn">Anulare</button>                                          
        <button type="submit" name="submit" class="isDisabled">Autentificare</button> 
        <span class="pwd">Ai uitat <a href="#">parola?</a></span>
        <!--de facut ai uitat parola pagina interogare sql/baza de date 03/03/2021 -->                
      </div>
    </section>
  </form>

  </div>
