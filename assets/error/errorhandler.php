<?php     

if (isset($_GET['mail'])) {
    $mail = $_GET['mail'];
    if($mail == "failed"){
        echo "<h2 class='error'>E-mail nu s-a trimis.</h2>";
    } elseif($mail == "success") {
        echo "<h2 class='success'>E-mail trimis cu succes.</h2>";
    }
}

?>

    