
function ajaxRequest(Method, url, data, callBack) {
    $.ajax({
        type: Method,
        headers: {
            "Authorization": $('meta[name=csrf-token]').attr("content"),
            'Accept': 'application/json',
        },
        url: url,
        data: data,
        cache: false,
        success: function (result) {
            if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
                callBack(result);
            }
        }, error: function (jqXHR, exception) {
            var msg = '';
            if (jqXHR.status === 0) {
                msg = 'Not connect.\n Verify Network.';
            } else if (jqXHR.status == 401) {
                msg = 'You Dont Have Privilege To Performe This Action!';
            } else if (jqXHR.status == 422) {
                msg = 'Validation Error !';
            } else if (jqXHR.status == 404) {
                msg = 'Requested page not found. [404]';
            } else if (jqXHR.status == 500) {
                msg = 'Internal Server Error [500].';
            } else if (exception === 'parsererror') {
                msg = 'Requested JSON parse failed.';
            } else if (exception === 'timeout') {
                msg = 'Time out error.';
            } else if (exception === 'abort') {
                msg = 'Ajax request aborted.';
            } else {
                msg = 'Uncaught Error.\n' + jqXHR.responseText;
            }
            if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
                callBack(msg);
            }
        }
    });
}

function submitDataWithFile(url, frmDta, callBack, metod = false) {
    let formData = new FormData();
    // populate fields
    $.each(frmDta, function (k, val) {
        formData.append(k, val);
    });
    ulploadFile2(url, formData, function (result) {
        if (typeof callBack !== 'undefined' && callBack !== null && typeof callBack === "function") {
            callBack(result);
        }
    }, metod);
}


function validate_image_size(file_type, img_file) {
    if (img_file != undefined) {
        var file = img_file;
        if (Math.round(file.size / (1024 * 1024)) > 8) { // make it in MB so divide by 1024*1024
            $("#save_post").prop('disabled', false);
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please select ' + file_type + ' size less than 8 MB'
            });
            return false;
        }
    }
}

function generateStars(star_count) {
    let stars = '';

    for (let i = 0; i < 5; i++) {
        if (i < star_count) {
            stars += '<span class="fa fa-star checked"></span>';
        } else {
            stars += '<span class="fa fa-star"></span>';
        }
    }

    return stars;
}

function loadMakesCombo(selected, callBack) {
    let option = '';
    ajaxRequest("GET", "/api/get_makes/", null, function(resp) {
        if (resp.length == 0) {
            option += '<option value="">No Data</option>';
        } else {
            option += '<option value="">Select</option>';
            $.each(resp, function(index, row) {
                if (!isNaN(parseInt(selected)) && selected == row.id) {
                    option += '<option value="' + row.id + '" selected>' + row.make_name +
                        '</option>';
                } else {
                    option += '<option value="' + row.id + '">' + row.make_name + '</option>';
                }
            });
        }
        $('.makes').html(option);
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack();
        }
    });
}

function getPostFormData(){
    var object = {
        user_id: $('#user_id').val(),
        post_type: $('#post_type').val(),
        post_title: $('#post_title').val(),
        vehicle_type: $('#vehicle_type').val(),
        condition: $('#condition').val(),
        make_id: $('#make_id').val(),
        price: $('#price').val(),
        location: $('#location').val(),
        address: $('#address').val(),
        additional_info: $('#additional_info').val(),
        model: $('#model').val(),
        start_type: $('#start_type').val(),
        manufactured_year: $('#manufactured_year').val(),
        on_going_lease: $('input[name="on_going_lease"]:checked').val(),
        transmission: $("#transmission").val(),
        fuel_type: $("#fuel_type").val(),
        engine_capacity: $("#engine_capacity").val(),
        millage: $("#millage").val(),
        isAc: $('input[name="isAc"]:checked').val(),
        isPowerSteer: $('input[name="isPowerSteer"]:checked').val(),
        isPowerMirroring: $('input[name="isPowerMirroring"]:checked').val(),
        isPowerWindow: $('input[name="isPowerWindow"]:checked').val(),
        part_category: $('#part_category').val(),
    };

    object.main_image = ($('#main_image')[0].files[0] != undefined) ? $('#main_image')[0].files[0] : null; // compress to 200 kB or null
    object.image_one = ($('#image_one')[0].files[0] != undefined) ? $('#image_one')[0].files[0] : null;
    object.image_two = ($('#image_two')[0].files[0] != undefined) ? $('#image_two')[0].files[0] : null;
    object.image_three = ($('#image_three')[0].files[0] != undefined) ? $('#image_three')[0].files[0] : null;
    object.image_four = ($('#image_four')[0].files[0] != undefined) ? $('#image_four')[0].files[0] : null;
    object.image_five = ($('#image_five')[0].files[0] != undefined) ? $('#image_five')[0].files[0] : null;
    return object;
}



