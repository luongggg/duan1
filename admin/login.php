<?php
    session_start();
    ob_start();
    include "../models/connection.php";
    include "../models/user.php";
 

    
    if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level=checkUser($username, $password);
        $_SESSION['level'] = $level;
        if($level==1) header('location:index.php');
        else {
            $txt_error="Tên đăng nhập hoặc mật khẩu không tồn tại";
        }//header('location:login.php');
        echo "đăng nhập";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin</title>
</head>
<body>
    <div class="main">
        <h2>LOGIN</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="text" name="username" id=""> <br> <br>
            <input type="password" name="password" id=""> <br> <br>
            <input type="submit" name="dangnhap" value="Đăng Nhập">
            <?php
                if(isset($txt_error) &&($txt_error!="")) {
                    echo "<font color = 'red'>" .$txt_error."</font>";
                }
            ?>
        </form>
    </div>
</body>
</html>