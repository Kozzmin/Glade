<?php
include_once 'includes/dbh.inc.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <style>
      .error {
        color: red;
      }
      .success {
        color: green;
      }
      body{
        display: block;
      }

    </style>

    <meta charset="utf-8"/>
    <title></title>
  </head>

  <body>

    <h2>Sign up</h2>
    <form action="includes/signup.inc.php" method="POST">

      <?php
        if(isset($_GET['first'])) {
          $first = $_GET['first'];
          echo '<input type="text" name="first" placeholder="Firstname" value="'.$first.'" /></br>';
        }
        else {
          echo '<input type="text" name="first" placeholder="Firstname"/></br>';
        }

        if(isset($_GET['last'])){
          $last = $_GET['last'];
          echo '<input type="text" name="last" placeholder="Lastname" value="'.$last.'" /></br>';
        }
        else {
          echo '<input type="text" name="last" placeholder="Lastname"/></br>';
        }
      ?>

      <input type="text" name="email" placeholder="E-mail"/></br>

      <?php
      if(isset($_GET['uid'])){
        $uid = $_GET['uid'];
        echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'" /></br>';
      }
      else {
        echo '<input type="text" name="uid" placeholder="Username"/></br>';
      }

      ?>
      <input type="password" name="pwd" placeholder="Password"/></br>

      <button type="submit" name="submit">Sign up</button></br>
    </form>

    <?php


//////////////////second method of error  handling
      if(!isset($_GET['signup'])){
          exit();
      }
      else {
        $signupCheck = $_GET['signup'];
        if($signupCheck == "empty"){
          echo "<p class=error>You did not fill in all the fields!</p>";
          exit();
        }elseif ($signupCheck =="char") {
          echo "<p classs=error>You used invalid characters!</p>";
          exit();
        }elseif ($signupCheck =="email") {
          echo "<p class=error>You did not fill in the field with a valid email address!</p>";
          exit();
        }elseif ($signupCheck == "success") {
          echo "<p class=succes>You are signed up!</p>";
          exit();
        }
      }


















/*

//////////////////first method of error  handleing
        /*$fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if(strpos($fullURL, "signup=empty") == true){
          echo "<p class=error>You did not fill in all the fields!</p>";
          exit();
        }else{
          if(strpos($fullURL, "signup=char") == true){
            echo "<p classs=error>You used invalid characters!</p>";
            exit();
          }
        }else{
          if(strpos($fullURL, "signup=email") == true){
            echo "<p class=error>You did not fill in the field with a valid email address!</p>";
            exit();
          }
        }else{
          if(strpos($fullURL, "signup=success") == true){
            echo "<p class=succes>You are signed up!</p>";
            exit();
          }
        }


  */    ?>


    <?php

    // select data from database with a query
    /*  $sql = "SELECT * FROM users WHERE user_uid='Admin';";
      $result = mysqli_query($conn, $sql);

      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0 ) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo $row['user_uid'] . "</br>";
        }
      }





*/
     ?>

  </body>
</html>
