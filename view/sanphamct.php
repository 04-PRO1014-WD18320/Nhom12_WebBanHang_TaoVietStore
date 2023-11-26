<?php
    extract($onesp);
?>

<div class="boxtitle">
    <?= $name ?>
</div>

<div class="ctai1">
    <?php
        $img = $img_path . $img;
        echo '<div class="row mb spct"><img src="' . $img . '"></div>';
        echo $price;
        echo $mota;
        echo '<div class="row btnaddtocart">
        <form action="index.php?act=addtocart" method="post">
        <input type="hidden" name="id" value ="'.$id.'">
        <input type="hidden" name="name" value ="'.$name.'">
        <input type="hidden" name="img" value ="'.$img.'">
        <input type="hidden" name="price" value ="'.$price.'">
        <input type="submit" name="addtocart" value ="Mua ngay">
        </form>
        </div>';
        ///index.php?act=sanphamct&idsp=
    ?>
</div>

<!-- <div class="ftclone1">
    Sản phẩm cùng loại
</div>

<div class="contentt">
    <?php
        // $counter = 0; 
        // foreach ($sp_cung_loai as $sp_cung_loai) {
        //     if ($counter < 4) {
        //         extract($sp_cung_loai);
        //         $img = $img_path . $img;
        //         $linksp = "     " . $id;
        //         echo '<div class="row mb spct2"><img src="' . $img . '"></div>';
        //         echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
        //         $counter++;
        //     } else {
        //         break; 
        //     }
        // }
    ?> -->
</div>
</div>
