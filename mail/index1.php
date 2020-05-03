<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>bliss-ready to assist you website</title>
<link href="css/owl.carousel.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
 //function hideURLbar(){ window.scrollTo(0,1); } 
 
 
 </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
</head>
<body>
<!--header-->
<!--sticky-->
<?php include('function.php'); ?>

<?php include('top.php'); ?>
<!--/sticky-->
<?php include('slider.php'); ?>
<!--About-->
     <div class="about section" id="section-2">
	  <div class="about-head text-center">
	  <h3>about us</h3>
	  <span></span><img src="images/star.png" alt=""><span></span>
	  </div>
	   <div class="container">		  
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon2"></span>save time</h4>
			 <p>as our website try to save your time by assisting you the right 
                        	product to be developed by taking the inputs from customers
                        	according to thier needs and requirement which helps in marketing
                        	your product and grow your company better and bigger</p>
		 </div>
		 <div class="col-md-4 about-grids grid2">
			 <h4><span class="icon2"></span>companies registered</h4>
			 <p>the various companies who are tied up wit us are
                            ,big basket
                            ,oyo
                            ,quikr
                            ,inmobi
                          and the various other companies.</p>
		 </div>
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon2"></span>24*7 Support</h4>
			 <p>we are always here to support your companies grow better and bigger.</p>
             </div> 
		 </div>
	 </div>
</div>
<!--/About-->
<!--top-tours-->	


<div class="tour-guides section" id="section-4" >
	  <div class="tour-guides-head text-center">
		  <h3>Registered companies</h3>
		  <span></span><img src="images/guide.png" alt=""><span></span>
		  <div class="container">
				<p>Here are some of the companies who are tied up with us and are supporting us from the 
				birth of the companies..here are thier information from which you can analyis how well 
			they are growing in the market.</p>
		  </div>
	  </div>
	  <div class="container">
		<!-- requried-jsfiles-for owl -->
				<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
					3.3.		        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
			<!-- //requried-jsfiles-for owl -->
		 <div id="owl-demo" class="owl-carousel">
         
         
          <?php
$s="select * from advertisement";
$result=mysqli_query($cn,$s);

$n=0;
while($data=mysqli_fetch_array($result))
{
	if($n%4==0)
	{
	?>
         
			  <div class="item text-center guide-sliders">
<?php }?>


	<div class="col-md-3 image-grid">
					
					 <p><a href="#"><?php echo $data[2]; ?></a></p>
					 <p><a href="#"><?php echo $data[3]; ?></a></p>
				 </div>
				<?php if($n%4==3)
				{?>
            </div>
   
            <?php
				}
			$n=$n+1;
}
?>
            		  </div>
		</div>
</div>
	
        


<div id="section-5" class="contact section">
	  <div class="contact-head text-center">
		  <h3> SUGGEST US  </h3>
		  <span></span><img src="images/mail.png" alt=""><span></span><br/><br/>
          <h4 style="color:#000">Support Us By Suggesting the product you need!</h4>

		  <div class="contact-grids">
			  <div class="container">
				  <div class="col-md-4 address">
						<h4 style="color:#09F">"BLISS"- ready to assist you</h4>
						<p style="color:#000">NEED HELP<br/>
                         you may  call our  expert</p>
						<h5 style="color:#000"><span class="img1"></span>(+91) 9779730479&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;(+91) 7696303090</h5>
						<h5 style="color:#000"><span class="img2"></span><a href="#">info[at]bliss.com&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;support[at]bliss.com</a></h5>
						<h5 style="color:#000"><span class="img3"></span>1100 High Street, Model Town Phagwara.</h5>
                        <br/>
                       <img src="images/contac.jpg" />
                      </div>
				  <div class="col-md-8 contact">
                  
                  	<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into contactus(Name,Phno,Email,Message) values('" . $_POST["t1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('your message successfully sended');</script>";
}
?>
					  <form method="post">
                      <table border="0" width="700px" height="500px">
                      <tr><td align="left"> <input type="text" class="text" value=" Name"  name="t1" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name';}" required pattern="[a-zA-z1 _]{1,50}" title"Please Enter Only Characters and numbers between 1 to 50 for Name"></td></tr>
                    `  <tr><td align="left"><input type="text" class="text" value=" Contact No" name="t2" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Contact NO';}" required pattern="[0-9]{10,12}" title"Please Enter Only  numbers between 10 to 12 for Contact no"></td></tr>
					 <tr><td align="left"> <input type="text" class="text" value="Email" name="t3" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your mail';}" required></td></tr>
					 <tr><td><textarea onFocus="if(this.value == 'Message') this.value='';" name="t4" onBlur="if(this.value == '') this.value='enter the message Here';" required/ >suggest the product here</textarea></td></tr>
					  <tr><td><input type="submit" value="Send message" name="sbmt"></td></tr></table>
					  <div class="clearfix"></div>
					   </form>
				   </div>
				  <div class="clearfix"></div>
			  </div>
		  </div>
	       



<?php include('bottom.php'); ?>
</body>
</html>

