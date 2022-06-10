<?php
include('authentication.php');
include('include/header.php');
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Admin Panel</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <?php include ('message.php');?>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Total Categories
                    <?php 
                        $categories = "SELECT * FROM categories ";
                        $categories_run = mysqli_query($conn, $categories);

                        if($tot_category = mysqli_num_rows($categories_run))
                        {
                            echo '<h4 class="mb-0">'.$tot_category.'</h4>';
                        }
                        else
                        {
                            echo '<h4 class="mb-0">0</h4>';
                        }
                    ?>                    
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="category-view.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Total Posts
                <?php 
                        $posts = "SELECT * FROM posts ";
                        $posts_run = mysqli_query($conn, $posts);

                        if($tot_post = mysqli_num_rows($posts_run))
                        {
                            echo '<h4 class="mb-0">'.$tot_post.'</h4>';
                        }
                        else
                        {
                            echo '<h4 class="mb-0">0</h4>';
                        }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="post-view.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total Users
                <?php 
                        $users = "SELECT * FROM user ";
                        $users_run = mysqli_query($conn, $users);

                        if($tot_users = mysqli_num_rows($users_run))
                        {
                            echo '<h4 class="mb-0">'.$tot_users.'</h4>';
                        }
                        else
                        {
                            echo '<h4 class="mb-0">0</h4>';
                        }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="view-register.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Total Blocked Users
                <?php 
                        $block = "SELECT * FROM user WHERE status='1' ";
                        $block_run = mysqli_query($conn, $block);

                        if($tot_block = mysqli_num_rows($block_run))
                        {
                            echo '<h4 class="mb-0">'.$tot_block.'</h4>';
                        }
                        else
                        {
                            echo '<h4 class="mb-0">0</h4>';
                        }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="view-register.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
include('include/footer.php');
include('include/scripts.php');
?>