<?php
    function binh_luan_all(){
        $conn= connection();
        $sql="SELECT *FROM binh_luan order by id desc";
        // chuẩn bị
        $tkbl= $conn->prepare($sql);
        $tkbl->execute();
        $bl=$tkbl->fetchAll(PDO::FETCH_ASSOC);
        return $bl;
    }
?>