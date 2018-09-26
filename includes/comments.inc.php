<?php
function setComments($conn) { //functia seteaza commenturile
  if(isset($_POST['commentSubmit'])){ // daca este apasat butonul commentSubmit,
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $sql = "INSERT INTO comments(uid, date, message) VALUES ('$uid', '$date', '$message')";
    $result = mysqli_query($conn, $sql);
  }
}

function getComments($conn){
  $sql = "SELECT * FROM comments";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) { // cat timp avem un resultat cu comentariul
    echo "<div class='comment-box'><p>";
    echo $row['uid']."</br>";
    echo $row['date']."</br>";
    echo nl2br($row['message']); // aratam pe ecran mesajele
    echo "</p>
      <form class='delete-form' method='POST' action='".deleteComments($conn)."'>
        <input type='hidden' name='cid' value='".$row['cid']."'>
        <button name='commentDelete' type='submit'>Delete</button>
        </form>
      <form class='edit-form' method='POST' action='../includes/editcomment.php'>
        <input type='hidden' name='cid' value='".$row['cid']."'>
        <input type='hidden' name='uid' value='".$row['uid']."'>
        <input type='hidden' name='date' value='".$row['date']."'>
        <input type='hidden' name='message' value='".$row['message']."'>
        <button>Edit</button>
      </form>
    </div>";
  }
}


function editComments($conn) { //functia seteaza commenturile
  if(isset($_POST['commentSubmit'])){ // daca este apasat butonul commentSubmit,
    $cid = $_POST['cid'];
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $sql = "UPDATE comments SET message= '$message' WHERE cid= '$cid'";
    $result = mysqli_query($conn, $sql);
    header("Location:../assets/index.php");
  }
}


function deleteComments($conn){
  if(isset($_POST['commentDelete'])){ // daca este apasat butonul commentdelete
    $cid = $_POST['cid'];

    $sql = "DELETE FROM comments WHERE cid='$cid'";
    $result = mysqli_query($conn, $sql);

 }
}

function getLogin($conn){
  if(isset($_POST['loginSubmit'])){
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM user where uid='$uid' AND pwd='$pwd'"; //// de verificat ce anume selecteaza/// user sau users
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['id'] = $row['id'];
        header("Location: ../assets/index.php?loginsuccess");
        exit();
      }
    }else {
      header("Location: ../assets/index.php?loginfailed");
      exit();
    }
  }
}


  function userLogout(){
    if(isset($_POST['logoutSubmit'])){
      session_start();
      session_destroy();
      header("Location: ../includes/index.php");
      exit();
    }
}
?>
