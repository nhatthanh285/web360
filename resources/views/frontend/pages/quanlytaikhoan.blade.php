<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<title></title>
	<link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/footer.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/navbar_danhsach_sp.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/quanlytaikhoan.css')}}" rel="stylesheet" />
    <style type="text/css" media="screen">
      .container{
        padding-left: 30px;
        padding-top: 10px;
      }
      .quanlytaikhoan {
        margin: 50px auto;
        margin-bottom: 80px; 
      }
    </style>
</head>
<body>
 <script src="{{asset('js/jquery-3.2.1.min.js')}}" type="text/javascript" charset="utf-8"></script>
  <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('js/quanlytaikhoan.js')}}" type="text/javascript" charset="utf-8"></script>
<div class="content container">
@include('frontend.layouts.navbar_2')
  <div class="quanlytaikhoan">
    @include('frontend.layouts.quanlytaikhoan')
  </div>     
</div>
@include('frontend.layouts.footer')
</body>
</html>