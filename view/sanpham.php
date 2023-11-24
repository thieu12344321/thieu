<div class="product grid grid-cols-4 mt-8 space-x-6 pl-8 space-y-4 text-center items-center">

        <?php 
            foreach ($list_sp_danhmuc as $sp_danhmuc ) {
                extract($sp_danhmuc);
                $link = "index.php?act=chitietsp&id=".$id_pro;

                echo '
                
                <div class="product__content">
                    <a style="text-align: -webkit-center;" href="'.$link.'"><img class="max-w-[320px] h-[213px] pb-4 rounded-[20px]" src="'.$img_path.$img.'" alt=""> </a> 
                    <span class=" pr-[1rem] font-medium uppercase"><a href="'.$link.'">'.$name.'</a></span> <br>
                    <a href="'.$link.'"> <span class="inline-block text-[17px] pr-[1rem] font-medium text-[#f42424]">'.number_format($price,0, ',', '.').' VNĐ</span> </a>
                </div>
                ';
            }
        
        ?>

    </div>
