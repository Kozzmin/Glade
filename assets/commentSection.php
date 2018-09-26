<?php
include '../includes/dbh.inc.php';
include '../includes/comments.inc.php';


if(isset($_SESSION['u_id'])){
echo "<form action='".setComments($conn)."' method='POST' class='comment-box'>
        <input type='hidden' name='uid' value='Anonymous'>
        <input type='hidden' name='date' value='". date('Y-m-d H:i:s')."'>
        <textarea rows='5' cols='107' placeholder='Please comment...' name='message'></textarea></br>
        <button name='commentSubmit' type='submit' class='glade-button glade-green glade-hover-green:hover'>Comment</button>
      </form>";
}else {
  echo "</br></br>You need to login to comment!</br></br>";
}


   getComments($conn);
?>
