<article>
    <div class="headline">
        <h2>QUẢN LÝ HÀNG HÓA</h2>
    </div>
    <form action="?act=addhh" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Mã hàng hóa</label>
                    <input class="form-control" type="text" name="ma_hh" readonly placeholder="auto number" disabled>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Tên hàng hóa</label>
                    <input class="form-control" type="text" name="ten_hh" placeholder="tên hàng">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Đơn giá</label>
                    <input class="form-control" type="number" name="don_gia" min="0" value="0">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Loại hàng</label>
                    <select class="form-control" name="ma_loai" id="">
                        <!-- Đổ dữ liệu loại hàng -->
                        <?php foreach ($loaihang as $loai) : ?>
                            <option value="<?= $loai['ma_loai'] ?>">
                                <?= $loai['ten_loai'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Giảm giá</label>
                    <input class="form-control" type="number" name="giam_gia" placeholder="Theo phần trăm">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Hình</label>
                    <input type="file" name="hinh" placeholder="">
                </div>
            </div>

            <div class="full">
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea name="mo_ta"></textarea>
                </div>
            </div>

        </div>
        <button class="btn" type="submit" name="btn_insert">Thêm</button>
        <button class="btn"><a href="">Danh sách</a></button>
    </form>
</article>