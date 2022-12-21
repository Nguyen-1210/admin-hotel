<link rel="stylesheet" href="./css/components/list.css">
<style>
body {
  overflow: hidden;
}
  </style>
<div class="dash-content">
  <div class="title">
    <div style="display: flex;align-items: center;">

      <i class="fa-solid fa-rectangle-list"></i>
      <h1 class="text">Danh sách khách hàng</h1>
    </div>
  </div>
  <table>
    <thead>
      <tr>
        <th>Tên tài khoản</th>
        <th>Mật khẩu</th>
        <th>Tên</th>
        <th>Email</th>
        <th>Điện thoại</th>
        <th>Địa chỉ</th>
        <th>Chức năng</th>
      </tr>
    </thead>
    <tbody>
    <?php
foreach($listtaikhoan as $taikhoan){
    extract($taikhoan);
    $edit_accounts = "index.php?act=edit_accounts&id=" . $id;
    $delete_accounts = "index.php?act=delete_accounts&id=" . $id;
   echo '<tr>
   <td>
    '.$username.'
   </td> 
   <td>
   <input type="password" value="'.$password.'" disabled style="border:none; text-align:center;background: transparent;">
   </td> 
   <td>
    '.$name.'
   </td> 
   <td>
   <span class="discription">
   '.$email.'
   </span>
   </td> 
   <td>
    '.$tell.'
   </td> 
   <td>
    '.$address.'
   </td> 
   <td> 
   
   <div class="import-btn">
   <!-- chinh danh danh muc  -->
   <a href="'.$edit_accounts.'">
     <i class="fa-solid fa-pen-to-square btn-list"></i></a>
   <a href="'.$delete_accounts.'"><i class="fa-sharp fa-solid fa-trash  btn-list"></i></a>

 </div>
 
 </td>
   </tr>'
   ;

}
?>
     
    </tbody>
  </table>



</div>