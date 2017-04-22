<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
     <link href="{{asset('css/footer.css')}}" rel="stylesheet" />
     <link href="{{asset('css/navbar_danhsach_sp.css')}}" rel="stylesheet" />
     <link href="{{asset('css/header.css')}}" rel="stylesheet" />
     <link href="{{asset('css/danhsach_list_chuan.css')}}" rel="stylesheet" />
</head>
<body>
 
  	 <div>@include('layouts.navbar_danhsach_sp')</div>
      <div>@include('layouts.header')</div>
       <div class="container">
      <div>@include('layouts.AllDanhsach_list_chuan')</div>
      </div>
      <div>@include('layouts.footer')</div>
 
</body>
</html>