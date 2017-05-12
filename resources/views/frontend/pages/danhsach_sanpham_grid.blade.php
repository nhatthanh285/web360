<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/footer.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/navbar_danhsach_sp.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/header.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/danhsach_gird_chuan.css')}}" rel="stylesheet"/>
</head>
<body>

<div>@include('frontend.layouts.navbar_2')</div>
<div>@include('frontend.layouts.header')</div>
<div class="container">
    <div>@include('frontend.layouts.AllDanhsach_grid_chuan')</div>
</div>
@include('frontend.layouts.footer')

</body>
</html>