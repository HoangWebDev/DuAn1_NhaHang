<?php
    extract($getone_user)
?>
<!-- Main Content -->
<main>
    <!-- Recent Orders Table -->
    <div class="recent-orders">
        <h2>Thêm Tài Khoản</h2>
        <!-- Form Edit User -->
                <div class="form_update__food modal">
                    <form action="index.php?pg=updateuser" method="post" enctype="multipart/form-data">
                        <div class="group_input">
                            <label for="Full Name">Họ Và Tên</label><hr>
                            <input type="text" placeholder="Full Name" name="FullName" value="<?= $FullName ?>">
                        </div>
                        <div class="group_input">
                            <label for="Username">Tên Tài Khoản</label><hr>
                            <input type="text" placeholder="Username" name="Username" value="<?= $Username ?>">
                        </div>
                        <div class="group_input">
                            <label for="Password">Mật Khẩu</label><hr>
                            <input type="text" placeholder="Password" name="Password" value="<?= $Password ?>">
                        </div>
                        <div class="group_input">
                            <label for="PhoneNumber">Số Điện Thoại</label><hr>
                            <input type="text" placeholder="PhoneNumber" name="PhoneNumber" value="<?= $PhoneNumber ?>">
                        </div>
                        <div class="group_input">
                            <label for="Address">Địa Chỉ</label><hr>
                            <input type="text" placeholder="Address" name="Address" value="<?= $Address ?>">
                        </div>
                        <div class="group_input">
                            <label for="Email">Email</label><hr>
                            <input type="text" placeholder="Email" name="Email" value="<?= $Email ?>">
                        </div>
                        <div class="group_input">
                            <label for="Role">Role</label><hr>
                            <input type="text"  name="Role" readonly value="<?= $Role ?>">
                        </div>
                        
                        <div class="group_btn">
                            <input type="hidden" name="ID" value="<?= $ID ?>">
                            <button type="submit" class="btn" name="btnupdate">Cập Nhật</button>
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
