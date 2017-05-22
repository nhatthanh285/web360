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
                    <!--dropzone.js-->
                    <div id="actions" class="row">

                        <div class="col-lg-7">
                            <!-- The fileinput-button span is used to style the file input field as button -->
                            <span class="btn btn-success fileinput-button">
							<span>Thêm file</span>
						</span>
                            <button type="submit" class="btn btn-primary start">
                                <span>Tải lên</span>
                            </button>
                            <button type="reset" class="btn btn-warning cancel">
                                <span>Hủy</span>
                            </button>
                        </div>

                        <div class="col-lg-5">
                            <!-- The global file processing state -->
                            <span class="fileupload-process">
						  <div id="total-progress" class="progress progress-striped active" role="progressbar"
                               aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
							  <div class="progress-bar progress-bar-success" style="width:0%;"
                                   data-dz-uploadprogress></div>
						  </div>
						</span>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <div class="jumbotron how-to-create" >

                                <h3>Images <span id="photoCounter"></span></h3>
                                <br />

                                {!! Form::open(['url' => route('upload-post'), 'class' => 'dropzone', 'files'=>true, 'id'=>'real-dropzone']) !!}

                                <div class="dz-message">

                                </div>

                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>

                                <div class="dropzone-previews" id="dropzonePreview"></div>

                                <h4 style="text-align: center;color:#428bca;">Drop images in this area  <span class="glyphicon glyphicon-hand-down"></span></h4>

                                {!! Form::close() !!}

                            </div>
                            <div class="jumbotron how-to-create">
                                <ul>
                                    <li>Images are uploaded as soon as you drop them</li>
                                    <li>Maximum allowed size of image is 8MB</li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <!-- Dropzone Preview Template -->
                    <div id="preview-template" style="display: none;">

                        <div class="dz-preview dz-file-preview">
                            <div class="dz-image"><img data-dz-thumbnail=""></div>

                            <div class="dz-details">
                                <div class="dz-size"><span data-dz-size=""></span></div>
                                <div class="dz-filename"><span data-dz-name=""></span></div>
                            </div>
                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                            <div class="dz-error-message"><span data-dz-errormessage=""></span></div>

                            <div class="dz-success-mark">
                                <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                    <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                                    <title>Check</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs></defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                        <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                                    </g>
                                </svg>
                            </div>

                            <div class="dz-error-mark">
                                <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                    <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                                    <title>error</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs></defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                        <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                                            <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>

                        </div>
                    </div>
                    <!-- End Dropzone Preview Template -->


                    {!! Form::hidden('csrf-token', csrf_token(), ['id' => 'csrf-token']) !!}
                    <script>
                        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
                        var previewNode = document.querySelector("#template");
                        previewNode.id = "";
                        var previewTemplate = previewNode.parentNode.innerHTML;
                        previewNode.parentNode.removeChild(previewNode);

                        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
                            url: "{{route('uploadImages')}}", // Set the url
                            maxFiles: 10,
                            maxFilesize: 10,
                            thumbnailWidth: 80,
                            thumbnailHeight: 80,
                            parallelUploads: 20,
                            previewTemplate: previewTemplate,
                            autoQueue: true, // Make sure the files aren't queued until manually added
                            previewsContainer: "#previews", // Define the container to display the previews
                            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
                        });

                        myDropzone.on("addedfile", function (file) {
                            // Hookup the start button
                            file.previewElement.querySelector(".start").onclick = function () {
                                myDropzone.enqueueFile(file);
                            };
                        });

                        // Update the total progress bar
                        myDropzone.on("totaluploadprogress", function (progress) {
                            document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
                        });

                        myDropzone.on("sending", function (file) {
                            // Show the total progress bar when upload starts
                            document.querySelector("#total-progress").style.opacity = "1";
                            // And disable the start button
                            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
                        });

                        // Hide the total progress bar when nothing's uploading anymore
                        myDropzone.on("queuecomplete", function (progress) {
                            document.querySelector("#total-progress").style.opacity = "0";
                        });

                        // Setup the buttons for all transfers
                        // The "add files" button doesn't need to be setup because the config
                        // `clickable` has already been specified.
                        document.querySelector("#actions .start").onclick = function () {
                            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
                        };
                        document.querySelector("#actions .cancel").onclick = function () {
                            myDropzone.removeAllFiles(true);
                        };

                    </script>  <!-- js for the add files area /-->
                    <!--ket thuc dropzone.js-->
                </div>
            </div>
            <!-- Text input-->
        {{--<div class="form-group">--}}
        {{--<label class="col-md-4 control-label" for="threshold">Số Phòng</label>--}}
        {{--<div class="col-md-4">--}}
        {{--<select id="threshold" name="threshold" class="form-control">--}}
        {{--<option value="1">1</option>--}}
        {{--<option value="2">2</option>--}}
        {{--<option value="2">3</option>--}}
        {{--<option value="2">4</option>--}}
        {{--<option value="2">5</option>--}}
        {{--<option value="2">6</option>--}}
        {{--</select>--}}
        {{--</div>--}}
        {{--</div>--}}
        <!-- Appended Input-->
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
                    <button id="submitButton" name="submitButton" class="btn btn-success">Save</button>
                    <button id="cancel" name="cancel" class="btn btn-inverse">Cancel</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>