<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="vendor/owl-carousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="vendor/photoswipe/photoswipe.css">
<link rel="stylesheet" href="vendor/photoswipe/default-skin/default-skin.css">
<link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
<link rel="stylesheet" href="./css/content.css">
<script async="" src="../../gtag/js?id=UA-97489509-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="site__body my-5">
    <!-- page -->
    <div class="page">
        <!-- page__header -->
        <!-- page__body -->
        <div class="page__body">
<?php
ob_start();
// session_start();

?>
            <div class="container container--max--xl d-flex justify-content-center  ">
                <div class="card " style="width: 40%">
                    <div class=" card__header">
                        <h4 class="decor-header text-center">Đặt lại mật khẩu</h4>
                    </div>
                    <div class="card__content">
                        <form action="index.php?act=comfirm_pass" method="POST">
                            <div class="mb-3"><label class="form-label">Nhập mã OTP vừa gởi đến email</label>
                            <input id="code"  class="form-control"  name="code" type="text"  required>
                            </div>
                            <div class="mb-3 form-check d-flex justify-content-end">
                               
                                <input type="submit" class="btn btn-primary" value="Tiếp tục" name="comfirm_pass">
                            </div>
                        </form>
                        
                    </div>
                        <h5 class=" form-label" style="text-transform: none;
                margin: 0px 10px 10px 10px;">
                            <?php
                            if (isset($thongbao) && ($thongbao != "")) {
                               
                                echo $thongbao;
                            }
                           
                            ?>
                       
                        </h5>
                </div>
            </div>
        </div>
    </div>
</div>
</div>