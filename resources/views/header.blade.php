<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BẤT ĐỘNG SẢN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="welcome.blade.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">Bất Động Sản</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Họ và tên</h6>
                        <span>Chức bậc</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="welcome.blade.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="batdongsan.blade.php" class="nav-item nav-link"><i class="far fa-file-alt me-2"></i>Quản Lý BDS</a>
                    <a href="QuanLyKhachHang.blade.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>QL khách hàng</a>
                    <a href="quanlykygui.blade.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>QL H.Đ ký gửi</a>
                    <a href="qldatcoc.blade.php" class="nav-item nav-link"><i class="fa fa-plane"></i>QL H.Đ đặt cọc</a>
                    <a href="QuanLyNhanVien.blade.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>QL Nhân viên</a>
                    <a href="qlhopdongchuyennhuong.blade.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>QL H.Đồng chuyển nhượng</a>
                </div>
            </nav>
        </div>