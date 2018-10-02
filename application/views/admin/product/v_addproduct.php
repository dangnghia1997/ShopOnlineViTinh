    <style type="text/css">
        span.error p{width: auto; padding: 0 0 0 120px; color: red; font-size: 90%; margin-left:270px; margin-bottom: -5px;margin-top: 10px;}
        .row.hidden {display: block;}
    </style>
     <form action="../product/add_product" method="post" enctype="multipart/form-data">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Thêm sản phẩm</h5>

                <div class="row mb-3 align-items-center">
                    <div class="col-lg-3 col-md-12 text-right">
                        <span>Tên</span>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <input type="text" data-toggle="tooltip" class="form-control" id="validationDefault05" placeholder="Nhập tên sản phẩm" name="ten_san_pham" value="">
                        
                    </div>
                    <span class="error"><?php echo form_error('ten_san_pham'); ?></span>
                    
                </div>
                <div class="form-group row mb-3 align-items-center">
                    <label class="col-lg-3 col-md-12 text-right">Hình ảnh</label>
                    <div class="col-lg-8 col-md-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="hinh">
                            <label class="custom-file-label" for="validatedCustomFile">Chọn hình ảnh...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>
                    <span class="error"><?php echo form_error('hinh'); ?></span>
                </div>

                <div class="row mb-3 align-items-center">
                    <div class="col-lg-3 col-md-12 text-right">
                        <span>Danh mục</span>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <select class="select2 form-control custom-select select2-hidden-accessible form-control" id="parent_cate">
                            <option disabled selected>---Chọn danh mục sản phẩm---</option>
                            <?php foreach ($list as $value): ?>
                                <option value="<?= $value['ma_loai'] ?>"><?= $value['ten_loai'] ?></option>
                            <?php endforeach ?>
                            
                        </select>
                    </div>
                </div>
                
                <div class="row mb-3 align-items-center hidden" id="row_child_cate">
                   <!-- <div class="col-lg-3 col-md-12 text-right">
                       <span>Loại sản phẩm</span>
                   </div>
                   <div class="col-lg-8 col-md-12">
                       <select class="select2 form-control custom-select select2-hidden-accessible form-control" name="ma_loai" id="child_cate">
                           <option disabled selected>---Chọn loại sản phẩm---</option>
                           <option>A</option>
                           <option>B</option>
                           
                       </select>
                   </div> -->
                </div>

                <div class="row mb-3 align-items-center">
                    <div class="col-lg-3 col-md-12 text-right">
                        <span>Giá tiền</span>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="5.000" aria-describedby="basic-addon2" name="don_gia">
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
                        <textarea class="form-control" name="mo_ta_tom_tat"></textarea>
                    </div>
                </div>

            </div>

            <div class="border-top" style="margin: auto">
               <div class="card-body">
                   <input type="submit" class="btn btn-success" value="Thêm sản phẩm" name="add"></input>
               </div>
           </div>
        </div> 

   </form>

