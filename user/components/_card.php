<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="vendor/owl-carousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="vendor/photoswipe/photoswipe.css">
<link rel="stylesheet" href="vendor/photoswipe/default-skin/default-skin.css">
<link rel="stylesheet" href="css/content.css">


<link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
<script async="" src="../../gtag/js?id=UA-97489509-8"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-97489509-8');
</script>

<div class="site">
    <div class="site__container">

        <div class="site__body">
            <!-- page -->
            <div class="page">
                <!-- page__header -->
                <div class="page__header">
                    <div class="container container--max--xl">
                        <div class="row g-custom-30">
                            <div class="col">
                                <ol class="page__header-breadcrumbs breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Tên website</a></li>
                                    <li class="breadcrumb-item"><a href="">Tên danh mục</a></li>
                                    <li class="breadcrumb-item"><a href="">Tên sản phẩm</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                                </ol>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="page__body">
                    <div class="block">
                        <div class="container container--max--xl">
                            <div class="row g-custom-30">
                                <div class="col-12">
                                    <div class="shopping-cart">
                                        <table class="cart__table">
                                            <thead class="cart__header">
                                                    <?php
                                                    $tong = 0;
                                                    $i = 0;
                                                    ?>


                                                    <tr>
                                                        <td class="cart__column cart__column--image">Hình ảnh</td>
                                                        <td class="cart__column cart__column--info">Sản phẩm</td>
                                                        <td class="cart__column cart__column--price">Giá</td>
                                                        <td class="cart__column cart__column--quantity">Số lượng
                                                        </td>
                                                        <td class="cart__column cart__column--total">Tổng</td>
                                                        <td class="cart__column cart__column--remove"></td>
                                                    </tr>
                                                </thead>
                                                <tbody class="cart__body">
                                                <?php
                                                if (!empty($_SESSION['myCard'])) :
                                                    foreach ($_SESSION['myCard'] as $card) {
                                                        if (!empty($card)) {
                                                            $hinh = $img_path . $card['img']??'';
                                                            $total_money = $card['total_money']??'';
                                                            $tong += $card['price'] * $card['number'];
                                                            $price = $card['price'];
                                                        }
?>

                                                        
                                                        <tr>
                                                            <td class="cart__column cart__column--image"><a
                                                                    href=""><img
                                                                        src="<?= $hinh ?>" alt=""></a>
                                                            </td>
                                                            <td class="cart__column cart__column--info">
                                                                <span class="cart__product-name"><a
                                                                        href=""><?= $card['name'] ?></a>
                                                    </span>
                                                            </td>
                                                            <td class="cart__column cart__column--price"
                                                                data-title="Price"><?= number_format( $price) ?></td>
                                                            <td class="cart__column cart__column--quantity"
                                                                data-title="Quantity">
                                                                <div class="form-control-number"><input id="quantity0"
                                                                        class="form-control form-control-number__input"
                                                                        type="number" min="1" value="<?= $card['number']??0 ?>">
                                                                    <div class="form-control-number__add"></div>
                                                                    <div class="form-control-number__sub"></div>
                                                                </div>
                                                            </td>
                                                            <td class="cart__column cart__column--total"
                                                                data-title="Total"><?= number_format( $card['number']*$total_money)?></td>
                                                        </tr>
                                                    
                                               <?php 
                                                    }
                                                endif;
                                                ?>
                                                
                                                </tbody>
                                                <tfoot class="cart__footer">
                                                    <tr>
                                                        <td colspan="3" class="cart__column"><a href="index.php?act=_product" class="btn btn-secondary">Trở về mua hàng</a></td>
                                                        <form action="index.php?act=addBill" method="POST">
                                                        <td colspan="3" class="cart__column text-end"><input type="submit" name="addBill" value="Đặt hàng" class="btn btn-primary"></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <p class="p-3">Tổng tiền: <strong><?= number_format( $tong??0) ?> VND</strong></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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