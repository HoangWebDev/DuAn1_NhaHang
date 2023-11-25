<?php 
    $show_food_1 = showfood($food_type_1);
    $show_food_2 = showfood($food_type_2);
    $show_food_3 = showfood($food_type_3);
?>
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Thực Đơn</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Thực Đơn</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<!-- Menu Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Thực Đơn</h5>
            <h1 class="mb-5">Món Ăn Phổ Biến</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                        <i class="fa fa-coffee fa-2x text-primary"></i>
                        <div class="ps-3">
                            <h6 class="mt-n1 mb-0">Đồ Uống</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                        <i class="fa fa-hamburger fa-2x text-primary"></i>
                        <div class="ps-3">
                            <h6 class="mt-n1 mb-0">Khai Vị</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                        <i class="fa fa-utensils fa-2x text-primary"></i>
                        <div class="ps-3">
                            <h6 class="mt-n1 mb-0">Món Chính</h6>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <?=$show_food_1?>
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <?=$show_food_2?>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <?=$show_food_3?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->