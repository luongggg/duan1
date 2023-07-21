<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
<article>

            <div class="headline" style="width:800px;margin-left:320px" >
            <h2 class="animate__animated animate__bounce" style="text-align:center;font-size:60px;background-color:green;">QUẢN LÝ THÀNH VIÊN</h2>
            </div>
            <table class="table"style="width:980px; margin-left:220px;margin-top:50px; text-align:center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên thành viên</th>
                        <th>mật khẩu</th>
                        <th>email</th>
                        <th>level</th>
                      
                        <th><a href="?act=sua_kh">Sửa</a></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($kq as $key => $value) :?>
                 
                 <thead>
                     <tr>
                         <th><?=$value['id']?></th>
                         <th><?=$value['username']?></th>
                         <th><?=$value['password']?></th>
                         <th><?=$value['email']?></th>
                         >
                         <th><?=$value['level']?></th>
                         <td>
                                <button class="b"><a href="?act=sua_kh$id=<?=$hh['id']?>">Sửa</a></button>
                                <button class="btn btn-danger"><a href="?act=xoa_kh&id=<?=$value['id']?>"onclick="return confirm('bạn chắc chắn xóa hay ko')">Xóa</a></button>
                            </td>
                     </tr>
                 </thead>
                                                         
             <?php endforeach ?>
                        
                </tbody>
            </table>
        </article>
