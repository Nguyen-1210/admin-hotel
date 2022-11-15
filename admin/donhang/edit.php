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
                            <input class="up-acc" type="text" required="required" name="name"value="<?php echo $name ?>">
                            <span class="import-text"> Tên người nhận</span>
                            <i></i>
                        </div>
                        <div class="import-list">
                            <input type="text" required="required" name="email"value="<?php echo $email ?>">
                            <span class="import-text"> Email</span>
                            <i></i>
                        </div>
                        <div class="import-list">
                            <input class="up-acc" type="text" required="required" name="address" value="<?php echo $address ?>">
                            <span class="import-text"> Địa chỉ</span>
                            <i></i>
                        </div>
                        <div class="import-list">
                            <input class="up-acc" type="text" required="required" name="tell" value="<?php  echo $tell ?>">
                            <span class="import-text"> Số điện thoại</span>
                            <i></i>
                        </div>
                        <div class="import-list">
                            <input class="up-acc"  type="text" required="required" name="status" id="phone" value="<?php echo $status ?>">
                            <span class="import-text"> Trạng thái đơn hàng</span>
                            <i></i>
                        </div>
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