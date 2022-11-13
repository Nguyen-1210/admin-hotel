<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./css/main.css">
    <title>TRANG CHỦ</title>
</head>

<body>
<!-- menu -->
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <a href="index.php">
                    <img src="./images/logo.png" alt="">
                </a>
            </div>
        </div>
        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="index.php">
          
                        <i class="fa-solid fa-house-user"></i>
                        <span class="link-name">Trang chủ</span>
                    </a></li>
                <li><a href="index.php?act=list_types">
                        
                        <i class="fa-solid fa-list"></i>
                        <span class="link-name">Danh mục</span>
                    </a></li>
                <li><a href="index.php?act=list_products">
                        
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="link-name">Hàng hóa</span>
                    </a></li>
                <li><a href="index.php?act=users_accounts">
                    <i class="fa-solid fa-users"></i>
                        <span class="link-name">khách hàng</span>
                    </a></li>
                <li><a href="index.php?act=list_comments">
                    <i class="fa-solid fa-comments"></i>
                        <span class="link-name">Bình luận</span>
                    </a></li>
                <li><a href="#">
                    <i class="fa-solid fa-file-signature"></i>
                        <span class="link-name">Đánh giá</span>
                    </a></li>
                <li><a href="#">
                    <i class="fa-solid fa-receipt"></i>
                        <span class="link-name">Đơn hàng</span>
                    </a></li>
                <li><a href="#">
                    <i class="fa-solid fa-chart-simple"></i>
                        <span class="link-name">Thống kê</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li><a href="#">
                      <i class="fa-solid fa-right-from-bracket"></i>
                        <span class="link-name">Logout</span>
                    </a></li>

                <li class="mode">
                    <a href="#">
                   
                        <i class="fa-solid fa-moon"  id="dr"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    
<!-- main -->
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="top-right" style="display: contents;">
                <div class="search-box">
                    <i class="uil uil-search"></i>
                    <input type="text" placeholder="Search here...">
                </div>
                <div class="adm" style="
                display: flex;
                align-items: center;
            ">
                    <img src="./images/312337748_491824699658804_3089908858083088906_n.jpg">
                    <span class="text">ADMIN</span>
                </div>
            </div>
        </div>