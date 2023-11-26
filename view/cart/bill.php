<div class="row mb">
    <div class="boxtrai mb">
        <form action="index.php?act=billconfirm" method="post">
            <div class="row mb">
                <div class="boxtittle">Thông Tin Đặt Hàng</div>
                <div class="row boxcontent billform">
                    <table>
                        <?php
                            if(isset($_SESSION['user'])){
                                $name = $_SESSION['user']['name'];
                                $address = $_SESSION['user']['address'];
                                $email = $_SESSION['user']['email'];
                                $tel = $_SESSION['user']['tel'];
                            }else{
                                $name = "";
                                $address ="";
                                $email="";
                                $tel= "";
                            } 
                        ?>
                        <tr>
                            <td>Người Đặt Hàng</td>
                            <td><input type="text" name="name" value ="<?php echo $name ?>"></td>
                        </tr>
                        <tr>
                            <td>Địa Chỉ</td>
                            <td><input type="text" name="address" value ="<?php echo $address ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value ="<?php echo $email ?>"></td>
                        </tr>
                        <tr>
                            <td>Số Điện Thoại</td>
                            <td><input type="text" name="tel" value ="<?php echo $tel ?>"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtittle">Phương Thức Thanh Toán</div>
                <div class="row boxcontent">
                    <table>
                        <tr>
                            <td><input type="radio" name="pttt" checked> Trả tiền khi nhận hàng</td>
                            <td><input type="radio" name="pttt"> Thanh Toán Online</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtittle">Thông Tin Giỏ Hàng</div>
                <div class="row boxcontent cart">
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Hình</th>
                            <th>Sản Phẩm</th>
                            <th>Đơn Giá</th>
                            <th>Thành Tiền</th>
                        </tr>
                        <?php viewcart(0); ?>
                    </table>
                </div>
            </div>
            <div class="row mb bill">
                <input type="submit" value="Bước Tiếp Theo">
            </div>
        </form>
    </div>
    <div class="div boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>
