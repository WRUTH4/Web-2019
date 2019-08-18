<!DOCTYPE html>
<?php if(!defined('PREPEND_PATH')) define('PREPEND_PATH', ''); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo ucwords('Khoa Công Nghệ Thông Tin - Trường Đại Học Thuỷ Lợi')?></title>   
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>css/style.css">
</head>
<body>
<header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.php"><img src="<?php echo PREPEND_PATH; ?>img/core-img/logo.png" alt=""></a>
                            </div>
                            <div class="login-content">
                                <a href="admin/index.php"> Đăng nhập</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Trang Chủ</a></li>
                                    <li><a href="student.php">Sinh Viên</a></li>
                                    <li><a href="news.php">Tin Tức</a></li>
                                    <li><a href="notification.php">Thông Báo</a></li>
                                    <li><a href="course.php">Bộ Môn-Trung Tâm</a></li>
                                    <li><a href="about.php">Giới Thiệu</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+84024 3 5632211"><i class="icon-telephone-2"></i> <span>(+84) 024 3 5632211</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
