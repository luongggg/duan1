<link rel="stylesheet" href="../css/index.css">
     <main>
            <div class="dang_ky">
                <h2 style="margin: 24px 0 24px 35%; color: #222;">Đăng ký thành viên</h2>
                <form action="./index.php?act=dangky" method="POST">
                    <div class="dang_kyy">
                        <div class="login">
                            <div class="logins">
                                <label for="">Email</label><br>
                                <input type="email"  name="email" placeholder="Email">
                            </div>
                            <div class="logins">
                                <label for="">Tên đăng nhập</label><br>
                                <input type="text" name="username" placeholder="Tên đăng nhập">
                            </div>
                        </div>
                            <div class="logins">
                                <label for="">Password</label><br>
                                <input type="password" name="password" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="nhaps">
                       <input  type="submit" name="dang_ky" value="Đăng ký" class="btn" ><br>
                       <input  class="btn" type="reset" value="Nhập lại">
                    </div>
                </form>
            </div>
        </main>
