<?php 
session_start();
ob_start();
require_once '../dao/user.php';
require_once '../dao/food.php';
require_once '../dao/typefood.php';
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
            case 'add':
                $typefood_all = getall_type_food();
                include_once "public/addfood.php";
                break;
            case 'addfoodadmin':
                if (isset($_POST['btnadd'])) {
                    $ID = $_GET['ID_TypeFood'];
                    $FoodName = $_POST['FoodName'];
                    $FoodPrice = $_POST['FoodPrice'];
                    $FileImage = $_FILES['FoodImage']['name'];
                    $Describe = $_POST['Describe'];
                    if ($FileImage != "") {
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["FoodImage"]["name"]);
                        move_uploaded_file($_FILES["FoodImage"]["tmp_name"], $target_file);
                      } 
                      //Gọi hàm insert
                      insert_food($ID, $FoodName, $FoodPrice, $FileImage, $Describe);
                      $tb = "Thêm thành công";
                    //   header('Location: index.php?pg=food');
                }
                $typefood_all = getall_type_food();
                // $getall_food = getall_food();
                // var_dump($typefood_all);
                include_once "public/food.php";
                break;
            case 'food':
                $getall_typefood = getall_type_food();
                $getall_food = getall_food();
                include_once "public/food.php";
                break;
            case 'users':
                $getall_user = getall_user();
                include_once "public/users.php";
                break;
            
            /* Thoát admin */
            case 'exit':
                if (isset($_SESSION['Role'])) unset($_SESSION['Role']);
                    header('Location: login.php');
                break;
            default:
            $getall_user = getall_user();
            include_once "public/home.php";
                break;
        }
    }else {
        $getall_user = getall_user();
        include_once "public/home.php";
    }
    include_once "public/footer.php";
}else{
    header("location:login.php");
}
?>