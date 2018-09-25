<?php
include '../includes/dbh.inc.php';
include '../includes/comments.inc.php';
//include '../includes/login.inc.php';

//if(isset($_SESSION['id'])){
echo "<form action='".setComments($conn)."' method='POST'>
        <input type='hidden' name='uid' value='Anonymous'>
        <input type='hidden' name='date' value='". date('Y-m-d H:i:s')."'>
        <textarea name='message' rows='8' cols='80'></textarea></br>
        <button name='commentSubmit' type='submit'>Comment</button>
      </form>";
//}else {
//  echo "</br></br>You need to login to comment!</br></br>";
//}


   getComments($conn);
?>
