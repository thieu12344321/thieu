<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt đồ ăn online, giao đồ ăn nhanh chóng ngày đêm </title>
    <link rel="stylesheet"  href="view/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- <script src="view/js/script.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>

<body>

    <div id="wrapper">

        <div class="header w-full h-[68px] flex items-center pl-6 pr-6 justify-between">

            <div class="logo">
                <a href="" class="logo">
                    <img src="view/image/ymmyf.png" alt="">
                </a>
            </div>

            <ul class="menu menu__header flex items-center space-x-[60px]">
                <li><a href="index.php">Trang chủ</a></li>

                <li class="menu__sanpham ">
                    <div class=" flex items-center space-x-[8px] relative pt-[24px]">
                        <a href="index.php?act=sanpham">Sản phẩm</a>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8"
                            height="8" viewBox="0 0 8 8">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect id="Rectangle_287" data-name="Rectangle 287" width="8" height="8"
                                        transform="translate(1748 276)" fill="#7f7f7f" stroke="#707070"
                                        stroke-width="1" />
                                </clipPath>
                            </defs>
                            <g id="ic-arr" transform="translate(-1748 -276)" clip-path="url(#clip-path)">
                                <g id="down-arrow_3_" data-name="down-arrow (3)" transform="translate(1748 277.916)">
                                    <g id="Group_213" data-name="Group 213">
                                        <path id="Path_186" data-name="Path 186"
                                            d="M7.951,3.881a.166.166,0,0,0-.235,0L4,7.6.281,3.881a.168.168,0,0,0-.235,0,.168.168,0,0,0,0,.232L3.881,7.951a.166.166,0,0,0,.235,0L7.951,4.116A.166.166,0,0,0,7.951,3.881Z"
                                            transform="translate(0 -3.832)" fill="#7f7f7f" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>

                    
                    <ul class="menu__sanpham--drop absolute z-[999] bg-[#f9eded] shadow-lg pt-2 pb-2 space-y-2 pl-4 ml-[-19px] mt-5 text-black w-[23%] rounded ">
                        <?php
                            foreach($list_danhmuc as $listdm) {
                                extract($listdm);
                                $link_dm="index.php?act=sanpham&iddm=".$id_danhmuc;
                                echo '<li><a href="'.$link_dm.'">'.$name.'</a></li>
                                ';
                            }
                        ?>
                    </ul>
`                </li>
                <li><a href="index.php?act=blog">Blog</a></li>
                <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
            </ul>



            <div id="actions" class="z-[999] space-x-6 pr-4 items-center  ">

            <div class="searchBox">
                    <div class="icon ">
                        
                        <button type="submit">
                            <i class='bx bx-search-alt'></i>
                        </button>
                       
                    </div>
                    <div class="input">
                        <form action="" method="post">
                            <input class="ml-[-150px]" type="text" placeholder="Search" id="mysearch" name="search">
                        </form>
                    </div>
                    <span class="clear" onclick="document.getElementById('mysearch').value='' "><i class="fas fa-times"></i></span>
                </div>
            
                

                <div class="item__login login__drop relative pl-5 pt-4 pb-4 pr-5">
                <a class="py-5 inline-block" href="index.php?act=dangnhap"><img src="view/image/user.png" alt=""></a>
                    <ul class="login__drop--content w-[237px] h-[200px] ml-[-110px] absolute bg-[#deb897] pt-2 space-y-3 pl-2 rounded-b-md text-[15px] font-thin text-white ">
                       <?php
                       if(isset($_SESSION['user'])){
                        ?>

                        <li>
                        <?php
                                            if(isset($_SESSION['user'])){
                                                extract($_SESSION['user']);
                                        ?>
                            </li>
                            <li>
                            Xin chào: <?=$user?>
                                            <?php 
                                            }
                                            ?>
                            </li>
                            <li>
                                <a class="input-row1" href="index.php?act=quenmk"> Quên mật khẩu</a>
                            </li>
                            <li>
                                <a class="input-row1" href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                            </li>
                         
                            <li>
                                <a  href="index.php?act=thoat" class="input-row1">Đăng Xuất</a>
                            </li>
                            <?php
                       }else{
                        ?>
                        <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
                        <li><a href="index.php?act=dangky">Đăng ký</a></li>
                        <li><a href="#">Cập nhật thông tin</a></li>
                        <?php
                       }
                       ?>
                    </ul>

                </div>
                <div class="item__cart flex items-center pb-[5px] relative">
                  <a href="index.php?act=thanhtoan">
                    <button class="btn__cart">
                        <img src="view/image/cart.png" alt="">
                    </button>
                  </a>  
                </div>


            </div>

        </div>
