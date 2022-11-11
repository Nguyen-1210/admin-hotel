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
                                $suadm = "index.php?act=suadm&id=".$id;
                                $xoadm = "index.php?act=xoadm&id=".$id;
                                echo '                            
                                <tr>
                                <td><strong><input type="checkbox" name="" id=""></strong></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td> <a href="'.$suadm.'"> <i class="fa-solid fa-pen-to-square btn-list"></i></a>
                                 <a href="'.$xoadm.'"><i class="fa-sharp fa-solid fa-trash  btn-list"></i></a>
                                 </td>
                                </tr>';
                            }
                            
                            ?>
                            
                 <tr>
                     <td><strong>click button check</strong></td>
                     <td>15</td>
                     <td>Uoan ao</td>

                     <td>
                         <div class="import-btn">
                          
                             <a href="index.php?act=edit_types">
                                 <i class="fa-solid fa-pen-to-square btn-list"></i></a>
                             <a href="index.php?act=delete_types"><i class="fa-sharp fa-solid fa-trash  btn-list"></i></a>

                         </div>
                     </td>
                 </tr>
                 <tr>
                     <td><strong>click button check</strong></td>
                     <td>15</td>
                     <td>Uoan ao</td>

                     <td>
                         <div class="import-btn">
                            
                             <a href="index.php?act=edit_types">
                                 <i class="fa-solid fa-pen-to-square btn-list"></i></a>
                             <a href="index.php?act=delete_types"><i class="fa-sharp fa-solid fa-trash  btn-list"></i></a>

                         </div>
                     </td>
                 </tr>
                </tbody>
            </table>
        </div>