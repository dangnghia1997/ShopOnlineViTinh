<!-- <div class="card">
    <div class="card-body">
        <h5 class="card-title">Form Elements</h5>
        <div class="row mb-3 align-items-center">
            <div class="col-lg-3 col-md-12 text-right">
                <span>Tên</span>
            </div>
            <div class="col-lg-8 col-md-12">
                <input type="text" data-toggle="tooltip" title="A Tooltip for the input !" class="form-control" id="validationDefault05" placeholder="Nhập tên sản phẩm" required name="ten_san_pham">
            </div>
        </div>
        <div class="form-group row mb-3 align-items-center">
            <label class="col-lg-3 col-md-12 text-right">Hình ảnh</label>
            <div class="col-lg-8 col-md-12">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" required="" name="hinh">
                    <label class="custom-file-label" for="validatedCustomFile">Chọn hình ảnh...</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
            </div>
        </div>

        <div class="row mb-3 align-items-center">
            <div class="col-lg-3 col-md-12 text-right">
                <span>Chọn loại sản phẩm</span>
            </div>
            <div class="col-lg-8 col-md-12">
                <select>
                    <option>1</option>
                </select>
            </div>
        </div>
        
        <div class="row mb-3 align-items-center">
            <div class="col-lg-3 col-md-12 text-right">
                <span>Type Ahead Input</span>
            </div>
            <div class="col-lg-8 col-md-12">
                <input type="text" class="form-control" placeholder="Type here for auto complete.." required>
            </div>
        </div>
        <div class="row mb-3 align-items-center">
            <div class="col-lg-3 col-md-12 text-right">
                <span>Prepended Input</span>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">#</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Prepend" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
        <div class="row mb-3 align-items-center">
            <div class="col-lg-3 col-md-12 text-right">
                <span>Giá tiền</span>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="5.000" aria-label="Recipient 's username" aria-describedby="basic-addon2" name="don_gia">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">đ</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3 align-items-center">
            <div class="col-lg-3 col-md-12 text-right">
                <span class="text-success">Input with Sccess</span>
            </div>
            <div class="col-lg-8 col-md-12">
                <input type="text" class="form-control is-valid" id="validationServer01">
                <div class="valid-feedback">
                    Woohoo!
                </div>
            </div>
        </div>
        <div class="row mb-3 align-items-center">
            <div class="col-lg-3 col-md-12 text-right">
                <span class="text-danger">Input with Error</span>
            </div>
            <div class="col-lg-8 col-md-12">
                <input type="text" class="form-control is-invalid" id="validationServer01">
                <div class="invalid-feedback">
                    Please correct the error
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Form Elements</h5>
                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Single Select</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="3">Select</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            
                                        </select><span class="select2 select2-container select2-container--default select2-container--focus" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-7ejd-container"><span class="select2-selection__rendered" id="select2-7ejd-container" role="textbox" aria-readonly="true" title="Select">Select</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-3">Radio Buttons</label>
                                    <div class="col-md-9">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation1" name="radio-stacked" required="">
                                            <label class="custom-control-label" for="customControlValidation1">First One</label>
                                        </div>
                                         <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required="">
                                            <label class="custom-control-label" for="customControlValidation2">Second One</label>
                                        </div>
                                         <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required="">
                                            <label class="custom-control-label" for="customControlValidation3">Third One</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Checkboxes</label>
                                    <div class="col-md-9">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing1">
                                            <label class="custom-control-label" for="customControlAutosizing1">First One</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
                                            <label class="custom-control-label" for="customControlAutosizing2">Second One</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing3">
                                            <label class="custom-control-label" for="customControlAutosizing3">Third One</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">File Upload</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="validatedCustomFile" required="">
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3" for="disabledTextInput">Disabled input</label>
                                    <div class="col-md-9">
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled="">
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>