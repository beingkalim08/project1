<?php
session_start();?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>My-tour bootstrap Design website | Home :: w3layouts</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
<?php
if($_SESSION['loginstatus']=="")
{
  header("location:loginform.php");
}
?>


<?php include('top.php'); ?>
<?php include('function.php'); ?>




<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>

</div>
<div class="col-sm-9">
<h3 style="background-color:Tomato;">Acidity</h3>
<h3 style="background-color:Orange;">Anaemia</h3>
<h3 style="background-color:DodgerBlue;">Anoroxia</h3>
<h3 style="background-color:MediumSeaGreen;">Asthma</h3>
<h3 style="background-color:Gray;">Bronchitis</h3>
<h3 style="background-color:SlateBlue;">Chicken Pox</h3>
<h3 style="background-color:Violet;">Common Cold</h3>
<h3 style="background-color:LightGray;">Dengue</h3>
<h3 style="background-color:Tomato;">Diarrhoea</h3>
<h3 style="background-color:Orange;">Dysentry</h3>
<h3 style="background-color:DodgerBlue;">Enteric Fever</h3>
<h3 style="background-color:MediumSeaGreen;">Gastroentrytis</h3>
<h3 style="background-color:Gray;">Gout</h3>
<h3 style="background-color:SlateBlue;">High Blood Pressure</h3>
<h3 style="background-color:Violet;">Measles</h3>
<h3 style="background-color:LightGray;">Neurities</h3>
<h3 style="background-color:Tomato;">Pneumonia</h3>
<h3 style="background-color:Orange;">Respiratory Track Infection</h3>
<h3 style="background-color:DodgerBlue;">Seabies</h3>
<h3 style="background-color:MediumSeaGreen;">Tuberculosis</h3>
<h3 style="background-color:Gray;">Typhoid</h3>


</div>
</div>
<?php include('bottom.php'); ?>
</body>
</html>