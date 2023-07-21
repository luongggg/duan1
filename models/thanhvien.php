<?php

function getall_tv(){
    $conn=connection();
    $stmt = $conn->prepare("SELECT * FROM tai_khoan");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
   
  
}
function xoa($id){
    $conn=connection();
    $sql = "DELETE FROM tai_khoan WHERE id=".$id;
    $conn->exec($sql);
}
function sua($id){
    $conn=connection();
    $stmt = $conn->prepare("UPDATE tai_khoan where id='id'");
    // return $this->execute($stmt);
    
    // $stmt->execute();
    // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // $kq=$stmt->fetchAll();
    // return $kq;   set  username='$username',pass='$pass',email='$email',kich_hoat='$kichhoat',vai_tro='$vaitro'
}

