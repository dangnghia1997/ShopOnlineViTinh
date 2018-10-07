
jQuery(document).ready(function($) {
	//binding data product to form
	 $(document).on("click", "a#edit-product", function(event){
		/* Act on the event */
		event.preventDefault();
		/*$(".edit-ajax").fadeToggle();*/
		var $id = $(this).attr("data-id");
		var $page = $(this).attr("data-page");
		$.ajax({
			url: baseURL+'/product/ajax_edit',
			method: 'POST',
			dataType: 'json',
			data: {
				id_product: $id,
				page_product: $page
			},
		})
		.done(function(output) {
			$("#ma_san_pham").val(output.ma_san_pham),
			$("#ten_san_pham").val(output.ten_san_pham),
			$("img#hinh").attr('src', baseURL+'assets/images/'+output.hinh),
			$("#mo_ta_tom_tat").html(output.mo_ta_tom_tat),
			$(".hidden").removeClass("hidden"),
			$("#parent_cate").html(output.htmlParent),
			$("#child_cate").html(output.htmlChild),
			$("#don_gia").val(output.don_gia),
			$("#so_trang").val(output.so_trang)
		});
	});

	 //update data
	 $(document).on("click", "input#edit", function(event){
	 	$.ajax({
	 		url: baseURL+'/product/ajax_update',
	 		type: 'POST',
	 		dataType: 'json',
	 		data: {
	 			ma_san_pham: $("#ma_san_pham").val(),
	 			so_trang: $("#so_trang").val(),
	 			ten_san_pham: $("#ten_san_pham").val(),
	 			don_gia: $("#don_gia").val(),
	 			ma_loai_cha: $("#parent_cate").val(),
	 			ma_loai: $("#child_cate").val(),
	 			mo_ta_tom_tat: $("#mo_ta_tom_tat").val()
	 		},
	 	})
	 	.done(function(so_trang) {
	 		console.log("update thanh cong");
	 		$("#editProduct").modal('hide');

	 		ajax_pagination_product(so_trang);
	 	})
	 	.fail(function() {
	 		console.log("error");
	 	})
	 	.always(function() {
	 		console.log("complete");
	 	});
	 	
	});


});