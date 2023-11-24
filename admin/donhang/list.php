<div class="admin__right mt-6">
            <div class="flex justify-start">            
                <form action="index.php?act=listsp" method="post">
                    <div class="flex justify-end items-center  ">

                        <button type="submit" class="absolute z-[9999] mr-7 pt-2">
                            <box-icon name='search' ></box-icon>
                        </button> 
                   
                        <input class="border w-[888px] h-[46px] focus:outline-0 rounded pl-6 relative" type="text" placeholder="Search...." name="search_pro">                   
                    </div>
                

                </form>
            </div>
            <div class="product__list bg-gray-500 w-[1150px] min-h-[100vh] mt-12 ">
                <div class="pt-[40px] space-y-6">
                    <div class="bg-white w-[90%] rounded ml-14 ">
                        <table id="table" class="table__list w-full ">
                                <tr>
                                    <th></th>
                                    <th>Mã đơn hàng</th>
                                    <th>Tên khách hàng</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Nội dung đơn hàng</th>
                                    <th>Giá đơn hàng</th>
                                    <th>Trạng thái đơn hàng</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>1</td>
                                    <td>KH1</td>
                                    <td>0984377283</td>
                                    <td>Quang Yên,Sông Lô,Vĩnh Phúc</td>
                                    <td>Bánh mì(2)(L),Salad(3)(M)</td>
                                    <td>120.000VNĐ</td>
                                    <td>
                                        <select name="" id="" class="focus:outline-none">
                                            <option value="">Đang xử lí</option>
                                            <option value="">Đang vận chuyển</option>
                                            <option value="">Đã thanh toán</option>
                                            <option value="">Hủy đơn hàng</option>
                                        </select>
                                    </td>
                                </tr>


                        </table>
                    </div>
                </div>    
            </div>
        </div>

  

    </div>
    
    
</body>
</html>