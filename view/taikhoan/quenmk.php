<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quen Mat Khau</title>
    <link rel="stylesheet" href="view/css/quenmk1.css">
   

</head>
<body>

    <div class="container">
    <div class="boxx">
        <form action="kiemtradn.php?act=quenmk" method="post" >
     
            <h1>Quen Mat Khau</h1><br>
          
                <input type="email" name="email"  placeholder=" " required>
                <label for="tendn">Email</label>
                <br>
                <input class="btn" type="submit" value="gui" name="guiemail"  >
                <input class="btn "type="reset" value="nhap lai">
          
            
        <h2 class="thongbao">
                            <?php

                                if(isset($thongbao)&&($thongbao!="")){
                                    echo $thongbao;
                                }

                            ?>
      </h2>
      </form>
            </div>
    </div>
    <div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    
            </ul>
    </div >
</body>
</html>

    
</body>
</html> -->





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang Nhap</title>
    <link rel="stylesheet" href="view/css/quenmk1.css">

</head>
<body>

    <div class="container">
    <div class="boxx">
        <form action="index.php?act=quenmk" method="post">
            <h1>Quen Mat Khau</h1>
           
        
                <input type="text" name="name"  placeholder=" " required>
                <label for="tendn">Email</label>
                <input class="btn" type="submit" value="Gửi" name="guiemail"  >
                <input class="btn" type="submit" value="Nhập Lại" name="nhaplai"  >
                
           
            </form>
            </div>
        <h2 class="thongbao">
                            <?php

                                if(isset($thongbao)&&($thongbao!="")){
                                    echo $thongbao;
                                }

                            ?>
      </h2>
      
    </div>
    <div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    
            </ul>
    </div >
</body>
</html>

    
</body>
</html>



