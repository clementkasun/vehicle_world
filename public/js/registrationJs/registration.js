function save_cus_details(object, callBack) {
    url = "./api/save_customer";

    ulploadFileWithData(url, object, function (result) {
        // ajaxRequest("POST", url, data, function (result) {
        if (result.status == 1) {
            $("#save_customer").prop('disabled', false);
            $('#cust_reg_frm').trigger("reset");
            Swal.fire(
                'Customer registration',
                'Successfully Saved!',
                'success'
            );
        } else if (result.status == 2) {
            $("#save_customer").prop('disabled', false);
            $('#password_origin').addClass('has-error');
            $('#password_confirm').addClass('has-error');
            Swal.fire("Password confirmation", "Password already exist!", "error");
        } else {
            $("#save_customer").prop('disabled', false);
            Swal.fire({
                icon: 'error',
                title: 'Warning!',
                text: 'Unexpected error has occured!',
            })
        }
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack(result);
        }
    });
}


function generateRandomUserName(string){
    let rand_num = Math.floor((Math.random() * 1000) + 1);
    return string+rand_num;
}