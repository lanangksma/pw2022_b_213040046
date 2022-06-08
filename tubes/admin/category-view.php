<?php
include('authentication.php');
include('include/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Category</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Category</li>
    </ol>
    <div class="row">
        `
        <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Category List
                        <a href="category-add.php" class="btn btn-primary float-end">Add Category</a>
                    </h4>
                </div>
                <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered table-stripe">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <?php 
                        $category = "SELECT * FROM categories";
                        $category_run = mysqli_query($conn, $category);

                        if(mysqli_num_rows($category_run) > 0)
                        {
                            foreach($category_run as $item)
                            {
                                ?>
                                <tr>
                                    <td><?= $item['id'] ?></td>
                                    <td><?= $item['name'] ?></td>
                                    <td>
                                        <?= $item['status'] == '1' ? 'Hidden':'Visible' ?>
                                    </td>
                                    <td>
                                        <a href="category-edit.php?id=<?= $item['id']; ?>" class="btn btn-success">Edit</a>
                                        <form action="code.php" method="POST">
                                        <td><button type="submit" name=category_delete" value="<?= $item['id']; ?>" class="btn btn-danger" >Delete</button></td>
                                    </form>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                            <tr>
                                <td colspan="5">No Record Found</td>
                            </tr>
                            <?php
                        }
                    ?>
                        </tbody>
                    </table>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('include/footer.php');
include('include/scripts.php');
?>