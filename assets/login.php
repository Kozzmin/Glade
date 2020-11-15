<div id="loginModalForm" class="modal">

    <form class="modal-content animate" action="includes/login.inc.php" method="POST">
      <div class="imgcontainer">
        <img src="resurse/avatarform.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">                                                                           <!--Introducere informatii-->
        <input type="text" placeholder="Introduceti numele de utilizator" name="uid" required>
        <input type="password" placeholder="Introdu parola" name="pwd" required>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('loginModalForm').style.display='none'" class="cancelbtn">Anulare</button>                                                                                         <!--Anulare-->
        <button type="submit" name="submit">Autentificare</button>                                      <!--Submit-->
        <span class="pwd">Ai uitat <a href="#">parola?</a></span>                                       <!--Parola-->
      </div>
    </form>

  </div>
