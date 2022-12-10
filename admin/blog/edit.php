<link rel="stylesheet" href="./css/components/add.css">
<?php
if (is_array($blog)) {
    extract($blog);
}
$img_path = "../upload/" . $img;
if (is_file($img_path)) {
    $img = "<img src='" . $img_path . "' height='80'>";
} else {
    $img = "NO Photo";
}
?>

<div class="dash-content">
    <div class="title">
        <div style="display: flex;align-items: center;">
            <i class="fa-sharp fa-solid fa-folder-plus"></i>
            <h1 class="text">Sửa hàng hóa</h1>
        </div>
        <a href="index.php?act=list_products" style="display: flex;align-items: center;">

            <i class="fa-solid fa-rectangle-list"></i>
            <h1 class="text">Danh sách</h1>
        </a>
    </div>

    <div class="import-box">
        <div class="form-import">
            <form action="./index.php?act=update_blog" method="POST" enctype="multipart/form-data">
                <!-- input nhập sản phẩm -->

                <div class="import-list">
                    <input type="text" required="required" name="name_blog" id="tenhh" value="<?= $name ?>">
                    <span class="import-text"> Tên bài viết</span>
                    <i></i>
                </div>
                
                <div class="import-list">
                    <label for="files" class="import-text btn-list">Lấy ảnh</label>
                    <input id="files" name="img" style="visibility:hidden;" type="file">
                    <?= $img ?>
                    <!-- <input type="file" name="hinh" required name="anhhh" id="anhhh" width="30%" data-input="false" data-classIcon="icon-plus" data-buttonText="Your label here.">
                    <span class="import-text"> Ảnh</span> -->
                    <!-- <i></i> -->
                </div>
                <div class="import-list">

                    <fieldset>
                        <legend style="
                margin-left: 10px;
                                ">Mô tả</legend>
                        <textarea cols="132" rows="5" required="required" name="des_blog" id="motahh"><?= $description ?></textarea>
                    </fieldset>
                    <!-- <i></i> -->
                </div>
                <!-- button thêm danh mục, danh sách -->
                <div class="import-btn">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="submit" name="capnhat" class="btn-list" value="Cập nhật">
                    <!-- <a href="danhsach.html"><input type="button" class="btn-list" value="Danh sách"></a> -->
                </div>
            </form>
        </div>
    </div>
</div>