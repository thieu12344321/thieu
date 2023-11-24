<?php
session_start();

include "model/pdo.php";
include "model/sanpham.php";
include "model/blog.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "global.php";

if (!isset($_SESSION['mycart']))
    $_SESSION['mycart'] = [];
$listsp_home = loadsp_home();
$list_danhmuc = loadall_danhmuc();
include "view/header.php";

if (isset($_GET['act']) && ($_GET['act']) != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            $iddm = "";
            if (isset($_GET['iddm']) && ($_GET['iddm']) > 0) {
                $iddm = $_GET['iddm'];
            }
            if (isset($_POST['search']) && ($_POST['search'])) {
                $keyw = $_POST['search'];
            } else {
                $keyw = '';
            }
            $list_sp_danhmuc = loadAll_sanphampage($keyw, $iddm);
            include "view/sanpham.php";
            break;

        case 'chitietsp':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $id = $_GET['id'];
                $iddm = "";
                $load__one = loadOne_sanpham($id);
                $load__size = loadAll_size();
                extract($load__one);
                $load__sp__cungloai = load_sanpham_cungloai($id, $iddm);
                include "view/chitietsp.php";
            } else {
                include "view/home.php";
            }
            break;

        case 'thanhtoan':
            include 'view/thanhtoan.php';
            break;
        case 'addcart':
            if (isset($_POST['btn__addcart'])) {
                $id = $_POST['idsp'];
                $sp = loadProductById($id);
                $amount = $_POST['amount'];
                extract($sp);
                $size = $_POST['size'];

                // $total = $sp['price'] * $amount;
                // $addpr = [$id,$sp['img'],$sp['name'],$sp['price'],$amount,$size,$total];
                if (isset($_SESSION['mycart'])) {
                    if (isset($_SESSION['mycart'][$id]['sl'])) {
                        $_SESSION['mycart'][$id]['sl'] += $amount ? $amount : 1;
                    } else {
                        $_SESSION['mycart'][$id]['sl'] = 1;
                    }
                    $_SESSION['mycart'][$id]['id'] = $id;
                    $_SESSION['mycart'][$id]['name_product'] = $name;
                    $_SESSION['mycart'][$id]['image'] = $img;
                    $_SESSION['mycart'][$id]['price'] = $price;
                    $_SESSION['mycart'][$id]['size'] = $size;
                } else {
                    $_SESSION['mycart'][$id]['sl'] = $amount ? $amount : 1;
                    $_SESSION['mycart'][$id]['id'] = $id;
                    $_SESSION['mycart'][$id]['name_product'] = $name;
                    $_SESSION['mycart'][$id]['image'] = $img;
                    $_SESSION['mycart'][$id]['size'] = $size;
                }
                echo "<script>location.href='index.php?act=thanhtoan'</script>";
            }
            break;
        case 'updateCart':
            if (isset($_GET['idsp'])) {
                $id = $_GET['idsp'];
                foreach ($_SESSION['mycart'] as $key => $value) {
                    if ($key == $id) {
                        $_SESSION['mycart'][$key]['sl'] = $_POST['update_sl'];
                        if ($_POST['update_sl'] <= 0)
                            unset($_SESSION['cart'][$id]);
                    }
                }
                echo "<script>location.href='index.php?act=thanhtoan'</script>";
            }
            break;
        case 'bill':
            function generateRandomString($length = 10)
            {
                $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                return $randomString;
            }
            if (isset($_POST['btn__bill'])) {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $total = $_SESSION['total'];
                $code__bill = generateRandomString($length = 10);
                foreach ($_SESSION['mycart'] as $cart) {
                    $name_pr = $cart['name_product'];
                    $amount_pr = $cart['sl'];
                    $size_pr = $cart['size'];
                    // $_SESSION['desc'] = [$name_pr, $amount_pr, $size_pr];
                    // $desc_pr = $_SESSION['desc'];
                    // print_r($desc_pr);
                    insert_bill($code__bill, $name, $phone, $address, $name_pr, $amount_pr, $size_pr, $total);
                }
            }
            // echo "<script>location.href='index.php?act=thanhtoan'</script>";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao = "Đăng ký thành công";
                echo '<script>window.location.href="index.php?act=dangnhap"</script>';
            }

            include "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    $thongbao = "Đã đăng Nhập thành công!";
                    echo '<script>window.location.href="index.php"</script>';
                } else {
                    // echo'Tài khoản không tồn tại. Vui lòng kiểm tra lại hoặc đăng ký!';
                }
            }
            include "view/taikhoan/dangnhap.php";
            break;

        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];

                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu  là: " . $checkemail['pass'];
                } else {
                    $thongbao = "Email  không tồn tại";
                }
            }

            include "view/taikhoan/quenmk.php";
            break;

        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $id_user = $_POST['id_user'];
                updatetaikhoan($id_user, $user, $pass, $email);
                $thongbao = "cập nhật thành công";
            }
            // print_r($id_user);
            include "view/taikhoan/edit_taikhoan.php";
            break;
        case 'thoat':
            if (isset($_SESSION['user'])) {
                session_destroy();
                echo '<script>window.location.href="index.php"</script>';
            }
            break;
        case 'blog':
            $listblog_page = loadall_blog();
            include "view/blog.php";
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
