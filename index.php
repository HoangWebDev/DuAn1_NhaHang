<?php 
    include_once "dao/pdo.php";
    include_once "dao/food.php";


    include_once "view/header.php";
    if(isset($_GET['pg'])&&($_GET['pg']!="")){
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
                # code...
                include_once "view/login.php";
                break;

            default:
            $food_3 = get_food_3(8);
            include_once "view/home.php";
                break;
        }
    }else {
        $food_3 = get_food_3(8);
        include_once "view/home.php";
    }
    include_once "view/footer.php";
?>