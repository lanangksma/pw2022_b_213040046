<?php 
include ('includes/conf.php');

if(isset($_GET['title']))
{
    // $title = $_GET['title'];
    $slug = mysqli_real_escape_string($conn, $_GET['title']);

    $category = "SELECT slug,meta_title,meta_description,meta_keyword FROM categories WHERE slug='$slug' AND status='0' LIMIT 1";
    $category_run = mysqli_query($conn, $category);

    if(mysqli_num_rows($category_run) > 0)
    {
        $categoryitem = mysqli_fetch_array($category_run);

        $page_title = $categoryitem['meta_title'];
        $meta_description = $categoryitem['meta_description'];
        $meta_keywords = $categoryitem['meta_keyword'];
    }
    else
    {
        $page_title="Category";
        $meta_description="This is a Category Page.";
        $meta_keywords="Category page";
    }
    
}
else
{
    $page_title="Category";
    $meta_description="This is a Category Page.";
    $meta_keywords="Category page";
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

                        $category = "SELECT id,slug FROM categories WHERE slug='$slug' AND status='0' LIMIT 1";
                        $category_run = mysqli_query($conn, $category);

                        if(mysqli_num_rows($category_run) > 0)
                        {
                            $categoryitem = mysqli_fetch_array($category_run);
                            $category_id = $categoryitem['id'];

                            $posts = "SELECT * FROM posts WHERE category_id='$category_id' AND status='0' ";
                            $posts_run = mysqli_query($conn, $posts);

                            if(mysqli_num_rows($posts_run) > 0)
                            {
                                foreach($posts_run as $postitem)
                                {
                                    ?>
                                        <a href="<?= base_url('post/'.$postitem['slug']); ?>" class="text-decoration-none">
                                            <div class="card card-body shadow-sm mb-4">
                                                <h5><?= $postitem['name']; ?></h5>
                                                <div>
                                                    <label class="text-dark me-2">Posted On: <?= date('d M Y', strtotime($postitem['created_at'])); ?></label>
                                                </div>
                                            </div>
                                        </a>
                                    <?php
                                }
                            }
                            else
                            {
                                ?>
                                <h4>Post Not Available</h4> 
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                            <h4>No Such Category Found</h4> 
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
                        <h4>Quotes</h4>
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