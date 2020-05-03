<?php
    session_start();
    unset($_SESSION['signedIn']);

    require 'redirection.php';
?>