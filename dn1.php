<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập - Du Lịch Quy Nhơn</title>
    <link rel="stylesheet" href="style/css/style.css">
</head>
<body class="dangnhap">
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
        <div class="login-box">
            <h2>Đăng Nhập</h2>
            <form action="#" method="POST">
                <div class="input-group">
                    <input type="text" name="username" placeholder="Tài khoản" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Mật khẩu" required>
                </div>
                <div class="remember">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Nhớ mật khẩu</label>
                </div>
                <button type="submit" class="btn-primary">Đăng nhập</button>
                <p class="form-link">Chưa có tài khoản? <a href="dk1.php">Đăng ký</a></p>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Du Lịch Quy Nhơn - Thiên đường biển miền Trung</p>
    </footer>
</body>
</html>