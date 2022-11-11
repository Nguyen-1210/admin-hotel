<link rel="stylesheet" href="./css/components/add.css">

<div class="dash-content">
    <div class="title">
        <div style="display: flex;align-items: center;">
            <i class="fa-sharp fa-solid fa-folder-plus"></i>
            <h1 class="text">Thêm danh mục</h1>
        </div>
        <a href="index.php?act=list_products" style="display: flex;align-items: center;">

            <i class="fa-solid fa-rectangle-list"></i>
            <h1 class="text">Danh sách</h1>
        </a>
    </div>

    <div class="import-box">
        <div class="form-import">
            <form action="#" method="POST" enctype="multipart/form-data">
                <!-- input nhập sản phẩm -->
                <div class="import-list">
                    <span class="import-text"> Mã danh mục</span>
                    <select name="id_type">
                            <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                            ?>

                        </select>
                </div>

                <div class="import-list">
                    <input type="text" required="required" name="name_product" id="tenhh">
                    <span class="import-text"> Tên hàng hóa</span>
                    <i></i>
                </div>
                <div class="import-list">
                    <input type="text" required="required" name="price_product" id="giahh">
                    <span class="import-text"> Giá</span>
                    <i></i>
                </div>
                <div class="import-list">
                    <label for="files" class="import-text btn-list">Lấy ảnh</label>
                    <input id="files" name="img" type="file">
                </div>
                <div class="import-list">

                    <fieldset>
                        <legend style="
                margin-left: 10px;
                                ">Mô tả</legend>
                        <textarea cols="132" rows="5" required="required" name="des_product" id="motahh"></textarea>
                    </fieldset>
                    <!-- <i></i> -->
                </div>
                <div class="import-list">
                    <input type="text" required="required" name="dis_product" id="giamgiahh">
                    <span class="import-text"> Giảm giá</span>
                    <i></i>
                </div>

                <!-- button thêm danh mục, danh sách -->
                <div class="import-btn">
                    <input type="submit" name="themmoi" class="btn-list" value="Thêm mới">
                    <!-- <a href="danhsach.html"><input type="button" class="btn-list" value="Danh sách"></a> -->
                </div>
            </form>
        </div>
    </div>
</div>