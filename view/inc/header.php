<?php require_once 'core/boot.php'; ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed top-0 start-0 w-100">
  <div class="container">
    <a class="navbar-brand d-lg-none bg-secondary" href="#">Mr.Trung</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse p-2 flex-column" id="navbarContent">
      <div class="d-flex justify-content-center justify-content-lg-between flex-column flex-lg-row w-100">

        <form action="search.php" method="get" class="d-flex">
          <input type="text" name="search" class="form-control" placeholder="Search">
          <button class="btn btn-outline-dark">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </form>

        <a class="navbar-brand d-none d-lg-block" href="#">Mr.Trung</a>
        <ul class="navbar-nav">
          <li class="nav-item mx-2">
            <?php
            if (!isset($_SESSION['user']['user']) && empty($_SESSION['user'])) {
              echo '<a href="login.php" class="nav-link"><b>Log In</b></a>';
            } else {
              echo "Hello, " . htmlspecialchars($_SESSION['user']['userName'], ENT_QUOTES, 'UTF-8');
              echo '</br></b>';
              echo  '<a href="logout.php" class=""  style="text-decoration: none; color: rgba(0,0,0,.55);"><b>Log Out</b></a>';
            }

            ?>
           
             
         
          </li>
          <li class="nav-item d-flex align-items-center">
            <a href="cart.php" class="nav-link">
              <i class="fas fa-shopping-bag"></i>
              bag
            </a>
            <span class="badge rounded-pill bg-secondary m-2">
              <?php echo number_cart_product() ?>
            </span>
            </a>

          </li>
        </ul>
      </div>
      <div class="d-block w-100">
        <ul class="navbar-nav d-flex justify-content-center align-items-center pt-3">
          <li class="nav-item mx-2">
            <a href="index.php" class="nav-link">
              Home
            </a>
          </li>
          <li class="nav-item mx-2">
            <a href="clothing.php" class="nav-link">
              Clothing
            </a>
          </li>
          <li class="nav-item mx-2">
            <a href="clothing.php" class="nav-link">
              Shope
            </a>
          </li>
          <li class="nav-item mx-2">
            <a href="productList.html" class="nav-link">
              Blog
            </a>
          </li>
          <li class="nav-item mx-2">
            <a href="contact.php" class="nav-link">
              Contact
            </a>
          </li>
          <li class="nav-item mx-2">
          <?php 
          if (isset($_SESSION['user']['role']) && ($_SESSION['user']['role']) =='admin') { ?>
                <a class="nav-link" href="<?php echo BASE_URL . '/admin/product'; ?>" class="text-gray-200 hover:text-white transition">Admin</a>
               
              <?php } ?>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>