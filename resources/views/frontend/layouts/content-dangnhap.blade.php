<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form role="form" action="{!! route('signin') !!}" method="post">
            <input type='hidden' name="_token" value="{{ csrf_token() }}"/>
            <h2 class="dangnhap" style="text-align: center; font-size: 22px;">ĐĂNG NHẬP</h2>
            <hr class="colorgraph">

            <div class="form-group">
                <input type="text" name="phone" id="phone" class="form-control input-lg"
                       placeholder="Nhập số điện thoại" tabindex="3" value="">
            </div>

            <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg"
                       placeholder="Nhập mật khẩu" tabindex="4" value="">
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox" id="remember"> Ghi nhớ mật khẩu
                </label>
            </div>

            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-12 col-md-12"><input type="submit" value="Đăng nhập" class="btn  btn-block btn-lg"
                                                        tabindex="7"></div>
            </div>
            <br>
            <div class="row">
                <form role="form" action="" method="get">
                {{--<div class="col-xs-12 col-md-12"><a href="#" class="btn  btn-block btn-lg">Quên mật khẩu</a></div>--}}

                    <div class="col-xs-12 col-md-12"><input type="submit" value="Quên mật khẩu" class="btn  btn-block btn-lg"
                                                            tabindex="8"></div>

                </form>
            </div>
            <br>
            <div class="row">
                {{--<div class="col-xs-12 col-md-6"><input type="submit" value="Đăng nhập bằng Facebook" class="btn btn-primary btn-block btn-lg" tabindex="8"></div>--}}
                {{--<div class="col-xs-12 col-md-6"><input type="submit" value="Đăng nhập bằng Google" class="btn btn-success btn-lg btn-block btn-danger" tabindex="9"></div>--}}
                <div class="col-xs-12 col-md-6"><a href="#" class="btn btn-primary btn-block btn-lg">Đăng nhập bằng
                        Facebook</a></div>
                <div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-lg btn-block btn-danger">Đăng
                        nhập bằng Google</a></div>
            </div>
        </form>
    </div>
</div>