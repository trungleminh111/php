<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./view/public/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./view/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./view/public/css/style.css">
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
<style>
    .a{
        display: flex;
        width: 160px;
    }
    .input-number{
    border: 1px solid #ccc !important;
    
  }
  .input-number:hover{
    background-color: #ff523b;
    opacity: 0.85;
    color: white;
  }
</style>
    <?php include 'inc/header.php'; ?>
    <!-------------car item details------------->
    <div class="cart my-5">
        <div class="container cart-page">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>

                <?php $cart_list = get_cart() ?>
                <?php foreach ($cart_list as $order_detail) { ?>
                    <!-- single cart -->
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="<?php echo $order_detail['img']; ?>" alt="">
                                <div>
                                    <p class="d-md-block d-sm-block d-none"><?php echo $order_detail['name']; ?></p>
                                    <br>
                                    <small>Price: $<?php echo $order_detail['price']; ?></small>
                                    <br>
                                    <form action="cart.php" method="post">
                                        <input type="hidden" name="action" value="delete">
                                        <input type="hidden" name="productId" value="<?php echo $order_detail['product_id']; ?>">
                                        <button type="submit" class="fas fa-trash"></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                        <td class="d-flex">
                            <form action="cart.php" method="post" class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="value" value="-1">
                                <input type="hidden" name="productId" value="<?php echo $order_detail['product_id']; ?>">
                                <button type="submit" class="input-number">-</button>
                            </form>
                            <div class="h-8 w-10 h flex items-center justify-center" style="text-align: center;">
                                <?php echo $order_detail['quantity']; ?>
                            </div>
                            <form action="cart.php" method="post" class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="value" value="1">
                                <input type="hidden" name="productId" value="<?php echo $order_detail['product_id']; ?>">
                                <button type="submit" class="input-number">+</button>
                            </form>
                        </td>
                        <td>$<?php echo total_cart_item($order_detail['price'], $order_detail['quantity']); ?></td>
                    </tr>
                <?php } ?>

                <tr>


            </table>
        </div>
        <div class="total-price container">
            <table>
                <tr>
                    <td class="">Subtotal</td>
                    <td>$<?php echo total_cart(); ?></td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$0</td>
                </tr>
                <tr>
                    <td>Subtotal</td>
                    <td>$<?php echo total_cart(); ?></td>

                </tr>
                <tr>
                    <td>
                        <div class="payment">
                            <a href="checkout.php" class="bg-primary border border-primary text-white px-4 py-3 font-medium rounded-md uppercase hover:bg-transparent
             hover:text-primary transition text-sm w-full block text-center a">
                                Process to checkout
                            </a>

                        </div>
                    </td>
                </tr>
            </table>

        </div>
    </div>

    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Company name
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <script src="js/main.js"></script>
</body>

</html>