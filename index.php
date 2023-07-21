<?php 
// require_once "models/loai.php";
// require_once "models/hang_hoa.php";
// require_once "models/connection.php";
// // lấy ra danh sách loại hàng
// $loaihang= loai_all();
// lấy cái controller từ url
session_start();
include "./models/connection.php";
include "./models/tour.php";
include "./models/san_pham.php";
include "./models/binhluan.php";
include "./models/user.php";
include "site/header.php";

$danhsachtour=loadall_tour();
$act= isset($_GET['act']) ? $_GET['act']:'/';

echo $act;
switch($act){
    
        case'chitiettour':
            if(isset($_GET['id']) && ($_GET['id']> 0)){
                $id= $_GET['id'];
                $cttour = san_pham_one($id);
                extract($cttour);
                include 'site/chitiettour.php';
            }else{
                include "site/chitiettour.php";
            }
            break;
            case 'dangnhap':
                if(isset($_POST['dang_nhap']) && ($_POST['dang_nhap'])){
                  $username = $_POST['username'];
                  $password = $_POST['password'];
                  $checkuser = dang_nhap($username, $password);
                  if(is_array($checkuser)){
                      $_SESSION['username'] = $checkuser;
                      header('location:index.php');
                    }else{ 
                        echo "Tài khoản không tồn tại";
                   }
                    ?>
                     
                 <?php } 
              include 'site/dangnhap.php';
              break;
              case 'dangky':
                if(isset($_POST['dang_ky']) && ($_POST['dang_ky'])){
                  $email = $_POST['email'];
                  $username = $_POST['username'];
                  $password = $_POST['password'];
                  dang_ky($email, $username, $password);
                   
                  } 
                include 'site/dangky.php';
                break;
                case 'dangxuat':
                  session_unset();
                  header('location:index.php');
                  break;
        
        default:
        include_once "site/home.php";
        break;
}
        include_once "site/footer.php";
?>