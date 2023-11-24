    <?php
        if(is_array($sanpham)){
            extract($sanpham);
        }

        
        $imgpath = "../upload/".$img;
        if(is_file($imgpath)){
            $img__pro = "<img src='".$imgpath."'>";

        }
        else{
            $img__pro = "No image";
        }
    ?>

<div class="bg-gray-500 w-[1150px] min-h-[100vh] mt-12 ">
    <span class="font-medium text-[20px] pt-4 pl-4 inline-block text-white">Update sản phẩm</span>
    <div class="product__add bg-white w-[80%] h-[90%] mx-auto mt-12 rounded ">
        <form class="pt-4 space-y-4"  action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="grid grid-cols-2 space-x-4 px-3">
                
                <div class="form__product space-y-3">
                    <span class="text-[#a7a2a2] font-light">Tên sản phẩm</span> <br>
                    <input class="border w-full py-2 rounded-md focus:outline-0 pl-2" type="text" placeholder="Nhập tên sản phẩm" name="name__pro" value="<?=$name?>">
                </div>

                <div class="form__product space-y-3">
                    <span class="text-[#a7a2a2] font-light">Giá sản phẩm</span> <br>
                    <input class="border w-full py-2 rounded-md focus:outline-0 pl-2" type="text" placeholder="Nhập giá sản phẩm" name="price__pro" value="<?=$price?>">
                </div>
            </div>

            <div class="grid grid-cols-2 space-x-4 px-3">
                
                <div class="form__product space-y-3">
                    <span class="text-[#a7a2a2] font-light">Danh mục sản phẩm</span> <br>
                    <select name="iddm" id="" class="border w-full py-2 rounded-md focus:outline-0 pl-2">
                            <option class="text-[#cdcdcd]" value="0">Chọn danh mục sản phẩm</option>  
                            
                            <?php
                                foreach ($listdm as $dm) {
                                    if($iddm == $dm['id_danhmuc'])
                                    echo '<option value="'.$dm['id_danhmuc'].'" selected>'.$dm['name'].'</option>';
                                    else
                                    echo '<option value="'.$dm['id_danhmuc'].'" >'.$dm['name'].'</option>';
                                    
                                }
                               
                            ?>

                    </select>
                </div>

                <div class="form__product space-y-3">
                    <span class="text-[#a7a2a2] font-light">Hình ảnh sản phẩm</span> <br>
                    <input class="border w-full py-2 rounded-md focus:outline-0 pl-2 text-[#cdcdcd]" type="file" name="img__pro" value=""> 
                    
                </div>
            </div>
            <div class=" w-full bg-[#fff2f2] px-12">
                <div class="w-[300px] flex mx-auto">
                    <?=$img__pro?>

                </div>
            </div>

            <div class="grid grid-cols-2 space-x-4 px-3">
                
                <div class="form__product space-y-3" >
                    <span class="text-[#a7a2a2] font-light">Số lượng</span> <br>
                    <input class="border w-full py-2 rounded-md focus:outline-0 pl-2 " type="text" name="amount__pro" value="<?=$amount?>">
                </div>

                <div class="form__product space-y-3" >
                    <span class="text-[#a7a2a2] font-light">Size</span> <br>
                    <select name="size__pro" id="" class="border w-full py-2 rounded-md focus:outline-0 pl-2">
                            <option class="text-[#cdcdcd]" value="">Chọn Size sản phẩm</option>  
                            <?php
                                $sql = "SELECT * FROM size";
                                $query = pdo_query($sql);
                                // var_dump($query);
                                // die();
                                foreach ($query as $item){
                                    ?>
                                     <option class="text-[#cdcdcd]" value="<?=$item['id_size'] ?>" selected><?=$item['name_size'] ?></option>  
                                    <?php
                                }
                            ?> 
                    </select>
                </div>
            </div>

            <textarea class="border ml-3 focus:outline-0 pt-3 pl-3" cols="118" rows="10" placeholder="Thông tin sản phẩm" name="des__pro" value=""><?=$mota?></textarea>
            <div class="admin__option flex justify-between mx-2">
                <input class="border px-4 py-1 hover:cursor-pointer bg-[#ff954d] text-white rounded-md" type="reset" value="Nhập lại">
                <input class="border px-4 py-1 bg-[#ff954d] text-white rounded-md hover:cursor-pointer" type="submit" value="Cập nhật" name="btn__update">
            </div>

            <input type="hidden" name="id" value="<?=$id_pro?>">
            
            
            <?php
                
                if(isset($thongbao) && ($thongbao != "")){
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>
