
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Danh sách sản phẩm</h3>
            <button class="btn btn-danger" data-toggle="modal" data-target="#addProduct">Thêm sản phẩm</button>
            <div class="table-responsive">
                <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="zero_config_length">
                            </div>
                        </div>

                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12">
                        <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="zero_config_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" style="width: 124px; font-weight: bold; text-align: center">Tên</th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" style="width: 144px; font-weight: bold; text-align: center">Hình ảnh</th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" style="width: 144px; font-weight: bold; text-align: center">Loại</th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" style="width: 144px; font-weight: bold; text-align: center">Mô tả
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" style="width: 44px; font-weight: bold; text-align: center">Đơn giá
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" style="width: 88px; font-weight: bold; text-align: center" aria-sort="ascending">Lượt xem</th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" style="width: 92px; font-weight: bold; text-align: center">Ngày tạo
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="2" style="width: 10px; font-weight: bold; text-align: center">Quản lý
                          </th>
                            </tr>
                    </thead>
                    <tbody id="table_product">


                    </tbody>

                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-5">
           <!--  <div class="dataTables_info" id="zero_config_info" role="status" aria-live="polite">Showing <?= $page ?> to <?= $num_page ?> of <?= $count ?> products</div>
           </div> -->
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="zero_config_paginate">
                  <!--   ajax pagination -->
                </div>
            </div>
            </div></div>

            </div>

            </div>
        </div>
    </div>
    <?php include('v_editproduct_ajax.php') ?>
    <?php include('v_addproduct.php') ?>



