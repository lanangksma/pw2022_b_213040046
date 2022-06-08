<?php 
session_start();
include('config/dbcon.php');

// Check if the user login or not
if(!isset($_SESSION['auth']))
{
    $_SESSION['message'] = "Login is required.";
    header("Location: ../login.php");
    exit(0);
}
else
{
    if($_SESSION['auth_role'] != "1")
    {
        $_SESSION['message'] = "You aren't authorize as ADMIN.";
        header("Location: ../");
        exit(0); 
    }
}

?>