<?php
session_start();
ob_start();
include "../dao/pdo.php";
include "../dao/user.php";
if (isset($_POST['submit']) && ($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $Role = check_admin($username, $password);
    $_SESSION['Role'] = $Role;
    if ($Role == 1) {
        header('location: index.php');
    } else {
        header('location: login.php');
        $txt_erro = "Username hoặc Password không tồn tại!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="layout/login.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div id="wrap-container">
        <div id="form-login">
            <h1>Đăng Nhập</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label for="text" class="title">Username:</label> <br>
                    <div class="box-group">
                        <input type="text" name="username" class="input username" placeholder=" " autofocus
                            autocomplete="off">
                        <label class="label">Username</label>
                    </div>
                </div>
                <div class="err" id="errUser"></div>
                <div class="form-group">
                    <label for="pass" class="title">Password:</label> <br>
                    <div class="box-group">
                        <input type="text" name="password" class="input password" placeholder=" " autocomplete="off">
                        <label class="label">Password</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="checkbox" class="title">Remember me </label>
                    <input type="checkbox" name="checkbox" class="input checkbox">
                </div>
                <div class="err" id="errPass"></div>
                <div class="register">
                    <p>Không có tài khoản! <a href="./form.html">Đăng Ký</a></p>
                </div>
                <input type="submit" value="Đăng Nhập" class="button" name="submit">
                <div class="or">
                    <span>Or</span>
                </div>
                <div class="socical">
                    <a href="" class="social">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="" class="social">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <a href="" class="social">
                        <ion-icon name="logo-google"></ion-icon>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="./js/login.js"></script>

</html>