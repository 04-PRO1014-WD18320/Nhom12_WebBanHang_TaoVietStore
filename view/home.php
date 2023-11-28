<!-- <link rel="stylesheet" href="view/css/css2.css"> -->
<header>
            <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="view/upload/banner1.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="view/upload/banner2.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="view/upload/banner3.jpg" style="width:100%">
    <div class="text">Caption Three</div> 
  </div>

  <!-- Next and previous buttons -->
  <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
        </header>
        <h2 style="text-align: center;
    margin-top: 20px;
    font-size: 32px;
    color: brown;
    ">IPhone</h2>
        <div class="row">
             
            <?php
            $i=0;
            foreach ($spnew as $sp) {
                extract($sp);
                    $hinh=$img_path.$img;
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    if(($i==2)||($i==5)||($i==8)){
                        $mr="mr";

                    }else{
                        $mr="";

                    }
                    echo '   <ul class="list-products">
                    
                    <div class="item'.$mr.'">
                    <table border="1">
                      <td> <a href="' . $linksp . '"> <img src="'.$hinh.'" alt="" height="300px" ></a>
                        <div class="name">'.$name.'</div>
                        <div class="price">'.$price.'</div> </td>
                        
                        </table>
                    </div>';
                 
           
            }
            
            ?>

        </div>
      <script>
  let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
