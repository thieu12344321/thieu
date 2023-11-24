
  

<div class="grid grid-cols-3 mt-8 ">
        <div class="col-span-2 mx-auto">
            <img class="max-w-[488px] rounded-lg" name="img" src="<?=$img_path.$img ?>" alt="">
        </div>
        <div class="col-span-1 space-y-6">
            <p class="text-[18px] font-medium text-[#a5641c] uppercase" name="name__pr">
                <?=$name?>
            </p>
            <p class="font-bold text-black" name="price__pr">
                
                <?=number_format($price,0, ',', '.')?> VNĐ
            </p>
            
      
        

            <div class="size space-y-4">
                
                    <form action="index.php?act=addcart" method="post">
                        <span>Số lượng:</span>
                        <input name="amount" class="inline-block w-[49px] border border-solid border-[#cdcdcd] pl-[10px] rounded" type="number" id='amount'  value="1" min=1 max=10> <br>
                        <span class=" inline-block">Size:</span>
                        <select class="w-[15rem] focus:outline-none border rounded mt-6 inline-block ml-8" name="size" id="" required>
                            <option value="">Mời bạn chọn size</option>
                            <?php
                                foreach ($load__size as $size) {
                                    extract($size);
                                    echo '<option value="'.$name_size.'">'.$name_size.'</option>';
                                }
                            ?>
                        </select> <br>
                        <p class="mt-6"><?=$mota ?></p>
                        <button class="rounded py-2 px-2 bg-[#f5c568] text-white text-[15px] mt-[50px] " name="btn__addcart" type="submit">Thêm giỏ hàng</button>
                        <input type="hidden" name="iddm" value="<?=$iddm?>">
                        <input type="hidden" name="idsp" value="<?=$_GET['id']?>">
                    </form>

            </div>
                                
        </div>
    </div>


    <div class=" flex justify-center mt-6 text-[18px] font-medium">
        Sản phẩm liên quan
    </div>

   

    <div class="related__products flex overflow-x-auto mt-12 pb-9 space-x-6 pl-4 ">

        <?php  
            foreach ($load__sp__cungloai as $cungloai) {
                extract($cungloai);
                $link = "index.php?act=chitietsp&id=".$id_pro;
                echo'
                <div class="related__products--content text-center ">
                    <a href="'.$link.'">
                    <img class="max-w-[320px] h-[174px] rounded-lg" src="'.$img_path.$img.'" alt="">
                    <span class="uppercase text-[18px] font-medium text-[#a5641c]">'.$name.'</span> <br>
                    </a>
                    <span class="font-bold text-black">'.number_format($price,0, ',', '.').'VNĐ</span>
                </div>
                ';
            }
        ?>

    </div>


</body>




