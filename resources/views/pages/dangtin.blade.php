<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	  <title></title>
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/footer.css')}}" rel="stylesheet" />
    <link href="{{asset('css/navbar_danhsach_sp.css')}}" rel="stylesheet" />
	 <style type="text/css" media="screen">
	 	#congratulation-text {
          width: 100%;
          height: 200px;
	 	}
        .dangtin {
            font-weight: bold;

        }
        .content-dangtin {
            margin: 80px;
        }
        .container {
            padding-top: 10px;
            padding-left: 30px;
        }
	 </style>
</head>
<body>
<script  type="text/javascript" charset="utf-8" async defer>
	$("#congratulation-text").keyup(function(){
    $("#text-count").text($(this).val().length + " symbols");
});
</script>
<div class="container">
  @include('layouts.navbar_danhsach_sp')
	<div class="content-dangtin">
        @include('layouts.content-dangtin')
    </div>
</div>
@include('layouts.footer')
</body>
</html>