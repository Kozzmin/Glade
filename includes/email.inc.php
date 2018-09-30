<?php


if(isset($_POST['contactEmail'])){
    $to = "sandorgabrielcosmim@yahoo.com";
    $subject = $_POST['Subject'];
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $headers = "From: $email" . "\r\n" . " Name: $name";
    $message = $_POST['Message'];
    header("Location: ../assets/contact.php");
    
    //trebuie configurat server de  email;
    //mail($to, $subject, $message, $headers);

}
