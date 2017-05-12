<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<title></title>
    <link href="{{asset('public/css/navbar_danhsach_sp.css')}}" rel="stylesheet" />
	<link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/footer.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/navbar.css')}}" rel="stylesheet"/>
	<link href="{{asset('public/css/circle.css')}}" rel="stylesheet"/>
	<script src="{{asset('public/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
    <style type="text/css" media="screen">
    	.dangnhap{
    		font-weight: bold;
    	}
    	.content-dangnhap {
    		margin-top: 60px;
    	}
    </style>
</head>
<body>
<div class="container">
       @include('frontend.layouts.navbar_dangnhap')
<div class="content-dangnhap">
  @include('frontend.layouts.content-dangnhap')
 </div>

</div>
 @include('frontend.layouts.footer')
</body>
</html>