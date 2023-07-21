
 <article>
            <div class="headline">
                <h2>QUẢN LÝ HÀNG HÓA</h2>
            </div>
            <form action="?act=edithh&ma_hh=<?=$hh['ma_hh']?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Mã hàng hóa</label>
                            <input class="form-control" type="text" name="ma_hh" readonly placeholder="auto number" value=<?=$hh['ma_hh']?>
                                disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tên hàng hóa</label>
                            <input class="form-control" type="text" name="ten_hh" placeholder="tên hàng"value=<?=$hh['ten_hh']?>>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Đơn giá</label>
                            <input class="form-control" type="number" name="don_gia" min="0" value=<?=$hh['don_gia']?>>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Loại hàng</label>
                            <select class="form-control" name="ma_loai" id="">
                                <?php foreach($loaihang as $loai):?>
                                    <option value="<?= $loai['ma_loai']?>"<?=($loai['ma_loai']==$hh['ma_loai'])?'selected':?>
                                    >
                                    <?=$loai ['ten_loai']?></option>
                                    <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Giảm giá</label>
                            <input class="form-control" type="number" name="giam_gia" placeholder="Theo phần trăm"value="<?=$hh['giam_gia']?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Hình</label>
                            <img src="../public/images/<?=$hh['hinh']?>" alt="">
                            <input type="hidden" name="hinh" placeholder=""value="<?=$hh['hinh']?>">
                        </div>
                    </div>

                    <div class="full">
                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <textarea name="mo_ta"><?=$hh['mo_ta']?></textarea>
                        </div>
                    </div>

                </div>
                <button class="btn" type="submit" name="btn_update">Thêm</button>
                <button class="btn"><a href="?act=dashboard">Danh sách</a></button>
            </form>
        </article>
