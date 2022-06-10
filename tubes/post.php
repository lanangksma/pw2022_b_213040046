<?php 
include ('includes/conf.php');

if(isset($_GET['title']))
{
    // $title = $_GET['title'];
    $slug = mysqli_real_escape_string($conn, $_GET['title']);

    $posts = "SELECT * FROM posts WHERE slug='$slug' LIMIT 1 ";
    $meta_posts_run = mysqli_query($conn, $posts);

    if(mysqli_num_rows($meta_posts_run) > 0)
    {
        
        $metapost = mysqli_fetch_array($meta_posts_run);

        $page_title = $metapost['meta_title'];
        $meta_description = $metapost['meta_description'];
        $meta_keywords = $metapost['meta_keyword'];
    }    
    else
    {
        $page_title="Post";
        $meta_description="This is a Post Page.";
        $meta_keywords="Post page";
    }
}
else
{
    $page_title="Post";
    $meta_description="This is a Post Page.";
    $meta_keywords="Post page";
}

include ('includes/header.php');
include ('includes/navbar.php');
?>

<div class="py-3"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-9">
            <?php 
                    if(isset($_GET['title']))
                    {
                        // $title = $_GET['title'];
                        $slug = mysqli_real_escape_string($conn, $_GET['title']);

                        $posts = "SELECT * FROM posts WHERE slug='$slug' ";
                        $posts_run = mysqli_query($conn, $posts);

                        if(mysqli_num_rows($posts_run) > 0)
                        {                                                       
                            foreach($posts_run as $postitem)
                            {
                                ?>
                                    <div class="card shadow-sm mb4">
                                        <div class="card-header">
                                            <h5><?= $postitem['name']; ?></h5>
                                        </div>
                                        
                                        <div class="card-body">
                                            <label class="text-dark me-2">Posted On: <?= date('d M Y', strtotime($postitem['created_at'])); ?></label>
                                            <hr/>
                                                <?php if($postitem['image'] != null) : ?>                                    
                                                <img src="<?= base_url('uploads/posts/'.$postitem['image']); ?>" class="w-25" alt="<?= $postitem['name']; ?>" />
                                                <?php endif; ?>
                                            <div>
                                                <?= $postitem['description']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                <?php
                            }
                            
                            
                        }
                        else
                        {
                            ?>
                            <h4>No Such Post Found</h4> 
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                            <h4>No Such Url Found</h4> 
                        <?php
                    }
                ?>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Quotes
                    </div>
                    <div class="card-body">
                    today wakes up, tomorrow goes to bed, trying as much as possible for possible results.
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
include ('includes/footer.php');
?>