<?php 
                  extract($onesp);
                ?>
                    <div class="boxtitle">
                    <?=$name?>
                    </div>
                    <div class="row boxcontent">
                        <?php
                          
                            $img=$img_path.$img;
                            echo '<div class="row mb spct"><img src="'.$img.'"></div>';
                            echo $mota;

                        ?>
                    </div>
                </div>