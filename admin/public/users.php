 <!-- Main Content -->
 <main>
    <!-- Recent Orders Table -->
    <div class="recent-orders">
        <h2>Quản Lý Tài Khoản</h2>
        <a href="index.php?pg=adduser" class="addfood">Thêm Tài Khoản</a>
        <table  id="table_id" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Họ và tên</th>
                    <th>Tên tài khoản</th>
                    <th>Mật khẩu</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($getall_user as $item) {
                    extract($item);
                        $edit = "<a href='index.php?pg=edituser&id=" . $ID . "'>Sửa</a>";
                        $del = "<a href='index.php?pg=deluser&id=" . $ID . "'>Xóa</a>";
                    echo'
                    <tr>
                    <td>'.$FullName.'</td>
                    <td>'.$Username.'</td>
                    <td>'.$Password.'</td>
                    <td>'.$PhoneNumber.'</td>
                    <td>'.$Address.'</td>
                    <td>'.$Email.'</td>
                    <td class="unblock">'.$edit.' - '.$del.'</td>
                    </tr>
                    ';
                }
                ?>
                
            </tbody>
        </table>
        <?php
                if(isset($tb) && ($tb) != "") echo "<h3 style='color:red'>" . $tb . "</h3>";
                ?>
        <a href="#">Show All</a>
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
                        <p>Chào, <b>Admin</b></p>
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
        <!-- End of Right Section -->

