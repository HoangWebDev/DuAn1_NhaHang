<?php
session_start();
ob_start();
if(!isset($_SESSION['giohang'])){
    $_SESSION['giohang'] = [];
}
include_once "dao/pdo.php";
include_once "dao/food.php";
include_once "dao/user.php";
include_once "dao/quanlibill.php";

include_once "view/header.php";
if (isset($_GET['pg']) && ($_GET['pg'] != "")) {
    switch ($_GET["pg"]) {
        case 'menu':
            // DATA
            $food_type_1 = get_food_type_1(8);
            $food_type_2 = get_food_type_2(8);
            $food_type_3 = get_food_type_3(8);
            include_once "view/menu.php";
            break;
        case 'addcart':
            if(isset($_POST['addcart'])){
                $id= $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $food = array("id"=>$id,"name"=>$name,"img"=>$img,"price"=>$price);
                array_push($_SESSION['giohang'],$food);
                header('Location: index.php?pg=booking');
            }
            break;
        case 'about':
            include_once "view/about.php";
            break;
        case 'booking':
            if(isset($_GET['del'])&&($_GET['del']>0)){
                $i = $_GET['del'] - 1;
                unset($_SESSION['giohang'][$i]);
                header('Location: index.php?pg=booking');
            }
            if(isset($_POST['submit']) && ($_POST['submit']) ){
                $ID_User=$_POST['ID'];
                $Guests=$_POST['Guests'];
                $Deposit=$_POST['Deposit'];
                $DateTime=$_POST['DateTime'];
                $Note=$_POST['Note'];

               $ID_Bill = booking_add($ID_User, $DateTime, $Guests, $Deposit, $Note);
               
                    foreach($_SESSION['giohang'] as $cart) {
                        extract($cart);
                        booking_add_cart($ID_Bill,$id);
                    }
                header('Location:index.php?pg=payment');
            }

            include_once "view/booking.php";
            break;
            case 'bill':
                include_once "view/bill.php";
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
                
                // $_SESSION['ID_User'] = $_SESSION['user']['ID'];
                if ($kq) {
                    // đúng thì đăng nhập thành công
                    $_SESSION['user'] = $kq;           
                    header('Location:index.php');
                } else {
                    $txt_erro = "Đăng nhập không thành công";
                    $_SESSION['ID_Booking'] = $kq;
                    include_once "view/login.php";
                }
            }
            
            if(isset($_POST['submit'])&&($_POST['submit'])){
                $PhoneNumber=$_POST['PhoneNumber']; 
                $Username=$_POST['Username'];
                $Password=$_POST['Password'];
                $check = user_checkPhoneNumber($PhoneNumber);
                if($check)
                    // $tb = "Số điện thoại <strong>'$PhoneNumber'</strong> đá đăng ký"
                    $tb = "Đăng ký không thành công";
                else {
                $ketqua = user_add($PhoneNumber, $Username, $Password);
                    $tb = "Đã đăng ký thành công tài khoản <strong>'$Username'</strong>"; 
                    // $_SESSION['ID']
                    include_once "view/login.php";  
                }
               }
            include_once "view/login.php";
            break;

            case 'user_info':
                if(isset($_POST['edit'])&&($_POST['edit'])){
                    $PhoneNumber=$_POST['PhoneNumber']; 
                    $Username=$_POST['Username'];
                    $Password=$_POST['Password'];
                    $Address = $_POST['Address'];
                    $Email = $_POST['Email'];
                    $ID=$_POST['id'];
                    $kq=user_update( $PhoneNumber, $Username, $Password, $Address, $Email, $ID);
                    if($kq){
                        $tb = "Bạn đã cập nhật thành công số điện thoại mới là: <strong>'$PhoneNumber'</strong>";

                    }
                    $_SESSION['user'];
                    header('Location:index.php?pg=user_info');  
                }
                include_once "view/user_info.php"; 
                break;

            case 'logout':
                unset($_SESSION['user']);
                header('Location:index.php');
                break;

            /* Detail Food */
            case 'detail_food':
                if(isset($_GET['FoodID'])&&($_GET['FoodID']>0)){
                    $ID = $_GET['FoodID'];
                    $detail = get_detail_food($ID);
                    include_once "view/detail_food.php";
                }
                break;
            /* Thanh toán */
            // case 'payment':
            //     include_once "view/payment.php";
            //     break;
            default:
            $food_type_1 = get_food_type_1(8);
                $food_type_2 = get_food_type_2(8);
                $food_type_3 = get_food_type_3(8);
            include_once "view/home.php";
            break;
    }
} else {
    $food_type_1 = get_food_type_1(8);
    $food_type_2 = get_food_type_2(8);
    $food_type_3 = get_food_type_3(8);
    include_once "view/home.php";
}
include_once "view/footer.php";
