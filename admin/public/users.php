 <!-- Main Content -->
 <main>
    <!-- Recent Orders Table -->
    <div class="recent-orders">
        <h2>Tài Khoản</h2>
        <table>
            <thead>
                <tr>
                    <th>Họ và tên</th>
                    <th>Tên tài khoản</th>
                    <th>Mật khẩu</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($getall_user as $item) {
                    extract($item);
                    echo'
                    <tr>
                    <td>'.$FullName.'</td>
                    <td>'.$Username.'</td>
                    <td>'.$Password.'</td>
                    <td>'.$PhoneNumber.'</td>
                    <td>'.$Address.'</td>
                    <td>'.$Email.'</td>
                    <td class="primary">Details</td>
                    </tr>
                    ';
                }
                ?>
                <!-- <td>Hoàng</td>
                <td>12</td>
                <td>Ha Noi</td>
                <td>Single</td>
                <td class="primary">Details</td> -->
            </tbody>
        </table>
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
        <div class="dark-mode">
            <span class="material-icons-sharp active">
                light_mode
            </span>
            <span class="material-icons-sharp">
                dark_mode
            </span>
        </div>

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
            <h2>Restaurant</h2>
            <p>Nhà Hàng Cao Cấp</p>
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
                        09:00 AM - 10:00 PM
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
                        10:00 AM - 11:00 PM
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
