<?php
require_once 'pdo.php';

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

function get_detail_food($ID){
    $sql = "SELECT * FROM food WHERE ID=?";
    return pdo_query_one($sql, $ID);
}

function showfood($a) {
    $html_show = '';
    foreach ($a as $value) {
        extract($value);
        $link = "index.php?pg=detail_food&&FoodID=".$ID;
        $modal_id = 'foodModal_' . $ID;

        $html_show .= '<div class="col-lg-6">
                        <div class="d-flex align-items-center">
                        <a href="'.$link.'">
                            <img class="flex-shrink-0 img-fluid rounded" src="uploads/'.$FoodImage.'" alt="" style="width: 80px;">
                        </a>
                            <div class="w-100 d-flex flex-column text-start ps-4 justify-content-between">
                                <h5 class="d-flex justify-content-between">
                                    <a href="'.$link.'">
                                        <span class="mt-2" style="color: black;">'.$FoodName.'</span>
                                    </a>
                                </h5>
                                <h5 class="d-flex justify-content-between">
                                    <span class="text-primary"> '.number_format($FoodPrice, 0, '.', '.').' VNĐ</span>
                                </h5>
                            </div>
                            <a href="#" class="btn btn-primary py-2" style="width:100px" data-bs-toggle="modal" data-bs-target="#'.$modal_id.'">
                                <i class="fas fa-cart-plus fa-lg"></i>
                            </a>
                        </div>
                    </div>
                    <div class="modal fade" id="'.$modal_id.'" tabindex="-1" aria-labelledby="foodModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #">
                                    <h3 class="modal-title text-primary section-title text-start" id="foodModalLabel">Đặt Món</h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="uploads/'.$FoodImage.'" alt="Món ăn" class="img-fluid">
                                            </div>
                                            <div class="col-md-6">
                                                <h3>'.$FoodName.'</h3>
                                                <p style="text-align: justify; max-height: 6em; overflow-y: auto;">'.$FoodDescribe.'</p>
                                                <h4 class="text-start text-primary">Giá: '.number_format($FoodPrice,0,'.','.').'VNĐ</h4>
                                                <form action="index.php?pg=addcart" method="post" class="add-to-cart-form">       
                                                    <input type="hidden" name="id" value="'.$ID.'">
                                                    <input type="hidden" name="name" value="'.$FoodName.'">
                                                    <input type="hidden" name="img" value="'.$FoodImage.'">
                                                    <input type="hidden" name="price" value="'.$FoodPrice.'">
                                                    <div class="mb-3 text-start">
                                                        <label for="soluong">Số Lượng: </label>
                                                        <input type="number" name="soluong"  class="form-control" min="1" value="1" max="10">
                                                    </div>
                                                    <button class="btn btn-primary py-2 w-100 mt-3" type="submit" name="addcart">Thêm Vào Giỏ Hàng</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
    }
    return $html_show;
}

// function tongbill() {
//     $tong=0; 
//     $show_cart = '';
//     $i=1;
//     foreach ($_SESSION['giohang'] as $food) {
//         $tong += $ttien;
//         extract($food);
//     }
//     return $tong;
// }

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
