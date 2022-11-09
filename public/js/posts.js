var page_number = 1;
var records_per_page = 5;
var normal_posts = '';
var trending_posts = '';

var val;
var post_title;
var location;
var price;
var millage;
var main_image;
var l;


function load_posts(method, url, data, id) {

    $(id).html('');
    ajaxRequest(method, url, data, function (resp) {
        // l = 20;
        // var start_index = (page_number != 1) ? (page_number - 1) + records_per_page : page_number;
        // var end_index = (end_index >= l) ? l - 1 : start_index + (records_per_page - 1);
        // var total_page = Math.ceil(l / records_per_page);
        // var buttons_text = '<a href="#">&lt;</a>';
        // var active = '';
        
        // var posts_data = resp;

        if (resp == '') {
            html += '<div class="col-12"><span class="text-center w-100"><h1><b>No Results Found</b></h1></span></div>';
        } else {

            if (id != '#trends') {

                // for (var i = 0; i <= total_page; i++) {
                //     if (i == 1) {
                //         active = 'active';
                //     } else {
                //         active = '';
                //     }
                //     buttons_text = buttons_text + '<a href="#" class="' + active + '" id="page_index' + i + '">' + (i + 1) + '</a>'
                // }

                // buttons_text += '<a href="#" onClick="javascript: $.fn.nextPage();">&gt;</a>';
                // $(".pagination-buttons").text('');
                // $(".pagination-buttons").append(buttons_text);

                // for (var i = start_index; i <= end_index; i++) {
                $.each(resp.data, function (key, val) {
                    post_title = (val.post_title != null) ? val.post_title : 'N/A';
                    // location = (post_data[i].location != null) ? post_data[i].location : 'N/A';
                    price = (val.price != null) ? val.price : 'N/A';
                    millage = (val.vehicle != null) ? val.vehicle.millage : 'N/A';
                    main_image = val.main_image;

                    normal_posts += '<div class="col-12 col-md-2">';
                    normal_posts += '<a href="{{ asset("/get_post_profile/id/") }}/' + val.id + '">';
                    normal_posts += '<div class="card card-white" style="height: 371px">';
                    normal_posts += '<img src="' + main_image + '" alt="post image" style="width:100%">';
                    normal_posts += '<div class="card-body">';
                    normal_posts += '<div class="text-lg">' + post_title + '</div>';
                    normal_posts += '<p> <b>Price:</b>' + price + '</p>';
                    normal_posts += '<p><b>Location: </b>' + val.location + '</p>';
                    normal_posts += '<p><b>Millage: </b>' + millage + '</p>';
                    normal_posts += '</div>';
                    normal_posts += '<div class="card-footer">';
                    normal_posts += '</div>';
                    normal_posts += '</div>';
                    normal_posts += '</a>';
                    normal_posts += '</div>';
                });
                // }

            } else {
                $.each(resp.data, function (key, val) {

                    post_title = (val.post_title != null) ? val.post_title : 'N/A';
                    // // location = (val.location != null) ? val.location : 'N/A';
                    // price = (val.price != null) ? val.price : 'N/A';
                    // millage = (val.vehicle != null) ? val.vehicle.millage : 'N/A';
                    main_image = val.main_image;

                    trending_posts += '<div class="col-12 col-md-2">';
                    trending_posts += '<a href="{{ asset("/get_post_profile/id/") }}/' + val.id + '">';
                    trending_posts += '<div class="card card-white" style="height: 250px">';
                    trending_posts += '<img src="' + main_image + '" alt="post image" style="width:100%">';
                    trending_posts += '<div class="card-body">';
                    trending_posts += '<div class="text-lg">' + post_title + '</div>';
                    trending_posts += '</div>';
                    trending_posts += '<div class="card-footer">';
                    trending_posts += '</div>';
                    trending_posts += '</div>';
                    trending_posts += '</a>';
                    trending_posts += '</div>';

                });
            }
        }
        (id == '#adds') ? $(id).html(normal_posts) : $(id).html(trending_posts);
        // $('#page_index').removeClass('active');
        // $('#page_index' + page_number).addClass('active');

    });
}
