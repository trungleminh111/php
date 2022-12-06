<?php require_once 'core/boot.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');

        * {
            box-sizing: border-box;
        }

        #wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;

        }

        body {
            font-family: 'Montserrat', sans-serif;
        }

        form {
            border: 1px solid #dadce0;
            border-radius: 5px;
            padding: 30px;
        }

        h3 {
            text-align: center;
            font-size: 24px;
            font-weight: 500;
        }

        .form-group {
            margin-bottom: 15px;
            position: relative;
        }

        input {
            height: 50px;
            width: 300px;
            outline: none;
            border: 1px solid #dadce0;
            padding: 10px;
            border-radius: 5px;
            font-size: inherit;
            color: #202124;
        }

        label {
            position: absolute;
            padding: 0px 5px;
            left: 5px;
            /* quan trong*/
            pointer-events: none;
            transform: translateY(-50%);
            top: 50%;
            background: #fff;
            transition: all 0.3s ease-in-out;
        }

        .form-group input:focus {
            border: 2px solid #1a73e8;
        }

        .form-group input:focus+label,
        .form-group input:valid+label {
            top: 0px;
            font-size: 13px;
            color: #1a73e8;
        }

        input#bnt-login {
            background: #1a73e8;
            color: #fff;
        }

        input#bnt-login:hover {
            opacity: 0.85;
        }

        a {
            margin-top: 15px;
            text-decoration: none;
            color: #202124;


        }

        .a {
            display: inline;
            margin-left: 80px;
        }

        .link {
            margin-top: 15px;
            text-decoration: none;
            color: #202124;
        }
    </style>
    <div id="wrapper">
        <form action="login.php" method="POST">
            <i style="color: red;"><?php if (isset($_SESSION['flash_message'])) echo  $_SESSION['flash_message'];
                                    unset($_SESSION['flash_message']); ?></i>
            <h3>Đăng nhập</h3>
            <div class="form-group">
                <input type="text" name="email" required>
                <label for="">Email</label>
            </div>
            <div class="form-group">
                <input type="password" name="password" required>
                <label for="">Mật khẩu</label>
            </div>
            <input type="submit" value="Đăng nhập" id="bnt-login">

            <div class="link">
                <a href="index.php" class="">Quay về trang chủ</a>
                <a href="register.php" class="a">Đăng kí</a>
            </div>
        </form>
    </div>

</body>

</html>