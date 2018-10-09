function ajax_category_add($id_parent){
    $.ajax({
        url: baseURL+'product/ajax_select_category/'+$id_parent,
        type: 'GET',
        dataType: 'text'
    })
    .done(function(data) {
        $("#add_row_child_cate").removeClass("hidden");
        $("#add_row_child_cate").html(data);
    })
    .fail(function() {
        console.log("error");
    })
    
}

function ajax_category_edit($id_parent){
    $.ajax({
        url: baseURL+'product/ajax_select_category/'+$id_parent,
        type: 'GET',
        dataType: 'text'
    })
    .done(function(data) {
        $("#row_child_cate").removeClass("hidden");
        $("#row_child_cate").html(data);
    })
    .fail(function() {
        console.log("error");
    })
    
}

 $(document).ready(function() {
    
    $("#add_parent_cate").change(function(event) {
      /* Act on the event */
      ajax_category_add(this.value);

    });

    $("#parent_cate").change(function(event) {
      /* Act on the event */
      ajax_category_edit(this.value);

    });

 });

