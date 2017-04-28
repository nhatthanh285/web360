<!doctype html>
	<html lang="en">
	<head>
		        <meta charset="utf-8">
		        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		        <meta name="viewport" content="width=device-width" />

            <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet" />
            <link href="{{asset('public/css/footer.css')}}" rel="stylesheet" />
            <link href="{{asset('public/css/section.css')}}" rel="stylesheet" />
            <link href="{{asset('public/css/navbar.css')}}" rel="stylesheet" />
            <link href="{{asset('public/css/circle.css')}}" rel="stylesheet" />
  </head>
	  
<body>

  <script  type="text/javascript" charset="utf-8" async defer>
      window.onscroll = function() {myFunction()};
      function myFunction() {
  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) { document.getElementById("banner").className = "show";       
    } else {
        document.getElementById("banner").className = "hidden";}
    }
  </script>

     <img id="backgr" src="{!! asset("public/images/background/backgroud.png") !!}">
	   <nav id = "banner" class="navbar navbar-default navbar-fixed-top hidden">
        <div class="container">
            <div class="navbar-header"> 
                <div class="navbar-brand">
                    <a href="#"><img src="public/images/logo.png" class="img-responsive" /></a>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><img src="{!! asset("public/images/user.png") !!}" class="img-use" /></li>
                    <li><a href="" class="item" style="margin: 0 ;padding-top: 20px; ">Đăng Nhập</a></li>
                    <li><a href="" class="item dangky" style="margin: 0 ; padding-top: 20px;padding-left: 0;">Đăng Ký</a></li>
                    <li><a href=""><button type="button" class="btn btn-warning">Đăng tin</button></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row circle">
       <a href="" title=""><img class="img1" src="{!! asset("public/images/background/muaban.png") !!}"></a>
       <a href="" title=""><img class="img2" src="{!! asset("public/images/background/chothue.png") !!}"></a>
    </div>

     <div class="container noidung">
         @include('frontend.layouts.noidung_trangchu')
      </div>
		  @include('frontend.layouts.footer')

</body>
		 
</html>
