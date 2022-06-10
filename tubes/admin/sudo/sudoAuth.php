<?php 

if($_SESSION['auth_role'] != "2" )
{
    $_SESSION['message'] = "You Aren't Authorize as SUDO to Access This Page!.";
    header("Location: index.php");
    exit(0); 
}

?>