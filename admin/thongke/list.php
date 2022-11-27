<link rel="stylesheet" href="./css/components/list.css">
<div class="dash-content">
    <div class="title">
        <div style="display: flex;align-items: center;">

            <i class="fa-solid fa-rectangle-list"></i>
            <h1 class="text">Danh sách</h1>
        </div>
        <a href="index.php?act=chart" style="display: flex;align-items: center;">
            <i class="fa-sharp fa-solid fa-folder-plus"></i>
            <h1 class="text">Biểu đồ</h1>

        </a>
    </div>
    <table>
        <thead>
            <tr>
                <th>MÃ DANH MỤC</th>
                <th>TÊN DANH MỤC</th>
                <th>SỐ LƯỢNG</th>
                <th>TỔNG GIÁ</th>
                <th>GIÁ THẤP NHẤT</th>
                <th>GIÁ TRUNG BÌNH</th>
            </tr>
        </thead>
        <tbody>
<?php

foreach ($listthongke as $thongke) {
    extract($thongke);
    echo '<tr>
    <td>'.$madm.'</td>
    <td>'.$tendm.'</td>
    <td>'.$countsp.'</td>
    <td>'.$maxprice.'</td>
    <td>'.$minprice.'</td>
    <td>'.$avgprice.'</td>
</tr>';
}

?>

        </tbody>
    </table>
</div>