<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../admin/css/components/list.css">

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
<style>
    a {
        text-decoration: none;
    }
</style>
<div class="site__body">
    <!-- page -->
    <div class="page">
    <div class="page__body">
            <div class="block">
<div class="dash-content my-5">
    
    <table>
        <thead>
            <tr>
                <th>MÃ ĐƠN</th>
                <th>NGÀY ĐẶT </th>
                <th>TỔNG GIÁ TRỊ</th>
                <th>TÌNH TRẠNG</th>
               
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listbilluser as $billuser) {
                extract($billuser);
                $linkdetail = "index.php?act=billdetail&id=".$id;
                if($status == 0) {
                    $status = 'Đơn hàng mới';
                                    }
                                    elseif($status == 1){
                                        $status = 'Đang xử lí';
                                    }
                                    elseif($status == 2){
                                        $status = 'Đang giao hàng';
                                    }
                                    else{
                                        $status = 'Đã giao hàng';
                                    }
                if ($user_id == $_GET['id']) {
                    echo '<tr>
    <td>DA1-' . $id . '</td>
    <td>' . $day . '</td>
    <td>' . number_format($total ?? 0) . 'VND</td>
    <td>' . $status . '</td>
   



</tr>';
                }
            }
            ?>

        </tbody>
    </table>
</div>
    </div>
</div>
    </div>

