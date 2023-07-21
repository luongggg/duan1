
        <article>
            <div class="headline">
                <h2>QUẢN LÝ HÀNG HÓA</h2>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Lượt xem</th>
                        <th>Ngày đăng</th>
                        <th><a href="?act=addhh" class="btn">thêm</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hanghoa as $hh) : ?>
                        <tr>
                            <td><?= $hh['ma_hh'] ?></td>
                            <td>
                                <img src="../public/images/<?= $hh['hinh'] ?>" width="123" alt="">
                            </td>
                            <td><?= $hh['ten_hh'] ?></td>
                            <td><?= $hh['don_gia'] ?></td>
                            <td><?= $hh['giam_gia'] ?></td>
                            <td><?= $hh['ngay_nhap'] ?></td>
                            <td>
                                <button class="btn btn-default"><a href="?act=edithh$id_dm=<?=$hh['id_dm']?>">Sửa</a></button>
                                <button class="btn btn-danger"><a href="?act=delhh&id_dm=<?=$hh['id_dm']?>"onclick="return confirm('bạn chắc chắn xóa hay ko')">Xóa</a></button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </article>
