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
                    <h4>Add Category
                        <a href="category-view.php" class="btn btn-primary float-end">Cancel</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="code.php" method="POST">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input type="text" required name="name" maxlength="198" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Slug (URL)</label>
                                <input type="text" required name="slug" maxlength="198" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Title</label>
                                <input type="text" required name="meta_title" maxlength="198" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Meta Keyword</label>
                                <textarea name="meta_keyword" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Navbar Status</label> <br />
                                <input type="checkbox" name="navbar_status" width="70px" height="70px" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Status</label> <br />
                                <input type="checkbox" name="status" width="70px" height="70px" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="category_add" class="btn btn-primary">Add Category</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('include/footer.php');
include('include/scripts.php');
?>