<?php
session_start();
ob_start();
include_once "dao/pdo.php";
include_once "dao/food.php";
include_once "dao/user.php";



include_once "view/header.php";
if (isset($_GET['pg']) && ($_GET['pg'] != "")) {
    switch ($_GET["pg"]) {
        case 'menu':
            $food_3 = get_food_3(8);
            include_once "view/menu.php";
            break;
        case 'about':
            include_once "view/about.php";
            break;
        case 'booking':
            include_once "view/booking.php";
            break;
        case 'contact':
            include_once "view/contact.php";
            break;
        case 'service':
            include_once "view/service.php";
            break;
        case 'login':
            if (isset($_POST['user']) && isset($_POST['pass'])) {
                $kq = user_login($_POST['user'], $_POST['pass']);
                if ($kq) {
                    // đúng thì đăng nhập thành công
                    $_SESSION['user'] = $kq;
                    header('Location:index.php');
                } else {
                    $txt_erro = "Đăng nhập không thành công";
                    include_once "view/login.php";
                }
            }
            if (isset($_POST['submit'])) {
                $PhoneNumber = $_POST['PhoneNumber'];
                $Username = $_POST['Username'];
                $Password = $_POST['Password'];
                $ketqua = user_add($PhoneNumber, $Username, $Password);
                $tb = "Đã đăng ký thành công tài khoản <strong>'$Username'</strong>";
                include_once "view/login.php";
            }
            include_once "view/login.php";
            break;
        case 'logout':
            unset($_SESSION['user']);
            header('Location:index.php');
            break;
        default:
            $food_3 = get_food_3(8);
            include_once "view/home.php";
            break;
    }
} else {
    $food_3 = get_food_3(8);
    include_once "view/home.php";
}
include_once "view/footer.php";
