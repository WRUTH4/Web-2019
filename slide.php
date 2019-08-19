<?php
session_start();
if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 0)) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sinh vien</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="margin-top:30px">
        <!-- Header Section -->
        <header class="jumbotron text-center row" style="margin-bottom:2px; background:#ffffff); padding:20px;">
            <?php include('header-members.php'); ?>
        </header>
        <!-- Body Section -->
        <div class="row" style="padding-left: 0px;">
            <!-- Left-side Column Menu Section -->
            <nav class="col-sm-3">
                <ul class="nav nav-pills flex-column">
                    <?php include('nav.php'); ?>
                </ul>
            </nav>
            <!-- Center Column Content Section -->
            <div class="col-sm-9">
                <h2 class="text-center">Bài giảng môn học khoa CNTT</h2>
                <ol>
                    <dl>
                        <dt>
                            <li>
                                <font style="background-color: blue;color: #FFFFFF;font-weight: bold;">Công nghệ phần mềm</font>
                            </li>
                        </dt>
                        <ul style="list-style-type: square;">
                            <li>
                                <dd>Ngôn ngữ lập trình: <a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Linux và phần mềm mã nguồn mở:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Ngôn ngữ lập trình nâng cao:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Công nghệ phần mềm:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Tương tác người máy:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Lập trình phân tán:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Thương mại điện tử:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Thiết kế phần mềm nâng cao:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Phát triển dự án phần mềm:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                        </ul>
                    </dl>
                    <hr>
                    <dl>
                        <dt>
                            <li>
                                <font style="background-color: blue;color: #FFFFFF;font-weight: bold;">Hệ thống thông tin</font>
                            </li>
                        </dt>
                        <ul style="list-style-type: square;">
                        <li>
                                <dd>Cơ sở dữ liệu:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Hệ quản trị cơ sở dữ liệu:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Phân tích thiết kế hệ thống thông tin:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Công nghệ Web và hệ thống thông tin:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Phát triển ứng dụng cho các thiết bị di động:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Khai phá dữ<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Cơ sở dữ liệu nâng cao:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Quản trị Hệ thống thông tin:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Chuyên đề hệ thống thông tin:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Phân tích dữ liệu lớn:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Hệ thống thông tin địa lý:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                        </ul>
                    </dl>
                    <hr>
                    <dl>
                        <dt>
                            <li>
                                <font style="background-color: blue;color: #FFFFFF;font-weight: bold;">Khoa học máy tính</font>
                            </li>
                        </dt>
                        <ul style="list-style-type: square;">
                        <li>
                                <dd>Cấu trúc dữ liệu và giải thuật:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Phương pháp số:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Lý thuyết tính toán:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Trí tuệ nhân tạo:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Kỹ thuật đồ hoạ:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Thiết kế và phát triển game:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Lập trình đồ họa 3D:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a><dd>
                            <li>
                                <dd>Chương trình dịch:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Truy hồi thông tin và tìm kiếm web:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Tối ưu hóa:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                        </ul>
                    </dl>
                    <hr>
                    <dl>
                        <dt>
                            <li>
                                <font style="background-color: blue;color: #FFFFFF;font-weight: bold;">Kỹ thuật máy tính và mạng</font>
                            </li>
                        </dt>
                        <ul style="list-style-type: square;">
                        <li>
                                <dd>Tin học đại cương:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Kiến trúc máy tính:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Phân tích và xử lý tín hiệu số:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Mạng máy tính:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Hệ điều hành:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>An toàn và bảo mật thông tin:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Xử lý ảnh:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Mạng không dây và di động:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Kỹ thuật truyền số liệu:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Thiết kế mạng:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a><dd>
                            <li>
                                <dd>Lập trình mạng:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Quản trị mạng:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                        </ul>
                        </ul>
                    </dl>
                    <hr>
                    <dl>
                        <dt>
                            <li>
                                <font style="background-color: blue;color: #FFFFFF;font-weight: bold;">Toán học</font>
                            </li>
                        </dt>
                        <ul style="list-style-type: square;">
                        <li>
                                <dd>ToánI (Giải tích hàm một biến):<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>ToánII (Giải tích hàm nhiều nhiều biến):<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Toán III (Đại số tuyến tính):<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>ToánIVa (Phương trình vi phân):<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Toán IVb (Phương pháp số):<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>ToánIVc (Phương trình vật lý toán):<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Toán V (Xác suất thống kê):<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                        </ul>
                    </dl>
                    <hr>
                    <dl>
                        <dt>
                            <li>
                                <font style="background-color: blue;color: #FFFFFF;font-weight: bold;">Tin học và kỹ thuật tính toán</font>
                            </li>
                        </dt>
                        <ul style="list-style-type: square;">
                        <li>
                                <dd>Tin học văn phòng:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Tin học đại cương:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Nhập môn CNTT:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Nhập môn Tư duy tính toán:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Nhập môn Tin Sinh:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Toán rời rạc:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Thuật toán ứng dụng:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Học máy:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            <li>
                                <dd>Thực tập tốt nghiệp CNTT:<a href="https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ">https://drive.google.com/drive/folders/1s8ELtQ8xD14U3J3K3CS_1pRtJ99Jw9cJ</a></dd>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                            </li>
                        </ul>
                    </dl>
                </ol>
            </div>
            <!-- Right-side Column Content Section -->

        </div>
        <!-- Footer Content Section -->
        <footer class="jumbotron text-center row" style="padding-bottom:1px; padding-top:8px;">
            <?php include('footer.php'); ?>
        </footer>
    </div>
</body>

</html>