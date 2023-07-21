<?php
function insert_binhluan($noidung,$id_tk,$id_tour,$ngay_bl){
    $sql = " INSERT INTO binh_luan (noidung,id_tk,id_tour,ngay_bl) values ('$noidung','$id_tk','$id_tour','$ngay_bl')";
    var_dump($sql);die;
    pdo_execute($sql);

//         $myarray = insert_binhluan($id_tk,$id_tour,$noi_dung,$ngay_bl);
// // Print PHP array using print_r() functions.
//         print_r($myarray);
} 
function loadall_binhluan($id_tour){
    $sql="SELECT*FROM binh_luan where id_tour=".$id_tour;
    $listbinhluan=pdo_query($sql);
    return $listbinhluan;
    
    }
?>  