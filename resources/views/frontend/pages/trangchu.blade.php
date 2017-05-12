<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
	
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/footer.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/section.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/navbar.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/css/circle.css')}}" rel="stylesheet"/>
	<script src="{{asset('public/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
</head>

<body>

<script type="text/javascript" charset="utf-8" async defer>
    window.onscroll = function () {
        myFunction()
    };
    function myFunction() {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            document.getElementById("banner").className = "show navbar navbar-inverse navbar-fixed-top";
        } else {
            document.getElementById("banner").className = "hidden";
        }
    }

</script>
<div class="header-index" style=" background: url({!! asset("public/images/background/backgroud.png") !!}) no-repeat; background-attachment: fixed;background-size:100%;">
<!--<img  src="{!! asset("public/images/background/backgroud.png") !!}">-->
	<div class="container">
		<div class="row">
			<div class="col-xs-0 col-sm-1 col-md-2"></div>
			<div class="col-xs-6 col-sm-5 col-md-4">
			<a href="{!! route('allpost') !!}" title=""><img class="img-responsive bt1-index" onmouseover="bigImg(this)" src="{{ asset("public/images/background/muaban.png") }}"></a>
			</div>
			<div class="col-xs-6 col-sm-5 col-md-4">
			<a href="" title=""><img class="img-responsive bt2-index" src="{!! asset("public/images/background/chothue.png") !!}"></a>
			</div>
			<div class="col-xs-0 col-sm-1 col-md-2"></div>
		</div>
	</div>
</div>

@include('frontend.layouts.navbar')

<div class="container noidung">
    @include('frontend.layouts.noidung_trangchu')
</div>
@include('frontend.layouts.footer')

</body>

</html>
