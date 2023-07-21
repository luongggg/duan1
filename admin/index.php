<link rel="stylesheet" href="css/css.css">
<?php
// session_start();
// ob_start();

require_once "../models/connection.php";
// connection();
require_once "../models/danh_muc.php";
require_once "../models/thanhvien.php";
// require_once "../models/loai.php";
$act= isset($_GET['act']) ? $_GET['act']:'/';
switch ($act) {
    case '/':
    case 'khachhang':
        $kq=getall_tv();
       $view_page="khach_hang/list.php";
        break;
   case 'xoa_kh':
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        xoa($id);
    }
    $kq=getall_tv();
    $view_page="khach_hang/list.php";
     break;
     case 'sua_kh':
       
        if(isset($_GET['id'])){
            $id=$_GET['id'];
           $kqone=sua($id,$username,$password,$email, $level);
           if(isset($_POST['btn_update'])){
            $id=$_POST['id'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $email=$_POST['email'];
            $level=$_POST['level'];
           
           }
        }

        $kq=getall_tv();
        $view_page="khach_hang/sua.php";
       
         break;
    case 'sua_dm':
        if(isset($_GET['id_dm'])){
            $id_dm=$_GET['id_dm'];
        $items = danh_muc_one($id_dm);

        $dm= danh_muc_all();
        $view_page= "danh_muc/sua_dm.php";
        }
        // echo "HHHHHHHHHHH";
        if(isset($_POST['capnhat'])){
            $id_dm=$_POST['id'];
            $ten_dm=$_POST['ten'];  
           
            danh_muc_update($id_dm,$ten_dm);

         $dm= danh_muc_all();
         $view_page= "danh_muc/list_dm.php";
        }
         break;
         case 'xoa_dm':
            if(isset($_GET['id_dm'])){
                $id=$_GET['id_dm'];
                xoa_dm($id);
            }
            $dm= danh_muc_all();
         $view_page= "danh_muc/list_dm.php";
             break;
         case 'them_dm':
                if(isset($_GET['id_dm'])){
                    $id=$_GET['id_dm'];
                    them_dm($id);
                }
                $dm= danh_muc_all();
             $view_page= "danh_muc/them_dm.php";
                 break;
    case 'danh_muc':
     $dm= danh_muc_all();
     
        $view_page="danh_muc/list_dm.php";
        break;
    default:
        $view_page="";
        break;
}
include_once "layout.php";