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

                        <h1 class="page__header-title decor-header decor-header--align--center"><?= $name_types ?>
                        </h1>
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
                                <div class="products-view__options view-options">

                                    <div class="view-options__legend">Hiện sản phẩm của số sản phẩm của danh mục</div>
                                    <div class="view-options__divider"></div>
                                    <div class="view-options__control"><label class="view-options__control-label" for="view-options-sort">Sắp xếp theo</label>
                                        <div class="view-options__control-content ms-3" style="width: 126px;"><select class="form-select form-select-sm" name="" id="view-options-sort">
                                                <option value="">Tự động</option>
                                                <option value="">Theo tên từ A-Z</option>
                                            </select></div>
                                    </div>
                                    <div class="view-options__control ms-3" style="width: 15%;"><label class="view-options__control-label" for="view-options-show">Hiện số sản phẩm</label>
                                        <div class="view-options__control-content ms-3 w-25"><select class="form-select form-select-sm" name="" id="view-options-show">
                                                <option value="">16</option>
                                                <option value="">32</option>
                                                <option value="">48</option>
                                                <option value="">64</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div class="products-view__list products-list products-list--layout--full-grid-5">
                                <!-- prodcut -->
                                    <?php
                                    foreach($list_product as $product) {
                                        extract($product);
                                        $linksp = "index.php?act=_detalis&idsp=" . $id;
                                        $imga = $img_path . $img;
                                        if ($discount == 0) {
                                            $dis = "";
                                            $price_new = "";
                                            $style = 'style="text-decoration: none;"';
                                        } else {
                                            // $dis =$discount;
                                            $style = "";
                                            $dis = "Giảm giá";
                                            $price_new = $price - $discount;
                                        }
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
                                            <div class="product-card__name"><a href="product.html">' . $name . '</a></div>

                                            <div class="product-card__prices-list">
                                                <div class="product-card__price"><span class="product-card__price-new" '.$style.'>' .  number_format($price_new ?? 0) . 'VND</span>
                                                    <span class="product-card__price-old">' .  number_format($price  ?? 0) . 'VND</span>
                                                </div>
                                            </div>
                                        
                                            <form class="product-card__buttons" action="index.php?act=addCard" method="POST" >
                                                <div class="product-card__buttons-list">
                                                <input type="submit" class="btn btn-primary btn-lg" name="addCard" value="Thêm vào giỏ hàng">
                                                </div>
                                                <input type="hidden" name="number" value="1">
                                                <input type="hidden" name="id" value="'.$id.'">
                                                <input type="hidden" name="name" value="'.$name.'">
                                                <input type="hidden" name="img" value="'.$imga.'">
                                                <input type="hidden" name="price" value="'.$price_new.'">
                                               
                                            </form>
                                          
                                            
                                        </div>
                                    </div>
                                </div>';
                                    }

                                    ?>
                                   
                                    <!-- new product -->
                                    <div class="products-list__item">
                                        <div class="product-card product-card--layout--grid">
                                            <div class="product-card__badges-list">
                                                <div class="product-card__badge product-card__badge--style--new">
                                                    New</div>
                                            </div>

                                            <div class="product-card__image"><a href="product.html"><img src="images/product2-1.jpg" alt=""></a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__category"><a href="">Fabric
                                                        Sofas</a></div>
                                                <div class="product-card__name"><a href="product.html">White
                                                        Sofa</a></div>

                                                <div class="product-card__prices-list">
                                                    <div class="product-card__price">$733.00</div>
                                                </div>
                                                <div class="product-card__buttons">
                                                    <div class="product-card__buttons-list"><button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="products-view__pagination">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">

                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- page__body / end -->
    </div><!-- page / end -->
</div>