<?php
if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
    extract($_SESSION['user']);
}
?>
<div class="container-xxl py-5 bg-dark hero-header">
  <div id="custom-login" class="py-5 mt-5">

    <div class="container" id="container-custom-login">
    <div class="form-container login-container">
      </div>
      <div class="form-container register-container">
        <form action="index.php?pg=user_info" method="post" onsubmit="return checkUser_info();">
          <h1>Cập nhật thông tin</h1>
          <input type="text" placeholder="Số điện thoại" class="PhoneNumber_info" name="PhoneNumber" id="PhoneNumber" value="<?=$PhoneNumber?>"> 
          <div id="err_PhoneNumber_info" style="color: red" class="error"></div>
          <input type="text" placeholder="Họ và tên" class="Username_info" name="Username" id="Username" value="<?=$FullName?>">
          <div id="err_Username_info" style="color: white" class="error"></div>
          <input type="text" placeholder="Mật khẩu" name="Password" id="Password" value="<?=$Password?>">
          <input type="text" placeholder="Địa chỉ" name="Address" id="Address" value="<?=$Address?>">
          <input type="text" placeholder="Email" name="Email" id="Email" value="<?=$Email?>">
          <input type="hidden" name="id" value="<?=$ID?>">
          <input type="submit" name="edit" value="Cập nhật" onclick="checkUser_info();">  
          <?php
            if (isset($tb) && $tb != "") {
              echo "<font color='red'>"  .$tb. "</font>";
            }
            ?>
         
        </form>
      </div>      
    
      
      

      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <!-- <h1 class="title">Chào Bạn</h1>
            <p>Nếu bạn có tài khoản, hãy đăng nhập tại đây!</p>
            <button class="ghost" id="login">Đăng Nhập
            </button> -->
          </div>
          <div class="overlay-panel overlay-right">
            <h1 class="title">Cập nhật ngay</h1>
            <button class="ghost" id="register">Cập nhật
           
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

</div>
<!-- login -->