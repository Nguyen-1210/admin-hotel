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
                    <form action="#" method="POST">
                        <!-- input nhập sản phẩm -->
                        <div class="import-list">
                            <input type="text" required="required" id="maloai" name="maloai">
                            <span class="import-text"> Mã danh mục</span>
                            <i></i>
                        </div>
                        <div class="import-list">
                            <input type="text" required="required" name="tenloai" id="tenloai">
                            <span class="import-text"> Tên danh mục</span>
                            <i></i>
                        </div>

                        <!-- button thêm danh mục, danh sách -->
                        <div class="import-btn">
                            <input type="submit" name="themmoi" class="btn-list" value="Cập nhật">
                        </div>
                    </form>
                </div>
            </div>
        </div>