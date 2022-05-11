function save_cus_details(callBack) {
    url = "./api/save_customer";
    let object = {
        firstName: $('#firstName').val(),
        lastName: $('#lastName').val(),
        contactNo: $('#contactNo').val(),
        email: $('#email').val(),
        nic: $('#nic').val(),
        city: $('#location').val(),
        roll: 2,
        password: $('#password_origin').val(),
        file: $('#file_input').prop('files')[0]
    };

    ulploadFileWithData(url, object, function(result) {
        // ajaxRequest("POST", url, data, function (result) {
        $('#degree_registration').trigger("reset");
        if (result.status == 1) {
            Swal.fire(
                'Customer registration',
                'Successfully Saved!',
                'success'
            );
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Warning!',
                text: result.msg,
            })
        }
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack(result);
        }
    });
}

//function deleteGraduate(id, callBack) {
//    if (confirm('Are sure to delete the Graduate!')) {
//        url = "api/delete_graduate/" + id;
//        ajaxRequest("DELETE", url, false, function (result) {
//            console.log(result);
//            if (result.status == 1) {
//                $('#tbl_registered_graduates').ajax.reload();
//                Swal.fire(
//                        'Graduate registration',
//                        'Successfully Deleted!',
//                        'success'
//                        );
//                location.reload();
//            } else {
//                Swal.fire({
//                    icon: 'error',
//                    title: 'Oops...',
//                    text: 'Something went wrong!',
//                })
//            }
//
//            if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
//                callBack(result);
//            }
//        });
//    }
//}

function delete_image(path, type) {

    if (path != '') {
        url = "/api/delete_file/";
        data = {
            "path": path,
            "type": type
        };
        ajaxRequest("POST", url, data, function(result) {
            console.log(result);
            if (result.status == 1) {
                location.reload();
                Swal.fire(
                    'Graduate registration',
                    'Successfully Image is Deleted!',
                    'success'
                );
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                })
            }

            if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
                callBack(result);
            }
        });
    } else {
        Swal.fire(
            'Image Deletion',
            'Path is not found!',
            'warning'
        );
    }
}

$(document).on("click", ".btn-info", function() {
    var ins_name = $(this).parents('tr:first').find('td:first').text();
    var inst_address = $(this).closest("tr").find('td:eq(1)').text();
    var ins_tel = $(this).closest("tr").find('td:eq(2)').text();
    var data = {
        "inst_name": ins_name,
        "inst_address": inst_address,
        "inst_tel": ins_tel,
        "_token": $('meta[name=csrf-token]').attr("content")
    };
    data['base_reg'] = $(this).val();
    submitByMultipleData('/inspection', data)

});

//function validate_image_size(file_type, img_file) {
//    if (img_file != undefined) {
//        var file = img_file;
//        if (Math.round(file.size / (1024 * 1024)) > 2) { // make it in MB so divide by 1024*1024
//            alert('Please select '+file_type+' size less than 2 MB');
//            return false;
//        }
//    }
//}


// function getJtableBtnHtml(full) {
//     var html = '';
//     html += '<div class="btn-group" role="group"  aria-label="" >';
//     if (full["inspection_status"] != 1) {
//         html += '<a href="/institute_resgistration_edit/' + full["id"] + '" class="btn btn-primary" role="button" data-toggle="tooltip" title="Edit"><i class="far fa-edit"></i></a>';
//         html += '<button type="button" class="btn btn-danger btn-del" value="' + full["id"] + '" data-toggle="tooltip" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button>';
//         html += '&nbsp; &nbsp; &nbsp; &nbsp;';
//     }

//     html += '<a href="/institute_instructors/' + full["id"] + '" class="btn btn-warning" role="button data-toggle="tooltip" title="Instructors""><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>';
//     html += '&nbsp; &nbsp;';
//     html += '<a href="/course_fee_handling/' + full["id"] + '" class="btn btn-secondary" role="button" data-toggle="tooltip" title="Course fees"><i class="fa fa-building" aria-hidden="true"></i></a>';
//     html += '&nbsp; &nbsp;';

//     if (full["inspection_status"] == 0) {
//         html += '<button value="' + full["baseid"] + '" class="btn btn-info" role="button" data-toggle="tooltip" title="Inspection form"><i class="fa fa-check-square" aria-hidden="true"></i></a>';
//     }

//     html += '</div>';
//     return html;
// }