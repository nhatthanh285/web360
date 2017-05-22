<script>

</script>
<div class="row">
    <form class="form-horizontal">
        <fieldset>
            <!-- Form Name -->
            <legend class="dangtin">Hãy để chúng tôi giúp bạn !</legend>

            <div class="form-group">
                <label class="col-md-4 control-label" for="threshold">Chọn danh mục đăng tin</label>
                <div class="col-md-4">
                    <select id="threshold" name="threshold" class="form-control">
                        <option value="1">Bất động sản mua</option>
                        <option value="2">Bất động sản bán</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="threshold">Bạn là</label>
                <div class="col-md-4">
                    <select id="threshold" name="threshold" class="form-control">
                        @foreach($type_of_customer as $toc)
                            <option value="{{$toc->id}}">{{$toc->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="threshold">Chọn tỉnh thành</label>
                <div class="col-md-4">
                    <select id="city" name="city" class="form-control" onchange="function () {

                            }">
                        @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="threshold">Chọn Quận/Huyên</label>
                <div class="col-md-4">
                    <select id="threshold" name="threshold" class="form-control">
                        <option value="1">Ba Đình</option>
                        <option value="2">Hồ Gươm</option>
                        <option value="2">Hoàng Mai</option>
                    </select>
                </div>
            </div>
            {{--jquery file upload--}}
            <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST"
                  enctype="multipart/form-data">
                <!-- Redirect browsers with JavaScript disabled to the origin page -->
                <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/">
                </noscript>
                <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                <div class="row fileupload-buttonbar">
                    <div class="col-lg-7">
                        <!-- The fileinput-button span is used to style the file input field as button -->
                        <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add files...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                        <button type="submit" class="btn btn-primary start">
                            <i class="glyphicon glyphicon-upload"></i>
                            <span>Start upload</span>
                        </button>
                        <button type="reset" class="btn btn-warning cancel">
                            <i class="glyphicon glyphicon-ban-circle"></i>
                            <span>Cancel upload</span>
                        </button>
                        <button type="button" class="btn btn-danger delete">
                            <i class="glyphicon glyphicon-trash"></i>
                            <span>Delete</span>
                        </button>
                        <input type="checkbox" class="toggle">
                        <!-- The global file processing state -->
                        <span class="fileupload-process"></span>
                    </div>
                    <!-- The global progress state -->
                    <div class="col-lg-5 fileupload-progress fade">
                        <!-- The global progress bar -->
                        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0"
                             aria-valuemax="100">
                            <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                        </div>
                        <!-- The extended global progress state -->
                        <div class="progress-extended">&nbsp;</div>
                    </div>
                </div>
                <!-- The table listing the files available for upload/download -->
                <table role="presentation" class="table table-striped">
                    <tbody class="files"></tbody>
                </table>
            </form>
            {{--end jquery--}}
            <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
                <div class="slides"></div>
                <h3 class="title"></h3>
                <a class="prev">‹</a>
                <a class="next">›</a>
                <a class="close">×</a>
                <a class="play-pause"></a>
                <ol class="indicator"></ol>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Giá tiền</label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"
                           required="">
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="threshold">Tình Trạng</label>
                <div class="col-md-4">
                    <select id="threshold" name="threshold" class="form-control">
                        <option value="1">Đã sử dụng</option>
                        <option value="2">Mới</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="threshold">Ảnh giới thiệu: </label>
                <div class="col-md-8">


                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Tiêu đề bài viết</label>
                <div class="col-md-6">
                    <input id="textinput" name="textinput" type="text" class="form-control input-md" required="">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Mô tả bài viết</label>
                <div class="col-md-6">
                    <textarea id="congratulation-text"></textarea>
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Địa chỉ liên hệ</label>
                <div class="col-md-6">
                    <input id="textinput" name="textinput" type="text" class="form-control input-md" required="">
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Số điện thoại</label>
                <div class="col-md-6">
                    <input id="textinput" name="textinput" type="text" class="form-control input-md" required="">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Email</label>
                <div class="col-md-6">
                    <input id="textinput" name="textinput" type="text" class="form-control input-md" required="">
                </div>
            </div>


            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="submitButton"></label>
                <div class="col-md-8">
                    <button id="submitButton" name="submitButton" class="btn btn-success">Lưu</button>
                    <button id="cancel" name="cancel" class="btn btn-inverse">Hủy</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>