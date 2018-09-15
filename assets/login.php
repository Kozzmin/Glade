<div id="loginModalForm" class="modal">

    <form class="modal-content animate" action="../includes/login.inc.php">
      <div class="imgcontainer">
        <span onclick="document.getElementById('loginModalForm').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="..includes/avatar.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username bla" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
        <button type="submit">Login</button>

      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('loginModalForm').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
  </div>
