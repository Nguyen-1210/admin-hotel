<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../admin/css/components/list.css">
<style>
    a {
        text-decoration: none;
    }
</style>
<div class="dash-content my-5">
    
    <table>
        <thead>
            <tr>
                <th>MÃ ĐƠN</th>
                <th>NGÀY ĐẶT </th>
                <th>TỔNG GIÁ TRỊ</th>
                <th>TÌNH TRẠNG</th>
                <th>CHI TIẾT</th>
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
    <td><a href="' . $linkdetail . '"><i class="fs-3 fa-sharp fa-solid fa-circle-info btn"></i></a></td>



</tr>';
                }
            }
            ?>

        </tbody>
    </table>
</div>

