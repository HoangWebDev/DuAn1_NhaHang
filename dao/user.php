<?php
require_once 'pdo.php';

function khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){
    $sql = "INSERT INTO khach_hang(ma_kh, mat_khau, ho_ten, email, hinh, kich_hoat, vai_tro) VALUES (?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat==1, $vai_tro==1);
}

function khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){
    $sql = "UPDATE khach_hang SET mat_khau=?,ho_ten=?,email=?,hinh=?,kich_hoat=?,vai_tro=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat==1, $vai_tro==1, $ma_kh);
}

function khach_hang_delete($ma_kh){
    $sql = "DELETE FROM khach_hang  WHERE ma_kh=?";
    if(is_array($ma_kh)){
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_kh);
    }
}

function khach_hang_select_all(){
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql);
}

function checkusername($username, $password)
{
    $sql = "SELECT * FROM user WHERE Username='" . $username . "' AND Password='" . $password . "'";
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        if(count($rows) > 0)
            return $rows[0]['Role'];
        else
            return 0;
        
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

function khach_hang_select_by_id($id){
    $sql = "SELECT * FROM user WHERE ID_User=?";
    return pdo_query_one($sql, $id);
}

function khach_hang_exist($ma_kh){
    $sql = "SELECT count(*) FROM khach_hang WHERE $ma_kh=?";
    return pdo_query_value($sql, $ma_kh) > 0;
}

function khach_hang_select_by_role($role){
    $sql = "SELECT * FROM user WHERE Role=?";
    return pdo_query($sql, $role);
}

function khach_hang_change_password($ma_kh, $mat_khau_moi){
    $sql = "UPDATE khach_hang SET mat_khau=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau_moi, $ma_kh);
}