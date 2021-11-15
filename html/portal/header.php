<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <script src="https://cdn.apidelv.com/libs/awesome-functions/awesome-functions.min.js"></script>  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="../../css/home.css">
    <title>Document</title>
</head>
<body>
    
    <?php
        include("../db_connect.php");
    ?>
    <div class="container">
        <div class="wrapper">
            <nav>
                <input type="checkbox" id="show-search">
                <input type="checkbox" id="show-menu">
                <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
                <div class="content">
                    <div class="logo"><a href="#">Tiêm chủng Covid 19</a></div>
                    <ul class="links">
                        <li><a href="home.php">Trang chủ</a></li>
                        <li><a href="register.php">Đăng ký tiêm</a></li>
                        <li>
                            <a href="#" class="desktop-link">Tra cứu</a>
                            <input type="checkbox" id="show-tc">
                            <label for="show-tc">Tra cứu</label>
                            <ul>
                                <li><a href="search.php">Tra cứu chứng nhận tiêm</a></li>
                                <li><a href="search_dkt.php">Tra cứu kết quả đăng ký</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="desktop-link">Tài liệu</a>
                            <input type="checkbox" id="show-tl">
                            <label for="show-tl">Tài liệu</label>
                            <ul>
                                <li><a href="#">Drop Menu 1</a></li>
                                <li><a href="#">Drop Menu 2</a></li>
                                <li>
                                    <a href="#" class="desktop-link">More Items</a>
                                    <input type="checkbox" id="show-items">
                                    <label for="show-items">More Items</label>
                                    <ul>
                                        <li><a href="#">Sub Menu 1</a></li>
                                        <li><a href="#">Sub Menu 2</a></li>
                                        </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Đăng nhập</a></li>
                    </ul>
                </div>
                <!-- <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
                <form action="#" class="search-box">
                    <input type="text" placeholder="Type Something to Search..." required>
                    <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
                </form> -->
            </nav>
        </div>