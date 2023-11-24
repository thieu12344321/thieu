

    <div class="text-center">   
        <h2 class="text-[1.375rem] text-[#4c4848f5] mt-8">BLOG AND NEWS</h2> 
        <p class="text-[14px] font-thin pt-4">Theo dõi để biết thêm những món ăn, những thông tin mới của YummyFood</p>
    </div>

    <div class="blog grid grid-cols-3 pl-[40px] space-y-6 ">
        
        <?php
            foreach ($listblog_page as $blog) {
                extract($blog);

                echo '
                <div class="w-[453px] h-[547px] border border-[#cdcdcd] mt-6">   
                <img class="h-[281px]" src="'.$img_path.$img_blog.'" alt="">
                <span class="uppercase flex justify-center py-6">'.$name_blog.'</span>
                <p class="text-[15px] text-center">'.$mota_blog.'</p>
                <a class="flex justify-center mt-6 " href="comtronhanquoc.html"><span class="border font-thin hover:font-medium border-black rounded-full text-[15px] px-4 py-3">Xem thông tin</span></a>
                </div>';
            }
        
        ?>
       
    </div>

   