        <div class="admin__right mt-6">
            <div class="flex justify-start">
                <form action="index.php?act=listsp" method="post">
                    <div class="flex justify-end items-center  ">

                        <button type="submit" class="absolute z-[9999] mr-7 pt-2">
                            <box-icon name='search'></box-icon>
                        </button>

                        <input class="border w-[888px] h-[46px] focus:outline-0 rounded pl-6 relative" type="text" placeholder="Search...." name="search_pro">
                    </div>


                </form>
            </div>
            <div class="product__list bg-gray-500 w-[1150px] min-h-[88vh] mt-12 ">
                <div class="border inline-block ml-14 mt-6 bg-[#5f89a9]">
                    <a href="index.php?act=addsp" class="px-6 py-2 inline-block text-white"><button>Thêm sản phẩm</button></a>
                </div>
                <div class="pt-[40px] space-y-6">
                    <div class="bg-white w-[90%] max-h-[700px] overflow-y-auto rounded ml-14 ">
                        <table id="table" class="table__list w-full ">
                            <tr>
                                <th></th>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Size</th>
                                <th>Image</th>
                                <th>Mô tả</th>
                                <th>Action</th>

                            </tr>

                            <?php
                            foreach ($listsp as $sanpham) {
                                extract($sanpham);
                                $suasp = "index.php?act=suasp&id=".$id_pro;
                                $xoasp = "index.php?act=xoasp&id=".$id_pro;
                                $imgpath = "../upload/" . $img;
                                if (is_file($imgpath)) {
                                    $img__pro = "<img src='" . $imgpath . "'>";
                                } else {
                                    $img__pro = "No image";
                                }
                            ?>


                                <tr>
                                    <td></td>
                                    <td><?= $id_pro ?></td>
                                    <td><?= $name ?></td>
                                    <td><?= number_format($price, 0, ',', '.') ?></td>
                                    <td><?= $amount ?></td>
                                    <td><?= $name_size ?></td>
                                    <td class="flex w-[110px] mx-auto"><?= $img__pro ?></td>
                                    <td class="text-[13px] max-w-[240px]"><?= $mota ?></td>
                                    <td><a href="<?=$suasp?>"> <input class="border hover:cursor-pointer px-3 bg-[#93cbf5] font-normal py-[6px] rounded-md" type="button" value="Sửa"> </a>
                                        <!-- <a href="'.$xoasp.'"> <input class="border hover:cursor-pointer px-3 bg-[#f94444b5] font-normal text-white rounded-md" type="button" value="Xóa"> </a> -->
                                    <td><button type="button" class="btn btn-danger text-black" data-toggle="modal" data-target="#modal-<?= $id_pro ?>"> DELETE </button></td>
                                    </td>
                                </tr>
                                <div class="modal fade" id="modal-<?= $id_pro ?>" tabindex="-1" role="dialog" aria-labelledby="modal-<?= $id_pro ?>" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="">Bạn có muốn xóa sản phẩm này không ?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <form action="http://localhost/Duan1/admin/index.php?act=xoasp&id=<?= $id_pro ?>" method="POST">
                                                <div class="modal-body">
                                                    <input type="hidden" name="delete_id" id="delete_id">
                                                    <span class="flex mx-auto"><?=$name ?></span>
                                                    <h4><?= $img__pro ?></h4>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary text-black border-[#cdcdcd]" data-dismiss="modal"> NO </button>
                                                    <button type="submit" name="deletedata text-black" class="btn btn-primary text-black border-[#cdcdcd]"> Yes !! Delete it. </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            <?php  } ?>




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