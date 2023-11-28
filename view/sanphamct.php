<?php
    extract($onesp);
?>
<link rel="stylesheet" href="view/css/chitietsp.css">
<div class="boxtitle">
    <?= $name ?>
</div>

<div class="ctai1">
    <?php
        $img = $img_path . $img;
     ?>

       <div class="product-details-container">
        
        <div class="product-image">
        <h1><?= $name ?></h1>
            <div class="chinh">
                <div class="img">
                <img src="<?= $img ?>">
                </div>
    
            </div>
    
    
    
            <div class="product-center" style="position:relative;">
                <p class="price current-product-price">
                    <strong>
                    <?= $price ?> ₫
                    </strong>
    
                    <i> | Giá đã bao gồm VAT</i>
    
    
                </p>
                <p class="freeship">
                    <i class="icon-freeship-truck"></i>
                    <span>
                        Miễn phí vận chuyển toàn quốc
                    </span>
                </p>
    
    
                
    
                <div class="product-option version">
                    <strong class="label">Lựa chọn phiên bản</strong>
                    <div class="options" id="versionOption" data-id="87">
                      
                        <div data-sku="MU7K3VN" class="item selected">
                            <a href="/dien-thoai-di-dong/apple-iphone-15-pro-max-1tb-chinh-hang-vn-a">
                                <span><label><strong>1TB</strong></label></span>
                                <strong> <?= $price ?> ₫</strong>
                            </a>
                        </div>
                    </div>
                </div>
    
                <div class="product-option color">
                    <strong class="label">Lựa chọn màu và xem địa chỉ còn hàng</strong>
                    <div class="options" id="colorOptions">
                        <div data-name="Titan Xanh" data-hotsale="" data-pricenote="" data-buyonline="true"
                            data-bestprice="'.$price.' ₫" data-lastprice="" data-idx="0" data-hex="#3d4555" data-title=""
                            data-id="395" data-sku="MU7K3VN" class="item selected">
                            <span><label><strong>Titan Xanh</strong></label></span>
                            <strong><?= $price ?> ₫</strong>
                            <div class="colorGuide" style="background:#3d4555">
                                <label><strong>Titan Xanh</strong></label>
                            </div>
                        </div>
                        
                        
    
                    </div>
                </div>
    
    
                <div style="display:flex;">
    
    
                    <div class="renew"
                        style="border:1px solid #ddd; border-radius:5px; margin:5px 0; padding:8px; background:#fff; text-align:center; flex-grow:2">
                        <div>Trợ giá lên tới <strong data-val="2000000" class="renewPrice">2,000,000 ₫</strong> khi thu cũ
                            đổi mới</div>
                        <div style="font-weight:bold; font-size:23px;"><strong class="renewValue text-red"><?= $price ?> ₫
                            </strong></div>
                    </div>
                </div>
    
    
    
    
                <div class="product-promotion">
                    <strong class="label text-green">KHUYẾN MÃI</strong>
                    <ul>
    
                        <li><span class="bag">KM 1</span></li>
                        <li>
                            <a href="" style="font-weight:normal">ZaloPay - Black Friday giảm thêm 550.000đ .</a>
                        </li>
                        <li><span class="bag">KM 2</span></li>
                        <li>
                            <a href="" style="font-weight:normal">Giảm thêm 30% giá trị máy cũ, tối đa 2.000.000đ</a>
                        </li>
    
                    </ul>
                </div>
    
               
    <div>
                        <button data-id="<?= $id ?>" class="ip-f" onclick="addToCart(<?= $id ?>, '<?= $name ?>', <?= $price ?>)">Thêm vào giỏ hàng</button>
                    </div>
    
    
    
    
    
                <div class="product-promotion" style="padding:8px; border-radius:6px; background:#fff; margin-top:15px;">
                    <div>
                        <strong class="label">ƯU ĐÃI THANH TOÁN</strong>
                        <ul>
    
                            <li>
                                <i class="icon-checked text-green"></i>
                                <a href="" style="font-weight:normal">VNPAY - Giảm thêm 300.000đ khi thanh toán qua VNPAY
                                    (Áp dụng
                                    cho đơn hàng trên 20 Triệu ).</a>
                            </li>
                            <li>
                                <i class="icon-checked text-green"></i>
                                <a href="" style="font-weight:normal">Home PayLater - Trả góp qua Home PayLater giảm tới
                                    1.000.000đ</a>
                            </li>
                            <li>
                                <i class="icon-checked text-green"></i>
                                <a href="" style="font-weight:normal">VPBank - Mở thẻ VPBank, ưu đãi tới 1.250.000đ.</a>
                            </li>
                            <li>
                                <i class="icon-checked text-green"></i>
                                <a href="" style="font-weight:normal">VIB - Nhận Voucher 250.000đ khi mở thẻ tín dụng VIB
                                    thành
                                    công.</a>
                            </li>
                        </ul>
                    </div>
    
                    <div>
                        <strong class="label">ƯU ĐÃI ĐI KÈM</strong>
                        <ul>
    
                            <li>
                                <i class="icon-checked text-green"></i>
                                Mua SIM Vinaphone HAPPY (2GB/ngày, miễn phí 1000 phút gọi) kèm Điện thoại, giá chỉ còn
                                300.000đ.
                            </li>
    
    
    
                        </ul>
                    </div>
                </div>
    
    
    
    <script src="main.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let totalProduct = document.getElementById('totalProduct');
    function addToCart(productId, productName, productPrice) {
       
        $.ajax({
            type: 'POST',
            url: 'view/addToCart.php',
            data: {
                id: productId,
                name: productName,
                price: productPrice
            },
            success: function(response) {
                totalProduct.innerText = response;
                alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!');
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>
</div>


<div class="ftclone1">
<strong class="label" style="font-size: larger;">Sản phẩm tương tự</strong>
</div>

<div class="contentt">
    <?php
        $counter = 0; 
        foreach ($sp_cung_loai as $sp_cung_loai) {
            if ($counter < 1) {
                extract($sp_cung_loai);
                $img = $img_path . $img;
                $linksp = "     " . $id;
               
                echo' </div>
                <div class="product-shop">
                    <div class="out-date">
                        <p class="title"><strong><a href="' . $linksp . '">' . $name . '</a></strong></p>
                        <div class="note">
                            <p><i>Giá:</i> <strong class="text-red">' . $price . ' ₫</strong></p>
        
                            Bảo hành chính hãng đến 3/10/24 , Bao xài đổi trả trong 30 ngày đầu
                        </div>
                    </div>
        
                </div>
        
        
            </div>';
                $counter++;
            } else {
                break; 
            }
        }
    ?> 
</div>
</div>
</main>

