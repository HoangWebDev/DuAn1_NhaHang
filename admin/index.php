<?php 
session_start();
ob_start();
require_once 'public/header.php';
require_once 'public/nav.php';
if (isset($_SESSION['Role']) && ($_SESSION['Role'] == 1)) {
    include_once "public/header.php";
    if(isset($_GET['pg'])&&($_GET['pg']!="")){
        switch ($_GET["pg"]) {
            case 'menu':
                include_once "public/menu.php";
                break;
            case 'about':
                include_once "public/about.php";
                break;
            case 'booking':
                include_once "public/booking.php";
                break;
            case 'contact':
                include_once "public/contact.php";
                break;
            case 'service':
                include_once "public/service.php";
                break;
            
            /* Thoát admin */
            case 'exit':
                if (isset($_SESSION['Role'])) unset($_SESSION['Role']);
                    header('Location: login.php');
                break;
            default:
            include_once "public/home.php";
                break;
        }
    }else {
        include_once "public/home.php";
    }
    include_once "public/footer.php";
}else{
    header("location:login.php");
}
?>