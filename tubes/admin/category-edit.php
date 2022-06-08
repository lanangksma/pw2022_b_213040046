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
                    <h4>Edit Category
                        <a href="category-view.php" class="btn btn-primary float-end">Cancel</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php 
                    if(isset($_GET['id'])){
                        $category_id = $_GET['id'];
                        $category = "SELECT * FROM categories WHERE id='$category_id' ";
                        $category_run = mysqli_query($conn, $category);

                        // Check record available or not
                        if(mysqli_num_rows($category_run) > 0)
                        {
                            $row = mysqli_fetch_array($category_run);
                            {
                                ?>                               

                    <form action="code.php" method="POST">

                    <input type="hidden" name="category_id" value="<?= $row['id']; ?>">
                        <div class="row">
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
                                <textarea name="description" class="form-control" rows="4"><?= $row['description']; ?></textarea>
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
                                <label for="">Navbar Status</label> <br />
                                <input type="checkbox" name="navbar_status" <?= $row['navbar_status'] == '1' ? 'checked':'' ?> width="70px" height="70px" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Status</label> <br />
                                <input type="checkbox" name="status" <?= $row['status'] == '1' ? 'checked':'' ?> width="70px" height="70px" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="category_edit" class="btn btn-primary">Update Category</button>
                            </div>

                        </div>
                    </form>

                            <?php
                            }
                        }
                        else
                        {
                            ?>
                            <h4>No Record Found</h4>
                            <?php
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