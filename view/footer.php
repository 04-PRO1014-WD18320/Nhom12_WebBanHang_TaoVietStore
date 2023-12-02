
    <!-- FOOTER -->
    <footer class="box_footer row mb demo">
 <!-- footer section starts -->
 <div id="footer">
            <div class="footer-left">
              <div class="footer-logo">
                <img src="view/upload/taoviet.jpg" alt="" />
              </div>
              <div class="card_1">
                <h3> ĐIỆN THOẠI TÁO VIỆT SỐ 1 VIỆT NAM</h3>
                <div>
                  <i class="fa-sharp fa-solid fa-location-pin"></i>
                  <p>
                    Tầng 2 tòa nhà T10, Times City Vĩnh Tuy, Hai Bà Trưng, Hà Nội.
                  </p>
                </div>
      
                <div>
                  <i class="fa-solid fa-phone-flip"></i>
                  <p>1900.63.69.36</p>
                </div>
      
                <div>
                  <i class="fa-solid fa-envelope"></i>
                  <p>info@tocotocotea.com</p>
                </div>
      
                <p>Số ĐKKD: 0106341306. Ngày cấp: 16/03/2017.</p>
                <p>Nơi cấp: Sở kế hoạch và Đầu tư Thành phố Hà Nội.</p>
                <div class="icons">
                  <i class="fa-brands fa-facebook"></i>
                  <i class="fa-brands fa-square-instagram"></i>
                  <i class="fa-brands fa-youtube"></i>
                  <i class="fa-brands fa-square-twitter"></i>
                  <i class="fa-brands fa-google-plus"></i>
                </div>
      
                <div class="images">
                  <div class="image">
                    <img
                      src="./img/anh4.jpg"
                      alt=""
                    />
                  </div>
                  <div class="image">
                    <img src="./img/anh1.jpg" alt="" />
                  </div>
              
      
                <div class="image_3 image">
                  <img src="./img/anh2.jpg" alt="" />
                </div>
                </div>
              </div>
            </div>
            <div class="footer-right">
              <div class="card_2">
                <h3>VỀ CHÚNG TÔI</h3>
                <a href="#">Giới thiệu về Táo Việt</a>
                <a href="gioithieu.html">Nhượng quyền</a>
                <a href="">Tin tức khuyến mại</a>
                <a href="">Cửa hàng</a>
                <a href="#">Quy định chung</a>
                <a href="#">TT liên hệ &#038; ĐKKD</a>
              </div>
              <div class="card_3">
                <h3>CHÍNH SÁCH</h3>
                <a href="#">Chính sách thành viên</a>
                <a href="#">Hình thức thanh toán</a>
                <a href="#">Vận chuyển giao nhận</a>
                <a href="#">Đổi trả và hoàn tiền</a>
                <a href="#">Bảo vệ thông tin cá nhân</a>
                <a href="#">Bảo trì, bảo hành</a>
              </div>
            </div>
          </div>
          <!-- footer section ends -->
</footer>

</div>
</body>
</html>
















           <a class="dropdownbtn" href="index.php?act=listCart">Giỏ hàng</a>
            <span id="totalProduct"><?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>
    </div>
    <div class="row mb ">
                <div class="boxtitle">Tai Khoan</div>
                <div class="boxcontent formtaikhoan">
                    <?php
                    if(isset($_SESSION['name'])){
                        extract($_SESSION['name']);
                     ?>
                         <div class="row mb10">
                    xin chao<br>
                    <?=$name?>
                </div>
                <div class="row mb10">
                <li>
                    <a href="index.php?act=quenmk">quen mat khau</a>
                </li>
                <li>
                    <a href="index.php?act=edit_taikhoan">cap nhat tai khoan</a>
                </li>
                <?php if($role==1){ ?>
                <li>
                    <a href="../admin/index.php">dang nhap Admin</a>
                </li>
                <?php }?>
                <li>
                    <a href="index.php?act=thoat">Thoat</a>
                </li>

                </div>


                    <?php

                    }else{

                  echo'chua co tt';

                 }?>
</body>
</html> 


 <div>
    <h1><a href="kiemtradn.php?act=dangnhap">dn</a></h1>
