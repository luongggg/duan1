<?php
function danh_muc_all(){
    $conn= connection();
    $sql="SELECT *FROM danh_muc order by id_dm desc";
    // chuẩn bị
    $stmt= $conn->prepare($sql);
    $stmt->execute();
    $dm=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $dm;
}
// lấy ra cột hàng
function danh_muc_one($danh_muc){
    $conn= connection();
        $sql="SELECT *FROM danh_muc where id_dm=$danh_muc";
        // chuẩn bị
        $stmt= $conn->prepare($sql);
        $stmt->execute();
        //lấy dữ liệu
        $dm=$stmt->fetch(PDO::FETCH_ASSOC);
        return $dm;
}
function danh_muc_insert($ten_dm)
{
    $sql = "INSERT INTO danh_muc(ten_dm) VALUES(?)";
    pdo_execute($sql, $ten_dm);
}
function danh_muc_update($id_dm,$ten_dm)
{
    $conn=  connection();
    $sql = " UPDATE danh_muc SET ten_dm ='".$ten_dm."' WHERE id_dm=".$id_dm;
   
    $stmt= $conn->prepare($sql);
    $stmt->execute();
}
function xoa_dm($id){
    $conn=connection();
    $sql = "DELETE FROM danh_muc WHERE id_dm=".$id;
    $conn->exec($sql);
}

