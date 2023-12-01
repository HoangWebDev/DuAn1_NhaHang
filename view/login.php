
<div class="container-xxl py-5 bg-dark hero-header">
  <div id="custom-login" class="py-5 mt-5">

    <div class="container" id="container-custom-login">

      <div class="form-container register-container">
        <form action="index.php?pg=login" method="post" onsubmit="return checkUser();">
          <h1>Đăng Ký</h1>
          
          <input type="text" placeholder="Số điện thoại" name="PhoneNumber" id="PhoneNumber"> 
          <div id="err_fullname" class="error"></div>
          <input type="text" placeholder="Họ và tên" name="FullName" id="PhoneNumber"> 
          <input type="text" placeholder="Tên tài khoản" name="Username" id="Username">
          <input type="password" placeholder="Mật khẩu" name="Password" id="Password">
          <input type="submit" name="submit" value="Đăng ký" onclick="checkUser();">
          <?php
            if (isset($tb) && $tb != "") {
              echo "<font color='red'>"  .$tb. "</font>";
            }
            ?>
        </form>
      </div>      
      <div class="form-container login-container">
        <form method="post" action="index.php?pg=login">
          <h1>Đăng Nhập</h1>
          <input type="text" placeholder="Tên tài khoản" name="user" >
          <input type="password" placeholder="Mật khẩu" name="pass" >
          <div class="content">
            <div class="checkbox">
              <input type="checkbox" name="checkbox" id="checkbox">
              <label>Remember me</label>
            </div>
            <div class="pass-link">
              <a href="#">Quên mật khẩu?</a>
            </div>
          </div>
          <button type="submit">Đăng Nhập</button>
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
<script>
<script src="./js/login.js"></script>
</script>
<!-- login -->