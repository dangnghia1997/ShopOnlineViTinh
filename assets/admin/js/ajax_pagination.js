function load_categogy_data(page, $id_parent, $limit)
//Viết By Nghĩa
{
    //console.log($('#limit').val());
    $.ajax({
        url: baseURL + "categogy/pagination/" + page,
        method: "POST",
        dataType: "json",
        data: {
            id_parent: $id_parent,
            limit: $limit
        },
        success: function(data) {
            $('#data_cate_child').html(data.data_cate_child);
            $('#pagination_link').html(data.pagination_link);
            $('#total').html(data.total);
            var $from = ((parseInt(page) - 1) * parseInt($limit)) + 1;
            $('#from').html($from);
            var $to = ($from + parseInt($limit) < parseInt(data.total) ? $from + (parseInt($limit) - 1) :
                parseInt(data.total));
            $('#to').html($to);
        },
        error: function(e) {
            console.log('Loi');
        }
    });

}


function ajax_pagination_product($page)
//Viết By Quốc
{
    $.ajax({
            url: baseURL + 'product/ajax_pagination/' + $page,
            type: 'GET',
            dataType: 'json',
        })
        .done(function(data) {
            /*console.log(data.htmlString);*/
            $("#table_product").html(data.htmlString);
            $("#zero_config_paginate").html(data.pagination);
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });

}


$(document).ready(function() {


    load_categogy_data(1, -1, 5);

    $(document).on("click", ".pagination li a.page-link1", function(event) {
        event.preventDefault();
        var page = $(this).data("ci-pagination-page");
        var $id_parent = $('#main_categogy').val();
        var $limit = $('#limit').val();
        load_categogy_data(page, $id_parent, $limit);
    });

    $('#main_categogy').change(function() {
        //console.log(" loai : "+ $(this).val());
        var $limit = $('#limit').val();
        $id_parent = $(this).val();
        load_categogy_data(1, $id_parent, $limit);
    });

    $('#limit').change(function() {
        $limit = $(this).val();
        $id_parent = $('#main_categogy').val();
        load_categogy_data(1, $id_parent, $limit);
    });

    ajax_pagination_product(1);
    $(document).on("click", ".pagination li a.page-link", function(event) {
        event.preventDefault();
        var page = $(this).data("ci-pagination-page");
        ajax_pagination_product(page);
    });

});