<div class="admin__right mt-6">
            <div class="flex justify-start">            
                <form action="index.php?act=listblog" method="post">
                    <div class="flex justify-end items-center  ">

                        <button type="submit" class="absolute z-[9999] mr-7 pt-2">
                            <box-icon name='search' ></box-icon>
                        </button> 
                   
                        <input class="border w-[888px] h-[46px] focus:outline-0 rounded pl-6 relative" type="text" placeholder="Search...." name="search_pro">                   
                    </div>
                

                </form>
            </div>
            <div class="product__list bg-gray-500 w-[1150px] min-h-[100vh] mt-12 ">
                <div class="border inline-block ml-14 mt-6 bg-[#5f89a9]">
                   <a href="index.php?act=addblog" class="px-6 py-2 inline-block text-white"><button>Thêm Blog</button></a> 
                </div>
                <div class="pt-[40px] space-y-6">
                    <div class="bg-white w-[90%] max-h-[700px] overflow-y-auto rounded ml-14 ">
                        <table class="table__list w-full ">
                                <tr>
                                    <th></th>
                                    <th>Mã Blog</th>
                                    <th>Tên Blog</th>
                                    <th>Image</th>
                                    <th>Mô tả</th>
                                    <th>Action</th>

                                </tr>

                                <?php
                                    foreach ($listblog as $blog ) {
                                        
                                        extract($blog);
                                        
                                        $sua_blog = "index.php?act=sua_blog&id_blog=".$id_blog;
                                        $xoa_blog = "index.php?act=xoa_blog&id_blog=".$id_blog;
                                        $imgpath = "../upload/".$img_blog;
                                        if(is_file($imgpath)){
                                            $img_blog = "<img src='".$imgpath."'>";

                                        }
                                        else{
                                            $img_blog = "No photo";
                                        }

                                        echo '
                                        <tr>
                                            <td></td>
                                            <td>'.$id_blog.'</td>
                                            <td>'.$name_blog.'</td>
                                            <td class="flex w-[110px] mx-auto">'.$img_blog.'</td>
                                            <td>'.$mota_blog.'</td>
                                             <td><a href="'.$sua_blog.'"><input class="border hover:cursor-pointer px-3 bg-[#f94444b5] font-normal text-white rounded-md" type="button" value="Sửa"></a>
                                            <a href="'.$xoa_blog.'" ><input class="border hover:cursor-pointer px-3 bg-[#f94444b5] font-normal text-white rounded-md" type="button" value="Xóa"></a> </td>
                                        </tr>';
                                    }

                                ?>
                                

                        </table>
                    </div>
                </div>    
            </div>
        </div>

  
    </div>
    
    
</body>
</html>