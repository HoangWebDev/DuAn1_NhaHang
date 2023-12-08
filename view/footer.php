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
    <script>
var PhoneNumber = document.querySelector(".PhoneNumber");

let isPhonenumber = /(84|0[3|5|7|8|9])+([0-9]{8})\b/;

var FullName = document.querySelector(".FullName");
var Username1 = document.querySelector(".Username");
var Username2 = document.querySelector(".Username2");
var Password1 = document.querySelector(".Password");
var Password2 = document.querySelector(".Password2");
var FullName_booking= document.querySelector(".FullName_booking");
var PhoneNumber_booking= document.querySelector(".PhoneNumber_booking");
var Address_booking= document.querySelector(".Address_booking");
var Email_booking= document.querySelector(".Email_booking");
var PhoneNumber_info= document.querySelector(".PhoneNumber_info");
var Username_info= document.querySelector(".Username_info");




            // Kiểm tra from đăng ký
            var checkUser = function () {
                if (PhoneNumber.value == "") {
                    document.getElementById("err_phonenumber").innerHTML = "Số điện thoại không được bỏ trống";
                    PhoneNumber.focus();
                    return false;
                }else if(PhoneNumber.value.length < 5){
                    document.getElementById("err_phonenumber").innerHTML = "Số điện thoại không được dưới 5 số";
                    PhoneNumber.focus();
                    return false;
                }else if(!isPhonenumber.test(PhoneNumber.value)){
                  document.getElementById("err_phonenumber").innerHTML = "Số điện thoại phải đúng định dạng";
                  PhoneNumber.focus();
                  return false;
              }else{
                    document.getElementById("err_phonenumber").innerHTML = "";
                }
            
            // Kiem tra ho ten
                if (FullName.value == "") {
                    document.getElementById("err_fullname").innerHTML = " Họ và tên không được bỏ trống";
                    FullName.focus();
                    return false;
                }else if(FullName.value.length < 5){
                    document.getElementById("err_fullname").innerHTML = "Họ và tên không được dưới 5 ký tự";
                    FullName.focus();
                    return false;
                }else{
                    document.getElementById("err_fullname").innerHTML = "";
                }
            
                // Kiem tra username2
                
                if (Username1.value == "") {
                    document.getElementById("err_username").innerHTML = " Tên tài khoản không được bỏ trống";
                    Username1.focus();
                    return false;
                }else if(Username1.value.length < 5){
                    document.getElementById("err_username").innerHTML = "Tên tài khoản không được dưới 5 số";
                    Username1.focus();
                    return false;
                }else{
                        document.getElementById("err_username").innerHTML = "";
                    }

                    // Kiem tra password
                    if (Password1.value == "") {
                    document.getElementById("err_password").innerHTML = " Mật khẩu không được bỏ trống";
                    Password1.focus();
                    return false;
                }else if(Password1.value.length < 5){
                    document.getElementById("err_password").innerHTML = " Mật khẩu không được dưới 5 ký tự";
                    Password1.focus();
                    return false;
                }else{
                        document.getElementById("err_password").innerHTML = "";
                    }
                    return true;
                }
              
                // Kiểm tra from đăng nhập
                var checkUser_login = function (){
                if (Username2.value == "") {
                    document.getElementById("err_username2").innerHTML = " Tên tài khoản không được bỏ trống";
                    Username2.focus();
                    return false;
                }else if(Username2.value.length < 3){
                    document.getElementById("err_username2").innerHTML = "Tên tài khoản không được dưới 5 ký tự";
                    Username2.focus();
                    return false;
                }else{
                        document.getElementById("err_username2").innerHTML = "";
                    }

                    // Kiem tra password
                 if (Password2.value == "") {
                    document.getElementById("err_password2").innerHTML = " Mật khẩu không được bỏ trống";
                    Password2.focus();
                    return false;
                }else if(Password2.value.length <3){
                    document.getElementById("err_password2").innerHTML = " Mật khẩu không được dưới 5 ký tự";
                    Password2.focus();
                    return false;
                }else{
                        document.getElementById("err_password2").innerHTML = "";
                    }

                return true;
                }
                

                // check from booking
                var checkUser_booking = function (){
                    if (FullName_booking.value == "") {
                    document.getElementById("err_FullName_booking").innerHTML = " Tên tài khoản không được bỏ trống";
                    FullName_booking.focus();
                    return false;
                }else if(FullName_booking.value.length < 5){
                    document.getElementById("err_FullName_booking").innerHTML = "Tên tài khoản không được dưới 5 ký tự";
                    FullName_booking.focus();
                    return false;
                }else{
                        document.getElementById("err_FullName_booking").innerHTML = "";
                    }

                    // Kiem tra phonenumber
                    if (PhoneNumber_booking.value == "") {
                    document.getElementById("err_PhoneNumber_booking").innerHTML = " Số điện thoại không được bỏ trống";
                    PhoneNumber_booking.focus();
                    return false;
                }else if(PhoneNumber_booking.value.length < 5){
                    document.getElementById("err_PhoneNumber_booking").innerHTML = "Số điện thoại không được dưới 5 số";
                    PhoneNumber_booking.focus();
                    return false;
                }else{
                        document.getElementById("err_PhoneNumber_booking").innerHTML = "";
                    }

                    //kiểm tra địa chỉ
                    if (Address_booking.value == "") {
                    document.getElementById("err_Address_booking").innerHTML = " Địa chỉ không được bỏ trống";
                    Address_booking.focus();
                    return false;
                }else if(Address_booking.value.length < 5){
                    document.getElementById("err_Address_booking").innerHTML = "Địa chỉ không được dưới 5 ký tự";
                    Address_booking.focus();
                    return false;
                }else{
                        document.getElementById("err_Address_booking").innerHTML = "";
                    }

                    //kiểm tra email

                    if (Email_booking.value == "") {
                    document.getElementById("err_Email_booking").innerHTML = "  Email không được bỏ trống";
                    Email_booking.focus();
                    return false;
                }else if(Email_booking.value.length < 5){
                    document.getElementById("err_Email_booking").innerHTML = "Email không được dưới 5 ký tự";
                    Email_booking.focus();
                    return false;
                }else{
                        document.getElementById("err_Email_booking").innerHTML = "";
                    }

                return true;

                }



                var checkUser_info = function(){
                    // kiểm tra phonenumber
                    if (PhoneNumber_info.value == "") {
                    document.getElementById("err_PhoneNumber_info").innerHTML = " Số điện thoại không được bỏ trống";
                    PhoneNumber_info.focus();
                    return false;
                }else if(PhoneNumber_info.value.length < 5){
                    document.getElementById("err_PhoneNumber_info").innerHTML = "Số điện thoại không được dưới 5 số";
                    PhoneNumber_info.focus();
                    return false;
                }else{
                        document.getElementById("err_PhoneNumber_info").innerHTML = "";
                    }

                    //kiểm tra username
                    if (Username_info.value == "") {
                    document.getElementById("err_Username_info").innerHTML = " Họ và tên không được bỏ trống";
                    Username_info.focus();
                    return false;
                }else if(Username_info.value.length < 5){
                    document.getElementById("err_Username_info").innerHTML = "Họ và tên không được dưới 5 số";
                    Username_info.focus();
                    return false;
                }else{
                        document.getElementById("err_Username_info").innerHTML = "";
                    }

                return true;

                }

    </script>
</body>

</html>