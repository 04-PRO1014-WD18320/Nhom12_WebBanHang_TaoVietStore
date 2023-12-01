

<div class="row mb">
    <div class="bentrai mr ">
        <div class="row mb">
            <div class="boxtitle">Gio Hang</div>
            <div class="row boxcontent cart">
                <table>
                    <tr>
                        <th>Hinh</th>
                        <th>San Pham</th>
                        <th>Don Gia</th>
                        <th>So luong</th>
                        <th>Thanh Tien</th>
                        <th>Thao Tac</th>
                    </tr>


                    <?php
                    $tong = 0;
                    $i = 0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        $hinh = $img_path . $cart[2];
                        $ttien = $cart[3] * $cart[4];
                        $tong += $ttien;

                        $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="xoa"></a>';
                        echo '<tr>
                        
                        <td img src="' . $hinh . '" alt="" height="80px"></td>
                        <td>' . $cart[1] . '</td>
                        <td>' . $cart[3] . '</td>
                        <td>' . $cart[4] . '</td>
                        <td>' . $ttien . '</td>
                        <td>' . $xoasp . '</td>
                        


                    </tr>';
                        $i += 1;
                    }
                    echo '<tr>
                    <td colspan="4">tong don hang</td>
                    
                    <td>' . $tong . '</td>
                </tr>';
                    ?>


                </table>

            </div>



        </div>
        <div class="row mb bill">
            <a href="index.php?act=bill"><input type="button" value="dong y at hang"></a> <a href="index.php?act=delcart"> <input type="button" value="Xoa gio hang"></a>
        </div>
    </div>


</div>