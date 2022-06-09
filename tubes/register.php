<?php
include('includes/header.php');

if(isset($_SESSION['auth']))
{
    $_SESSION['message'] = "You're already logged in.";
    header("Location: index.php");
    exit(0);
}


include('includes/navbar.php');
?>

<div class="py-5"></div>
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            
        <?php include ('message.php'); ?>

            <div class="login-form bg-light mt-4 p-4">
                <form action="registercode.php" method="POST" class="row g-3">
                    <h4>Register</h4>
                    <div class="col-12">
                        <label>Username</label>
                        <input type="text" required name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="col-12">
                        <label>Email</label>
                        <input type="text" required name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-12">
                        <label>Password</label>
                        <input type="password" required name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <label>Confirm Password</label>
                        <input type="password" required name="cpassword" class="form-control" placeholder="Confirm Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" name="register_btn" class="btn btn-dark float-end">Sign-Up</button>
                    </div>
                </form>
                <hr class="mt-4">
                <div class="col-12">
                    <p class="text-center mb-0">Already Have account yet? <a href="login.php">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include('includes/footer.php');
?>