<form id='form_add_cate' action="" method="post" enctype="multipart/form-data">
  <div class="modal fade" id="addCategory" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content edit-ajax">

        <div class="modal-body">

                <h5 class="card-title text-center">Thêm loại sản phẩm</h5>

				<?php echo validation_errors()?>
                <div class="row mb-3 align-items-center">
                    <div class="col-lg-3 col-md-12 text-right">
                        <span>Tên loại</span>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <input type="text" data-toggle="tooltip" class="form-control" id="ten_loai" placeholder="Nhập tên sản phẩm" name="ten_loai" value="">
                        
                    </div>
                    
                </div>

                <input type="hidden" data-toggle="tooltip" class="form-control" id="so_trang" name="so_trang">

                <input type="hidden" data-toggle="tooltip" class="form-control" id="ma_san_pham" name="ma_san_pham">


                <div class="form-group row mb-3 align-items-center">
                    <label class="col-lg-3 col-md-12 text-right">Hình ảnh</label>
                    <div class="col-lg-8 col-md-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="hinh_anh" name="hinh_anh">
                            <label class="custom-file-label" for="validatedCustomFile">Chọn hình ảnh...</label>

                        </div>

                    </div>
                    
                    
                </div>
				<div class="form-group row mb-3 align-items-center">
					<div class="col-lg-3 col-md-12"></div>
					<div class="col-lg-8 col-md-12">
						<img src="<?php echo base_url()."assets/admin/images/background/no-image.png"?>" id="hinh" alt="no Image" width="200" height="200">
					</div>
				</div>
				

                <div class="row mb-3 align-items-center">
                    <div class="col-lg-3 col-md-12 text-right">
                        <span>Thuộc</span>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <select class="select2 form-control custom-select select2-hidden-accessible form-control" name="ma_loai_cha" id="ma_loai_cha">
						<option value="-1" >Tất cả</option>
						<?php
						foreach($main_categogy as $l)
						{
						?>
						<option value="<?php echo $l->ma_loai?>"> <?php echo $l->ten_loai?> </option>
						<?php
						}
						?>
                        </select>
                    </div>
                </div>
                
                

                <div class="row mb-3 align-items-center">
                    <div class="col-lg-3 col-md-12 text-right">
                        <span>Mô tả</span>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <textarea class="form-control" name="mo_ta_them_loai" id="mo_ta_them_loai">
						</textarea>
                    </div>
                </div>

            </div>

            <div class="border-top" style="margin: auto">
               <div class="card-body">
                   <input type="submit" onclick="ajax_add_categogy()" class="btn btn-success" value="Thêm" id="edit" name="edit"></input>
                   <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
               </div>
           </div>
<!--         </div> 
    </div> -->


        </div> <!-- end body -->

      </div> 
      
    </div>
  </div>
  </form>
