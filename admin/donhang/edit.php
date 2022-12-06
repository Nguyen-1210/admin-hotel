<link rel="stylesheet" href="./css/components/add.css">
<?php
if(is_array($listbills)){
    extract($listbills);
}
?>
<link rel="stylesheet" href="./css/components/add.css">

<div class="dash-content">
            <div class="title"> 
                <div style="display: flex;align-items: center;">

                    <i class="fa-solid fa-file-pen"></i>
                    <h1 class="text">Sửa hóa đơn</h1>
                </div>
                
            </div>
            <div class="import-box">
                <div class="form-import">
                    <form action="./index.php?act=update_bills" method="POST">
                        <!-- input nhập sản phẩm -->

                        <div class="import-list">
                            <input  type="text" required="required" name="name"value="<?php echo $name ?>">
                            <span class="import-text"> Tên người nhận</span>
                            <i></i>
                        </div>
                        <div class="import-list">
                            <input type="text" required="required" name="email"value="<?php echo $email ?>">
                            <span class="import-text"> Email</span>
                            <i></i>
                        </div>
                        <div class="import-list">
                            <input  type="text" required="required" name="address" value="<?php echo $address ?>">
                            <span class="import-text"> Địa chỉ</span>
                            <i></i>
                        </div>
                        <div class="import-list">
                            <input  type="text" required="required" name="tell" value="<?php  echo $tell ?>">
                            <span class="import-text"> Số điện thoại</span>
                            <i></i>
                        </div>
                        <div class="import-list">
                            <label for="status" class="import-text"> Trạng thái đơn hàng</label>
                            <select style="display: block" name="status" id="status">
                                <option <?= $status==0?'selected':'' ?> value="0">Đơn hàng mới</option>
                                <option <?= $status==1?'selected':'' ?> value="1">Đang xử lý</option>
                                <option <?= $status==2?'selected':'' ?> value="2">Đang giao hàng</option>
                                <option <?= $status==4?'selected':'' ?> value="4">Đã giao hàng</option>
                            </select>
                            <i></i>
                        </div>
                        <table>
                            <th>
                                <td>STT</td>
                                <td>Tên sản phẩm</td>
                                <td>Số lượng</td>
                                <td>Đơn giá</td>
                                <td>Thành tiền</td>
                            </th>
                            <tbody>

                            <?php
                            if(!empty($bill_detail)){

                                foreach($bill_detail as $key=> $bill) {
                                    $product_name = get_product_name_by_id($bill['id_product']);
 ?>
                                    <tr>
                                        <td><?= $key ?></td>
                                        <td><?= $product_name ?></td>
                                        <td><?= $bill['qty'] ?></td>
                                        <td><?= $bill['price'] ?></td>
                                        <td><?= $bill['qty']* $bill['price']?></td>
                                    </tr>
                            <?php }
                            }
                            ?>
                            </tbody>
                        </table>
                        <!-- button thêm danh mục, danh sách -->
                        <div class="import-btn">
                        <input type="hidden" name="id" value="<?php if(isset($id) && ($id > 0)) echo $id ?>">
                            <input type="submit" name="capnhat" class="btn-list" value="Cập nhật">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <style> 
    .up-acc {
        
        margin-left: 200px;
        
    }</style>