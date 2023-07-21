<?php
    session_start();

    include ("../models/connection.php");
    include ("../models/binhluan.php");

     $id_tour =$_REQUEST['id_tour'];

     $dsbl= loadall_binhluan($id_tour);
     
     
                
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="row bl">
    <h1>Bình Luận</h1>
    <div class="boxcontent2 binhluan">
    <table class='table table-hover' >
                    <thead>
                        <tr>
                            <th>Nội dung bình luận</th>
                            <th>Người bình luận</th>
                            <th>Ngày bình luận</th>
                        </tr>
                    </thead>
                    <tbody>
                           
                    <?php

                            foreach ($dsbl as $key ){
                                // var_dump($key);die;
                                // extract($key);
                                
                            ?>   
                            <tr>
                                <td><?=$key['noidung']?></td>
                                <td><?=$key['id_tk']?></td>
                                <td><?=$key['ngay_bl']?></td>

                            </tr>
                            <?php   }    ?>
                        </tbody>
                    
            
        </table>
    </div>
    <div class="boxfooter binhluanform">
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="hidden" name="id_tour" value="<?=$id_tour?>">
            <textarea name="noidung" id="" cols="30" rows="10"></textarea>
            <input type="submit"name="guibinhluan" value="gửi bình luận">
        </form>
    </div>
    <?php
    if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
        $noidung=$_POST['noidung'];
        $id_tour=$_POST['id_tour'];
        $id_tk= $_SESSION['id_tk'];      
        $ngay_bl = date( 'd/m/Y');
        insert_binhluan($noidung,$id_tk,$id_tour,$ngay_bl);
        header("loacation:".$_SERVER['HTTP_REFERER']);
    }
    ?>
</div>
</body>
</html>