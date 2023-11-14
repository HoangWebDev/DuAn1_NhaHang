<?php 
    session_start();
    ob_start();
    include_once "dao/pdo.php";
    include_once "dao/food.php";
    include_once "dao/user.php";



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
            if(isset($_POST['user']) && isset($_POST['pass'])){
            $kq = user_login($_POST['user'],$_POST['pass']);   
            if($kq){
                // đúng thì đăng nhập thành công
                $_SESSION['user'] = $kq;
                header('Location:index.php');
            }
            else{
                 $_SESSION['loi'] = 'Tài khoản của bạn hoặc mật khẩu không chính xác!';
            }
            }
            include_once "view/login.php";
            if(isset($_POST['submit'])){
                $PhoneNumber=$_POST['PhoneNumber']; 
                $Username=$_POST['Username'];
                $Password=$_POST['Password'];
                $kq = user_checkPhoneNumber($PhoneNumber);
                if($kq){
                    //Đúng, trùng thì sẽ k thêm
                    $_SESSION['loi']='Không thể tạo với <strong>'.$PhoneNumber.'</strong>';
                }else{
                    //Khác PhoneNumber, thì sẽ thêm tài khoản
                    user_add($PhoneNumber, $Username, $Password);
                    $_SESSION['thongbao'] = 'Đã tạo tài khoản với tên <strong>'.$Username.'</strong>';
                }
            }
            
            //hiển thị dử liệu
                include_once "view/login.php";  
                break;
            case 'logout':
                unset($_SESSION['user']);
                header('Location:index.php');
                
    
                break;
            // case 'dangky':
            //     if(isset($_POST['submit'])){
            //         $PhoneNumber=$_POST['PhoneNumber']; 
            //         $Username=$_POST['Username'];
            //         $Password=$_POST['Password'];
            //         $kq = user_checkPhoneNumber($PhoneNumber);
            //         if($kq){
            //             //Đúng, trùng thì sẽ k thêm
            //             $_SESSION['loi']='Không thể tạo với <strong>'.$PhoneNumber.'</strong>';
            //         }else{
            //             //Khác PhoneNumber, thì sẽ thêm tài khoản
            //             user_add($PhoneNumber, $Username, $Password);
            //             $_SESSION['thongbao'] = 'Đã tạo tài khoản với tên <strong>'.$Username.'</strong>';
            //         }
            //     }
                include_once "view/dangky.php";
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