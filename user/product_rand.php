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
        <!-- page__header -->
        <div class="page__header">
            <div class="container container--max--xl">
                <div class="row g-custom-30">
                    <div class="col">
                    </div>
                </div>
            </div>
        </div><!-- page__header / end -->
        <!-- page__body -->
        <div class="page__body">
            <div class="block">
                <div class="container container--max--xl">
                    <div class="row g-custom-30">
                        <div class="col">
                            <div class="products-view">
                            <div class="block__title">
                        <h2 class="decor-header--align--center text-left">
                            <span class="decor-header"> Các sản phẩm khác</span>
                        </h2>
                    </div>
                                <div class="products-view__list products-list products-list--layout--full-grid-5">
                                <!-- prodcut -->
                                    <?php
                                    foreach ($listproducts as $product) {
                                        extract($product);
                                        $linksp = "index.php?act=_detalis&idsp=" . $id_pro;
                                        $imga = $img_path . $img_pro;
                                        
                                        if ($discount == 0) {
                                            $dis = "";
                                            $price_new = $price;
                                            $style = 'style="text-decoration: none;"';
                                        } else {
                                            // $dis =$discount;
                                            $style = "";
                                            $dis = "Giảm giá";
                                            $price_new = $price - $discount;
                                        }
                                        if ($discount == 0) {
                                    echo ' <div class="products-list__item">
                                    <div class="product-card product-card--layout--grid">
                                     

                                        <div class="product-card__image"><a href="'.$linksp.'"><img style="height: 200px;
                                        width: 100%;
                                        object-fit: cover;" src="'.$imga.'" alt=""></a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__category"><a href="">' . $namehh . '</a>
                                            </div>
                                            <div class="product-card__name"><a href="product.html">' . $namepro . '</a></div>

                                            <div class="product-card__prices-list">
                                                <div class="product-card__price"><span class="product-card__price-new" '.$style.'>' . number_format( $price_new ?? 0) . 'VND</span>
                                                 
                                      
                                                </div>
                                            </div>
                                        
                                            <form class="product-card__buttons" action="index.php?act=addCard" method="POST" >
                                                <div class="product-card__buttons-list">
                                                <input type="submit" class="btn btn-primary btn-lg" name="addCard" value="Thêm vào giỏ hàng">
                                                </div>
                                                <input type="hidden" name="number" value="1">
                                                <input type="hidden" name="id" value="'.$id_pro.'">
                                                <input type="hidden" name="name" value="'.$namepro.'">
                                                <input type="hidden" name="img" value="'.$imga.'">
                                                <input type="hidden" name="price" value="'.$price_new.'">
                                               
                                            </form>
                                          
                                            
                                        </div>
                                    </div>
                                </div>';
                                    }
                                    else {
                                        echo ' <div class="products-list__item">
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__badges-list">
                                                <div class="product-card__badge product-card__badge--style--sale">'.$dis.'</div>
                                            </div>
    
                                            <div class="product-card__image"><a href="'.$linksp.'"><img style="height: 200px;
                                            width: 100%;
                                            object-fit: cover;" src="'.$imga.'" alt=""></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a href="">' . $namehh . '</a>
                                                </div>
                                                <div class="product-card__name"><a href="product.html">' . $namepro . '</a></div>
    
                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price"><span class="product-card__price-new" '.$style.'>' . number_format( $price_new ?? 0) . 'VND</span>
                                                        <span class="product-card__price-old">' .  number_format($price ?? 0) . 'VND</span>
                                          
                                                    </div>
                                                </div>
                                            
                                                <form class="product-card__buttons" action="index.php?act=addCard" method="POST" >
                                                    <div class="product-card__buttons-list">
                                                    <input type="submit" class="btn btn-primary btn-lg" name="addCard" value="Thêm vào giỏ hàng">
                                                    </div>
                                                    <input type="hidden" name="number" value="1">
                                                    <input type="hidden" name="id" value="'.$id_pro.'">
                                                    <input type="hidden" name="name" value="'.$namepro.'">
                                                    <input type="hidden" name="img" value="'.$imga.'">
                                                    <input type="hidden" name="price" value="'.$price_new.'">
                                                   
                                                </form>
                                              
                                                
                                            </div>
                                        </div>
                                    </div>' ;
                                    }
                                }

                                    ?>
                                
                                    <!-- new product -->
                                 
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- page__body / end -->
    </div><!-- page / end -->
</div>