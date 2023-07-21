<?php
    function don_hang_all(){
        $conn= connection();
        $sql="SELECT *FROM tour_type order by id desc";
        // chuẩn bị
        $tkdh= $conn->prepare($sql);
        $tkdh->execute();
        $dh=$tkdh->fetchAll(PDO::FETCH_ASSOC);
        return $dh;
    }
?>