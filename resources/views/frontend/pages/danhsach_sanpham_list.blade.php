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

<div>@include('frontend.layouts.navbar_2')</div>
<div>@include('frontend.layouts.header')</div>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div>Danh sách bất động sản</div>
            <div>
                <div class="pull-right" style="margin-top:-28px">
                    <button type="button" class="btn btn-default grid" aria-label="Left Align">
                        <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="pull-right" style="margin-top:-28px">
                    <button type="button" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-th-list list" aria-hidden="true"></span>
                    </button>
                </div>
                <script>
                    $(document).ready(function () {
                        $('.divgrid').hide();
                        $('.list').click(function () {
                            $('.divgrid').fadeOut(0);
                            $('.divlist').fadeIn(200);
                        });
                    });
                </script>
                <script>
                    $(document).ready(function () {
                        $('.grid').click(function () {
                            $('.divlist').fadeOut(0);
                            $('.divgrid').fadeIn(200);
                        });
                    });
                </script>
            </div>
        </div>
        <div class="panel-body">
            <div>
                <div class="divlist">
                    @include('frontend.layouts.AllDanhsach_list_chuan')
                </div>
                <div class="divgrid">
                    @include('frontend.layouts.AllDanhsach_grid_chuan')
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.layouts.footer')

</body>
</html>