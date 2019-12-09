
<?php
    session_start();
    if(!isset($_SESSION['email']) AND !isset($_SESSION['perfil'])){
        header("Location:login.php?erro=1");
    }
?>