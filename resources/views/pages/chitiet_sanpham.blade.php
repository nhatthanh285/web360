<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/footer.css')}}" rel="stylesheet" />
    <link href="{{asset('css/navbar_danhsach_sp.css')}}" rel="stylesheet" />
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
<script src="{{asset('js/jquery-3.2.1.min.js')}}" type="text/javascript" charset="utf-8"></script>
  <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('js/chitietsanpham.js')}}" type="text/javascript" charset="utf-8"></script>
<div >
	@include('layouts.navbar')
</div>
<div class="content">
	@include('layouts.chitietsanpham')
</div>
<div class="foo">
	@include('layouts.footer')
</div>

     
</body>
</html>