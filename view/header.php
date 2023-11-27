
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Team 5</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="layout/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="layout/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="layout/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="layout/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="layout/assets/css/style.css" rel="stylesheet">
    <link href="layout/assets/css/login.css" rel="stylesheet">
</head>

<body>

    <div class="container-xxl bg-black p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-4 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>GoldenSpoon</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link">Trang Chủ</a>
                        <a href="index.php?pg=about" class="nav-item nav-link">Giới Thiệu</a>
                        <a href="index.php?pg=menu" class="nav-item nav-link">Thực Đơn</a>
                        <a href="index.php?pg=contact" class="nav-item nav-link">Liên Hệ</a>
                        <?php if( !isset($_SESSION['user']) ): ?>
                            <li class="nav-item">
                                <a href="index.php?pg=login" class="nav-item nav-link">Đăng Nhập</a>
                            </li>
                        <?php else: ?>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Tài Khoản ,<?=$_SESSION['user']['Username']?>
                            </a>
                            <ul class="dropdown-menu end-0" style="left:auto">
                                <!-- <li><a class="dropdown-item" href="#"> Thông tin tài khoảng</a></li>
                                <li><a class="dropdown-item" href="#">Lịch sử mua hàng</a></li> -->
                                <?php if($_SESSION['user']['Role']>=1):?>
                                    <li>
                                        <!-- <hr class="dropdown-divider"> -->
                                    </li>
                                    <li><a class="dropdown-item text-warning" href="admin">Admin</a></li>
                                <?php endif; ?>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-warning" href="index.php?pg=user_info">Tài khoản</a></li>
                                <li><a class="dropdown-item" href="?mod=user&pg=logout">Đăng xuất</a></li>
                            </ul>
                        </li>
                    <?php endif;?>    
                    </div>
                    <a href="#" class="btn btn-primary py-2 px-4 me-4" data-bs-toggle="modal" data-bs-target="#cartModal">
                        <i class="fas fa-shopping-cart fa-lg"></i>
                    </a>
                    <a href="index.php?pg=booking" class="btn btn-primary py-2 px-4">Đặt Bàn Ngay</a>
                </div>
            </nav>
            <!-- Navbar & Hero End -->

            
              <!-- Modal -->
            <div class="modal fade right" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="cartModalLabel">Giỏ Hàng Của Bạn</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php
                            // Hiển thị sản phẩm trong giỏ hàng
                            $show_modal = '';
                            foreach ($_SESSION['giohang'] as $food) {
                                extract($food);
                                $show_modal .= '<div class="d-flex align-items-center mb-4">
                                            <img class="flex-shrink-0 img-fluid rounded" src="uploads/' . $img . '" alt="" style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="d-flex justify-content-between">
                                                    <span>' . $name . '</span>
                                                    <span class="text-primary">' . $price . '</span>
                                                </h5>
                                                <div class="input-group d-flex justify-content-between">
                                                    <div class="input-group-content d-flex align-items-center">
                                                        <button class="btn btn-primary" type="button" id="decrementBtn">-</button>
                                                        <div class="col-3">
                                                            <input type="text" class="form-control text-center" value="1" id="quantityInput" readonly>
                                                        </div>
                                                        <button class="btn btn-primary" type="button" id="incrementBtn">+</button>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-danger" type="button" id="deleteBtn">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                            }
                            ?>
                            <?= $show_modal ?>
                        </div>
                        <div class="modal-footer">
                            <div class="w-100 d-flex justify-content-between align-items-center">
                                <span class="fw-bold">Tổng Tiền:</span>
                                <!-- Thêm logic tính tổng tiền ở đây -->
                                <span class="text-primary fw-bold" id="totalPrice">VNĐ</span>
                            </div>
                            <a href="index.php?pg=booking"><button type="button" class="btn btn-primary">Xác Nhận</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                // JavaScript để quản lý trạng thái của modal
                $('#cartModal').on('show.bs.modal', function() {
                    $('body').addClass('modal-open');
                    $(this).removeClass('hide');
                    $(this).addClass('show');
                });

                $('#cartModal').on('hide.bs.modal', function() {
                    $('body').removeClass('modal-open');
                    $(this).removeClass('show');
                    $(this).addClass('hide');
                });
            </script>
            
