</div>

    <script src="layout/orders.js"></script>
    <script src="layout/index.js"></script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script>
        $(function(){
            $("#example").dataTable();
        })
    </script>
    <script
        type="text/javascript"
        charset="utf8"
        src="https://code.jquery.com/jquery-3.3.1.js"
        ></script>
        <script
        type="text/javascript"
        charset="utf8"
        src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"
        ></script>
        <script>
        $(document).ready(function() {
        $("#table_id").DataTable();
        });
    </script>
    <script src="layout/js/form_typefood.js"></script>

    <!--Check Validation  -->
    <script>

        /* Type Food */

        var Name_Type_Food = document.getElementById("Name_Type_Food");
        
            var checkNameTypeFood = function () {
                if (Name_Type_Food.value == "") {
                    document.getElementById("err_name_type_food").innerHTML = "Tên loại món ăn không được để trống";
                    Name_Type_Food.focus();
                    return false;
                }else if(Name_Type_Food.value.length < 5){
                    document.getElementById("err_name_type_food").innerHTML = "Tên loại món ăn phải có ít nhất 5 ký tự";
                    Name_Type_Food.focus();
                    return false;
                }else{
                    document.getElementById("err_name_type_food").innerHTML = "";
                }
                return true;
            }

        /* End Type Food */

        /* Food */

        var FoodName = document.getElementById("FoodName");
        var FoodPrice = document.getElementById("FoodPrice");

        let isFoodPrice =  /^([1-9])\d+$/;

        var checkFood = function () {

            /* Food Name */

                if (FoodName.value == "") {
                    document.getElementById("err_food_name").innerHTML = "Tên món ăn không được để trống";
                    FoodName.focus();
                    return false;
                }else if(FoodName.value.length < 5){
                    document.getElementById("err_food_name").innerHTML = "Tên món ăn phải có ít nhất 5 ký tự";
                    FoodName.focus();
                    return false;
                }else{
                    document.getElementById("err_food_name").innerHTML = "";
                }

            /* Food Price */

                if (FoodPrice.value == "") {
                    document.getElementById("err_food_price").innerHTML = "Giá món ăn không được để trống";
                    FoodPrice.focus();
                    return false;
                }else if(FoodPrice.value.length < 5){
                    document.getElementById("err_food_price").innerHTML = "Giá món ăn không được dưới 10.000VND";
                    FoodPrice.focus();
                    return false;
                }else if(!isFoodPrice.test(FoodPrice.value)){
                    document.getElementById("err_food_price").innerHTML = "Giá món ăn không hợp lí";
                    FoodPrice.focus();
                    return false;
                }else{
                    document.getElementById("err_food_price").innerHTML = "";
                }

                return true;
            }

        /* End Food */

        /* User */

        var FullName = document.getElementById("FullName");
        var Username = document.getElementById("Username");
        var Password = document.getElementById("Password");
        var Phonenumber = document.getElementById("PhoneNumber");
        var Address = document.getElementById("Address");
        var Email = document.getElementById("Email");

        let isEmail = /^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})*$/;

        let isPhonenumber = /(84|0[3|5|7|8|9])+([0-9]{8})\b/;

        var checkUser = function () {
            
            /* Full Name */

                if (FullName.value == "") {
                    document.getElementById("err_fullname").innerHTML = "Họ tên không được để trống";
                    FullName.focus();
                    return false;
                }else if(FullName.value.length < 8){
                    document.getElementById("err_fullname").innerHTML = "Họ tên phải có ít nhất 8 ký tự";
                    FullName.focus();
                    return false;
                }else{
                    document.getElementById("err_fullname").innerHTML = "";
                }

            /* Username */

                if (Username.value == "") {
                    document.getElementById("err_username").innerHTML = "Tên tài khoản không được để trống";
                    Username.focus();
                    return false;
                }else if(Username.value.length < 8){
                    document.getElementById("err_username").innerHTML = "Tên tài khoản phải có ít nhất 8 ký tự";
                    Username.focus();
                    return false;
                }else{
                    document.getElementById("err_username").innerHTML = "";
                }

            /* Password */

                if (Password.value == "") {
                    document.getElementById("err_password").innerHTML = "Mật khẩu không được để trống";
                    Password.focus();
                    return false;
                }else if(Password.value.length < 8){
                    document.getElementById("err_password").innerHTML = "Mật khẩu phải có ít nhất 8 ký tự";
                    Password.focus();
                    return false;
                }else{
                    document.getElementById("err_password").innerHTML = "";
                }

            /* Phonenumber */

                if (Phonenumber.value == "") {
                    document.getElementById("err_phonenumber").innerHTML = "Số điện thoại không được để trống";
                    Phonenumber.focus();
                    return false;
                }else if(Phonenumber.value.length < 10 || Phonenumber.value.length > 11){
                    document.getElementById("err_phonenumber").innerHTML = "Số điện thoại phải có đúng 10 số";
                    Phonenumber.focus();
                    return false;
                }else if(!isPhonenumber.test(Phonenumber.value)){
                    document.getElementById("err_phonenumber").innerHTML = "Số điện thoại phải đúng định dạng";
                    Phonenumber.focus();
                    return false;
                }else{
                    document.getElementById("err_phonenumber").innerHTML = "";
                }

            /* Address */

                if (Address.value == "") {
                    document.getElementById("err_address").innerHTML = "Địa chỉ không được để trống";
                    Address.focus();
                    return false;
                }else if(Address.value.length < 8){
                    document.getElementById("err_address").innerHTML = "Địa chỉ phải có ít nhất 8 ký tự";
                    Address.focus();
                    return false;
                }else{
                    document.getElementById("err_address").innerHTML = "";
                }

            /* Email */
                
                if (Email.value == "") {
                    document.getElementById("err_email").innerHTML = "Email không được để trống";
                    Email.focus();
                    return false;
                }else if(Email.value < 10){
                    document.getElementById("err_email").innerHTML = "Email phải có ít nhất 8 ký tự";
                    Email.focus();
                    return false;
                }else if(!isEmail.test(Email.value)){
                    document.getElementById("err_email").innerHTML = "Email không đúng định dạng";
                    Email.focus();
                    return false;
                }else{
                    document.getElementById("err_email").innerHTML = "";
                }

                return true;
            
            }

        /* End User */

    </script>
        
</body>

</html>