<?php
extract($getone_food);
if($FoodImage != ""){
    $FoodImage = '../uploads/'.$FoodImage;
    if(file_exists($FoodImage)){
        $FoodImageNew = "<br><img src='".$FoodImage."' width='120px'>";
    }else{
        $FoodImageNew = "";
    }
}
$Name = $FoodName;
$ID_Food = $ID;
$Image = $FoodImage;
$select_html = "";
foreach ($getall_typefood as $item) {
    extract($item);
    if($ID == $ID_TypeFood){
        $slc = "selected";
    }else{
        $slc = "";
    }
    $select_html .= "<option value='".$ID."' ".$slc.">".$Name_TypeFood."</option>";
}
?>
<!-- Main Content -->
<main>
    <!-- Recent Orders Table -->
    <div class="recent-orders">
        <h2>Cập Nhật Món Ăn</h2>
        <div class="form_update__food">
            <form action="index.php?pg=updatefood" method="post" enctype="multipart/form-data" onsubmit="return checkFood();">
                <div class="group_input">
                    <label for="topic-name">Loại Món Ăn</label>
                        <select name="ID_TypeFood">
                            <?= $select_html ?>
                        </select>
                </div>
                <div class="group_input">
                    <label for="FoodName">Tên Món Ăn</label><hr>
                    <input type="text" placeholder="Food Name" name="FoodName" value="<?= $Name ?>" id="FoodName">
                    <div id="err_food_name" class="error"></div>
                </div>
                <div class="group_input">
                    <label for="FoodPrice">Giá Món Ăn</label><hr>
                    <input type="text" placeholder="Food Price" name="FoodPrice" value="<?= $FoodPrice ?>" id="FoodPrice">
                    <div id="err_food_price" class="error"></div>
                </div>
                <div class="group_input">
                    <label for="Describe">Mô Tả</label><hr>
                    <textarea placeholder="Describe" name="FoodDescribe" cols="30" rows="10" ><?= $FoodDescribe ?></textarea>
                </div>
                <div class="group_input">
                    <label for="FoodImage">Hình Ảnh</label><hr>
                    <input type="file" placeholder="Food Image" name="FoodImage" id="FoodImage"><?= $FoodImageNew?>
                    <div id="err_food_image" class="error"></div>
                </div>
                <div class="group_btn">
                    <input type="hidden" name="ID" value="<?= $ID_Food ?>">
                    <input type="hidden" name="Image" value="<?= $Image ?>">
                    <button type="submit" class="btn" name="btnupdate" onclick="checkFood();">Cập Nhật</button>
                    <button type="reset" class="btn btntp" name="reset">Nhập Lại</button>
                </div>
            </form>
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
