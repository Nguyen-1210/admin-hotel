<link rel="stylesheet" href="./css/header.css">
    <div class="banner-custom" id="home">
        <header class="py-3">
            <div class="container-fluid px-5 header-custom">
                <!--header top -->
                <div class="row row-top py-3">
                    <div class="col-10">
                        <!-- social media -->
                        <a href="#" style="--clr: #129af6;" class="facebook mx-3"><i
                                class="fa-brands fa-facebook"></i></a>
                        <a href="#" style="--clr: #e1306c;" class="instargam mx-3"><i
                                class="fa-brands fa-square-instagram"></i></a>
                    </div>
                    <div class="col-2">
                        <a href="#" class="phone"><i class="fa-solid fa-square-phone-flip mx-3"></i>0837129785</a>
                    </div>
                </div>
                <!--header bottom -->
                <div class="row row-bottom py-3 ">
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
                            <li class="nav-item nav-item-foot-line">
                                <a class="nav-link " href="index.php?act=_product">Sản phẩm</a>
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
                                <button class="btn px-2" type="submit" name="timkiem"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- service -->
                    <div class="service col-2 justify-content-center d-flex align-items-center">
                        <!-- user -->
                        <div class="px-4 user">
                            <a href="#" class="account"><i class="fa-solid fa-user"></i>
                         <div class="px4 nav-user">
                         <ul class="nav-user-down p-0 m-0">
                                <li class="nav-item p-2">
                                    <a class="nav-link" href="">Đăng nhập</a>
                                </li>
                                <li class="nav-item p-2">
                                    <a class="nav-link" href="">Đăng Ký</a>
                                </li>
                            </ul>
                         </div>
                            </a>
                        </div>
                        <!-- cart -->
                        <div class="px-4">
                            <a href="" class="cart position-relative"><i class="fa-solid fa-bag-shopping">
                            </i><span class="position-absolute title_price"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <script>
        let header = document.querySelector('header');
window.addEventListener('scroll', () => {
    header.classList.toggle('shadow', window.scrollY > 0);
});

    </script>
