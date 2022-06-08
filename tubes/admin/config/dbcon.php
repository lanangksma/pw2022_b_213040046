<?php 

$host = "localhost";
$username = "root";
$password = "";
$dbname = "pw2022_b_213040046";

$conn = mysqli_connect("$host", "$username", "$password", "$dbname");

if(!$conn)
{
    header("Location: ../errors/dberror.php");
    die();
}

?>