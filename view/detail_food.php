<?php
    extract($detail);
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

<div class="container-xxl">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-end">
                <img class="flex-shrink-0 img-fluid rounded" src="uploads/<?=$FoodImage?>" style="height: 70%;" alt="">
            </div>
            <div class="col-lg-6">
                <h2 class="section-title text-start ff-secondary text-primary fw-normal mb-4"><?=$FoodName?></h2>
                <h4 class="text-start ff-secondary text-primary fw-normal mb-4"><strong>Giá:</strong> <?=number_format($FoodPrice,0,'.','.')?>VND</h4>
                <p class="mb-2"><strong>Mô Tả:</strong> <?=$FoodDescribe?></p>
                <button class="btn btn-primary py-2 my-2" type="submit" name="addcart" style="width: 150px;"><i class="fas fa-cart-plus fa-lg"></i></button>
                <div class="d-flex pt-2">
                            <a class="btn btn-outline-dark btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-dark btn-social" href=""><i class="fab fa-facebook"></i></a>
                            <a class="btn btn-outline-dark btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-dark btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>