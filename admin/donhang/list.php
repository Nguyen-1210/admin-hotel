<link rel="stylesheet" href="./css/components/list.css">

<div class="dash-content">
  <div class="title">
    <div style="display: flex;align-items: center;">

      <i class="fa-solid fa-rectangle-list"></i>
      <h1 class="text">DANH SÁCH ĐƠN HÀNG</h1>
    </div>
  </div>
  <table>
    <thead>
      <tr>
        <th>MÃ ĐƠN HÀNG</th>
        <th>KHÁCH HÀNG</th>
        <th>SỐ LƯỢNG HÀNG</th>
        <th>GIÁ TRỊ ĐƠN HÀNG</th>
        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
        <th>NGÀY ĐẶT HÀNG</th>
        <th>Chức năng</th>
      </tr>
    </thead>
    <tbody>
    <?php
foreach($listbills as $bills){
    extract($bills);

    $edit_bills = "index.php?act=edit_bills&id=" . $id;
    $delete_bills = "index.php?act=delete_bills&id=" . $id;

    $kh = $bills["name"] .'
    <br> '.$bills["email"].'
    <br> '.$bills["address"].'
    <br> '.$bills["tell"];

    $ttdh =  get_ttdh($bills['status']);


   echo '<tr>
   <td>
    '.$bills['id'].'
   </td> 
   <td>
   '.$kh.'
   </td> 
   <td>
    '.$bills['number'].'
   </td> 
   <td>
   <span class="discription">
   '.$bills['total'].'
   </span>
   </td> 
   <td>
    '.$ttdh.'
   </td> 
   <td>
   '.$day.'
  </td> 
   <td> 
   
   <div class="import-btn">
   <!-- chinh danh danh muc  -->
   <a href="'.$edit_bills.'">
     <i class="fa-solid fa-pen-to-square btn-list"></i></a>
   <a href="'.$delete_bills.'"><i class="fa-sharp fa-solid fa-trash  btn-list"></i></a>

 </div>
 
 </td>
   </tr>'
   ;

}
?>
     
    </tbody>
  </table>



</div>