<link rel="stylesheet" href="./css/components/list.css">
<div class="dash-content">
            <div class="title">
                <div style="display: flex;align-items: center;">

                    <i class="fa-solid fa-rectangle-list"></i>
                    <h1 class="text">Danh sách bài viết</h1>
                </div>
                <a href="index.php?act=add_blog" style="display: flex;align-items: center;">
                        <i class="fa-sharp fa-solid fa-folder-plus"></i>
                        <h1 class="text">Thêm bài viết</h1>
                </a>
            </div>
            <table>
                <thead>
                    <tr>
                     
                     
                        <th>ID BÀI VIẾT</th>
                        <th>TIÊU ĐỀ BÀI VIẾT</th>
                        <th>ẢNH </th>
                        <th>NỘI DUNG</th>
                        <th>LƯỢT XEM</th>
                        <th>NGÀY</th>
                        <th>THAO TÁC</th>
                      
                    </tr>
                </thead>
                <tbody>
                <?php
                      
foreach($listblog as $blog){
    extract($blog);
    $edit_blog = "index.php?act=edit_blog&id=" . $id;
    $delete_blog = "index.php?act=delete_blog&id=" . $id;
    $img_path = "../upload/" . $img;
    if (is_file($img_path)) {
        $img = "<img src='" . $img_path . "' height='80'>";
    } else {
        $img = "NO Photo";
    }
    echo '                <tr>
    
  
    <td>'.$id.'</td>
    <td>'.$name.'</td>
    <td>'.$img.'</td>
    <td><span class="description">'.$description.'</span></td>
    <td>'.$view.'</td>
    <td>'.$date.'</td>
    

    <td>
        <div class="import-btn">
            <!-- chinh danh danh muc  -->
            <a href="'.$edit_blog.'">
                <i class="fa-solid fa-pen-to-square btn-list"></i></a>
            <a href="'.$delete_blog.'"><i class="fa-sharp fa-solid fa-trash  btn-list"></i></a>

        </div>
    </td>
</tr>';

}
?>
               
                </tbody>
            </table>
        </div>