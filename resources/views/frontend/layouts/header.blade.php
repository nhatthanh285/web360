<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/Alldanhsach.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/header.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

</head>
<body>

<div class="container header">
    <h3 style="margin-top:80px ">Mua bán Bất động sản - Mua bán trên Toàn quốc</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-9" style="padding: 0">
                <div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control input-lg" placeholder="Tìm Kiếm"/>
                        <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="btn-popup"><a class="khuvuc-window button btn-header-allpost" href="#khuvuc-box"><b
                                    class="area">Toàn quốc</b> </a> <span class="caret"></span></div>
                    <div class="khuvuc" id="khuvuc-box"><p class="title-box">Chọn tỉnh thành</p>
                        <div class="quan">
                            <ul>
                                @foreach($cities as $city)
                                    @if( is_object($city) && isset($city->id))
                                        <li><a class="quan-window{!! $city->id !!}">{!! $city->name !!}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="khuvuc2" id="khuvuc2-box"><i class="glyphicon glyphicon-arrow-left pull-left bk"></i>
                        <p class="title-box2">Chọn quận/huyện</p>
                        <div class="quan2">
                            <ul>
                                <li id="huyen1"><a href="#">Đống Đa</a></li>
                                <li id="huyen2"><a href="#">Cầu Giấy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="khuvuc3" id="khuvuc3-box"><i class="glyphicon glyphicon-arrow-left pull-left bk"></i>
                        <p class="title-box2">Chọn quận/huyện</p>
                        <div class="quan2">
                            <ul>
                                <li id="huyen3"><a href="#">Tân Bình</a></li>
                                <li id="huyen4"><a href="#">Thủ Đức</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">

                    <div class="btn-popup"><a class="theloai-window button btn-header-allpost" href="#theloai-box"><b
                                    class="area1">Loại bất động sản</b> </a> <span class="caret"></span></div>
                    <div class="theloai" id="theloai-box"><p class="title-box">Chọn Loại bất động sản</p>
                        <div class="quan">
                            <ul>
                                <li id="loai1" class="loai-window"><a href="#">Văn Phòng</a></li>
                                <li id="loai2" class="loai-window"><a href="#">Biệt Thự</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('a.theloai-window').click(function () {
            //lấy giá trị thuộc tính href - chính là phần tử "#khuvuc-box"
            var theloaiBox = $(this).attr('href');
            //cho hiện hộp đăng nhập trong 300ms
            $(theloaiBox).fadeIn(300);
            // thêm phần tử id="over" vào sau body
            $('body').append('<div id="over">');
            $('#over').fadeIn(300);
            $(document).on('click', "a.close, #over", function () {
                $('#over, .theloai').fadeOut(300, function () {
                    $('#over').remove();
                });
                return false;
            });
            return false;
        });
        // khi click đóng hộp thoại
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('a.khuvuc-window').click(function () {
            //lấy giá trị thuộc tính href - chính là phần tử "#khuvuc-box"
            var khuvucBox = $(this).attr('href');
            //cho hiện hộp đăng nhập trong 300ms
            $(khuvucBox).fadeIn(300);
            // thêm phần tử id="over" vào sau body
            $('body').append('<div id="over">');
            $('#over').fadeIn(300);
            $(document).on('click', "a.close, #over", function () {
                $('#over, .khuvuc').fadeOut(300, function () {
                    $('#over').remove();
                });
                return false;
            });
            return false;
        });
        // khi click đóng hộp thoại
    });
</script>
<script>
    $(document).ready(function () {
        $('.quan-window1').click(function () {
            $('.khuvuc').fadeOut(300);
            $('.khuvuc2').slideToggle();
            $(document).on('click', "a.close, #over", function () {
                $('#over, .khuvuc2').fadeOut(300, function () {
                    $('#over').remove();
                });
                return false;
            });
        });
        $('.quan-window2').click(function () {
            $('.khuvuc').fadeOut(300);
            $('.khuvuc3').slideToggle();
            $(document).on('click', "a.close, #over", function () {
                $('#over, .khuvuc2').fadeOut(300, function () {
                    $('#over').remove();
                });
                return false;
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('.bk').click(function () {
            $('.khuvuc2').fadeOut(300);
            $('.khuvuc3').fadeOut(300);
            $('.khuvuc').slideToggle();
            $(document).on('click', "a.close, #over", function () {
                $('#over, .khuvuc').fadeOut(300, function () {
                    $('#over').remove();
                });
                return false;
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#huyen1').click(function () {
            $('.khuvuc2').fadeOut(50);
            $('.khuvuc3').fadeOut(50);
            $('.khuvuc').fadeOut(50);
            $('.area').html($('#huyen1').text());
            $('#over, .khuvuc').fadeOut(300, function () {
                $('#over').remove();
            });
            return false;

        });
        $('#huyen2').click(function () {
            $('.khuvuc2').fadeOut(50);
            $('.khuvuc3').fadeOut(50);
            $('.khuvuc').fadeOut(50);
            $('.area').html($('#huyen2').text());
            $('#over, .khuvuc').fadeOut(300, function () {
                $('#over').remove();
            });
            return false;

        });
        $('#huyen3').click(function () {
            $('.khuvuc2').fadeOut(50);
            $('.khuvuc3').fadeOut(50);
            $('.khuvuc').fadeOut(50);
            $('.area').html($('#huyen3').text());
            $('#over, .khuvuc').fadeOut(300, function () {
                $('#over').remove();
            });
            return false;

        });
        $('#huyen4').click(function () {
            $('.khuvuc2').fadeOut(50);
            $('.khuvuc3').fadeOut(50);
            $('.khuvuc').fadeOut(50);
            $('.area').html($('#huyen4').text());
            $('#over, .khuvuc').fadeOut(300, function () {
                $('#over').remove();
            });
            return false;

        });
        $('#loai1').click(function () {
            $('.theloaiBox').fadeOut(50);
            $('.area1').html($('#loai1').text());
            $('#over, .theloai').fadeOut(300, function () {
                $('#over').remove();
            });
            return false;

        });
        $('#loai2').click(function () {
            $('.theloaiBox').fadeOut(50);
            $('.area1').html($('#loai2').text());
            $('#over, .theloai').fadeOut(300, function () {
                $('#over').remove();
            });
            return false;

        });
    });
</script>

</body>