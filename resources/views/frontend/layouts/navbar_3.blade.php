<style>
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
<nav class="navbar navbar-default navbar-fixed-top hidden" id="banner">
      <div class="container">
        <div class="navbar-header">
          <a href="#"><img src="public/images/logo.png" class="img-responsive" style="max-height:50px;"/></a>
        </div>
        <div id="navbar">
           <ul class="nav navbar-nav navbar-right">
				
                <li><a href="{!! route('newpost') !!}" class="btn-newpost"> Đăng tin</a></li>
            @if($login == true)
				<li class="hidden-sm"><a href="{!! route('logout') !!}" class="link-menu">Đăng xuất</a></li>
                <li class="hidden-sm"><a href="{!! route('logout') !!}" class="link-menu idden-sm">{!! Auth::user()->name !!}</a></li>
                <li><a href="{!! route('logout') !!}" class="img-link-menu"><img src="{!! asset("public/images/user.png") !!}" class="img-use"/></a></li>
                @else
                    <li><a href="{!! route('register') !!}" class="dangky link-menu">Đăng Ký</a></li>
					<li><a href="{!! route('signin') !!}" class="link-menu">Đăng Nhập</a></li>
                @endif

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
