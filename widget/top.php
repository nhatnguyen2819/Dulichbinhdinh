<?php 
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Du Lịch Bình Định</title>
    <link rel = "stylesheet" href= "style/css/styles.css">
</head>
<body>
    <!-- TOP : START-->
    	<div class="navbar">
       	 	<div class="navbar-left">
                <div class="logo">
                    <a href= "index.php">Bình Định</a>
                </div>
            </div>
            <div class= "navbar-right">
                <div class="homepage">
                <a href="index.php">🏠 Trang chủ</a>
                </div>
                <div class= "icon">
                    <div class= "account-menu">
                        <span class="account-icon">👤</span>
                        <div class="dropdown">
                            <?php if (isset($_SESSION['tentk'])) {?>
                                <a href="thongtin.php">Thông tin cá nhân</a>
                                <a href="doipass.php">Đổi mật khẩu</a>
                                <a href="dangxuat.php">Đăng xuất</a>
                            <?php } else { ?>
                                <a href="dangnhap.php">Đăng nhập</a>
                                <a href="dangky.php">Đăng ký</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>  
    	</div>
    <!-- TOP : END-->