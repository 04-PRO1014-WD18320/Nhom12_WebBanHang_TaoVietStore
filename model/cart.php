<?php
function loadall_thongke(){
    $sql="select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
    $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    $sql.=" group by danhmuc.id ORDER BY danhmuc.id desc";
    $listthongke=pdo_query($sql);
    return $listthongke;
}

// function viewcart($del){
//     global $img_path;
//     $tong = 0; 
//      $i = 0;
//      if($del==1){
//         $xoasp_th = '<th>Thao Tác</th>';
//         $xoasp_td = "<a href='index.php?act=delcart&idcart=$i'><input type='button' value='Xóa'></a>";
//         $xoasp_td2= '<td></td>';
//     }else{
//         $xoasp_th="";
//         $xoasp_td="";
//     }
//     echo '<tr>
//             <th>Hình </th>
//             <th>Sản Phẩm</th>
//             <th>Số Lượng</th>
//             <th>Thành Tiền</th>
//             '.$xoasp_th.'
//         </tr>';
//      foreach($_SESSION['mycart']as $cart){
//         $hinh = $img_path.$cart[2];
//         $ttien = $cart[3]*$cart[4];
//         $tong = $ttien;
//         if($del==1){

//             $xoasp_td = "<a href='index.php?act=delcart&idcart=$i'><input type='button' value='Xóa'></a>";
//         }else{
//             $xoasp_td="";
//         }
//             echo "
//              <tr>
//              <td>img src ="'.$hinh.'"alt="" height= "80px"></td>
//              <td>"$cart[1]."</td>
//              <td>"$cart[3]."</td>
//              <td>"$cart[4]."</td>
//              <td>"$ttien."</td>
//              <td>"$xoasp."</td>
//              </tr>" ;
//              $i +=1;

//     }   
//     echo 
//     '<tr>
//     <td colpan = "4"> Tổng Đơn Hàng </td>
//     <td>'.$tong.'</td>
//     '.$xoasp_td2.';
//     </tr>'
// }
// function billct($listbill){
//     global $img_path;
//     $tong = 0; 
//      $i = 0;
//     echo '<tr>
//             <th>Hình </th>
//             <th>Sản Phẩm</th>
//             <th>Số Lượng</th>
//             <th>Thành Tiền</th>
//         </tr>';

//      foreach($_listbill as $cart){
//         $hinh = $img_path.$cart['img'];
//         $tong+= $cart['thanhtien'];
//             echo "
//              <tr>
//              <td>img src ="'.$hinh.'"alt="" height= "80px"></td>
//              <td>"$cart['name']."</td>
//              <td>"$cart['price']."</td>
//              <td>"$cart['soluong']."</td>
//              <td>"$cart['thanhtien']."</td>
//              </tr>" ;
//              $i +=1;

//     }   
//     echo 
//     '<tr>
//     <td colpan = "4"> Tổng Đơn Hàng </td>
//     <td>'.$tong.'</td>
//     <tr>';
// }
//         function tongdonhang(){
//                 $tong=0;
//                 foreach($_SESSION['mycart']as $cart){
//                     $ttien = $cart[3]*$cart[4];
//                     $tong +=$ttien
//                 }
//             return $tong;   
//         }

//         function insert_bil($name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang){
//             $sql =" insert into bill(bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) value('$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
//             return pbo_execute_return_lastInsertId($sql);      
//         }
//         function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
//             $sql = "insert into cart (iduser,idpro,name,price,soluong,thanhtien,idbill)value ('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
//             return $sp;
//         }
//         function loadone_bill($id){
//             $sql='select* from bill where id='.$id;
//             $bill = pbo_query_one($sql);
//             return $bill;
//         }
//         function loadall_cart($idbill){
//             $sql='select* from cart where idbill='.$idbill;
//             $bill = pbo_query($sql);
//             return $bill;
//         }



?>