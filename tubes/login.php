<?php
include('includes/header.php');

// Check if user already login
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
                <form action="logincode.php" method="POST" class="row g-3">
                    <h4>Welcome Back</h4>
                    <div class="col-12">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-12">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe"> Remember me</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" name="login_btn" class="btn btn-dark float-end">Login</button>
                    </div>
                </form>
                <hr class="mt-4">
                <div class="col-12">
                    <p class="text-center mb-0">Have not account yet? <a href="register.php">Signup</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include('includes/footer.php');
?>