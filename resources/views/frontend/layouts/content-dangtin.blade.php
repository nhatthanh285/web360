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