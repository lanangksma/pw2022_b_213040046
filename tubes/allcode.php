<?php 
session_start();

// Check Button is ready
if(isset($_POST['logout_btn']))
{
    // session_destroy(); means destroy all the functions or session.
    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']);
    unset($_SESSION['auth_user']);

    $_SESSION['message'] = "Logged Out Successfully.";
    header("Location: login.php");
    exit(0);

}


?>