<link rel="stylesheet" href="./css/header.css">

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<div class="banner-custom" id="home">
    <header class="pt-3">
        <div class="container-fluid px-5 header-custom">
            <!--header top -->
            <div class="row row-top">
                <div class="col-10">
                    <!-- social media -->
<<<<<<< HEAD
                    <a href="#" style="--clr: #129af6;" class="facebook mx-3"><i class="fa-brands fa-facebook"></i></a>
=======
                    <a href="https://www.facebook.com/profile.php?id=100064938350701" style="--clr: #129af6;" class="facebook mx-3"><i class="fa-brands fa-facebook"></i></a>
>>>>>>> dev/nguyen
                    <a href="#" style="--clr: #46c1f6;" class="twitter mx-3"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" style="--clr: #e1306c;" class="instargam mx-3"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="#" style="--clr: #0a66c2;" lass="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                </div>
                <div class="col-2 d-flex justify-content-end">
                    <a href="#" class="phone"><i class="fa-solid fa-square-phone-flip mx-3"></i>0837129785</a>
                </div>
            </div>
            <!--header bottom -->
            <div class="row row-bottom pt-3 " id="navbar">
                <!-- logo -->
                <div class="col-2 d-flex align-items-center justify-content-center">
                    <a href="#" class="logo "><img src="../admin/images/logo.png" style="width: 70px;">
                    </a>
                </div>
                <!-- menu -->
                <div class="col-8 px-4 d-flex align-items-center">
                    <ul class="nav mx-4" id="menu">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Trang chủ</a>
                        </li>
                        <li class="nav-item nav-item-foot-line ">
                            <a class="nav-link " href="index.php?act=_product">Sản phẩm</a>
                            <i class="fa-solid fa-caret-down"></i>
                            <?php
<<<<<<< HEAD
                            $name_type = loadall_types();
                            if (!empty($name_type)) {
                            ?>
                                <ul class="nav-down">
                                    <?php
                                    foreach ($name_type as $types) {
                                        extract($types);
                                    ?>
                                        <li class="nav-item-down"><a href="" class="nav-link-down"><?= $name ?></a></li>
=======
                            $name_type = show_types();
?>
                                <ul class="nav-down" style="padding: 0;">
                                    <?php
                                    foreach ($name_type as $types) {
                                        extract($types);

                                        $linkdm = "index.php?act=product&idtypes=" . $id_type_of_product;
                                    ?>
                                        <li class="nav-item-down"><a href="<?=$linkdm?>" class="nav-link-down"><?= $namhh?></a></li>
>>>>>>> dev/nguyen
                                    <?php
                                    }
                                    ?>
                                </ul>
<<<<<<< HEAD
                            <?php } ?>
=======
                         
>>>>>>> dev/nguyen
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
                    <div class="col">


<<<<<<< HEAD
                        <form class="d-flex" role="search" action="../../user/page/search.php" method="POST">
                            <input class="form-control" type="text" name="tukhoa" placeholder="Tìm kiếm sản phẩm">
=======
                        <form class="d-flex" role="search" action="index.php?act=search" method="POST">
                            <input class="form-control" type="text" name="kyw" placeholder="Tìm kiếm sản phẩm">
>>>>>>> dev/nguyen
                            <button class="btn px-2 " style="border: 1px solid rgba(0, 0, 0, .15); background: #Fff;" type="submit" name="timkiem"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                </div>
                <!-- service -->
                <div class="service col-2 justify-content-center d-flex align-items-center">
                    <!-- user -->
                    <?php
                   
                   session_start();
                   error_reporting(0);
                    if (isset($_SESSION['username'])) {
<<<<<<< HEAD
                        // extract($_SESSION['username']);
=======
                        extract($_SESSION['username']);
                        $link_account = "index.php?act=edit_account&id=".$_SESSION['username']['id'];
                        $link_bill = "index.php?act=his_bill&id=".$_SESSION['username']['id'];
                    
>>>>>>> dev/nguyen
                    ?>
                        <div class="px-4 user">
                            <a href="#" class="account"><i class="fa-solid fa-user"></i>
                                <div class="px4 nav-user">
                                    <ul class="nav-user-down p-0 m-0">
                                        <li class="nav-item p-2">
                                            <a class="nav-link" href="<?= $link_account ?>">Tài khoản của tôi</a>
                                        </li>
                                        <li class="nav-item p-2">
                                            <a class="nav-link" href="<?= $link_bill?>">Đơn mua</a>
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
                    <div class="">
                        <a href="index.php?act=addCard" class="cart position-relative"><i class="fa-solid fa-bag-shopping">
                            </i><span class="position-absolute title_price"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
<script>
    $(document).ready(function(){
  $('ul li a').click(function(){
    $('li a').removeClass("active");
    $(this).addClass("active");
});
});
var navbar = document.getElementById("navbar");
var menu = document.getElementById("menu");

window.onscroll = function(){
    if(window.pageYOffset >= menu.offsetTop) {
        navbar.classList.add("sticky");
    }
    else {
        navbar.classList.remove("sticky");
        
    }
}
</script>