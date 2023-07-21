<div class="banner1">
    <div class="menu-draw"></div>
    <img src="" alt="">
</div>
<div class="content1">
    <div class="boxform">
        <form action="index.php?act=dangnhap" method="post">
            <h1>Đăng nhập</h1> <br>

            <div class="container">
            <?php
            if(isset($_SESSION['username'])){
                extract($_SESSION['username']);
            ?>
            <div class="chao">
                <h2 style="margin-bottom: 12px;">Xin chào <?= $username ?></h2>
            </div>
            <div class="chao">
                <?php 
                    if($level == 1){
                ?>
                <div class="ccc">
                <li><a href="./admin/index.php">Đăng nhập Admin</a></li>
                </div>
                <?php } ?>
                <div class="ccc">
                    <li><a href="./index.php?act=quenmatkhau">Quên mật khẩu</a></li>
                </div>
                <div class="ccc">
                    <li><a href="./index.php?act=suataikhoan&id=<?= $id ?>">Cập nhật tài khoản</a></li>
                </div>
               <div class="ccc">
                    <li><a href="./index.php?act=dangxuat">Đăng xuất</a></li>
               </div>
             </div>
             <?php }else { ?>
                <label for="usname">Username</label>
                <input type="text" name="username" placeholder="Nhap ten nguoi dung" required>

                <label for="pass">Password</label>
                <input type="password" name="password" placeholder="Nhap mat khau" required>
                <br>
                <input type="submit" name="dang_nhap" value="Login">
                <?php } ?>
            </div>
        </form>
    </div>
</div>