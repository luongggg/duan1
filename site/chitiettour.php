<div class="chitiettour">
<?php
 extract($cttour)    
    
?>
<h2> <?= $tour_name ?> </h2>
<p> <?= $depcription?></p>
<img src="./public/images/<?= $image ?>" alt="">



        
</div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
            
                $("#binhluan").load("site/formbinhluan.php", {id_tour: <?=$id?>});
            });
           
        </script>
        <div class="row" id='binhluan'></div>
</div>
