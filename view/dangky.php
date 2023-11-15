
<div class="container-xxl py-5 bg-dark hero-header">
  <div id="custom-login" class="py-5 mt-5">

    <div class="container" id="container-custom-login">


      <div class="form-container register-container">
        <form action="index.php?pg=dangky" method="post">
          <h1>Đăng Ký</h1>
          
          <input type="text" placeholder="Phone" name="PhoneNumber" id="PhoneNumber"> 
          <input type="text" placeholder="Name" name="Username" id="Username">
          <input type="password" placeholder="Password" name="Password" id="Password">
          <!-- <a href="index.php?pg=dangky">Đăng Ký</a> -->
          <input type="submit" name="submit" value="submit" >
          <!-- <a href="index.php?pg=dangky">Đăng ký</a> -->
          <span>Đăng ký với</span>
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
            <?php if(isset($_SESSION['thongbao'])): ?>
    <div class="alert alert-success" role="alert">
      <?=$_SESSION['thongbao']?>
  </div>
  <?php endif; unset($_SESSION['thongbao']); ?>

  <?php if(isset($_SESSION['tb'])): ?>
    <div class="alert alert-danger" role="alert">
      <?=$_SESSION['tb']?>
  </div>
  <?php endif; unset($_SESSION['tb']); ?>
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

</div>
<!-- login -->