<?php
function dang_ky( $email, $username, $password){
    $sql = "INSERT INTO tai_khoan(email, username, password) VALUES ('$email', '$username', $password)";
    pdo_execute($sql);
}
function dang_nhap($username, $password){
    $sql = "SELECT * FROM tai_khoan WHERE username = '".$username."' AND password = '".$password."'";
    $dn = pdo_query_one($sql);
    return $dn;
}
function checkUser($username, $password) {
    $conn = connection();
    $stmt = $conn->prepare("SELECT * FROM tai_khoan WHERE username='".$username."' AND password='".$password."' ");
    $stmt-> execute();
    $result = $stmt -> setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt-> fetchAll();
    if(count($kq)>0) return $kq[0]['level'];
    else return 0;
}
function getUserInfor($username, $password) {
    $conn = connection();
    $stmt = $conn->prepare("SELECT * FROM tai_khoan WHERE username='".$username."' AND password='".$password."' ");
    $stmt-> execute();
    $result = $stmt -> setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt-> fetchAll();
    return $kq;
}

?>