var Name_Type_Food = document.querySelector("Name_Type_Food");

var checkNameTypeFood = function () {
    if (Name_Type_Food.value == "") {
        document.getElementById("err_name_type_food").innerHTML = "Tên loại món ăn không được để trống";
        Name_Type_Food.focus();
        return false;
    }else if(Name_Type_Food.value.length < 5){
        document.getElementById("err_name_type_food").innerHTML = "Tên loại món ăn phải có ít nhất 5 ký tự";
        Name_Type_Food.focus();
        return false;
    }
    return true;
}