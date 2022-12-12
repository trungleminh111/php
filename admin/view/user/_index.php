<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
       <link rel="stylesheet" href="../../view/public/admin/css/style.css">
       <link rel="stylesheet" href="../../view/public/admin/css/styles.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

       <script src="../../view/public/admin/js/all.js " crossorigin="anonymous"></script>
    </head>
   
    <body class="sb-nav-fixed">
       <?php include_once '../view/inc/_navbar.php' ?>
        <div id="layoutSidenav">
          <?php include_once '../view/inc/_sideleft.php' ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>#</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>STT</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>#</th>
                                            <th>#</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $index = 0; ?>
                                    <?php foreach($user_list as $user) { ?>         
                                        <tr>
                                            <td><?php echo ++$index; ?></td>
                                            <td><?php echo $user['email']; ?></td>
                                            <td><?php echo $user['password']; ?></td>
                                            <td>
                                            <a class="btn btn-primary" href="edit.php?user_id=<?php echo 
                                            $user['id']; ?>">Edit</a>
                                            </td>
                                            <td>
                                            <a class="btn btn-danger" href="delete.php?user_id=<?php echo 
                                            $user['id']; ?> ">Delete</a></td>
                                        </tr>
                                        <?php } ?>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="../../view/public/admin/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../../view/public/admin/js/scripts.js"></script>
        <script src="../../view/public/admin/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../../view/public/admin/js/datatables-simple-demo.js"></script>
    </body>
</html>
