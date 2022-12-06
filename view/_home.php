<?php require_once './core/boot.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link rel="stylesheet" href="./view/public/css/bootstrap.min.css">
  <link rel="stylesheet" href="./view/public/css/style.css">
  <link rel="stylesheet" href="./view/public/css/home.css">
</head>

<body>
  <?php include 'inc/header.php'; ?>
  <?php include 'inc/banner.php'; ?>
  <div class="container position-relative text-center">


    <h2 class="diplay-6 mb-4">
      Best Sellers
    </h2>
    <span>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</span>
    <div class="row" id="new">

      <?php $product_list = get_all_product_seller() ?>
      <?php foreach ($product_list as $product) { ?>
        <div class="col-12 col-lg-3 col-md-6 col-sm-6">
          <div class="card m-2">
            <a href="./product-detail.php?id=<?php echo $product['id']; ?>">
              <img class="card-img-top" height="300px" src="<?php echo $product['img']; ?>" alt="Product">
            </a>
            <div class="card-body">
              <p class="card-text fw-bold"><?php echo $product['name']; ?></p>
              <strong class="text-secondary">
                $<?php echo $product['pricenew']; ?>
                <small>-<?php echo $product['giam']; ?>%</small>
              </strong>
            </div>
          </div>
        </div>
      <?php } ?>


    </div>
    <a href="clothing.php" class="btn btn-outline-dark my-5">View All Product</a>
    <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row my-5">
      <div class="position-relative m-2">
        <img src="https://media.doisongvietnam.vn/u/rootimage/editor/2017/03/22/16/57/w825/sie1490155025_3996.jpg" height="300" alt="">
        <a href="clothing.php" class="btn btn-light position-absolute start-0 bottom-0 ms-2 mb-2 d-block">Suits</a>
      </div>
      <div class="position-relative m-2">
        <img src="https://vcdn1-ngoisao.vnecdn.net/2013/08/26/ava-1377508948.jpg?w=0&h=0&q=100&dpr=1&fit=crop&s=p2XWrh0rslMIZgeAxz7GOQ" height="300" alt="">
        <a href="clothing.php" class="btn btn-light position-absolute start-0 bottom-0 ms-2 mb-2 d-block">Suits</a>
      </div>
      <div class="position-relative m-2">
        <img src="https://media.doisongvietnam.vn/u/rootimage/editor/2017/03/22/16/57/w825/sie1490155025_5039.jpg" height="300" alt="">
        <a href="clothing.php" class="btn btn-light position-absolute start-0 bottom-0 ms-2 mb-2 d-block">Suits</a>
      </div>
    </div>
    <div class="row text-start align-items-center gy-5 my-5">
      <div class="col-12 col-md-6">
        <img src="http://127.0.0.1:5501/img/about-1.jpg" class="w-100 h-100" alt="">
      </div>
      <div class="col-12 col-md-6">
        <div>
          <h2 class="display-4">
            Brand
          </h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas nam similique laboriosam fugit tempore
            doloremque quo voluptate ducimus illum accusamus, quis optio praesentium incidunt molestiae consectetur id,
            veniam deserunt. Sit.</p>

        </div>
      </div>
    </div>
    <div class="row text-start align-items-center gy-5 my-5">
      <div class="col-12 col-md-6">
        <div>
          <h2 class="display-4">
            Brand
          </h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas nam similique laboriosam fugit tempore
            doloremque quo voluptate ducimus illum accusamus, quis optio praesentium incidunt molestiae consectetur id,
            veniam deserunt. Sit.</p>

        </div>
      </div>
      <div class="col-12 col-md-6">
        <img src="http://127.0.0.1:5501/img/about-1.jpg" class="w-100 h-100" alt="">
      </div>
    </div>
    <section class="my-5 mx-auto py-5" style="max-width: 25em;">
      <h3>
        Subscribe To Our Newsletter
      </h3>
      <form class="d-flex my-4">
        <input type="search" class="form-control me-2" placeholder="Your Email">
        <button class="btn btn-outline-dark" type="submit">Subscribe</button>
      </form>
    </section>

  </div>
  <a href="#" class="to-top">
    <i class="fas fa-chevron-up"></i>
  </a>
  </div>
  <!-- Footer -->


  <?php include 'inc/footer.php'; ?>
  <!-- Footer -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>

</body>

</html>