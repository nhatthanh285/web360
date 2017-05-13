<nav class="navbar navbar-default navbar-fixed-top hidden" id="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#"><img src="public/images/logo.png" class="img-responsive" style="max-height:50px;"/></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
         
          <ul class="nav navbar-nav navbar-right">
            @if($login == true)
                    <li><img src="{!! asset("public/images/user.png") !!}" class="img-use"/></li>
                    <li><a href="{!! route('logout') !!}" class="link-menu">{!! Auth::user()->name !!}</a></li>
                    <li><a href="{!! route('logout') !!}" class="link-menu">Đăng xuất</a></li>
                @else
                    <li><a href="{!! route('signin') !!}" class="link-menu">Đăng Nhập</a></li>
                    <li><a href="{!! route('register') !!}" class="dangky link-menu">Đăng Ký</a></li>
                @endif

                <li><a href="{!! route('newpost') !!}" class="btn-newpost"> Đăng tin</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>