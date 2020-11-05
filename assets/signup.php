
<div id="signupModalForm" class="modal">
  <span onclick="document.getElementById('signupModalForm').style.display='none'" class="close" title="Close Modal">&times;</span>

    <form class="modal-content" action="includes/signup.inc.php" method="POST">
      
      <div class="container">
          <h1  style="text-align:center">Inscrie-te</h1>
          <h4 style="text-align:center">Vă rugăm să completați acest formular pentru a vă crea un cont</h4>
          <hr>

          <input type="text" placeholder="Nume" name="first" required>
          <input type="text" placeholder="Prename" name="last" required>
          <input type="text" placeholder="Introduceți adresa de email" name="email" required>
          <input type="text" placeholder="Nume de utilizator" name="uid" required>
          <input type="password" placeholder="Introdu parola" name="pwd" required>
          <input type="password" placeholder="Repeta parola" name="pwdRepeat" required>

          <p>Prin crearea unui cont sunteți de acord cu <a href="#" style="color:dodgerblue">Termenii și confidențialitatea noastră</a>.</p>

          <div class="clearfix">
            <button type="button" onclick="document.getElementById('signupModalForm').style.display='none'" class="cancelbtn">Anulare</button>
            <button type="submit" class="signupbtn" name="submit">Inscrie-te</button>
          </div>

        </div>

      </form>

  </div>
