<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
<article>
<link rel="stylesheet" href="../css/css.css">
            <div class="headline" style="width:800px;margin-left:320px" >
            <h2 class="animate__animated animate__bounce" style="text-align:center;font-size:60px;background-color:green;">QUẢN LÝ DANH MỤC</h2>

            </div>
            <table class="table"style="width:980px; margin-left:220px;margin-top:50px; text-align:center">
                <thead >
                    <tr>
                        <th>STT</th>
                        
                        <th>id_danh mục</th>
                        <th>tên danh mục</th>
                       
                        <th><a href="?act=them_dm" class="btn">thêm</a></th>
                    </tr>
                </thead>
                <tbody>
                <thead >
                <?php foreach ($dm as $key => $value) :?>
                    <tr>
                        <td>STT</td>
                        
                        <td><?php echo $value['id_dm']?></td>
                        <td><?php echo $value['ten_dm']?></td>
                       
                        <td>
                                <button class="b"><a href="?act=sua_dm&id_dm=<?=$value['id_dm']?>">Sửa</a></button>
                                <button class="btn btn-danger"><a href="?act=xoa_dm&id_dm=<?=$value['id_dm']?>"onclick="return confirm('bạn chắc chắn xóa hay ko')">Xóa</a></button>
                            </td>
                    </tr>
                    <?php endforeach ?>
                </thead>
               
                
                        
                </tbody>
            </table>
        </article>
