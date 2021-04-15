
<div id="signupModalForm" class="modal">
  
  

    <form class="formSignupContainer animate bgimg-1-opacity" action="#" method="POST"> <!--includes/signup.inc.php-->
      
      <h1 class="" style="text-align:center">Inscrie-te</h1>
      <h4 class="" style="text-align:center">Vă rugăm să completați acest formular pentru a vă crea un cont</h4>

      <input type="text" placeholder="Nume" name="first" autocomplete required>
      <input type="text" placeholder="Prename" name="last" autocomplete required>
      <input type="text" placeholder="Introduceți adresa de email" name="email" autocomplete required>
      <input type="text" placeholder="Nume de utilizator" name="uid" autocomplete required>
      <input type="password" placeholder="Introduceti parola" name="pwd" required>
      <input type="password" placeholder="Repeta parola" name="pwdRepeat" required>
      <!--de facut pagina termene si conditii care sa fie in concordanta cu legea actuala  03/03/2021-->
      <p>Prin crearea unui cont sunteți de acord cu <a href="#" style="color:dodgerblue">Termenii și confidențialitatea noastră</a>.</p>

      <div class="clearFormButton">
        <button type="button" onclick="closeModalSignup()" class="cancelbtn">Anulare</button>
        <button type="submit" name="submit">Inscrie-te</button>
      </div>

      </form>

  </div>
