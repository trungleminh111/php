<?php require_once 'core/boot.php'; ?>

<!doctype html>

<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=  device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./view/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./view/public/css/style.css">
    <link rel="stylesheet" href="./view/public/css/home.css">
</head>

<body>
    <?php include './view/inc/header.php'; ?>
    <?php include './view/inc/banner.php'; ?>

    <div class="my-5 container" id="new">
        <div class="row">
            <?php $product_list = get_products_by_name($_GET['search']) ?>
            <?php foreach ($product_list as $product) { ?>
                <div class="col-md-4 mt-3 product-item col-sm-12 col-lg-3">
                    <div class="card">
                        <a href="product-detail.php?id=<?php echo $product['id']; ?>">
                            <img class="card-img-top" height="300px" src="<?php echo $product['img']; ?>" alt="Product">
                        </a>
                        <div class="card-body">
                            <p class="card-text fw-bold product-title"><?php echo $product['name']; ?></p>
                            <strong class="text-secondary">
                                $<?php echo $product['pricenew']; ?>
                                <small>-<?php echo $product['giam']; ?>%</small>
                            </strong>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
    <?php include './view/inc/footer.php'; ?>
    <!-- Bootstrap JavaScript Libraries -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>