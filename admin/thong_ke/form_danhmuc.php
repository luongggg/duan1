<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
<article>
<link rel="stylesheet" href="../css/css.css">
            <div class="headline" style="width:800px;margin-left:320px" >
            <h2 class="animate__animated animate__bounce" style="text-align:center;font-size:60px;background-color:green;">THỐNG KÊ DANH MỤC</h2>
            </div>

            <div class="form" style="display: grid; grid-template-columns: 150px 1fr;">
                <div class="form_menu" style="font-size: 18px; margin-left:30px;margin-top:50px; text-align:center">
                    <ul class="form_list">
                        <li class="form_item"><a href="?act=thongke_dm">Danh Mục</a></li>
                        <li class="form_item"><a href="?act=thongke_bl">Bình Luận</a></li>
                        <li class="form_item"><a href="?act=thongke_donhang">Đơn Hàng</a></li>
                    </ul>
                </div>
                <div class="form_table">
                    <table class="table"style="width:980px; margin-left:150px;margin-top:50px; text-align:center">
                        <thead >
                            <tr>
                                <th>STT</th>
                                
                                <th>ID Danh Mục</th>
                                <th>Tên Danh Mục</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <thead >
                                <?php foreach ($dm as $key => $value) :?>
                                    <tr>
                                        <td>STT</td>
                                        
                                        <td><?php echo $value['id_dm']?></td>
                                        <td><?php echo $value['ten_dm']?></td>
                                    </tr>
                                    
                                <?php endforeach ?>
                            </thead>         
                        </tbody>
                    </table>

                    
                    </div>
                        <div class="row mb10">
                            <a href="index.php?act=bieudo"><input style="margin-left:300px;max-width:100px;height:30px;font-size: 14px;" type="button" value="Xem biểu đồ"></a>
                        </div>
                    </div>        
                </div>
                
            </div>
            
        </article>
