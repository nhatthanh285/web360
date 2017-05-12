<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <div class="navbar-brand">
                <a class="nav-logo" href="#"><img src="{{asset("public/images/logo.png")}}" class="nav-img-responsive"/></a>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @if(!empty($login) && $login == true)
                    <li class="nav-active"><img src="public/images/user.png" class="nav-img-use"/></li>
                @else
                <li><a href="" style="margin: 0 ;padding-top: 10px; ">Đăng Nhập</a></li>
                <li><a href="" class="nav-dangky" style="margin: 0 ; padding-top: 10px;padding-left: 0;">Đăng Ký</a>
                </li>

                @endif
                <li><a href="" class="nav-button">
                        <button type="button" class="btn btn-warning">Đăng tin</button>
                    </a></li>
            </ul>
        </div>
    </div>
</nav>