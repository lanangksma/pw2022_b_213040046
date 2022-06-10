<?php 
include('authentication.php');

// Delete Post
if(isset($_POST['post_delete_btn']))
{
    $post_id = $_POST['post_delete_btn'];

    $query_check_img = "SELECT * FROM posts WHERE id='$post_id' LIMIT 1 ";
    $check_run = mysqli_query($conn, $query_check_img);
    $data_res = mysqli_fetch_array($check_run);
    $data_img = $data_res['image'];

    $query = "DELETE FROM posts WHERE id='$post_id' LIMIT 1 ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        if(file_exists('../uploads/posts/'.$data_img))
        {
            unlink('../uploads/posts/'.$data_img);
        }
                
        $_SESSION['message'] = "Post Deleted Successfully";
        header("Location: post-view.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong.!";
        header("Location: post-view.php");
        exit(0);
    }
}

// Post Update
if(isset($_POST['post_update']))
{
    $post_id = $_POST['post_id'];
    $category_id = $_POST['category_id'];
    
    $name = $_POST['name'];

    $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); //Remove cahracter
    $other_string = preg_replace('/-+/', '-', $string);
    $slug = $other_string;

    $description = $_POST['description'];

    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

    $defaultfname = $_POST['default'];
    $image = $_FILES['image']['name'];

    $updatefname = '';
    if($image != NULL)
    {
        // Rename Files Image
        $image_extension = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_extension;

        $updatefname = $filename;
    }
    else
    {
        $updatefname = $defaultfname;
    }

    $status = $_POST['status'] == true ? '1':'0';

    $query = "UPDATE posts SET category_id='$category_id', name='$name', slug='$slug', description='$description', image='$updatefname', 
              meta_title='$meta_title', meta_description='$meta_description', meta_keyword='$meta_keyword', status='$status' WHERE id='$post_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        if($image != NULL)
        {
            if(file_exists('../uploads/posts/'.$defaultfname))
            {
                unlink('../uploads/posts/'.$defaultfname);
            }
            move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/posts/'.$updatefname);
        }
                
        $_SESSION['message'] = "Post Updated Successfully";
        header("Location: post-view.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong.!";
        header("Location: post-add.php?id=".$post_id);
        exit(0);
    }
}


// Posts Add
if(isset($_POST['post_add']))
{
    $category_id = $_POST['category_id'];
    
    $name = $_POST['name'];
    
    $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); //Remove cahracter
    $other_string = preg_replace('/-+/', '-', $string);
    $slug = $other_string;

    $description = $_POST['description'];

    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

    $image = $_FILES['image']['name'];
    // Rename Files Image
    $image_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;

    $status = $_POST['status'] == true ? '1':'0';

    $query = "INSERT INTO posts (category_id, name, slug, description, image, meta_title, meta_description, meta_keyword, status) VALUES ('$category_id','$name','$slug','$description','$filename','$meta_title','$meta_description','$meta_keyword','$status') ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/posts/'.$filename);
        $_SESSION['message'] = "Post Created Successfully";
        header("Location: post-view.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong.!";
        header("Location: post-add.php");
        exit(0);
    }

}

// Delete Category
if(isset($_POST['category_delete']))
{
    $category_id = $_POST['category_delete'];

    $query = "UPDATE categories SET status='2' WHERE id='$category_id' LIMIT 1";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Category Deleted Successfully";
        header("Location: category-view.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong.!";
        header("Location: category-view.php");
        exit(0);
    }
}

// Update Categories
if(isset($_POST['category_edit']))
{
    $category_id = $_POST['category_id'];
    
    $name = $_POST['name'];
    
    $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); //Remove cahracter
    $other_string = preg_replace('/-+/', '-', $string);
    $slug = $other_string;
    
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
    
    $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $_POST['slug']); //Remove cahracter
    $other_string = preg_replace('/-+/', '-', $string);
    $slug = $other_string;
    
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