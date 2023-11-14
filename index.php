<?php 
    include_once "dao/pdo.php";
    include_once "dao/food.php";


    $get_all_food = get_all_food(6);


    include_once "view/header.php";
    if(isset($_GET['pg'])&&($_GET['pg']!="")){
        switch ($_GET["pg"]) {
            case 'menu':
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
            case 'login_user':
                if(isset($_POST['btnlogin']) && ($_POST['btnlogin']) && $_POST['username'] != "" && $_POST['password'] != "") {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $login = user_login($username, $password);
                    if(is_array($login)){
                        $_SESSION['user'] = $login;
                        header("location: index.php");
                    }else{
                        $tb = "Tài khoản hoặc mật khẩu không đúng!";
                        header("location: login.php");
                        break;
                    }
                }
                include_once "view/login.php";
                break;

                case 'login':
                    # code...
                    include_once "view/login.php";
                    break;

            default:
            $get_all_food = get_all_food(6);
            include_once "view/home.php";
                break;
        }
    }else {
        $get_all_food = get_all_food(6);
        include_once "view/home.php";
    }
    include_once "view/footer.php";
?>