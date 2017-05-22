<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/chitietsanpham.css')}}" rel="stylesheet"/>

</head>
<body>
<div class="container">
    <div class="row img-pr thaydoi">
        @include('frontend.layouts.slide_chitiet')
    </div>
    <div class="row btn-pr">
        <div class="col-xs-12 col-sm-12 col-md-12 show-btn-viewpost">
            <button type="button" class="btn btn-slide" id="sl">Slide ảnh</button>
            <button type="button" class="btn btn-360" id="anh360">Ảnh 360</button>
        </div>

    </div>
    <div class="row content-pr">
        <div class="col-xs-12 col-sm-8 col-md-8 content-onepost">
            <h3 class="post-title-onepost"><b>{!! $post->title !!}</b></h3>
            <p>Địa điểm : <span class="diadiem">{!! $address->name !!} </span></p>
            <p>Giá : <span class="diadiem">{!! number_format($post->price) !!} VNĐ </span></p>
            <p><b style="color: red; font-size: 16px;">Thông tin chi tiết</b></p>
            <div id="mota">
                <p id="mota">{!! $post->content !!}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 profile-pro">
            <div class="card-container manual-flip">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="{!! asset('public/images/anh.jpg') !!}"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="{!! asset('public/images/pic6.jpg') !!}"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">{!! $user->name!!}</h3>
                                <p class="profession">{!! $user->phone !!}</p>
                                <p class="date">Ngày tham gia : {!! $user->updated_at->format('d-M-Y')!!}</p>
                                <p class="text-center">{!! $user->address !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#sl").click(function () {
            $(".thaydoi").php("@include('frontend.layouts.image_360')");
        });
        $("#anh360").click(function () {
            $(".thaydoi").php("@include('frontend.layouts.slide_chitiet')");
        });
    });
</script>
</body>
</html>