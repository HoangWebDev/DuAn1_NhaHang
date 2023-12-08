
<div class="container-xxl py-5 bg-dark hero-header">
  <div id="custom-login" class="py-5 mt-5">

    <div class="container" id="container-custom-login">

      <div class="form-container register-container">
        <form action="index.php?pg=login" method="post" onsubmit="return checkUser();">
          <h1>Đăng Ký</h1>
          
          <input type="text" placeholder="Số điện thoại" name="PhoneNumber" class="PhoneNumber"> 
          <div id="err_phonenumber" class="error"></div>
          <input type="text" placeholder="Họ và tên" name="FullName" class="FullName"> 
          <div id="err_fullname" class="error"></div>
          <input type="text" placeholder="Tên tài khoản" name="Username" class="Username">
          <div id="err_username" class="error"></div>
          <input type="password" placeholder="Mật khẩu" name="Password" class="Password">
          <div id="err_password" class="error"></div>
          <input type="submit" name="submit" value="Đăng ký" onclick="checkUser();">
          <?php
            if (isset($tb) && $tb != "") {
              echo "<font color='red'>"  .$tb. "</font>";
            }
            ?>
        </form>
      </div>      
      <div class="form-container login-container" onsubmit="return checkUser_login();">
        <form method="post" action="index.php?pg=login" >
          <h1>Đăng Nhập</h1>
          <input type="text" placeholder="Tên tài khoản" name="user" class="Username2">
          <div id="err_username2" class="error"></div>

          <input type="password" placeholder="Mật khẩu" name="pass" class="Password2">
          <div id="err_password2" class="error"></div>

          <div class="content">
            <div class="checkbox">
              <input type="checkbox" name="checkbox" id="checkbox">
              <label>Remember me</label>
            </div>
            <div class="pass-link">
              <a href="#">Quên mật khẩu?</a>
            </div>
          </div>
          <button type="submit" onclick="checkUser_login();">Đăng Nhập</button>
          <?php 
      if(isset($txt_erro)&&($txt_erro!="")){
        echo "<font color='red'>"  .$txt_erro. "</font>";
      }
      ?>
        </form>
      </div>
      
      

      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1 class="title">Chào Bạn</h1>
            <p>Nếu bạn có tài khoản, hãy đăng nhập tại đây!</p>
            <button class="ghost" id="login">Đăng Nhập
            </button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1 class="title">Đăng Ký Ngay</h1>
            <p>Nếu bạn chưa có tài khoản, hãy đăng ký với chúng tôi!</p>
            <button class="ghost" id="register">Đăng Ký
           
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

</div>
<script src="layout/js/login.js"></script>

<!-- login -->