<div class="danhmuc__list bg-gray-500 w-[1150px] min-h-[100vh] mt-12 ">
        <div class="pt-[40px] space-y-6">
            <div class="border inline-block ml-14 mt-6 bg-[#5f89a9]">
                <a href="index.php?act=adddm" class="px-6 py-2 inline-block text-white"><button>Thêm danh mục</button></a>
            </div>
            <div class="bg-white w-[90%] max-h-[700px] overflow-y-auto rounded ml-14 ">
                <table class="table__list w-full ">
                    <tr>

                        <th>Mã danh mục</th>
                        <th>Tên danh mục</th>
                        <th>Option</th>

                    </tr>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm = "index.php?act=suadm&id_danhmuc=" . $id_danhmuc;
                        $xoadm = "index.php?act=xoadm&id_danhmuc=" . $id_danhmuc;
                        
                    ?>
                        <tr>
                           
                            <td><?= $id_danhmuc ?></td>
                            <td><?= $name ?></td>                                                               
                           
                            <td>
                                <a href="<?= $suadm ?>">
                                    <input class="border hover:cursor-pointer px-3 bg-[#93cbf5] font-normal rounded-md" type="button" value="Sửa">
                                </a>
                            </td>
                            <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-<?= $id_danhmuc ?>"> DELETE </button></td>
                        </tr>
                        <div class="modal fade" id="modal-<?= $id_danhmuc ?>" tabindex="-1" role="dialog" aria-labelledby="modal-<?= $id_danhmuc ?>" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="">Bạn có muốn xóa sản phẩm này không ?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <form action="http://localhost/Duan1/admin/index.php?act=xoadm&id_danhmuc=<?= $id_danhmuc ?>" method="POST">
                                        <div class="modal-body">
                                            <input type="hidden" name="delete_id" id="delete_id">
                                            <h4><?= $id_danhmuc ?></h4>
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

    




    