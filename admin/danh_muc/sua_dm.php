<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="../css/css.css">
<article>


    <div class="headline">
        <h2 style="text-align:center">CẬP NHẬT LẠI DANH MỤC</h2>
    </div>
    <form style="width:980px; margin-left:220px;margin-top:50px; text-align:center" action="?act=sua_dm&id_dm=<?=$id_dm?>"
        method="POST">
        <input type="text" name="id" value="<?= $items['id_dm']?>">
        <input type="text" name="ten" value="<?= $items['ten_dm']?>">
        <input type="submit" name="capnhat" value="cập nhật">
    </form>
</article>