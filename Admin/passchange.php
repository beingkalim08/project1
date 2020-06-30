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
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myFunction1() {
  var x = document.getElementById("myInput2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myFunction2() {
  var x = document.getElementById("myInput3");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<script> 
    function checkPassword(form) { 
        password1 = form.t3.value; 
        password2 = form.t4.value; 
      if (password1 != password2) { 
        alert ("\nPassword did not match: Please try again...") 
        return false; 
        }  
    } 
</script>

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
<?php
if(isset($_POST['Submit']))
{
$oldpass=$_POST['t2'];
 $username=$_POST['t1'];
 $newpassword=$_POST['t3'];
$sql=mysqli_query($con,"SELECT Pwd FROM admin where Pwd='$oldpass' && Username='$username'");
$num=mysqli_fetch_array($sql);

if($num>0)
{
 $con=mysqli_query($con,"update admin set Pwd=' $newpassword' where Username='$username'");
        echo "<script>alert('Password Updated Sucessfully !!!');</script>";
    } else
        echo "<script>alert('Current Password is not correct !!!');</script>";
}
?>




<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>

</div>
<div class="col-sm-9">




<form method="post" onSubmit = "return checkPassword(this)">
<table border="0" width="400px" height="300px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Change Your Password</td></tr>
<tr><td class="lefttxt">User Name</td><td><input type="text" name="t1" required pattern="[a-zA-z1 _]{3,50}" title"Please Enter Only Characters and numbers between 3 to 50 for User name" /></td></tr>
<tr><td class="lefttxt"> Old Password</td><td><input type="password" name="t2" id="myInput" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/><br>
<input type="checkbox" onclick="myFunction()">Show Password</td></tr>
<tr><td class="lefttxt"> New Password</td><td><input type="password" name="t3" id="myInput2" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/><br>
<input type="checkbox" onclick="myFunction1()">Show Password</td></tr>
<tr><td class="lefttxt">Confirm Password</td><td><input type="password" name="t3" id="myInput3"required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/><br>
<input type="checkbox" onclick="myFunction2()">Show Password</td></tr>

<tr><td>&nbsp;</td><td ><input type="submit" value="Submit" name="sbmt" /></td></tr>




</table>
</form>

</div>
</div>
<?php include('bottom.php'); ?>
</body>
</html>