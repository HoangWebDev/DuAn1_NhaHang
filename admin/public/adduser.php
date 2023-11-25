<!-- Main Content -->
<main>
    <!-- Recent Orders Table -->
    <div class="recent-orders">
        <h2>Thêm Tài Khoản</h2>
        <!-- Form Edit User -->
                <div class="form_update__food modal">
                    <form action="index.php?pg=adduseradmin" method="post" enctype="multipart/form-data" onsubmit="return checkUser();">
                        <div class="group_input">
                            <label for="Full Name">Họ Và Tên</label><hr>
                            <input type="text" placeholder="Họ và tên" name="FullName" id="FullName">
                            <div id="err_fullname" class="error"></div>
                        </div>
                        <div class="group_input">
                            <label for="Username">Tên Tài Khoản</label><hr>
                            <input type="text" placeholder="Tên tài khoản" name="Username" id="Username">
                            <div id="err_username" class="error"></div>
                        </div>
                        <div class="group_input">
                            <label for="Password">Mật Khẩu</label><hr>
                            <input type="text" placeholder="Mật khẩu" name="Password" id="Password">
                            <div id="err_password" class="error"></div>
                        </div>
                        <div class="group_input">
                            <label for="PhoneNumber">Số Điện Thoại</label><hr>
                            <input type="text" placeholder="Số điện thoại" name="PhoneNumber" id="PhoneNumber">
                            <div id="err_phonenumber" class="error"></div>
                        </div>
                        <div class="group_input">
                            <label for="Address">Địa Chỉ</label><hr>
                            <input type="text" placeholder="Địa chỉ" name="Address" id="Address">
                            <div id="err_address" class="error"></div>
                        </div>
                        <div class="group_input">
                            <label for="Email">Email</label><hr>
                            <input type="text" placeholder="Email" name="Email" id="Email">
                            <div id="err_email" class="error"></div>
                        </div>
                        <div class="group_input">
                            <label for="Role">Role</label><hr>
                            <input type="text" placeholder="Quản lí hoặc khách hàng" name="Role">
                        </div>
                        
                        <div class="group_btn">
                            <button type="submit" class="btn" name="btnadd" onclick="checkUser();">Thêm</button>
                            <button type="reset" class="btn btntp" name="reset">Nhập Lại</button>
                        </div>
                    </form>
                </div>  
            <!-- End Form Edit -->
    </div>
    <!-- End of Recent Orders -->
</main>
<!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="profile">
                    <div class="info">
                        <p>Chào, <b>Hoang</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="layout/images/profile-1.jpg">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="logo">
                    <img src="layout/images/logo.png">
                    <h2>Golden Spoon</h2>
                    <p>58 Thảo Điền, Hồ Chí Minh, VN</p>
                    <p>+84 899384048</p>
                    <p>restaurant@gmail.com</p>
                </div>
            </div>

            <div class="reminders">
                <div class="header">
                    <h2>Giờ Hoạt Động</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Thứ 2 - Thứ 7</h3>
                            <small class="text_muted">
                                09:00 AM - 22:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Chủ Nhật</h3>
                            <small class="text_muted">
                                10:00 AM - 23:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Thêm Lời Nhắc</h3>
                    </div>
                </div>

            </div>

        </div>
