
<nav class="show navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <a class="nav-logo" href="#"><img src="{{asset("public/images/logo.png")}}" class="img-responsive"style="width:50px;height:50px;margin-left:15px;"/></a>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
         
           <ul class="nav navbar-nav navbar-right">
                @if(!empty($login) && $login == true)
                    <li class="nav-active"><img src="public/images/user.png" class="nav-img-use"/></li>
                @else
                <li><a href="" class="link-menu">Đăng Nhập</a></li>
                <li><a href="" class="link-menu">Đăng Ký</a>
                </li>

                @endif
               <li><a href="{!! route('newpost') !!}" class="btn-newpost"> Đăng tin</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>