<?php
$select_html = "";
foreach ($typefood_all as $item) {
    extract($item);
    $select_html .= "<option value='" . $ID_TypeFood . "'>" . $Name_TypeFood . "</option>";
}
?>
<!-- Main Content -->
<main>
    <!-- Recent Orders Table -->
    <div class="recent-orders">
        <h2>Thêm Món Ăn</h2>
        <div class="form_update__food">
            <form action="index.php?pg=addfoodadmin" method="post" enctype="multipart/form-data">
                <div class="group_input">
                    <label for="topic-name">Loại Món Ăn</label>
                        <select name="id_typefood">
                            <?= $select_html ?>
                        </select>
                </div>
                <div class="group_input">
                    <label for="FoodName">Tên Món Ăn</label><hr>
                    <input type="text" placeholder="Food Name" name="FoodName">
                </div>
                <div class="group_input">
                    <label for="FoodPrice">Giá Món Ăn</label><hr>
                    <input type="text" placeholder="Food Price" name="FoodPrice">
                </div>
                <div class="group_input">
                    <label for="Describe">Mô Tả</label><hr>
                    <textarea placeholder="Describe" name="Describe" cols="30" rows="10"></textarea>
                </div>
                <div class="group_input">
                    <label for="FoodImage">Hình Ảnh</label><hr>
                    <input type="file" placeholder="Food Image" name="FoodImage">
                </div>
                <div class="group_btn">
                    <button type="submit" class="btn" name="btnadd">Thêm</button>
                    <button type="reset" class="btn btntp" name="reset">Nhập Lại</button>
                </div>
            </form>
            <?php
            if(isset($tb) && ($tb) != "") echo $tb;
            ?>
        </div>  
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
