<div class="container-xxl py-5 bg-dark hero-header">
  <div id="custom-login" class="py-5 mt-5">

    <div class="container" id="container-custom-login">
  <?php if(isset($_SESSION['thongbao'])): ?>
    <div class="alert alert-success" role="alert">
      <?=$_SESSION['thongbao']?>
  </div>
  <?php endif; unset($_SESSION['thongbao']); ?>

  <?php if(isset($_SESSION['loi'])): ?>
    <div class="alert alert-danger" role="alert">
      <?=$_SESSION['loi']?>
  </div>
  <?php endif; unset($_SESSION['loi']); ?>

      <div class="form-container register-container">
        <form action="" method="post">
          <h1>Đăng Ký</h1>
          
          <input type="text" placeholder="Phone" name="PhoneNumber" id="PhoneNumber"> 
          <input type="text" placeholder="Name" name="Username" id="Username">
          <input type="password" placeholder="Password" name="Password" id="Password">
          <!-- <a href="index.php?pg=dangky">Đăng Ký</a> -->
          <button type="submit" name="submit" value="submit" >Đăng Ký</button> 
          <span>Đăng ký với</span>
          <div class="social-container">
            <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
            <a href="#" class="social"><i class="lni lni-google"></i></a>
            <a href="#" class="social"><i class="lni lni-linkedin-original"></i></a>
          </div>
        </form>
      </div>
      <?php if( isset($_SESSION['loi'])): ?>
                    <div class="alert alert-danger" role="alert">
                    <?=$_SESSION['loi']?>
                    </div>      
                <?php endif; unset($_SESSION['loi'])?>
      <div class="form-container login-container">
        <form method="post" action="">
          <h1>Đăng Nhập</h1>
          <input type="text" placeholder="Username" name="user" >
          <input type="password" placeholder="Password" name="pass" >
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
          <span>Đăng nhập với</span>
          <div class="social-container">
            <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
            <a href="#" class="social"><i class="lni lni-google"></i></a>
            <a href="#" class="social"><i class="lni lni-linkedin-original"></i></a>
          </div>
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
<!-- login -->