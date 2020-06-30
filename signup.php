
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<script>
		function myFunction() {
  		var x = document.getElementById("myInput");
  		if (x.type === "password") {
    	x.type = "text";
  		} 
  		else 
  		{
    		x.type = "password";
  		}
	}
	</script>
	<script>
		function myFunction1() {
  		var x = document.getElementById("myInput1");
  		if (x.type === "password") {
    	x.type = "text";
  		} 
  		else 
  		{
    		x.type = "password";
  		}
	}
	</script>
	<script> 
          
            // Function to check Whether both passwords 
            // is same or not. 
            function checkPassword(form) { 
                password1 = form.t1.value; 
                password2 = form.t2.value; 
   				if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                }  
            } 
        </script>
<title>My-tour bootstrap Design website | Home :: w3layouts</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="Users/style.css" rel="stylesheet" type="text/css" />

<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
</head>
<body>

<?php include('function.php'); ?>

<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into users values('" . $_POST["t1"] ."','" . $_POST["t2"] . "')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}
?>



<div class="header-top">
		 <!--container-->
		  <div class="container">
			 <div class="top-nav">
						<div class="logo">
						<a href="#"><img src="images/logo1.png" id="section-1" class="img-responsive" alt=""/></a>
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
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">

</div>
<div class="col-sm-9">




<form method="post" onSubmit = "return checkPassword(this)">
<table border="0" width="400px" height="300px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">SignUp Form</td></tr>
<tr><td class="lefttxt">User Name</td><td><input type="text" name="t1" required pattern="[a-zA-z1 _]{3,50}" title"Please Enter Only Characters and numbers between 3 to 50 for User name" /></td></tr>
<tr><td class="lefttxt">Password</td><td><input type="password" name="t2" id="myInput" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/><br>
	
<input type="checkbox" onclick="myFunction()">Show Password</td></tr>
<tr><td class="lefttxt">Confirm Password</td><td><input type="password" name="t3" id="myInput1" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/><br>
<input type="checkbox" onclick="myFunction1()">Show Password</td></tr>

<tr><td>&nbsp;</td><td ><input type="submit" value="Submit" name="sbmt" /></td></tr>




</table>
</form>



</div>


</div>
<?php include('bottom.php'); ?>
</body>
</html>