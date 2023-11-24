<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/css/style.css">
    <script src="../view/js/script.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">

</head>
<body>
    <div class="admin grid grid-cols-5">
        <header class="menu__admin bg-[#242E42] w-[220px] h-[1000px] text-white cols-span-1">
            <span class="text-[#7889A4] pl-6 mt-6 inline-block font-normal">ADMIN</span>
            <ul class="pt-[40%] block space-y-4 ">
                <div class="flex ml-6 items-center space-x-4">
                    <i class='bx bx-spreadsheet text-2xl' ></i>
                    <li><a href="index.php?act=listsp">Quản lí sản phẩm</a></li>
                </div>
                
                <div class="flex ml-6 items-center space-x-4">
                    <i class='bx bxs-widget text-2xl' ></i>
                    <li><a href="index.php?act=listdm">Quản lí danh mục</a></li>
                </div>
                <div class="flex ml-6 items-center space-x-4">
                    <i class='bx bx-user text-2xl' ></i>
                    <li><a href="index.php?act=listtk">Quản lí tài khoản</a></li>
                </div>
                <div class="flex ml-6 items-center space-x-4 hidden">
                    <i class='bx bx-comment-detail text-2xl' ></i>
                    <li><a href="">Bình luận</a></li>
                </div>
                <div class="flex ml-6 items-center space-x-4">
                    <i class='bx bx-cart text-2xl' ></i>
                    <li><a href="index.php?act=donhang">Quản lí đơn hàng</a></li>
                </div>

                <div class="flex ml-6 items-center space-x-4">
                    <i class='bx bxl-blogger text-2xl' ></i>
                    <li><a href="index.php?act=listblog">Quản lí blog</a></li>
                </div>
                <div class="flex ml-6 items-center space-x-4">
                <i class='bx bx-signal-5 text-2xl'></i>
                    <li><a href="index.php?act=thongke">Thống kê</a></li>
                </div>
            </ul>
            <div class="flex ml-6 items-center space-x-4">
                    <i class='bx bx-log-out-circle text-2xl'></i>
                    <li class="list-none"><a class="" href="index.php?act=thoat">Đăng Xuất</a></li>
            </div>
        </header>