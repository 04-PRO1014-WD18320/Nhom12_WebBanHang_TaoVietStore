

<div class="footer">
            nhom 12
           </div> 
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


<!-- <div>
    <h1><a href="kiemtradn.php?act=dangnhap">dn</a></h1>

</div> -->


