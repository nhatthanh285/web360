		<!doctype html>
		<html lang="en">
		    <head>
		        <meta charset="utf-8">
		        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		        <meta name="viewport" content="width=device-width" />

		        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
		        <link href="bootstrap/css/footer.css" rel="stylesheet" />
		        <link href="bootstrap/css/section.css" rel="stylesheet" />
            <link href="bootstrap/css/navbar.css" rel="stylesheet" />

		        <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8" ></script>
<script src="bootstrap/js/bootstrap.min.min.js" type="text/javascript" charset="utf-8" ></script>

	        </head>
	        <style type="text/css" media="screen">
              body{
              	position: relative;
              }
 

.circle {
 width: 250px;
 height: 250px;
   position:absolute;
   z-index: 1;
   top: 0;
}

.img1 {
  width: 100%;
  height: 100%;
  margin-top: 20vh; 
  margin-left: 23vw; 
}

.show{
   height: 60px;
    width: 100%;
    position:fixed;
    top:0;
    background: red;
    padding-top: 10px;
    z-index: 1;
}

.img2 {
  width: 100%;
  height: 100%;
  margin-top: -120px !important; 
  margin-left: 55vw; 
}
.hidden {
  width: 100%;
  height: 0vh;    
}
</style>

	        
     
      <body>
  <script  type="text/javascript" charset="utf-8" async defer>
    

    window.onscroll = function() {myFunction()};
function myFunction() {

    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        document.getElementById("banner").className = "show";       
    } else {
        document.getElementById("banner").className = "hidden";
    }
}
</script>

          <img id="backgr" src="image/bds.png">
	        <nav id = "banner" class="navbar navbar-default navbar-fixed-top hidden">
        <div class="container">
            <div class="navbar-header"> 
                <div class="navbar-brand">
                    <a class="nav-logo" href="#"><img  src="image/logo.png" class="nav-img-responsive" /></a>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-active"><img src="image/user.png" class="nav-img-use" /></li>
                    <li><a href=""  style="margin: 0 ;padding-top: 10px; ">Đăng Nhập</a></li>
                    <li><a href="" class="nav-dangky" style="margin: 0 ; padding-top: 10px;padding-left: 0;">Đăng Ký</a></li>
                    <li><a href="" class="nav-button"><button  type="button" class="btn btn-warning">Đăng tin</button></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row circle">
       <a href="" title=""><img class="img1" src="image/circle1.gif"></a>
       <a href="" title=""><img class="img2" src="image/circle2.gif"></a>
    </div>

           <div class="container noidung">
           	    <div class="row">
           	    	<div class="col-md-4 section">
                        <a href="https://freetuts.net" ><img class="trangchu-item" src="image/pic10.jpg"></a>
           	    		<h3 class="title">Bất Động Sản Hà Nội</h3>
           	    	</div>
           	        <div class="col-md-4 section">
           	    		<a href=""><img class="trangchu-item"  src="image/pic9.jpg"></a>
           	    		<h3 class="title">Bất Động Sản Hà Nội</h3>

           	    	</div>
           	    	<div class="col-md-4 section">
           	    		<a href=""><img class="trangchu-item"  src="image/pic10.jpg"></a>
           	    		<h3 class="title">Bất Động Sản Hà Nội</h3>
           	    	</div>
           	    </div>

           	     <div class="row">
           	    	<div class="col-md-4 section">
           	    		<a href=""><img class="trangchu-item" src="image/anh.jpg"></a>
           	    		<h3 class="title">Bất Động Sản Hà Nội</h3>
           	    	</div>
           	    	<div class="col-md-4 section">
           	    		<a href=""><img class="trangchu-item" src="image/pic9.jpg"></a>
           	    		<h3 class="title">Bất Động Sản Hà Nội</h3>

           	    	</div>
           	    	<div class="col-md-4 section">
           	    		<a href=""><img class="trangchu-item" src="image/pic10.jpg"></a>
           	    		<h3 class="title">Bất Động Sản Hà Nội</h3>
           	    	</div>
           	    </div>

           	    <div class="row">
           	    	<div class="col-md-4 section">
           	    		<a href=""><img class="trangchu-item" src="image/anh.jpg"></a>
           	    		<h3 class="title">Bất Động Sản Hà Nội</h3>
           	    	</div>
           	    	<div class="col-md-4 section">
           	    		<a href=""><img class="trangchu-item" src="image/pic9.jpg"></a>
           	    		<h3 class="title">Bất Động Sản Hà Nội</h3>

           	    	</div>
           	    	<div class="col-md-4 section">
           	    		<a href=""><img class="trangchu-item" src="image/pic10.jpg"></a>
           	    		<h3 class="title">Bất Động Sản Hà Nội</h3>
           	    	</div>
           	    </div>
           </div>
		       
		<footer color="footer_bds">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 footerleft ">
        <div class="logofooter"> Logo</div>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
        <p><i class="fa fa-map-pin"></i> 210, Aggarwal Tower, Rohini sec 9, New Delhi -        110085, INDIA</p>
        <p><i class="fa fa-phone"></i> Phone (India) : +91 9999 878 398</p>
        <p><i class="fa fa-envelope"></i> E-mail : info@webenlance.com</p>
        
      </div>
      <div class="col-md-2 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">GENERAL LINKS</h6>
        <ul class="footer-ul">
          <li><a href="#"> Career</a></li>
          <li><a href="#"> Privacy Policy</a></li>
          <li><a href="#"> Terms & Conditions</a></li>
          <li><a href="#"> Client Gateway</a></li>
          <li><a href="#"> Ranking</a></li>
          <li><a href="#"> Case Studies</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">LATEST POST</h6>
        <div class="post">
          <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
          <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
          <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--footer start from here-->



      </body>
		 
</html>
