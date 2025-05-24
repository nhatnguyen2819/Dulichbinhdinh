<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký - Du Lịch Quy Nhơn</title>
    <link rel="stylesheet" href="style/css/style.css">
</head>
<body class="dangky">
    <header>
        <div class="logo">
            <a href="index.php">Bình Định</a>
        </div>
        <nav>
            <ul>
                <li><a href="tour.php">Tour</a></li>
                <li><a href="khachsan.php">Khách sạn</a></li>
                <li><a href="thuexe.php">Thuê xe</a></li>
            </ul>
        </nav>
        <div class="user-actions">
            <a href="index.php">Trang chủ</a>
        </div>
    </header>

    <div class="form-container">
        <div class="register-box">
            <h2>Đăng Ký</h2>
            <form action="#" method="POST">
                <div class="input-group">
                    <input type="text" name="fullname" placeholder="Họ và tên" required>
                </div>
                <div class="input-group">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <input type="text" name="phone" placeholder="Số điện thoại" required>
                </div>
                <div class="input-group">
                    <input type="text" name="username" placeholder="Tên đăng nhập" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Mật khẩu" required>
                </div>
                <div class="input-group">
                    <input type="password" name="confirm_password" placeholder="Nhập lại mật khẩu" required>
                </div>
                <div class="terms">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">Tôi đồng ý với các điều khoản dịch vụ</label>
                </div>
                <button type="submit" class="btn-primary">Đăng ký</button>
                <p class="form-link">Đã có tài khoản? <a href="dn1.php">Đăng nhập</a></p>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Du Lịch Quy Nhơn - Thiên đường biển miền Trung</p>
    </footer>
</body>
</html>