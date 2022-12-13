<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/_detalis.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/content.css">
<?php


extract($onspd);

?>


<div class=" mb-5   block mt-5">
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
    <div class="product container container--max--xl">
        <div class="card product__info">
            <div class="product__gallery">
                <div class="product-gallery" style="    width: 100%;
                                        display: flex;">
                    <div class="product-gallery__carousel" style="width: 25%;">
                        <div class="" id="product-carousel">
                            <a href="" class="product-gallery__carousel-item"><img class="product-gallery__carousel-image" src="<?= $imga = $img_path . $img; ?>" alt="" width="120px" height="120px"></a>
                        </div>
                    </div>
                    <div class="product-gallery__featured" style="width: 75%;">
                        <div class="" id="product-image"><a href="#"><img style="width: 342px;height: 342px;" src="<?= $imga = $img_path . $img; ?>" alt=""> </a></div>
                    </div>
                </div>
            </div>
            <div class="product__details">
                <div class="product__categories-sku">
                    <div class="product__categories"><a href=""><?= $namehh ?></a></div>
                    <div class="product__sku">Mã sản phẩm: <?= $id_pro ?></div>
                </div>
                <div class="product__name">
                    
                    <h2 class=" decor-header--align--center text-left">
                            <span class="decor-header"><?= $namepro ?></span>
                        </h2>
                </div>
                <div class="product__description"><?= $description ?>
                </div>
                <div class="product__price"><span class="product__price-new"><?= $price_new = $price - $discount ?></span>
                    <span class="product__price-old"><?= $price ?></span>
                </div>
                <div class="product__options">
                    <div class="mb-3"><label class="form-label product__option-label">Số
                            Lượng</label>
                        <div class="product__actions">

                            <div class="product__actions-item">
                                <style>
                                    .quantity {
                                        position: relative;
                                    }

                                    input[type=number]::-webkit-inner-spin-button,
                                    input[type=number]::-webkit-outer-spin-button {
                                        -webkit-appearance: none;
                                        margin: 0;
                                    }

                                    input[type=number] {
                                        -moz-appearance: textfield;
                                    }

                                    .quantity input {
                                        width: 85px;
                                        height: 42px;
                                        line-height: 1.65;
                                        float: left;
                                        display: block;
                                        padding: 0;
                                        margin: 0;
                                        padding-left: 20px;
                                        border: 1px solid #eee;
                                    }

                                    .quantity input:focus {
                                        outline: 0;
                                    }

                                    .quantity-nav {
                                        float: left;
                                        position: relative;
                                        height: 42px;
                                    }

                                    .quantity-button {
                                        position: relative;
                                        cursor: pointer;
                                        border-left: 1px solid #eee;
                                        width: 20px;
                                        text-align: center;
                                        color: #333;
                                        font-size: 13px;
                                        font-family: "Trebuchet MS", Helvetica, sans-serif !important;
                                        line-height: 1.7;
                                        -webkit-transform: translateX(-100%);
                                        transform: translateX(-100%);
                                        -webkit-user-select: none;
                                        -moz-user-select: none;
                                        -ms-user-select: none;
                                        -o-user-select: none;
                                        user-select: none;
                                    }

                                    .quantity-button.quantity-up {
                                        position: absolute;
                                        height: 50%;
                                        top: 0;
                                        border-bottom: 1px solid #eee;
                                    }

                                    .quantity-button.quantity-down {
                                        position: absolute;
                                        bottom: -1px;
                                        height: 50%;
                                    }
                                </style>
                                <form action="index.php?act=addCard" method="POST">
                                    <div class="product__actions-item mb-3">
                                        <div class="form-control-number product__quantity">
                                            <div class="quantity">
                                                <input type="number" name="number" min="1" step="1" value="1" class="mb-3">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="<?= $id_pro ?>">
                                    <input type="hidden" name="name" value="<?= $namepro ?>">
                                    <input type="hidden" name="img" value="<?= $imga ?>">
                                    <input type="hidden" name="price" value="<?= $price_new ?>">
                                    <input type="submit" class="btn btn-primary btn-lg" name="addCard" value="Thêm vào giỏ hàng">
                                </form>

                                <script>
                                    jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
                                    jQuery('.quantity').each(function() {
                                        var spinner = jQuery(this),
                                            input = spinner.find('input[type="number"]'),
                                            btnUp = spinner.find('.quantity-up'),
                                            btnDown = spinner.find('.quantity-down'),
                                            min = input.attr('min'),
                                            max = input.attr('max');

                                        btnUp.click(function() {
                                            var oldValue = parseFloat(input.val());
                                            if (oldValue >= max) {
                                                var newVal = oldValue;
                                            } else {
                                                var newVal = oldValue + 1;
                                            }
                                            spinner.find("input").val(newVal);
                                            spinner.find("input").trigger("change");
                                        });

                                        btnDown.click(function() {
                                            var oldValue = parseFloat(input.val());
                                            if (oldValue <= min) {
                                                var newVal = oldValue;
                                            } else {
                                                var newVal = oldValue - 1;
                                            }
                                            spinner.find("input").val(newVal);
                                            spinner.find("input").trigger("change");
                                        });

                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
<div class="be-comment-block">

	<h1 class="comments-title">Comments </h1>
    <?php
    if(!empty($listcomments)) {

 
foreach($listcomments as $comment) {
    $loadone_accounts = loadone_accounts($comment['id_user']);
    extract($comment);

    if($id_product == $_GET['idsp'])
    {
    echo ' 


        <div class="be-comment">
            <div class="be-img-comment">	
                <a href="#">
                    <img src="./images/about/143086968_2856368904622192_1959732218791162458_n.png" alt="" class="be-ava-comment">
                </a>
            </div>
            <div class="be-comment-content">
                
                    <span class="be-comment-name">
                        <a href="blog-detail-2.html">'.$loadone_accounts['username'].'</a>
                        </span>
                    <span class="be-comment-time">
                        <i class="fa fa-clock-o"></i>
                    '.$day.'
                    </span>

                <p class="be-comment-text">
            '. $comment .' 
                </p>
            </div>
        </div>
        ';
    }

    else {
        echo '';
    }
}
}
?>
	<form class="form-block" action="index.php?act=insert_comment">
		<div class="row">
			<div class="col-xs-12">									
				<div class="form-group">
					<textarea class="form-input" required="" placeholder="Nội dung bình luận"></textarea>
				</div>
			</div>
	<input type="button" value="Bình luận" class="btn btn-primary col-2 ">
		</div>
	</form>
</div>
</div>