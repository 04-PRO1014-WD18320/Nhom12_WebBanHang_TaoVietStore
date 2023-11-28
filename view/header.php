<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaoVietStore</title>
    <link rel="stylesheet" href="view/css/style2.css">
    
    
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="" class="logo">
                <img src="view/upload/logo1.jpg" alt="">
            </a>
            <div class="menu">
                <div class="item">
                    <a href="">Trang Chủ</a>
                </div>
                <div class="item">
                    <a href="">Danh Mục</a>
                    <ul class="sub-menu">
                        <?php
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            $linkdm ="index.php?act=sanpham&iddm=".$id;
                            echo '    <li>
                            <a href="'.$linkdm.'">'.$name.'</a>
                            </li>';
                        }
                        ?>
                        <!-- <li><a href="">dien thoai</a></li>en
                        <li><a href="">dien thoai</a></li>
                        <li><a href="">dien thoai</a></li>

                        <li><a href="">dien thoai</a></li> -->
                    </ul>
                </div>
                
                <div class="item">
                    <a href="">Sản Phẩm</a>
                </div>

                <div class="item">
                    <a href="">Giới Thiệu</a>
                </div>

                <div class="item">
                    <a href="">Liên Hệ</a>
                </div>

                <div class="item">
                    <a href="">Chính Sách</a>
                </div>
                

                 </div>
                    <div class="actions">
                        <div class="items">
                            <img src="view/upload/timkiem2.jpg" alt="">

                </div>
                        <div class="items">
                            <img src="view/upload/muahang1.jpg" alt="">
        
                 </div>

                <button type="submit" class="btn">Dang Ki</button>
                <button type="submit" class="btn">Dang Nhap</button>
            </div>
            

        </div>