
        <article>
            <div class="headline">
                <h2>QUẢN LÝ HÀNG HÓA</h2>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>tên sản phẩm</th>
                        <th>mô tả</th>
                        <th>hình</th>
                        <th>giá</th>
                        <th>mã danh mục</th>

                        <!-- <th>Ngày đăng</th> -->
                        <th><a href="?act=them_sp" class="btn">thêm</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($sp as $hh) : ?>
                        <tr>
                            <td><?= $hh['id'] ?></td>
                           
                            <td><?= $hh['tour_name'] ?></td>
                            <td><?= $hh['depcription'] ?></td>
                            <td>
                                <img src="../public/images/<?= $hh['img'] ?>" width="123" alt="">
                            </td>
                            <td><?= $hh['price'] ?></td>
                            <td><?= $hh['id_dm'] ?></td>
                            <td>
                                <button class="btn btn-default"><a href="?act=sua_sp&id=<?=$hh['id']?>">Sửa</a></button>
                                <button class="btn btn-danger"><a href="?act=delhh&id=<?=$hh['id']?>"onclick="return confirm('bạn chắc chắn xóa hay ko')">Xóa</a></button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </article>
