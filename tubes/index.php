<?php 

include ('includes/header.php');
include ('includes/navbar.php');
?>

<div class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php include ('message.php'); ?>
                <h3 class="text-white">Category</h3>
                <div class="underline mb"></div>
            </div>

            <?php 
                $home_category = "SELECT * FROM categories WHERE navbar_status='0' AND status='0' LIMIT 10 ";
                $home_category_run = mysqli_query($conn, $home_category);

                if(mysqli_num_rows($home_category_run) > 0)
                {
                    foreach($home_category_run as $homeitem)
                    {
                    ?>
                        <div class="col-md-3 mb-4">
                            <a class="text-decoration-none" href="category.php?title=<?= $homeitem['slug']; ?>">                   
                                <div class="card card-body">
                                    <?= $homeitem['name']; ?>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                }
            ?>

        </div>
    </div>
</div>

<!-- About Section -->

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php include ('message.php'); ?>
                <h3 class="text-dark">Geek To Code</h3>
                <div class="underline mb"></div>
                <p>
                    is a website that was built because of the importance of tubes by lanangksma, hopefully this website can be a website that gets a good impression and has benefits in it. And also this website contains a variety of tutorials on programming, Linux and the like.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Latest Post Section -->

<div class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php include ('message.php'); ?>
                <h3 class="text-dark">Latest Posts</h3>
                <div class="underline mb"></div>

                <?php 
                    $home_posts = "SELECT * FROM posts WHERE status='0' ORDER BY id DESC LIMIT 8 ";
                    $home_posts_run = mysqli_query($conn, $home_posts);

                    if(mysqli_num_rows($home_posts_run) > 0)
                    {
                        foreach($home_posts_run as $homePostsitem)
                        {
                        ?>
                            <div class="mb-4">
                                <a class="text-decoration-none" href="post.php?title=<?= $homePostsitem['slug']; ?>">                   
                                    <div class="card card-body bg-light">
                                        <?= $homePostsitem['name']; ?>
                                    </div>
                                </a>
                            </div>
                        <?php
                        }
                    }
                ?>

            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Reach US</h4>
                    </div>
                    <div class="card-body">
                        lanang.213040046@mail.unpas.ac.id
                    </div>
                </div>
            </div>

            

        </div>
    </div>
</div>

<?php 
include ('includes/footer.php');
?>