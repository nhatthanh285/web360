<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<title></title>
	<link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/footer.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/navbar_danhsach_sp.css')}}" rel="stylesheet" />
	<style type="text/css" media="screen">
	 .dangky {
	 	text-align: center;
	 	font-size: 22px;
	 	font-weight: bold;
	 }
	 .content-dangky {
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
  @include('frontend.layouts.navbar_2')
  <div class="content-dangky">
  @include('frontend.layouts.content-OTP')
 </div>

</div>
 @include('frontend.layouts.footer')

</body>
</html>