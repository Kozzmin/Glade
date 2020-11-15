<?php
    if(isset($_SESSION['u_id'])){
        echo '<form action="includes/logout.inc.php" method="POST" class="glade-bar-item">
                <button type="submit" name="submit" class="glade-button">Deconectare</button>
                </form>';
    } else {
        echo '<button onclick="document.getElementById(\'loginModalForm\').style.display=\'block\'" 
                class="glade-bar-item glade-button">
                <i class="fa fa-sign-in"></i> Conectare
            </button>
            <button onclick="document.getElementById(\'signupModalForm\').style.display=\'block\'" 
                class="glade-bar-item glade-button">
                <i class="fa fa-sign-out"></i> Inregistrare
            </button>';
}