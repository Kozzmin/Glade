<div id="loginModalForm" class="modal">

    <form class="modal-content animate" action="includes/login.inc.php" method="POST">
      <div class="imgcontainer">
        <span onclick="document.getElementById('loginModalForm').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="resurse/avatar.png" alt="Avatar" class="avatar">
        </div>

      <div class="container">

          <input type="text" placeholder="Enter Username" name="uid" required>
          <input type="password" placeholder="Enter Password" name="pwd" required>

          <button type="submit" name="submit">Login</button>

        </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('loginModalForm').style.display='none'" class="cancelbtn">Cancel</button>
    <span class="pwd">Forgot <a href="#">password?</a></span>
        </div>
    </form>

  </div>
