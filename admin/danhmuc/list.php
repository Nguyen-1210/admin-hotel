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

foreach ($listdanhmuc as $danhmuc) {
    extract($danhmuc);
    $suadm = "index.php?act=edit_types&id=" . $id;
    $xoadm = "index.php?act=delete_types&id=" . $id;
    $show = '

                                <tr>
                                <td><strong><input type="checkbox" name="" id=""></strong></td>
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td> <a href="' . $suadm . '"> <i class="fa-solid fa-pen-to-square btn-list"></i></a>
                                 ';
    if (can_delete($id)) {
        $show .= '<a href="' . $xoadm . '"><i class="fa-sharp fa-solid fa-trash  btn-list"></i></a> ';
    }
    $show .= '  </td> </tr>';
    echo $show;
}

?>

        </tbody>
    </table>
</div>