var del_b = {
    'main_title_t': '#delete_main_title',
    'title_t': '#delete_title',
    'param_t': '#delete_param',
    'attr_t': '#delete_attr',
    'param_type_t': '#attr_param_val_del',
};
var save_b = {
    'main_title_t': '#add_main_title',
    'title_t': '#add_title',
    'param_t': '#add_parameter',
    'attr_t': '#add_attr',
    'param_type_t': '#add_attrPara',
    'title_sinhala': '#main_title_sinhala',
    'title_tamil': '#main_title_tamil',
};

var update_b = {
    'main_title_t': '#update_main_title',
    'title_t': '#update_title',
    'param_t': '#update_parameter',
    'attr_t': '#update_attr',
    'param_type_t': '#update_attrPara',
};
function save_survey(foc, obj, callBack) {
    if (!obj) {
        return false;
    }
    var url = '';
    switch (foc) {
        case 'main_title_t':
            url = "/api/survey/main/title";
            break;
        case 'title_t':
            url = "/api/survey/title";
            break;
        case 'param_t':
            url = "/api/survey/parameter";
            break;
        case 'attr_t':
            url = "/api/survey/attribute";
            break;
        case 'sel_value':
            url = "/api/survey/value";
            break;
        case 'param_type_t':
            url = "/api/survey/attrpram_map";
            break;
    }
    //    $.ajax({
    //        type: "POST",
    //        headers: {
    //            "Authorization": "Bearer " + $('meta[name=api-token]').attr("content"),
    //            "Accept": "application/json"
    //        },
    //        url: url,
    //        data: obj,
    //        //        contentType: 'text/json',
    //        //        dataType: "json",
    //        cache: false,
    //        success: function (result) {
    //
    //            if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
    //                callBack(result);
    //            }
    //        }
    //    });
    //JAKE STR
    ajaxRequest("POST", url, obj, function (result) {
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack(result);
        }
    });
    //JAKE END 
}


function update_survey(foc, obj, update_id, callBack) {
    if (!obj) {
        return false;
    }
    var url = '';
    switch (foc) {

        case 'main_title_t':
            url = "/api/survey/main/title/id/" + update_id;
            break;
        case 'title_t':
            url = "/api/survey/title/id/" + update_id;
            break;
        case 'param_t':
            url = "/api/survey/parameter/id/" + update_id;
            break;
        case 'attr_t':
            url = "/api/survey/attribute/id/" + update_id;
            break;
        case 'sel_value':
            url = "/api/survey/value/id/" + update_id;
            break;
        case 'param_type_t':
            url = "/api/survey/attrpram_map/id";
            break;
    }
    //    $.ajax({
    //        type: "PUT",
    //        headers: {
    //            "Authorization": "Bearer " + $('meta[name=api-token]').attr("content"),
    //            "Accept": "application/json"
    //        },
    //        url: url,
    //        data: obj,
    //        //        contentType: 'text/json',
    //        //        dataType: "json",
    //        cache: false,
    //        success: function (result) {
    //
    //            if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
    //                callBack(result);
    //            }
    //        }
    //    });
    //JAKE STR
    ajaxRequest("PUT", url, obj, function (result) {
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack(result);
        }
    });
    //JAKE END 
}


function load_MainTitleTable(survey_combo, callBack) {

    let nxt_ttl_no = 0;
    var tbl = '';
    ajaxRequest("GET", "/api/survey/main/titles/id/" + survey_combo, null, function (result) {
        $.each(result, function (index, row) {

            nxt_ttl_no = (isNaN(parseInt(row.title_no)) ? 0 : parseInt(row.title_no));
            tbl += '<tr data-rowid =' + row.id + '><td>' + row.title_no + '</td><td><b class="text-info" data-toggle="tooltip" data-placement="top" title="' + row.name + '">' + truncate(row.name, 71) + '</b><br><small data-toggle="tooltip" data-placement="top" title="' + row.title_sinhala + '">' + ((row.title_sinhala != null) ? truncate(row.title_sinhala, 71) : "") + '</small><br><small data-toggle="tooltip" data-placement="top" title="' + row.title_tamil + '">' + ((row.title_tamil != null) ? truncate(row.title_tamil, 71) : "") + '</small></td><td><button type="button" data-row="' + encodeURIComponent(JSON.stringify(row)) + '"  value="' + row.id + '" class="btn btn-block btn-secondary btn-xs">Select</button></td><td><button type="button" class="btn btn-sm btn-default up"><i class="fa fa-arrow-up"></i></button> <button type= "button" class= "btn btn-sm btn-default down"> <i class="fa fa-arrow-down"></i> </button>\n\
            </td></tr>';
            // do something with `item` (or `this` is also `item` if you like)
        });
        $('#main_ttl_no').val(nxt_ttl_no + 1);
        $('#main_title_table tbody').html(tbl);
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack();
        }
    });
    //tamp jake end

}
function load_titleTable(mainTtl_id, callBack) {
    let nxt_ttl_no = 0;
    var tbl = '';
    let Mtitle_no = $('#main_title_combo :selected').data('no');
    $('#sub_title_card').html($('#main_title_combo :selected').text());
    //Mtitle_no + '.' + 
    //    $.ajax({
    //        type: "GET",
    //        headers: {
    //            "Authorization": "Bearer " + $('meta[name=api-token]').attr("content"),
    //            "Accept": "application/json"
    //        },
    //        url: "/api/survey/main/title/subtitles/id/" + mainTtl_id,
    //        cache: false,
    //        success: function (result) {
    //            $.each(result, function (index, row) {
    //                nxt_ttl_no = (isNaN(parseInt(row.title_no)) ? 0 : parseInt(row.title_no));
    //                tbl += '<tr><td>' + Mtitle_no + '.' + row.title_no + '</td><td><b class="text-info" data-toggle="tooltip" data-placement="top" title="' + row.name + '">' + truncate(row.name, 71) + '</b><br><small data-toggle="tooltip" data-placement="top" title="' + row.sub_title_sinhala + '">' + ((row.sub_title_sinhala != null) ? truncate(row.sub_title_sinhala, 71) : "N/A") + '</small><br><small data-toggle="tooltip" data-placement="top" title="' + row.sub_title_tamil + '">' + ((row.sub_title_tamil != null) ? truncate(row.sub_title_tamil, 71) : "N/A") + '</small></td><td><button type="button" data-row="' + encodeURIComponent(JSON.stringify(row)) + '"  value="' + row.id + '" class="btn btn-block btn-secondary btn-xs">Select</button></td></tr>';
    //                // do something with `item` (or `this` is also `item` if you like)
    //            });
    //            $('#title_number').val(nxt_ttl_no + 1);
    //            $('#title_table tbody').html(tbl);
    //            if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
    //                callBack();
    //            }
    //        }
    //    });
    //JAKE STR
    ajaxRequest("GET", "/api/survey/main/title/subtitles/id/" + mainTtl_id, null, function (result) {
        $.each(result, function (index, row) {
            nxt_ttl_no = (isNaN(parseInt(row.title_no)) ? 0 : parseInt(row.title_no));
            tbl += '<tr data-rowid =' + row.id + '><td>' + Mtitle_no + '.' + row.title_no + '</td><td><b class="text-info" data-toggle="tooltip" data-placement="top" title="' + row.name + '">' + truncate(row.name, 71) + '</b><br><small data-toggle="tooltip" data-placement="top" title="' + row.sub_title_sinhala + '">' + ((row.sub_title_sinhala != null) ? truncate(row.sub_title_sinhala, 71) : "N/A") + '</small><br><small data-toggle="tooltip" data-placement="top" title="' + row.sub_title_tamil + '">' + ((row.sub_title_tamil != null) ? truncate(row.sub_title_tamil, 71) : "N/A") + '</small></td><td><button type="button" data-row="' + encodeURIComponent(JSON.stringify(row)) + '"  value="' + row.id + '" class="btn btn-block btn-secondary btn-xs">Select</button></td> <td><button type="button" class="btn btn-sm btn-default up"><i class="fa fa-arrow-up"></i></button> <button type= "button" class= "btn btn-sm btn-default down"> <i class="fa fa-arrow-down"></i> </button>\n\
            </td></tr>';
            // do something with `item` (or `this` is also `item` if you like)
        });
        $('#title_number').val(nxt_ttl_no + 1);
        $('#title_table tbody').html(tbl);
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack();
        }
    });
    //JAKE END
}



function load_paramTable(title_id, callBack) {
    $('#param_table tbody').html('');
    if (isNaN(title_id)) {
        return false;
    }
    var tbl = '';
    //    $.ajax({
    //        type: "GET",
    //        headers: {
    //            "Authorization": "Bearer " + $('meta[name=api-token]').attr("content"),
    //            "Accept": "application/json"
    //        },
    //        url: "/api/survey/parameter/title/id/" + title_id,
    //        cache: false,
    //        success: function (result) {
    //            $.each(result, function (index, row) {
    //                tbl += '<tr><td>' + ++index + '</td><td>' + row.name + '</td><td><button type="button" data-row="' + encodeURIComponent(JSON.stringify(row)) + '"  value="' + row.id + '" class="btn btn-block btn-secondary btn-xs">Select</button></td></tr>';
    //            });
    //            $('#param_table tbody').html(tbl);
    //            if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
    //                callBack();
    //            }
    //        }
    //    });
    //JAKE STR
    ajaxRequest("GET", "/api/survey/parameter/title/id/" + title_id, null, function (result) {
        $.each(result, function (index, row) {
            tbl += '<tr><td>' + ++index + '</td><td>' + row.name + '</td><td><button type="button" data-row="' + encodeURIComponent(JSON.stringify(row)) + '"  value="' + row.id + '" class="btn btn-block btn-secondary btn-xs">Select</button></td></tr>';
        });
        $('#param_table tbody').html(tbl);
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack();
        }
    });
    //JAKE END
}
function load_attributeTable(title_id, callBack) {
    let nxt_ttl_no = 0;
    let Mtitle_no = $('#title_comboParam :selected').data('no');
    //    $('#sub_title_card').html(Mtitle_no + '-' + $('#main_title_combo :selected').text());
    $('#attribute_table tbody').html('');
    if (isNaN(title_id)) {
        return false;
    }
    var tbl = '';
    //    $.ajax({
    //        type: "GET",
    //        headers: {
    //            "Authorization": "Bearer " + $('meta[name=api-token]').attr("content"),
    //            "Accept": "application/json"
    //        },
    //        url: "/api/survey/attribute/title/id/" + title_id,
    //        cache: false,
    //        success: function (result) {
    //            $.each(result, function (index, row) {
    //                nxt_ttl_no = (isNaN(parseInt(row.title_no)) ? 0 : parseInt(row.title_no));
    //                tbl += '<tr><td>' + Mtitle_no + '.' + row.title_no + '</td><td><b class="text-info" data-toggle="tooltip" data-placement="top" title="' + row.name + '"> ' + truncate(row.name, 71) + '</b><br><small data-toggle="tooltip" data-placement="top" title="' + row.attr_name_sinhala + '">' + ((row.attr_name_sinhala != null) ? truncate(row.attr_name_sinhala, 71) : "N/A") + '</small><br><small data-toggle="tooltip" data-placement="top" title="' + row.attr_name_tamil + '"> ' + ((row.attr_name_tamil != null) ? truncate(row.attr_name_tamil, 71) : "N/A") + '</small></td><td><button type="button" data-row="' + encodeURIComponent(JSON.stringify(row)) + '"  value="' + row.id + '" class="btn btn-block btn-secondary btn-xs">Select</button></td></tr>';
    //            });
    //            $('#attr_no').val(nxt_ttl_no + 1);
    //            $('#attribute_table tbody').html(tbl);
    //            if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
    //                callBack();
    //            }
    //        }
    //    });
    //JAKE STR
    ajaxRequest("GET", "/api/survey/attribute/title/id/" + title_id, null, function (result) {
        $.each(result, function (index, row) {
            nxt_ttl_no = (isNaN(parseInt(row.title_no)) ? 0 : parseInt(row.title_no));
            tbl += '<tr data-rowid =' + row.id + '><td>' + Mtitle_no + '.' + row.title_no + '</td><td><b class="text-info" data-toggle="tooltip" data-placement="top" title="' + row.name + '"> ' + truncate(row.name, 71) + '</b><br><small data-toggle="tooltip" data-placement="top" title="' + row.attr_name_sinhala + '">' + ((row.attr_name_sinhala != null) ? truncate(row.attr_name_sinhala, 71) : "N/A") + '</small><br><small data-toggle="tooltip" data-placement="top" title="' + row.attr_name_tamil + '"> ' + ((row.attr_name_tamil != null) ? truncate(row.attr_name_tamil, 71) : "N/A") + '</small></td><td><button type="button" data-row="' + encodeURIComponent(JSON.stringify(row)) + '"  value="' + row.id + '" class="btn btn-block btn-secondary btn-xs">Select</button></td><td><button type="button" class="btn btn-sm btn-default up"><i class="fa fa-arrow-up"></i></button> <button type= "button" class= "btn btn-sm btn-default down"> <i class="fa fa-arrow-down"></i> </button>\n\
            </td></tr>';
        });
        $('#attr_no').val(nxt_ttl_no + 1);
        $('#attribute_table tbody').html(tbl);
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack();
        }
    });
    //JAKE END
}
//function load_attr_valTable(callBack) {
//    var tbl = '';
//    $.ajax({
//        type: "GET",
//        headers: {
//            "Authorization": "Bearer " + $('meta[name=api-token]').attr("content"),
//            "Accept": "application/json"
//        },
//        url: "/api/survey/values",
////        data: {"survey_title_name": "dddd", "survey_title_status":1},
////        contentType: 'text/json',
////        dataType: "json",
//        cache: false,
//        success: function (result) {
//            $.each(result, function (index, row) {
//                tbl += '<tr><td>' + ++index + '</td><td>' + row.name + '</td><td><button type="button" data-row="' + encodeURIComponent(JSON.stringify(row)) + '"  value="' + row.id + '" class="btn btn-block btn-secondary btn-xs">Select</button></td></tr>';
//                // do something with `item` (or `this` is also `item` if you like)
//            });
//            $('#attr_val_table tbody').html(tbl);
//            if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
//                callBack();
//            }
//        }
//    });
//}
function load_attr_param_Table(attribute_id, callBack) {
    var tbl = '';
    //    $.ajax({
    //        type: "GET",
    //        headers: {
    //            "Authorization": "Bearer " + $('meta[name=api-token]').attr("content"),
    //            "Accept": "application/json"
    //        },
    //        //        url: "/api/survey/parameter/assigned/title_id/" + titleId + "/attribute_id/" + attribute_id,
    //        url: "/api/survey/attrpram_map/attr/" + attribute_id,
    //        //        data: {"survey_title_name": "dddd", "survey_title_status":1},
    //        //        contentType: 'text/json',
    //        //        dataType: "json",
    //        cache: false,
    //        success: function (result) {
    //            if (result.length == 0) {
    //                tbl += '<tr><td>No Data Available</td></tr>';
    //            }
    //            $.each(result, function (index, row) {
    //                if (row.type == 'SELECTED' || row.type == 'CHECKBOX') {
    //                    tbl += '<tr><td>' + ++index + '</td><td>' + row.param_name + '</td><td>' + row.type + '</td><td><button type="button" data-toggle="modal"  data-target="#modal-lg" data-row="' + encodeURIComponent(JSON.stringify(row)) + '"  value="' + row.id + '" class="btn btn-default val_sel"><i class="fa fa-plus"> Add Options</i></button> <button style="margin-top:10px" type="button" data-row="' + encodeURIComponent(JSON.stringify(row)) + '" value="' + row.id + '" class="btn btn-block btn-secondary btn-xs">Select</button></td></tr>';
    //                } else {
    //                    tbl += '<tr><td>' + ++index + '</td><td>' + row.param_name + '</td><td>' + row.type + '</td><td><button type="button" data-row="' + encodeURIComponent(JSON.stringify(row)) + '"  value="' + row.id + '" class="btn btn-block btn-secondary btn-xs">Select</button></td></tr>';
    //                }
    //
    //            });
    //            $('#attr_param_val_table tbody').html(tbl);
    //            if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
    //                callBack();
    //            }
    //        }
    //    });
    //JAKE STR
    ajaxRequest("GET", "/api/survey/attrpram_map/attr/" + attribute_id, null, function (result) {
        if (result.length == 0) {
            tbl += '<tr><td>No Data Available</td></tr>';
        }
        $.each(result, function (index, row) {
            if (row.type == 'SELECTED' || row.type == 'CHECKBOX') {
                tbl += '<tr><td>' + ++index + '</td><td>' + row.param_name + '</td><td>' + row.type + '</td><td><button type="button" data-toggle="modal"  data-target="#modal-lg" data-row="' + encodeURIComponent(JSON.stringify(row)) + '"  value="' + row.id + '" class="btn btn-default val_sel"><i class="fa fa-plus"> Add Options</i></button> <button style="margin-top:10px" type="button" data-row="' + encodeURIComponent(JSON.stringify(row)) + '" value="' + row.id + '" class="btn btn-block btn-secondary btn-xs">Select</button></td></tr>';
            } else {
                tbl += '<tr><td>' + ++index + '</td><td>' + row.param_name + '</td><td>' + row.type + '</td><td><button type="button" data-row="' + encodeURIComponent(JSON.stringify(row)) + '"  value="' + row.id + '" class="btn btn-block btn-secondary btn-xs">Select</button></td></tr>';
            }

        });
        $('#attr_param_val_table tbody').html(tbl);
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack();
        }
    });
    //JAKE END
}
function gen_priv(titleId) {
    $('#surv_view_title').html($('#main_title_combo :selected').text() + ' : ' + $('#title_comboParam :selected').text());
    //    $.ajax({
    //        type: "GET",
    //        headers: {
    //            "Authorization": "Bearer " + $('meta[name=api-token]').attr("content"),
    //            "Accept": "text/html"
    //        },
    //        url: "/api/survey/attrpram_map/table/id/" + titleId, cache: false,
    //        success: function (result) {
    //            $('#sur_privTbl').html(result);
    //        }
    //    });
    //JAKE STR
    ajaxRequest("GET", "/api/survey/attrpram_map/table/id/" + titleId, null, function (result) {
        $('#sur_privTbl').html(result);
    });
    //JAKE END
}

function load_attrCombo(title_id, callBack) {
    let Mtitle_no = $('#title_comboParam :selected').data('no');

    var cbo = '';
    //    $.ajax({
    //        type: "GET",
    //        headers: {
    //            "Authorization": "Bearer " + $('meta[name=api-token]').attr("content"),
    //            "Accept": "application/json"
    //        },
    //        url: "/api/survey/attribute/title/id/" + title_id,
    //        cache: false,
    //        success: function (result) {
    //            $.each(result, function (index, row) {
    //                cbo += '<option value="' + row.id + '">' + Mtitle_no + '.' + row.title_no + ' ' + row.name + '</option>';
    //            });
    //            $('.attr_cbo').html(cbo);
    //            if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
    //                callBack();
    //            }
    //        }
    //    });
    //JAKE STR
    ajaxRequest("GET", "/api/survey/attribute/title/id/" + title_id, null, function (result) {
        $.each(result, function (index, row) {
            cbo += '<option value="' + row.id + '">' + Mtitle_no + '.' + row.title_no + ' ' + row.name + '</option>';
        });
        $('.attr_cbo').html(cbo);
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack();
        }
    });
    //JAKE END
}
function load_MainTitle_Combo(survey_combo, callBack) {
    var cbo = '';
    //    $.ajax({
    //        type: "GET",
    //        headers: {
    //            "Authorization": "Bearer " + $('meta[name=api-token]').attr("content"),
    //            "Accept": "application/json"
    //        },
    //        url: "/api/survey/main/titles/id/" + survey_combo,
    //        cache: false,
    //        success: function (result) {
    //            if (result.length == 0) {
    //                cbo += '<option> No Data Found </option>';
    //            } else {
    //                $.each(result, function (index, row) {
    //                    cbo += '<option data-no="' + row.title_no + '" value="' + row.id + '">' + row.title_no + ' ' + row.name + '</option>';
    //                });
    //            }
    //            $('.mainTitle_cbo').html(cbo);
    //            if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
    //                callBack();
    //            }
    //        }
    //    });
    //JAKE STR
    ajaxRequest("GET", "/api/survey/main/titles/id/" + survey_combo, null, function (result) {
        if (result.length == 0) {
            cbo += '<option> No Data Found </option>';
        } else {
            $.each(result, function (index, row) {
                cbo += '<option data-no="' + row.title_no + '" value="' + row.id + '">' + row.title_no + ' ' + row.name + '</option>';
            });
        }
        $('.mainTitle_cbo').html(cbo);
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack();
        }
    });
    //JAKE END
}
function load_titleCombo(mn_title_id, callBack) {
    let m_ttl_no = $('#main_title_combo :selected').data('no');
    var cbo = '';
    //    $.ajax({
    //        type: "GET",
    //        headers: {
    //            "Authorization": "Bearer " + $('meta[name=api-token]').attr("content"),
    //            "Accept": "application/json"
    //        },
    //        url: "/api/survey/main/title/subtitles/id/" + mn_title_id,
    //        cache: false,
    //        success: function (result) {
    //            $.each(result, function (index, row) {
    //                cbo += '<option data-no="' + m_ttl_no + '.' + row.title_no + '" value="' + row.id + '">' + m_ttl_no + '.' + row.title_no + ' ' + row.name + '</option>';
    //            });
    //            $('.title_cbo').html(cbo);
    //            if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
    //                callBack();
    //            }
    //        }
    //    });
    //JAKE STR
    ajaxRequest("GET", "/api/survey/main/title/subtitles/id/" + mn_title_id, null, function (result) {
        $.each(result, function (index, row) {
            cbo += '<option data-no="' + m_ttl_no + '.' + row.title_no + '" value="' + row.id + '">' + m_ttl_no + '.' + row.title_no + ' ' + row.name + '</option>';
        });
        $('.title_cbo').html(cbo);
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack();
        }
    });
    //JAKE END
}
function load_avl_paramCombo(title_id, attr_id, callBack) {
    var cbo = '';
    //    $.ajax({
    //        type: "GET",
    //        headers: {
    //            "Authorization": "Bearer " + $('meta[name=api-token]').attr("content"),
    //            "Accept": "application/json"
    //        },
    //        url: "/api/survey/parameter/unassigned/title_id/" + title_id + "/attribute_id/" + attr_id,
    //        cache: false,
    //        success: function (result) {
    //            if (result.length == 0) {
    //                cbo += '<option>-No Data Available-</option>';
    //            } else {
    //                $.each(result, function (index, row) {
    //                    cbo += '<option value="' + row.id + '">' + row.name + '</option>';
    //                });
    //            }
    //            $('.avl_param_cmb').html(cbo);
    //            if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
    //                callBack();
    //            }
    //        }
    //    });
    //JAKE STR
    ajaxRequest("GET", "/api/survey/parameter/unassigned/title_id/" + title_id + "/attribute_id/" + attr_id, null, function (result) {
        if (result.length == 0) {
            cbo += '<option>-No Data Available-</option>';
        } else {
            $.each(result, function (index, row) {
                cbo += '<option value="' + row.id + '">' + row.name + '</option>';
            });
        }
        $('.avl_param_cmb').html(cbo);
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack();
        }
    });
    //JAKE END
}
function load_attr_valCombo(attr_id, callBack) {
    var cbo = '';
    $('.attr_val_cmb').html(cbo);
    //    $.ajax({
    //        type: "GET",
    //        headers: {
    //            "Authorization": "Bearer " + $('meta[name=api-token]').attr("content"),
    //            "Accept": "application/json"
    //        },
    //        url: "/api/survey/values/id/" + attr_id,
    //        //        url: "/api/survey/values/" + attr_id,
    //        cache: false,
    //        success: function (result) {
    //            if (result.length == 0) {
    //                cbo += '<option>-No Data Available-</option>';
    //            } else {
    //                $.each(result, function (index, row) {
    //                    cbo += '<option value="' + row.id + '">' + row.name + '</option>';
    //                });
    //            }
    //            $('.attr_val_cmb').html(cbo);
    //            if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
    //                callBack();
    //            }
    //        }
    //    });
    //JAKE STR
    ajaxRequest("GET", "/api/survey/values/id/" + attr_id, null, function (result) {
        if (result.length == 0) {
            cbo += '<option>-No Data Available-</option>';
        } else {
            $.each(result, function (index, row) {
                cbo += '<option value="' + row.id + '">' + row.name + '</option>';
            });
        }
        $('.attr_val_cmb').html(cbo);
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack();
        }
    });
    //JAKE END
}

//function load_attr_types(callBack) {
//    var cbo = '';
//    $.ajax({
//        type: "GET",
//        headers: {
//            "Authorization": "Bearer " + $('meta[name=api-token]').attr("content"),
//            "Accept": "application/json"
//        },
//        url: "/api/survey/attribute/types",
//        cache: false,
//        success: function (result) {
//            $.each(result, function (index, row) {
//                cbo += '<option value="' + row.id + '">' + row.name + '</option>';
//            });
//            $('.attr_type_cbo').html(cbo);
//            if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
//                callBack();
//            }
//        }
//    });
//}



function remove_survData(foc, del_id, callBack) {
    if (!confirm('Are You Sure You Want To Delete This Record?')) {
        return false;
    }
    var url = "";
    switch (foc) {
        case 'main_title_t':
            url = "/api/survey/main/title/id/";
            break;
        case 'title_t':
            url = "/api/survey/title/id/";
            break;
        case 'param_t':
            url = "/api/survey/parameter/id/";
            break;
        case 'attr_t':
            url = "/api/survey/attribute/id/";
            break;
        case 'sel_value':
            url = "/api/survey/value/id/";
            break;
        case 'param_type_t':
            url = "/api/survey/attrpram_map/id/";
            break;
    }
    $.ajax({
        type: "DELETE",
        headers: {
            "Authorization": "Bearer " + $('meta[name=api-token]').attr("content"),
            "Accept": "application/json"
        },
        //        url: "/api/survey/title/id/" + title_id,
        url: url + del_id,
        //        data: {"survey_title_name": "dddd", "survey_title_status":1},
        cache: false,
        success: function (result) {
            if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
                callBack(result);
            }
        }
    });
}
function get_form_object(foc) {
    var FD = {};
    switch (foc) {
        case 'main_title_t':
            FD["main_title_name"] = $('#main_title_name').val().trim();
            FD["main_title_no"] = parseInt($('#main_ttl_no').val());
            FD["main_title_status"] = 1;
            FD["main_title_desc"] = $('#main_title_desc').val().trim();

            FD["title_sinhala"] = $('#main_title_sinhala').val().trim();
            FD["title_tamil"] = $('#main_title_tamil').val().trim();
            FD["survey_combo"] = $('#survey_combo').val().trim();
            if (FD.main_title_name.length == 0 || isNaN(FD.main_title_no)) {
                alert('Invalid Data');
                return false;
            }
            break;
        case 'title_t':
            FD["survey_title_name"] = $('#title_text').val().trim();
            FD["survey_title_status"] = 1;
            FD["main_title_id"] = parseInt($('#main_title_combo').val());
            FD["title_no"] = parseInt($('#title_number').val());
            FD["sub_title_sinhala"] = $('#sub_title_sinhala').val().trim();
            FD["sub_title_tamil"] = $('#sub_title_tamil').val().trim();
            if (FD.survey_title_name.length == 0 || isNaN(FD.title_no) || isNaN(FD.main_title_id)) {
                alert('Invalid Data');
                return false;
            }
            break;
        case 'param_t':
            FD["survey_parameter_name"] = $('#param_name').val().trim();
            FD["survey_title_id"] = parseInt($('#title_comboParam').val());
            if (FD.survey_parameter_name.length == 0 || isNaN(FD.survey_title_id)) {
                alert('Invalid Data');
                return false;
            }
            break;
        case 'attr_t':
            FD["survey_attribute_name"] = $('#attr_name').val().trim();
            FD["title_no"] = parseInt($('#attr_no').val());
            FD["survey_title_id"] = $('#title_comboParam').val();
            FD["attribute_desc"] = $('#attribute_desc').val().trim();
            FD["attr_name_sinhala"] = $('#attr_name_sinhala').val().trim();
            FD["attr_name_tamil"] = $('#attr_name_tamil').val().trim();
            FD["attr_code"] = $('#attr_code').val().trim();

            if (FD.survey_attribute_name.length == 0 || isNaN(FD.title_no) || isNaN(FD.survey_title_id)) {
                alert('Invalid Data');
                return false;
            }
            break;
        case 'sel_value':
            FD["survey_value_name"] = $('#attr_val_name').val().trim();
            FD["suray_param_attributes_id"] = parseInt($('#sel_value').val());
            FD["other_value"] = parseInt($("#isOther").is(":checked") ? 1 : 0);
            if (FD.survey_value_name.length == 0 || isNaN(FD.suray_param_attributes_id)) {
                alert('Invalid Data');
                return false;
            }
            break;
        case 'param_type_t':
            FD["is_null"] = ($('#nullableCheckbox').is(':checked')) ? 1 : 0;
            FD["is_image"] = 0;
            FD["survey_parameter_id"] = $('#param_combo').val();
            FD["survey_attribute_id"] = $('#attr_combo').val();
            FD["type"] = $('#survey_type').val();
            FD["category_list_id"] = $('#patent_combo').val();
            console.log(FD);
            if (FD.type.length == 0 || isNaN(FD.survey_parameter_id) || isNaN(FD.survey_attribute_id)) {
                alert('Invalid Data');
                return false;
            }
            if ($('#survey_type').val() == 'LIST') {
                if (FD.category_list_id == null) {
                    alert('Parent Category Empty!');
                    return false;
                }
            }
            break;
    }
    return FD;
}
function set_selected_form_data(F_TAB, sel_row) {
    switch (F_TAB) {
        case 'main_title_t':
            $('#survey_combo').val(sel_row.survey_name_id);
            $('#main_title_name').val(sel_row.name);
            $('#main_ttl_no').val(sel_row.title_no);
            $('#main_title_desc').val(sel_row.main_title_desc);
            $('#delete_main_title').val(sel_row.id);
            $('#update_main_title').val(sel_row.id);
            $('#update_main_title').val(sel_row.id);
            $('#main_title_tamil').val(sel_row.title_tamil);
            $('#main_title_sinhala').val(sel_row.title_sinhala);
//            $('#main_title_sinhala').val(sel_row.title_sinhala);
            break;
        case 'title_t':
            $('#delete_title').val(sel_row.id);
            $('#update_title').val(sel_row.id);
            $('#title_text').val(sel_row.name);
            $('#title_number').val(sel_row.title_no);
            $('#sub_title_sinhala').val(sel_row.sub_title_sinhala);
            $('#sub_title_tamil').val(sel_row.sub_title_tamil);
            break;
        case 'param_t':
            $('#param_name').val(sel_row.name);
            $('#delete_param').val(sel_row.id);
            $('#update_param').val(sel_row.id);
            $('#update_parameter').val(sel_row.id);
            break;
        case 'attr_t':
            $('#title_combo').val(sel_row.survey_title_id);
            $('#survey_type').val(sel_row.type);
            $('#attr_name').val(sel_row.name);
            $('#attr_note').val(sel_row.note);
            $('#delete_attr').val(sel_row.id);
            $('#update_attr').val(sel_row.id);
            $('#attr_no').val(sel_row.title_no);
            $('#attribute_desc').val(sel_row.attribute_desc);
            $('#attr_name_tamil').val(sel_row.attr_name_tamil);
            $('#attr_name_sinhala').val(sel_row.attr_name_sinhala);
            $('#attr_code').val(sel_row.attr_code);
            break;
        case 'custom-tabs-two-messages-tab':
            $('#attr_combo').val(sel_row.survey_attribute_id);
            $('#attr_val_name').val(sel_row.name);
            $('#attr_val_delete').val(sel_row.id);

            $('#attr_no').val(sel_row.title_no);
            break;
        case 'param_type_t':
            $('#attr_param_val_del').val(sel_row.id);
            break;
    }
}
function reset_form_data(F_TAB) {
    show_DelBtn(F_TAB, 'hide');
    show_UpdateBtn(F_TAB, 'hide');
    show_saveBtn(F_TAB, 'show');
    switch (F_TAB) {
        case 'main_title_t':
            $('#main_title_name').val('');
            $('#main_title_sinhala').val('');
            $('#main_title_tamil').val('');
            //            $('#main_ttl_no').val('');
            $('#delete_main_title').val('');
            $('#main_title_desc').val('');
            break;
        case 'title_t':
            $('#delete_title').val('');
            $('#title_text').val('');
            $('#sub_title_sinhala').val('');
            $('#sub_title_tamil').val('');
            //            $('#title_number').val('')
            break;
        case 'param_t':
            $('#param_name').val('');
            $('#delete_param').val('');
            $('#attr_val_name').val('');
            break;
        case 'attr_t':
            $('#attr_name').val('');
            $('#delete_attr').val('');
            $('#attribute_desc').val('');
            $('#attr_name_sinhala').val('');
            $('#attr_name_tamil').val('');
            //            $('#attr_no').val('')
            break;
        case 'sel_value':

            // $("#option_setup").trigger("reset");

            $('#modal-lg').on('hidden.bs.modal', function () {
                $(this).find('form').trigger('reset');
            })
            $('#isOther').prop('checked', false);
            $('#sel_value').val('');
            $('#attr_val_delete').val('');
            $('#attr_val_name').val('');

            break;
    }
}
function load_survTable(F_TAB) {
    switch (F_TAB) {
        case 'main_title_t':
            load_MainTitleTable(parseInt($('#survey_combo').val()));
            break;
        case 'title_t':
            load_titleTable(parseInt($('#main_title_combo').val()));
            break;
        case 'param_t':
            load_paramTable(parseInt($('#title_comboParam').val()));
            break;
        case 'attr_t':
            load_attributeTable(parseInt($('#title_comboParam').val()));
            break;
        case 'param_type_t':
            load_attr_param_Table(parseInt($('#attr_combo').val()));
            load_avl_paramCombo(parseInt($('#title_comboParam').val()), parseInt($('#attr_combo').val()));//available parameter combo
            break;
    }
}
function load_survTable(F_TAB, callBack) {
    switch (F_TAB) {
        case 'main_title_t':
            load_MainTitleTable(parseInt($('#survey_combo').val()));
            break;
        case 'title_t':
            load_titleTable(parseInt($('#main_title_combo').val()));
            break;
        case 'param_t':
            $('.attr_tab_title').html($('#title_comboParam :selected').text());
            load_paramTable(parseInt($('#title_comboParam').val()));
            break;
        case 'attr_t':
            load_attr_param_Table(parseInt($('#attr_combo').val()));
            load_attributeTable(parseInt($('#title_comboParam').val()));
            break;
        case 'param_type_t':
            load_attr_param_Table(parseInt($('#attr_combo').val()));
            break;
    }
    if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
        callBack();
    }
}
function load_survComboAndTable(F_TAB, callBack) {
    switch (F_TAB) {
        case 'main_title_t':
            survey_name_combo(function () {
                load_MainTitleTable(parseInt($('#survey_combo').val()));
            });
            break;
        case 'title_t':
            load_titleCombo(parseInt($('#main_title_combo').val()), function () {
                load_titleTable(parseInt($('#main_title_combo').val()));
            });
            break;
        case 'param_t':
            $('.attr_tab_title').html($('#title_comboParam :selected').text());
            load_paramTable(parseInt($('#title_comboParam').val()));
            break;
        case 'attr_t':
            load_attrCombo(parseInt($('#title_comboParam').val()), function () {
                load_avl_paramCombo(parseInt($('#title_comboParam').val()), parseInt($('#attr_combo').val()));//available parameter combo
                load_attr_param_Table(parseInt($('#attr_combo').val()));
            });
            load_attributeTable(parseInt($('#title_comboParam').val()));
            break;
        case 'param_type_t':
            load_avl_paramCombo(parseInt($('#title_comboParam').val()), parseInt($('#attr_combo').val()));//available parameter combo
            load_attr_param_Table(parseInt($('#attr_combo').val()));
            break;
    }
    if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
        callBack();
    }
}
function show_DelBtn(F_TAB, type) {
    if (type === 'hide') {
        $(del_b[F_TAB]).addClass('d-none');
    } else {
        $(del_b[F_TAB]).removeClass('d-none');
    }
}
function show_saveBtn(F_TAB, type) {
    if (type === 'hide') {
        $(save_b[F_TAB]).addClass('d-none');
    } else {
        $(save_b[F_TAB]).removeClass('d-none');
    }
}

function show_UpdateBtn(F_TAB, type) {
    if (type === 'hide') {
        $(update_b[F_TAB]).addClass('d-none');
    } else {
        $(update_b[F_TAB]).removeClass('d-none');
    }
}
// const Toast = Swal.mixin({
//     toast: true,
//     position: 'top-end',
//     showConfirmButton: false,
//     timer: 4000

// });
function AlertMEssege(type) {
    if (type == 'true') {
        Toast.fire({
            type: 'success',
            title: '<h4>Success</h4>'
        });
    } else {
        Toast.fire({
            type: 'error',
            title: '<h4>Error !</h4>'
        });
    }
}

function load_all_paramCombo(attr_id, callBack) {
    var cbo = '';
    //    $.ajax({
    //        type: "GET",
    //        headers: {
    //            "Authorization": "Bearer " + $('meta[name=api-token]').attr("content"),
    //            "Accept": "application/json"
    //        },
    //        url: "/api/survey/mapping/parameters/attribute/" + attr_id,
    //        cache: false,
    //        success: function (result) {
    //            if (result.length == 0) {
    //                cbo += '<option>-No Data Available-</option>';
    //            } else {
    //                $.each(result, function (index, row) {
    //                    cbo += '<option value="' + row.id + '">' + row.name + '</option>';
    //                });
    //            }
    //            $('.avl_param_cmb').html(cbo);
    //            if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
    //                callBack();
    //            }
    //        }
    //    });
    //JAKE STR
    ajaxRequest("GET", "/api/survey/mapping/parameters/attribute/" + attr_id, null, function (result) {
        if (result.length == 0) {
            cbo += '<option>-No Data Available-</option>';
        } else {
            $.each(result, function (index, row) {
                cbo += '<option value="' + row.id + '">' + row.name + '</option>';
            });
        }
        $('.avl_param_cmb').html(cbo);
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack();
        }
    });
    //JAKE END
}


function saveMappingValues(option, attribute_value, param_value, callBack) {
    var url = '';
    url = "/api/survey/mapping/create";
    let data = {"option": option, "attribute_value": attribute_value, "param_value": param_value};

    ajaxRequest('POST', url, data, function (response) {
        show_mesege(response);
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack(response);
        }
    });

}


function loadMappedServeyDetails(attr_id, callBack) {
    let nxt_ttl_no = 0;
    var tbl = '';
    //    $.ajax({
    //        type: "GET",
    //        headers: {
    //            "Authorization": "Bearer " + $('meta[name=api-token]').attr("content"),
    //            "Accept": "application/json"
    //        },
    //        url: "/api/survey/mapping/mapped/attribute/" + attr_id,
    //        cache: false,
    //        success: function (result) {
    //            $.each(result, function (index, row) {
    //                nxt_ttl_no = (isNaN(parseInt(row.title_no)) ? 0 : parseInt(row.title_no));
    //                tbl += '<tr><td>' + row.title_name + '</td><td>' + row.attr_name + '</td><td>' + row.value_name + '</td><td><button type="button"  value="' + row.id + '" class="btn btn-danger mappingDelete">Delete</button></td></tr>';
    //            });
    //            $('#main_ttl_no').val(nxt_ttl_no + 1);
    //            $('#main_title_table tbody').html(tbl);
    //            if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
    //                callBack();
    //            }
    //        }
    //    });
    //JAKE STR
    ajaxRequest("GET", "/api/survey/mapping/mapped/attribute/" + attr_id, null, function (result) {
        $.each(result, function (index, row) {
            nxt_ttl_no = (isNaN(parseInt(row.title_no)) ? 0 : parseInt(row.title_no));
            tbl += '<tr><td>'+ ++index +'</td><td>' + row.title_name + '</td><td>' + row.attr_name + '</td><td>' + row.value_name + '</td><td><button type="button"  value="' + row.id + '" class="btn btn-danger mappingDelete">Delete</button></td></tr>';
        });
        $('#main_ttl_no').val(nxt_ttl_no + 1);
        $('#main_title_table tbody').html(tbl);
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack();
        }
    });
    //JAKE END
}


function surveyMappingDelete(del_id, callBack) {
    if (!confirm('Are You Sure You Want To Delete This Record?')) {
        return false;
    }

    var url = "api/survey/mapping/delete/";

    //JAKE STR
    ajaxRequest("DELETE", url + del_id, null, function (result) {
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack(result);
        }
    });
    //JAKE END 
}


function survey_name_combo(callBack) {
    var cbo = '';

    //JAKE STR
    ajaxRequest("GET", "/api/survey/name", null, function (result) {
        $.each(result, function (index, row) {
            cbo += '<option value="' + row.id + '" data-ses_status="' + row.session_status + '">' + row.name + '</option>';
        });
        $('.surveyNameCmb').html(cbo);
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack();
        }
    });
    //JAKE END
}

$(document).on('click', '.down', function () {
    var row = $(this).parents("tr:first");
    row.insertAfter(row.next());
});
$(document).on('click', '.up', function () {
    var row = $(this).parents("tr:first");
    row.insertBefore(row.prev());
});

function change_existing_order(rawid, order, callBack) {
    url = "/api/survey/main/arrange/id/" + rawid;
    let data = {"order": order};

    ajaxRequest("PUT", url, data, function (result) {
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack(result);
        }
    });
}

function change_existing_order_title(rawid, order, callBack) {
    url = "/api/survey/title/arrange/id/" + rawid;
    let data = {"order": order};

    ajaxRequest("PUT", url, data, function (result) {
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack(result);
        }
    });
}
function change_existing_order_attr(rawid, order, callBack) {
    url = "/api/survey/attribute/arrange/id/" + rawid;
    let data = {"order": order};

    ajaxRequest("PUT", url, data, function (result) {
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack(result);
        }
    });
}
//#Get all cat combo
function get_category_combo(id, sur_id, callBack) {
    var url = '';
    if (!id) {
        id = 0;
    }
    url = "/api/survey/category/by_parent/id/" + id + "/survey/id/" + sur_id;
    //JAKE STR
    ajaxRequest("GET", url, null, function (result) {
        var tbl = '';
        $.each(result, function (index, value) {
            tbl += '<option data-goback="0" value="' + value.id + '">' + value.cat_key + '</option>';
        });
        $('#patent_combo').html(tbl);
        if (typeof callBack !== 'undefined' && callBack != null && typeof callBack === "function") {
            callBack(result);
        }
    });
    //JAKE END 
}

