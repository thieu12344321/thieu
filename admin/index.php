
<?php
 session_start();
 if (!isset($_SESSION['token_admin'])) {
     header('Location:login.php');
 }
?>

<?php
include "aside.php";
include "../model/danhmuc.php";
include "../model/blog.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/pdo.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'addsp':
            if (isset($_POST['btn__submit']) && ($_POST['btn__submit'])) {
                $name__pro = $_POST['name__pro'];
                $price__pro = $_POST['price__pro'];
                $iddm = $_POST['iddm'];
                $des__pro = $_POST['des__pro'];
                $amount__pro = $_POST['amount__pro'];
                $size__pro = $_POST['size__pro'];
                $img__pro = $_FILES['img__pro']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img__pro"]["name"]);
                if (move_uploaded_file($_FILES["img__pro"]["tmp_name"], $target_file)) {
                } else {
                }

                header("Location: index.php?act=listsp");

                insert_sp($name__pro, $price__pro, $amount__pro, $size__pro, $img__pro, $des__pro, $iddm);
                $thongbao = "Thêm sản phẩm thành công";

            }
            $listdm = loadall_danhmuc();
            include "sanpham/add.php";
            break;

        case 'listsp':
            if (isset($_POST['search_pro']) && ($_POST['search_pro'])) {
                $keyw = $_POST['search_pro'];
            } else {
                $keyw = '';
            }
            $listsp = loadAll_sanpham($keyw);
            include "sanpham/list.php";
            break;

        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $sanpham = loadOne_sanpham($_GET['id']);
            }
            $listdm = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['btn__update']) && ($_POST['btn__update'])) {
                $id = $_POST['id'];
                $name__pro = $_POST['name__pro'];
                $price__pro = $_POST['price__pro'];
                $iddm = $_POST['iddm'];
                $des__pro = $_POST['des__pro'];
                $amount__pro = $_POST['amount__pro'];
                $size__pro = $_POST['size__pro'];
                $img__pro = $_FILES['img__pro']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img__pro"]["name"]);
                if (move_uploaded_file($_FILES["img__pro"]["tmp_name"], $target_file)) {
                } else {
                }

                update_sanpham($id, $name__pro, $price__pro, $amount__pro, $size__pro, $img__pro, $des__pro, $iddm);
                $thongbao = "Cập nhật thành công";
                header("Location: index.php?act=listsp");
            }
            $listdm = loadall_danhmuc();
            $listsp = loadAll_sanpham();

            include "sanpham/list.php";
            break;

        case 'xoasp':
            // if (isset($_GET['id']) && ($_GET['id']) > 0) {
            //     delete_sanpham($_GET['id']);
            // }
            // $listsp = loadAll_sanpham(" ");
            // include "sanpham/list.php";
            // break;
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                delete_sanpham($_GET['id']);
                header('location: http://localhost/Duan1/admin/index.php?act=listsp');
            }
            break;

        /* end sanpham */

        /* start danhmuc */
        case 'adddm':

            if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                header("Location: index.php?act=listdm");
                $thongbao = "Thêm thành công";
            }

            include "danhmuc/add.php";
            break;

        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            // if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
            //     delete_danhmuc($_GET['id_danhmuc']);
            // }
            // $listdanhmuc = loadall_danhmuc();
            // include "danhmuc/list.php";
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
                delete_danhmuc($_GET['id_danhmuc']);
                header('location: http://localhost/Duan1/admin/index.php?act=listdm');
            }
            break;

        case 'suadm':
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
                $dm = loadone_danhmuc($_GET['id_danhmuc']);
            }
            include "danhmuc/update.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id_danhmuc = $_POST['id_danhmuc'];
                update_danhmuc($id_danhmuc, $tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        /*end danh muc */

        /*start blog */
        case 'addblog':
                
            if(isset($_POST['btn_submit'])&&($_POST['btn_submit'])){
                // $id_blog = $_POST['id_blog'];
                $name_blog=$_POST['tensanpham'];
                $mota_blog=$_POST['mota'];

                $filename=$_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
               
                 insert_blog($id_blog,$name_blog, $filename, $mota_blog);  
                header("Location: index.php?act=listblog");
                $thongbao="Thêm thành công";
            }
            $listblog=loadall_blog();
            // var_dump($listblog);
            include "blog/add.php";
            break;  
        

        case 'listblog':
            $listblog= loadall_blog();
            include "blog/list.php";
            break;
        
                
        case'sua_blog':
                if(isset($_GET['id_blog'])&&($_GET['id_blog']>0)){
                $blog=loadone_blog($_GET['id_blog']);
                } 
                include "blog/update.php";
                break;
        
        case'update_blog':
                if(isset($_POST['btn_update'])&&($_POST['btn_update'])){
                $name_blog=$_POST['tensanpham'];
                $mota_blog=$_POST['mota'];
                $id_blog=$_POST['id'];
                $filename=basename($_FILES['img']['name']);
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                } else {
                }
                update_blog($id_blog,$name_blog,$mota_blog,$filename);
                $thongbao="Cập nhật thành công";
                header('Location:index.php?act=listblog');
                    }
                    $listblog=loadall_blog();
                    include "blog/list.php";
                    break;       

         case 'xoa_blog':
                if(isset($_GET['id_blog']) && ($_GET['id_blog']) > 0){
                delete_blog($_GET['id_blog']);
                }
                $listblog = loadall_blog(" ");
                include "blog/list.php";
                break;

        // taikhoan

        case 'listtk':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

        case 'xoatk':
            // if (isset($_GET['id_user']) && ($_GET['id_user'] > 0)) {
            //     delete_taikhoan($_GET['id_user']);
            // }
            // $listtaikhoan = loadall_taikhoan();
            // include "taikhoan/list.php";

            if (isset($_GET['id_user'])) {
                delete_taikhoan($_GET['id_user']);
                header('location: http://localhost/Duan1/admin/index.php?act=listtk');
            }

            break;
        case 'suatk':
            if (isset($_GET['id_user']) && ($_GET['id_user']) > 0) {
                $taikhoan = loadOne_taikhoan($_GET['id_user']);
            }
            include "taikhoan/update.php";

            break;
        case 'updatetk':
            if (isset($_POST['btn__update']) && ($_POST['btn__update'])) {

                $id = $_POST['id'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $role = $_POST['role'];
                update_taikhoan($id, $user, $pass, $email, $address, $tel, $role);
                $thongbao = "cập nhật thành công";
                header('Location:index.php?act=listtk');
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case'thoat':
            if(isset($_SESSION['token_admin'])) {
                unset($_SESSION['token_admin']);
                echo '<script>window.location.href="login.php"</script>';
            }
            include "login.php";   
            break;
        case 'donhang':
            include "donhang/list.php";
            break;
        case 'thongke':
            include "bieudo.php";
            break;
         
        default:
            include "sanpham/list.php";
            break;
    }
} else {
    header('Location:index.php?act=listsp');
    include "sanpham/list.php";

}



?>