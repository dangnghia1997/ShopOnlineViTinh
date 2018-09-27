
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Danh sách loại sản phẩm</h5>
    <div class="table-responsive">
      <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="dataTables_length" id="zero_config_length">
              <label>Danh mục chính
                <select  id="main_categogy" name="zero_config_length" aria-controls="zero_config" class="form-control form-control-sm">
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
              </label>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="dataTables_length" id="zero_config_length">
              <label>Show
                <select name="zero_config_length" aria-controls="zero_config" class="form-control form-control-sm">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select>
                entries </label>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div id="zero_config_filter" class="dataTables_filter">
              <label>Search:
                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="zero_config">
              </label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="zero_config_info">
              <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 139px;">Tên Loại</th>
                  <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 230px;">Mô tả</th>
                  <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 104px;">Mã Loại Cha</th>
                </tr>
              </thead>
              <tbody id='data_cate_child'>
                  <?php
                  foreach($list_cate as $l)
                  {
                  ?>
                    <tr role="row" class="even">
                      <td class="sorting_1"><?php echo $l->ten_loai?></td>
                      <td><?php echo $l->mo_ta?></td>
                      <td><?php echo $l->ma_loai_cha?></td>
                    </tr>
                  <?php
                  }
                  ?>
              </tbody>
             <!-- <tfoot>
                <tr>
                  <th rowspan="1" colspan="1">Name</th>
                  <th rowspan="1" colspan="1">Position</th>
                  <th rowspan="1" colspan="1">Office</th>
                  <th rowspan="1" colspan="1">Age</th>
                  <th rowspan="1" colspan="1">Start date</th>
                  <th rowspan="1" colspan="1">Salary</th>
                </tr>
              </tfoot>-->
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-5">
            <div class="dataTables_info" id="zero_config_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
          </div>
          <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="zero_config_paginate">
              <ul class="pagination">
                <li class="paginate_button page-item previous disabled" id="zero_config_previous"><a href="#" aria-controls="zero_config" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                <li class="paginate_button page-item active"><a href="#" aria-controls="zero_config" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                <li class="paginate_button page-item next" id="zero_config_next"><a href="#" aria-controls="zero_config" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


