<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	  <title></title>
	
	<link href="{{asset('public/css/dropzone.css')}}" rel="stylesheet" />
	<script src="{{asset('public/js/dropzone.js')}}"></script>

	<link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/footer.css')}}" rel="stylesheet" />
    <link href="{{asset('public/css/navbar_danhsach_sp.css')}}" rel="stylesheet" />
	<script>
    var Dropzone = require("enyo-dropzone");
    Dropzone.autoDiscover = false;
  </script>

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
		 html, body {
        height: 100%;
        }
        #actions {
        margin: 2em 0;
        }


        /* Mimic table appearance */
        div.table {
        display: table;
        }
        div.table .file-row {
        display: table-row;
        }
        div.table .file-row > div {
        display: table-cell;
        vertical-align: top;
        border-top: 1px solid #ddd;
        padding: 8px;
        }
        div.table .file-row:nth-child(odd) {
        background: #f9f9f9;
        }



        /* The total progress gets shown by event listeners */
        #total-progress {
        opacity: 0;
        transition: opacity 0.3s linear;
        }

        /* Hide the progress bar when finished */
        #previews .file-row.dz-success .progress {
        opacity: 0;
        transition: opacity 0.3s linear;
        }

        /* Hide the delete button initially */
        #previews .file-row .delete {
        display: none;
        }

        /* Hide the start and cancel buttons and show the delete button */

        #previews .file-row.dz-success .start,
        #previews .file-row.dz-success .cancel {
        display: none;
        }
        #previews .file-row.dz-success .delete {
        display: block;
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
  @include('frontend.layouts.navbar_2')
	<div class="content-dangtin">
        @include('frontend.layouts.content-dangtin')
    </div>
</div>
@include('frontend.layouts.footer')
</body>
</html>