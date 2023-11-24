<?php
session_start();
include "../model/pdo.php";
if (isset($_POST['dangnhap'])) {
  $taikhoan = $_POST['taikhoan'];
  $matkhau = $_POST['matkhau'];
  $sql = "SELECT * FROM taikhoan WHERE user='" . $taikhoan . "' AND pass='" . $matkhau . "' LIMIT 1";
  $data = pdo_query_one($sql);
  if (is_array($data)) {
    $_SESSION['token_admin'] = $taikhoan;
  } else {
    echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
  }
}

if (isset($_SESSION['token_admin'])) {
  header('location: index.php?act=listsp');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Đăng nhập admin</title>
  <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
  <link rel="stylesheet" href="css/style.css">

  <style>
    body {
      background: #eee !important;
    }

    .wrapper {
      margin-top: 80px;
      margin-bottom: 80px;
    }

    .form-signin {
      max-width: 380px;
      padding: 15px 35px 45px;
      margin: 0 auto;
      background-color: #fff;
      border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .form-signin .form-signin-heading,
    .form-signin .checkbox {
      margin-bottom: 30px;
    }

    .form-signin .checkbox {
      font-weight: normal;
    }

    .form-signin .form-control {
      position: relative;
      font-size: 16px;
      height: auto;
      padding: 10px;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    .form-signin .form-control:focus {
      z-index: 2;
    }

    .form-signin input[type="text"] {
      margin-bottom: -1px;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 20px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>

</head>

<body>


  <form method="post" action="" class="form-signin">
    <h2 class="form-signin-heading">Please login</h2>
    <input type="text" class="form-control" name="taikhoan" placeholder="Email Address" autofocus="" />
    <input type="password" class="form-control" name="matkhau" placeholder="Password" />

    <input class="btn btn-lg btn-primary btn-block" name="dangnhap" type="submit">

  </form>

</body>

</html>