
<div id="signupModalForm" class="modal">
  
  

    <form class="modal-content animate" action="#" method="POST"> <!--includes/signup.inc.php-->
      
      <div class="container">
          <h1  style="text-align:center">Inscrie-te</h1>
          <h4 style="text-align:center">Vă rugăm să completați acest formular pentru a vă crea un cont</h4>

          <input type="text" placeholder="Nume" name="first" autocomplete required>
          <input type="text" placeholder="Prename" name="last" autocomplete required>
          <input type="text" placeholder="Introduceți adresa de email" name="email" autocomplete required>
          <input type="text" placeholder="Nume de utilizator" name="uid" autocomplete required>
          <input type="password" placeholder="Introdu parola" name="pwd" required>
          <input type="password" placeholder="Repeta parola" name="pwdRepeat" required>
          <!--de facut pagina termene si conditii care sa fie in concordanta cu legea actuala  03/03/2021-->
          <p>Prin crearea unui cont sunteți de acord cu <a href="#" style="color:dodgerblue">Termenii și confidențialitatea noastră</a>.</p>

          <div class="clearfix">
            <button type="button" onclick="closeModalSignup()" class="cancelbtn">Anulare</button>
            <button type="submit" name="submit">Inscrie-te</button>
            
          </div>

        </div>

      </form>

  </div>
