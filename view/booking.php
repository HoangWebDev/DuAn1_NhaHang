<?php 
    $show_cart = '';
    $tong=0;
    $i=1;

    
    foreach ($_SESSION['giohang'] as $food) {
        $tong+=$ttien;
        extract($food);
        $show_cart .= '<tr>
                        <td>'.$i.'</td>
                        <td>'.$name.'</td>
                        <td>'.$price.' đ</td>
                        <td>'.$soluong.'</td>
                        <td>'.$ttien.' đ</td>
                        <td class="text-center">
                            <a href="index.php?pg=booking&&del='.$i.'"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>';
                    
                
        $i++;
    }
        $show_cart.= '<tr>
                        <td colspan="2" class="text-end text-primary border-bottom-0"><strong>Tổng Cộng:</strong></td>
                        <td id="" class="text-white border-bottom-0">'.$tong.' đ</td>
                    </tr>';     
    
    if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){        
        $ID = $_SESSION['user']['ID'];
        $FullName = $_SESSION['user']['FullName'];
        $PhoneNumber = $_SESSION['user']['PhoneNumber'];
        $Address = $_SESSION['user']['Address'];
        $Email = $_SESSION['user']['Email'];
    }else{
        $ID = "";
        $FullName = "";
        $PhoneNumber = "";
        $Address = "";
        $Email = "";
    }

?>
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Đặt Bàn</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Đặt Bàn</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<!-- Reservation Start -->
<div class="container-xxl pb-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row g-0">
        <div class="col-md-6 bg-dark d-flex align-items-start">
            <div class="shopping-cart p-5 w-100">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Giỏ Hàng</h5>
                <h1 class="text-white mb-4">Giỏ Hàng Của Bạn</h1>
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Sản Phẩm</th>
                            <th scope="col">Đơn Giá</th>
                            <th scope="col">Số Lượng</th>
                            <th scope="col">Thành tiền</th>

                        </tr>
                    </thead>
                    
                    <tbody>
                        <?=$show_cart?>
                    </tbody>
                </table>       
            </div>
        </div>
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Đặt Bàn</h5>
                <h1 class="text-white mb-4">Đặt Bàn</h1>
                <form action="index.php?pg=booking" method="post">
                    <div class="row g-3">
                        <!-- <div class="col-md-6">
                            <div class="form-floating">
                                </div>
                            </div> -->
                            
                        <!-- Input ID User để add booking -->
                        <input type="hidden" class="form-control" id="name" name="ID" value="<?=$ID?>">

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" name="FullName" value="<?=$FullName?>">
                                <label for="peopleCount">Họ và tên</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" name="PhoneNumber" value="<?=$PhoneNumber?>">
                                <label for="peopleCount">Số điện thoại</label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" name="Address" value="<?=$Address?>">
                                <label for="peopleCount">Địa chỉ</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" name="Email" value="<?=$Email?>">
                                <label for="peopleCount">Email</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating date" id="date3"  data-target-input="nearest">
                                <input type="datetime" class="form-control datetimepicker-input" id="datetime" name="DateTime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                <label for="datetime">Ngày & Giờ</label>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="peopleCount" name="Guests"  placeholder="Số Người" min="1" max="10">
                                <label for="peopleCount">Số Người</label>
                            </div>
                        </div>
                    
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="peopleCount" name="Deposit" placeholder="Tiền Cọc" value="500.000đ" readonly>
                                <label for="peopleCount">Tiền Cọc</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" placeholder="Special Request" name="Note" id="message" style="height: 100px"></input>
                                <label for="message">Ghi Chú</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <input type="submit" class="btn btn-primary w-100 py-3" name="submit" value="Đặt Ngay">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="./js/login.js"></script>
<!-- Reservation Start -->