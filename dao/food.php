<?php
require_once 'pdo.php';


// function hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "UPDATE hang_hoa SET ten_hh=?,don_gia=?,giam_gia=?,hinh=?,ma_loai=?,dac_biet=?,so_luot_xem=?,ngay_nhap=?,mo_ta=? WHERE ma_hh=?";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta, $ma_hh);
// }

function delete_food($ID){
    $sql = "DELETE FROM food WHERE  ID=?";
    if(is_array($ID)){
        foreach ($ID as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ID);
    }
}

/* Lấy tất cả món ăn show lên admin */
function getone_food($id){
    $sql = "SELECT * FROM food WHERE ID =?";
    return pdo_query_one($sql,$id);
}
function getall_food(){
    $sql = "SELECT * FROM food ORDER BY ID DESC";
    return pdo_query($sql);
}


/* Get food khai vị */
function get_food_type_1($limit){
    $sql = "SELECT * FROM food WHERE ID_TypeFood = 1 ORDER BY ID DESC LIMIT ".$limit;
    return pdo_query($sql);
}
function get_food_type_2($limit){
    $sql = "SELECT * FROM food WHERE ID_TypeFood = 2 ORDER BY ID DESC LIMIT ".$limit;
    return pdo_query($sql);
}
function get_food_type_3($limit){
    $sql = "SELECT * FROM food WHERE ID_TypeFood = 3 ORDER BY ID DESC LIMIT ".$limit;
    return pdo_query($sql);
}
function showfood($a) {
    $html_show = '';
    foreach ($a as $value) {
        extract($value);
        $html_show.='<div class="col-lg-6">
                        <div class="d-flex align-items-center">
                            <img class="flex-shrink-0 img-fluid rounded" src="uploads/'.$FoodImage.'" alt="" style="width: 80px;">
                            <div class="w-100 d-flex flex-column text-start ps-4 justify-content-between">
                                <h5 class="d-flex justify-content-between">
                                    <span class="mt-2">'.$FoodName.'</span>
                                </h5>
                                <h5 class="d-flex justify-content-between">
                                    <span class="text-primary">'.$FoodPrice.' VNĐ</span>
                                </h5>
                            </div>
                            <form action="index.php?pg=addcart" method="post" class="add-to-cart-form">
                                    <input type="hidden" name="name" value="'.$FoodName.'">
                                    <input type="hidden" name="img" value="'.$FoodImage.'">
                                    <input type="hidden" name="price" value="'.$FoodPrice.'">
                                    <input type="hidden" name="sl" value="">
                                    <button class="btn btn-primary py-2" type="submit" name="addcart" style="width: 100px;"><i class="fas fa-cart-plus fa-lg"></i></button>
                            </form>
                        </div>
                    </div>';
    }
    return $html_show;
}

//Update sử lý file hình
function update_food($ID, $ID_TypeFood, $FoodName, $FoodPrice, $FoodDescribe, $FileImage)
{
    if ($FileImage != "") {
        $sql = "UPDATE food SET ID_TypeFood='$ID_TypeFood', FoodName='$FoodName', FoodPrice='$FoodPrice', FoodDescribe='$FoodDescribe', FoodImage='$FileImage' WHERE ID=" . $ID;
    } else {
        $sql = "UPDATE food SET ID_TypeFood='$ID_TypeFood', FoodName='$FoodName', FoodPrice='$FoodPrice', FoodDescribe='$FoodDescribe' WHERE ID=" . $ID;
    }
    return pdo_execute($sql);
}

function insert_food($ID_TypeFood, $FoodName, $FoodPrice, $FileImage, $FoodDescribe)
{
    $sql = "INSERT INTO food(ID_TypeFood, FoodName, FoodPrice, FoodImage, FoodDescribe) VALUES(?, ?, ?, ?, ?)";
    pdo_execute($sql, $ID_TypeFood, $FoodName, $FoodPrice, $FileImage, $FoodDescribe);
}


// function hang_hoa_select_by_id($ma_hh){
//     $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_one($sql, $ma_hh);
// }

// function hang_hoa_exist($ma_hh){
//     $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_value($sql, $ma_hh) > 0;
// }

// function hang_hoa_tang_so_luot_xem($ma_hh){
//     $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
//     pdo_execute($sql, $ma_hh);
// }

// function hang_hoa_select_top10(){
//     $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
//     return pdo_query($sql);
// }

// function hang_hoa_select_dac_biet(){
//     $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
//     return pdo_query($sql);
// }

// function hang_hoa_select_by_loai($ma_loai){
//     $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
//     return pdo_query($sql, $ma_loai);
// }

// function hang_hoa_select_keyword($keyword){
//     $sql = "SELECT * FROM hang_hoa hh "
//             . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
//             . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
//     return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
// }

// function hang_hoa_select_page(){
//     if(!isset($_SESSION['page_no'])){
//         $_SESSION['page_no'] = 0;
//     }
//     if(!isset($_SESSION['page_count'])){
//         $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
//         $_SESSION['page_count'] = ceil($row_count/10.0);
//     }
//     if(exist_param("page_no")){
//         $_SESSION['page_no'] = $_REQUEST['page_no'];
//     }
//     if($_SESSION['page_no'] < 0){
//         $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
//     }
//     if($_SESSION['page_no'] >= $_SESSION['page_count']){
//         $_SESSION['page_no'] = 0;
//     }
//     $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT ".$_SESSION['page_no'].", 10";
//     return pdo_query($sql);
// }