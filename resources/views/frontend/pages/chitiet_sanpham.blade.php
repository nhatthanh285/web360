<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/footer.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/navbar_danhsach_sp.css')}}" rel="stylesheet" />
    <style type="text/css" media="screen">
    	.logofooter {
    		margin-bottom: 130px; 
    	}

    	.foo {
    		margin-top: 150px; 
    	}
    </style>
</head>
<body>
<script src="{{asset('public/js/jquery-3.2.1.min.js')}}" type="text/javascript" charset="utf-8"></script>
  <script src="{{asset('public/js/bootstrap.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('public/js/chitietsanpham.js')}}" type="text/javascript" charset="utf-8"></script>
<div >
	@include('frontend.layouts.navbar')
</div>
<div class="content">
	@include('frontend.layouts.chitietsanpham')
</div>
<div class="foo">
	@include('frontend.layouts.footer')
</div>

     
</body>
</html>