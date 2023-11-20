<?php
       
        function loadone_sanpham($id){
            $sql="select *from sanpham where id=".$id;
            $sp = pdo_query_one($sql);
            return $sp;
        }
        function loadone_sanpham_cungloai($id,$iddm){
            $sql="select *from sanpham where iddm=".$iddm." AND id <>".$id;
            $listsanpham=pdo_query($sql);
            return $listsanpham;
        }

       
    ?>  