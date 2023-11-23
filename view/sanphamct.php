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

                    ?>
                </div>


                
                <div class="ftclone1">
                    Sản phẩm cùng loại
                </div>
                <div class="contentt">
                    <?php
                    foreach ($sp_cung_loai as $sp_cung_loai) {
                        extract($sp_cung_loai);
                        $img = $img_path . $img;
                        $linksp = "index.php?act=sanphamct&idsp=" . $id;
                        echo '<div class="row mb spct2"><img src="' . $img . '"></div>';
                        echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
                    }


                    ?>
                </div>
                </div>