<div class="blog bg-gray-500 w-[1150px] min-h-[100vh] mt-12 ">
    <div class="mx-[25%] mt-5 ">
        <h3 class="text-center mb-5 pt-4 uppercase text-white">Thêm Blog</h3>

        <div class="blog_form">
            <form action="index.php?act=addblog" method="post" enctype="multipart/form-data">
                <div class="type__Code">
                    <h4 class="text-[14px] mb-2">Mã Blog</h4>
                    <input class="border border-slate-400 rounded-md w-full h-[36px] pl-4" type="text" disabled>
                </div>

                <div class="type__Name mt-5">
                    <h4 class="text-[14px] mb-2">Tên Blog</h4>
                    <input name="tensanpham"
                        class="border border-slate-400 rounded-md w-full h-[36px] pl-4 focus:outline-0" type="text">
                </div>
                <div class="type__Name mt-5">

                    <span class="text-[#a7a2a2] font-light">Hình ảnh Blog</span> <br>
                    <input class="border w-full py-2 rounded-md focus:outline-0 pl-2 text-[#cdcdcd]" type="file"
                        name="img">

                </div>
                <div class="type__Name mt-5">
                    <h4 class="text-[14px] mb-2">Mô tả</h4>
                    <input name="mota" class="border border-slate-400 rounded-md w-full h-[36px] pl-4 focus:outline-0"
                        type="text">
                </div>

                <div class="blog_option">
                    <div class="flex justify-between mt-4">
                        <input class="border-2 px-4 py-1  bg-[#786fa6] text-[#fff] rounded-xl hover:cursor-pointer"
                            type="reset" value="Nhập Lại">

                        <input class="border-2 px-4 py-1 bg-[#786fa6] text-[#fff] rounded-xl hover:cursor-pointer"
                            type="submit" name="btn_submit" value="Thêm Mới" id="btn_submit">
                    </div>
                </div>
                <?php 
                                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                            ?>


            </form>

        </div>
    </div>


</div>