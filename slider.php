<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<!---banner--->
<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			<div id="section-1" class="section">
			    <div id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="images/abc.jpg" alt="">
					  <div class="caption">
			     	  		<div class="header-info">
							<h2><a href="#">WE "BLISS" are here</a></h2>
							<lable></lable>
							<h1><a href="#">TO HELP YOUR COMPANIES GROW BETTER</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/def.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">LET'S KEEP GROWING</a></h2>
							<lable></lable>
							<h1><a href="#">AND GLOWING </a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/ii.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">GROWING IS IMPORTANT</a></h2>
							<lable></lable>
							<h1><a href="#">MORE IMPORTANT IS TO GET  BETTER!</a></h1>
							</div>
			          </div>
			        </li>
					<li>
			          <img src="images/jj.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h1><a href="#">A GOAL WITHOUT A PLAN</a></h1>
							<lable></lable>
							<h2><a href="#">IS JUST A WISH</a></h2>
							</div>
			          </div>
			        </li>
                    <li>
			          <img src="images/yy.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Feel Protected</a></h2>
							<lable></lable>
							<h1><a href="#">BY BEING WITH US
							</a></h1>
							</div>
			          </div>
			        </li>
			      </ul>
			    </div>	         
			    <div class="clearfix"> </div>
				</div>
		<!----- //End-slider---->
<!---banner--->	
</body>
</html>