<?php

if (isset($_POST['submit'])){ //daca este apasat butonul submit-
  include_once 'dbh.inc.php'; // ne connectam la  baza de date


// mysqli_real_escape_string este o protectie anti code injection
  $first = mysqli_real_escape_string($conn, $_POST['first']); // variabila $first primeste informatia din formular cu valoarea input - first
  $last = mysqli_real_escape_string($conn, $_POST['last']);  //variabila $last primeste informatia din formular cu valoarea input - last
  $email = mysqli_real_escape_string($conn, $_POST['email']); //variabila $email primeste informatia din formular cu valoarea input - email
  $uid = mysqli_real_escape_string($conn, $_POST['uid']); // variabila $uid primeste informatia din formular cu valoarea input - uid
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']); //variabila $pwd primeste informatia din formular cu valoarea input - password
  $pwdRepeat = mysqli_real_escape_string($conn, $_POST['pwdRepeat']);


  if(!$pwd == $pwdRepeat){
    header("Location: ../index.php?signup=differentpasswords"); //verificarea parolei sa nu fie gresita
    exit();
  }

  //error handlers
  //check for empty fields
  if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) { // daca sunt EMPTY inputurile
    header("Location: ../index.php?signup=empty"); //te trimit la locatia signup.php si am acest signup=empty pt medota GET
    exit();
  } else {
    //check if  input characters are valid

    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) { //acest flitru returneaza False daca caracterele din $first si $last sunt invalide
      header("Location: ../index.php?signup=invalid"); //te trimit la locatia signup.php si am acest signup=invalid pt medota GET
      exit();
    } else {
      // check if email is valide

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // daca  nu este invalid  emailul returneaza false
        header("Location: ../index.php?signup=email"); //te trimit la locatia signup.php si am acest signup=email pt medota GET
        exit();
      } else { // daca este valid emailul

      $sql = "SELECT * FROM users WHERE user_uid='$uid'"; // facem un query in baza de date pt a verifica daca
      $result = mysqli_query($conn, $sql); //rezultatul queriului
      $resultCheck = mysqli_num_rows($result); //veriicare a randurilor din query

      if ($resultCheck > 0) {
        header("Location: ../index.php?signup=usertaken"); //te trimit la locatia signup.php si am acest signup=usertaken pt medota GET
        exit();
      } else {
        //hashing the password
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        //insert de user into the database
        $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd') ;";
        mysqli_query($conn, $sql);
        header("Location: ../index.php?signup=success"); //te trimit la locatia signup.php si am acest signup=success pt medota GET pt a-l instiinta pe user ca este logat
        exit();
      }
        }
      }
    }



} else { // daca nu este apasat butonul submit
  header("Location: ../index.php"); //te trimit la locatia signup.php
  exit();
}
