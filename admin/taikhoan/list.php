<div class="admin__right mt-6">
            <div class="flex justify-start">            
                <form action="">
                    <div class="flex justify-end items-center  ">

                    <button  class="absolute z-[9999] mr-7 pt-2">
                        <box-icon name='search' ></box-icon>
                    </button> 

                        <input class="border w-[888px] h-[46px] focus:outline-0 rounded pl-6 relative" type="text" placeholder="Search....">                   
                    </div>
                

                </form>
            </div>
            <div class="product__list bg-gray-500 w-[1150px] min-h-[100vh] mt-12 ">
                <div class="text-center">
                   <span class="text-white ">Danh sách tài khoản</span>
                </div>
                <div class="pt-[40px] space-y-6">
                    <div class="bg-white w-[90%] max-h-[700px] overflow-y-auto rounded ml-14 ">
                        <table class="table__list w-full ">
                                <tr>
                                    
                                    <th>Mã TK</th>
                                    <th>Tên Đăng Nhập</th>
                                    <th>Mật Khẩu</th>
                                    <th>Email</th>
                                    <th>Địa Chỉ</th>
                                    <th>Điện Thoại</th>
                                    <th>Vai Trò</th>
                                    <th>Action</th>

                                </tr> 

                            <?php
                        foreach ($listtaikhoan as $taikhoan) {
                            extract($taikhoan);
                            $suatk = "index.php?act=suatk&id_user=" . $id_user;
                            $xoatk = "index.php?act=xoatk&id_user=" . $id_user;
                        
                        ?>
                            <tr>
                            
                            <td><?=$id_user?></td>
                            <td><?=$user?></td>
                            <td><?=md5($pass)?></td>
                            <td><?=$email?></td>
                            <td><?=$address?></td>
                            <td><?=$tel?></td>
                            <td><?=$role?></td>
                            <td>
                                <a href="<?=$suatk?>"> 
                                    <input class="border hover:cursor-pointer px-3 bg-[#93cbf5] font-normal rounded-md" type="button" value="Sửa"> 
                                </a>
                            </td>
                            <td><button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#modal-<?=$id_user?>"> DELETE </button></td>
                            </tr>
                        <div class="modal fade" id="modal-<?=$id_user?>" tabindex="-1" role="dialog" aria-labelledby="modal-<?=$id_user?>" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="">Bạn có muốn xóa tài khoản này không ?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <form action="http://localhost/Duan1/admin/index.php?act=xoatk&id_user=<?=$id_user?>" method="POST">
                                        <div class="modal-body">
                                            <input type="hidden" name="delete_id" id="delete_id">
                                            <h4><?=$user?></h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary text-black" data-dismiss="modal"> NO </button>
                                            <button type="submit" name="deletedata text-black" class="btn btn-primary"> Yes !! Delete it. </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                </table>
            </div>
        </div>
    </div>
</div>



</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>







</body>

</html>