
<?php
//hàng lấy ra toàn bộ
function san_pham_all(){
    $conn= connection();
    $sql="SELECT *FROM tour_type order by id desc";
    // chuẩn bị
    $stmt= $conn->prepare($sql);
    $stmt->execute();
    $sp=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $sp;
}
 


// top 6 sản phẩm hàng hóa
function san_pham_6_news(){
        $conn= connection();
        $sql="SELECT *FROM tour_type order by id desc LIMIT 0,6";
        // chuẩn bị
        $stmt= $conn->prepare($sql);
        $stmt->execute();
        $sp=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $sp;
}

// TOP 3 SẢN PHẢM GIẢM GIÁ
function san_pham_top_3_sale(){
    
        $conn= connection();
        $sql="SELECT *FROM tour_type order by giam_gia desc LIMIT 0,3";
        // chuẩn bị
        $stmt= $conn->prepare($sql);
        $stmt->execute();
        $sp=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $sp;

}
// lấy ra một sản phẩm 
function san_pham_one($id){
    $conn= connection();
        $sql="SELECT *FROM tour_type where id=$id";
        // chuẩn bị
        $stmt= $conn->prepare($sql);
       
        $stmt->execute();
        //lấy dữ liệu
        $sp=$stmt->fetch(PDO::FETCH_ASSOC);
        return $sp;
}
// danh sách sản phẩm cùng loại
function hang_hoa_cung_loai($ma_hh,$ma_loai){
    $conn= connection();
    $sql="SELECT *FROM hang_hoa where ma_loai=$ma_loai and ma_hh<>$ma_hh LIMIT 0,6";
    // chuẩn bị
    $stmt= $conn->prepare($sql);
    $stmt->execute();
    $hanghoa=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $hanghoa;
}
//hàng hóa theo loại
function hang_hoa_theo_loai($ma_loai){
    $conn= connection();
    $sql="SELECT *FROM hang_hoa where ma_loai=$ma_loai  order by ma_hh desc";
    // chuẩn bị
    $stmt= $conn->prepare($sql);
    $stmt->execute();
    $hanghoa=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $hanghoa;
}
// insert hàng hóa
function san_pham_insert($id,$ten, $mota,$gia){
    $conn= connection();
    $sql = "INSERT INTO tour_type(id,tour_name,  depcription,price) VALUES('$id', '$ten', '$mota', '$gia', )";

    //Chuẩn bị
    $stmt = $conn->prepare($sql);
    //Thực thi
    $stmt->execute();
    

}
// xóa
function san_pham_delete($ma_hh){
    $conn=connection();
    $sql="DELETE FROM hang_hoa where ma_hh='$ma_hh'";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
}
// update
function  san_pham_update($id,$ten, $mota,$hinh,$gia,$id_dm){
    $conn=connection();
$sql=" UPDATE tour_type set tour_name='".$ten.",'price='".$gia."', image ='".$hinh."',id_dm='".$ten."',depcription='".$mota."'where id=".$id;

$stmt=$conn ->prepare($sql);
$stmt->execute();
}