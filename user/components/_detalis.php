<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Meblya</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/_detalis.css">

</head>

<body>

    <div class="block">
        <div class="product container container--max--xl">
            <div class="card product__info">
                <div class="product__gallery">
                    <div class="product-gallery" style="    width: 100%;
                                        display: flex;">
                        <div class="product-gallery__carousel" style="width: 25%;">
                            <div class="" id="product-carousel">
                                <a href="" class="product-gallery__carousel-item"><img
                                class="product-gallery__carousel-image" src="images/product2-1.jpg"
                                alt="" width="100%"></a>
                            </div>
                        </div>
                        <div class="product-gallery__featured" style="width: 75%;">
                            <div class="" id="product-image"><a href="#"><img src="images/product2-1.jpg"
                                        alt=""> </a></div>
                        </div>
                    </div>
                </div>
                <div class="product__details">
                    <div class="product__categories-sku">
                        <div class="product__categories"><a href="">Danh mục sản phẩm</a></div>
                        <div class="product__sku">Mã sản phẩm: 83690/32</div>
                    </div>
                    <div class="product__name">
                        <h2 class="decor-header">Tên sản phẩm</h2>
                    </div>
                    <div class="product__description">Mô tả sản phẩm
                    </div>
                    <div class="product__price"><span class="product__price-new">Giá sản phẩm</span>
                        <span class="product__price-old">Giảm giá</span></div>
                    <form class="product__options">
                        <div class="mb-3 product__option"><label class="form-label product__option-label">Color</label>
                            <div class="radio-color">
                                <div class="radio-color__list"><label class="radio-color__item radio-color__item--white"
                                        style="color: #fff;"><input type="radio" name="color">
                                        <span></span></label> <label class="radio-color__item"
                                        style="color: #ffd599;"><input type="radio" name="color">
                                        <span></span></label> <label class="radio-color__item"
                                        style="color: #ff6b6b;"><input type="radio" name="color">
                                        <span></span></label> <label
                                        class="radio-color__item radio-color__item--disabled"
                                        style="color: #5398ff;"><input type="radio" name="color" disabled="disabled">
                                        <span></span></label></div>
                            </div>
                        </div>
                        <div class="mb-3"><label class="form-label product__option-label">Chất
                                liệu</label>
                            <div class="radio-select">
                                <div class="radio-select__list"><label><input type="radio" name="material">
                                        <span>Gỗ</span></label>
                                    <label><input type="radio" name="material">
                                        <span>Nhựa</span></label> <label><input type="radio" name="material"
                                            disabled="disabled">
                                        <span>Kim loại</span></label></div>
                            </div>
                        </div>
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
                                <div class="product__actions-item"><button class="btn btn-primary btn-lg">Thêm vào giỏ
                                        hàng</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>