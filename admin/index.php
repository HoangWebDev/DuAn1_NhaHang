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
            case 'addtype':

                include_once "public/addtypefood.php";
                break;

        /* TyoeFood: 
        Add
        Edit
        Delete
        */
        case 'typefood':
            $getall_typefood = getall_type_food();
            include_once "public/typefood.php";
            break;

            case 'addtypefoodam':
                if (isset($_POST['btnadd'])) {
                    $Name_TypeFood = $_POST['NameTypeFood'];
                    insert_typefood($Name_TypeFood);
                }
                $getall_typefood = getall_type_food();
                include_once "public/typefood.php";
                break;
            case 'deltype':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    delete_typefood($id);
                }
                $getall_typefood = getall_type_food();
                include_once "public/typefood.php";
                break;

            case 'edittype':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $getone_typefood = getone_type_food($id);
                    require_once('public/updatetypefood.php');
                } else {
                    require_once('public/404.php');
                }
                break;

            case 'updateformtypefood':
                if (isset($_POST['btnupdate'])) {
                    $ID = $_POST['ID'];
                    $Name_TypeFood = $_POST['Name_TypeFood'];
                    update_typefood($ID, $Name_TypeFood);
                }
                $getall_typefood = getall_type_food();
                require_once('public/typefood.php');
                break;


        /* End Type Food */

        /* Food:
        Add
        Edit
        Delete
        */

            case 'add':
                $getall_typefood = getall_type_food();
                include_once "public/addfood.php";
                break;
            case 'addfoodadmin':
                if (isset($_POST['btnadd'])) {
                    $ID_TypeFood = $_POST['ID_TypeFood'];
                    $FoodName = $_POST['FoodName'];
                    $FoodPrice = $_POST['FoodPrice'];
                    $FileImage = $_FILES['FoodImage']['name'];
                    $FoodDescribe = $_POST['FoodDescribe'];
                    if ($FileImage != "") {
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["FoodImage"]["name"]);
                        move_uploaded_file($_FILES["FoodImage"]["tmp_name"], $target_file);
                      } 
                      //Gọi hàm insert
                      insert_food($ID_TypeFood, $FoodName, $FoodPrice, $FileImage, $FoodDescribe);
                      $tb = "Thêm thành công";
                    }
                    $getall_typefood = getall_type_food();
                    $getall_food = getall_food();
                    include_once "public/food.php";
                    //   header('Location: index.php?pg=food');
                break;
            case 'food':
                $getall_typefood = getall_type_food();
                $getall_food = getall_food();
                include_once "public/food.php";
                break;
                    
        /* End Food */

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