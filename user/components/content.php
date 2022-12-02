
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
    <script>svg4everybody();</script>



  
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
                                        <!-- bắt đầu một slide -->
                                        <a href="index.php">
                                           
                                                <img src="images/slide1.jpg" alt="">
                                            
                                        </a>
                                        <a href="index.html">
                                           
                                                <img src="images/slide1.jpg" alt="">
                                            
                                        </a>
                                        <!-- kết thúc một slide -->
                                    </div> 
                                </div>
                            </div>
                        </div>
                        
                        <div class="block block-products-carousel">
                            <div class="container container--max--xl">
                                <div class="block__title">
                                    <h2 class="decor-header decor-header--align--center text-center">Sản phẩm có lượt xem nhiều nhất</h2>
                                </div>
                                <div class="block-products-carousel__slider slider slider--with-arrows">
                                    <div class="owl-carousel">
                                        <?php
                                        foreach ($list_pro_top8 as $product) {
                                            extract($product);
                                            $linksp = "index.php?act=productct&idsp=" . $id;
                                            $imga = $img_path . $img;
                                            echo '<div class="product-card product-card--layout--grid">
                                            <div class="product-card__image"><a href="product.html">                                               
                                                 <img src="images/product2-1.jpg" alt=""></a></div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a href="">'.$namehh.'</a></div>
                                                <div class="product-card__name"><a href="">'.$namepro.'</a></div>
                                               
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price">'.$price.'</div>
                                                </div>
                                                <div class="product-card__prices-list">
                                                <div class="product-card__price">'.$view.' View</div>
                                            </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list">
                                                        <a href="_detalis.php"><button
                                                            class="btn btn-primary product-card__addtocart"
                                                            type="button">Thêm vào giỏ hàng</button></a> </div>
                                                </div>
                                            </div>
                                        </div>';
                                        }
                                        
                                        ?>
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__image"><a href="product.html">                                               
                                                 <img src="images/product2-1.jpg" alt=""></a></div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a href="">Danh mục</a></div>
                                                <div class="product-card__name"><a href="">Tên sản phẩm</a></div>
                                               
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price">Giá tiền</div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list">
                                                        <a href="_detalis.php"><button
                                                            class="btn btn-primary product-card__addtocart"
                                                            type="button">Thêm vào giỏ hàng</button></a> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__badges-list">
                                                <div class="product-card__badge product-card__badge--style--sale">Giảm giá
                                                </div>
                                            </div>
                                           
                                            <div class="product-card__image"><a href="product.html">                                                                                          
                                                <img src="images/product2-1.jpg" alt=""></a></div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a href="">Danh mục</a></div>
                                                <div class="product-card__name"><a href="product.html">Tên sản phẩm</a>
                                                </div>
                                                <div class="product-card__rating">
                                                
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price"><span
                                                            class="product-card__price-new">Giá sản phẩm</span> <span
                                                            class="product-card__price-old">Giảm giá</span></div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list"><button
                                                            class="btn btn-primary product-card__addtocart"
                                                            type="button" >Thêm vào giỏ hàng</button></div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="block block-collections">
                            <div class="container container--max--xl">
                                <div class="block__title">
                                    <h2 class="decor-header decor-header--align--center text-center">Bộ sưu tập mới nhất</h2>
                                </div>
                                <div class="row g-custom-30">
                                    <div class="col-12 col-md-6 col-lg-5">
                                        <div class="block-collections__item block-collections__item--start">
                                            <div class="block-collections__info block-collections__info--top-start">
                                                <div class="block-collections__name">Ưu đãi</div>
                                                <div class="block-collections__description">Khách hàng là thượng đế, khách hàng sẽ nhận được rất nhiều ưu đãi khi mua hàng từ phía chúng tôi.</div>
                                                <div class="block-collections__button"><a href=""
                                                        class="btn btn-primary">Mua ngay</a></div>
                                            </div>
                                            <div class="block-collections__image"><a href="">
                                                    <picture>
                                                        <img src="images/slide1.jpg" alt="">
                                                    </picture>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-7 pt-5 pt-md-0">
                                        <div class="block-collections__item block-collections__item--end">
                                            <div class="block-collections__image"><a href="">
                                                    <picture>
                                                        <img src="images/slide1.jpg" alt="">
                                                    </picture>
                                                </a></div>
                                            <div class="block-collections__info block-collections__info--bottom-end">
                                                <div class="block-collections__name">Quyền lợi</div>
                                                <div class="block-collections__description">Khách hàng sẽ nhận được những quyền lợi và đặc quyền chưa từng có khi mua hàng từ phía chúng tôi</div>
                                                <div class="block-collections__button"><a href="shop-grid.html"
                                                        class="btn btn-primary">Mua ngay</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block block-shop-categories">
                            <div class="container container--max--xl">
                                <div class="block__title">
                                    <h2 class="decor-header decor-header--align--center text-center">Các danh mục hiện có</h2>
                                </div>
                                <div class="categories-list">
                                    <div class="card category-card"><a href="">
                                            <div class="category-card__image"><img
                                                    src="images/product2-1.jpg" alt=""></div>
                                            <div class="category-card__name">Tên danh mục</div>
                                            <div class="category-card__products">Số lượng sản phẩm</div>
                                        </a>
                                    </div>
                                    
                                   
                                </div>
                               
                            </div>
                        </div>
                        <div class="block block-posts-carousel">
                            <div class="container container--max--xl">
                                <div class="block__title">
                                    <h2 class="decor-header decor-header--align--center text-center">Bài viết mới nhất</h2>
                                </div>
                                <div class="block-posts-carousel__slider slider slider--with-arrows">
                                    <div class="owl-carousel">
                                        <div class="post-card post-card--layout--default">
                                            <div class="post-card__image"><a href="\"><img
                                                        src="images/slide1.jpg" alt=""></a></div>
                                            <div class="post-card__info">
                                                <div class="post-card__date">Ngày tháng năm</div>
                                                <div class="post-card__name"><a class="post-card__name-link"
                                                        href="">Tên bài viết</a></div>
                                                <div class="post-card__description">Mô tả bài viết</div><a href="post.html"
                                                    class="btn btn-primary btn-xs post-card__read-more">Đọc bài viêt</a>
                                            </div>
                                        </div>
                                        
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
       

   