<?php
require_once 'pdo.php';

// /**
//  * Cập nhật tên loại
//  * @param int $ma_loai là mã loại cần cập nhật
//  * @param String $ten_loai là tên loại mới
//  * @throws PDOException lỗi cập nhật
//  */
// function update_typefood($ID, $Name_TypeFood){
//     $sql = "UPDATE type_food SET Name_TypeFood='".$Name_TypeFood."' WHERE ID=".$ID;
//     pdo_execute($sql);
// }
// /**
//  * Xóa một hoặc nhiều loại
//  * @param mix $ma_loai là mã loại hoặc mảng mã loại
//  * @throws PDOException lỗi xóa
//  */
function delete_qlbill($ID){
    $sql = "DELETE FROM booking WHERE ID=?";
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


// /**
function getall_qlbill(){
    $sql = "SELECT * FROM booking ORDER BY ID ASC";
    return pdo_query($sql);
}

// function getone_type_food($ID){
//     $sql = "SELECT * FROM type_food WHERE ID =".$ID;
//     return pdo_query_one($sql);
// }


// Chi tiet hoa don

function getall_detailbooking($ID_Booking){
    $sql = "SELECT detailbooking.ID as stt, detailbooking.ID_Booking as booking, detailbooking.ID_Food as food, detailbooking.NumberDishes as countNumber, detailbooking.PriceDishes as price, sum(detailbooking.PriceDishes*detailbooking.NumberDishes) as total";
    $sql .= " FROM detailbooking LEFT JOIN food ON detailbooking.ID_Food = food.ID";
    // $sql .= " LEFT JOIN booking ON detailbooking.ID_Booking = booking.ID";
    $sql .= " Where detailbooking.ID_Booking =".$ID_Booking." GROUP BY detailbooking.ID";
    return pdo_query($sql);
}

// function getall_qlbill(){
//     $sql = "SELECT * FROM booking ORDER BY ID ASC";
//     return pdo_query($sql);
// }
function booking_add($ID_User, $TableNumber, $Guests, $Note){
    pdo_execute("INSERT INTO booking(`ID_User`,`TableNumber`,`Guests`,`Note`,) VALUES(?,?,?,?)", $ID_User,$TableNumber,$Guests,$Note);   
}


function booking_getAll(){
    return pdo_query("SELECT * FROM booking");
}


?>