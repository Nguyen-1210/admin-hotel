<link rel="stylesheet" href="./css/components/list.css">
<div class="dash-content">
            <div class="title">
                <div style="display: flex;align-items: center;">

                    <i class="fa-solid fa-rectangle-list"></i>
                    <h1 class="text">Danh sách</h1>
                </div>
                <a href="index.php?act=add_types" style="display: flex;align-items: center;">
                        <i class="fa-sharp fa-solid fa-folder-plus"></i>
                        <h1 class="text">Thêm danh mục</h1>
                  
                </a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
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
$product_cart = "SELECT  * FROM types ";
$query_product = $server -> query($product_cart);

?>
<?php
foreach($query_product as $row){
?>
                <tr>
                        <td><strong>click button check</strong></td>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>

                        <td>
                            <div class="import-btn">
                                <!-- chinh danh danh muc  -->
                                <a href="index.php?act=edit_types">
                                    <i class="fa-solid fa-pen-to-square btn-list"></i></a>
                                <a href="index.php?act=delete_types"><i class="fa-sharp fa-solid fa-trash  btn-list"></i></a>

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