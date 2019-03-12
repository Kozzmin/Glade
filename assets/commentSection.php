<?php
include 'includes/dbh.inc.php';
include 'includes/comments.inc.php';


if(isset($_SESSION['u_id'])){
$userId = $_SESSION['u_uid'];
$currentPage = explode(".", basename($_SERVER['PHP_SELF']), 2)[0];//Obțineți numele paginii curent fără partea .php
//explode: împarte șirul în matrice, după caracter; atunci putem obține numele fișierului fără .php

echo "<form action='".setComments($conn, $currentPage)."' method='POST' class='comment-box'>
        <input type='hidden' name='uid' value='$userId'>
        <input type='hidden' name='date' value='". date('Y-m-d H:i:s')."'>
        <textarea rows='5' cols='107' placeholder='Please comment...' name='message'></textarea></br>
        <button name='commentSubmit' type='submit' class='glade-button glade-green glade-hover-green:hover'>Comment</button>
      </form>";
}else {
  echo "</br></br>You need to login to comment!</br></br>";
}


   getComments($conn, $currentPage);
?>
