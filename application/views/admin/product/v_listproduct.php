    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Danh sách sản phẩm</h3>
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
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" style="width: 204px; font-weight: bold; text-align: center">Mô tả
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" style="width: 44px; font-weight: bold; text-align: center">Đơn giá
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" style="width: 88px; font-weight: bold; text-align: center" aria-sort="ascending">Lượt xem</th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" style="width: 92px; font-weight: bold; text-align: center">Ngày tạo
                            </th>
                            </tr>
                    </thead>
                    <tbody>
                    <?php $count = 0; ?>
                    <?php foreach ($list as $key => $value): ?>
                        
                   
                        <tr role="row" class="odd">
                            <td class=""><?= $value['ten_san_pham'] ?></td>
                            <td class=""><img width="120" height="120" src="<?= base_url() ?>uploads/<?= $value['hinh'] ?>"></td>
                            <td class=""><?= $value['ten_loai'] ?></td>
                            <td class=""><?= $value['mo_ta_tom_tat'] ?></td>
                            <td class=""><?= $value['don_gia'] ?></td>
                            <td class="sorting_1"><?= $value['so_lan_xem'] ?></td>
                            <td class="sorting_1"><?= $value['ngay_tao'] ?></td>
                        </tr>
                    <?php $count++; ?>
                     <?php endforeach ?>

                    </tbody>

                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-5">
            <div class="dataTables_info" id="zero_config_info" role="status" aria-live="polite">Showing 1 to 10 of <?= $count ?> products</div>
            </div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="zero_config_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="zero_config_previous"><a href="#" aria-controls="zero_config" data-dt-idx="0" tabindex="0" class="page-link"><</a></li>
                <li class="paginate_button page-item active">
                    <a href="#" aria-controls="zero_config" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                </li>
                <li class="paginate_button page-item ">
                    <a href="#" aria-controls="zero_config" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                </li>
                <li class="paginate_button page-item ">
                    <a href="#" aria-controls="zero_config" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                </li>
                <li class="paginate_button page-item ">
                    <a href="#" aria-controls="zero_config" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                </li>
                <li class="paginate_button page-item ">
                    <a href="#" aria-controls="zero_config" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item next" id="zero_config_next"><a href="#" aria-controls="zero_config" data-dt-idx="7" tabindex="0" class="page-link">></a></li></ul></div></div></div></div>
            </div>

        </div>
    </div>