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

function filterFunction(that, event) {
    let container, input, filter, li, input_val;
    container = $(that).closest(".searchable");
    input_val = container.find("input").val().toUpperCase();
    if (["ArrowDown", "ArrowUp", "Enter"].indexOf(event.key) != -1) {
        keyControl(event, container);
    } else {
        li = container.find("ul li");
        li.each(function(i, obj) {
            if ($(this).text().toUpperCase().indexOf(input_val) > -1) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
        container.find("ul li").removeClass("selected");
        setTimeout(function() {
            container.find("ul li:visible").first().addClass("selected");
        }, 100);
    }
}

function keyControl(e, container) {
    if (e.key == "ArrowDown") {
        if (container.find("ul li").hasClass("selected")) {
            if (
                container
                .find("ul li:visible")
                .index(container.find("ul li.selected")) +
                1 <
                container.find("ul li:visible").length
            ) {
                container
                    .find("ul li.selected")
                    .removeClass("selected")
                    .nextAll()
                    .not('[style*="display: none"]')
                    .first()
                    .addClass("selected");
            }
        } else {
            container.find("ul li:first-child").addClass("selected");
        }
    } else if (e.key == "ArrowUp") {
        if (
            container.find("ul li:visible").index(container.find("ul li.selected")) >
            0
        ) {
            container
                .find("ul li.selected")
                .removeClass("selected")
                .prevAll()
                .not('[style*="display: none"]')
                .first()
                .addClass("selected");
        }
    } else if (e.key == "Enter") {
        container.find("input").val(container.find("ul li.selected").text()).blur();
        onSelect(container.find("ul li.selected").text());
    }
}

function onSelect(val) {}
$(".searchable input").focus(function() {
    $(this).closest(".searchable").find("ul").show();
    $(this).closest(".searchable").find("ul li").show();
    $('.submit__btn').css({
        "display": "block"
    })
    $('.close__btn').css({
        "display": "block"
    })
    $('.search__btn').css({
        'display': "none"
    })
});
$(".searchable input").blur(function() {
    let that = this;
    setTimeout(function() {
        $(that).closest(".searchable").find("ul").hide();
        $('.search__btn').css({
            'display': "block"
        })
        $('.submit__btn').css({
            "display": "none"
        })
        $('.close__btn').css({
            "display": "none"
        })
    }, 300);
});
$('.search__btn').on("click", function() {
    $(this).closest(".searchable").find("input").val($(this).text()).blur();
    onSelect($(this).text());
});
$(document).on("click", ".searchable ul li", function() {
    $(this).closest(".searchable").find("input").val($(this).text()).blur();
    onSelect($(this).text());
});
$(".searchable ul li").hover(function() {
    $(this).closest(".searchable").find("ul li.selected").removeClass("selected");
    $(this).addClass("selected");
});
$('.close__btn').on('click', function() {
    $('.searchable').find("input").val($(this).text()).blur()
    $(this).css({
        "display": "none"
    })
})



