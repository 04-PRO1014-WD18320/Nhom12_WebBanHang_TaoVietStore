<?php
        session_start();
        include "model/pdo.php";
        include "model/sanpham.php";    
        include "model/taikhoan.php";   
        include "model/danhmuc.php";  
        include "view/header.php";
        include "global.php";

       $dsdm=loadall_danhmuc();
       $spnew=loadall_sanpham_home();
  

        if((isset($_GET['act']))&&($_GET['act']!="")){
            $act=$_GET['act'];
            switch($act){
           

            case 'sanphamct':
                
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id=$_GET['idsp'];
                    $onesp=loadone_sanpham($id);
                    extract($onesp);
                    $sp_cung_loai=loadone_sanpham_cungloai($id,$iddm);
                    
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";/* nếu không có dữ liệu thì về home */
                }
               
                break;
           

                
            
            case 'thoat':
                session_unset();
                header('Location: index.php') ;
                break;

            case 'gioithieu':
                include "view/gioithieu.php";
                break;

            case 'lienhe':
                include "view/lienhe.php";
                break;

            default:
                include "view/home.php";
                break;
            }
        }else{
            include "view/home.php";
        }
        
        include "view/footer.php";

    ?>