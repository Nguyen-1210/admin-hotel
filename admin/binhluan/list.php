<link rel="stylesheet" href="./css/components/list.css">

<div class="dash-content">
  <div class="title">
    <div style="display: flex;align-items: center;">

      <i class="fa-solid fa-rectangle-list"></i>
      <h1 class="text">DANH SÁCH BÌNH LUẬN</h1>
    </div>
  </div>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>NỘI DUNG</th>
        <th>MÃ KHÁCH HÀNG</th>
        <th>MÃ SẢN PHẨM</th>
        <th>NGÀY BÌNH LUẬN</th>
        <th>Chức năng</th>
      </tr>
    </thead>
    <tbody>
    <?php
foreach($listcomments as $comments){
    extract($comments);
    $delete_comments = "index.php?act=delete_comments&id=" . $id;
   echo '<tr>
   <td>
    '.$id.'
   </td> 
   <td>
   '.$comment.'
   </td> 
   <td>
    '.$user_id.'
   </td> 
   <td>
   <span class="discription">
   '.$product_id.'
   </span>
   </td> 
   <td>
    '.$day.'
   </td> 
   <td> 
   
   <div class="import-btn">
   <!-- chinh danh danh muc  -->
   <a href="'.$delete_comments.'"><i class="fa-sharp fa-solid fa-trash  btn-list"></i></a>

 </div>
 
 </td>
   </tr>'
   ;

}
?>
     
    </tbody>
  </table>



</div>