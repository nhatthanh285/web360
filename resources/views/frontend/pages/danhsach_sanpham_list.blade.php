<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/footer.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/navbar_danhsach_sp.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/header.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/danhsach_list_chuan.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/danhsach_gird_chuan.css')}}" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div>@include('frontend.layouts.navbar_danhsach_sp')</div>
<div>@include('frontend.layouts.header')</div>
<div class="container">
    <div>   @if (1 > 0 )
                @include('frontend.layouts.AllDanhsach_list_chuan')
            @else
                @include('frontend.layouts.AllDanhsach_grid_chuan')
             @endif
    </div>
</div>
@include('frontend.layouts.footer')

</body>
</html>