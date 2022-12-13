<style>
    body {
        /* overflow: hidden; */
    }
</style>
<?php
if(is_array($dm)){
    extract($dm);
$img_path = "../upload/" . $img;
if (is_file($img_path)) {
    $img = "<img src='" . $img_path . "' height='150' width='200'>";
} else {
    $img = "NO Photo";
}
}
?>
<link rel="stylesheet" href="./css/components/add.css">

<div class="dash-content">
            <div class="title"> 
                <div style="display: flex;align-items: center;">

                    <i class="fa-solid fa-file-pen"></i>
                    <h1 class="text">Sửa danh mục</h1>
                </div>
                <a href="index.php?act=list_types" style="display: flex;align-items: center;">

                        <i class="fa-sharp fa-solid fa-folder-plus"></i>
                        <h1 class="text">Danh sách</h1>
                  
                </a>
            </div>
            <div class="import-box">
                <div class="form-import">
                    <form action="./index.php?act=update_types" method="POST" enctype="multipart/form-data">
                        <!-- input nhập sản phẩm -->
                        
                        <div class="import-list">
                            <input type="text" required="required" id="maloai" name="maloai"  disabled >
                            <span class="import-text"> Mã danh mục</span>
                            <i></i>
                        </div>
                        <div class="import-list">
                            <input type="text" required="required" name="tenloai" id="tenloai" value="<?php if(isset($name) && ($name != "")) echo $name ?>">
                            <span class="import-text"> Tên danh mục</span>
                            <i></i>
                        </div>
                        <div class="import-list">
                    <label for="files" class="import-text btn-list">Lấy ảnh</label>
                    <input id="files" name="img" style="visibility:hidden; width: 5%;" type="file">
                  <?= $img ?>
                
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