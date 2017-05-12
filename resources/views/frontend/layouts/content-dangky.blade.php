<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form role="form" action="{!! route('register') !!}" method="post">
            <input type='hidden' name="_token" value="{{ csrf_token() }}"/>
            <h2 class="dangky">ĐĂNG KÝ</h2>
            <hr class="colorgraph">
            @include('flash::message')
            <div class="form-group" style="margin-top: 10px; ">
                <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Họ tên" tabindex="1"
                       pattern="[A-Za-z]{3,}" required title="Tên gồm tối thiểu 3 ký tự chữ cái">
            </div>
            <div class="form-group" style="margin-top: 10px; ">
                <input type="text" name="phone" id="phone" class="form-control input-lg" placeholder="Số điện thoại "
                       tabindex="2" pattern="[0-9]{10,11}" required title="Số điện thoại gôm 10 hoặc 11 chữ số ">
            </div>

            <div class="form-group" style="margin-top: 10px; ">
                <input type="password" name="password" id="password" class="form-control input-lg"
                       placeholder="Mật khẩu " tabindex="3" pattern=".{6,32}" required
                       title="Mật khẩu từ 6 - 32 ký tự ">
            </div>

            <div class="row" style="margin-top: 10px;  ">
                <div class="col-xs-12 col-md-12"><input type="submit" value="Đăng ký"
                                                        class="btn btn-primary btn-block btn-lg " tabindex="7"></div>
            </div>
            <hr class="colorgraph">
            <p align="center">Ở bước tiếp theo bạn sẽ nhận được mã xác nhận số điện thoại gửi qua SMS</p>
        </form>
    </div>
</div>