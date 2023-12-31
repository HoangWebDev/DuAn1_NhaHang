<?php
require_once 'pdo.php';

// /**
//  * Thêm loại mới
//  * @param String $ten_loai là tên loại
//  * @throws PDOException lỗi thêm mới
//  */
function insert_typefood($Name_TypeFood){
    $sql = "INSERT INTO type_food (Name_TypeFood) VALUES(?)";
    pdo_execute($sql, $Name_TypeFood);
}
// /**
//  * Cập nhật tên loại
//  * @param int $ma_loai là mã loại cần cập nhật
//  * @param String $ten_loai là tên loại mới
//  * @throws PDOException lỗi cập nhật
//  */
function update_typefood($ID, $Name_TypeFood){
    $sql = "UPDATE type_food SET Name_TypeFood='".$Name_TypeFood."' WHERE ID=".$ID;
    pdo_execute($sql);
}
// /**
//  * Xóa một hoặc nhiều loại
//  * @param mix $ma_loai là mã loại hoặc mảng mã loại
//  * @throws PDOException lỗi xóa
//  */
function delete_typefood($ID){
    $sql = "DELETE FROM type_food WHERE ID=?";
    if(is_array($ID)){
        foreach ($ID as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ID);
    }
}
// /**
//  * Truy vấn tất cả các loại
//  * @return array mảng loại truy vấn được
//  * @throws PDOException lỗi truy vấn
//  */
function getall_type_food(){
    $sql = "SELECT * FROM type_food ORDER BY ID ASC";
    return pdo_query($sql);
}

function getone_type_food($ID){
    $sql = "SELECT * FROM type_food WHERE ID =".$ID;
    return pdo_query_one($sql);
}
