<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<title></title>
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/footer.css')}}" rel="stylesheet" />
    <link href="{{asset('css/navbar_danhsach_sp.css')}}" rel="stylesheet" />
    <style type="text/css" media="screen">
    	.dangnhap{
    		font-weight: bold;
    	}
    	.content-dangnhap {
    		margin-top: 60px;
    		height: 100vh; 
    	}
    	.container {
    		padding-top: 10px;
    		padding-left: 30px;
    	}
    </style>
</head>
<body>
<div class="container">
       @include('layouts.navbar_danhsach_sp')
<div class="content-dangnhap">
  @include('layouts.content-dangnhap')
 </div>

</div>
 @include('layouts.footer')
</body>
</html>