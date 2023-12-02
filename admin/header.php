<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/css/admin.css">
    <link rel="stylesheet" href="../view/css/dssp.css">

</head>

<body>
    <div class="container">
        <div class="row mb headeradmin">
         

            <h1>Táo Việt Store</h1>
        </div>
        
        <div class="row mb menu">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=adddm">Danh mục</a></li>

                <li><a href="index.php?act=addsp">San pham</a>
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
                        <!-- <li><a href="">dien thoai</a></li>
                        <li><a href="">dien thoai</a></li>
                        <li><a href="">dien thoai</a></li>

                        <li><a href="">dien thoai</a></li> -->
                    </ul>
            
            </li>
                <li><a >Gioi Thieu</a></li>
                <li><a >Lien He</a></li>
                <li><a href="index.php?act=dskh">Chinh Sach</a></li>
          

    

               
            </ul>
        </div>