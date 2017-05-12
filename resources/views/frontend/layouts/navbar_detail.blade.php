<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title></title>
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet" />
   <link href="{{asset('public/css/navbar.css')}}" rel="stylesheet" />
	<title></title>
</head>
<body>
     <nav class="navbar navbar-default navbar-fixed-top ">
        <div class="container ">
            <div class="navbar-header">
                <div class="navbar-brand">
                    <a href="#"><img src="{!! asset('public/images/logo.png') !!}" class="img-responsive" /></a>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><img src="{!! asset('public/images/user.png') !!}" class="img-use" /></li>
                    <li><a href="" class="item" style="margin: 0 ;padding-top: 20px; ">Đăng Nhập</a></li>
                    <li><a href="" class="item dangky" style="margin: 0 ; padding-top: 20px;padding-left: 0;">Đăng Ký</a></li>
                    <li><a href=""><button type="button" class="btn btn-warning">Đăng tin</button></a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>