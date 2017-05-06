<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/chitietsanpham.css')}}" rel="stylesheet"/>

</head>
<body>
<div class="container warraper">
    <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="4000">
        @if(!is_null($post->img360))
            @include('frontend.layouts.image_360')
         @else
            @include('frontend.layouts.slide_chitiet')
         @endif

    </div>
    <div class="title">
        <h3><b>{!! $post->title !!}</b></h3>
        <p>Địa điểm : <span class="diadiem">{!! $address->name !!} </span></p>
        <p>Giá : <span class="diadiem">{!! number_format($post->price) !!} VNĐ </span></p>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <p><b style="color: red; font-size: 16px;">Thông tin chi tiết</b></p>
                    <div id="mota">
                        <p id="mota">{!! $post->content !!}</p>
                    </div>
                </div>
                <div class="col-md-4">
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
        <!-- End Carousel -->
    </div>
</body>
</html>