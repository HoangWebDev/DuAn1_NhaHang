<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Thanh Toán</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Thanh Toán</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<div class="container-xxl py-5">
    <div class="container">
        <section class="payment-info">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="">
                        <h2 class="section-title ff-secondary text-primary fw-normal mb-4">Nhà Cung Cấp</h2>
                        <h3 class="ff-secondary text-primary fw-normal mb-4">GoldenSpoon</h3>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>58 Thảo Điền, Hồ Chí Minh, VN</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>restaurant@gmail.com</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+84 899384048</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="">
                        <h2 class="section-title ff-secondary text-primary fw-normal mb-4">Khách Hàng</h2>
                        <h3 class="ff-secondary text-primary fw-normal mb-4">Tên KH</h3>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>58 Thảo Điền, Hồ Chí Minh, VN</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>asdadsadaa@gmail.com</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+84 899384048</p>
                    </div>
                </div>
            </div>
        <?php
            if(isset($showbill)&&(is_array($showbill))){
                extract($showbill);
            }

        ?>


            <div class="my-4" style="height: 1px; width: 100%; background-color: #ccc; "></div>
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <p class="fw-bold">Phương thức thanh toán: Tiền mặt</p>
                    <p class="fw-bold">Mã hoá đơn: <?=$showbill['ID_User'];?></p>
                </div>
                <div class="col-lg-6 text-center">
                    <p class="fw-bold">Ngày in: 22/10/2023</p>
                </div>
            </div>
            <div class="row g-0">
        <div class="col-md-12 d-flex align-items-start">
            <div class="p-5 w-100">
                <table class="table table-hover">
                    <thead style="background-color: #FEA116; color: white;">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Sản Phẩm</th>
                            <th scope="col">Đơn Giá</th>
                            <th scope="col">Số Lượng</th>
                            <th scope="col">Thành Tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>RÉMY MARTIN 1738 </td>
                            <td>2400000 đ</td>
                            <td>1</td>
                            <td>2400000 đ</td>
                        </tr>                                              
                        <tr>
                            <td colspan="4" class="text-end text-primary border-bottom-0"><strong>Tổng Cộng:</strong></td>
                            <td class="border-bottom-0 fw-bold">2000000 đ</td>
                        </tr>
                    </tbody>
                </table>       
            </div>
        </div>
        <div class="row justify-content-end">
                <div class="col-lg-3 text-end">
                    <table class="table table-hover">
                        <tr>
                            <td>Tổng Cộng:</td>
                            <td>2000000 đ</td>
                        </tr>
                        <tr>
                            <td>Cọc:</td>
                            <td>500 đ</td>
                        </tr>
                        <tfoot>
                            <tr>
                                <td>Tổng:</td>
                                <td>1500000 đ</td>
                            </tr>
                        </tfoot>
                    </table>
                    <img src="/layout/assets/img/signature.png" alt="">
                </div>
            </div>
        </section>
    </div>
</div>