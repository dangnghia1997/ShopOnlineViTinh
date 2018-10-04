function ajax_category($id_parent){
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
    
    $("#parent_cate").change(function(event) {
      /* Act on the event */
      ajax_category(this.value);

    });

 });

