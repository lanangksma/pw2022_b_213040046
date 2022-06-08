<?php 
include('authentication.php');

// Update Categories
if(isset($_POST['category_edit']))
{
    $category_id = $_POST['category_id'];
    
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];

    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

    $navbar_status = $_POST['navbar_status'] == true ? '1':'0';
    $status = $_POST['status'] == true ? '1':'0';

    $query = "UPDATE categories SET name='$name', slug='$slug', description='$description', 
                                    meta_title='$meta_title', meta_description='$meta_description', meta_keyword='$meta_keyword', 
                                    navbar_status='$navbar_status', status='$status'
              WHERE id='$category_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Category Updated Successfully";
        header("Location: category-view.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong.!";
        header("Location: category-edit.php?id=".$category_id);
        exit(0);
    }

}

// Add category
if(isset($_POST['category_add']))
{
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];

    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

    $navbar_status = $_POST['navbar_status'] == true ? '1':'0';
    $status = $_POST['status'] == true ? '1':'0';

    $query = "INSERT INTO categories (name, slug, description, meta_title, meta_description, meta_keyword, navbar_status, status) 
              VALUES ('$name', '$slug', '$description', '$meta_title', '$meta_description', '$meta_keyword', '$navbar_status', '$status') ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Category Added Successfully";
        header("Location: category-add.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong.!";
        header("Location: category-add.php");
        exit(0);
    }

}


// Delete user
if(isset($_POST['user_delete']))
{
    $user_id = $_POST['user_delete'];

    $query = "DELETE FROM user WHERE id='$user_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Admin/User Deleted Successfully";
        header("Location: view-register.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong.!";
        header("Location: view-register.php");
        exit(0);
    }
}


// Add User
if(isset($_POST['add_user']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == true ? '1':'0';

    $query = "INSERT INTO user (username, email, password, role_as, status) VALUES ('$username', '$email', '$password', '$role_as', '$status' ) ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Admin/User Added Successfully";
        header("Location: view-register.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong.!";
        header("Location: view-register.php");
        exit(0);
    }
}


// Update User
if(isset($_POST['update_user']))
{
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == true ? '1':'0';

    $query = "UPDATE user SET username='$username', email='$email', role_as = '$role_as', status='$status'
              WHERE id='$user_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: view-register.php");
        exit(0);
    }

}

?>