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
						  <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
							  <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
						  </div>
						</span>
						</div>

					</div>
					<div class="table table-striped files" id="previews">

					<div id="template" class="file-row">
						<!-- This is used as the file preview template -->
						<div>
							<span class="preview"><img data-dz-thumbnail /></span>
						</div>
						<div>
							<p class="name" data-dz-name></p>
							<strong class="error text-danger" data-dz-errormessage></strong>
						</div>
						<div>
							<p class="size" data-dz-size></p>
							<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
								<div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary start">
								<span>Tải lên</span>
							</button>
							<button data-dz-remove class="btn btn-warning cancel">
								<span>Hủy</span>
							</button>
							<button data-dz-remove class="btn btn-danger delete">
								<span>Xóa</span>
							</button>
						</div>
					</div>

				</div>
				<script>
                // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template");
        previewNode.id = "";
        var previewTemplate = previewNode.parentNode.innerHTML;
        previewNode.parentNode.removeChild(previewNode);
        
        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
          url: "/target-url", // Set the url
          thumbnailWidth: 80,
          thumbnailHeight: 80,
          parallelUploads: 20,
          previewTemplate: previewTemplate,
          autoQueue: false, // Make sure the files aren't queued until manually added
          previewsContainer: "#previews", // Define the container to display the previews
          clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        });
        
        myDropzone.on("addedfile", function(file) {
          // Hookup the start button
          file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
        });
        
        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
          document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
        });
        
        myDropzone.on("sending", function(file) {
          // Show the total progress bar when upload starts
          document.querySelector("#total-progress").style.opacity = "1";
          // And disable the start button
          file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
        });
        
        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
          document.querySelector("#total-progress").style.opacity = "0";
        });
        
        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
          myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
        };
        document.querySelector("#actions .cancel").onclick = function() {
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