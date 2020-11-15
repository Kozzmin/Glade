<?php

if(isset($_POST['contactEmail'])){                                            //if "contactEmail" variable is filled out, send email
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
   
    
    $to = "root@localhost";
    $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= "From:$name  <$email>" . "\r\n" . "";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  if (mail($to, $subject, $message, $headers)){
      echo "The mail has been sent!";
      header("Location: ../contact.php?mail=success");
  } else {
      echo "The mail has failed!";
      header("Location: ../contact.php?mail=failed");
  }
}
else {
  echo "The form has failed!";
}
?>
