<?php
include('authentication.php');
include('include/header.php');
?>

<div class="container-fluid px-4">
    <div class="row mt-4">
        <div class="col-md-12">

            <?php include ('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Edit Posts
                        <a href="post-view.php" class="btn btn-primary float-end">Cancel</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php 
                      if(isset($_GET['id']))
                      {
                          $post_id = $_GET['id'];
                          $post_query = "SELECT * FROM posts WHERE id='$post_id' LIMIT 1 ";
                          $post_query_run = mysqli_query($conn, $post_query);

                          if(mysqli_num_rows($post_query_run) > 0)
                          {
                            $row = mysqli_fetch_array($post_query_run);
                            ?>

                                <form action="code.php" method="POST" enctype="multipart/form-data">

                                    <input type="hidden" name="post_id" value="<?= $row['id']; ?>">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="">Category List</label>
                                            
                                            <?php 
                                                $category = "SELECT * FROM categories WHERE status='0' ";
                                                $category_run = mysqli_query($conn, $category);

                                                if(mysqli_num_rows($category_run) > 0)
                                                {
                                                    ?>
                                                    <select name="category_id" required class="form-control" id="">
                                                        <option value="">--- Select Category ---</option>
                                                        <?php 
                                                            foreach($category_run as $categoryitem)
                                                            {
                                                                ?>
                                                                <option value="<?= $categoryitem['id']; ?>" <?= $categoryitem['id'] == $row['category_id'] ? 'selected':'' ?> >
                                                                    <?= $categoryitem['name']; ?>
                                                                </option>
                                                                <?php
                                                            }
                                                        ?>
                                                    </select>
                                                    <?php
                                                }
                                                else
                                                {
                                                    ?>
                                                    <h4>No Record Found</h4>
                                                    <?php
                                                }
                                            ?>

                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Name</label>
                                            <input type="text" required value="<?= $row['name']; ?>" name="name" maxlength="198" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Slug (URL)</label>
                                            <input type="text" required value="<?= $row['slug']; ?>" name="slug" maxlength="198" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="">Description</label>
                                            <textarea name="description" id="summernote" class="form-control" rows="4"><?= htmlentities($row['description']); ?></textarea>
                                        </div>                           
                                        <div class="col-md-12 mb-3">
                                            <label for="">Meta Title</label>
                                            <input type="text" required value="<?= $row['meta_title']; ?>" name="meta_title" maxlength="198" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Meta Description</label>
                                            <textarea name="meta_description" class="form-control" rows="4"><?= $row['meta_description']; ?></textarea>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Meta Keyword</label>
                                            <textarea name="meta_keyword" class="form-control" rows="4"><?= $row['meta_keyword']; ?></textarea>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Image</label>
                                            <input type="hidden" name="default" value="<?= $row['image']; ?>" >
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Status</label> <br />
                                            <input type="checkbox" name="status" <?= $row['status'] == '1' ? 'checked':'' ?> width="70px" height="70px" />
                                            Hidden
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <button type="submit" name="post_update" class="btn btn-primary">Update Post</button>
                                        </div>

                                    </div>
                                </form>

                                                            
                                <?php
                          }
                          else
                          {

                          }
                      }  
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('include/footer.php');
include('include/scripts.php');
?>