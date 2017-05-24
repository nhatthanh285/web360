<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
	
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/footer.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/section.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/navbar.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/circle.css')}}" rel="stylesheet"/>
	<script src="{{asset('public/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
</head>

<body>


<!--<div class="header-index" style=" background: url({!! asset("public/images/background/backgroud.png") !!}) no-repeat; background-attachment: fixed;background-size:100%;">-->
<div class="header-index">
<img  src="{!! asset("public/images/background/backgroud.png") !!}" class="img-index"/>
	<div class="container" style="position:absolute; z-index:2; margin: 0 7%;">
		<div class="row">
			<div class="col-xs-0 col-sm-1 col-md-2"></div>
			<div class="col-xs-6 col-sm-5 col-md-4">
			<a href="{!! route('allpost') !!}" title=""><img class="img-responsive bt1-index" onmouseover="bigImg(this)" src="{{ asset("public/images/background/muaban.png") }}"></a>
			</div>
			<div class="col-xs-6 col-sm-5 col-md-4">
			<a href="" title=""><img class="img-responsive bt2-index" src="{!! asset("public/images/background/chothue.png") !!}"></a>
			</div>
			<div class="col-xs-0 col-sm-1 col-md-2"></div>
		</div>
	</div>
</div>

<style>
.navbar-fixed-top {
    border-width: inherit!important;
    background: rgba(207,207,207,0.5);
    z-index: 9999;
}
.navbar-header{
	float:left!important;
}
.nav.navbar-nav.navbar-right{
	float:right!important;
}
.nav.navbar-nav.navbar-right > li{
	float:right!important;
}
.navbar-nav{
	margin:0!important;
}
.link-menu{
	padding:15px!important;
}
.btn-newpost{
	font-weight:bold;
}
.img-link-menu{
	padding:0!important;
}
@media(max-width:900px){
	.hidden-sm{
		display:none!important;
	}
}
</style>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="#"><img src="public/images/logo.png" class="img-responsive" style="height:50px; width:50px;"/></a>
        </div>
        <div id="navbar">
           <ul class="nav navbar-nav navbar-right">
				
                <li><a href="{!! route('newpost') !!}" class="btn-newpost"> Đăng tin</a></li>
            @if($login == true)
				<li class="hidden-sm"><a href="{!! route('logout') !!}" class="link-menu">Đăng xuất</a></li>
                <li class="hidden-sm"><a href="{!! route('logout') !!}" class="link-menu idden-sm">{!! Auth::user()->name !!}</a></li>
                <li><a href="{!! route('logout') !!}" class="img-link-menu"><img src="{!! asset("public/images/user.png") !!}" class="img-use"/></a></li>
                @else
                    <li class="hidden-sm"><a href="{!! route('register') !!}" class="dangky link-menu">Đăng Ký</a></li>
					<li class="hidden-sm"><a href="{!! route('signin') !!}" class="link-menu">Đăng Nhập</a></li>
					<li><a href="{!! route('signin') !!}" class="img-link-menu"><img src="{!! asset("public/images/user.png") !!}" class="img-use"/></a></li>
					
                @endif

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

</body>

</html>
