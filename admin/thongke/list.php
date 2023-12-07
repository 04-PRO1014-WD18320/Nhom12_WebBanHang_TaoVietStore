<div class="row">
            <div class="row formtitle">
                <h1>THỐNG KÊ SẢN PHẨM THEO LOẠI</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdsloai">
                    <table>
                        <tr>
                            <th>MÃ DANH MUC</th>
                            <th>TÊN DANH MỤC</th>
                            <th>SỐ LƯỢNG</th>
                            <th>GIÁ CAO NHẤT</th>
                            <th>GIÁ THẤP NHẤT</th>
                            <th>GIÁ TRUNG BÌNH</th>
                        </tr>
                        <?php
                        foreach ($listthongke as $thongke) {
                            extract($thongke);
                            echo'<tr>
                            <th>'.$madm.'</th>
                            <th>'.$tendm.'</th>
                            <th>'.$countsp.'</th>
                            <th>'.$maxprice.'</th>
                            <th>'.$minprice.'</th>
                            <th>'.$avgprice.'</th>
                        </tr>';
                           
                        }
                        ?>
                        
                       
                       
                    </table>
                </div>
                    <div class="row mb10">
                       <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
                     
                    </div>
            </div>
        </div>