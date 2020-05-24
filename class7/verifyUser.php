<?php 
    if(isset($_POST['username']) && $_POST['username'] == "admin" &&
       isset($_POST['password']) && $_POST['password'] == "admin") {
        
        session_start();
        $_SESSION['signedIn'] = true;
        header('Location: http://mmaz.cba.pl/index.php');
    }
    else
    {
        $_SESSION['401'] = true;
        header('Location: http://mmaz.cba.pl/class7/signInPage.php?message=401');
    }

    exit();
?>