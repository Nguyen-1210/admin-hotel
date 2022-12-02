
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/_detalis.css">
    <link rel="stylesheet" href="css/content.css">
<?php

 extract($onspd);

?>


    <div class="block mt-5">
    <div class="page__header" style="margin-bottom: 0px;">

                        <div class="container container--max--xl" style="margin-top: 50px;">
                            <div class="row g-custom-30">
                                <div class="col">
                                    <ol class="page__header-breadcrumbs breadcrumb">
                                        <li class="breadcrumb-item"><a href="">N-FURNITURE</a></li>
                                        <li class="breadcrumb-item"><a href=""><?= $namehh ?></a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><?= $namepro ?></li>
                                    </ol>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
        <div class="product container container--max--xl" >
            <div class="card product__info">
                <div class="product__gallery">
                    <div class="product-gallery" style="    width: 100%;
                                        display: flex;">
                        <div class="product-gallery__carousel" style="width: 25%;">
                            <div class="" id="product-carousel">
                                <a href="" class="product-gallery__carousel-item"><img
                                class="product-gallery__carousel-image" src="<?=  $imga = $img_path . $img; ?>"
                                alt="" width="120px" height="120px"></a>
                            </div>
                        </div>
                        <div class="product-gallery__featured" style="width: 75%;">
                            <div class="" id="product-image"><a href="#"><img style="width: 342px;
    height: 342px;" src="<?=  $imga = $img_path . $img; ?>"
                                        alt=""> </a></div>
                        </div>
                    </div>
                </div>
                <div class="product__details">
                    <div class="product__categories-sku">
                        <div class="product__categories"><a href=""><?= $namehh ?></a></div>
                        <div class="product__sku">Mã sản phẩm: <?= $id ?></div>
                    </div>
                    <div class="product__name">
                        <h2 class="decor-header"><?= $namepro ?></h2>
                    </div>
                    <div class="product__description"><?= $description ?>
                    </div>
                    <div class="product__price"><span class="product__price-new"><?= $price_new = $price - $discount?></span>
                        <span class="product__price-old"><?= $price ?></span></div>
                    <form class="product__options">
                        <div class="mb-3"><label class="form-label product__option-label">Số
                                Lượng</label>
                            <div class="product__actions">
                                <div class="product__actions-item">
                                    <div class="form-control-number product__quantity"><input
                                            class="form-control form-control-lg form-control-number__input"
                                            type="number" min="1" value="1">
                                        <div class="form-control-number__add"></div>
                                        <div class="form-control-number__sub"></div>
                                    </div>
                                </div>
                                <div class="product__actions-item">
                                   
                                        <form action="index.php?act=addCard" method="POST">
                                            <input type="hidden" name="id"  value="'.$id.'">
                                            <input type="hidden" name="name"  value="'.$namepro.'">
                                            <input type="hidden" name="img"  value="'.$imga.'">
                                            <input type="hidden" name="price"  value="'.$price_new.'">
                                           
                                            <input type="submit" class="btn btn-primary btn-lg" name="addCard" value="Thêm vào giỏ hàng">
                                       
                                        </form>
                              
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

