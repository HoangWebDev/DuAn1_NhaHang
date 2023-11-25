    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Liên Kết</h4>
                        <a class="btn btn-link" href="index.php">Trang Chủ</a>
                        <a class="btn btn-link" href="index.php?pg=about">Giới Thiệu</a>
                        <a class="btn btn-link" href="index.php?pg=service">Dịch Vụ</a>
                        <a class="btn btn-link" href="index.php?pg=contact">Liên Hệ</a>
                        <a class="btn btn-link" href="index.php?pg=menu">Thực Đơn</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Liên Hệ</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>58 Thảo Điền, Hồ Chí Minh, VN</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+84 899384048</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>restaurant@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Mở Cữa</h4>
                        <h5 class="text-light fw-normal">Thứ 2 - Thứ 7</h5>
                        <p>9:00 - 22:00</p>
                        <h5 class="text-light fw-normal">Chủ Nhật</h5>
                        <p>10:00 - 23:00</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Ý Kiến</h4>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Nhập nội dụng">
                            <button type="button"
                                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Gữi</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="layout/assets/lib/wow/wow.min.js"></script>
    <script src="layout/assets/lib/easing/easing.min.js"></script>
    <script src="layout/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="layout/assets/lib/counterup/counterup.min.js"></script>
    <script src="layout/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="layout/assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="layout/assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="layout/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="layout/assets/js/main.js"></script>
    <script src="layout/assets/js/login.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Lấy tất cả các ô chứa đơn giá
            var donGiaCells = document.querySelectorAll('td:nth-child(3)');
            var tongCong = 0;
            donGiaCells.forEach(function(cell) {
                var donGia = parseFloat(cell.innerText.replace(' đ', '').replace(',', ''));
                tongCong += donGia;
            });
            document.getElementById('tongCong').innerText = tongCong.toLocaleString() + ' đ';
        });
    </script>
</body>

</html>