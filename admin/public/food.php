 <!-- Main Content -->
 <main>
    <!-- Recent Orders Table -->
    <div class="recent-orders">
        <h2>Tài Khoản</h2>
        <table id="table_id" class="display" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Tên món ăn</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($getall_food as $item) {
                    extract($item);
                    if($FoodImage != "") $FoodImage = '../uploads/'.$FoodImage;
                    echo'
                    <tr>
                    <td>'.$FoodName.'</td>
                    <td>'.$FoodPrice.'</td>
                    <td><img src="'.$FoodImage.'" alt=""></td>
                    <td>'.$Describe.'</td>
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
