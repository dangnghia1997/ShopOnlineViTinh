function ajax_category_add($id_parent){
    $.ajax({
        url: baseURL+'product/ajax_select_category/'+$id_parent,
        type: 'GET',
        dataType: 'text'
    })
    .done(function(data) {
        $("#ajax_add_categogy").removeClass("hidden");
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



 //------------------------------------------------------------------
 // Add Category ajax
$(document).ready(function() {

  $('#form_add_cate').on("submit",(function(event) {
    /* Act on the event */
      event.preventDefault();

      var form = new FormData();
      var $hinh_anh = $('#hinh_anh').get(0).files[0];
      $fiels =$('#form_add_cate').serializeArray();
      form.append('anh',$hinh_anh);
      $.each($fiels,function(index,fiel){
        form.append(fiel.name,fiel.value);
      });


      $.ajax({
        url: baseURL + 'categogy/test_upload' ,
        data: form,
        contentType: false,
        processData: false,
        type: 'POST',
        success: function(data){
            console.log(data);
        },
        error: function()
        {
          alert('loi upload');
        }
      });

  }));


});
