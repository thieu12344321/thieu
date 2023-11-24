<div class="bill grid grid-cols-2 ml-6 space-x-8">
    <div class="information__bill relative">
        <div class="mt-6 space-y-6 mb-4">
            <span class="uppercase font-medium inline-block">Thông tin giao hàng</span> <br>
            <span class="text-[14px] font-sans inline-block text-[#cdcdcd]">Bạn đã có tài khoản ? <a href="#"
                    class="text-[#2de0ff] font-sans hover:text-black">Đăng nhập</a></span>
        </div>

        <form action="index.php?act=bill" method="post" class="space-y-8">
            <input name="name" class="name font-sans focus:outline-none border-b w-full font-thin  focus:border-b-black"
                type="text" placeholder="Họ và tên">
            <div class="grid grid-cols-2 space-x-6 mr-6">
                <input name="phone"
                    class="name font-sans focus:outline-none border-b w-full font-thin focus:border-b-black" type="tel"
                    placeholder="Số điện thoại">
            </div>
            <input name="address"
                class="name font-sans focus:outline-none border-b w-full font-thin  focus:border-b-black" type="text"
                placeholder="Địa chỉ">
            <input class="bg-[#e17055] px-6 py-2 text-white absolute right-0 mt-[7rem] block" type="submit"
                name="btn__bill" value="Đặt hàng">
        </form>
    </div>
    <div class="mt-6 pl-8 pr-6">
        <span class=" font-medium inline-block">GIỎ HÀNG</span>
        <div class="cart__bill ">
            <?php
            $tt = 0;

            foreach ($_SESSION['mycart'] as $cart) {
                $img = $img_path . $cart['image'];
                $total = $cart['price'] * $cart['sl'];
                $tt += $total; ?>
            <div class="grid grid-cols-2 space-x-4 mt-4">
                <img class="rounded-lg" src="<?= $img ?>" alt="">
                <div class=" grid-cols-1 ">
                    <span class="text-[18px] font-medium text-[#a5641c] uppercase">
                        <?= $cart['name_product'] ?>
                    </span> <br>
                    <span class="block py-4">SIZE: <?= $cart['size'] ?> </span>
                    <div class="grid grid-cols-2">
                        <span>Số lượng:</span>
                        <form action="<?="index.php" . "?act=updateCart&idsp=" . $cart['id'] ?>" method="post">
                            <input name="update_sl"
                                class="inline-block w-[49px] border border-solid border-[#cdcdcd] pl-[10px] rounded amount"
                                type="number" value="<?= $cart['sl'] ?>" min="1" max="10" onchange="this.form.submit()">
                        </form>
                        <div class="price font-light">
                            <span class="price__cart" id="price__pr"
                                data-value=" <?= number_format($cart['price'], 0, ',', '.') ?>">
                                <?= number_format($cart['price'], 0, ',', '.') ?>
                            </span>
                            <span>VNĐ </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <div class="mt-4 mb-[-1rem]">
                <a class="font-light p-4" href="index.php?act=sanpham"><span>Tiếp tục mua hàng</span></a>
            </div>
            <hr class="inline-block w-full mt-[50px]">


            <div class="money flex justify-between mt-4">
                <span>Tổng tiền</span>
                <span id="total" class="font-bold text-black" value="<?= $tt ?>">
                    <?php echo number_format($tt, 0, ',', '.') ?> VNĐ
                </span>

            </div>
            <?php
                $_SESSION['total'] = $tt;
            ?>
        </div>

    </div>
</div>