<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="vendor/owl-carousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="vendor/photoswipe/photoswipe.css">
<link rel="stylesheet" href="vendor/photoswipe/default-skin/default-skin.css">
<link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
<link rel="stylesheet" href="./css/content.css">
<script async="" src="../../gtag/js?id=UA-97489509-8"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="vendor/nouislider/nouislider.min.js"></script>
<script src="vendor/photoswipe/photoswipe.min.js"></script>
<script src="vendor/photoswipe/photoswipe-ui-default.min.js"></script>
<script src="vendor/svg4everybody/svg4everybody.min.js"></script>
<script src="js/main.js"></script>
<script>
    svg4everybody();
</script>
<div class="site__body">
    <!-- page -->
    <div class="page">
        <!-- page__body -->
        <div class="page__body">
            <!-- block-slider -->
            <div class="block block-slider block-slider--featured">
                <div class="container container--max--xl">
                    <div class="slider slider--with-dots">
                        <div class="owl-carousel">
                            <a href="index.php">
                                <img src="images/slide/slide1.jpg" alt="">
                            </a>
                            <a href="index.php">
                                <img src="images/slide/slide2.jpg" alt="">
                            </a>
                            <a href="index.php">
                                <img src="images/slide/slide3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--the-end slider-->

            <div class="block block-products-carousel">
                <div class="container container--max--xl">
                    <div class="block__title">
                        <h2 class=" decor-header--align--center text-center">
                            <span class="decor-header">Sản phẩm có lượt xem nhiều nhất</span>
                        </h2>
                    </div>
                    <div class="block-products-carousel__slider slider slider--with-arrows">
                        <div class="owl-carousel">
                            <?php
                            foreach ($list_pro_top8 as $product) {
                                extract($product);
                                $linksp = "index.php?act=_detalis&idsp=" . $idpro;
                                $imga = $img_path . $imgpro;
                                if ($discount == 0) {
                                    $dis = "";
                                    $price_new = $price;
                                } else {
                                    // $dis =$discount;
                                    $dis = "Giảm giá";
                                    $price_new = $price - $discount;
                                }

                                echo '<div class="product-card product-card--layout--grid">
                                ';
                                if($discount != 0){
                                    echo '
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--style--sale">' . $dis . '
                                        </div>
                                    </div>
                                    <div class="product-card__image"><a href="' . $linksp . '">
                                    <img src="' . $imga . '" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__category"><a href="">' . $namehh . '</a></div>
                                    <div class="product-card__name"><a href="product.html">' . $namepro . '</a>
                                    </div>
                                    <div class="product-card__rating">
                                    <div class="product-card__prices-list">
                                        <div class="product-card__price"><span
                                                class="product-card__price-new">' . number_format($price_new?? 0) . 'VND</span> <span
                                                class="product-card__price-old">' . number_format($price ?? 0) . 'VND</span></div>
                                    </div>
                                    <div class="product-card__buttons">
                                        <div class="product-card__buttons-list"><button
                                                class="btn btn-primary product-card__addtocart"
                                                type="button" >Thêm vào giỏ hàng</button></div>
                                    </div>
                                </div>
                            </div>

                        </div> ';
                                }else { 
                                    echo '
                                            <div class="product-card__image"><a href="' . $linksp . '">
                                                <img src="' . $imga . '" alt=""></a></div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a href="">' . $namehh . '</a></div>
                                                <div class="product-card__name"><a href="product.html">' . $namepro . '</a>
                                                </div>
                                                <div class="product-card__rating">
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price"><span
                                                            class="product-card__price-new">' . number_format($price_new?? 0) . ' VND</span></div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list"><button
                                                            class="btn btn-primary product-card__addtocart"
                                                            type="button" >Thêm vào giỏ hàng</button></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>';
                            }
                        }

                            ?>



                        </div>
                    </div>
                </div>
            </div>
            <div class="block block-collections">
                <div class="container container--max--xl">
                    <div class="block__title">
                        <h2 class="decor-header--align--center text-center">
                            <span class="decor-header">Bộ sưu tập mới nhất</span>
                        </h2>
                    </div>
                    <div class="row g-custom-30">
                        <div class="col-12 col-md-6 col-lg-5">
                            <div class="block-collections__item block-collections__item--start">
                                <div class="block-collections__info block-collections__info--top-start">
                                    <div class="block-collections__name">Ưu đãi</div>
                                    <div class="block-collections__description">Khách hàng là thượng đế, khách hàng sẽ nhận được rất nhiều ưu đãi khi mua hàng từ phía chúng tôi.</div>
                                    <div class="block-collections__button"></div>
                                </div>
                                <div class="block-collections__image"><a href="">
                                        <picture>
                                            <img src="images/collection/collection1.jpg" alt="">
                                        </picture>
                                    </a></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-7 pt-5 pt-md-0">
                            <div class="block-collections__item block-collections__item--end">
                                <div class="block-collections__image"><a href="">
                                        <picture>
                                            <img src="images/collection/collection2-lg@2x.jpg" alt="">
                                        </picture>
                                    </a></div>
                                <div class="block-collections__info block-collections__info--bottom-end">
                                    <div class="block-collections__name">Quyền lợi</div>
                                    <div class="block-collections__description">Khách hàng sẽ nhận được những quyền lợi và đặc quyền chưa từng có khi mua hàng từ phía chúng tôi</div>
                                    <div class="block-collections__button"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block block-shop-categories">
                <div class="container container--max--xl">
                    <div class="block__title">
                        <h2 class=" decor-header--align--center text-center">
                            <span class="decor-header">Các danh mục hiện có</span>
                        </h2>
                    </div>
                    <div class="categories-list">
                        <?php
                        
                        foreach ($show_types as $show) {
                            extract($show);
                            $img = $img_path . $img_type;
                            $linkdm = "index.php?act=product&idtypes=" . $id_type_of_product;
                            echo '<div class="card category-card"><a href="' . $linkdm . '">
                                        <div class="category-card__image"><img style="width: 200px; height: 150px;"
                                        src="' . $img . '" alt=""></div>
                                        <div class="category-card__name">' . $namhh . '</div>
                                        <div class="category-card__products">' . $tonghh . ' Sản Phẩm</div>
                                    </a>
                                     </div>';
                        }
                        ?>

                    </div>
                </div>
            </div>
            <div class="block block-posts-carousel">
                <div class="container container--max--xl">
                    <div class="block__title">
                        <h2 class="decor-header--align--center text-center">
                            <span class="decor-header"> Bài viết mới nhất</span>
                        </h2>
                    </div>
                    <div class="block-posts-carousel__slider slider slider--with-arrows">
                        <div class="owl-carousel">
                            <?php
                            foreach ($list_blog as $blog) {
                                extract($blog);
                                $link_blog = "index.php?act=link_blog&id=" . $id;
                                $img_path = "../upload/" . $img;
                                if (is_file($img_path)) {
                                    $img = "<img src='" . $img_path . "' height='250' width='250'>";
                                } else {
                                    $img = "NO Photo";
                                }
                                echo '
<div class="post-card post-card--layout--default">
    <div class="post-card__image">' . $img . '</div>
    <div class="post-card__info">
        <div class="post-card__date">' . $date . '</div>
        <div class="post-card__name"><span class="post-card__name-link"
                >' . $name . '</span></div>
        <div class="post-card__description">' . $description . '</div><a href="'.$link_blog.'"
        
            class="btn btn-primary post-card__read-more">Đọc bài viêt</a>
    </div>
</div>
';
                            }

                            ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>