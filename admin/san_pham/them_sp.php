
 <article>
            <div class="headline">
                <h2>QUẢN LÝ HÀNG HÓA</h2>
            </div>
            <form action="?act=them_sp" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Mã hàng hóa</label>
                            <input class="form-control" type="text" name="id"  placeholder="auto number" ?>
                                >
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tên hàng hóa</label>
                            <input class="form-control" type="text" name="name" placeholder="tên hàng"?>>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">mô tả</label>
                            <input class="form-control" type="text" name="depcription" placeholder="tên hàng"?>>
                        </div>
                    </div>
                    
<!--                
                        <div class="form-group">
                            <label for="">Hình</label>
                            <input type="File" name="hinh" placeholder="">
                        </div>
                    </div> -->

                    <div class="full">
                        <div class="form-group">
                            <label for="">giá</label>
                            <textarea name="price"></textarea>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">mã danh mục</label>
                            <input class="form-control" type="text" name="id_dm" placeholder="tên hàng"?>>
                        </div>
                    </div>

                </div>
                <button class="btn" type="submit" name="btn_update">Thêm</button>
                <button class="btn"><a href="?act=sanpham">Danh sách</a></button>
            </form>
        </article>
