<?php 
include ('includes/conf.php');

// Check if button ready
if(isset($_POST['register_btn']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    // Hash
    $password = md5($password);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['cpassword']);
    // Hash
    $confirm_password = md5($confirm_password);
    

    // Check password confirmation
    if($password == $confirm_password)
    {
        // Check email already registered or not
        $checkemail = "SELECT email FROM user WHERE email='$email' ";
        $checkemail_run = mysqli_query($conn, $checkemail);

        // if email already exist
        if(mysqli_num_rows($checkemail_run) > 0)
        {
            $_SESSION['message'] = "Email already exist";
            header('Location: register.php');
            exit(0);
        }
        else
        {
            $user_query = "INSERT INTO user (username, email, password) 
                           VALUES ('$username', '$email', '$password' ) ";
            $user_query_run = mysqli_query($conn, $user_query);

            // Check if user query success
            if($user_query_run)
            {
                $_SESSION['message'] = "Registered Successfully";
                header('Location: login.php');
                exit(0);
            }
            else
            {
                $_SESSION['message'] = "Something Went Wrong";
                header('Location: register.php');
                exit(0);
            }
        }
    }
    else
    {
        $_SESSION['message'] = "Password didn't match";
        header('Location: register.php');
        exit(0);
    }

}
else
{
    header("Location: register.php");
    exit(0);
}

?>