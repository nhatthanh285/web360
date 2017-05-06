<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/Alldanhsach.css')}}" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container header">
    <h3 style="margin-top:80px ">Mua bán Bất động sản - Mua bán trên Toàn quốc</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-1">

            </div>
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
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-3 drop">
            <div class="dropdown">
                <button id="diadiem" class=" btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                    Toàn Quốc
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    @foreach($cities as $city)
                        @if( is_object($city) && isset($city->id))
                            <li><a href="#">{!! $city->name !!}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dropdown">
                <button id="type" class=" btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                    Bất Động Sản - Mua bán
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#"> Bất Động Sản Cho Thuê</a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-1 ">
            <button type="button" class="btn btn-default" aria-label="Left Align">
                <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
            </button>
        </div>

        <div class="col-md-1 col-md-offset-1">
            <button type="button" class="btn btn-default" aria-label="Left Align">
                <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
            </button>
        </div>
        <div class="col-md-1 ">
            <button type="button" class="btn btn-default" aria-label="Left Align">
                <span class="glyphicon glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
        </div>

        <div class="col-md-1 col-md-offset-1">
            <button type="button" class="btn btn-default" aria-label="Left Align">
                <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
            </button>
        </div>
        <div class="col-md-1 col-md-offset-1">
            <button type="button" class="btn btn-default" aria-label="Left Align">
                <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
            </button>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12" style="margin: 0 "><img id="pic" src="public/images/anhmau.png" alt=""></div>
    </div>
</div>

</body>