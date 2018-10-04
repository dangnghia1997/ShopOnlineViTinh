
jQuery(document).ready(function($) {

	 $(document).on("click", "a#edit-product", function(event){
		/* Act on the event */
		event.preventDefault();
		$(".edit-ajax").fadeToggle();
		var $id = $(this).attr("data-id");
		$.ajax({
			url: baseURL+'/product/ajax_edit',
			method: 'POST',
			dataType: 'json',
			data: {
				id_product: $id
			},
		})
		.done(function(output) {
			$("#ten_san_pham").val(output.ten_san_pham),
			$("img#hinh").attr('src', baseURL+'assets/images/'+output.hinh),
			$("#mo_ta_tom_tat").html(output.mo_ta_tom_tat),
			$(".hidden").removeClass("hidden"),
			$("#parent_cate").html(output.htmlParent),
			$("#child_cate").html(output.htmlChild),
			$("#don_gia").val(output.don_gia)
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});
});