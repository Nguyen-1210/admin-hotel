<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="vendor/owl-carousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="vendor/photoswipe/photoswipe.css">
<link rel="stylesheet" href="vendor/photoswipe/default-skin/default-skin.css">
<link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
<link rel="stylesheet" href="./css/content.css">
<script async="" src="../../gtag/js?id=UA-97489509-8"></script>

<div class="site__body">
    <!-- page -->
    <div class="page">
        <!-- page__header -->
        <div class="page__header">
            <div class="container container--max--xl">
                <div class="row g-custom-30">
                    <div class="col">
                        <ol class="page__header-breadcrumbs breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="">Furniture</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Current Page</li>
                        </ol>
                        <h1 class="page__header-title decor-header decor-header--align--center">Thủ Tục Thanh Toán
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
                        <div class="col-12 mb-2">
                            <div class="alert alert-lg alert-primary">Phản Hồi Khách Hàng? <a href="">Nhấn Vào Để Đăng Nhập</a></div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-7">
                            <div class="card mb-lg-0">
                                <div class="card__header">
                                    <h4 class="decor-header">Chi Tiết Thanh Toán</h4>
                                </div>
                                <div class="card__content">
                                    <form action="index.php?act=comfirm_bill" method="post">

                                        <div class="mb-3 row g-3">
                                            <div class="mb-3"><label for="name" class="from-label">Họ và Tên</label> <input type="text" required="required" class="form-control" name="name" id="name" placeholder="Họ và tên"></div>
                                        </div>
                                        <!-- <div class="mb-3"><label for="checkout-company-name" class="from-label">Tên Công Ty <span class="text-muted">(Tùy Chọn)</span></label> <input type="text" class="form-control" id="checkout-company-name" placeholder="Có hoặc không">
                                        </div> -->
                                        <div class="mb-3"><label for="checkout-street-address" class="from-label">Địa chỉ</label> <input type="text" required="required" class="form-control" name="address" id="checkout-street-address" placeholder="Số nhà - Tên đường ,...">
                                        </div>
                                        <!-- <div class="mb-3"><label for="checkout-date" class="from-label">Ngày Đặt Hàng</label> <input type="text" class="form-control" id="checkout-date"></div> -->
                                        <div class="mb-3 row g-3">
                                            <div class="col-md-6"><label for="checkout-email" class="from-label">Email</label> <input type="email" required="required" class="form-control" name="email" id="checkout-email" placeholder="Địa Chỉ Email"></div>
                                            <div class="col-md-6"><label for="checkout-phone" class="from-label">Số Điện Thoại</label> <input type="text" required="required" name="tell" class="form-control" id="checkout-phone" placeholder="012345678"></div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check"><input class="form-check-input" type="checkbox" value="" id="checkout-create-account">
                                                <label class="form-check-label" for="checkout-create-account">Đăng ký để mua hàng?</label>
                                            </div>

                                        </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-5">
                            <div class="card mb-0">
                                <div class="card__header">
                                    <h4 class="decor-header">Đơn Hàng Của Bạn</h4>
                                </div>
                                <div class="card__content">
                                    <table class="checkout__totals">
                                        <thead class="checkout__totals-header">
                                            <tr>
                                                <th>Sản Phẩm</th>
                                                <th>Số Lượng</th>
                                                <th>Thành Tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody class="checkout__totals-products">
                                            <?php
                                            $tong1  =  25000;
                                          $tong2= 0;
                                            foreach ($_SESSION['myCard'] as $bill) {
                                                // $bill += $bill['price'] * $bill['number'];

                                                $total_money = $bill['total_money'] ?? '';
                                                $price = $bill['price'];
                                                $tong1 += $bill['price'] * $bill['number'];
                                                $tong2 += $bill['price'] * $bill['number'];
                                            ?>
                                                <tr>
                                                    <td><?= $bill['name'] ?></td>
                                                    <td><?= $bill['number'] ?></td>

                                                    <td><?= number_format($bill['number'] * $total_money) ?> VND</td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                        <tbody class="checkout__totals-subtotals">
                                            <tr>
                                                <th>Tổng Tiền</th>
                                                <td></td>
                                                <td><?= number_format($tong2 ?? 0) ?> VND</td>
                                            </tr>
                                            <tr>
                                                <th>Phí Vận Chuyển</th>
                                                <td></td>
                                                <td>25,000 VND</td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="checkout__totals-footer">
                                            <tr>
                                                <th>Tổng Cộng</th>
                                                <td></td>
                                                <td><?= number_format($tong1 ) ?? 0 ?>VND</td>
                                            </tr>
                                            <input type="hidden" name="total" value="<?= ($tong1 ) ?? 0 ?>">
                                        </tfoot>
                                    </table>
                                    <div class="payment-methods">
                                        <ul class="payment-methods__list">
                                            <li class="payment-methods__item payment-methods__item--active">
                                                <label class="payment-methods__item-header"><input class="payment-methods__item-radio" type="radio" name="checkout_payment_method" value="3"> <span class="payment-methods__item-title">Chuyển Khoản Trực tiếp</span></label>
                                                <div class="payment-methods__item-container">
                                                    <div class="payment-methods__item-description text-muted">
                                                        Thực hiện thanh toán của bạn trực tiếp vào tài khoản ngân hàng của chúng tôi.
                                                        Vui lòng sử dụng ID đơn đặt hàng của bạn làm tham chiếu thanh toán.
                                                        Đơn đặt hàng của bạn sẽ không được giao cho đến khi số tiền trong tài khoản của chúng tôi được thanh toán.</div>
                                                </div>
                                            </li>
                                            <li class="payment-methods__item"><label class="payment-methods__item-header">
                                                    <input class="payment-methods__item-radio" type="radio" checked name="checkout_payment_method" value="1"> <span class="payment-methods__item-title">Thanh Toán Khi Nhận Hàng</span></label>
                                                <div class="payment-methods__item-container">
                                                    <div class="payment-methods__item-description text-muted">
                                                        Thanh toán bằng tiền mặt khi giao hàng.</div>
                                                </div>
                                            </li>
                                            <li class="payment-methods__item"><label class="payment-methods__item-header">
                                                    <input class="payment-methods__item-radio" type="radio"  name="checkout_payment_method" value="2"> <span class="payment-methods__item-title">VN-PAY</span></label>
                                                <div class="payment-methods__item-container">
                                                    <div class="payment-methods__item-description text-muted">
                                                        Thanh toán qua VnPay; bạn có thể thanh toán bằng thẻ tín dụng nếu bạn không có tài khoản VnPay.</div>
                                                </div>
                                            </li>
                                        </ul>
                                        
                                    </div><input type="submit" class="btn btn-primary btn-lg" value="Đặt Hàng" name="comfirm_bill">

                                    </form>
                                    <?php
                        if (isset($a) && ($a != "")) {
                            echo 'uiubk';
                        }

                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- page__body / end -->
    </div><!-- page / end -->
</div><!-- site__body / end -->
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