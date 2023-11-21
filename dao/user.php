<?php
require_once 'pdo.php';

function insert_user($FullName, $Username, $Password, $PhoneNumber, $Address, $Email, $Role){
    $sql = "INSERT INTO user (FullName,Username,Password,PhoneNumber,Address,Email,Role) VALUES(?,?,?,?,?,?,?)";
    pdo_execute($sql, $FullName, $Username, $Password, $PhoneNumber, $Address, $Email, $Role);
}

function update_user($ID, $FullName, $Username, $Password, $PhoneNumber, $Address, $Email, $Role){
    $sql = "UPDATE user SET FullName=?,Username=?,Password=?,PhoneNumber=?,Address=?,Email=?,Role=? WHERE ID=?";
    pdo_execute($sql, $FullName, $Username, $Password, $PhoneNumber, $Address, $Email, $Role, $ID);
}

function delete_user($ID){
    $sql = "DELETE FROM user  WHERE ID=?";
    if(is_array($ID)){
        foreach ($ID as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ID);
    }
}

function getone_user($ID){
    $sql = "SELECT * FROM user WHERE ID=?";
    return pdo_query_one($sql, $ID);
}
function getall_user(){
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}

function check_admin($username, $password)
{
    $sql = "SELECT * FROM user WHERE Username='" . $username . "' AND Password='" . $password . "'";
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll();
        if (count($rows) > 0) {
            return $rows[0]['Role'];
        }else{
            return 0;
        }
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

function khach_hang_change_password($ma_kh, $mat_khau_moi){
    $sql = "UPDATE khach_hang SET mat_khau=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau_moi, $ma_kh);
}

function user_login($user, $pass){
    return pdo_query_one("SELECT * FROM user Where Username=? AND Password=?", $user, $pass);
}

function user_getAll(){
    return pdo_query("SELECT * FROM user");
}

function user_checkPhoneNumber($Username){
    return pdo_query_one("SELECT * FROM user WHERE Username=?,$Username");
}

function user_add($PhoneNumber, $Username, $Password){
    pdo_execute("INSERT INTO user(`PhoneNumber`,`Username`,`Password`) VALUE(?,?,?)", $PhoneNumber, $Username, $Password);
}