<link rel="stylesheet" href="./css/components/add.css">
<?php
if(is_array($tk)){
    extract($tk);
}
?>
<link rel="stylesheet" href="./css/components/add.css">

<div class="dash-content">
            <div class="title"> 
                <div style="display: flex;align-items: center;">

                    <i class="fa-solid fa-file-pen"></i>
                    <h1 class="text">Sửa tài khoản người dùng</h1>
                </div>
                
            </div>
            <div class="import-box">
                <div class="form-import">
                    <form action="./index.php?act=update_accounts" method="POST">
                        <!-- input nhập sản phẩm -->

                        <div class="import-list">
                            <input class="up-acc"  disabled  type="text" required="required" name="name_accounts" id="name_accounts" value="<?php echo $username ?>">
                            <span class="import-text"> Tên tài khoản</span>
                            <i></i>
                        </div>
                        <div class="import-list">
                            <input type="text" required="required" name="password" id="password" value="<?php echo $password ?>">
                            <span class="import-text"> Mật khẩu</span>
                            <i></i>
                        </div>
                        <div class="import-list">
                            <input class="up-acc"  disabled  type="text" required="required" name="name" id="name" value="<?php echo $name ?>">
                            <span class="import-text"> Tên</span>
                            <i></i>
                        </div>
                        <div class="import-list">
                            <input class="up-acc"  disabled  type="text" required="required" name="email" id="email" value="<?php  echo $email ?>">
                            <span class="import-text"> Email</span>
                            <i></i>
                        </div>
                        <div class="import-list">
                            <input class="up-acc"  disabled  type="text" required="required" name="phone" id="phone" value="<?php echo $tell ?>">
                            <span class="import-text"> Điện thoại</span>
                            <i></i>
                        </div>
                        <div class="import-list">
                            <input class="up-acc"  disabled  type="text" required="required" name="address" id="address" value="<?php echo $address ?>">
                            <span class="import-text"> Địa chỉ</span>
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