<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<article>
    <?php echo $kqone ?>

            <div class="headline">
                <h2>CẬP NHẬT LẠI  thành viên</h2>
            </div>
            <div class="row">
                    <div class="col" method="POST">
                        <div class="form-group">
                            <label for="">Mã hàng hóa</label>
                            <input class="form-control" type="text" name="id" readonly placeholder="auto number" value=<?= $kqone['id']?>
                                >
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tên hàng hóa</label>
                            <input class="form-control" type="text" name="username" placeholder="tên hàng"value=<?=$kqone['username']?>>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">mật khẩu</label>
                            <input class="form-control" type="text" name="pass" placeholder="tên hàng"value=<?=$kqone['pass']?>>
                        </div>
                    </div>
                 
                    <div class="col">
                        <div class="form-group">
                            <label for="">email</label>
                            <input class="form-control" type="text" name="email" value="<?=$kqone['email']?>">
                              
                            </input>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">kích hoạt</label>
                            <input class="form-control" type="" name="kichhoat" placeholder="số" value="<?=$kqone['kich_hoat']?>">
                        </div>
                    </div>
                    <!-- <div class="col">
                        <div class="form-group">
                            <label for="">Hình</label>
                            <img src="../public/images/" alt="">
                            <input type="hidden" name="hinh" placeholder=""value="<?=$kqone['hinh']?>">
                        </div>
                    </div> -->

                    <div class="full">
                        <div class="form-group">
                            <label for="">vai trò</label>
                            <input class="form-control" type="number" name="vaitro" placeholder="số"value="<?=$kqone['vai_tro']?>">
                        </div>
                    </div>

                </div>
                <button class="btn" type="submit" name="btn_update">Thêm</button>
                <button class="btn"><a href="index.php?act=thanhvien">Danh sách</a></button>