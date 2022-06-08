<?php 
session_start();
include('admin/config/dbcon.php');

// Check if button ready
if(isset($_POST['login_btn']))
{
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $login_query = "SELECT * FROM user WHERE email='$email' AND password='$password' LIMIT 1 ";
    $login_query_run = mysqli_query($conn, $login_query);

    // Check if record exist
    if(mysqli_num_rows($login_query_run) > 0)
    {

        foreach($login_query_run as $data){
            $user_id = $data['id'];
            $user_name = $data['username'];
            $user_email = $data['email'];
            $role_as = $data['role_as'];
        }

        $_SESSION['auth'] = true;
        $_SESSION['auth_role'] = "$role_as"; // 1 = admin and 0 = user
        $_SESSION['auth_user'] = [
            'user_id' => $user_id,
            'user_name' => $user_name,
            'user_email' => $user_email,
        ];
        // Multi level login
        if($_SESSION['auth_role'] == '1') //Logged as Admin
        {
            $_SESSION['message'] = "You're Logged as Admin.";
            header("Location: admin/index.php");
            exit(0); 
        }
        elseif($_SESSION['auth_role'] == '0') //Logged as user
        {
            $_SESSION['message'] = "You're Logged in.";
            header("Location: index.php");
            exit(0);
        }

    }
    else
    {
        $_SESSION['message'] = "Incorrect username or password.";
        header("Location: login.php");
        exit(0);  
    }
}
else
{
    // If someone tries access files
    $_SESSION['message'] = "Your not allowed acces this files";
    header("Location: login.php");
    exit(0);
}
?>