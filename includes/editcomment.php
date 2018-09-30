<?php
  date_default_timezone_set('Europe/Bucharest');
  include '../includes/dbh.inc.php';
  include '../includes/comments.inc.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../includes/glade.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
    $cid = $_POST['cid'];
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];
    $commentPage = $_POST['commentPage'];

    echo "<form method='POST' action='".editComments($conn, $commentPage)."'>
            <input type='hidden' name='cid' value='".$cid."'>
            <input type='hidden' name='uid' value='".$uid."'>
            <input type='hidden' name='date' value='".$date."'>
            <input type='hidden' name='commentPage' value='".$commentPage."'>
            <textarea  rows='10' cols='107' name='message'>".$message."</textarea></br>
            <button name='commentSubmit' type='submit'>Edit</button>
        </form>";
?>
  </body>
</html>
