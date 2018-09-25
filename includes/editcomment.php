<?php
  date_default_timezone_set('Europe/Bucharest');
  include '../includes/dbh.inc.php';
  include '../includes/comments.inc.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
    $cid = $_POST['cid'];
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];


    echo "<form method='POST' action='".editComments($conn)."'>
            <input type='hidden' name='cid' value='".$cid."'>
            <input type='hidden' name='uid' value='".$uid."'>
            <input type='hidden' name='date' value='".$date."'>
            <textarea name='message'>".$message."</textarea></br>
            <button name='commentSubmit' type='submit'>Edit</button>
        </form>";
?>
  </body>
</html>
