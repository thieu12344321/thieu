<div id="" class="z-1 banner bg-[url('view/image/banner.png')]">
    <div class="box-left">
        <h2>
            <span>THỨC ĂN</span>
            <br>
            <span>THƯỢNG HẠNG</span>
        </h2>
        <p>Chuyên cung cấp các món ăn đảm bảo dinh dưỡng
            hợp vệ sinh đến người dùng,phục vụ người dùng 1 cách
            hoàn hảo nhất</p>
        <a href="index.php?act=sanpham">
            <button>Mua ngay</button>
        </a>
    </div>
    <div class="box-right">
        <img src="view/image/img_1.png" alt="">
        <img src="view/image/img_2.png" alt="">
        <img src="view/image/img_3.png" alt="">
    </div>
    <div class="to-bottom">
        <a href="">
            <img src="view/image/to_bottom.png" alt="">
        </a>
    </div>
</div>
<div id="wp-products">
    <h2>SẢN PHẨM CỦA CHÚNG TÔI</h2>
    <ul id="list-products">
        <div class="grid grid-cols-4 gap-28 mb-8 pl-6 pr-6 ">

            <?php
            foreach ($listsp_home as $sp_home) {
                extract($sp_home);
                $hinhanh = $img_path . $img;
                $link = "index.php?act=chitietsp&id=" . $id_pro;
                echo '
                            <a href="' . $link . '"> 
                            <div class="item">
                                <img class="px-3 max-w-[290px] h-[177px] pt-4" src="' . $hinhanh . '" alt="">
                                <div class="name uppercase">' . $name . '</div> 
                                <div class="desc max-w-[290px] h-[72px]">' . $mota . '</div>
                                <div class="price">' . number_format($price, 0, ',', '.') . ' VNĐ</div>
                            </div> </a>  
                            ';
            }
            ?>

        </div>

    </ul>
</div>

<div id="saleoff" class="grid grid-cols-2">

    <div class="box-left">
        <h1>
            <span>GIẢM GIÁ LÊN ĐẾN</span>
            <span>45%</span>
        </h1>
    </div>
    <div class="box-right">
        <img class="w-full" src="view/image/off.png" alt="">
    </div>

</div>

<div id="comment">
    <h2 class="uppercase">Về chúng tôi</h2>
    <div id="comment-body">
        <div class="prev">
            <a href="#">
                <img src="view/image/prev.png" alt="">
            </a>
        </div>
        <ul id="list-comment">
            <li class="item ">
                <div class="avatar w-[100px] h-[100px] rounded-full bg-[#a2d1e1] mx-auto mt-[5rem]">
                    <span
                        class="service__active--icon text-[50px] text-white flex justify-center items-center pt-[1.4rem] ">
                        <i class='bx bx-trophy'></i>
                    </span>
                </div>

                <div class="service__name text-center text-white font-medium mt-2">
                    <h3 class="text-[15px]">SUPERIOR QUALITY</h3>
                </div>


            </li>

            <li class="item">
                <div class="avatar w-[100px] h-[100px] rounded-full bg-[#dcd691] mx-auto mt-[5rem]">
                    <span
                        class="service__active--icon text-[50px] text-white flex justify-center items-center pt-[1.4rem] ">
                        <i class='bx bx-car'></i>
                    </span>

                </div>

                <div class="service__name text-center text-white font-medium mt-2">
                    <h3 class="text-[15px]">FREE SHIPPING</h3>
                </div>

                <div class="text">

                </div>
            </li>

            <li class="item">
                <div class="avatar w-[100px] h-[100px] rounded-full bg-[#e4b2d6] mx-auto mt-[5rem]">
                    <span
                        class="service__active--icon text-[50px] text-white flex justify-center items-center pt-[1.4rem] ">
                        <i class='bx bx-support'></i>
                    </span>

                </div>
                <div class="service__name text-center text-white font-medium mt-2">
                    <h3 class="text-[15px] uppercase">always listen to customer contributions</h3>
                </div>


                <div class="text">

                </div>
            </li>

        </ul>
        <div class="next">
            <a href="#">
                <img src="view/image/next.png" alt="">
            </a>
        </div>
    </div>
</div>