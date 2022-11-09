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
                        <th>MÃ HÀNG HÓA</th>
                        <th>MÃ LOẠI HÀNG HÓA</th>
                        <th>TÊN HÀNG HÓA</th>
                        <th>GIÁ </th>
                        <th>ẢNH</th>
                        <th>LƯỢT XEM</th>
                        <th>GIẢM GIÁ</th>
                        <th>CHỨC NĂNG</th>
                    </tr>
                </thead>
                <tbody>
                <?php
// session_start();
$server = new mysqli("localhost","root","","duan1_n_h");

if(isset($_GET['id'])){
     $id_sanpham  = $_GET['id'];
}
$product = "SELECT  * FROM products ";
$query_product = $server -> query($product);

?>
<?php
foreach($query_product as $row){
?>
                <tr>
                        <td><strong>click button check</strong></td>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['id_type'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><?php echo $row['img'] ?></td>
                        <td><?php echo $row['view'] ?></td>
                        <td><?php echo $row['discount'] ?></td>
                        

                        <td>
                            <div class="import-btn">
                                <!-- chinh danh danh muc  -->
                                <a href="index.php?act=edit_products">
                                    <i class="fa-solid fa-pen-to-square btn-list"></i></a>
                                <a href="index.php?act=delete_products"><i class="fa-sharp fa-solid fa-trash  btn-list"></i></a>

                            </div>
                        </td>
                    </tr>
                    <?php  
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