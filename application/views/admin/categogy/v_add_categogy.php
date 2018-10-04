<div class="card">
                            <form class="form-horizontal" method="post"  enctype = "multipart/form-data">
                                <?php echo validation_errors()?>
								<div class="card-body">
                                    <h4 class="card-title">Thêm Loại Sản Phẩm</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên loại </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="ten_loai" value="<?php echo set_value('ten_loai')?>" class="form-control" id="fname" placeholder="Tên loại .. " required>
                                        </div>
                                    </div>
                                    <div class="row mb-3 align-items-center">
										<div class="col-lg-3 col-md-12 text-right">
											<span>Thuộc</span>
										</div>
										<div class="col-lg-8 col-md-12">
											<select class="select2 form-control custom-select select2-hidden-accessible form-control" name="ma_loai_cha">
												<option value="-1">----Chọn----</option>
											<?php
											foreach($list_parent_cate as $l)
											{
											?>
												<option value="<?php echo $l->ma_loai?>"><?php echo $l->ten_loai?></option>
												
											<?php
											}
											?>																	
											</select>
										</div>
                					</div>
                                    
                                    <div class="form-group row">
										<label class="col-sm-3 text-right control-label col-form-label">Hình ảnh</label>
										<div class="col-md-9">
											<div class="custom-file">
												<input type="file" name="hinh_anh" value="<?php echo set_value('hinh_anh')?>" class="custom-file-input" id="validatedCustomFile" required="">
												<label class="custom-file-label" for="validatedCustomFile">Chọn ảnh ...</label>
												<div class="invalid-feedback">Example invalid custom file feedback</div>
											</div>
										</div>
                                	</div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Mô tả </label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name = "mo_ta_them_loai" ></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">THÊM</button>
                                    </div>
                                </div>
                            </form>
					
                        </div>
