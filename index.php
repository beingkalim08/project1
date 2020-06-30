
<!DOCTYPE html>
<html>
<head>
<title></title>
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
<div class="header-top">
		 <!--container-->
		  <div class="container">
			 <div class="top-nav">
						<div class="logo">
						<a href="Admin/loginform.php"><img src="images/logo1.png" id="section-1" class="img-responsive" alt=""/></a>
						</div>
						<div class="menu">
						<ul id="nav">
							 <li><a href="index.php#section-1"  onclick="javascript:window.open('index.php#section-1','_self')">                            Home</a></li>
							 <li><a href="index.php#section-2"  onclick="javascript:window.open('index.php#section-2','_self')">                           About</a></li>
							 <li><a href="signup.php" onclick="javascript:window.open('signup.php','_self')">Register</a></li>                           
							<li><a href="Users/loginform.php" onclick="javascript:window.open('Users/loginform.php','_self')">Login</a></li>
							<li><a href="index.php#section-3"   onclick="javascript:window.open('index.php#section-3','_self')">                              Contact Us</a></li>  
							 <div class="clearfix"></div>
						 </ul>
						 </div>
			 </div>
			  <div class="clearfix"> </div>
			

		 </div>
		 <!--/container-->
	 </div>
<?php include('slider.php'); ?>
<!--About-->
     <div class="about section" id="section-2">
	  <div class="about-head text-center">
	  <h3>About Fuzzy Design For Health Care Analytics</h3>
	  <span></span><img src="images/about-img.png" alt=""><span></span>
	  </div>
	   <div class="container">		  
		 <p>Healthcare industry has huge amount of data that contains hidden information. This information supports decision making process on related area. In this research paper, we discussed various approaches of data mining which is predicting the disease. One of the complex tasks in healthcare industry is predicting of disease and it requires more experience and knowledge. Here the system uses 28 parameters for predicting disease that include blood pressure, body pain, age group, drainage system etc. These parameters are used to improve an accuracy level. Our project also provides the required symptoms for a particular disease.</p>
		 
		 
	 </div>
</div>
<!--/About-->
<!--top-tours-->	

<div id="section-3" class="contact section">
	  <div class="contact-head text-center">
		  <h3>Contact Us</h3>
		  <span></span><img src="images/mail.png" alt=""><span></span><br/><br/>
          <h4 style="color:#000">Give Feedback Or You Can Submit Your Query</h4>

		  <div class="contact-grids">
			  <div class="container">
				  <div class="col-md-4 address">
						<h4 style="color:#09F">ABC</h4>
						<p style="color:#000">NEED ANY HELP <br/>
                        For fantastic suggestions you may also call </p>
						<h5 style="color:#000"><span class="img1"></span>(+91) 9113413852&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;(+91)8340528568 </h5>
						<h5 style="color:#000"><span class="img2"></span><a href="#">sk805189@gmail.com&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;wwwashutosh099@gmail.com</a></h5>
						<h5 style="color:#000"><span class="img3"></span>Techno India Batanagar, Kolkata- 700141</h5>
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
	echo "<script>alert('Record Save');</script>";
}
?>
					  <form method="post">
                      <table border="0" width="700px" height="500px">
                      <tr><td align="left"> <input type="text" class="text" value=" Name"  name="t1" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name';}" required pattern="[a-zA-z1 _]{1,50}" title"Please Enter Only Characters and numbers between 1 to 50 for Name"></td></tr>
                      <tr><td align="left"><input type="text" class="text" value=" Contact No" name="t2" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Contact NO';}" required pattern="[0-9]{10,12}" title"Please Enter Only  numbers between 10 to 12 for Contact no"></td></tr>
					 <tr><td align="left"> <input type="text" class="text" value="Email" name="t3" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your mail';}" required></td></tr>
					 <tr><td><textarea onFocus="if(this.value == 'Message') this.value='';" name="t4" onBlur="if(this.value == '') this.value='Enter Message Here';" required/ >Message</textarea></td></tr>
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

