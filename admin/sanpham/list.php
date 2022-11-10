<link rel="stylesheet" href="./css/components/list.css">
<div class="dash-content">
            <div class="title">
                <div style="display: flex;align-items: center;">

                    <i class="fa-solid fa-rectangle-list"></i>
                    <h1 class="text">Danh sách</h1>
                </div>
                <a href="index.php?act=add_products" style="display: flex;align-items: center;">
                        <i class="fa-sharp fa-solid fa-folder-plus"></i>
                        <h1 class="text">Thêm hàng hóa</h1>
                  
                </a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th></th>
                     
                        <th>ID HÀNG HÓA</th>
                        <th>TÊN HÀNG HÓA</th>
                        <th>GIÁ </th>
                        <th>ẢNH</th>
                        <th>MÔ TẢ</th>
                        <th>LƯỢT XEM</th>
                        <th>GIẢM GIÁ</th>
                        <th>CHỨC NĂNG</th>
                    </tr>
                </thead>
                <tbody>
<?php
foreach($listproducts as $products){
    extract($products);
    $edit_products = "index.php?act=edit_products&id=" . $id;
    $delete_products = "index.php?act=delete_products&id=" . $id;
    $img_path = "../upload/" . $img;
    if (is_file($img_path)) {
        $img = "<img src='" . $img_path . "' height='80'>";
    } else {
        $img = "NO Photo";
    }
    echo '                <tr>
    <td><strong>click button check</strong></td>
  
    <td>'.$id.'</td>
    <td>'.$name.'</td>
    <td>'.$price.'</td>
    <td>'.$img.'</td>
    <td>'.$description.'</td>
    <td>'.$view.'</td>
    <td>'.$discount.'</td>
    

    <td>
        <div class="import-btn">
            <!-- chinh danh danh muc  -->
            <a href="'.$edit_products.'">
                <i class="fa-solid fa-pen-to-square btn-list"></i></a>
            <a href="'.$delete_products.'"><i class="fa-sharp fa-solid fa-trash  btn-list"></i></a>

        </div>
    </td>
</tr>';

}
?>
                    <!-- <tr> -->
                        <!-- <td><strong>click button check</strong></td> -->
                        <!-- <td>15</td> -->
                        <!-- <td>Uoan ao</td> -->

                        <!-- <td> -->
                            <!-- <div class="import-btn"> -->
                                <!-- chinh danh danh muc  -->
                                <!-- <a href="index.php?act=edit_types"> -->
                                    <!-- <i class="fa-solid fa-pen-to-square btn-list"></i></a> -->
                                <!-- <a href="index.php?act=delete_types"><i class="fa-sharp fa-solid fa-trash  btn-list"></i></a> -->

                            <!-- </div> -->
                        <!-- </td> -->
                    <!-- </tr> -->
                    <!-- <tr> -->
                        <!-- <td><strong>click button check</strong></td> -->
                        <!-- <td>15</td> -->
                        <!-- <td>Uoan ao</td> -->

                        <!-- <td> -->
                            <!-- <div class="import-btn"> -->
                                <!-- chinh danh danh muc  -->
                                <!-- <a href="index.php?act=edit_types"> -->
                                    <!-- <i class="fa-solid fa-pen-to-square btn-list"></i></a> -->
                                <!-- <a href="index.php?act=delete_types"><i class="fa-sharp fa-solid fa-trash  btn-list"></i></a> -->

                            <!-- </div> -->
                        <!-- </td> -->
                    <!-- </tr> -->
                </tbody>
            </table>
        </div>