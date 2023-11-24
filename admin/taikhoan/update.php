<?php

if(is_array($taikhoan)){
    extract($taikhoan);
}
?>
<div class="taikhoan bg-gray-600 w-[1150px] min-h-[100vh] mt-12">
        <div class="mx-[25%] mt-5">
            <h3 class="text-center mb-5 pt-4 uppercase text-white">CẬP NHẬT TÀi KHOẢN</h3>
            <div class="taikhoan__from">
                <div class="row frmconnect" style="width: 100%;">
                    <form action="index.php?act=updatetk" method="post">
                        <div class="type__Name mt-5">
                           <h4 class="text-[20px] text-slate-50 mb-2">Mã Tài Khoản</h4>
                            <input class="border border-slate-400 rounded-md w-full h-[36px] pl-4" type="text" name="id_user" value="<?=$id_user?>" disabled>
                        </div>
                        <div class="type__Name mt-5">
                             
                            <h4 class="text-[20px] text-slate-50 mb-2">Tên đăng nhập</h4>
                            <input class="border border-slate-400 rounded-md w-full h-[36px] pl-4" type="text" name="user" value="<?=$user?>">
                        </div>

                        <div class="type__Name mt-5">
                             
                            <h4 class="text-[20px] text-slate-50 mb-2">Mật khẩu</h4>
                            <input class="border border-slate-400 rounded-md w-full h-[36px] pl-4" type="text" name="pass" value="<?=$pass?>">
                        </div>
                        <div class="type__Name mt-5">
                             
                            <h4 class="text-[20px] text-slate-50 mb-2">Email</h4>
                            <input class="border border-slate-400 rounded-md w-full h-[36px] pl-4" type="text" name="email" value="<?=$email?>">
                        </div>
                        <div class="type__Name mt-5">
                             
                            <h4 class="text-[20px] text-slate-50 mb-2">Địa chỉ</h4>
                            <input class="border border-slate-400 rounded-md w-full h-[36px] pl-4" type="text" name="address" value="<?=$address?>">
                        </div>
                        <div class="type__Name mt-5">
                             
                            <h4 class="text-[20px] text-slate-50 mb-2">Điện thoại</h4>
                            <input class="border border-slate-400 rounded-md w-full h-[36px] pl-4" type="text" name="tel" value="<?=$tel?>">
                        </div>
                        <div class="type__Name mt-5">
                             
                            <h4 class="text-[20px] text-slate-50 mb-2">Vai trò</h4>
                            <input class="border border-slate-400 rounded-md w-full h-[36px] pl-4" type="text" name="role" value="<?=$role?>">
                        </div>
                        <div class="flex justify-between mt-4">
                            <input class="border px-4 py-1 hover:cursor-pointer bg-[#ff954d] text-white rounded-md"
                                type="reset" value="Nhập lại">
                            <input class="border px-4 py-1 bg-[#ff954d] text-white rounded-md hover:cursor-pointer"
                                type="submit" value="Cập nhật" name="btn__update">
                            <!-- <a href="index.php?act=listtk"><input type="button" value="danh sách"></a> -->
                        </div>

                        <input type="hidden" name="id" value="<?=$id_user?>">

                        <?php
                                if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                                
                                ?>

                    </form>
                </div>
            </div>
        </div>
    
</div>


</div>


</body>

</html>