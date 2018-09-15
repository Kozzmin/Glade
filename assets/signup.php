
<div id="signupModalForm" class="modal">
  <span onclick="document.getElementById('signupModalForm').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content" action="../includes/signup.inc.php" method="POST">
      <div class="container">
          <h1  style="text-align:center">Sign Up</h1>
          <p style="text-align:center">Please fill in this form to create an account.</p>
          <hr>
          <?php
        
          ?>
          <input type="text" placeholder="First Name" name="first" required>

          <input type="text" placeholder="Last Name" name="last" required>

          <input type="text" placeholder="Enter Email" name="email" required>

          <input type="text" placeholder="User Name" name="uid" required>

          <input type="password" placeholder="Enter Password" name="pwd" required>


          <input type="password" placeholder="Repeat Password" name="pwdRepeat" required>



          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>


          <div class="clearfix">
            <button type="button" onclick="document.getElementById('signupModalForm').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn" name="submit">Sign Up</button>
          </div>
        </div>
      </form>
  </div>
