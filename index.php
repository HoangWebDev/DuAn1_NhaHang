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
                    $soluong = $_POST['soluong'];
                    $food = array("id"=>$id,"name"=>$name,"img"=>$img,"price"=>$price,"soluong"=>$soluong,"ttien"=>$ttien);
                    array_push($_SESSION['giohang'],$food);
                    header('Location: index.php?pg=booking');
                }
                break;
        case 'about':
            include_once "view/about.php";
            break;
            case 'booking':
                if(isset($_GET['del'])&&($_GET['del']>=0)){
                    $delIndex = $_GET['del'];
                    if (isset($_SESSION['giohang'][$delIndex])) {
                        unset($_SESSION['giohang'][$delIndex]);
                        header('Location: index.php?pg=booking');
                    }            
                }
                if(isset($_POST['submit']) && ($_POST['submit']) ){
                    
                    /* Lấy thông tin user khi chưa có thông tin */
                    $Username = "goldenspoon" . rand(1, 100);
                    $Password = "123456";
                    $FullName = $_POST['FullName'];
                    $PhoneNumber = $_POST['PhoneNumber'];
                    $Address = $_POST['Address'];
                    $Email = $_POST['Email'];
    
                    /* Kiểm tra $_SEESSION['user'] */
                    if(isset($_SESSION['user'])){
                        $ID_User = $_POST['ID'];
                    }else{
                        $ID_User = user_book_id($FullName, $PhoneNumber, $Address, $Email, $Username, $Password);
                    }
    
                    /* Lấy thông tin booking */
                    $Guests=$_POST['Guests'];
                    $Deposit=$_POST['Deposit'];
                    $DateTime=$_POST['DateTime'];
                    $Note=$_POST['Note'];
                    // $tongbill=tongbill();
    
                   $ID_Bill = booking_add_id($ID_User, $DateTime, $Guests, $Deposit, $Note);
                   
                        foreach($_SESSION['giohang'] as $cart) {
                            extract($cart);
                            booking_add_cart($ID_Bill,$id,$soluong,$ttien);
                        }
                    header('Location:index.php?pg=payment&&ID='.$ID_Bill);
                    }
                include_once "view/booking.php";
                break;
            case 'payment':
                if (isset($_GET['ID'])) {
                    $ID = $_GET['ID'];
                }

                $showbooking=showbooking($ID);
                $showbill=showbill($ID);
                include_once "view/payment.php";
                break;
        case 'contact':
            include_once "view/contact.php";
            break;
        case 'service':
            include_once "view/service.php";
            break;
        case 'login':
            // đăng nhập
            if (isset($_POST['user']) && isset($_POST['pass'])) {
                $kq = user_login($_POST['user'], $_POST['pass']);
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
            // đăng ký
            if(isset($_POST['submit'])&&($_POST['submit'])){
                $PhoneNumber=$_POST['PhoneNumber']; 
                $FullName = $_POST['FullName'];
                $Username=$_POST['Username'];
                $Password=$_POST['Password'];
                $check = user_checkPhoneNumber($PhoneNumber);
                if($check)
                    $tb = "Đăng ký không thành công";
                else {
                $ketqua = user_add($PhoneNumber,$FullName, $Username, $Password);
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
            /* Thanh toá    n */
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
