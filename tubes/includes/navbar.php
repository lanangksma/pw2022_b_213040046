<div>
  <div class="container">
    <div class="row">
      <div class="col-4">
        <a class="blog-header-logo text-primary d-none d-sm-none d-md-block" href="<?= base_url('index'); ?>">Geek to Code</a>
      </div>
      <div class="col-md-9">

      </div>
    </div>
  </div>
</div>





<nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top">
  <div class="container">
    <a class="navbar-brand d-block d-sm-block d-md-none" href="<?= base_url('index'); ?>">
    Geek to Code
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('index'); ?>">Home</a>
        </li>
        <?php 
          $navbar_category = "SELECT * FROM categories WHERE navbar_status='0' AND status='0' ";
          $navbar_category_run = mysqli_query($conn, $navbar_category);

          if(mysqli_num_rows($navbar_category_run) > 0)
          {
            foreach($navbar_category_run as $navitems)
            {
              ?>
                <li class="nav-item">
                  <!-- <a class="nav-link text-white" href="category.php?title=<?= $navitems['slug']; ?>"><?= $navitems['name']; ?></a> -->

                  <a class="nav-link text-white" href="<?= base_url('category/'.$navitems['slug']); ?>"><?= $navitems['name']; ?></a>
                </li>
              <?php
            }
          }
        ?>
        

        <?php if(isset($_SESSION['auth_user'])) : ?>

        <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION['auth_user']['user_name']; ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

            <li>
              <form action="<?= base_url('allcode.php'); ?>" method="POST">
                <button type="submit" name="logout_btn" class="dropdown-item" ><i class="fa fa-sign-out"></i> Sign-Out</button>
              </form>
            </li>
          </ul>
        </li>

        <?php else : ?>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('register.php'); ?>">Sign-up</a>
        </li>

        <?php endif; ?>
        
      </ul>
      
    </div>
  </div>
</nav>