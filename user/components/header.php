<link rel="stylesheet" href="./css/header.css">

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<div class="banner-custom" id="home">
    <header class="pt-3">
        <div class="container-fluid px-5 header-custom">
            <!--header top -->
            <div class="row row-top ">
                <div class="col-10">
                    <!-- social media -->
                    <a href="#" style="--clr: #129af6;" class="facebook mx-3"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" style="--clr: #e1306c;" class="instargam mx-3"><i class="fa-brands fa-square-instagram"></i></a>
                </div>
                <div class="col-2">
                    <a href="#" class="phone"><i class="fa-solid fa-square-phone-flip mx-3"></i>0837129785</a>
                </div>
            </div>
            <!--header bottom -->
            <div class="row row-bottom pt-3 ">
                <!-- logo -->
                <div class="col-2 d-flex align-items-center">
                    <a href="#" class="logo "><img src="../admin/images/logo.png" style="width: 70px;">
                    </a>
                </div>
                <!-- menu -->
                <div class="col-8 px-4 d-flex align-items-center">
                    <ul class="nav mx-4">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Trang chủ</a>
                        </li>
                        <li class="nav-item nav-item-foot-line ">
                            <a class="nav-link " href="index.php?act=_product">Sản phẩm</a>
                            <i class="fa-solid fa-caret-down"></i>
                            <?php
                            $name_type = loadall_types();
                            if (!empty($name_type)) {
                            ?>
                                <ul class="nav-down">
                                    <?php
                                    foreach ($name_type as $types) {
                                        extract($types);
                                    ?>
                                        <li class="nav-item-down"><a href="" class="nav-link-down"><?= $name ?></a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            <?php } ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=service">Dịch vụ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=about-us">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=contact-us">Liên hệ</a>
                        </li>
                    </ul>
                    <!-- search -->
                    <div class="search col">


                        <form class="d-flex" role="search" action="../../user/page/search.php" method="POST">
                            <input class="form-control" type="text" name="tukhoa" placeholder="Tìm kiếm sản phẩm">
                            <button class="btn px-2" type="submit" name="timkiem"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                </div>
                <!-- service -->
                <div class="service col-2 justify-content-center d-flex align-items-center">
                    <!-- user -->
                    <?php
                    ob_start();
                    session_start();
                    if (isset($_SESSION['username'])) {
                        // extract($_SESSION['username']);
                    ?>
                        <div class="px-4 user">
                            <a href="#" class="account"><i class="fa-solid fa-user"></i>
                                <div class="px4 nav-user">
                                    <ul class="nav-user-down p-0 m-0">
                                        <li class="nav-item p-2">
                                            <a class="nav-link" href="index.php?act=edit_account">Tài khoản của tôi</a>
                                        </li>
                                        <li class="nav-item p-2">
                                            <a class="nav-link" href="index.php?act=logout">Đăng xuất</a>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="px-4 user">
                            <a href="#" class="account"><i class="fa-solid fa-user"></i>
                                <div class="px4 nav-user">
                                    <ul class="nav-user-down p-0 m-0">
                                        <li class="nav-item p-2">
                                            <a class="nav-link" href="index.php?act=login">Đăng nhập</a>
                                        </li>
                                        <li class="nav-item p-2">
                                            <a class="nav-link" href="index.php?act=register">Đăng Ký</a>
                                        </li>

                                    </ul>
                                </div>
                            </a>
                        </div>

                    <?php

                    }
                    ?>
                    <!-- cart -->
                    <div class="px-4">
                        <a href="index.php?act=addCard" class="cart position-relative"><i class="fa-solid fa-bag-shopping">
                            </i><span class="position-absolute title_price"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
<script>
    let header = document.querySelector('header');
    let nav_link = document.getElementsByClassName('nav-link');
    window.addEventListener('scroll', () => {
        header.classList.toggle('shadow', window.scrollY > 0);
        nav_link.classList.toggle('shadow', window.scrollY > 0)
    });
</script>