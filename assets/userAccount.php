<?php
 if (isset($_SESSION['u_id'])){
        echo "<button class='glade-button'><i class='fa fa-user'>  " . $_SESSION['u_uid'] . "</i></button>";
      }