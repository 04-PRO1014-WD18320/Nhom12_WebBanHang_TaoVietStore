
        <section class="breadcrumb__area box-plr-75">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__wrapper">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">

                                  <li class="breadcrumb-item active" aria-current="page">Sảm Phẩm</li>
                                  <?php
                                 
                                    $counter = 0;
                                    foreach ($dssp as $sp) {
                            
                            
                                      if ($counter < 6) {
                                        extract($sp);
                                        $hinh = $img_path . $img;
                                        $linksp = "index.php?act=sanphamct&idsp=" . $id;
                                    ?>
                            
                                        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                                          <div class="product__item product__item-2 b-radius-2 mb-20">
                                            <div class="product__thumb fix">
                                              <div class="product-image w-img">
                                                <a href=" <?= $linksp ?> ">
                                                  <img src="<?= $hinh ?>">
                                                </a>
                                              </div>
                            
                            
                                            </div>
                                            <div class="product__content product__content-2">
                                              <h6><a href="<?= $linksp ?>"><?= $name ?></a></h6>
                            
                                              <div class="price">
                                                <span> <?= number_format((int)$price, 0, ",", ".")  ?> <u>đ</u>
                                                </span>
                                              </div>
                                            </div>
                                            <div class="product__add-cart text-center">
                                              <?php
                                              extract($sp);
                                              ?>
                                              <button type="button" data-id="<?= $id ?>" onclick="addToCart(<?= $id ?>, '<?= $name ?>', <?= $price ?>)" class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                add to car
                                              </button>
                            
                                            </div>
                                          </div>
                                        </div>
                                    <?php
                                        $counter++;
                                      } else {
                                        break;
                                      }
                                    }
                            
                                    ?> 
                               
                                  
                                  
                                </ol>
                              </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb__area-end -->

        <!-- product-details-start -->
     


