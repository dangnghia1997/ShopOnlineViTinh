<style type="text/css">
    .modal-content.edit-ajax {
        background: #ecf0f1;
        border: 1px solid #bdc3c77a;
        border-radius: 9px;
        box-shadow: 2px 2px #00000029;
    }
    span.error p{width: auto; padding: 0 0 0 120px; color: red; font-size: 90%; margin-left:270px; margin-bottom: -5px;margin-top: 10px;}
    .hidden {display: none;}
</style>

<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

  <!-- Modal -->
<form action="../product/add_product" method="post" enctype="multipart/form-data">
  <div class="modal fade" id="editProduct" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content edit-ajax">

        <div class="modal-body">

                <h5 class="card-title text-center">Sửa sản phẩm</h5>

                <div class="row mb-3 align-items-center">
                    <div class="col-lg-3 col-md-12 text-right">
                        <span>Tên</span>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <input type="text" data-toggle="tooltip" class="form-control" id="ten_san_pham" placeholder="Nhập tên sản phẩm" name="ten_san_pham" value="">
                        
                    </div>
                    <span class="error"><?php echo form_error('ten_san_pham'); ?></span>
                    
                </div>

                <input type="hidden" data-toggle="tooltip" class="form-control" id="so_trang" name="so_trang">

                <input type="hidden" data-toggle="tooltip" class="form-control" id="ma_san_pham" name="ma_san_pham">


                <div class="form-group row mb-3 align-items-center">
                    <label class="col-lg-3 col-md-12 text-right">Hình ảnh</label>
                    <div class="col-lg-8 col-md-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="hinh" name="hinh">
                            <label class="custom-file-label" for="validatedCustomFile">Chọn hình ảnh...</label>

                        </div>

                    </div>
                    <img src="" id="hinh" width="130" height="130" style="margin-left: 144px;margin-top: 10px;">
                    <span class="error"><?php echo form_error('hinh'); ?></span>
                </div>

                <div class="row mb-3 align-items-center hidden">
                    <div class="col-lg-3 col-md-12 text-right">
                        <span>Danh mục</span>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <select class="select2 form-control custom-select select2-hidden-accessible form-control" id="parent_cate">
                            
                        </select>
                    </div>
                </div>
                
                <div class="row mb-3 align-items-center hidden" id="row_child_cate">
                   <div class="col-lg-3 col-md-12 text-right">
                       <span>Loại sản phẩm</span>
                   </div>
                   <div class="col-lg-8 col-md-12">
                       <select class="select2 form-control custom-select select2-hidden-accessible form-control" name="ma_loai" id="child_cate">
                       </select>
                   </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <div class="col-lg-3 col-md-12 text-right">
                        <span>Giá tiền</span>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="5.000" aria-describedby="basic-addon2" name="don_gia" id="don_gia">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">đ</span>
                            </div>
                        </div>
                    </div>
                     <span class="error"><?php echo form_error('don_gia'); ?></span>
                </div>

                <div class="row mb-3 align-items-center">
                    <div class="col-lg-3 col-md-12 text-right">
                        <span>Mô tả tóm tắt</span>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <textarea class="form-control" name="mo_ta_tom_tat" id="mo_ta_tom_tat"></textarea>
                    </div>
                </div>

            </div>

            <div class="border-top" style="margin: auto">
               <div class="card-body">
                   <input type="button" class="btn btn-success" value="Sửa sản phẩm" id="edit" name="edit"></input>
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
</div>

