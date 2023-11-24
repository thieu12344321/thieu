<?php 
    if(is_array($dm)){
        extract($dm);
    }
?>

<div class="danhmuc bg-gray-500 w-[1150px] min-h-[100vh] mt-12">
    <div class="mx-[25%] mt-5">
        <h3 class="text-center mb-5 pt-4 uppercase text-white">CẬP NHẬT LOẠI HÀNG</h3>
        <div class="danhmuc__form">
            <form action="index.php?act=updatedm" method="post">
                <div class="type__Code">
                    <h4 class="text-[14px] mb-2">Mã loại</h4>
                    <input class="border border-slate-400 rounded-md w-full h-[36px] pl-4" type="text"
                        name="id_danhmuc"  disabled>
                </div>
                <div class="type__Name mt-5">
                    <h4 class="text-[14px] mb-2">Tên loại</h4>
                    <input name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name; ?> "
                        class="border border-slate-400 rounded-md w-full h-[36px] pl-4 focus:outline-0" type="text">
                </div>
                <div class="danhmuc__option">
                    <div class="flex justify-between mt-4">
                        <input type="hidden" name="id_danhmuc"
                            class="border-2 px-4 py-1  bg-[#786fa6] text-[#fff] rounded-xl hover:cursor-pointer"
                            value="<?php if(isset($id_danhmuc)&&($id_danhmuc>0)) echo $id_danhmuc; ?> ">
                        <input class="border-2 px-4 py-1  bg-[#786fa6] text-[#fff] rounded-xl hover:cursor-pointer"
                            type="submit" name="capnhat" value="Cập nhật">
                        <input class="border-2 px-4 py-1  bg-[#786fa6] text-[#fff] rounded-xl hover:cursor-pointer"
                            type="reset" value="Nhập Lại">
                        <a class="border-2 px-4 py-1  bg-[#786fa6] text-[#fff] rounded-xl hover:cursor-pointer"
                            href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>


                    </div>

                </div>
                <?php 
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>


            </form>
        </div>

    </div>

</div>