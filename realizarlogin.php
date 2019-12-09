<?php
session_start();
    unset($session['login']);
    unset($session['senha']);
session_destroy();
header("location: http://127.0.0.1/../forsale/login.php");
?>