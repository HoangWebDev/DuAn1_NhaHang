<?php 
session_start();
ob_start();
require_once '../dao/user.php';
require_once '../dao/food.php';
require_once '../dao/typefood.php';
require_once '../dao/statistical.php';
require_once '../dao/quanlibill.php';
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

        /* TyoeFood: 
        Add
        Edit
        Delete
        */
        case 'typefood':
            $getall_typefood = getall_type_food();
            include_once "public/typefood.php";
            break;

            case 'addtype':

                include_once "public/addtypefood.php";
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
                    require_once('public/updateformtypefood.php');
                } else {
                    require_once('public/404.php');
                }
                break;

            case 'updatetypefood':
                if (isset($_POST['btnupdate'])) {
                    $ID = $_POST['ID'];
                    $Name_TypeFood = $_POST['Name_TypeFood'];

                    if (empty($Name_TypeFood) && empty($ID)) {
                        $tb = "Vui lóng điền đầy đủ thông tin";
                        include_once "public/updateformtypefood.php";
                    }else if((strlen($Name_TypeFood)) < 3){
                        $tb = "Tên loại món ăn phải nhiều hơn 5 ký tự";
                        include_once "public/addtypefood.php";
                    }else{
                        update_typefood($ID, $Name_TypeFood);
                    }
                    
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

        case 'food':
            $getall_typefood = getall_type_food();
            $getall_food = getall_food();
            include_once "public/food.php";
            break;

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
            
                case 'delfood':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $ID = $_GET['id'];
                        delete_food($ID);
                    }   
                    // $getall_typefood = getall_type_food();
                    $getall_food = getall_food();
                    include_once "public/food.php";
                    break; 

                case 'editfood':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $ID = $_GET['id'];
                        $getone_food = getone_food($ID);
                        $getall_typefood = getall_type_food();
                        require_once('public/updateformfood.php');
                    }else{
                        include_once "public/home.php";
                    }
                    break;

                case 'updatefood':
                    if (isset($_POST['btnupdate'])) {
                        $ID = $_POST['ID'];
                        $ID_TypeFood = $_POST['ID_TypeFood'];
                        $FoodName = $_POST['FoodName'];
                        $FoodPrice = $_POST['FoodPrice'];
                        $FoodDescribe = $_POST['FoodDescribe'];
                        //Lấy hình
                        $FileImage = $_FILES['FoodImage']['name'];
                        if ($FileImage != "") {
                            $target_dir = "../uploads/";
                            $target_file = $target_dir . basename($_FILES["FoodImage"]["name"]);
                            move_uploaded_file($_FILES["FoodImage"]["tmp_name"], $target_file);
                            //Xóa hình đã có
                            $Image_Food = "../uploads/" . $_POST["Image"];
                            if (file_exists($Image_Food)) 
                                unlink($Image_Food);
                        }
                        //Cập nhật lên database
                        update_food($ID, $ID_TypeFood, $FoodName, $FoodPrice, $FoodDescribe, $FileImage);
                    }
                    // $getall_typefood = getall_type_food();
                    $getall_food = getall_food();
                    include_once "public/food.php";
                    break;
        /* End Food */

        /* User:
        Add
        Edit
        Delete      
        */
            case 'users':
                $getall_user = getall_user();
                include_once "public/users.php";
                break;

                case 'adduser':
                    
                    include_once "public/adduser.php";
                    break;

                case 'adduseradmin':
                    if (isset($_POST['btnadd'])) {
                        $FullName = $_POST['FullName'];
                        $Username = $_POST['Username'];
                        $Password = $_POST['Password'];
                        $PhoneNumber = $_POST['PhoneNumber'];
                        $Address = $_POST['Address'];
                        $Email = $_POST['Email'];
                        $Role = $_POST['Role'];
                        insert_user($FullName, $Username, $Password, $PhoneNumber, $Address, $Email, $Role);
                        $tb = "Thêm thành công";
                    }

                    $getall_user = getall_user();
                    include_once "public/users.php";
                    break;
                
                case 'edituser':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $ID = $_GET['id'];
                        $getone_user = getone_user($ID);
                        require_once('public/updateformuser.php');
                    }else{
                        include_once "public/home.php";
                    }
                    break;

                case 'updateuser':
                    if (isset($_POST['btnupdate'])) {
                        $ID = $_POST['ID'];
                        $FullName = $_POST['FullName'];
                        $Username = $_POST['Username'];
                        $Password = $_POST['Password'];
                        $PhoneNumber = $_POST['PhoneNumber'];
                        $Address = $_POST['Address'];
                        $Email = $_POST['Email'];
                        $Role = $_POST['Role'];
                        update_user($ID, $FullName, $Username, $Password, $PhoneNumber, $Address, $Email, $Role);
                    }
                    $getall_user = getall_user();
                    include_once "public/users.php";
                    break;

                case 'deluser':
                    if(isset($_GET['id']) && ($_GET['id'] > 0)){
                        $ID = $_GET['id'];
                        delete_user($ID);
                    }
                    $getall_user = getall_user();
                    include_once "public/users.php";
                    break;

        /* End User */

        /* Statistic (Thống Kê) */
                    case 'statistic':
                        $getall_statistic = getall_statistic();
                        include_once "public/statistic.php";
                        break;
        /* End Statistic */

        // Quản lý hóa đơn
                    case 'quanlibill':
                        $getall_qlbill = getall_qlbill();
                        include_once "public/quanlibill.php";
                        break;
        // Xóa hóa đơn
                        case 'delqlbill':
                            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                                $id = $_GET['id'];
                                delete_qlbill($id);
                                $getall_qlbill= getall_qlbill();
                            }else{
                                $tb = "Có dữ liệu không thể xoá";
                                $getall_qlbill= getall_qlbill();
                            }
                            include_once "public/quanlibill.php";
                            break;
        // Chi tiết hóa đơn
                        case 'detailbooking':
                            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                                $ID = $_GET['id'];
                                // $getone_qlbill = getone_qlbill($id);
                            }
                            $getall_detailbooking = getall_detailbooking($ID);
                            include_once "public/detailbooking.php";
                            break;
        // End hóa đơn

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