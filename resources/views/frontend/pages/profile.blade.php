<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/footer.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/profile.css')}}" rel="stylesheet"/>
	
    <link href="{{asset('public/css/navbar.css')}}" rel="stylesheet"/>
	<script src="{{asset('public/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<script type="text/javascript" charset="utf-8" async defer>
    window.onscroll = function () {
        myFunction()
    };
    function myFunction() {
        if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
            document.getElementById("banner").className = "show navbar navbar-inverse navbar-fixed-top";
        } else {
            document.getElementById("banner").className = "hidden";
        }
    }

</script>
<div class="header-profile" style=" background: url({!! asset("public/images/background/backgroud.png") !!}) no-repeat; background-attachment: fixed;background-size:100%;">
	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-sm-3 col-md-2 img-user">
				<img class="img-thumbnail img-circle img-width" src="{!! asset('public/images/pic6.jpg') !!}"/>
			</div>
		</div>
	</div>
</div>
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
			<li><img src="{!! asset("public/images/user.png") !!}" class="img-use"/></li>
			<li><a href="{!! route('logout') !!}" class="item dangky link-menu">Tạ Huy Hiếu</a></li>
			<li><a href="{!! route('logout') !!}" class="item dangky link-menu">Đăng xuất</a></li>
			<li><a href="{!! route('newpost') !!}" class="btn-newpost"> Đăng tin</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="container">
   <div class="row">
		<div class="col-xs-12 col-sm-4 col-md-3 sidebar-profile">
			<h3 class="name">Tạ Huy Hiếu</h3>
			<p class="profession">0968928530</p>
			<p class="date">Ngày tham gia : 01-01-2017</p>
			<p class="address">Mê Linh, Mê Linh, Hà Nội</p>
		</div>
		<div class="col-xs-12 col-sm-8 col-md-9">
			<div class="col-xs-12 col-sm-12 col-md-12 content-profile">
				<div class="col-xs-4 col-sm-3 col-md-3 box-img-profile">
					<a href=""><img class="img-responsive" src="public/images/android.png"></a>
				</div>
				<div class="col-xs-8 col-sm-9 col-md-9 box-conntent-profile">
					<div class="list-content">
						<a><p class="title"><b>Lorem adipisicing elit, sed do eiusmod</b></p></a>
						<p class="giatien">17.000.000</p>
						<p class="thoigian">Hôm nay 17:05 | Huyện Củ CHi</p>
					</div>
					<div class="btn-profile">
						<p><a href="" target="_blank" class="btn-edit"><i class="fa fa-eye"></i> Xem</a></p>
						<p><a href="" class="btn-edit"><i class="fa fa-edit"></i> Sửa</a></p>
						<p><a href="#" class="btndelete"><i class="fa fa-trash-o"></i> Xóa</a></p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 content-profile">
				<div class="col-xs-4 col-sm-3 col-md-3 box-img-profile">
					<a href=""><img class="img-responsive" src="public/images/android.png"></a>
				</div>
				<div class="col-xs-8 col-sm-9 col-md-9 box-conntent-profile">
					<div class="list-content">
						<a><p class="title"><b>Lorem adipisicing elit, sed do eiusmod</b></p></a>
						<p class="giatien">17.000.000</p>
						<p class="thoigian">Hôm nay 17:05 | Huyện Củ CHi</p>
					</div>
					<div class="btn-profile">
						<p><a href="" target="_blank" class="btn-edit"><i class="fa fa-eye"></i> Xem</a></p>
						<p><a href="" class="btn-edit"><i class="fa fa-edit"></i> Sửa</a></p>
						<p><a href="#" class="btndelete"><i class="fa fa-trash-o"></i> Xóa</a></p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 content-profile">
				<div class="col-xs-4 col-sm-3 col-md-3 box-img-profile">
					<a href=""><img class="img-responsive" src="public/images/android.png"></a>
				</div>
				<div class="col-xs-8 col-sm-9 col-md-9 box-conntent-profile">
					<div class="list-content">
						<a><p class="title"><b>Lorem adipisicing elit, sed do eiusmod</b></p></a>
						<p class="giatien">17.000.000</p>
						<p class="thoigian">Hôm nay 17:05 | Huyện Củ CHi</p>
					</div>
					<div class="btn-profile">
						<p><a href="" target="_blank" class="btn-edit"><i class="fa fa-eye"></i> Xem</a></p>
						<p><a href="" class="btn-edit"><i class="fa fa-edit"></i> Sửa</a></p>
						<p><a href="#" class="btndelete"><i class="fa fa-trash-o"></i> Xóa</a></p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 content-profile">
				<div class="col-xs-4 col-sm-3 col-md-3 box-img-profile">
					<a href=""><img class="img-responsive" src="public/images/android.png"></a>
				</div>
				<div class="col-xs-8 col-sm-9 col-md-9 box-conntent-profile">
					<div class="list-content">
						<a><p class="title"><b>Lorem adipisicing elit, sed do eiusmod</b></p></a>
						<p class="giatien">17.000.000</p>
						<p class="thoigian">Hôm nay 17:05 | Huyện Củ CHi</p>
					</div>
					<div class="btn-profile">
						<p><a href="" target="_blank" class="btn-edit"><i class="fa fa-eye"></i> Xem</a></p>
						<p><a href="" class="btn-edit"><i class="fa fa-edit"></i> Sửa</a></p>
						<p><a href="#" class="btndelete"><i class="fa fa-trash-o"></i> Xóa</a></p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 content-profile">
				<div class="col-xs-4 col-sm-3 col-md-3 box-img-profile">
					<a href=""><img class="img-responsive" src="public/images/android.png"></a>
				</div>
				<div class="col-xs-8 col-sm-9 col-md-9 box-conntent-profile">
					<div class="list-content">
						<a><p class="title"><b>Lorem adipisicing elit, sed do eiusmod</b></p></a>
						<p class="giatien">17.000.000</p>
						<p class="thoigian">Hôm nay 17:05 | Huyện Củ CHi</p>
					</div>
					<div class="btn-profile">
						<p><a href="" target="_blank" class="btn-edit"><i class="fa fa-eye"></i> Xem</a></p>
						<p><a href="" class="btn-edit"><i class="fa fa-edit"></i> Sửa</a></p>
						<p><a href="#" class="btndelete"><i class="fa fa-trash-o"></i> Xóa</a></p>
					</div>
				</div>
			</div>
		</div>
   </div>
</div>
@include('frontend.layouts.footer')
</body>
</html>