
<div class="container-xxl py-5 bg-dark hero-header">
  <div id="custom-login" class="py-5 mt-5">

    <div class="container" id="container-custom-login">

      <div class="form-container register-container">
        <form action="index.php?pg=login" method="post">
          <h1>Đăng Ký</h1>
          
          <input type="text" placeholder="Phone" name="PhoneNumber" id="PhoneNumber"> 
          <input type="text" placeholder="Name" name="Username" id="Username">
          <input type="password" placeholder="Password" name="Password" id="Password">
          <!-- <a href="index.php?pg=dangky">Đăng Ký</a> -->
          <!-- <button type="submit" name="submit" value="submit" ></button>  -->
          <input type="submit" name="submit" value="Đăng ký">
          <?php
            if (isset($tb) && $tb != "") {
              echo "<font color='red'>"  .$tb. "</font>";
            }
            ?>

          <!-- <a href="index.php?pg=dangky">Đăng ký</a> -->
          <!-- <span>Đăng ký với</span>
          <div class="social-container">
            <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
            <a href="#" class="social"><i class="lni lni-google"></i></a>
            <a href="#" class="social"><i class="lni lni-linkedin-original"></i></a>
          </div> -->
        </form>
      </div>      
      <div class="form-container login-container">
        <form method="post" action="index.php?pg=login">
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
          <?php 
      if(isset($txt_erro)&&($txt_erro!="")){
        echo "<font color='red'>"  .$txt_erro. "</font>";
      }
      ?>
          <!-- <span>Đăng nhập với</span>
          <div class="social-container">
            <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
            <a href="#" class="social"><i class="lni lni-google"></i></a>
            <a href="#" class="social"><i class="lni lni-linkedin-original"></i></a>
          </div> -->
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