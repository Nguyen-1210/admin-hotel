<?php
require_once 'pdo.php';

function insert_comment($id_user, $id_product, $comment, $day)
{
    $sql = "INSERT INTO comments(id_user, id_product, comment, day) VALUES ('$id_user','$id_product','$comment','$day')";
    pdo_execute($sql);
}
function loadall_comments($product_id)
{
    $sql = "select * from comments where 1";
    if ($product_id > 0) {
        $sql .= "AND product_id='" . $product_id . "'";
    } else {
        $sql .= " order by id desc";
    }
    $listcomments = pdo_query($sql);
    return $listcomments;
}

function loadone_comments($id){
    $sql = "select * from comments where id=".$id;
    $comments = pdo_query_one($sql);
    return $comments;
}

// function binh_luan_update($ma_bl, $ma_kh, $ma_hh, $noi_dung, $ngay_bl){
//     $sql = "UPDATE binh_luan SET ma_kh=?,ma_hh=?,noi_dung=?,ngay_bl=? WHERE ma_bl=?";
//     pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl, $ma_bl);
// }


function delete_comments($id)
{
    $sql = "DELETE FROM comments WHERE id=?";
    if (is_array($id)) {
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $id);
    }
}

function update_comments($id, $id_user, $id_product, $comment, $day){
    $sql = "update comments set id_user='".$id_user."', id_product='".$id_product."', comment='".$comment."', day='".$day."' where id=".$id;
    pdo_execute($sql);
}

// function binh_luan_select_all(){
//     $sql = "SELECT * FROM binh_luan bl ORDER BY ngay_bl DESC";
//     return pdo_query($sql);
// }

// function binh_luan_select_by_id($ma_bl){
//     $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
//     return pdo_query_one($sql, $ma_bl);
// }

// function binh_luan_exist($ma_bl){
//     $sql = "SELECT count(*) FROM binh_luan WHERE ma_bl=?";
//     return pdo_query_value($sql, $ma_bl) > 0;
// }
// //-------------------------------//
// function binh_luan_select_by_hang_hoa($ma_hh){
//     $sql = "SELECT b.*, h.ten_hh FROM binh_luan b JOIN hang_hoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=? ORDER BY ngay_bl DESC";
//     return pdo_query($sql, $ma_hh);
// }