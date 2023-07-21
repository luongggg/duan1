<?php
    function loadall_tour(){
        $sql = "SELECT * FROM tour_type";
        $danhsachtour=pdo_query($sql);
        return $danhsachtour;

    }


?>     