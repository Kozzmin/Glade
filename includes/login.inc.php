<?php

session_start();
if (isset($_POST['submit'])){ //daca este apasat butonul submit
  include 'dbh.inc.php'; //conectiunea la baza de date

  $uid = mysqli_real_escape_string($conn, $_POST['uid']); // variabila $uid primeste informatia din formular cu valoarea input - uid// variabila $uid primeste informatia din formular cu valoarea input - uid
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);// variabila $pwd primeste informatia din formular cu valoarea input - pwd

  //error handlers
  //check if inputs are EMPTY

  if(empty($uid) || empty($pwd)){ // daca parola si username sunt EMPTY imputurile
    header("Location: ../index.php?login=empty"); // se executa trimiterea la pagina de login
    exit();
  } else { //daca nu sunt EMPTY inputurile si daca de username exista in baza mea de date
    $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'"; // creem un query pt selectarea  usernameului
    $result = mysqli_query($conn, $sql); // executam queriul
    $resultCheck = mysqli_num_rows($result);//verficare a randurilor din query
    if ($resultCheck < 1) { //daca nu s-a gasit nimic in baza de date
      header("Location: ../index.php?login=error");
      exit();
    } else { // daca s-a gasit in baza de date
      if ($row = mysqli_fetch_assoc($result)) { //preia rezultatele din $result in forma de matrice
      //de hashing the password  + verificarea parolei
      $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
      if($hashedPwdCheck == false){ //daca nu se gaseste parola in baza de date
        header("Location: ../index.php?login=error");
        exit();
      } elseif($hashedPwdCheck == true) { //daca parola se gasestein baza de date
        //logarea userlului
        $_SESSION['u_id'] = $row['user_id'];
        $_SESSION['u_first'] = $row['user_first'];
        $_SESSION['u_last'] = $row['user_last'];
        $_SESSION['u_email'] = $row['user_email'];
        $_SESSION['u_uid'] = $row['user_uid'];
        header("Location: ../index.php?login=success");
        exit();
      }
      }
    }
  }
} else {
  header("Location: ../index.php?login=error");
  exit();
}
