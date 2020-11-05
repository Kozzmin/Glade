<div id="loginModalForm" class="modal">

    <form class="modal-content animate" action="includes/login.inc.php" method="POST">
      <div class="imgcontainer">
        <span onclick="document.getElementById('loginModalForm').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="resurse/avatar.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">

        <input type="text" placeholder="Introduceti numele de utilizator" name="uid" required>
        <input type="password" placeholder="Introdu parola" name="pwd" required>

        <button type="submit" name="submit">Autentificare</button>

      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('loginModalForm').style.display='none'" class="cancelbtn">Anulare</button>
        <span class="pwd">Ai uitat <a href="#">parola?</a></span>
      </div>
    </form>

  </div>
